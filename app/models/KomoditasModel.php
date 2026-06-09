<?php
class KomoditasModel {
    private $komoditas = [
        [
            'id' => 'padi',
            'kategori' => 'pangan',
            'icon' => '🌾',
            'nama' => 'Padi & Beras',
            'deskripsi' => 'Padi merupakan tanaman pangan utama Indonesia yang dibudidayakan di sawah. Beras sebagai hasil olahannya menjadi makanan pokok lebih dari 270 juta penduduk Indonesia. Indonesia termasuk salah satu produsen padi terbesar di dunia, dengan sentra produksi utama di Jawa, Sumatera, dan Sulawesi.'
        ],
        [
            'id' => 'jagung',
            'kategori' => 'pangan',
            'icon' => '🌽',
            'nama' => 'Jagung',
            'deskripsi' => 'Jagung adalah komoditas serbaguna yang digunakan sebagai bahan pangan manusia sekaligus pakan ternak unggas dan sapi. Di Indonesia, jagung banyak ditanam di Jawa Timur, NTB, dan Gorontalo. Selain dikonsumsi langsung, jagung juga diolah menjadi tepung maizena, minyak jagung, dan bahan baku industri pangan.'
        ],
        [
            'id' => 'kedelai',
            'kategori' => 'pangan',
            'icon' => '🫘',
            'nama' => 'Kedelai',
            'deskripsi' => 'Kedelai adalah bahan baku utama produk olahan protein nabati seperti tempe, tahu, dan kecap yang menjadi lauk sehari-hari masyarakat Indonesia. Sebagian besar kebutuhan kedelai nasional masih dipenuhi melalui impor, sehingga komoditas ini memiliki peran strategis dalam ketahanan pangan nasional.'
        ],
        [
            'id' => 'sayuran',
            'kategori' => 'horti',
            'icon' => '🥬',
            'nama' => 'Sayuran',
            'deskripsi' => 'Sayuran mencakup berbagai komoditas hortikultura seperti bayam, kangkung, wortel, cabai, tomat, dan bawang. Kaya akan vitamin, mineral, dan serat, sayuran menjadi komponen penting dalam gizi seimbang masyarakat. Produksinya tersebar luas di dataran tinggi seperti Dieng, Malang, dan Berastagi.'
        ],
        [
            'id' => 'daging',
            'kategori' => 'ternak',
            'icon' => '🐄',
            'nama' => 'Daging Sapi',
            'deskripsi' => 'Daging sapi, ayam, dan kambing merupakan sumber protein hewani penting yang mengandung asam amino esensial, zat besi, dan vitamin B12. Subsektor peternakan juga menghasilkan produk turunan seperti susu dan telur. Pengembangan ternak lokal terus didorong untuk mengurangi ketergantungan pada daging impor.'
        ],
        [
            'id' => 'ikan',
            'kategori' => 'ikan',
            'icon' => '🐟',
            'nama' => 'Perikanan Tangkap',
            'deskripsi' => 'Indonesia sebagai negara maritim memiliki potensi perikanan yang sangat besar, baik perikanan tangkap maupun budidaya. Ikan menjadi sumber protein utama yang terjangkau bagi masyarakat luas. Komoditas unggulan meliputi ikan tuna, bandeng, lele, udang, dan rumput laut yang juga diekspor ke berbagai negara.'
        ]
    ];

    public function getAllKomoditas() {
        return $this->komoditas;
    }
}