<?php

$mahasiswa = [
    [
        "Nama" => "Farrell Edric Kelvianto",
        "NIM" => "2311102079",
        "Nilai Tugas" => 100,
        "Nilai UTS" => 100,
        "Nilai UAS" => 100,
    ],
    [
        "Nama" => "Badadang",
        "NIM" => "2020202020",
        "Nilai Tugas" => 100,
        "Nilai UTS" => 100,
        "Nilai UAS" => 100,
    ],
    [
        "Nama" => "Jajajajaja",
        "NIM" => "3023010230",
        "Nilai Tugas" => 100,
        "Nilai UTS" => 100,
        "Nilai UAS" => 100,
    ],
    [
        "Nama" => "Anonymous",
        "NIM" => "2311102000",
        "Nilai Tugas" => 30,
        "Nilai UTS" => 100,
        "Nilai UAS" => 20,
    ],
];

function nilaiAkhir($a, $b, $c)
{
    return ($a + $b + $c) / 3;
}

function grade($nilai)
{
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 75) return "AB";
    elseif ($nilai >= 60) return "B";
    elseif ($nilai >= 50) return "C";
    elseif ($nilai >= 40) return "D";
    else return "E";
}

$totalNilai = 0;
$nilaiTertinggi = 0;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background: #4CAF50;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #e0f7fa;
            transition: 0.3s;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .tidak {
            color: red;
            font-weight: bold;
        }

        .info {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h2>Data Nilai Mahasiswa</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai Akhir</th>
        <th>Grade</th>
        <th>Status</th>
    </tr>

<?php
foreach ($mahasiswa as $mhs) {
    $nilai = nilaiAkhir($mhs['Nilai Tugas'], $mhs['Nilai UTS'], $mhs['Nilai UAS']);
    $gradeMhs = grade($nilai);
    $status = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

    $totalNilai += $nilai;
    if ($nilai > $nilaiTertinggi) {
        $nilaiTertinggi = $nilai;
    }

    echo "<tr>";
    echo "<td>{$mhs['Nama']}</td>";
    echo "<td>{$mhs['NIM']}</td>";
    echo "<td>" . number_format($nilai, 2) . "</td>";
    echo "<td>$gradeMhs</td>";
    echo "<td>$status</td>";
    echo "</tr>";
}

$rataRata = $totalNilai / count($mahasiswa);
?>

</table>

<br>
<b>Rata-rata:</b> <?php echo number_format($rataRata, 2); ?><br>
<b>Nilai tertinggi:</b> <?php echo number_format($nilaiTertinggi, 2); ?>

</body>
</html>