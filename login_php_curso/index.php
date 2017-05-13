<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Portal de Usuarios</title>
</head>
<body>
   <!--FORMULARIO DE REGISTRO -->
   <div id="form_registro">
       <form action="registro.php" method="post">
              <h1>Registro de Usuario</h1>
              
           <label for="email_r">Usuario:</label>
           <input type="text" name="email_r" placeholder="Ingrese email valido" required><br>
           
           <label for="password_r">Password:</label>
           <input type="password" name="password_r" placeholder="Ingrese una contraseña" required><br>
           
           <label for="password_r2">Confirmar Password:</label>
           <input type="password" name="password_r2" placeholder="Ingrese nuevamente su contraseña" required><br><br>
           
           <input type="submit" value="Registrar Usuario">
           
       </form>
   </div>
   
   
   <!--FORMULARIO DE LOGIN -->
   
   <div id="form_login">
      <form action="login.php" method="post">
      <h1>Login de Usuarios</h1>
      
      <label for="email">Usuario:</label>
      <input type="text" name="email" placeholder="Ingrese su usuario" required><br>
      
      <label for="password">Password:</label>
      <input type="password" name="password" placeholder="Ingrese su contraseña" required><br>
      <br>
      
      <input type="submit" value="Logearse">
      </form>

       <!--Comentario final -->
       
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
    
</body>
</html>