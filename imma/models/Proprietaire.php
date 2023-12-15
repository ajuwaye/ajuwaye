<?php
class Proprietaire{
    
    private $nom;
    private $prenom;
    private $adresse;  
    private $numtel;
    private $email;

    
    public function __construct($nom,$prenom,$adresse,$numtel,$email)
    {
       
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numtel = $numtel;
        $this->email = $email;
    }
    public function enregistrerPropietaire()
    {
        global $db;
        $result = false;

      
        $nom = $this->nom;
        $prenom = $this->prenom;
        $adresse = $this->adresse;
        $numtel = $this->numtel;
        $email = $this->email;

        $requete = "INSERT INTO proprietaire (
        nom, prenom, adresse , numTel, email) VALUES (
        :nom, :prenom,  :adresse,  :numTel, :email)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':nom' =>$nom,
                ':prenom' =>$prenom,
                ':adresse' =>$adresse,
                ':numTel' =>$numtel,
                ':email' =>$email
            ]);
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getProprietaires(){
        global $db;
        $requete = 'SELECT * FROM proprietaire WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $proprietaires = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $proprietaire = new Proprietaire
                 ($data['nom'],$data['prenom'],$data['adresse'],$data['numTel'],$data['email']);
                array_push($proprietaires,$proprietaire);
            }
            return $proprietaires;
        }
        else return [];
    }

    public function getNumProprietaire(){
        global $db;
        $requete ='SELECT  numProprietaire FROM proprietaire WHERE nomProprietaire =:nomProprietaire AND numTel1Proprietaire=:numTel1Proprietaire';
        $statment = $db->prepare($requete);
        $execution = $statment->execute(
            [
                ':nom'=>$this-> getNom(), 
                ':numTel'=>$this-> getNumtel()
           ]
            );
            if ($execution){
                if ($data = $statment->fetch()){
                    $num=$data['num'];
                    return $num;
                }else return null;
            }else return null;

    }
    /**
     * Get the value of numeroProprietaire
     */ 
    // public function getNumProprietaire()
    // {
    //     return $this->numProprietaire;
    // }

    /**
     * Set the value of numProprietaire
     *
     * @return  self
     */ 
    // public function setNumProprietaire($numProprietaire)
    // {
    //     $this->numProprietaire = $numProprietaire;

    //     return $this;
    // }

    /**
     * Get the value of nomproprietaire
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nomproprietaire
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenomproprietaire
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresse1proprietaire
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of adresse2proprietaire
     */ 
    

    /**
     * Get the value of codepostalproprietaire
     */ 
    // public function getCodepostalproprietaire()
    // {
    //     return $this->codepostalproprietaire;
    // }

    // /**
    //  * Set the value of codepostalproprietaire
    //  *
    //  * @return  self
    //  */ 
    // public function setCodepostalproprietaire($codepostalproprietaire)
    // {
    //     $this->codepostalproprietaire = $codepostalproprietaire;

    //     return $this;
    // }

    /**
     * Get the value of villeproprietaire
     */ 
   

    /**
     * Get the value of numtel1proprietaire
     */ 
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set the value of numtel
     *
     * @return  self
     */ 
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get the value of numtel2proprietaire
     */ 
    
    /**
     * Get the value of cacumuleproprietaire
     */ 
    

    /**
     * Get the value of emailproprietaire
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
    
?>