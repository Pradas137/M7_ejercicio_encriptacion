<!DOCTYPE html>

<html>
    <head>
        <title>Accesso</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <?php
 
 try{
     $conn = new PDO('mysql:host=localhost;dbname=Encriptar','ap','Hakantor');
     echo 'Conexion realizada';
    }            
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
 
$nombre= $_POST["txtusuario"];
$pass= $_POST["txtusuario"];

 
 $query=("SELECT usuario,contrasena FROM `encriptacion` "
         . "WHERE `usuario`='".mysql_real_escape_string($nombre)."' and "
         . "`contasena`='".mysql_real_escape_string($pass)."'"); 

$rs= mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs);


if($nr == 1){ 
   
echo 'No ingreso'; 
} 

else if($nr == 0) {    
     
}   

?>
    <body>
        <form action="ingresar.php" method="POST" id="formulario">
            <input type="text" placeholder="usuario" name="txtusuario" />
            <input type="password" placeholder="pass" name="txtpassword" />
            <input type="submit" value="submit" name="entrar" />
        </form>
    </body>
</html>
