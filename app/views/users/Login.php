<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">
<script type="text/javascript">
	function showpass() {
  var x = document.getElementById("passs");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php

class Login extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    flash('register_success');
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
    $action = URLROOT . 'users/login';
    $registerUrl = URLROOT . 'users/register';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Sign In</h2>
    <form action="$action" method="post">
EOT;

    echo $text;
    $this->printEmail();
    $this->printPassword();

    $text = <<<EOT
    <div class="container">
    <div class="checkbox mb-3 mt-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Login" class="form-control btn btn-warning btn-block">
        </div>
        <div class="col">
          <a href="$registerUrl" class="form-control btn btn-lg btn-block">New User, Sign up</a>
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
    $text = <<<EOT
    <button type="button" class="btn btn-default btn-sm" onclick="this->showpass()">
    <i class="bi bi-eye-fill"></i> Show Password
  </button>
EOT;
    echo $text;
  }

  private function printInput($type, $fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" required="">
      
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
