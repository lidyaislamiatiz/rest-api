<?php

// $mahasiswa = [
//     [
//         "nama" => " Lidya",
//         "nrp" => "173040104",
//         "email" => "Lidyai@unpas.ac.id"
//     ],
//     [
//         "nama" => " Lidya",
//         "nrp" => "173040104",
//         "email" => "Lidyai@unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=lidya', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;
