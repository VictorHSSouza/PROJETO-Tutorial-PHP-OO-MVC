<?php 

class Conexao {
    public static $conexao;

    public static function get_instance() {
        $host = 'localhost';
        $dbname = 'primeirocrud';
        $usuario = 'root';
        $senha = '';

        if(!isset(self::$conexao)) {
            self::$conexao = new PDO("mysql:host=$host;dbname=$dbname",$usuario,$senha);//,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf-8'));
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        return self::$conexao;
    }
}