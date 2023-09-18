<?php 

    $tamsiteadres = 'https://'.$SERVER['SERVER_NAME'];

    function RastgeleKodUret($uzunluk){
        $KARAKTERLER = "1234567890abcdefghıjklmnoprstuvyzABCDEFGHIKLMNOPRSTUVYZ79876543210";
        for($i=0;$i<=$uzunluk;$i++){
            $cikti .=$KARAKTERLER{rand()%67};
        }
        return $cikti;
    }