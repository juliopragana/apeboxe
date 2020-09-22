<?php

class Banco
{
    private static $dbNome = 'peboxe';
    private static $dbHost = 'mysql995.umbler.com';
    private static $dbUsuario = 'peboxe';
    private static $dbSenha = 'peboxe1234';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
