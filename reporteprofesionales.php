<?php ob_start(); ?>
<div align="center">
<h2><font face="Comic Sans MS,arial,verdana">Reporte Registro Pasajeros Mes de Febrero</font></h2>
<br>
 <br>  


<table align="center" style="text-align:center;" width="300px" cellpadding="2px" cellspacing="2px" border="0.5"
       >
    <tr bgcolor="#2180F9">
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Ciudad Abordaje</td>
        <td>Ciudad destino</td>
        <td>Fecha y hora salida</td>
        <td>Fecha y hora de llegada</td>
        <td>Clase de cabina y viajeros</td>
        <td>Aerolínea</td>
        <td> Mas info. Visita su web </td>
        <td>Precio Tiquete</td>
    </tr>
    <tr bgcolor="#33E9FF">
        <td>Juan Daniel</td>
        <td>Bermúdez Rosales</td>
        <td>Cali (CLO)</td>
        <td>Bogotá (BOG)</td>
        <td>10/02/21</td>
        <td>17/02/21</td>
        <td>1 adulto, clase Ejecutiva</td>
        <td><img src="Avianca.jpg" width="80" height="40"></td>        
        <td><a href="https://www.edestinos.com.co/aerolineas/al/av/avianca">Avianca.com</a></td>
        <td>750.440 COP</td>
    </tr>
    <tr bgcolor="#33E9FF">
        <td>Santiago</td>
        <td>Medina Pérez</td>
        <td>Bogotá (BOG)</td>
        <td>Brasil (BR)</td>
        <td>14/02/21</td>
        <td>28/02/21</td>
        <td>1 adulto, clase económica</td>
        <td><img src="Airlines.jpg" width="80" height="40"></td>        
        <td><a href="https://www.copaair.com/es/web/gs">CopAir.com</a></td>
        <td>2’810.090 COP</td>
    </tr>
    <tr bgcolor="#33E9FF">
        <td>Sebastian</td>
        <td>Bolaños Morales</td>
        <td>Cali (CLO)</td>
        <td>Venecia Marco Polo (VCE)</td>
        <td>18/02/21</td>
        <td>29/02/21</td>
        <td>1 adulto, clase económica</td>
        <td><img src="Latam.jpg" width="80" height="40"></td>        
        <td><a href="https://www.latamairlines.com/co/es">LatamAir.com</a></td>
        <td>2’417.503 COP</td>
    </tr>    
    <tr bgcolor="#33E9FF">
        <td>Wilson Daniel</td>
        <td>Sánchez Mosquera</td>
        <td>Bogotá (BOG)</td>
        <td>Medellín (MED)</td>
        <td>10/02/21</td>
        <td>25/02/21</td>
        <td>1 adulto, clase ejecutiva</td>
        <td><img src="Avianca.jpg" width="80" height="40"></td>        
        <td><a href="https://www.edestinos.com.co/aerolineas/al/av/avianca">Avianca.com</a></td>
        <td>818.533 COP</td>
    </tr>       
    <tr bgcolor="#33E9FF">
        <td>Jorge Andres</td>
        <td>Palacios Cruz</td>
        <td>Bogotá (BOG)</td>
        <td>Quito (UIO)</td>
        <td>12/02/21</td>
        <td>21/02/21</td>
        <td>1 adulto, clase ejecutiva</td>
        <td><img src="Latam.jpg" width="80" height="40"></td>        
        <td><a href="https://www.latamairlines.com/co/es">LatamAir.com</a></td>
        <td>3’382.200 COP</td>
    </tr>
  
</table>
 
 
 </div>

<?php

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
//$pdf=new FPDF('P', 'mm', '300, 200');  

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "profesionales.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);

?>
