<?php
// require "model/santri.php";
require "model/guru.php";

// $santri1 = new Santri();
// $santri1 ->set_nama("arga");
// $santri1 ->set_hobi("mancing");
// $santri1 ->set_umur(15);

// var_dump($santri1);

// $santri2 = new Santri("arga", "mancig", 15);
// var_dump($santri2);

$guru1 = new Guru("muhammad", 34);

$guru1->sayHello();

// $guru1->aktifitasGuru();