<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
class gallery extends view{
    public function image($name){


    }
    public function output()
  {
    $title = $this->model->title;
    //$data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    
   // $text = <<<EOT
   ?>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> <center><?php echo $title; ?></center></h1>
      
    </div>
  </div>
  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
      <?php 
      for($i=1;$i<11;$i++){
        ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php $i ?>"></button>
    <?php 
      }
      ?>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo ImageRoot . 'SQ1.jpg' ; ?> " alt="" class="d-block" style="width:100%">
    </div>
    <?php 
    for($i=2;$i<11;$i++){
        ?>
    <div class="carousel-item">
      <img src="<?php echo ImageRoot . 'SQ'.$i.'.jpg' ; ?> " alt="Chicago" class="d-block" style="width:100%">
    </div>
   <?php } ?>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3>Carousel Example</h3>
  <p>The following example shows how to create a basic carousel with indicators and controls.</p>
</div>



<?php
//EOT;
   // echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
  