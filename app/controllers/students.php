<?php 
class students extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
    }

    // pages 
    public function index() {
        $data['title'] = 'Dashboard';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/dashboard',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function profile() {
        $data['title'] = 'Profile';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }


    public function logout() {
        session_destroy();
        redirect('auth/login');
    }


}