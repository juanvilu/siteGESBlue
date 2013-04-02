<?php 
    echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?\">"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>::..Funciones FTP..::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<p align="center"><font size="5" face="Verdana, Tahoma, Arial"><strong><em>
Funciones FTP
</em></strong></font></p>
<p><font face="Verdana, Tahoma, Arial">

<?php
    /*
    include('inc/ftpfunc.php'); //Incluye el archivo de funciones
    if(!empty($_POST["archivo"])){//Comprueba si la variable "archivo" se ha definido
        SubirArchivo($_POST["archivo"],basename($_POST["archivo"])); 
        //basename obtiene el nombre de archivo sin la ruta
        unset($_POST["archivo"]); //Destruye la variable "archivo"
    }
    */
    
    include("inc/ftp_func.php");
    
    $ftpGES = new ftpGES();
    $ftpGES->setHost("www.grupoges.com.mx");
    $ftpGES->setUsuario("usuarios");
    $ftpGES->setPassword("escolarges");
    $ftpGES->setConection();
    $ftpGES->indentificate();
    echo "<br/><br/>";
    
    /*if(isset($_POST["archivo"])){
        if(!empty($_POST["archivo"])){
                echo  basename($_POST["archivo"]);
                $ftpGES->subirArchivo(basename($_POST["archivo"]));
                unset($_POST["archivo"]);                                              
        }else{
            echo "Ocurrio un error al cargar el archivo para el proceso";
        }                
    }*/
    
    
    if(isset($_POST["archivo"])){
        if(is_uploaded_file($_FILES['archivo']['name'])){
        
            $ch = curl_init();  
            $localfile = $_FILES['archivo']['name'];  
            $fp = fopen($localfile, "r");  
            curl_setopt($ch, CURLOPT_URL, "ftp://usuarios:escolarges@ftp.grupoges.com.mx/".$_FILES['archivo']['name']);  
            curl_setopt($ch, CURLOPT_UPLOAD, 1);  
            curl_setopt($ch, CURLOPT_INFILE, $fp);  
            curl_setopt($ch, CURLOPT_INFILESIZE, filesize($localfile));  
            curl_exec ($ch);  
            $error_no = curl_errno($ch);  
            curl_close ($ch);  
            if ($error_no == 0) {  
              $error = "Fichero subido correctamente.";  
            } else {  
              $error = "Error al subir el fichero.";  
            } 
        }
    }
    
?>
<br /><strong><font color="#000000" size="3">Subir Archivo</font></strong></font></p>
<hr />

<!--Formulario para elejir el archivo a subir -->
<form action="ftpList.php" method="post" name="form_ftp" id="form_ftp" enctype=""multipart/form-data">
    <p><font size="2" face="Verdana, Tahoma, Arial"> Elegir archivo : 
    <input name="archivo" type="file" id="archivo" />
    <input name="Submit" type="submit" value="Subir Archivo" />
    </font><font size="2" face="Verdana, Tahoma, Arial"> </font> </p>
</form>

<hr />
<p><font face="Verdana, Tahoma, Arial"><strong><font color="#000000" size="3">
Lista de Archivos
</font></strong></font></p>
<table width="69%" border="1" cellspacing="0" cellpadding="0">
<tr> 
<td width="48%"><div align="center"><font size="2" face="Verdana, Tahoma, Arial"><strong>Nombre</strong></font></div></td>
<td width="22%"><div align="center"><font size="2" face="Verdana, Tahoma, Arial"><strong>Tama&ntilde;o</strong></font></div></td>
<td width="30%"><div align="center"><font size="2" face="Verdana, Tahoma, Arial"><strong>Fec. 
Modificaci&oacute;n</strong></font></div></td>
</tr>
<?php
    $listaDirectorio = $ftpGES->getListaDirectorio();
    foreach($listaDirectorio as $item=>$valor){
        echo "
            <tr> 
                <td width=\"48%\"><div align=\"center\"><font size=\"2\" face=\"Verdana, Tahoma, Arial\"><strong>".$valor."</strong></font></div></td>
                <td width=\"22%\"><div align=\"center\"><font size=\"2\" face=\"Verdana, Tahoma, Arial\"><strong>Tama&ntilde;o</strong></font></div></td>
                <td width=\"30%\"><div align=\"center\"><font size=\"2\" face=\"Verdana, Tahoma, Arial\"><strong>Fec. 
                Modificaci&oacute;n</strong></font></div></td>
            </tr>";   
    }
    $ftpGES->desconectar();
?>

