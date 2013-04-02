<?php

 setsessionvar( "db_type", "mysql" );
 
  if (getenv("HTTP_X_FORWARDED_FOR")) 
	 $tempstr  = getenv("HTTP_X_FORWARDED_FOR");
  else 
	 $tempstr   = getenv("REMOTE_ADDR");

  if( $tempstr == "127.0.0.1" ) 
  {
	 $db_host = "localhost"; 
	 $db_user = "root";
	 $db_pass = "mexico";
	 $db_name = "moduloweb"; 
  }
  else                                                                                               
  {
    $db_host = "localhost"; 
    $db_user = "geswww";      //"root";
    $db_pass = "escolarges"; // "";
    $db_name = "ges";  // "escolar";
  }
 
 $allcolors = "$#040622#$";
  
 // Dentro se inicializaran variables globales
 if ( !issetsessionvar("firmado") )
 { 
    if( phpversion() <= "4.0.6" )
    { 
	   $firmado          = "";
	   $tipousuario      = "";
	   $usuario          = "";
	   $nombreusuario    = "";
	   
	   $firmado_externo  = "";
	   $docto		 	 = "";
	   
	   $firmado_news     = "";	   
	   $menu_newsletter	 = 1;   
	   
	   $mobile			 = 0;
    }

    setsessionvar( "firmado", "NO" );
	setsessionvar( "tipousuario", "" );
    setsessionvar( "usuario", "desconocido" );
    setsessionvar( "nombreusuario", "");
	
	setsessionvar( "firmado_externo", "NO" );    
	setsessionvar( "docto", "" );
	
	setsessionvar( "firmado_news", "NO" );
	setsessionvar( "menu_newsletter", 1 );	
 }

function left ($str, $howManyCharsFromLeft)
{
  return substr ($str, 0, $howManyCharsFromLeft);
}

function right ($str, $howManyCharsFromRight)
{
  $strLen = strlen ($str);
  return substr ($str, $strLen - $howManyCharsFromRight, $strLen);
}

function issetsessionvar( $varname )
{
   if( phpversion() <= "4.0.6" )
     { $result = isset( $GLOBALS[$varname] ); }
   else
     { $result = isset( $_SESSION[ $varname ] ); }
   
   return $result;
}

function getsessionvar( $varname )
{
   if( phpversion() <= "4.0.6" )
     { $result = $GLOBALS[$varname]; }
   else
     { $result = $_SESSION[ $varname ]; }
   
   return $result;
}

function setsessionvar( $varname, $value )
{
   if( phpversion() <= "4.0.6" )
   {
      $GLOBALS[$varname] = $value;
	  session_register( $varname );
   }
   else
      $_SESSION[ $varname ] = $value;
   
   return 1;
}

function current_dbdate()
{
   $cur_date = getdate();
   
   $anio = $cur_date["year"];
   $mes = $cur_date["mon"];
   $dia = $cur_date["mday"];
   
   return dateasmysql($anio, $mes, $dia);
}

function current_dbdateandtime( $humanreadable = 0 )
{
	$anio = date( "Y", mktime());
    $mes  = date( "m", mktime());
	$dia  = date( "d", mktime());
	
	$hora = date( "H", mktime());
	$min  = date( "i", mktime());
	$segs = date( "s", mktime());
	
	{
	  if( $humanreadable == 1 )
	  {
	     if($dia<10) $dia = "0" . $dia;
		 $cStr = $dia . "/" . $mes . "/" . $anio;
	  }
	  else
	     $cStr = dateasmysql( $anio, $mes, $dia ); // para base de datos
	  
	  $cStr .= " " . $hora . ":" . $min . ":" . $segs;
	  
	  return $cStr; 
	}
}

function dateasmysql( $year, $month, $day )
{
   $month = right( "00" . $month, 2 );	
   $day = right( "00" . $day, 2 );	

   $cStr = $year . "-" . $month . "-" . $day;
  
   return $cStr;
}

// Esta función convierte a un valor de fecha
// listo para usarse en INSERTS y/o UPDATES
// tomando como valor de entrada una fecha CAPTURADA por el USUARIO
function date_for_database_updates( $capture_date )
{
  //                  0123456789
  // fecha en formato dd/mm/AAAA 00:00
  $cdia  = substr( $capture_date, 0, 2); 
  $cmes  = substr( $capture_date, 3, 2);
  $canio = substr( $capture_date, 6, 4);
  
  if( getsessionvar("db_type") == "mysql" )
     return dateasmysql($canio, $cmes, $cdia); 
}

// Esta función convierte a un valor de hora capturado
// listo para usarse en INSERTS y/o UPDATES
// tomando como valor de entrada una fecha CAPTURADA por el USUARIO
function time_for_database_updates( $capture_time )
{
  //                  01234
  // fecha en formato 00:00
  $horas = substr( $capture_time, 0, 2); 
  $mins  = substr( $capture_time, 3, 2);
  
  $horas = right( "00" . $horas, 2 );	
  $mins = right( "00" . $mins, 2 );	
  
  return dateasmysql( "0000", "00", "00" ) . " " . $horas . ":" . $mins . ":00" ; 
}

function get_str_datetime( $strdatetime, $includetime=1, $month_as_str=1 )
{
   if( $strdatetime == "")
   {  $cStr = ""; }
   else
   {
     $pos = strpos($strdatetime, "-");

	 if( getsessionvar("db_type") == "mysql" )
	 {
	   $canio = substr( $strdatetime, 0, 4);
	   $cmes  = substr( $strdatetime, ($pos==0)?4:5, 2);
	   $cdia  = substr( $strdatetime, ($pos==0)?6:8, 2);
	 
	   if( $includetime == 1 )
	   {
	     $chora = substr( $strdatetime, 11, 2);
	     $cmins = substr( $strdatetime, 14, 2);
	     $csegs = substr( $strdatetime, 17, 2);
	   }
	 }
	 
	 if( $month_as_str == 1 )
	 {
		 if( $cmes == "01" )     { $cstrmes = "Ene"; }
		 elseif( $cmes == "02" ) { $cstrmes = "Feb"; }
		 elseif( $cmes == "03" ) { $cstrmes = "Mar"; }
		 elseif( $cmes == "04" ) { $cstrmes = "Abr"; }
		 elseif( $cmes == "05" ) { $cstrmes = "May"; }
		 elseif( $cmes == "06" ) { $cstrmes = "Jun"; }
		 elseif( $cmes == "07" ) { $cstrmes = "Jul"; }
		 elseif( $cmes == "08" ) { $cstrmes = "Ago"; }
		 elseif( $cmes == "09" ) { $cstrmes = "Sep"; }
		 elseif( $cmes == "10" ) { $cstrmes = "Oct"; }
		 elseif( $cmes == "11" ) { $cstrmes = "Nov"; }
		 elseif( $cmes == "12" ) { $cstrmes = "Dic"; }
	 }
	 else
	    $cstrmes = $cmes;
	 
	 $cStr = $cdia . "/" . $cstrmes . "/" . $canio;
	 
	 if ( $includetime == 1 ) 
  	    $cStr .= " a las " . $chora . ":" . $cmins . ":" . $csegs;  
   }
   
   return $cStr;
}

function get_str_onlytime( $strdatetime, $mostrarsecs=0 )
{

   if( $strdatetime == "")
   {  $cStr = ""; }
   else
   {
     
	 if( getsessionvar("db_type") == "mysql" )
	 {
	   $canio = substr( $strdatetime, 0, 4);
	   $cmes  = substr( $strdatetime, 4, 2);
	   $cdia  = substr( $strdatetime, 6, 2);
	 
	   $chora = substr( $strdatetime, 11, 2);
	   $cmins = substr( $strdatetime, 14, 2);
	   $csegs = substr( $strdatetime, 17, 2);
	 }
 
     if( $cmes == "01" )     { $cstrmes = "Ene"; }
     elseif( $cmes == "02" ) { $cstrmes = "Feb"; }
     elseif( $cmes == "03" ) { $cstrmes = "Mar"; }
     elseif( $cmes == "04" ) { $cstrmes = "Abr"; }
     elseif( $cmes == "05" ) { $cstrmes = "May"; }
     elseif( $cmes == "06" ) { $cstrmes = "Jun"; }
     elseif( $cmes == "07" ) { $cstrmes = "Jul"; }
     elseif( $cmes == "08" ) { $cstrmes = "Ago"; }
     elseif( $cmes == "09" ) { $cstrmes = "Sep"; }
     elseif( $cmes == "10" ) { $cstrmes = "Oct"; }
     elseif( $cmes == "11" ) { $cstrmes = "Nov"; }
     elseif( $cmes == "12" ) { $cstrmes = "Dic"; }
	 
	 $cStr = $chora . ":" . $cmins;
	 
	 if( $mostrarsecs==1 )
	    $cStr .= ":" . $csegs;
		
   }
   
   return $cStr;

}

// esta función debe utilizarse principalmente para
// convertir fechas que vienen de las bases de datos
// y trasladarlas a formatos MEXICANOS
function get_str_date( $strdate, $month_as_str=1, $long=0 )
{ 
   $char_sep = "/";
   
   if (strpos($strdate, "-") != 0 ) $char_sep = "-";
   
   
   if( $strdate == "")
   {
     $cStr = "00$char_sep" . "00" . $char_sep . "0000";
   }
   else
   {
     // La fecha original viene en AAAA-mm-dd para MYSQL
	 // para Interbase viene en mm-dd-AAAA
	 if( getsessionvar("db_type") == "mysql" )
	    $cmonth = substr( $strdate, 5, 2);

     if( $month_as_str == 1 )
	 {
		 if( $cmonth == 01 or $cmonth == 1 )     { $cmonth = ($long==1) ?      "Enero" : "Ene"; }
		 elseif( $cmonth == 02 or $cmonth == 2 ) { $cmonth = ($long==1) ?    "Febrero" : "Feb"; }
		 elseif( $cmonth == 03 or $cmonth == 3)  { $cmonth = ($long==1) ?      "Marzo" : "Mar"; }
		 elseif( $cmonth == 04 or $cmonth == 4)  { $cmonth = ($long==1) ?      "Abril" : "Abr"; }
		 elseif( $cmonth == 05 or $cmonth == 5)  { $cmonth = ($long==1) ?       "Mayo" : "May"; }
		 elseif( $cmonth == 06 or $cmonth == 6)  { $cmonth = ($long==1) ?      "Junio" : "Jun"; }
		 elseif( $cmonth == 07 or $cmonth == 7)  { $cmonth = ($long==1) ?      "Julio" : "Jul"; }
		 elseif( $cmonth == 08 or $cmonth == 8)  { $cmonth = ($long==1) ?     "Agosto" : "Ago"; }
		 elseif( $cmonth == 09 or $cmonth == 9)  { $cmonth = ($long==1) ? "Septiembre" : "Sep"; }
		 elseif( $cmonth == 10 or $cmonth == 10) { $cmonth = ($long==1) ?    "Octubre" : "Oct"; }
		 elseif( $cmonth == 11 or $cmonth == 11) { $cmonth = ($long==1) ?  "Noviembre" : "Nov"; }
		 elseif( $cmonth == 12 or $cmonth == 12) { $cmonth = ($long==1) ?  "Diciembre" : "Dic"; }
	 }

     if( getsessionvar("db_type") == "mysql" )
	 {
        if( $long == 1 )
		   $cStr = substr( $strdate, 8, 2) . " de " . $cmonth . " de " . substr( $strdate, 0, 4);
		else
		   $cStr = substr( $strdate, 8, 2) . $char_sep . $cmonth . $char_sep . substr( $strdate, 0, 4);
	 }
   }
   
   return $cStr;
}

function get_str_time( $strdate )
{
  // La fecha original viene en AAAA-mm-dd 00:00:00
   $time = substr( $strdate, 11, 8);

   return $time;
}

function mostrarmenu( $idmenu, $nivel=1, $mostraritems=1 )
{  
   $principalid = "";	
   $gesid = "";
   $webgesid = "";
   $quienessomosid = "";
   $distribuidoressid = "";
   $escolarhitechid = "";
   
   $ctempstr = "";

   $firmado = getsessionvar( "firmado" );
      
   if( $nivel==2 ) { $ctempstr = "../"; }

   if( $idmenu==1 ) { $principalid = "id=current"; }
   if( $idmenu==2 ) { $gesid = "id=current"; }
   if( $idmenu==3 ) { $webgesid = "id=current"; }
   if( $idmenu==4 ) { $quienessomosid = "id=current"; }
   if( $idmenu==5 ) { $distribuidoressid = "id=current"; }
   //if( $idmenu==6 ) { $escolarhitechid = "id=current"; }

   echo "<CENTER>";

   if( getsessionvar("mobile")==0 )
   {
	  echo "<TABLE width=" . ((getsessionvar("max_table_width")==770) ? 770 : 800) . " height=140 align=center border=0 cellpadding=0 cellspacing=0 background='images/logo_header.gif'>";
   }
   else
   {
      echo "<TABLE width=" . getsessionvar("max_table_width") . " border=0 cellpadding=0 cellspacing=0>";
	  echo '<TR><TD width=100%><IMG src="images/logo_header_mobile.jpg"></TD></TR>';   
   }
 
   if($mostraritems==1)
   {
	   if( getsessionvar("mobile")==0 )
	   {
		   echo "<TR><td width=160>&nbsp;</td><TD width=640 class=taMenu valign=bottom>";
		   echo "<DIV class=taMenu><UL>";
		   echo "<LI " . $distribuidoressid . "><A href=" . $ctempstr . "grupoges_distribuidores.php><SPAN><b>¿ Dónde Comprar ?</b></SPAN></A>";
		   echo "<LI " . $quienessomosid . "><A href=" . $ctempstr . "grupoges_quienessomos.php><SPAN><b>Empresa</b></SPAN></A>";
		   //echo "<LI " . $escolarhitechid . "><A href=" . $ctempstr . "grupoges_escolarhitech.php><SPAN><b>Escolar HiTech</b></SPAN></A>";
		   echo "<LI " . $webgesid . "><A href=" . $ctempstr . "grupoges_webges.php><SPAN><b>Control Escolar GES para Internet</b></SPAN></A>";   
		   echo "<LI " . $gesid . "><A href=" . $ctempstr . "grupoges_escolarges.php><SPAN><b>Control Escolar GES</b></SPAN></A>";
		   echo "<LI " . $principalid . "><A href=" . $ctempstr . "grupoges_main.php><SPAN><b>Principal</b></SPAN></A>";
		   echo "</UL></DIV>";
		   echo "</TD></TR>";
		   echo "<TR><TD height=3></TD></TR>";
	   }
	   else
	   {
		   // Dispositivos móbiles
		   echo "<TR><TD><table width=" . getsessionvar("max_table_width") . " border=0 cellpadding=0 cellspacing=0><tr>";
		   echo "<td valign=top align=center><A class=mobile_link href=" . $ctempstr . "grupoges_main.php>Principal</A></td>";
		   echo "<td valign=top align=center><A class=mobile_link href=" . $ctempstr . "grupoges_escolarges.php><b>Control Escolar GES</b></A><br>";
		   echo "<A class=mobile_link href=" . $ctempstr . "grupoges_webges.php><b>WebGES</b></A></td>";
		   echo "<td valign=top  align=center><A class=mobile_link href=" . $ctempstr . "grupoges_quienessomos.php>Contacto</A></td>";
		   echo "<td valign=top  align=center><A class=mobile_link href=" . $ctempstr . "grupoges_distribuidores.php>Distribuids.</A><br>";
		   echo "<A class=mobile_link href=" . $ctempstr . "grupoges_usuarios.php>Soporte</A></td>";
		   echo "</tr></table></TD></TR>";
	   }
   }
   else 
       echo "<TR><TD><img src=images/pxl.gif></TD></TR>";

   echo "</TABLE></CENTER>";
   
   return 0;
}

function fechahoraactual()
{
	$anio = date( "Y", mktime());
	$mes  = date( "m", mktime());
	$dia  = date( "d", mktime());
	
	$hora = date( "H", mktime());
	$min  = date( "i", mktime());
	$segs = date( "s", mktime());
	
	if( getsessionvar("db_type") == "interbase" ) 
	{
	  $cStr = dateasinterbase( $anio, $mes, $dia );
	  
	  $cStr .= " " . $hora . ":" . $min . ":" . $segs;
	  
	  return $cStr; 
	}
	else 
	  return $anio . $mes . $dia . $hora . $min . $segs; 
	  
}

function muestra_recursos_usuarios ( $tiporecurso, $tipousuario, $distribuidor, $verwwwges )
{
	 $query = "SELECT archivo, archivo_ubicacion, archivo_descripcion, fecha FROM ges_archivos " .
			  "WHERE id_tipo=$tiporecurso and (dirigido_a='T' or dirigido_a='$tipousuario') ";
			  
			 if( $verwwwges <> "S" ) 
			     $query .= " and WEBGES<>'S' ";  // no puede ver cosas de WebGES
			  
	 $query .= "order by id_index";

	 $qryres = mysql_query( $query );
	
	  echo "<table class=fW>";
	
	  if( $distribuidor==0 )
	  {
		echo "<tr>";
		echo "<td class=columnTitleSmall>&nbsp;</td><td class=columnTitleSmall>Archivo</td><td class=F width=5>&nbsp;</td>" . 
			 "<td class=columnTitleSmall>Fecha</td><td class=F width=5>&nbsp;</td><td class=columnTitleSmall>Descripción</td><td class=F width=5>";
		echo "</tr>";
	  }
	
	 while( $row = @mysql_fetch_assoc( $qryres ) )
	 {  
		echo "<tr>";	
		
		if( $distribuidor == 0 )
   		   echo " <td><img src='images/clic_here2.gif'>&nbsp;</td><td class=columnNormalSmall width=40%>";
		else
		   echo " <td>&nbsp;<img src='images/taMenuItem.gif'>&nbsp;</td><td class=columnNormal>";
		
		if( $row["archivo_ubicacion"] <> "" )
		{ 
			echo "<a href='".$row["archivo_ubicacion"]."' onClick=\"javascript:window.status = 'Descargando...'; return true;\" onMouseOver=\"javascript:window.status = 'Descargar este archivo'; return true;\" onMouseOut=\"window.status=''; return true;\"> " . 
			  $row["archivo"];
			echo	"</a></td>";
		}
		else
		{
			echo $row["archivo"] . "</td>";
		}
		
		echo " <td class=columnNormalSmall>&nbsp;</td>";
		
		if ( $distribuidor == 0 )
		{
		   $fecha = get_str_date( $row["fecha"], 1, 0 );
		   
		   if( $fecha == "30-Dic-1899" ) $fecha = "";
		   
		   echo " <td class=columnNormalSmall width=15%>". $fecha ."</td>";
		   echo " <td class=columnNormalSmall>&nbsp;</td>";
		   echo " <td class=columnNormalSmall width=45%>". $row["archivo_descripcion"] ."</td>";
		   echo " <td class=columnNormalSmall>&nbsp;</td>";
		}
		
		echo "</tr>";			 
	 }
	 
	  echo "</table>";
	  
	  if( $distribuidor == 0 ) echo "<br>";
	 
	  @mysql_free_result( $qryres );

}

//**************************************
//     ***
//A simple currency function in php to give the same
//feel as the currency function in asp.
//	Paste this code in your php page then just
//	send your variable to it
//		$yourVar = 1236.1234;
//		$yourNewVar = currency($yourVar);
//	and the result would be :
//	$yourNewVar = $1236.12			
//**************************************
//     ****
function currency( $c_f_x )	
{

	return '$' . number_format($c_f_x, 2, '.', ','); 
	
	$c_f_x = round($c_f_x, 2);	//THIS WILL ROUND THE ACCEPTED PARAMETER TO THE 
								//PRECISION OF 2		
								
	$temp_c_f_variable = strstr(round($c_f_x,2), ".");	//THIS WILL ASSIGN THE "." AND WHAT EVER 
								//ELSE COMES AFTER IT. REMEMBER DUE TO 
								//ROUNDING THERE ARE ONLY THREE THINGS
								//THIS VARIABLE CAN CONTAIN, A PERIOD 
								//WITH ONE NUMBER, A PERIOD WITH TWO NUMBERS,
								//OR NOTHING AT ALL
								//EXAMPLE : ".1",".12",""
								
	if (strlen($temp_c_f_variable) == 2)	//THIS IF STATEMENT WILL CHECK TO SEE IF 
						//LENGTH OF THE VARIABLE IS EQUAL TO 2. IF
						//IT IS, THEN WE KNOW THAT IT LOOKS LIKE 
						//THIS ".1" SO YOU WOULD ADD A ZERO TO GIVE IT 
						// A NICE LOOKING FORMAT 
	{
		$c_f_x = $c_f_x . "0";
	}
	
	if (strlen($temp_c_f_variable) == 0)	//THIS IF STATEMENT WILL CHECK TO SEE IF 
						//LENGTH OF THE VARIABLE IS EQUAL TO 2. IF
						//IT IS, THEN WE KNOW THAT IT LOOKS LIKE 
						//THIS "" SO YOU WOULD ADD TWO ZERO'S TO GIVE IT 
						// A NICE LOOKING FORMAT
	{
		$c_f_x = $c_f_x . ".00";
	}
	
	$c_f_x = "$" . $c_f_x;	//THIS WILL ADD THE "$" TO THE FRONT 

	return $c_f_x;	//THIS WILL RETURN THE VARIABLE IN A NICE FORMAT
					//BUT REMEMBER THIS NEW VARIABLE WILL BE A STRING 
					//THEREFORE CAN BE USED IN ANY FURTHER CALCULATIONS
		
}	//THIS IS THE END OF THE CURRENCY FUNCTION


//************************************************************* 
// this function converts an amount into alpha words 
// with the words dollars and cents.  Pass it a float. 
// Example:  $3.77 = Three Dollars and Seventy Seven Cents 
// works up to 999,999,999.99 dollars - Great for checks 
//************************************************************* 

function makewords($numval, $decs, $moneda="pesos" ) 
{ 
  $moneystr = ""; 

  // handle the millions 
  $milval = (integer)($numval / 1000000); 

  if($milval > 0) 
  {  
     $moneystr = getwords($milval) . " MILLONES";
  }

  // handle the thousands 
  $workval = $numval - ($milval * 1000000); // get rid of millions 
  $thouval = (integer) ($workval / 1000); 
  
  if($thouval > 0) 
  { 
    $workword = getwords($thouval); 
	
    if ($moneystr == "") 
    { 
      $moneystr = $workword . " mil"; 
    } 
    else 
    { 
      $moneystr .= " " . $workword . " mil"; 
    } 
  } 

 // handle all the rest of the dollars 
  $workval = $workval - ($thouval * 1000); // get rid of thousands 
  $tensval = (integer)($workval); 
  
  if ($moneystr == "") 
  { 
      $moneystr = "";
	  
	  if ($tensval > 0) 
        $moneystr .= getwords($tensval); 
      else 
        $moneystr .= "Cero"; 
  } 
  else // non zero values in hundreds and up 
  { 
    $workword = getwords($tensval); 
    $moneystr .= " " . $workword; 
  } 

  // plural or singular 'dollar' 
  $workval = (integer)($numval); 
  
  if ($workval == 1) 
  { 
     if( $moneda == "pesos" )
	 	$moneystr .= " peso con "; 
	 else if( $moneda == "dolares" )
	 	$moneystr .= " dolar con ";  
  } 
  else 
     $moneystr .= " $moneda "; 

  // do the pennies - use printf so that we get the 
  // same rounding as printf 
  $workstr = sprintf("%3." . $decs . "f", $numval ); // convert to a string 
  $intstr = substr($workstr, strlen($workstr) - $decs, $decs); 
  $workint = (integer)($intstr); 
      
  if( $moneda <> "pesos" and $workint <> 0)
  {
	$moneystr .= " con " . $intstr;
	
	  if ($workint == 1) 
	    $moneystr .= " centavo"; 
	  else 
	    $moneystr .= " centavos"; 
  }
  else if( $moneda == "pesos" )
     $moneystr .= $intstr;
    
  $moneystr .=  (($moneda<>"dolares") ? "/100 M.N." : "");

// done - let's get out of here! 
  $moneystr = strtoupper($moneystr);
 
return trim($moneystr); 
} 
//************************************************************* 
// this function creates word phrases in the range of 1 to 999. 
// pass it an integer value 
//************************************************************* 
function getwords($workval) 
{ 
$numwords = array( 
  1 => "un", 
  2 => "dos", 
  3 => "tres", 
  4 => "cuatro", 
  5 => "cinco", 
  6 => "seis", 
  7 => "siete", 
  8 => "ocho", 
  9 => "nueve", 
  10 => "diez", 
  11 => "once", 
  12 => "doce", 
  13 => "trece", 
  14 => "catorce", 
  15 => "quince", 
  16 => "dieciseis", 
  17 => "diecisiete", 
  18 => "dieciocho", 
  19 => "diecinueve", 
  20 => "veinte", 
  30 => "treinta", 
  40 => "cuarenta", 
  50 => "cincuenta", 
  60 => "sesenta", 
  70 => "setenta", 
  80 => "ochenta", 
  90 => "noventa"); 
  
$hundreds = array( 
  1 => "ciento", 
  2 => "doscientos", 
  3 => "trescientos", 
  4 => "cuatrocientos", 
  5 => "quinientos", 
  6 => "seiscientos", 
  7 => "setecientos", 
  8 => "ochocientos", 
  9 => "novecientos" );

// handle the 100's 
$retstr = ""; 
$hundval = (integer)($workval / 100); 

if ($hundval > 0) 
  { 
  $retstr = $hundreds[$hundval]; 
  } 

// handle units and teens 
$workstr = ""; 
$tensval = $workval - ($hundval * 100); // dump the 100's 

if (($tensval < 20) && ($tensval > 0))// do the teens 
  { 
     $workstr = $numwords[$tensval]; 
  } 
else // got to break out the units and tens 
  { 
     $tempval = ((integer)($tensval / 10)) * 10; // dump the units 
     
     $unitval = $tensval - $tempval; // get the unit value 
  
     if ($unitval > 0) 
     { 
        if( ($tempval == 20) and ($unitval == 1) )
		{
		  $workstr .= "veintiun";
		}		
        elseif( ($tempval == 20) and ($unitval == 2) )
		{
		  $workstr .= "veintidos";
		}		
		else
		{
		  $workstr .= $numwords[$tempval] . " y " . $numwords[$unitval]; 
		}
     } 
	 else
	 {

  	    if( $tempval <> 0 )
		   $workstr = $numwords[$tempval]; // get the tens 
	  }
  } 

// join all the parts together and leave 
if ($workstr != "") 
  { 
  if ($retstr != "") 
    { 
    $retstr .= " " . $workstr; 
    } 
  else 
    { 
    $retstr = $workstr; 
    } 
  } 
return $retstr; 
} 

function Encrypt($string, $key)
{
   $result = '';
   for($i=1; $i<=strlen($string); $i++)
   {
      $char = substr($string, $i-1, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return $result;
}

function Decrypt($string, $key)
{
   $result = '';
   for($i=1; $i<=strlen($string); $i++)
   {
      $char = substr($string, $i-1, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}

// news letter functions
function desplegar_numero( $numero )
{
    global $db_host, $db_user, $db_pass, $db_name;
	
	$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
	mysql_select_db( $db_name, $link );
	
 	$qrynews = mysql_query( "SELECT * FROM ges_newsletter WHERE numero=$numero" );

    $version = 0;

	if( $row = @mysql_fetch_assoc( $qrynews ) )
	{  
		$version = $row["version"];
		$fecha	 = get_str_datetime( $row["fecha"], 0 );
	}
	else
	   echo "<H2>Número no encontrado</H2>";
	 
	@mysql_free_result( $qrynews );
	
	if( $version == 0 ) exit;

	if( ($version == 1) or ($version == 3))
	{
		echo "\n<table border=0 cellpadding=0 cellspacing=0 bordercolor=black width=99%>\n";
		echo " <tr>";
	
			// Primer Columna  -- HILITES
			$background = "";
			
			if ($version == 1)
			   $background = "hilite_orange.gif";
			else if($version == 3)
			   $background = "hilite_green.gif";
			
			echo "<td width=28% valign=top style='background: url(images/$background) repeat-y;'>";
			
			$qrynews_hilites = mysql_query( "SELECT * FROM ges_newsletter_det WHERE numero=$numero and id_tipo=1 ORDER BY id_num" );
		
			echo "<table border=0 bordercolor=white width=100% align=center>";
			echo "<tr><td colspan=2><img src='images/notas_destacadas.gif'></td></tr>";
			echo "<tr><td colspan=2 id=lineainferior></td></tr>";
		
			while( $row = @mysql_fetch_assoc( $qrynews_hilites ) )
			{  
				$liga   = $row["url"];
				$titulo = $row["texto_breve"];
								
				if( $row["urlparam"] == "link" )
				    $liga = $row["url"];
				else
				    $liga = "javascript:verarticulo( \"$liga\", $numero, 1, " . $row["id_num"] . ", \"$titulo\", \"$fecha\" );";

				echo "<tr><td valign=top><img src='images/bullet_azul.gif'></td><td valign=top class=hilite_table_item><a class=ligas_news href='$liga' onMouseOut='window.status=\"\"; return true;' onMouseOver='window.status=\"$titulo\"; return true;'>" . $row["texto_breve"]. "</a></td></tr>";
			}
			 
			echo "<tr><td valign=top width=25>&nbsp;</td></tr>";			 
			echo "</table>";						
			 
			@mysql_free_result( $qrynews_hilites );
			
			// tutoriales
			$qrynews_hilites = mysql_query( "SELECT * FROM ges_newsletter_det WHERE numero=$numero and id_tipo=5 ORDER BY id_num" );
		
			echo "<table border=0 bordercolor=white width=100% align=center>";
			echo "<tr><td colspan=2><img src='images/newsletter_tutoriales.gif'></td></tr>";
			echo "<tr><td colspan=2 id=lineainferior></td></tr>";
		
			while( $row = @mysql_fetch_assoc( $qrynews_hilites ) )
			{  
				$liga   = $row["url"];
				$titulo = $row["texto_breve"];
								
				if( $row["urlparam"] == "link" )
				    $liga = $row["url"];
				else
				    $liga = "javascript:verarticulo( \"$liga\", $numero, 1, " . $row["id_num"] . ", \"$titulo\", \"$fecha\" );";

				echo "<tr><td valign=top><img src='images/bullet_azul.gif'></td><td valign=top class=hilite_table_item><a class=ligas_news href='$liga' onMouseOut='window.status=\"\"; return true;' onMouseOver='window.status=\"$titulo\"; return true;'>" . $row["texto_breve"]. "</a></td></tr>";
			}
			
			echo "<tr><td valign=top width=25>&nbsp;</td></tr>";			 
			echo "</table>";
			
			// desplegar banners lado izquierdo
			$qrynews_panelderecho = mysql_query( "SELECT * FROM ges_newsletter_det WHERE numero=$numero and id_tipo=3 ORDER BY id_num" );
		
			echo "<table border=0 bordercolor=white width=100% align=center>";
		
			while( $row = @mysql_fetch_assoc( $qrynews_panelderecho ) )
			{  
				$numstr = "00" . $numero;
				$numstr = right( $numstr, 3 );	
			
				if( $row["urlparam"]=="codigo" ) 
				{
				    echo "<tr><td valign=top align=center>" . $row["texto_largo"] . "</td></tr>";
				}
				else
				{ 
				    $url = "newsletter/num" . $numstr . "/" . $row["url"];
				    echo "<tr><td valign=top align=center><img src='$url'></td></tr>";
				}
			}

			echo "</table>";
			 
			@mysql_free_result( $qrynews_hilites );			
			
			echo "</td>\n";
	
				// Separador
				echo "<td width=5px><img scr='../images/pxl.gif' width=5></td>";
	
			// Segunda Columna
			echo "<td width=55% valign=top>";
			
			$qrynews_hilites = mysql_query( "SELECT * FROM ges_newsletter_det WHERE numero=$numero and id_tipo=2 ORDER BY id_num" );
		
			echo "<table border=0 bordercolor=white width=100% class=news_table align=center>";
		
			echo "<tr><td colspan=2 class=news_table_titlerow><img src='images/articulos_del_mes.gif'></td></tr>";
		
			while( $row = @mysql_fetch_assoc( $qrynews_hilites ) )
			{  
				$liga   = $row["url"];
				$titulo = $row["texto_breve"];
				
				$liga = "javascript:verarticulo( \"$liga\", $numero, " . $row["id_tipo"] . ", " . $row["id_num"] . ", \"$titulo\", \"$fecha\" );";
				
				echo "<tr><td valign=top width=25><img src='images/bullet_orange.gif'>&nbsp;</td><td class=news_table_titlerow><a class=ligas_news href='$liga'>" . $row["texto_breve"]. "</a></td></tr>";
				echo "<tr><td width=25></td><td class=news_table_row>" . $row["texto_largo"]. ((substr($row["texto_largo"],0,6)=="<TABLE") ? "" : "<br>" ) . "</td></tr>";
				echo "<tr><td colspan=2 background='images/pxl_dotborder_news_version1.gif'><img src='images/pxl_dotborder_news_version1.gif'></td></tr>";
				echo "<tr><td colspan=2 class=news_table_row>&nbsp;</td></tr>";
			}
			 
			echo "</table>";
			 
			@mysql_free_result( $qrynews_hilites );			
			
			echo "</td>";
	
				// Separador
				echo "<td width=5><img scr='images/pxl.gif' width=5></td>";
	
			// Tercer Columna
			echo "<td width=15% valign=top>";
			
			$qrynews_panelderecho = mysql_query( "SELECT * FROM ges_newsletter_det WHERE numero=$numero and id_tipo=4 ORDER BY id_num" );
		
			echo "<table border=0 bordercolor=black width=100% align=center>";
		
			while( $row = @mysql_fetch_assoc( $qrynews_panelderecho ) )
			{  
				$numstr = "00" . $numero;
				$numstr = right( $numstr, 3 );	
			
				$url = "newsletter/num" . $numstr . "/" . $row["url"];
				
				echo "<tr><td valign=top width=25><img src='$url'></td></tr>";
			}
			 
			echo "</table>";
			 
			@mysql_free_result( $qrynews_hilites );			
			
			echo "</td>";
	
		echo " </tr>";
		echo "</table>\n";
	}

}

function translate_to_xml( $string )
{
/*	if($pos = strpos($string, "á"))
	{
	    $string = str_replace ( "á", "&aacute;", $string );
	} */
	
	// Ubicar signos de diferencia (SIN PROBLEMAS)
//	if($pos = strpos($string, " <> "))
	//	$string = str_replace ( " <> ", " {#diferentede#} ", $string );

	if($pos = strpos($string, "<>"))
		$string = str_replace ( "<>", "{#diferentede#}", $string );

	// Ubicar signos de diferencia (SIN PROBLEMAS)
			
//	if($pos = strpos($string, " < "))
//		$string = str_replace ( " < ", " {#menorque#} ", $string );

	if($pos = strpos($string, "<"))
		$string = str_replace ( "<", "{#menorque#}", $string );
	if($pos = strpos($string, ">")) 
		$string = str_replace ( ">", "{#mayorque#}", $string );

    // <=
//	if($pos = strpos($string, " <= ")) 
//		$string = str_replace ( " <= ", " {#menorigualque#} ", $string );
		
//	if($pos = strpos($string, "<=")) 
//		$string = str_replace ( "<=", " {#menorigualque#} ", $string );
	
	// >
//	if($pos = strpos($string, " > ")) 
//		$string = str_replace ( " > ", " {#mayorque#} ", $string );
	
	// >=
//	if($pos = strpos($string, " >= ")) 
//		$string = str_replace ( " >= ", " {#mayorigualque#} ", $string );
		
//	if($pos = strpos($string, ">=")) 
//		$string = str_replace ( ">=", " {#mayorigualque#} ", $string );
		
    //if( ($pos=strpos ( $string, chr(13) )) )
	//   $string = str_replace ( chr(13), "{#br#}", $string );
	
	return $string;
}


?>
