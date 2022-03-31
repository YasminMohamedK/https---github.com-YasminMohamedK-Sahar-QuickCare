<?php
//class setters w getters l 7aget el user el haye3ml beeha login
class UserModel extends model
{
    protected $email;
    protected $password;

    protected $emailErr;
    protected $passwordErr;

    public function __construct()
    {
        parent::__construct();
        $this->email    = '';
        $this->password = '';

        $this->emailErr    = '';
        $this->passwordErr = '';
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmailErr()
    {
        return $this->emailErr;
    }
    public function setEmailErr($emailErr)
    {
        $this->emailErr = $emailErr;
    }

    public function getPasswordErr()
    {
        return $this->passwordErr;
    }
    public function setPasswordErr($passwordErr)
    {
        $this->passwordErr = $passwordErr;
    }

    public function findUserByEmail($email)//selects emails from database
    {
        $this->dbh->query('select * from users where Email= :email');
        $this->dbh->bind(':email', $email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)//check if this email already exists
    {
        return $this->findUserByEmail($email) > 0;
    }
}
