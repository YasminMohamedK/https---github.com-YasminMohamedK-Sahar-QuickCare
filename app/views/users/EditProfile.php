<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/deleteConfirm.css">

<script type="text/javascript">
  	var modal = document.getElementById("myModal");

var btton = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btton.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>

<?php

class EditProfile extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> <center>$title</center></h1>
    </div>
  </div>

  </div>
  </div>
  </div>
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/editprofile';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Edit Profile</h2>
    <form action="$action" method="post" >
EOT;
    echo $text;
    $this->printFName();
    $this->printLName();
    $this->printEmail();
    $this->printPassword();
    $this->printConfirmPassword();
    $this->printAddress();
    $this->printMobile();
    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Edit Profile" class="form-control btn btn-warning btn-block">
        </div>
        <div class="col">
        <input type="button" value="Delete Profile" class="form-control btn btn-danger btn-block" id="myBtn">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printFName()
  {
    $val = $this->model->getFName();
    $err = $this->model->getFNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'first_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printLName()
  {
    $val = $this->model->getLName();
    $err = $this->model->getLNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'last_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid,'bi bi-envelope-fill');
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid,'bi bi-lock-fill');
  }
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid,'bi bi-lock-fill');
  }
  private function printAddress()
  {
    $val = $_SESSION['user_address'];
    $err = $this->model->getAddressErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'address', $val, $err, $valid,'bi bi-geo-alt-fill');
  }
  private function printMobile()
  {
    $val = "passs";
    $err = $this->model->getMobileErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'mobile', $val, $err, $valid,'bi bi-phone-fill');
  }
  private function printInput($type, $fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
  }
}
