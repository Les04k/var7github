<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function cabinet(){
           $this->load->view('temp/header.php');
            if($this->session->userdata('role') == 1){
      $this->load->view('temp/nav_c.php');
    }
       else {
      $this->load->view('temp/nav.php');
    }

       $id_user = $_SESSION['id_user'];
        $this->load->model('ordermodel');
       $data['result'] =  $this->ordermodel->orders($id_user);
        $this->load->view('cabinetu/cabinet.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function create_order(){
                   $this->load->view('temp/header.php');
            if($this->session->userdata('role') == 1){
      $this->load->view('temp/nav_c.php');
    }
       else {
      $this->load->view('temp/nav.php');
    }
       $id_user = $_SESSION['id_user'];
       $id_drive = $_GET['id_drive'];
       $this->load->model('driversmodel');
       $data['result'] =$this->driversmodel->select_bike($id_drive);
        $this->load->model('ordermodel');
        $this->ordermodel->creates_order($id_user);
        $this->load->view('cabinetu/create_order.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function createt_order(){
        if(!empty($_POST)){
            $id_user = $_POST['id_user'];
            $id_drive = $_POST['id_drive'];
            var_dump($id_drive, $id_user);
            $this->load->model('ordermodel');
            $this->ordermodel->creates_order(  $id_drive,$id_user);

        }
    }
}