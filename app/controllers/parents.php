<?php 
class parents extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
        if(!isset($_SESSION['id'])) { redirect('auth/login'); }
    }

    // pages 
    public function index() {
        $data['title'] = 'Dashboard';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['my_students']    = $this->model('account')->get_my_students($_SESSION['id']);
        $data['events']      = $this->model('account')->get_all_events();
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/dashboard',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function profile() {
        $data['title'] = 'Profile';
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function password() {
        $data['title'] = 'Password';
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/change-password',$data);
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
        $data['get_all_grades'] = $this->model('account')->get_all_grades_by_students($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/student_grade_book',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function awards() {
        $data['title']            = 'Awards';
        $data['school_year']      = $this->model('account')->get_all_school_year()->fetch_object();
        $data['user_info']        = $this->model('account')->get_user_information($_SESSION['id']);
        $data['get_all_grades']   = $this->model('account')->get_all_grades_by_students($_SESSION['id']);
        $data['parents_students'] = $this->model('account')->parents_students($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/awards',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function extra_curricular() {
        $data['title']           = 'Extra Curricular';
        $data['user_info']       = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year']     = $this->model('account')->get_all_school_year()->fetch_object();
        $data['view_activities'] = $this->model('account')->view_activities();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/extra_curricular',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function violations() {
        $data['title']          = 'Violations';
        $data['user_info']      = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year']    = $this->model('account')->get_all_school_year()->fetch_object();
        $data['view_violations']     = $this->model('account')->view_violations();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/parents/violations',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function logout() {
        session_destroy();
        redirect('auth/login');
    }


}