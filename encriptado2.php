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
    $pass= $_POST["txtpassword"];
    $query=("SELECT usuario,contrasena FROM encriptacion WHERE usuario=$nombre AND contrasena=$pass");
    $rs= mysql_query($query); 
    $row=mysql_fetch_object($rs); 
    $nr = mysql_num_rows($rs);
    if($nr == 1){ 
    	echo 'No ingreso'; 
    } 
    else if($nr == 0){}   
?>