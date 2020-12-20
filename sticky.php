<?php require 'stickyHeader.php';?>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0"> <!-- Mettre le fond et la couleur du texte dans le css -->
  <div class="container">
    <h1 class="mt-5">Principal</h1>
    <div class="row">
    <div class="col-sm">
      Colonne 1
    </div>
    <div class="col-sm">
      Colonne 2
    </div>
    <div class="col-sm">
      <div style="text-align:center;padding:1em 0;"> 
        <h3><a style="text-decoration:none;"     href="https://www.zeitverschiebung.net/fr/city/2988507"><span style="color:gray;">Heure actuelle</span><br />
        Paris, France</a></h3> 
        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&amp;size=medium&amp;timezone=Europe%2FParis" width="100%" height="115" frameborder="0" seamless></iframe> 
      </div>
      <div style="text-align:center;padding:1em 0;">
        <a href="http://noiseq.com/" target="_blank"><img src="img/noiseq_custom_logo_light.png" alt="noiseq_custom_logo_light.png" title="NoiseQ" width="157" height="37" border="0" /></a>
      </div>
    </div>
  </div>
  </div>
</main>

<?php require 'stickyFooter.php';?>