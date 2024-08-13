<?php

class LoginModel extends Mysql
{
    private $intIdeUsuario;
    private $intIdentificacion;
    private $strPassword;

    public function loginUser(string $identificacion, string $password)
    {
        $this->$intIdentificacion = $identificacion;
        $this->strPassword = $password;
        $sql = "SELECT ide_usuario, estado FROM tbl_usuarios WHERE
					identifiacion = '$this->strIdentificacion' and
					password = '$this->strPassword' and
					estado != 0 ";
        $request = $this->select($sql);
        return $request;
    }

}

