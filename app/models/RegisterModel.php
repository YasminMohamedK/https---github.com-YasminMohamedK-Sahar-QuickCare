<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
    protected $Fname;
    protected $FnameErr;
    protected $Lname;
    protected $LnameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    protected $address;
    protected $addrsErr;
    protected $mobile;
    protected $mobileErr;


    public function __construct()
    {
        parent::__construct();
        $this->Fname     = "";
        $this->FnameErr = "";
        $this->Lname     = "";
        $this->LnameErr = "";

        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";

        $this->address     = "";
        $this->addressErr = "";

        $this->mobile = "";
        $this->mobileErr = "";
    }

    public function getFName()
    {
        return $this->Fname;
    }

    public function setFName($Fname)
    {
        $this->Fname = $Fname;
    }

    public function getFNameErr()
    {
        return $this->FnameErr;
    }

    public function setFNameErr($FnameErr)
    {
        $this->FnameErr = $FnameErr;
    }
    public function getLName()
    {
        return $this->Lname;
    }

    public function setLName($Lname)
    {
        $this->Lname = $Lname;
    }

    public function getLNameErr()
    {
        return $this->LnameErr;
    }

    public function setLNameErr($LnameErr)
    {
        $this->LnameErr = $LnameErr;
    }

    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddressErr()
    {
        return $this->addressErr;
    }
    public function setAddressErr($addressErr)
    {
        $this->addressErr = $addressErr;
    }
    public function getMobile()
    {
        return $this->mobile;
    }
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function getMobileErr()
    {
        return $this->mobileErr;
    }
    public function setMobileErr($mobileErr)
    {
        $this->mobileErr = $mobileErr;
    }

    public function signup()
    {
        $this->dbh->query("INSERT INTO users (`FirstName`,`LastName`, `Email`, `Password`,`Address`,`Mobile`) VALUES(:fname, :lname, :email, :pass, :addr, :mob)");
        $this->dbh->bind(':fname', $this->Fname);
        $this->dbh->bind(':lname', $this->Lname);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':addr', $this->address); 
        $this->dbh->bind(':mob', $this->mobile);

        return $this->dbh->execute();
    }
}
