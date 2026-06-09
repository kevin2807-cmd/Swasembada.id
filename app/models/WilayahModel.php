<?php
class WilayahModel {
    private $wilayah = [
        ['id' => 'aceh', 'nama' => 'Aceh', 'display' => 'Aceh', 'status' => 'aman', 'skor' => 82, 'komoditas' => 'Kopi, Padi'],
        ['id' => 'sumut', 'nama' => 'Sumatera Utara', 'display' => 'Sumut', 'status' => 'aman', 'skor' => 80, 'komoditas' => 'Sawit'],
        ['id' => 'sumbar', 'nama' => 'Sumatera Barat', 'display' => 'Sumbar', 'status' => 'was', 'skor' => 70, 'komoditas' => 'Cabai'],
        ['id' => 'riau', 'nama' => 'Riau', 'display' => 'Riau', 'status' => 'was', 'skor' => 68, 'komoditas' => 'Sawit'],
        ['id' => 'kepri', 'nama' => 'Kepulauan Riau', 'display' => 'Kepri', 'status' => 'aman', 'skor' => 80, 'komoditas' => 'Padi'],
        ['id' => 'jambi', 'nama' => 'Jambi', 'display' => 'Jambi', 'status' => 'aman', 'skor' => 75, 'komoditas' => 'Karet'],
        ['id' => 'bengkulu', 'nama' => 'Bengkulu', 'display' => 'Bengkulu', 'status' => 'raw', 'skor' => 60, 'komoditas' => 'Padi'],
        ['id' => 'sumsel', 'nama' => 'Sumatera Selatan', 'display' => 'Sumsel', 'status' => 'aman', 'skor' => 78, 'komoditas' => 'Padi'],
        ['id' => 'lampung', 'nama' => 'Lampung', 'display' => 'Lampung', 'status' => 'aman', 'skor' => 79, 'komoditas' => 'Jagung'],
        ['id' => 'dki', 'nama' => 'DKI Jakarta', 'display' => 'DKI', 'status' => 'aman', 'skor' => 85, 'komoditas' => 'Distribusi'],
        ['id' => 'jabar', 'nama' => 'Jawa Barat', 'display' => 'Jabar', 'status' => 'aman', 'skor' => 85, 'komoditas' => 'Padi'],
        ['id' => 'jateng', 'nama' => 'Jawa Tengah', 'display' => 'Jateng', 'status' => 'aman', 'skor' => 84, 'komoditas' => 'Padi'],
        ['id' => 'jatim', 'nama' => 'Jawa Timur', 'display' => 'Jatim', 'status' => 'aman', 'skor' => 86, 'komoditas' => 'Padi'],
        ['id' => 'banten', 'nama' => 'Banten', 'display' => 'Banten', 'status' => 'was', 'skor' => 72, 'komoditas' => 'Industri'],
        ['id' => 'diy', 'nama' => 'Daerah Istimewa Yogyakarta', 'display' => 'DIY', 'status' => 'aman', 'skor' => 84, 'komoditas' => 'Padi'],
        ['id' => 'bali', 'nama' => 'Bali', 'display' => 'Bali', 'status' => 'aman', 'skor' => 88, 'komoditas' => 'Pariwisata'],
        ['id' => 'ntb', 'nama' => 'NTB', 'display' => 'NTB', 'status' => 'was', 'skor' => 70, 'komoditas' => 'Jagung'],
        ['id' => 'ntt', 'nama' => 'NTT', 'display' => 'NTT', 'status' => 'raw', 'skor' => 58, 'komoditas' => 'Jagung'],

        ['id' => 'kalbar', 'nama' => 'Kalbar', 'display' => 'Kalbar', 'status' => 'aman', 'skor' => 80, 'komoditas' => 'Sawit'],
        ['id' => 'kalteng', 'nama' => 'Kalteng', 'display' => 'Kalteng', 'status' => 'was', 'skor' => 70, 'komoditas' => 'Sawit'],
        ['id' => 'kalsel', 'nama' => 'Kalsel', 'display' => 'Kalsel', 'status' => 'aman', 'skor' => 78, 'komoditas' => 'Padi'],
        ['id' => 'kaltim', 'nama' => 'Kaltim', 'display' => 'Kaltim', 'status' => 'aman', 'skor' => 82, 'komoditas' => 'Tambang'],
        ['id' => 'kaltara', 'nama' => 'Kaltara', 'display' => 'Kaltara', 'status' => 'was', 'skor' => 69, 'komoditas' => 'Hutan'],
        ['id' => 'sulut', 'nama' => 'Sulut', 'display' => 'Sulut', 'status' => 'aman', 'skor' => 81, 'komoditas' => 'Perikanan'],
        ['id' => 'sulteng', 'nama' => 'Sulteng', 'display' => 'Sulteng', 'status' => 'was', 'skor' => 72, 'komoditas' => 'Kakao'],
        ['id' => 'sulsel', 'nama' => 'Sulsel', 'display' => 'Sulsel', 'status' => 'aman', 'skor' => 85, 'komoditas' => 'Padi'],
        ['id' => 'sultra', 'nama' => 'Sultra', 'display' => 'Sultra', 'status' => 'was', 'skor' => 71, 'komoditas' => 'Jagung'],
        ['id' => 'gorontalo', 'nama' => 'Gorontalo', 'display' => 'Gorontalo', 'status' => 'aman', 'skor' => 79, 'komoditas' => 'Jagung'],
        ['id' => 'sulbar', 'nama' => 'Sulbar', 'display' => 'Sulbar', 'status' => 'was', 'skor' => 68, 'komoditas' => 'Sawit'],
        ['id' => 'babel', 'nama' => 'Babel', 'display' => 'Babel', 'status' => 'aman', 'skor' => 86, 'komoditas' => 'Tambang'],
        ['id' => 'maluku', 'nama' => 'Maluku', 'display' => 'Maluku', 'status' => 'was', 'skor' => 65, 'komoditas' => 'Perikanan'],
        ['id' => 'malut', 'nama' => 'Malut', 'display' => 'Malut', 'status' => 'raw', 'skor' => 60, 'komoditas' => 'Perikanan'],
        ['id' => 'papua', 'nama' => 'Papua', 'display' => 'Papua', 'status' => 'raw', 'skor' => 55, 'komoditas' => 'Sagu'],
        ['id' => 'papuabarat', 'nama' => 'Papua Barat', 'display' => 'Papua Barat', 'status' => 'raw', 'skor' => 57, 'komoditas' => 'Sagu'],
        ['id' => 'papuaselatan', 'nama' => 'Papua Selatan', 'display' => 'Papua Selatan', 'status' => 'raw', 'skor' => 54, 'komoditas' => 'Sagu'],
        ['id' => 'papuatengah', 'nama' => 'Papua Tengah', 'display' => 'Papua Tengah', 'status' => 'raw', 'skor' => 53, 'komoditas' => 'Sagu'],
        ['id' => 'papuapegunungan', 'nama' => 'Papua Pegunungan', 'display' => 'Papua Pegunungan', 'status' => 'raw', 'skor' => 52, 'komoditas' => 'Sagu'],
        ['id' => 'papuabaratdaya', 'nama' => 'Papua Barat Daya', 'display' => 'Papua Barat Daya', 'status' => 'raw', 'skor' => 55, 'komoditas' => 'Sagu']
    ];

    public function getAllWilayah() {
        return $this->wilayah;
    }
}