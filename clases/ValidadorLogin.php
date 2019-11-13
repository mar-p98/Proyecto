<?php

class ValidadorLogin extends Validador{
  private $email;
  private $password;

  public function __construct(string $email, string $pass) {
    $this->setEmail($email);
    $this->setPassword($pass);
  }

  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
    return $this->email = $email;
  }

  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword($pass)
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
        $errores['password'] = 'La contraseña es muy corta, debe tener al menos ' . self::LIMITE_PASSWORD . ' caracteres';
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
