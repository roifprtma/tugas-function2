<?php
//function tidak mengembalikan nilai
function nama(){
    echo"haloo nama saya adalah roif ";

}
    nama();

    echo "<br>";

    //function yang mengembalikan nilai 
    function perkalian($nilai1,$nilai2, $nilai3){
        $hasil = $nilai1 * $nilai2 + $nilai3;
        return $hasil;

    }

    echo(perkalian(150,500,1200));
    

?>