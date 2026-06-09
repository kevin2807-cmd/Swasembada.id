<?php
class KomoditasController extends Controller {
    public function index() {
        $data['title'] = 'Komoditas Unggulan | Swasembada.id';
        $data['css'] = 'komoditas.css'; // Memanggil public/assets/css/komoditas.css
        
        // Ambil data dari Model
        $data['komoditas'] = $this->model('KomoditasModel')->getAllKomoditas();

        // Lempar ke View
        $this->view('templates/header', $data);
        $this->view('komoditas/index', $data);
        $this->view('templates/footer');
    }
}