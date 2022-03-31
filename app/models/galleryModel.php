<?php
require_once 'UserModel.php';
class galleryModel 
{
    public  $title = 'Gallery';

    public function pictures()
    {
        $this->dbh->query('SELECT * from gallery ');
        $this->dbh->bind(':pic', $this->pic);

        $record = $this->dbh->single();

    }
}
