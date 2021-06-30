<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
           
    
<title>DOMPDF</title>
<link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgOSmqvZ4mKXzUT9ok_wYiAfagJFAAGn9ohsg5ItGyJAyDigtH" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>

<body background="Fondo_1.jpg" >
<div class="container" id = "Principal" align="center">
 <h2><font face="Comic Sans MS,arial,verdana">Aerolíneas</font></h2>
 <h2><font face="Bookman Old Style, Book Antiqua, Garamond">Registro Pasajeros Mes de Febrero</font></h2>
 <br>  

<table style="text-align:center;" center width="500px" cellpadding="5px" cellspacing="5px" border="2">
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
        <td><img src="Avianca.jpg" width="200" height="100"></td>        
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
        <td><img src="Airlines.jpg" width="200" height="100"></td>        
        <td><a href="https://www.copaair.com/es/web/gs">Copaair.com</a></td>
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
        <td><img src="Latam.jpg" width="200" height="100"></td>        
        <td><a href="https://www.latamairlines.com/co/es">Latamairlines.com</a></td>
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
        <td><img src="Avianca.jpg" width="200" height="100"></td>        
        <td><a href="https://www.edestinos.com.co/aerolineas/al/av/avianca">Avianca.com</a></td>
        <td>818.533 COP</td>
    </tr>       
    <tr bgcolor="#33E9FF">
        <td>Jorge Andres</td>
        <td>Palacios Cruz</td>
        <td>Bogotá(BOG)</td>
        <td>Quito (UIO)</td>
        <td>12/02/21</td>
        <td>21/02/21</td>
        <td>1 adulto, clase ejecutiva</td>
        <td><img src="Latam.jpg" width="200" height="100"></td>        
        <td><a href="https://www.latamairlines.com/co/es">Latamairlines.com</a></td>
        <td>3’382.200 COP</td>
    </tr>
      
  
</table>
    
 
 
 <h4><br>¿Te gustaria guardar la información suministrada?</h4>
    <br>    
    <div class="row">
        <div id="content" class="col-lg-12">
<a class="btn btn-primary" href="reporteprofesionales.php"><i class="fa fa-download"></i> Descargar PDF</a>
        </div>
    </div>  
 
    
</div>

</body>
</html>
