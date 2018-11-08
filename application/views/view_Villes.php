
    <?php
        foreach($lesVilles as $uneVille)
        {
            echo "<input type='radio' name='Ville''>".$uneVille->nomVille.' '.$uneVille->scoreVille."<br>";
        }
        echo "<br>";   
        echo "<input type='button' name='noter' value='Ajouter 5 aux scores des Villes'";
    ?>