<?php

if( isset($HTTP_GET_VARS["action"]) ) 
   $action = $HTTP_GET_VARS["action"]; 
   
if( isset($HTTP_GET_VARS["select"]) ) 
   $select = $HTTP_GET_VARS["select"]; 

if( !isset( $action ) )
{
  require("inc.date_functions.php");
  require("class.calendar.php");
}

?>

<HTML>

<HEAD>
   <TITLE>Seleccione una fecha..          Calendario            ...</TITLE>
   <LINK href="../ges.css" type=text/css rel=stylesheet>   
</HEAD>

<BODY topmargin=2 leftmargin="2" marginwidth="1">

<?php 
 
    if( isset($HTTP_GET_VARS["nday"]) ) 
       $_day = $HTTP_GET_VARS["nday"];
	
    if( isset($HTTP_GET_VARS["nmonth"]) ) 	
       $_month = $HTTP_GET_VARS["nmonth"];
	   
	if( isset($HTTP_GET_VARS["nyear"]) ) 	   
       $_year = $HTTP_GET_VARS["nyear"];

    if( isset($select) )
    {
       // el formato de fecha debe venir en dd/mm/AAAA
	   if( eregi("/", $select ) )
	   {
	      $_day = substr( $select, 0, 2 );
	      $_month = substr( $select, 3, 2 );
		  
		  if( $_day[0] == '0' ) $_day = substr( $_day, 1, 5 );
		  if( $_month[0] == '0' ) $_month = substr( $_month, 1, 5 );
		  
	      $_year = substr( $select, 6, 4 );
	   }
    }

    // por default obtener la fecha de HOY
	if( !isset( $_day ) ) $_day = $GLOBALS["day"];  
	if( !isset( $_month ) ) $_month = $GLOBALS["month"];
	if( !isset( $_year ) ) $_year = $GLOBALS["year"];
	
	$c = new calendar( $_day, $_month, $_year, 1 );   // 4th parameter pick a date
	$c->startonmonday = 1;
	$c->events = Array();
	
	$c->show(1, 1, 0);
	
	print("<p><p>");
	
?>

</BODY>
</HTML>

