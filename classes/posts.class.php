<?php

class Posts extends Dbh {
    public function getPost()
    {
        $sql = 'Select * from posts';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll())
        {
            return $result;
        }
    }
}