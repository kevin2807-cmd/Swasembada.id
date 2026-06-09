<?php
class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        
        // 1. Deteksi rute/controller apa yang sedang diminta oleh user
        $requestedController = isset($url[0]) ? strtolower($url[0]) : 'home';

        // 2. GLOBAL ROUTE GUARD (Sistem Proteksi Menyeluruh)
        // Jika SESSION user_id tidak ada DAN user TIDAK sedang mengakses halaman 'auth'
        if (!isset($_SESSION['user_id']) && $requestedController !== 'auth') {
            // Paksa redirect ke halaman login
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        // 3. Jika lolos guard (sudah login atau memang mau ke page auth), lanjutkan routing seperti biasa
        if (isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Cek Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Kelola Parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan Controller & Method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }
}