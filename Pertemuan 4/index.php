<?php
header('Content-Type: application/json');

// Simulasi database
$data = [
    [
        'nama' => 'Budi',
        'pekerjaan' => 'Web Developer',
        'lokasi' => 'Jakarta'
    ],
    [
        'nama' => 'Siti',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Bandung'
    ],
    [
        'nama' => 'Andi',
        'pekerjaan' => 'Data Scientist',
        'lokasi' => 'Surabaya'
    ]
];

// Kirim sebagai JSON
echo json_encode($data);