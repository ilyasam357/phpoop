<?php
require "model/orang.php";

 class Guru extends Orang{
    public function aktifitasGuru(){
        echo "saya ngajar agaama";
    }

    // public function sayHello()
    // {
    //     echo "ini override dari clas children";
    // }
 }