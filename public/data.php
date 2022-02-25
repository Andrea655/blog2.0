
<?php
class db{
    private $hote = 'localhost'; // le chemin vers le serveur
    private $base = 'users'; // le nom de votre base de donnée
    private $utilisateur = 'root'; // nom d'utilisateur pour se connecter
    private $pass = ''; //mot de passe pour se connecter
    private $db;
 
    public function __construct($hote= null, $base=null, $utilisateur=null, $pass=null){
        if($hote != null){
            $this->hote = $hote;
            $this->base = $base;
            $this->utlisateur = $utilisateur;
            $this->pass = $pass;
        }
        try{
            $this->db = new PDO('mysql:host='.$this->hote.';dbname='.$this->base, $this->utilisateur, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ));
        }catch(PDOException $e){
            die('<h1>Impossible de se connecter</h1>');
