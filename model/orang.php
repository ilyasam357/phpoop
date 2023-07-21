<?php

class Orang{
  public $nama, $umur;

  public function __construct($nama, $umur){
    $this->nama = $nama;
    $this->umur = $umur;
  }

  final function sayHello(){
    echo "halo nama saya {$this->nama} dan umur saya 
    {$this->umur}";
  }
}