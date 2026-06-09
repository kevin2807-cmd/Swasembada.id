<?php
class PetaController extends Controller {
    public function index($page = 1) {
        $page = (int)$page;
        if ($page < 1) $page = 1;

        $model = $this->model('WilayahModel')->getAllWilayah();
        
        if ($page === 1) {
            $data['wilayah'] = array_slice($model, 0, 18);
            $data['next_page'] = BASEURL . '/peta/index/2';
            $data['prev_page'] = null;
        } else {
            $data['wilayah'] = array_slice($model, 18);
            $data['next_page'] = null;
            $data['prev_page'] = BASEURL . '/peta/index/1';
        }

        $data['title'] = 'Peta Ketahanan Pangan | Swasembada.id';
        $data['css'] = 'peta.css';
        $data['page'] = $page;

        $this->view('templates/header', $data);
        $this->view('peta/index', $data);
        $this->view('templates/footer');
    }
}