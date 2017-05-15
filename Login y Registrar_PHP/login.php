<?php
$email=$_POST['email'];
$password=$_POST['password'];

if(empty($email) || empty($password)){
    header("location:index.php");
    exit();
}

mysql_connect('localhost','root','') or die("Error al conectar".mysql_error());
mysql_select_db('login') or die("Error al seleccionar la base de datos:".mysql_error());

$result = mysql_query("select * from usuario where email='$email'");

if($row = mysql_fetch_array($result)){
    if($row['password']== $password){
        session_start();
        $_SESSION['email']=$email;
        header("location:contenido.php");
    }else{
        header("location:index.php");
        exit();
    }
}else{
    header("location:index.php");
    exit();
}

?>