<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

     <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    </head>
<!--  Empieza Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="caroimage/ciudades/4.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lo mejor de Canc&uacute;n.</h1>
              <p>Las mejores fotos,lugares a visitar, &aacute;reas naturales de ensue&ntilde;o de Canc&uacute;n encuentralas aqu&iacute;,</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver M&aacute;s...</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="caroimage/ciudades/1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lo mejor de las Ciudades del Mundo.</h1>
              <p>Encuentra todo acerca de las mejores ciudades del mundo.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer M&aacute;s</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="caroimage/playas/1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Las mejores Playas del Mundo.</h1>
              <p>Todo lo mejor de las Playas del Mundo, pa&iacute;ses donde se encuentran y m&aacute;s.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Galeria</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
    <!-- Termina Carousel -->
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="caroimage/ciudades/2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Lo M&aacute;s Popular</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="caroimage/ciudades/3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Lo M&aacute;s Destacado</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="caroimage/ciudades/4.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Lo M&aacute;s Interesante</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</html>

<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'JMs Company';
?>
<div class="site-index">

<?php foreach ($models as $model) { ?>
    
    <h4><?= Html::encode($model->title) ?></h4>
    <div><?= Html::encode($model->excerpt) ?></div>
    <div>
        <?= Html::a('Leer Más',
            ['blogdetails', 'id' => $model->id],
            ['class' => 'btn btn-primary btn-xs']

            );
        ?>
    </div>

<?php }  ?>

    <div>
        <?= LinkPager::widget([
            'pagination' => $pages
            ]);
        ?>
    </div>

</div>