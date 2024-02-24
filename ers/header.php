<?php
$olocal = $_SERVER['SCRIPT_NAME'];

// PÁGINAS
if ($olocal == "/ers/index.php") { $titulo = ""; }
if ($olocal == "/ers/quem-somos.php") { $titulo = "Quem somos | "; }
if ($olocal == "/ers/solucoes.php") { $titulo = "Nossas soluções | "; }
if ($olocal == "/ers/contato.php") { $titulo = "Contato | "; }

// SISTEMAS
if ($olocal == "/ers/nfe-prime.php")
{
  $titulo = "NF-e Prime | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/funerarias.php")
{
  $titulo = "PlenitudeSystem | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/hotelarias.php")
{
  $titulo = "HoteleiroSoft | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/bares-rest.php")
{
  $titulo = "ConnectBares | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/oticas.php")
{
  $titulo = "PlenitudeSystem | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/advogarsoft.php")
{
  $titulo = "AdvogarSoft | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/recibo.php")
{
  $titulo = "Recibos Contabéis | ";
  $descri = "";
  $imagem = "";
}


if ($olocal == "/ers/imoveis.php")
{
  $titulo = "Imóveis | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/geal.php")
{
  $titulo = "Gerenciamento de alunos | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/distbebidas.php") {
  $titulo = "PlenitudeSystem | ";
  $descri = "";
  $imagem = "";
}

if ($olocal == "/ers/os.php")
{
  $titulo = "O.S. | ";
  $descri = "";
  $imagem = "";
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="business portfolio site template" />
  <meta name="keywords" content="business, marketing, corporate, app, software, marketing"/>
  <meta name="author" content="Tansh" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <title><?php echo $titulo; ?>ERS Soluções em informática</title>

  <!--Fav and touch icons-->
  <link rel="shortcut icon" href="img/icons/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">

  <!--google web font-->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>

  <!--style sheet-->
  <link rel="stylesheet" media="screen" href="css/bootstrap.css"/>
  <link rel="stylesheet" media="screen" href="css/bootstrap-responsive.css"/>
  <link rel="stylesheet" media="screen" href="css/style.css"/>

  <!--jquery libraries / others are at the bottom-->
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script src="js/modernizr.js" type="text/javascript"></script>

  <!--elastislide carousel script starts-->
  <link rel="stylesheet" media="screen" href="css/elastislide.css"/>
  <script type="text/javascript" src="js/jquery.elastislide.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#carousel').elastislide({
        imageW 		: 300,
        margin		: 20,
        border		: 0,
        easing		: 'easeInBack'
      });
    });
  </script>
  <!--elastislide carousel script ends-->

  <!--prettyphoto scripts starts-->
  <link rel="stylesheet" media="screen" href="css/prettyPhoto.css"/>
  <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
      });
      $("a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
        animation_speed: 'fast',
        slideshow: 5000,
        autoplay_slideshow: false,
        opacity: 0.80,
        show_title: false,
        theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
        overlay_gallery: false,
        social_tools: false,
        changepicturecallback: function(){
          var $pp = $('.pp_default');
          if( parseInt( $pp.css('left') ) < 0 ){
            $pp.css('left', 0 );
          }
        }
      });	
    });
  </script>
  <!--prettyphoto scripts ends-->

  <!--flexslider scripts starts-->
  <link rel="stylesheet" media="screen" href="css/flexslider.css"/>
  <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
  <script type="text/javascript"> 
// Slider with thumbnail
$(document).ready(function() {
  $('#thumb-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    directionNav: false,
    controlNav: false,
    itemWidth: 180,
    itemMargin: 0,
    asNavFor: '#slider'
  });
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav: false,
    animationLoop: true,
    slideshow: true,
    sync: "#thumb-slider"
  });
});
</script>
<!--flexslider scripts ends-->


<!--flexslider scripts starts-->
<link rel="stylesheet" media="screen" href="css/flexslider.css"/>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script type="text/javascript"> 
  $(window).load(function() {
//Image Slider - about page
$('.image-slider').flexslider({
  animation: "fade",
  slideshowSpeed: 4000,
  animationDuration: 600,
  controlNav: false,
  keyboardNav: true,
  directionNav: true,
  pauseOnHover: true,
  pauseOnAction: true,
});
});
</script>
<!--flexslider scripts ends-->



</head>

<body>
  <!-- [INÍCIO] GOOGLE ANALYTICS -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89948407-1', 'auto');
    ga('send', 'pageview');

  </script>
  <!-- [FIM] GOOGLE ANALYTICS -->

<!-- header starts
  ================================================== -->
  <section id="header" class="clearfix">
    <div class="container">
      <div class="row">

        <!--logo starts-->
        <div class="span4 logo"><a href="./"><img src="img/logo.png" width="148" height="80" alt="logo"></a></div>
        <!--logo ends-->

        <div class="span8 clearfix">

          <!--social starts-->
          <ul class="social clearfix">
            <li><a href="#"><img src="img/icons/social-icon-linkedin.png" width="28" height="28" alt="icon"></a></li>
            <li><a href="#"><img src="img/icons/social-icon-facebook.png" width="28" height="28" alt="icon"></a></li>
            <li><a href="#"><img src="img/icons/social-icon-twitter.png" width="28" height="28" alt="icon"></a></li>
          </ul>
          <!--social ends-->

          <?php include("menu.php") ?>

        </div>
      </div>
    </div>
  </section>
<!-- header ends
  ================================================== -->
