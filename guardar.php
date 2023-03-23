<?php

$nombre= $_POST['name'];
$apellido1=$_POST['Apellido1'];
$apellido2=$_POST['Apellido2'];
$tipoVia=$_POST['tipoVia'];
$nombreVia=$_POST['nombreVia'];
$numeroVia=$_POST['numeroVia'];
$portalPiso=$_POST['portalPiso'];
$codigoPostal=$_POST['codigoPostal'];
$poblacion=$_POST['poblacion'];
$pais=$_POST['pais'];
$email=$_POST['email'];
$campoConfirmacion=$_POST['campoConfirmacion'];
$dni=$_POST['dni'];
$contrasena=$_POST['contrasena'];

function validar($nombre,$apellido1, $apellido2, $tipoVia, $nombreVia, $numeroVia, $portalPiso, $codigoPostal, $poblacion, $pais, $email, $campoConfirmacion, $dni, $contrasena){

    $primeraletramayus = ord($nombre);

    if ($primeraletramayus>=65 && $primeraletramayus<=90){
        $trueprimeraletramayus = 1;
    } else {
        $trueprimeraletramayus = 0;
    }

for($i=0; $i<strlen($nombre);$i++){

 if  (ord($nombre[$i]) >= 65 && ord($nombre[$i]) <= 122) {
    $truenombre = 1; 
 } else {
    $truenombre = 0;
 }
}

if($truenombre == 1 && $trueprimeraletramayus == 1) {
   echo "nombre correcto" . "<br>";
} else {

  echo "error <br>";
}
$primeraletraapellidomayus = ord($apellido1);

if ($primeraletraapellidomayus>=65 && $primeraletraapellidomayus<=90){
    $trueapellido1 = 1;
} else {
    $trueapellido1 = 0;
}

for($i=0; $i<strlen($apellido1);$i++){

if  (ord($apellido1[$i]) >= 65 && ord($apellido1[$i]) <= 122) {
$trueapellido = 1; 
} else {
$trueapellido = 0;
}
}

if($trueapellido == 1 && $trueapellido1){
   echo "primer apellido bien" . "<br>";
} else {
 echo "La primera letra del apellido ha de ser mayúscula";
}
$primeraletraapellido2mayus = ord($apellido2);

    if ($primeraletraapellido2mayus>=65 && $primeraletraapellido2mayus<=90){
        $trueprimeraletraapellido2mayus = 1;
    } else {
        $trueprimeraletraapellido2mayus = 0;
    }

for($i=0; $i<strlen($apellido2);$i++){

 if  (ord($apellido2[$i]) >= 65 && ord($apellido2[$i]) <= 122) {
    $trueapellido2 = 1; 
 } else {
   $trueapellido2 = 0;
 }
}
if ($trueapellido2 == 1 && $trueprimeraletraapellido2mayus = 1) {
   echo "segundo apellido correcto" . "<br>";
} else {
echo "No cumple condiciones";
}
    
    
    if ($tipoVia == "calle") {
        echo "tipo de via bien" . "<br>";
    } elseif ($tipoVia == "via") {
        echo "tipo de via bien" . "<br>";
    } elseif ($tipoVia == "alameda") {
        echo "tipo de via bien" . "<br>";
    } elseif ($tipoVia == "avenida") {
        echo "tipo de via bien" . "<br>";
    } elseif ($tipoVia == "paseo") {
        echo "tipo de via bien" . "<br>";
    } else {
        echo "tipo de via no aceptada" . "<br>";
    }

    $asciNombreVia = ord($nombreVia);

    if ($asciNombreVia>=65 and $asciNombreVia<=90){
        echo "nombre de via bien" . "<br>";
    } else {
        echo "nombre de via no valido" . "<br>";
    }

    $asciNumVia = ord($numeroVia);
    $numeros = [0,1,2,3,4,5,6,7,8,9];
    $correctos = 0;

    for($y=0; $y<count($numeros);$y++){
        for($j=0; $j<strlen($numeroVia)-0;$j++){
         if($numeros[$y]==$numeroVia[$j]){
             $correctos++;
        }
    }
}

    if ($asciNumVia>=48 and $asciNumVia<=57 and $numeroVia >= 0){
        echo "numero de via bien" . "<br>";
    } else {
        echo "numero de via no valido" . "<br>";
    }

    $longitud = strlen($codigoPostal);
    $asciNumPost = ord($codigoPostal);
    $numeros2 = [0,1,2,3,4,5];
    $correctos2 = 0;

    for($y=0; $y<count($numeros2);$y++){
            for($j=0; $j<strlen($codigoPostal)-0;$j++){
             if($numeros2[$y]==$codigoPostal[$j]){
                 $correctos2++;
            }
        }
    }

    if ($longitud == 5 and $asciNumPost>=48 and $asciNumPost<=57 and $correctos == 5){
        echo "codigo postal bien" . "<br>";
    } else {
        echo "codigo postal mal" . "<br>";
    }

    $asciPoblacion = ord($poblacion);

    if ($asciPoblacion>=65 and $asciPoblacion<=90){
        echo "nombre poblacion bien" . "<br>";
    } else {
        echo "nombre de poblacion no valido" . "<br>";
    }

    $asciPais = ord($pais);

    if ($asciPais>=65 and $asciPais<=90){
        echo "nombre pais bien" . "<br>";
    } else {
        echo "nombre de pais no valido" . "<br>";
    }

    $arroba = "@";
    $trueArroba = 0;

    for($y=0; $y<strlen($arroba);$y++){
        for($j=0; $j<strlen($email)-0;$j++){
         if($arroba[$y]==$email[$j]){
             $trueArroba++;
        }
    }
}


    if ($email == $campoConfirmacion and $trueArroba == 1){
        echo "email bien" . "<br>";
    } else {
        echo "email mal" . "<br>";
    }

    $letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $letrasmin = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];
    $numeros = [1,2,3,4,5,6,7,8,9,0];
    $simbolos = ["?","=",".","*","[",";",":",".",",","!","¡","?","¿","@","$","%","^","&","-","_","+","="];
    $mayusculas = 0;
    $minusculas = 0;
    $tienesimbolos = 0;
    $tienenum = 0;
    $correctos = 0;
    
    if (strlen($dni)==9){//SON 9 CARACTERES?
        for($y=0; $y<count($numeros);$y++){//Son los 8 primeros caracteres numeros?
            for($j=0; $j<strlen($dni)-1;$j++){
                if($numeros[$y]==$dni[$j]){
                    $correctos++;
                }
            }
        }
        if($correctos == 8){
            echo "Los ocho son numeros";
        }else{
            echo "Te faltan numeros, revisalo";
        }
        for($i=0; $i<count($letras);$i++){
            $letra = $letras[$i];
            if($dni[strlen($dni)-1] == $letra && strlen($dni)==9){//LA ULTIMA ES UNA LETRA?
                 echo "DNI válido <br>";
            }
        }
    }else{
        echo "DNI no válido, tienen que ser 9 caracteres <br>";
    }
    //CONTRASEÑA
    if(strlen($contrasena)>=8 && strlen($contrasena)<=20 ){
        for($y=0; $y<count($letras);$y++){//cuenta si hay mayusculas
            for($j=0; $j<strlen($contrasena);$j++){
                if($letras[$y]==$contrasena[$j]){
                    $mayusculas++;
                }
            }
        }
        for($y=0; $y<count($letrasmin);$y++){//cuenta si hay minusculas
            for($j=0; $j<strlen($contrasena);$j++){
                if($letrasmin[$y]==$contrasena[$j]){
                    $minusculas++;
                }
            }
        }
        for($y=0; $y<count($numeros);$y++){//cuenta si hay 2 o más numeros
            for($j=0; $j<strlen($contrasena);$j++){
                if($numeros[$y]==$contrasena[$j]){
                    $tienenum++;
                }
            }
        }
        for($y=0; $y<count($simbolos);$y++){//cuenta si hay simbolos
            for($j=0; $j<strlen($contrasena);$j++){
                if($simbolos[$y]==$contrasena[$j]){
                    $tienesimbolos++;
                }
            }
        }
    }else{
        echo "La contraseña debe cumplir con la longitud establecida (8-20)";
    }
    if($minusculas > 0 && $mayusculas > 0 && $tienenum >= 2 && $tienesimbolos > 0){//Si/no hay mayusculas y minusculas : msg
        echo "La contraseña tiene mayusculas, minusculas, 2 numeros y un simbolo";
    }else{
        echo "Contraseña incorrecta. La contraseña debe contener mayusculas, minusculas, 2 numeros y un simbolo";
    }

    }

    echo validar($nombre,$apellido1, $apellido2, $tipoVia, $nombreVia, $numeroVia, $portalPiso, $codigoPostal, $poblacion, $pais, $email, $campoConfirmacion, $dni, $contrasena);
?>