<?php
class StatistikModel {
    private $statistik = [
        [
            'nama' => 'Beras Medium', 'satuan' => '/kg', 'max' => 15000,
            'jawa' => 12861, 'jawa_lbl' => '12.8k', 'jawa_rp' => 'Rp 12.861',
            'sumatra' => 13550, 'sumatra_lbl' => '13.5k', 'sumatra_rp' => 'Rp 13.550',
            'sulawesi' => 14200, 'sulawesi_lbl' => '14.2k', 'sulawesi_rp' => 'Rp 14.200'
        ],
        [
            'nama' => 'Jagung', 'satuan' => '/kg', 'max' => 15000,
            'jawa' => 7280, 'jawa_lbl' => '7.2k', 'jawa_rp' => 'Rp 7.280',
            'sumatra' => 7690, 'sumatra_lbl' => '7.6k', 'sumatra_rp' => 'Rp 7.690',
            'sulawesi' => 8100, 'sulawesi_lbl' => '8.1k', 'sulawesi_rp' => 'Rp 8.100'
        ],
        [
            'nama' => 'Kedelai', 'satuan' => '/kg', 'max' => 15000,
            'jawa' => 13211, 'jawa_lbl' => '13.2k', 'jawa_rp' => 'Rp 13.211',
            'sumatra' => 13950, 'sumatra_lbl' => '13.9k', 'sumatra_rp' => 'Rp 13.950',
            'sulawesi' => 14700, 'sulawesi_lbl' => '14.7k', 'sulawesi_rp' => 'Rp 14.700'
        ],
        [
            'nama' => 'Bawang Merah', 'satuan' => '/kg', 'max' => 40000,
            'jawa' => 35025, 'jawa_lbl' => '35k', 'jawa_rp' => 'Rp 35.025',
            'sumatra' => 37100, 'sumatra_lbl' => '37.1k', 'sumatra_rp' => 'Rp 37.100',
            'sulawesi' => 39200, 'sulawesi_lbl' => '39.2k', 'sulawesi_rp' => 'Rp 39.200'
        ],
        [
            'nama' => 'Bawang Putih', 'satuan' => '/kg', 'max' => 40000,
            'jawa' => 29020, 'jawa_lbl' => '29k', 'jawa_rp' => 'Rp 29.020',
            'sumatra' => 30800, 'sumatra_lbl' => '30.8k', 'sumatra_rp' => 'Rp 30.800',
            'sulawesi' => 32500, 'sulawesi_lbl' => '32.5k', 'sulawesi_rp' => 'Rp 32.500'
        ],
        [
            'nama' => 'Cabai Merah', 'satuan' => '/kg', 'max' => 50000,
            'jawa' => 39981, 'jawa_lbl' => '39.9k', 'jawa_rp' => 'Rp 39.981',
            'sumatra' => 42500, 'sumatra_lbl' => '42.5k', 'sumatra_rp' => 'Rp 42.500',
            'sulawesi' => 48500, 'sulawesi_lbl' => '48.5k', 'sulawesi_rp' => 'Rp 48.500'
        ],
        [
            'nama' => 'Telur Ayam', 'satuan' => '/kg', 'max' => 30000,
            'jawa' => 25870, 'jawa_lbl' => '25.8k', 'jawa_rp' => 'Rp 25.870',
            'sumatra' => 27200, 'sumatra_lbl' => '27.2k', 'sumatra_rp' => 'Rp 27.200',
            'sulawesi' => 28900, 'sulawesi_lbl' => '28.9k', 'sulawesi_rp' => 'Rp 28.900'
        ],
        [
            'nama' => 'Minyak Goreng', 'satuan' => '/liter', 'max' => 30000,
            'jawa' => 20499, 'jawa_lbl' => '20.4k', 'jawa_rp' => 'Rp 20.499',
            'sumatra' => 21650, 'sumatra_lbl' => '21.6k', 'sumatra_rp' => 'Rp 21.650',
            'sulawesi' => 22900, 'sulawesi_lbl' => '22.9k', 'sulawesi_rp' => 'Rp 22.900'
        ]
    ];

    public function getAllStatistik() {
        return $this->statistik;
    }
}