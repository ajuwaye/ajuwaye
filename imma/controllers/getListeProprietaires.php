<?php

include '../configuration/config.php';
include '../models/proprietaire.php';


function getListeProprietaires(){
     return Proprietaire :: getProprietaires();
}

?>