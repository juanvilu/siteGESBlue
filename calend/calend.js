// Author: Robert W. Husted  (robert.husted@iname.com)
// Modified By:   Eric C. Ertl
var calDateField  = '';
var calDateField2 = '';

function setDateField(dateField) 
{
	calDateField = dateField;
}

function setDateField2(dateField2) 
{
    calDateField2 = dateField2;    
}

function doNothing() 
{
}

function returnDate( strDate )
{
    calDateField.value = strDate;
   
	calDateField.focus();
    top.calendwin.close();
}


function ValidarFechas( fech_sal, fech_reg )
{
	array_sal = fech_sal.split('/');
	array_reg = fech_reg.split('/');
	
	if (Number(array_sal[2]) < 100) 
	{
		array_sal[2] = "20" + array_sal[2];
	}
	
	if (array_sal[1].length == 1) 
	{
		array_sal[1] = "0" + array_sal[1];
	}
	
	if (array_sal[0].length == 1) 
	{
		array_sal[0] = "0" + array_sal[0];
	}
	
	if (Number(array_reg[2]) < 100) 
	{
		array_reg[2] = "20" + array_reg[2];
	}
	
	if (array_reg[1].length == 1) 
	{
		array_reg[1] = "0" + array_reg[1];
	}
	
	if (array_reg[0].length == 1) 
	{
		array_reg[0] = "0" + array_reg[0];
	}
	
	salida = array_sal[2]+array_sal[1]+array_sal[0];
	regreso = array_reg[2]+array_reg[1]+array_reg[0];
	
	if ((Number(salida))<=(Number(regreso))) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

function ValidarFecha( fecha )
{
	array_fecha = fecha.split('/');
	
	if ( array_fecha.length == 3 )
	   return true
	else
	   return false; 
	  
}

function EsFechaValida(sFecha, oObjeto)
{
	var sNuevoFecha;
	var array_fecha = sFecha.split('/');

	if (array_fecha.length == 3)
	{
		var nDia, nMes, nAnio;

		nDia = parseInt(array_fecha[0], 10);
		nMes = parseInt(array_fecha[1], 10);
		nAnio = parseInt(array_fecha[2], 10);

		if (! (isNaN(nDia) || isNaN(nMes) || isNaN(nAnio)) )
		{
			if ((nDia == 31 && (nMes == 1 || nMes == 3 || nMes == 5 || nMes == 7 || nMes == 8 || nMes == 10 || nMes == 12)) || nDia < 31)
			{
				if (nDia >= 1 && nDia <= 31 && nMes >= 1 && nMes <= 12)
				{
				
					if( nAnio < 10 )
						nAnio = nAnio + 2000;
					else
					{
						if( nAnio < 100 )
							nAnio = 1900 + nAnio;
					}
				
					if( nAnio >= 1900 && nAnio <= 2100 ) 
					{
						sNuevoFecha = nDia;

						if (nDia < 10) 
							sNuevoFecha = '0' + sNuevoFecha;

						if (nMes < 10)
							sNuevoFecha = sNuevoFecha + '/' + '0' + nMes;
						else
							sNuevoFecha = sNuevoFecha + '/' + nMes;

						sNuevoFecha = sNuevoFecha + '/' + nAnio;
						   
						oObjeto.value = sNuevoFecha;

						return true;
					}
				}
			}
		}
	}

	return false;
}

// Valida que la FechaDesde sea Menor o Igual que la FechaHasta
function Validar2Fechas(dFechaDesde, dFechaHasta)
{
	var aArrayDesde = dFechaDesde.split('/');
	var aArrayHasta = dFechaHasta.split('/');
	var nDia1, nMes1, nAnio1;
	var nDia2, nMes2, nAnio2;
	var nDesde, nHasta;
	
	// en este punto asumiremos que ambas fechas estan en el formato correcto
	nDia1  = parseInt(aArrayDesde[0], 10);
	nMes1  = parseInt(aArrayDesde[1], 10);
	nAnio1 = parseInt(aArrayDesde[2], 10);
	
	nDesde = (nAnio1*1000) + (nMes1*31) + nDia1;
	
	nDia2  = parseInt(aArrayHasta[0], 10);
	nMes2  = parseInt(aArrayHasta[1], 10);
	nAnio2 = parseInt(aArrayHasta[2], 10);
	
	nHasta = (nAnio2*1000) + (nMes2*31) + nDia2;
	
	if (Number(nDesde) <= Number(nHasta))
		return true;
	else
		return false;	
}
