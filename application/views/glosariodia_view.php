<!doctype html>
<?php 
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE 
header ("Pragma: no-cache"); //PARANOIA, NO GUARDAR EN CACHE 
?>


<!-- Portfolio Grid Section -->
<header id="inicio">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                  <div class="" >
                        <span class="nameQue"><font color="#7DBC51"><strong><h1>Días</strong></h1></font></span>
                        
                    </div>

<table width="100%" align="center" >

<!--<div class="elmenu">-->
<!--Columna 1-->
<tr>   
  <td>
  <h1><strong>&nbsp;&nbsp;días de la semana</strong></h1>
  <video id="demo1" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo1').play()" >
    <source src="<?php echo base_url()?>style/inicio/videos/dias/dias_de_la_semana.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  
  <td>
  <h1><strong>&nbsp;&nbsp;lunes</strong></h1>
  <video id="demo2" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo2').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/lunes.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  <td>
  <h1><strong>&nbsp;&nbsp;martes</strong></h1>
  <video id="demo3" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo3').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/martes.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  
</tr>
<!--Columna 2-->
<tr>
  <td>
  <h1><strong>&nbsp;&nbsp;miércoles</strong></h1>
  <video id="demo4" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo4').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/miércoles.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  
  <td>
  <h1><strong>&nbsp;&nbsp;jueves</strong></h1>
  <video id="demo5" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo5').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/jueves.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  <td>
  <h1><strong>&nbsp;&nbsp;viernes</strong></h1>
  <video id="demo6" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo6').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/viernes.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>
  
</tr>
<!--Columna 3-->
<tr>
  <td>
  <h1><strong>&nbsp;&nbsp;sábado</strong></h1>
  <video id="demo7" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo7').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/sabado.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>

  <td>
  <h1><strong>&nbsp;&nbsp;domingo</strong></h1>
  <video id="demo8" autoplay="autoplay" width="380" height="300" onclick="document.getElementById('demo8').play()">
    <source src="<?php echo base_url()?>style/inicio/videos/dias/domingo.mp4" type="video/mp4">
    Tu navegador no implementa el elemento <code>video</code>.
  </video>
  </td>

</tr>
</table>

<hr>
  <div class="agradecimientos" align="center">
    <table width="70%">
    <tr>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/universidadunalmanizales.png" width="90px">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/colciencias.png" width="240px">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/minieducacion.png" width="140px">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/medellin.png" width="70px">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/logogaia.gif" width="70px">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/hetah.png" width="80px" class="hetah">
    </td>
    <td>
    <img src="<?php echo base_url()?>style/inicio/img/asorcal.png" width="80px" class="hetah">
    </td>
    </tr>
    </table>
  </div>
          </div>
        </div>
    </div>
</header>








<body style="overflow-y:hidden">

    <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">

<table border="0" width="100%">
  <tr>
  <td>
        <a href="glosario"><font style="margin-left: 25%;
      color:white; "><span class="glyphicon glyphicon-arrow-left userColor" width="100%"></span></font></a>

    </td>
    <td width="80%" align="center">
      <div class='titleBarra'><font style="margin-left: -25%;
      color:white; ">GLOSARIO</div></font> 
    </td>
    
  </tr>
</table>

</nav>

   

</body>
</html>

<style media="screen">
    .nameQue{
        font-size: 200%;
    }
    .elmenu{
        margin-top: -2%;
    }
    .mensaje{
        margin-top: -50%;
    }
    .hetah{
        margin-top: -1%;
    }
    .agradecimientos{
      margin-top: 5%;
    }
      hr {
    
    border: 1px dashed #278e79; 
  }
  .imgHover:hover{
  opacity: 0.3;
}

html,body { 
  overflow:scroll; 
}
</style>