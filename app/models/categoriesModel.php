<?php
class categoriesModel extends Model
{
    public  $title = 'Categories Page';

    public function view_users()
    {
        $this->dbh->query('SELECT * from categories ');
        $records=$this->dbh->resultSet();

    }
}
?>