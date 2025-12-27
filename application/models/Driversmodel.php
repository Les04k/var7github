<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driversmodel extends CI_Model {
    public function show_bike()  { 
        $sql = "SELECT 
    driver.id_drive, 
    driver.name, 
    type_drivers.name as typedriver, 
    size.name as agetipe, 
    driver.price, 
    driver.img 
FROM driver
LEFT JOIN type_drivers ON driver.tipe_id = type_drivers.id_tipe
LEFT JOIN size ON driver.size = size.id_size;";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function select_bike($id_driver){
        $sql = 'SELECT * FROM driver where id_drive = ?';
        $result = $this->db->query($sql, $id_driver);
        return $result->result_array();
    }
}
?>