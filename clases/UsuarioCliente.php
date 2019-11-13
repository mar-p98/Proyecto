<?php

class UsuarioCliente extends Usuario{
  private $direccion;
  private $telefono;
  private $avatar;
  private $admin;


  public function getDireccion() : string
  {
    return $this->direccion;
  }

  public function setDireccion($dir) : string
  {
    return $this->direccion = $dir;
  }

  public function getTelefono() :
  {
    return $this->telefono
  }

  public function setTelefono($tel) :
  {
    return $this->telefono = $tel;
  }

  public function getAvatar() : string
  {
      return $this->avatar
  }

  public function setAvatar($avatar) : string
  {
    return $this->avatar = $avatar;
  }


  public function getAdmin() : boolean
  {
    return $this->admin;
  }

  public function setAdmin($admin)
  {
    return $this->admin = $admin;
  }

  public function getCarrito() : boolean
  {
    return $this->carrito;
  }


  private function pagar()
  {
    
  }



}
