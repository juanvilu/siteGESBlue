<?php

  if( !issetsessionvar("mobile") )
  {
 	  // no esta puesta la variable mobile, con esto solamente se hace una vez el proceso de verificacion de resolucion
	  $aUserAgents = array(
	   'Minimo' => 'Minimo',
	   'OperaMini' => 'Opera Mini',
	   'AvantGo' => 'AvantGo',
	   'Plucker' => 'Plucker',
	   'NetFront' => 'NetFront',
	   'SonyEricsson' => 'SonyEricsson',
	   'Nokia' => 'Nokia',
	   'Motorola' => 'mot-',
	   'BlackBerry' => 'BlackBerry',
	   'WindowsMobile' => 'Windows CE',
	   'PPC' => 'PPC',
	   'PDA' => 'PDA',
	   'Smartphone' => 'Smartphone',
	   'Palm' => 'Palm'
	  );

	  setsessionvar( "mobile", 0 );
	
	  foreach($aUserAgents as $nav=>$ua)
	  {
		 if(strstr($_SERVER['HTTP_USER_AGENT'], $ua) != false)
			setsessionvar( "mobile", 1 );
	  }
  }

if(getsessionvar("mobile")==1)
{
  setsessionvar( "max_table_width", "100%" );
  $max_table_width = "100%";
}
else
{
	if(isset($_COOKIE["user_screen_width"]))
	{
		$screen_width = $_COOKIE["user_screen_width"];
		
		  $max_table_width = 770;
		  
		  if( isset($screen_width) )
		  {
			 if( $screen_width <= 800 )
				$max_table_width = 770;
			 else
				$max_table_width = 800;	
		  }
		  
		  setsessionvar( "max_table_width", $max_table_width );
	}
	else //means cookie is not found set it using Javascript
	{
		echo '<script language="javascript">';
		echo "   writeCookie();";
		echo "";
		echo 'function writeCookie()';
		echo '{';
		echo '   var today = new Date();';
		echo '   var the_date = new Date("December 31, 2023");';
		echo '   var the_cookie_date = the_date.toGMTString();';
		echo '   var the_cookie = "user_screen_width=" + screen.width;'; // + ";expires=" + the_cookie_date;';
		echo '   document.cookie=the_cookie;';
		echo '}';
		echo '</script>';  
		
		$max_table_width = 770;
		
		setsessionvar( "max_table_width", $max_table_width );
	}	
}

?>