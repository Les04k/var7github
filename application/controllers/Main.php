<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()  {
        $this->load->view('temp/header.php');
        $this->load->view('temp/nav.php');
        $this->load->model('driversmodel');
       $data['result'] = $this->driversmodel->show_bike();
        $this->load->view('main.php', $data);
        $this->load->view('temp/footer.php');

    }
    public function log_form(){
           $this->load->view('temp/header.php');
        $this->load->view('temp/nav.php');
        $this->load->view('login.php');
        $this->load->view('temp/footer.php');
    }
    public function log_chek()  {
         if (!empty($_POST)) {
      $logins = $_POST['logins'];
      $passwords = $_POST['passwords'];
      $this->load->model('usermodel');
      $users = $this->usermodel->logins($logins, $passwords);
      if (!empty($users)) {
        $this->session->set_userdata($users);
        if($this->session->userdata('role') == 1){
            redirect('main/index');
        }
        else if($this->session->userdata('role') == 2){
            redirect('main/index');
        }
        else {
            redirect('main/index');
        }
      } else {
        echo 'Не верный логин и пароль';
      }
    }
    }
}
?>