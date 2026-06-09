<?php
class HomeController extends Controller {
    
    public function index() {
        $data['title'] = 'Beranda | Swasembada.id';
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function kirimPesan() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = htmlspecialchars(trim($_POST['nama']));
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
            $pesan = htmlspecialchars(trim($_POST['pesan']));

            $email_admin = "admin@swasembada.id"; 
            $subject = "Pesan Baru dari Pengunjung Swasembada.id: " . $nama;
            $body = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan\n";
            $headers = "From: noreply@swasembada.id\r\n";
            $headers .= "Reply-To: $email\r\n";

            if (mail($email_admin, $subject, $body, $headers)) {
                $_SESSION['msg_kontak'] = '<div style="color: #2D6A4F; background: #d8f3dc; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-weight: 600; font-size: 0.9rem;">Pesan Anda berhasil dikirim! Kami akan segera meresponnya.</div>';
            } else {
                $_SESSION['msg_kontak'] = '<div style="color: #9d0208; background: #ffe5d9; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-weight: 600; font-size: 0.9rem;">Maaf, sistem gagal mengirim pesan. Silakan coba lagi nanti.</div>';
            }

            header('Location: ' . BASEURL . '#kontak');
            exit;
        }
    }
}