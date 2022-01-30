<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class KlientModel extends Database
{
    public function getKlients($limit)
    {
        return $this->select("SELECT * FROM klient LIMIT ?", ["i", $limit]);
    }
}