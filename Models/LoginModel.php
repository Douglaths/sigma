<?php

class LoginModel extends Mysql
{
    private $intIdUsuario;
    private $strUsuario;
    private $strPassword;

    public function __construct()
    {
        parent::__construct();
    }

    public function loginUser(string $usuario, string $password)
    {
        $this->strUsuario = $usuario;
        $this->strPassword = $password;
        $sql = "SELECT ide_usuario,status FROM tbl_usuarios WHERE
					identificacion = '$this->strUsuario' and
					password = '$this->strPassword' and
					status != 0 ";
        $request = $this->select($sql);
        return $request;
    }

    public function sessionLogin(int $iduser)
    {
        $this->intIdUsuario = $iduser;
        //BUSCAR ROL
        $sql = "SELECT p.ide_usuario,
							p.identificacion,
							r.idrol,
                            r.nombrerol,
							p.status
					FROM tbl_usuarios p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.ide_usuario = $this->intIdUsuario";
        $request = $this->select($sql);
        $_SESSION['userData'] = $request;
        return $request;
    }

    // public function getUserEmail(string $strEmail)
    // {
    //     $this->strUsuario = $strEmail;
    //     $sql = "SELECT idecliente,nombres,apellidos,status FROM tbl_clientes WHERE
    //                 emailcliente = '$this->strUsuario' and
    //                 status = 1 ";
    //     $request = $this->select($sql);
    //     return $request;
    // }

    // public function setTokenUser(int $idpersona, string $token)
    // {
    //     $this->intIdUsuario = $idpersona;
    //     $this->strToken = $token;
    //     $sql = "UPDATE tbl_clientes SET token = ? WHERE idecliente = $this->intIdUsuario ";
    //     $arrData = array($this->strToken);
    //     $request = $this->update($sql, $arrData);
    //     return $request;
    // }

    // public function getUsuario(string $email, string $token)
    // {
    //     $this->strUsuario = $email;
    //     $this->strToken = $token;
    //     $sql = "SELECT idecliente FROM tbl_clientes WHERE
    //                 emailcliente = '$this->strUsuario' and
    //                 token = '$this->strToken' and
    //                 status = 1 ";
    //     $request = $this->select($sql);
    //     return $request;
    // }

    // public function insertPassword(int $idPersona, string $password, string $email)
    // {
    //     $this->strUsuario = $email;
    //     $this->intIdUsuario = $idPersona;
    //     $this->strPassword = $password;
    //     $sql = "UPDATE tbl_clientes SET password = ?, token = ? WHERE idecliente = $this->intIdUsuario || emailcliente = '$this->strUsuario' ";
    //     $arrData = array($this->strPassword, "");
    //     $request = $this->update($sql, $arrData);
    //     return $request;
    // }
}