<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driversmodel extends CI_Model {
    public function show_bike()  { 
        $sql = "SELECT driver.id_drive, driver.name, type_drivers.name as typedriver, size.name as agetipe, driver.price, driver.img FROM driver, type_drivers, size WHERE driver.id_drive = size.id_size and driver.id_drive = type_drivers.id_tipe";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>