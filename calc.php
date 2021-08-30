<?php
    function calculate(){
        $percent = 0.1;
        $daysy = 365;
        $summ = $_POST['summVckl'];
        $summadd = $_POST['summAddVckl'];
        $massDays = $_POST['massDays'];
        $summn = $summ + $summadd;
        for ($i=0; $i < count($massDays); $i++) {
            $predSummn = $summn + $summadd;
            $summn = $predSummn + $predSummn * $massDays[$i] * ($percent / $daysy);
        }
        // $summn = $predSummn + ($predSummn + $summadd) * $massDays[$i] * ($percent / $daysy); Формула с GitHub
        return $summn;
    }
    $resultFuncCalc = calculate();
    echo $resultFuncCalc;
?>