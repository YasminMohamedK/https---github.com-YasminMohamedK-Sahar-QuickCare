<?php
class view_usersModel extends Model
{
    public  $title = 'Users Profiles Page';

    public function view_users()
    {
        $this->dbh->query('SELECT * from users ');
        $records=$this->dbh->resultSet();

    }
}
?>