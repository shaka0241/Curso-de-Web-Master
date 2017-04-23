<?php

$email = $_POST['email_r'];
$password = $_POST['password_r'];
$password2 = $_POST['password_r2'];

$db = new mysqli('localhost','root','','login');

if($db->connect_errno){
    printf("Error al conectar",$mysql->connect_errno);
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($password == $password2 ){
        $query="insert into usuario(email,password) values ('$email','$password')";
        if($db->query($query)){
            echo "El usuario se registro correctamente <a href='index.php'>Logearse Ahora</a>";
        }else{
            echo "Error al registrar usuario!";
        }
    }else{
        echo "Las passwords no conciden!";
    }
}else{
        echo "El email no es valido";
    }


?>