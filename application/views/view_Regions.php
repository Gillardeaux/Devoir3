
    <?php
        foreach($lesRegions as $uneRegion)
        {
            echo "<input type='radio' name='selectRegions' onclick='afficherLesVilles($(this).val())' value='$uneRegion->idRegion'>".$uneRegion->nomRegion.' '.$uneRegion->scoreRegion."<br>";
        }
    
    ?>