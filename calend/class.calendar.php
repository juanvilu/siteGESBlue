<?php
//
// By Ricardo Costa - ricardo@icorp.com.br - 2002
// Classe para exibiçao de calendário
//
//  calendar
//    +---- calendar()
//    +---- show()
//
//

class calendar {
   var $day; 
   var $month;
   var $year;
   
   var $picking_date;
   
   var $avoid_saturday=0;
   var $avoid_sunday=0;
   
   var $startonmonday=0;  // NO empieza en Lunes
   
   var $content;   // Conteudo HTML formatado
   var $page;      // Página para link
   var $month_name;   // Nombre del mes
   var $year_bgcolor = "E9EBF1"; // Cor de fundo do ano
   var $month_bgcolor = "CCCCCC"; // Cor de fundo do mes
   var $days_bgcolor = "8D9ABA"; // Cor de fundo dos dias da semana
   var $day_color = "E9EBF1"; // Cor de fundo dos dias
   var $day_today_color = "FF9999"; // Cor de fundo de hoje
   var $font_color = "4C5B7D"; // Cor da fonte
   var $bg_color = "E9EBF1"; // Cor de fundo
   var $event_bgcolor = "FFCC99"; // Cor de fundo dos compromissos
   var $events = array(); // Array de eventos
   var $events_hint = array(); // Array com a descrição dos eventos
   var $day_height_pxls; 
   
   var $activities_for_today;
   var $link_url;
   var $link_params;
   
   var $show_big;

   function calendar( $initday, $initmonth, $inityear, $pick_date=0 ) 
   {
      $this->page = $_SERVER['PHP_SELF']; ;

      $this->year  = $inityear;
	  $this->month = $initmonth;
      $this->day   = $initday;
	  $this->day_height_pxls = 20;
	  
	  $this->show_big = 0;
	  
	  $this->picking_date = $pick_date;

      if ( $this->month == 0) 
	  {
         $this->year--;
         $this->month = 12;
      }
      elseif ($this->month == 13) 
	  {
         $this->year++;
         $this->month = 1;
      }

      $this->month_name = $GLOBALS["month_year"];
      $this->month_name = $this->month_name[ $this->month ];
   }

   function show($showyear = 1, $showmonth = 1, $showtoday = 1) 
   {
	  global $today_str, $days_week;
	  
	  if( $this->startonmonday == 1 )
		$days_week = array(0 => "Lunes", 1 => "Martes", 2 => "Miércoles", 3 => "Jueves", 4 => "Viernes", 5 => "Sábado", 6 => "Domingo");
	  else
		$days_week = array(0 => "Domingo", 1 => "Lunes", 2 => "Martes", 3 => "Miércoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sábado");
	      
	  $this->activities_for_today = 0;
	  
	  $ct = (($this->show_big==1) ? "</font>" : "");
	 
      $this->content = "<table width='" . (($this->show_big==1) ? "300" : "180") . "' border='0' cellspacing='0' cellpadding='0'>";

      if ($showyear == 1) 
	  {
	    $ot = (($this->show_big==1) ? "<font size=+2>" : "");

		$this->content .= "<tr align='center'>
                             <td width='20' bgcolor='#".$this->year_bgcolor."' height='".$this->day_height_pxls."'><b><a href='".$this->page . "?" . $this->link_params . "&nmonth=" . $this->month . "&nyear=" . ($this->year - 1) . "&nday=" . $this->day . "' ><IMG SRC=..\images\anio_previo.gif " . (($this->show_big==1) ? "height=25 width=25" : "") . "></a></b></td>
                             <td colspan='5' bgcolor='#".$this->year_bgcolor."' height='".$this->day_height_pxls."'><b>$ot" . $this->year . "$ct</b></td>
                             <td width='20' bgcolor='#".$this->year_bgcolor."' height='".$this->day_height_pxls."'><b><a href='".$this->page . "?" . $this->link_params . "&nmonth=" . $this->month . "&nyear=" . ($this->year + 1) . "&nday=" . $this->day . "'><IMG SRC=..\images\anio_sig.gif " . (($this->show_big==1) ? "height=25 width=25" : "") . "></a></b></td>
                           </tr>";
      } 
    
	  if ($showmonth == 1) 
	  {
	    $ot = (($this->show_big==1) ? "<font size=+1>" : "");
		
	    $this->content .= "<tr align='center'>
                           <td class=columnSmall width='20' bgcolor='#".$this->month_bgcolor."' height='$this->day_height_pxls'><b><a href='".$this->page."?" . $this->link_params . "&nmonth=" . ($this->month - 1) . "&nyear=" . $this->year . "&nday=" . $this->day . "'><IMG SRC=..\images\mes_previo.gif " . (($this->show_big==1) ? "height=25 width=25" : "") . "></a></b></td>
                           <td class=columnSmall colspan='5' bgcolor='#".$this->month_bgcolor."' height='$this->day_height_pxls'><b>$ot" . $this->month_name . "$ct</b></td>
                           <td class=columnSmall width='20' bgcolor='#".$this->month_bgcolor."' height='$this->day_height_pxls'><b><a href='".$this->page."?" . $this->link_params . "&nmonth=" . ($this->month + 1) . "&nyear=" . $this->year . "&nday=" . $this->day . "'><IMG SRC=..\images\mes_sig.gif " . (($this->show_big==1) ? "height=25 width=25" : "") . "></a></b></td>
                           </tr>";
	  }
 
      $this->content .= "\n</table>\n";
	  $this->content .= "<table class=columnSmall width='" . (($this->show_big==1) ? "300" : "180") . "' border='1' cellspacing='0' cellpadding='0' bordercolor=black>\n";
      $this->content .= "<tr align='center' bgcolor='#".$this->days_bgcolor."'>\n";

	  $ot = (($this->show_big==1) ? "<font size=+0>" : "");

      // desplegar los días de la semana
	  for ($l = 0; $l <= 6; $l++)
	  { 
			$okday = 1;
			
			if( $this->avoid_saturday == 1 && $l == 5 ) $okday = 0;
			if( $this->avoid_sunday == 1 && $l == 6 ) $okday = 0;

			$this->content .= "<td bgcolor='#" . $this->days_bgcolor . "' width='20' height='$this->day_height_pxls' align=middle><b>"  .
			       $ot . (($okday==0) ? "<font color=gray>" : "") . $days_week[$l][0] . $ct . (($okday==0)? "</font>" : "") . "</b></td>"; 
	        $this->content .= "</font>";				   
	  }
	  
      $this->content .= "</tr>";

      $cont_day = 1;
	  $event_number = 0;
      
	  // weeks
	  for( $l = 1; $l <= 6; $l++) 
	  {
         $this->content .= "<tr>";
		 
		 // days
         for($c = 0; $c <= 6; $c++)
		 {
           // armar una fecha del mes
		   $xday = date("w",mktime (0,0,0, $this->month, $cont_day, $this->year));

		   $bg=$this->day_color;	
	   
		   if( $this->startonmonday == 1 ) 
		   {
		      if( $c==6) $tmpday = 0;
			  else $tmpday = $c+1;
		   }
		   else $tmpday = $c;
			
			if ( checkdate( $this->month, $cont_day, $this->year ) & $xday == $tmpday) 
			{
               $okday = 1;
			   
			   if( $this->avoid_saturday == 1 && $c == 5 ) $okday = 0;
			   if( $this->avoid_sunday == 1 && $c == 6 ) $okday = 0;
			   
			   if( $okday== 1) 
			   {
				   if (in_array( mformat(2, $cont_day) . "-" . mformat(2, $this->month) . "-" . $this->year, $this->events) )
				   {
					  if ($cont_day == $this->day)
					  {
						$activities_for_today = 1;   
						$bg = $this->event_bgcolor;
					  }
					  else
						$bg = $this->event_bgcolor;
						
				   }
				   else 
				   { 
					  if (($cont_day == $this->day) and ($GLOBALS["month"] == $this->month) and ($GLOBALS["year"] == $this->year) )
						 $bg = $this->day_today_color;
				   }
	
					if( $this->picking_date == 1 )
					{
					   // cuando se esté seleccionando una fecha 
					   $frm_date = '"' . ($cont_day<10?"0":"") . $cont_day . "/" . ($this->month<10?"0":"") . $this->month . "/" . $this->year . '"';
					
					   $this->content .= "<td align='center' width='20' height='$this->day_height_pxls' bgcolor='#".$bg."'>". 
										 "<a href='javascript:parent.opener.returnDate( " . $frm_date . " )' >".$cont_day."</a></td>";
					}
					else
					{ 
					   if ( in_array( mformat(2, $cont_day) . "-" . mformat(2, $this->month) . "-" . $this->year, $this->events ) )
							$this->content .= "<td align=middle width='20' height='$this->day_height_pxls' bgcolor='#".$bg."'>".
							  "<a href='" . $this->link_url . "?" . $this->link_params . "&nmonth=" . $this->month . "&nyear=" . $this->year . "&nday=" . $cont_day . "&wday=" . $c ."&' title='".$this->events_hint[$event_number++]."' target=_new>$ot" . $cont_day . "$ct</a>".
							  "</td>";
					   else 
							$this->content .= "<td align='center' width='20' height='$this->day_height_pxls' bgcolor='#".$bg."'>$ot".$cont_day."$ct</td>";
					}
				}
				else
				   // día deshabilitado (sunday o saturday)
				   $this->content .= "<td align='center' width='20' height='$this->day_height_pxls' bgcolor=silver><font color=gray>$cont_day</font></td>";
				    
			    $cont_day++;
			}
			else 
			   $this->content .= "<td align='center' width='20' height='$this->day_height_pxls' bgcolor=silver>&nbsp;</td>";

		   
	     }
    
         $this->content .= "</tr>";

         if ( !checkdate( $this->month, $cont_day, $this->year)) break;
      }
   
	  if ($showtoday == 1) 
	  {
	    $this->content .= "</table>
                           <table class=columnSmall width='140' border='0' cellspacing='0' cellpadding='0' >
                           <tr><td align='center' bgcolor=#".$this->year_bgcolor."><b><a href='".$this->page."?nmonth=".date("n")."&nyear=".date("Y")."&nday=".date("d")."' class='calendar_font'>$today_str</a></b></td></tr>
                           <tr height='10'><td></td></tr></table>";
      }
	  
	  $this->content .= "</table>";
     
      print($this->content);
	  
	  return $this->activities_for_today;

   }

} 
?>