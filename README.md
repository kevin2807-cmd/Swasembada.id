# Swasembada.id - Portal Informasi Ketahanan Pangan

Aplikasi ini dibangun menggunakan arsitektur **MVC (Model-View-Controller) Native PHP** tanpa *framework*. Aplikasi ini memuat informasi ketahanan pangan yang mencakup beranda, data komoditas, statistik harga pangan, peta ketahanan pangan interaktif, dan dilengkapi dengan sistem autentikasi (login) serta form kontak.

## Prasyarat Sistem
Pastikan perangkat Anda sudah terinstal:
* **XAMPP** (dengan PHP versi 7.4 atau yang lebih baru)
* **Git** (opsional, jika ingin melakukan instalasi melalui terminal)

---

## Langkah-langkah Instalasi & Penggunaan

### 1. Unduh atau Clone Repositori
Anda perlu meletakkan *source code* ini ke dalam folder *Document Root* web server Anda. Jika menggunakan XAMPP di Windows, lokasinya berada di `C:\xampp\htdocs\`.

Buka Terminal atau Command Prompt, lalu jalankan perintah berikut:
```
    cd C:\xampp\htdocs
    git clone [https://github.com/username-anda/swasembada.git](https://github.com/username-anda/swasembada.git)
```

### 2. Nyalakan Web Server
Buka aplikasi XAMPP Control Panel, lalu klik tombol Start pada modul Apache dan MySQL.

### 3. Konfigurasi Database (phpMyAdmin)
1. Aplikasi ini membutuhkan database MySQL untuk sistem login admin.
2. Buka browser Anda dan akses [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Buat database baru dengan nama db_swasembada.

Klik pada database yang baru saja dibuat, masuk ke tab SQL, lalu salin dan jalankan (Go) perintah berikut untuk membuat tabel dan akun admin:
**Sebelum itu buat terlebih dahulu hash password yang akan disimpan dalam database dapat dilihat dari** `https://bcrypt-generator.com/`
```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
);
```

### 4. Menjalankan Aplikasi
Buka browser dan ketikkan alamat berikut di bilah URL:
http://localhost/Swasembada/public

Karena aplikasi ini dilengkapi Global Route Guard, Anda akan langsung diarahkan ke halaman Login. Silakan masuk menggunakan kredensial bawaan berikut:
- Username: admin
- Password: [Password yang kamu buat saat hash]
Setelah masuk, Anda memiliki akses penuh ke seluruh fitur Swasembada.id.

### 5. Penggunaan Fitur
Anda dapat menjelajahi fitur-fitur berikut yang tersedia pada navigasi atas:
* **Beranda**: Halaman utama dengan informasi visual singkat.
* **Data Pangan & Komoditas**: Detail harga dan jenis komoditas pangan nasional.
* **Statistik Pangan**: Visualisasi data dan tren produksi pangan.
* **Peta Ketahanan Pangan**: Peta interaktif yang menampilkan status ketahanan pangan antar provinsi.


