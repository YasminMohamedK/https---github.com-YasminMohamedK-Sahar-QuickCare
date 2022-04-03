<?php
class categories extends view{
    public function image($name){


    }
    public function output()
  {
    $title = $this->model->title;
    
    require APPROOT . '/views/inc/header.php';
    

   ?>
    
    <div class="container">
      <h1 class="display-4"> <center><?php echo $title; ?></center></h1>
      
    </div>
  
  

  <div class="row">
   
     <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'cables.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Cables</button>
        
      </div>
  </div>
      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'carHolder.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Car Holders</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'charger.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">chargers</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'Earphone.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Earphones</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'HeadPhone.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Head Phones</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'Maintenance.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Maintenance</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'memory.jpeg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Memory</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'PowerBank.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Power Banks</button>
        
      </div>
      </div>

      <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . 'Speaker.jpg' ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button">Speakers</button>
        
      </div>
      </div>

    </div>

<?php

    require APPROOT . '/views/inc/footer.php';
  }
}
?>