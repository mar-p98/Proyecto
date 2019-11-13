<?php

abstract class Usuario{

  private $email;
  private $contrasena;



  public function __construct(string $email, string $contrasena){
    $this->setEmail($email);
    $this->setContrasena($contrasena);
  }


  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }

  public function getContrasena(){
    return $this->contrasena;
  }
  public function setContrasena($contrasena){
    $this->encriptarPass($contrasena);
  }

/*  public function getTelefono(){
    return $this->telefono;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
*/   //en el proyecto tenemos Telefono, modificar despues


  private function encriptarPass(string $hash){
    $this->contrasena = password_hash($hash, PASSWORD_DEFAULT);
  }


}
