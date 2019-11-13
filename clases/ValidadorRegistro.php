<?php

class ValidadorRegistro extends Validador{
  private $email;
  private $password;
  private $confirm_pass;
  private $avatar;
  //revisar self::LIMITE_PASSWORD
  //revisar validaciones

  public function __construct(string $email, string $password){
    $this->setEmail($email);
    $this->setPassword($pass);
  }

  public function getEmail() : string
  {
    return $this->email;
  }
  public function setEmail($email) : string
  {
    return $this->email = $email;
  }

  public function getPassword() : string
  {
    return $this->password;
  }
  public function setPassword($pass) : string
  {
    return $this->password = $pass;
  }

  public function validar() : array
  {
    $errores = [];
    if (!$this->validarEmail($this->getEmail())) {
        $errores['email'] = 'El Email es invalido';
    }
    if (!$this->validarPass($this->getPassword())) {
        $errores['password'] = 'Es contraseña es muy corta, debe tener al menos ' . self::LIMITE_PASSWORD . ' caracteres';
    }
    if (!$errores) {
        $usuarioBD = BaseDeDatos::buscarUsuarioEmail($this->getEmail());
        if (!$usuarioBD) {
            $errores['email'] = 'Usuario o clave invalidos';
        } else {
            if (!password_verify($this->getPassword(), $usuarioBD['password'] )) {
                $errores['email'] = 'Usuario o clave invalidos';
            }
        }
    }
    return $errores;
  }




}
