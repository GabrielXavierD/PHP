<?php
    $ape = $_POST['id'];
    $niv = $_POST['date'];
    $algo = $_POST['depre'];
    $sm = $_POST['sm'];
    print "Ola" . $ape . "Como você está?<br>" . "Espero que esteje bem";
    if($sm == "Sim" || $sm == "sim"){
        print "MEUS PARABENS, que loco, parabens" . $ape . "Muitos anos de vida e saúde";
    }
    else{
        print "Pena, mas aposto que logo logo ele chega";
    }
?>