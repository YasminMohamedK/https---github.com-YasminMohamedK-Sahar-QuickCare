<style>
  table th{
    color:black;
    background-color:#eca969;
}
</style>
<?php

class view_users extends View
{

  public function output()
  {
    $title = $this->model->title;
    

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"><center> $title</center></h1>
    </div>
  </div>
  <div class="container,table">
	<table class="table table-striped table-bordered table-hover ">
		<thead><tr class="table-warning">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Phone Number</th>
		
		</tr>
	</thead>
	<tbody>
		


  <tr >
    <td> 1</td>
    <td>Yasmin</td>
    <td>Kandil</td>
    <td>new cairo</td>
    <td>kandil@gmail.com</td>
    <td>0100000000</td>
  </tr>	
  <tr>
  <td> 2</td>
    <td>Salma</td>
    <td>Kandil</td>
    <td>new cairo</td>
    <td>kandil@gmail.com</td>
    <td>0100000000</td>
    </tr>
    <tr>
    <td> 3</td>
      <td>Rogina</td>
      <td>Kandil</td>
      <td>new cairo</td>
      <td>kandil@gmail.com</td>
      <td>0100000000</td>
      </tr>
      <tr>
    <td> 4</td>
      <td>Miriam</td>
      <td>Kandil</td>
      <td>new cairo</td>
      <td>kandil@gmail.com</td>
      <td>0100000000</td>
      </tr>
  
	</tbody>
</table>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
