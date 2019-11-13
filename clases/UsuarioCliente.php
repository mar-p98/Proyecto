<?php

class UsuarioCliente extends Usuario{
  private $nombre;
  private $direccion;
  private $telefono;
  private $avatar;
  private $id;
  private $admin;
  private Carrito $carrito;
  private Pedido $pedido;

  public function getNombre() : string
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    return $this->nombre = $nombre;
  }

  public function getDireccion() : string
  {
    return $this->direccion;
  }

  public function setDireccion($dir)
  {
    return $this->direccion = $dir;
  }

  public function getTelefono() : int
  {
    return $this->telefono
  }

  public function setTelefono($tel)
  {
    return $this->telefono = $tel;
  }

  public function getAvatar()
  {
      return $this->avatar
  }

  public function setAvatar($avatar)
  {
    return $this->avatar = $avatar;
  }

  public function getId() : int
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getAdmin() : string
  {
    return $this->admin;
  }

  public function setAdmin($admin)
  {
    return $this->admin = $admin;
  }

  public function getCarrito() : Carrito
  {
    return $this->carrito;
  }

  public function setCarrito($carrito)
  {
    return $this->carrito = $carrito;
  }

  public function getPedido() : Pedido
  {
    return $this->pedido;
  }

  public function setPedido($pedido)
  {
    return $this->pedido = $pedido;
  }


  private function hacerConsulta()
  {
    
  }

  private function seleccionarProducto()
  {

  }

  private function pagar()
  {

  }



}
