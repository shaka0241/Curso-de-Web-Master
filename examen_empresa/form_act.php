<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actauliza</title>
</head>
<body>
   
   <form action="actualizar.php">
      
      <label for="idregistro">id</label>
                <input type="text" id="idregistro"name="idregistro">
       
       <label for="nombre_empresa">Nombre comercial empresa</label>
                <input type="text" id="nombre_empresa"name="nombre_empresa">

                <label for="tipologia_empresa">Tipologia de la empresa</label>
                <select id="tipologia_empresa" name="tipologia_empresa">
                    <option value="Sociedad Anomina (S.A)">Sociedad Anomima (SA)</option>
                    <option value="Compañia Anomina (C.A)">Compañia Anomima (CA)</option>
                </select>
                
                <input type="submit" value="actaulizar">
       
   </form>
    
</body>
</html>