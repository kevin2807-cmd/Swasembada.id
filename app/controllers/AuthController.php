<?php
class AuthController extends Controller {
    
    // Menampilkan halaman form login
    public function index() {
        // Jika user sudah login, tendang kembali ke Beranda
        if (isset($_SESSION['user_id'])) {
            header('Location: ' . BASEURL);
            exit;
        }

        $data['title'] = 'Login Admin | Swasembada.id';
        
        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }

    // Memproses data dari form
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];

            $user = $this->model('UserModel')->getUser($username);

            // Cek apakah user ada DAN password cocok
            if ($user && password_verify($password, $user['password'])) {
                // Berhasil login: Set Session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                header('Location: ' . BASEURL); // Arahkan ke Beranda
                exit;
            } else {
                // Gagal login: Set pesan error sementara
                $_SESSION['error_login'] = 'Username atau password salah!';
                header('Location: ' . BASEURL . '/auth');
                exit;
            }
        }
    }

    // Memproses logout
    public function logout() {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }
}