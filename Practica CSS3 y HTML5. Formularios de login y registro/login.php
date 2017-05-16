<?php
/**
 * Created by PhpStorm.
 * User: ROJASAEU
 * Date: 15/5/2017
 * Time: 20:13
 */
$email=$_POST['email'];
$password=$_POST['password'];

if(empty($email) || empty($password)){
    header("location:login.html");
    exit();
}

mysql_connect('localhost','root','') or die("Error al conectar".mysql_error());
mysql_select_db('login') or die("Error al seleccionar la base de datos:".mysql_error());

$result = mysql_query("select * from usuario where email='$email'");

if($row = mysql_fetch_array($result)){
    if($row['password']== $password){
        session_start();
        $_SESSION['email']=$email;
        header("location:paso-1.html");
    }else{
        header("location:login.html");
        exit();
    }
}else{
    header("location:login.html");
    exit();
}

?>