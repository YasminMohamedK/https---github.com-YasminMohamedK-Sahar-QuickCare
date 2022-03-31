<?php
require_once 'UserModel.php';
class LogoutModel extends UserModel
{
    private $msg = 'You logged out successfully';
    public function __construct()
    {
        flash('Logout_success', $this->msg);
    }
}
