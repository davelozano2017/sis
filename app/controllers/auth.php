<?php
class auth extends Controller {

    public function __construct() {
        if(isset($_SESSION['id'])) {
            redirect('admin/dashboard');
        }
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
    }

    public function index() {
        redirect('auth/login');
    }

    public function login() {
        $this->view('pages/login');
    }

    public function recover() {
        $this->view('pages/recover');
    }

    public function account() {
        if(!isset($_SESSION['username'])) {
            redirect('auth/recover');
        }
        $this->view('pages/account');
    }

    public function user_login() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->model('account')->user_login($data);
        }
    }

    public function user_recovery() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $username = $this->input->post('username');
            $this->model('account')->user_recovery($username);
        }
    }

    public function new_password() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $password = hashing($this->input->post('password'));
            $this->model('account')->new_password($password);
        }
    }
    
    
}