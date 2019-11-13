<?php

abstract class Usuario{
  private $nombre;
  private $email;
  private $password;



  public function __construct(string $email, string $password){
    $this->setEmail($email);
    $this->setPassword($password);
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nom)
  {
    return $this->nombre = $nom;
  }

  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }

  public function getPassword(){
    return $this->password;
  }
  public function setPassword($password){
    $this->encriptarPass($password);
  }


//  private function encriptarPass(string $hash){
//    $this->contrasena = password_hash($hash, PASSWORD_DEFAULT);
//  }


}
