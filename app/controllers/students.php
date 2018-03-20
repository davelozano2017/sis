<?php 
class students extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
        if(!isset($_SESSION['id'])) { redirect('auth/login'); }
    }

    // pages 
    public function index() {
        $data['title'] = 'Dashboard';
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/dashboard',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function profile() {
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['title'] = 'Profile';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function password() {
        $data['title'] = 'Password';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/change-password',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function update_picture() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $this->model('account')->update_picture();
        }
    }

    public function update_password() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array(
                'accounts_id' => $_SESSION['id'],
                'password'     => hashing($this->input->post('password'))
            );
            $this->model('account')->update_password($data);
        }
    }

    public function update_profile() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array(
                'user_id'  => $_SESSION['id'],
                'name'     => $this->input->post('sname'),
                'contact'  => $this->input->post('scontact'),
                'email'    => $this->input->post('semail'),
                'username' => $this->input->post('susername')
            );
            $this->model('account')->update_profile($data);
        }
    }
    
    public function student_grade_book() {
        $data['title']          = 'Student Grade Book';
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info']      = $this->model('account')->get_user_information($_SESSION['id']);
        $data['get_all_grades'] = $this->model('account')->get_all_grades_by_stud();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/student_grade_book',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function activities() {
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['title']          = 'Activities';
        $data['user_info']      = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/activities',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function violations() {
        $data['title']          = 'Violations';
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info']      = $this->model('account')->get_user_information($_SESSION['id']);
        $data['violations']     = $this->model('account')->get_all_violations_by_LRN();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/students/violations',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function logout() {
        session_destroy();
        redirect('auth/login');
    }


}