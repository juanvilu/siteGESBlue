<?php
  
 $version = "1.0";
 
 setsessionvar( "db_type", "mysql" );  // Tipo del sistema de base de datos

 $allcolors = "$#040622#$";
 
 $nombre_empresa = "Grupo GES Sistemas Avanzados";
 $nombre_empresa_corto = "Grupo GES";
 $slogan_empresa = "Líder nacional en software para gestión escolar";
 $web_domain     = "http://intranet.escolarges.com.mx";
 
 $use_smtp_4mail = true;
 
 $admon_ceo = "jlopez@escolarges.com.mx";

 if ( !issetsessionvar("firmado_db") )
 { 
    if( phpversion() <= "4.0.6" )
    { 
	   $firmado_db       = "";
	   $tipousuario      = "";
	   $usuario_db       = "";
	   $nombreusuario    = "";
	   $usuarioaccesoanterior = "";
	   
	   $firmado_externo  = "";
	   $docto		 	 = "";
	   
	   $mobile			 = 0;
    }

    setsessionvar( "firmado_db", "NO" );
	setsessionvar( "tipousuario", "" );
    setsessionvar( "usuario_db", "desconocido" );
    setsessionvar( "nombreusuario", "");
	setsessionvar( "usuarioaccesoanterior", "");
	
	setsessionvar( "firmado_externo", "NO" );
	setsessionvar( "docto", "" );
	
	setsessionvar( "priv_cotizar", "" );
	setsessionvar( "priv_repositorio", "" );
	setsessionvar( "priv_soporte", "" );
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
     { $result = isset( $GLOBALS[ $varname ] ); }
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
   {
      $_SESSION[ $varname ] = $value;
   }
   
   return 1;
}

// Query Statement
function db_query($query) 
{
//  global $db_host, $db_user, $db_pass;

  if ( getsessionvar( "db_type" ) == "mysql")
  {
	if( phpversion() <= "4.0.6" )
	  $mylink = mysql_pconnect($db_host, $db_user, $db_pass) or mysql_error();
	else
	  $mylink = mysql_pconnect( getsessionvar("db_host"), getsessionvar("db_user"), getsessionvar("db_pass")) or mysql_error(); 
    
    if ( !mysql_select_db( getsessionvar("db_name"), $mylink ) )
	   echo "ERROR EN database select<br>";

    $qryres = mysql_query( $query ) or db_die( $query );
	
	return $qryres;		
  }

}

// fetch row statement
function db_fetch_row ($result) {

  if (getsessionvar("db_type") == "mysql")    
  {
    return @mysql_fetch_assoc($result);
  }

}

// fetch row statement
function db_free_query ( $result ) 
{
  if ( getsessionvar( "db_type" ) == "mysql")    
  {
    return @mysql_free_result($result);
  }

}

// Error-Messages
function db_die( $querystr ) 
{
  if  (getsessionvar("db_type")== "mysql") 
  {   
      echo "<br><br><strong>Error de SQL: " . @mysql_error() . "<br>"; 
	  echo $querystr;
  }
  
  echo "</strong></body></html>";

  exit;
}

function current_dbdate()
{
   $cur_date = getdate();
   
   $anio = $cur_date["year"];
   $mes = $cur_date["mon"];
   $dia = $cur_date["mday"];
   
   return dateasmysql($anio, $mes, $dia); 
}

function dateasmysql( $year, $month, $day )
{
   $month = right( "00" . $month, 2 );	
   $day = right( "00" . $day, 2 );	

   return $year . "-" . $month . "-" . $day;
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
function time_for_database_updates( $capture_time, $include_empty_date=1 )
{
  //                  01234
  // fecha en formato 00:00
  $horas = substr( $capture_time, 0, 2); 
  $mins  = substr( $capture_time, 3, 2);
  
  $horas = right( "00" . $horas, 2 );	
  $mins = right( "00" . $mins, 2 );	
  
  if( getsessionvar("db_type") == "mysql" )
  {
     if( $include_empty_date == 1 )
	    return dateasmysql( "0000", "00", "00" ) . " " . $horas . ":" . $mins . ":00" ; 
	 else
	    return dateasmysql( "0000", "00", "00" ) . " " . $horas . ":" . $mins . ":00" ; 
  }	
}

function get_str_datetime( $strdatetime, $includetime=1, $month_as_str=1, $palabra_anexa_tiempo = " a las " )
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
	   
//	   return $strdatetime;
	   
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
		 else $cstrmes = "XXX";
	 }
	 else
	    $cstrmes = $cmes;
	 
	 $cStr = $cdia . "/" . $cstrmes . "/" . $canio;
	 
	 if ( $includetime == 1 ) 
  	    $cStr .= $palabra_anexa_tiempo . $chora . ":" . $cmins . ":" . $csegs;  
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

function get_str_date( $strdate, $month_as_str=1 )
{
   // La fecha original viene en AAAA-mm-dd 
   if( $strdate == "")
   {
     $cStr = "00-00-0000";
   }
   else
   {
     if( getsessionvar("db_type") == "mysql" )
	    $cmonth = substr( $strdate, 5, 2);

     if( $month_as_str == 1 )
	 {
		 if( $cmonth == "01" )     { $cmonth = "Ene"; }
		 elseif( $cmonth == "02" ) { $cmonth = "Feb"; }
		 elseif( $cmonth == "03" ) { $cmonth = "Mar"; }
		 elseif( $cmonth == "04" ) { $cmonth = "Abr"; }
		 elseif( $cmonth == "05" ) { $cmonth = "May"; }
		 elseif( $cmonth == "06" ) { $cmonth = "Jun"; }
		 elseif( $cmonth == "07" ) { $cmonth = "Jul"; }
		 elseif( $cmonth == "08" ) { $cmonth = "Ago"; }
		 elseif( $cmonth == "09" ) { $cmonth = "Sep"; }
		 elseif( $cmonth == "10" ) { $cmonth = "Oct"; }
		 elseif( $cmonth == "11" ) { $cmonth = "Nov"; }
		 elseif( $cmonth == "12" ) { $cmonth = "Dic"; }
	 }

     if( getsessionvar("db_type") == "mysql" )
        $cStr = substr( $strdate, 8, 2) . "-" . $cmonth . "-" . substr( $strdate, 0, 4);
   }
   
   return $cStr;
}

function get_str_time( $strdate )
{
  // La fecha original viene en AAAA-mm-dd 00:00:00
   $time = substr( $strdate, 11, 8);

   return $time;
}


function get_str_gesmonth( $mes )
{
  // La fecha original viene en AAAA-mm-dd 
   if( $mes == 5 )     { $cmonth = "Ene"; }
   elseif( $mes == 6 ) { $cmonth = "Feb"; }
   elseif( $mes == 7 ) { $cmonth = "Mar"; }
   elseif( $mes == 8 ) { $cmonth = "Abr"; }
   elseif( $mes == 9 ) { $cmonth = "May"; }
   elseif( $mes == 10 ) { $cmonth = "Jun"; }
   elseif( $mes == 11 ) { $cmonth = "Jul"; }
   elseif( $mes == 12 ) { $cmonth = "Ago"; }
   elseif( $mes == 1 ) { $cmonth = "Sep"; }
   elseif( $mes == 2 ) { $cmonth = "Oct"; }
   elseif( $mes == 3 ) { $cmonth = "Nov"; }
   elseif( $mes == 4 ) { $cmonth = "Dic"; }

   return $cmonth;
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
		if( $tempval > 0 )
		{
	       $workstr = $numwords[$tempval]; // get the tens 
		}
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

function desplegar_logininfo( $folderlevel )
{

    if( getsessionvar("firmado_db") == "SI")
	{
        $imageFolder = "";
      
        if( $folderlevel == 2)
          { $imageFolder = "../";}

    	echo "   <TABLE class=fW>";
    	echo "       <TR><TD class=bTl><IMG height=10 src=" . $imageFolder . "images\b.gif width=10></TD><TD class=bT></TD><TD class=bTr></TD></TR>";
    	echo "       <TR>";
    	echo "          <TD class=bL></TD><TD class=bM>";
		  
    	echo "<FORM NAME=loginInfoForm METHOD=post ACTION=/nil.php>";    
        echo "  <TABLE class=fullWidth>\n";
        echo "    <TR>\n<TD colspan=2 class=columnXYZ align=middle vAlign=top><b>Usuario: " . getsessionvar('usuario') . "</b></TD>\n</TR>\n";
    
        echo "    <TR>\n<TD colspan=2 class=columnXYZ align=middle vAlign=top ><b>" . getsessionvar('nombreusuario') . "</b></TD>\n</TR>\n";
    
        if( getsessionvar("tipousuario") != 'profesor')
		{
		  echo "    <TR>\n";
          echo "      <TD colspan=2 class=columnXYZ align=middle vAlign=top ><b>Ultimo Acceso:&nbsp;</b>" . get_str_datetime(getsessionvar('usuarioaccesoanterior')) . "</TD>\n";
          echo "    </TR>\n";   
		}
		
        echo "    <TR><TD class=columnXYZ colspan=2 align=center><INPUT class=image type=image alt='Salir' src=" . $imageFolder . "images/logoutButton.gif name=msuLogoutSubmit onclick=javascript:redirect()></TD></TR>\n";
        echo "  </TABLE>";
        echo "  </FORM>";
		
        echo "          </TD>";
        echo "          <TD class=bRR><IMG height=10 src=" . $imageFolder . "images/b.gif width=10></TD>";
        echo "       </TR>";
        echo "       <TR><TD class=bBl></TD><TD class=bB></TD><TD class=bBr><IMG height=10 src=" . $imageFolder . "images/b.gif  width=10></TD></TR>\n";
        echo "      </TABLE>\n";
	}

  return 1;
}

function mostrarmenu( $idmenu, $nivel=1, $mostraritems=1 )
{  
   $misactsid = "";	
   $implantacionid = "";
   $casosid = "";
   $repositorioid = "";
   $cotizacionesid = "";
   $sistemasid = "";
   $administracionid = "";
   
   $ctempstr = "";

   $firmado = getsessionvar( "firmado_db" );
      
   if( $nivel==2 ) { $ctempstr = "../"; }

   if( $idmenu==1 ) { $misactsid = "id=current"; }
   if( $idmenu==2 ) { $implantacionid = "id=current"; }
   if( $idmenu==3 ) { $casosid = "id=current"; }
   if( $idmenu==4 ) { $repositorioid = "id=current"; }
   if( $idmenu==5 ) { $sistemasid = "id=current"; }
   if( $idmenu==6 ) { $administracionid = "id=current"; }
   if( $idmenu==7 ) { $cotizacionesid = "id=current"; }

   echo "<div align=center><TABLE width=780 align=center border=0 cellpadding=0 cellspacing=0>";
     
   if($mostraritems==1)
   {
	   $struser = "no firmado";

       if( getsessionvar("firmado_db") == "SI" ) 
	   {
	   	   $struser = getsessionvar("usuario_db");
	   }	   

	   echo "<TR><TD valign=bottom></TD>";
	   echo "<TD class=taMenu valign=bottom>\n\n";
	   
	   echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="790" height="125">';
       echo ' <param name="movie" value="hitech_menu_superior.swf">';
       echo ' <param name="quality" value="high">';
	   echo ' <param name="flashvars" value="cur_item=' . $idmenu. '">';
       echo ' <param name="autostart" value="true">';
       echo ' <embed src="hitech_menu_superior.swf" flashvars="cur_item=' . $idmenu. '" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"  width="790" height="125"></embed>';
       echo '</object>';

	/*   echo "<DIV class=taMenu><UL>";
	   echo "<LI " . $administracionid . "><A href=" . $ctempstr . "administrar.php><SPAN><b>Administración</b></SPAN></A>";
	   echo "<LI " . $sistemasid . "><A href=" . $ctempstr . "sistemas/admin.php><SPAN><b>Sistemas</b></SPAN></A>";
	   echo "<LI " . $repositorioid . "><A href=" . $ctempstr . "repositorio.php><SPAN><b>Repositorio</b></SPAN></A>";	   
	   echo "<LI " . $cotizacionesid . "><A href=" . $ctempstr . "cotizaciones.php><SPAN><b>Cotizaciones</b></SPAN></A>";
	   echo "<LI " . $casosid . "><A href=" . $ctempstr . "registros.php><SPAN><b>Tickets</b></SPAN></A>";
	   echo "<LI " . $implantacionid . "><A href=" . $ctempstr . "proyectos/admin.php><SPAN><b>Proyectos</b></SPAN></A>";
	   echo "<LI " . $misactsid . "><A href=" . $ctempstr . "misactividades.php><SPAN><b>Mis Actividades</b></SPAN></A>";
	   echo "</UL></DIV>";
*/	   
	   echo "</TD></TR>";
   }
   else 
       echo "<TR><TD><img src=images/pxl.gif></TD></TR>";
	   
   echo "</TABLE></DIV>";
   
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
	  return $anio . "-" . $mes . "-" . $dia . " " . $hora . ":" . $min . ":" . $segs; 
	  
}

function output_file( $file_md5, $name, $mimecontent )
{
	//do something on download abort/finish
	//register_shutdown_function( 'function_name'  );

	if(!file_exists($file_md5))
	    die('El archivo para subir no existe !');

	$size = filesize($file_md5);
	
//	$name = rawurldecode($name);
	
	if (ereg('Opera(/| )([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT']))
		$UserBrowser = "Opera";
	elseif (ereg('MSIE ([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT']))
		$UserBrowser = "IE";
	else
		$UserBrowser = '';

	/// important for download im most browser
	$mime_type = ($UserBrowser == 'IE' || $UserBrowser == 'Opera') ?
	 'application/octetstream' : 'application/octet-stream';
	 
	@ob_end_clean(); /// decrease cpu usage extreme
	
	header('Content-Type: ' . $mime_type);
//	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");	  //jels
 	header('Content-Disposition: attachment; filename="'.$name.'"');
	header('Accept-Ranges: bytes');
	header("Cache-control: private");
	header('Pragma: private');
	
	/////  multipart-download and resume-download
	if(isset($_SERVER['HTTP_RANGE']))
	{
		list($a, $range) = explode("=",$_SERVER['HTTP_RANGE']);
		str_replace($range, "-", $range);
		$size2 = $size-1;
		$new_length = $size-$range;
		header("HTTP/1.1 206 Partial Content");
		header("Content-Length: $new_length");
		header("Content-Range: bytes $range$size2/$size");
	}
	else
	{
		$size2=$size-1;
		header("Content-Length: ".$size);
	}

	$chunksize = 1*(1024*1024);

	$bytes_send = 0;

	if ($file = fopen($file_md5, 'r'))
	{
		if(isset($_SERVER['HTTP_RANGE']))
		    fseek($file, $range);
		
		while(!feof($file) and (connection_status()==0))
		{
			$buffer = fread($file, $chunksize);
			print($buffer);
			flush();
			$bytes_send += strlen($buffer);
			//sleep(1);//// decrease download speed
		}
		fclose($file);
	}
	else
		die('No se puede abrir el archivo.');
		
	if(isset($new_length))
		$size = $new_length;
		
//	die();
}

function enviar_notificacion_tarea( $id_tarea, $updated = 0 )
{
	// enviar notificacion por email
	$result_tarea = db_query( "SELECT a.*, b.logon as login_usuariocreador, b.nombre_completo as nombre_usuariocreador, b.email as email_usuariocreador, " .
								" c.nombre_completo as nombre_usuarioasignado, c.email as email_usuarioasignado, " .
								"  d.logon as logon_usuariomodifico, d.nombre_completo as nombre_usuariomodifico, d.email as email_usuariomodifico, " . 
								"   e.nombre as nombre_proyecto " . 
								" FROM ges_tareas a " . 
								"     LEFT JOIN ges_usuarios b ON (b.id_usuario=a.usuario_creador) " .
								"      LEFT JOIN ges_usuarios c ON (c.id_usuario=a.usuario_asignado) " .
								"       LEFT JOIN ges_usuarios d ON (d.id_usuario=a.usuario_modifico) " .
								"         LEFT JOIN ges_proys e ON (e.id_project=a.id_project) " .
								" WHERE a.id_tarea=$id_tarea" );
								
    $cc = "";
	$nombre_proyecto = "";
	
	if( $reg_tarea = db_fetch_row( $result_tarea ) )
	{
		$enviado =  $reg_tarea["enviadoxmail"];
		
		if( $reg_tarea["id_project"] != 0 )
		   $nombre_proyecto = $reg_tarea["nombre_proyecto"];
		
		$titulo  =  $reg_tarea["titulo"];
		$descripcion = $reg_tarea["descripcion"]; 
		
		$fecha_desde = get_str_datetime( $reg_tarea["fecha_desde"], 0, 0 ); 
		$fecha_hasta = get_str_datetime( $reg_tarea["fecha_hasta"], 0, 0 );
		
		$hora_desde = $reg_tarea["hora_desde"]; 
		$mins_desde = $reg_tarea["mins_desde"]; 
		$hora_hasta = $reg_tarea["hora_hasta"]; 
		$mins_hasta = $reg_tarea["mins_hasta"]; 	
		
		$usuario_asignado = $reg_tarea["usuario_asignado"];
		$grupo_asignado   = $reg_tarea["grupo_asignado"];
		
		if( $updated == 0 )
		{
		   // enviar mail a quien crea
		   $usuario_creador = $reg_tarea["login_usuariocreador"];
		   $email = $reg_tarea["email_usuariocreador"];
		   $nombredestinatario = $reg_tarea["nombre_usuariocreador"];
		}
		else
		{
			// enviar mail a quien modifica
		   $usuario_creador = $reg_tarea["logon_usuariomodifico"];
		   $email = $reg_tarea["email_usuariomodifico"];
		   $nombredestinatario = $reg_tarea["nombre_usuariomodifico"];			
		}
		
		if( $usuario_asignado != 0 )
		{
			if( $email != $reg_tarea["email_usuarioasignado"] )
				$cc = $reg_tarea["email_usuarioasignado"];
		}
		
		// cuando se notifica a un usuario o a un grupo de usuarios
		// cuando es un proyecto se pueden notificar a todos los del equipo de trabajo
		if( $grupo_asignado != 0 or ( $grupo_asignado == 0 and $nombre_proyecto != "" ))
		{
			if( $grupo_asignado == 0 and $nombre_proyecto != "" )
			{
			    // notificar a todos los usuarios asignados al proyecto
				$result_users = db_query( " SELECT a.*, b.logon as login_usuario, b.nombre_completo as nombre_usuario, b.email as email_usuario " .
										  " FROM ges_proys_usuarios a LEFT JOIN ges_usuarios b ON (b.id_usuario=a.id_usuario) " .
										  " WHERE (a.id_project=" . $reg_tarea["id_project"] . ") " );
			}
			else
			{
			    // notificar a todos los usuarios de un grupo
				$result_users = db_query( " SELECT a.*, b.logon as login_usuario, b.nombre_completo as nombre_usuario, b.email as email_usuario " .
										  " FROM ges_grupos_usuarios a LEFT JOIN ges_usuarios b ON (b.id_usuario=a.id_usuario) " .
										  " WHERE (a.id_grupo=$grupo_asignado) " );
			}
			
			while( $reg_users = db_fetch_row( $result_users ) )
			{
			    if( $reg_users["email_usuario"] != "" and $reg_users["email_usuario"] != $email )
				{
				    if( $cc != "" ) $cc .= ",";
					$cc .= $reg_users["email_usuario"];
				}
			}
			
			db_free_query( $result_users );
		}
		
		if( $updated == 1 and $reg_tarea["email_usuariomodifico"] != $reg_tarea["email_usuariocreador"] )
		{
			$cc = $reg_tarea["email_usuariocreador"] . ";$cc";
		}
	}
	
	db_free_query( $result_tarea );

	if( $enviado == "N" )
	{
		 if( $updated == 0 )
			$subj  = "Asignación de Tareas: NUEVO REGISTRO"; 
		 else
			$subj  = "Seguimiento de Tareas: MODIFICACION";
		
		 $header = "Return-Path: root@me.com\r\n"; 
		 $header .= "From: $usuario_creador $nombredestinatario <$email>\r\n"; 
		 
		 $header .= "Cc: $cc\r\n";
		 $header .= "Content-Type: text/html; charset=iso-8859-1;"; 
		 $header .= "Content-Transfer-Encoding: 7bit;";
		
		 $mesg = "<html><body style='font-family:verdana,arial,helvetica; font-size:12px; font-color: black; " .
         		 "background: url(http://www.grupoges.com.mx/images/logoFondoGES.jpg) no-repeat right top;'> ";
		 $mesg .= "<h3><strong>GRUPO GES - SEGUIMIENTO DE TAREAS </strong></h3>";
				 
		 if( $updated == 0 )
			$mesg .= "<font size=3>El usuario $nombredestinatario ha asignado una nueva tarea: $id_tarea.</font><br><br>";
		 else
			$mesg .= "<font size=3>El usuario $nombredestinatario ha modificado un tarea: $id_tarea.</font><br><br>";
				 
		 if( $nombre_proyecto != "" )
		     $mesg .= "Proyecto: $nombre_proyecto <br>";
		 
		 $mesg .= "Título: $titulo <br>";
		 $mesg .= "Descripción: $descripcion <br><br>";
		 
		 if( $fecha_desde==$fecha_hasta ) 
			$mesg .= "Fecha: " . $fecha_desde;
		 else
			$mesg .= "Fechas programadas: Del " . $fecha_desde . " al " . $fecha_hasta;
			
		 $mesg .= "<br>";
		
		 if( $hora_desde <= 9 ) $hora_desde = "0" . $hora_desde;
		 if( $mins_desde <= 9 ) $mins_desde = "0" . $mins_desde;
		 if( $hora_hasta <= 9 ) $hora_hasta = "0" . $hora_hasta;
		 if( $mins_hasta <= 9 ) $mins_hasta = "0" . $mins_hasta;
		
		 if( ($hora_desde . $mins_desde) == ($hora_hasta . $mins_hasta) ) 
			$mesg .= "Hora: " . $hora_desde . ":" . $mins_desde . " hrs." ;
		 else
			$mesg .= "Horario: Desde las " . $hora_desde . ":" . $mins_desde . " a las " . $hora_hasta . ":" . $mins_hasta . " hrs. " ;
		 
		 $mesg .= "<br><br>";
			 
		 $mesg .= "<a href='http://intranet.escolarges.com.mx/tarea_paso2.php?accion=consultar&id_tarea=$id_tarea&tab=datosprincipales'>" . 
				  "Clic aquí para consultar la actividad</a><br>";	
		
		 $mesg .= "</body></html>"; 
		 
		// echo $header;
		 
		 if( mail ( $email, $subj, $mesg, $header ) )
		 {
			//echo "Se envío correo electrónico de notificación";
			$query = "UPDATE ges_tareas SET enviadoxmail = 'S' WHERE id_tarea = $id_tarea ";
			db_query( $query );
		 }
	}

}

function translate_to_xml( $string )
{
/*	if($pos = strpos($string, "á"))
	{
	    $string = str_replace ( "á", "&aacute;", $string );
	} */
	
	if($pos = strpos($string, "<>"))
	    $string = str_replace ( " <> ", " {#diferentede#} ", $string );
	
	if($pos = strpos($string, " < "))
		$string = str_replace ( " < ", " {#menorqué#} ", $string );

	if($pos = strpos($string, " <= ")) 
		$string = str_replace ( " <= ", " {#menorigualqué#} ", $string );				
	
	if($pos = strpos($string, " > ")) 
		$string = str_replace ( " > ", " {#mayorqué#} ", $string );
		
	if($pos = strpos($string, " >= ")) 
		$string = str_replace ( " >= ", " {#mayorigualqué#} ", $string );				
		
    //if( ($pos=strpos ( $string, chr(13) )) )
	//   $string = str_replace ( chr(13), "{#br#}", $string );
	
	return $string;
}

function desplegar_panel( $nivel, $folderlevel, $border=0, $imgWidth=0, $imgHeight=0 )
{
  $imageFolder = "";

  if( $folderlevel == 2)
    $imageFolder = "../";
  
  $anio = date( "Y", mktime());
  $mes  = date( "m", mktime());
  $dia  = date( "A??d?d", mktime());
  
  $fecha = dateasmysql( $anio, $mes, $dia );
  
  // solo los banners que serán rotativos en la misma pagina
  $query = "SELECT * FROM ges_banners where ('$fecha'>=desde and '$fecha'<=hasta) and status=1 and target=0";

  $result = db_query( $query ) or db_die();
  
  echo "<TABLE width=100% border=0 class=F>";
  
  while( $row = db_fetch_row($result) )
  {
	  $id     = $row['id_banner'];
	  $adtype = $row['tipo'];
	  $image  = $row['imagen'];
	  $alt    = $row['alt'];
	  $link   = $row['url'];
	  $encabezado = $row['encabezado'];
	  $adtext = "";
	  
	  if( $adtype <> 1 )
		$adtext = $row['html_text'];
	
	  // TODOS ESTOS BANNERS SE MUESTRAN EN FORMA ROTATIVA WINDOWS
	  if( $adtype == 1 )
	  {
		 $image = "images/panel/" . $image;

		 if( $link <> '' ) 
			$tempstr = "<a href='$link'><img border='0' src='$image' " . (($imgWidth<>0) ?"width=$imgWidth " : " ") . (($imgHeight<>0) ?"height=$imgHeight " : " ") . " alt='$alt'></a>";
		 else
			$tempstr = "<img border='0' src='$image' " . (($imgWidth<>0) ?"width=$imgWidth " : " ") . (($imgHeight<>0) ?"height=$imgHeight " : " ") . " alt='$alt'>";
	  }
	  else
		 $tempstr = "&nbsp;<a href='ver_aviso.php?id=$id' class=Ligas onmouseenter='window.status=\'x\'; return true;' target=new><img src='images/flechas.gif'>&nbsp;$encabezado</a>";
	
	  echo "<TR><TD>" . $tempstr . "</TD></TR>";
  }
  
  echo "</TABLE>";
  
  db_free_query( $result );
}


function enviar_email_notificacion( $email_usuario_creador, $nombre_usuario_creador, $subject, $email, $cc, $titulo_notificacion, $subtitulo, $body, $end_link="" )
{
	 $header = "Return-Path: root@me.com\r\n"; 
	 $header .= "From: $nombre_usuario_creador <$email_usuario_creador>\r\n"; 
	 
	 if( $cc != "" and $email != $cc )
	    $header .= "Cc: $cc\r\n";
	 
	 $header .= "Content-Type: text/html; charset=ISO-8859-1;";
	 $header .= "Content-Transfer-Encoding: 7bit;\r\n";
	
	 $mesg = "<html><body style='font-family:verdana,arial,helvetica; font-size:12px; font-color: black; " .
			 "background: url(http://intranet.escolarges.com.mx/images/logoFondoGES.jpg) no-repeat right top;'> ";
	 
	 // Anexar titulo
	 $mesg .= "<h3><strong>$titulo_notificacion</strong></h3>";

     // Anexar subtitulo
	 $mesg .= "<font size=3>$subtitulo</font><br><br>";
			 
	 // Anexar cuerpo del mensaje
	 $mesg .= $body;

	 $mesg .= "<br><br>";
		 
     if( $end_link != "" )
	 {
	     $mesg .= "<a href='$end_link'>Para mayor referencia haga \"clic\" en este link: $end_link </a><br>";	
	 }
	
	 $mesg .= "<br><HR><div style='display: inline; font-size: 9px; color: #666666;'>Disclaimer: Este e-mail es de interés solo para los individuos mencionados en el mismo. Por lo anterior, no podrá distribuirse ni difundirse bajo ninguna circunstancia. Si Usted no es alguno de los destinatarios y este correo le ha llegado por equivocación se le pide borrarlo inmediatamente.</div>";
	 $mesg .= "</body></html>"; 
	 
	 if( mail( $email, $subject, $mesg, $header ) )
		return 1;
	 else
	    return 0;

}
?>
