<?php
 session_start();

 include("funciones.php");
  
 $nombreusuario = $HTTP_POST_VARS["nombreusuario"];
 $password      = $HTTP_POST_VARS["etiqueta"];

 $query = "SELECT TIPOUSUARIO, NOMBRE_EMPRESA, NOMBRE_USUARIO, VIGENCIA, ULTIMO_INGRESO " .
		  "FROM ges_usuariosexternos " .
		  "WHERE USUARIO='" . $nombreusuario . "' and PASSWRD='" . $password . "' and OK='S'";

 $link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
 mysql_select_db( $db_name, $link );

 $qryres = mysql_query( $query );

 if( $row = @mysql_fetch_assoc( $qryres ) )
 {  
	  if( current_dbdate() <= $row["VIGENCIA"] )
	  {
	
		$query = "update ges_usuariosexternos set ultimo_ingreso='" . fechahoraactual() . "' " .
				 "where USUARIO='$nombreusuario' ";
 
		mysql_query( $query ) or mysql_error();

		setsessionvar( "usuario", $nombreusuario );
		setsessionvar( "nombreusuario", $row["NOMBRE_EMPRESA"] );
		setsessionvar( "usuarioaccesoanterior", $row["ULTIMO_INGRESO"] );
		setsessionvar( "firmado", "SI" );
		setsessionvar( "tipousuario", $row["TIPOUSUARIO"] );
		
		header('302 Moved');
		header ( "Location:grupoges_soporteusuarios.php" ) ;
		
		@mysql_free_result( $qryres );
		
	  }
	  else
	  {
		 header( '302 Moved' );
		 header ( "Location:grupoges_usuarios.php?error=2&lastuser=$nombreusuario" );
	  }
	     
 }
 else 
 { 
	 header( '302 Moved' );
	 header ( "Location:grupoges_usuarios.php?error=1&lastuser=$nombreusuario" );
 }

 @mysql_free_result( $qryres );

?>