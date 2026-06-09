<?php
class StatistikController extends Controller {
    public function index() {
        $data['title'] = 'Data & Statistik Pangan | Swasembada.id';
        $data['css'] = 'statistik.css'; 
        
        $data['statistik'] = $this->model('StatistikModel')->getAllStatistik();

        $this->view('templates/header', $data);
        $this->view('statistik/index', $data);
        $this->view('templates/footer');
    }
}