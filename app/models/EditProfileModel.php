<?php
require_once 'RegisterModel.php';
class EditProfileModel extends RegisterModel
{
    public  $title = 'Edit Profile Page';
    
    public function EditProfile()
    {
        $this->dbh->query("update users set FirstName='".$Fname."',LastName='".$Lname."', Email='".$email."', Password='".$password."', Address='".$address."', Mobile='".$mobile."' WHERE ID='".$_SESSION['user_id']."'");
        $this->dbh->bind(':fname', $this->Fname);
        $this->dbh->bind(':lname', $this->Lname);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':addr', $this->address); 
        $this->dbh->bind(':mob', $this->mobile);

        return $this->dbh->execute();
    }
}
