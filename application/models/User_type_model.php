<?php
class User_type_model extends CI_model
{
    public function getUserType()
    {
        $query = "SELECT * FROM user_types";
        return $this ->db->query($query);
    } 
}
