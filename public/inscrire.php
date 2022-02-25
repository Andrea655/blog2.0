
<?php
class inscription{
    private $db;
    public function __construct($db){
    $this->db = $db;
    }
//Déclaration
public $nom;
public $prenom;
public $tel;
public $mail;
public $adresse;
public $cp;
public $ville;
public $login;
public $pass;
public $salt = 'po1kuFz23ukDm4l';
public $active = 0;
public $token_mail = 'cbcvnbgnbvnvbn';
 
public function getform(){ // affiché formulaire
    ?><form action="envoie.php" method="post" id="envoie">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="" />
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" />
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail" value="" />
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" id="pass" value="" />
        <input type="submit" value="Submit" />
    </form>
    <?php }
 
public function cryptpass($pass) // protégé mot de passe
    {
    $this->pass = sha1($pass . $salt);
    }      
     
public function verif_null($var) // verifie si champs posté est null
    {
      return (!empty($var)) ? filter_var($var, FILTER_SANITIZE_STRING) : null;
    }
     
public function verif_mail($var) // verifie mail
    {
      return (filter_var($var, FILTER_SANITIZE_EMAIL)) ? $var : null;
    }

 
 
public function envoiform(){  // envoie formulaire si ok
$membre = $db->db->prepare('INSERT INTO membre VALUES (:nom, :prenom, :tel, :mail, :adresse, :cp, :ville, :login, :pass, :token_mail, :active)');
$membre->execute(array(
    ":nom" => $nom,
    ":prenom" => $prenom,
    ":mail" => $mail,
    ":pass" => $pass,
    ));
 
}
 
} //.fin Inscription
?>
