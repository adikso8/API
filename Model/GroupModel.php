<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class GroupModel extends Database
{
    public function getGroups($limit)
    {
        return $this->select("SELECT * FROM groups LIMIT ?", ["i", $limit]);
    }
}