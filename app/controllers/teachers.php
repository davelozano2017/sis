<?php 
class teachers extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
            if(!isset($_SESSION['id'])) { redirect('auth/login'); }
    }

    // pages 
    public function index() {
        $data['title'] = 'Dashboard';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/dashboard',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function student_grade_book() {
        $data['title']                             = 'Student Grade Book';
        $data['all_assign_in_students_by_teacher'] = $this->model('account')->all_assign_in_students_by_teacher();
        $data['user_info']                         = $this->model('account')->get_user_information($_SESSION['id']);
        $data['subjects']                          = $this->model('account')->get_assign_in_teachers($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/student_grade_book',$data);
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

    public function password() {
        $data['title'] = 'Password';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/change-password',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
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

    public function profile() {
        $data['title'] = 'Profile';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function assign_student_grades() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'     => $_SESSION['id'],
                'section_id'  => $this->input->post('section_id'),
                'subjects_id' => $this->input->post('subjects_id'),
                'students_id' => $this->input->post('students_id'),
                'first'       => $this->input->post('first'),
                'second'      => $this->input->post('second'),
                'third'       => $this->input->post('third'),
                'fourth'      => $this->input->post('fourth')
            );
            $this->model('account')->assign_student_grades($data);
        }
    }


    public function logout() {
        session_destroy();
        redirect('auth/login');
    }


}