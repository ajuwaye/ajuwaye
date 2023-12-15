<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregistrement du Proprietaire</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
    <?php include_once "../configuration/config.php"?>
</head>
<body>
    <?php include_once "../controllers/getListeProprietaires.php"?>
    <div class="text-center"><h3>CARNET D'ADRESSE</h3><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="../controllers/enregistrerProprietaire.php" method="POST">
                <section class="row" style="margin: 15px;">
                <div class="col-3"></div>

                    <div class="col-sm-6">
                        
                        <label class="fom-label">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                        
                        <label class="form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" required>
                       
                        <label class="form-label">Adresse</label>
                        <input type="text" name="adresse" class="form-control" required>                       
                        
                        <label class="form-label">Numtel</label>
                        <input type="number" name="numTel" class="form-control" required>
                       
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <br>
                        <button type="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                        </div>
                    <div class="col-sm-7">
                        
                    
                    </div>
                </section>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><br>
                    </div>
                    <div class="col-4"></div>
                </div>
             </form>
            
        </div> 
        <div class="col-2"></div>
    </div>
    <br>
    <div class="mx-3">
        <h2 class="text-center"> LES AGENTS ENREGISTRES</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse </th>
                    <th>NumTel</th>
                    <th>Email</th>
                </tr>

                <?php
                $proprietaires = getListeProprietaires();
                for ($i = 0; $i < count($proprietaires); $i++)  {
                    echo "<tr>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getNom()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getPrenom()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getAdresse()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getNumtel()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getEmail()."</td>";
                }            
                ?>
            </thead>
        </table>
    </div>
</body>

</html>