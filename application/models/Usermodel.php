<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodelmodel extends CI_Model {
    public function logins($logins, $passwords)  { 
    $sql = 'SELECT  * FROM `users` WHERE  logins = "?" AND passwords = "?"';
        $result = $this->db->query($sql, array($logins, $passwords));
        return $result->row_array();
    }
}
?>