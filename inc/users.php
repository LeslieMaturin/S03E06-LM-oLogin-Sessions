<?php

$users = [
  "Arthur" => [
    // "pass" => 'kaamelott', // Pour venir chercher cette donnée, on tape $user['Arthur']['pass']
    "pass" => '$2y$10$qn9xXlv/fsXYZ73sfaVAj.Yvbs6qRSnXN.XLHJx14COC14AOEkNwK', //password_hash('kaamelott', PASSWORD_BCRYPT)
    "data" => [
      "role" => 'Roi de Bretagne',
      "age" => 37,
      "gimmick" => 'à la volette'
    ]
  ],
  "Perceval" => [
    // "pass" => 'pas faux',
    "pass" => '$2y$10$erhCdSwKFCXwmsuhsHe6QeDAptj1g0RkoYu9/1D2PUZxUK1vMX2RW',
    "data" => [
      "role" => 'Chevalier',
      "age" => 39,
      "gimmick" => 'Provencal le Gaulois'
    ]
  ],
  "Lancelot" => [
    // "pass" => 'Guenièvre',
    "pass" => '$2y$10$81/HAbAbZC5MkfI4lBPD7.jelvgjtagbsINKkZ19X/7XZTkxCPxxO',
    "data" => [
      "role" => 'Bras droit',
      "age" => 35,
      "gimmick" => 'Je me réserve pour le grand amour'
    ]
  ],
];