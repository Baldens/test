<?php
    $percent = 0.1;
    $daysy = 365;
    $daysn = $_POST['daysInMonth'];
    $summ = $_POST['summVckl'];
    $summnLast = 0;
    $summadd = $_POST['summAddVckl'];
    $countYear = $_POST['selectYear'];
    $massDays = $_POST['massDays'];
    $summn = $summ + $summadd;
    for ($i=0; $i < count($massDays); $i++) {
        $predSummn = $summn + $summadd;
        $summn = $predSummn + $predSummn * $massDays[$i] * ($percent / $daysy);
    }
    // $summn = $predSummn + ($predSummn + $summadd) * $massDays[$i] * ($percent / $daysy); Формула с GitHub
    echo $summn;
?>