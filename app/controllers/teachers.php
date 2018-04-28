<?php 
class teachers extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
            if(!isset($_SESSION['id'])) { redirect('auth/login'); }
    }

    // pages 
    public function index() {
        $data['title']     = 'Dashboard';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['students']  = $this->model('account')->get_students_by_teacher($_SESSION['id']);
        $data['events']      = $this->model('account')->get_all_events();
        $data['sections']  = $this->model('account')->get_sections_by_teacher($_SESSION['id']);
        $data['subjects']  = $this->model('account')->get_subjects_by_teacher($_SESSION['id']);
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
        $data['school_year']                       = $this->model('account')->get_all_school_year()->fetch_object();
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
    
    public function password() {
        $data['title'] = 'Password';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/change-password',$data);
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
        $this->view('pages/teachers/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function view_grades($students_id) {
        $data['title']          = 'Student Grade Book';
        $data['user_info']      = $this->model('account')->get_user_information($_SESSION['id']);
        $data['get_all_grades'] = $this->model('account')->get_all_grades($students_id);
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/view_grades',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function extra_curricular() {
        $data['title']     = 'Extra Curricular';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['activity']  = $this->model('account')->get_all_activity();
        $data['students']   = $this->model('account')->get_all_students();
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/extra_curricular',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function violations() {
        $data['title']      = 'Violations';
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['violations'] = $this->model('account')->get_all_violations();
        $data['school_year'] = $this->model('account')->get_all_school_year()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/teachers/violations',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function get_assigned_grades() {
        $assign_grades_id = $this->input->post('assign_grades_id');
        $this->model('account')->get_assigned_grades($assign_grades_id);
    }

    public function AddOrUpdateViolations() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'violations_id' => $this->input->post('violations_id'),
                'LRN'           => $this->input->post('LRN'),
                'description'   => $this->input->post('description')
            );
            $this->model('account')->AddOrUpdateViolations($data);
        }
    }

    public function get_violations_using_id() {
        $violations_id = $this->input->post('violations_id');
        $this->model('account')->get_violations_using_id($violations_id);
    }

    public function delete_violations_using_id() {
        $violations_id = $this->input->post('violations_id');
        $this->model('account')->delete_violations_using_id($violations_id);
    }
    
    public function AddOrUpdateActivity() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'activity_id' => $this->input->post('activity_id'),
                'LRN'         => $this->input->post('LRN'),
                'activity'    => $this->input->post('activity'),
                'description' => $this->input->post('description')
            );
            $this->model('account')->AddOrUpdateActivity($data);
        }
    }
    
    public function get_activity_using_id() {
        $activity_id = $this->input->post('activity_id');
        $this->model('account')->get_activity_using_id($activity_id);
    }

    public function delete_activity_using_id() {
        $activity_id = $this->input->post('activity_id');
        $this->model('account')->delete_activity_using_id($activity_id);
    }

    public function assign_student_grades() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'     => $_SESSION['id'],
                'subjects_id' => $this->input->post('subjects_id'),
                'section_id'  => $_POST['section_id'],
                'students_id' => $_POST['students_id'],
                'first'       => $_POST['first'],
                'second'      => $_POST['second'],
                'third'       => $_POST['third'],
                'fourth'      => $_POST['fourth']
            );
            $this->model('account')->assign_student_grades($data);
        }
    }

    public function update_student_grades() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'assign_grades_id' => $this->input->post('assign_grades_id'),
                'first'            => $this->input->post('first'),
                'second'           => $this->input->post('second'),
                'third'            => $this->input->post('third'),
                'fourth'           => $this->input->post('fourth')
            );
            $this->model('account')->update_student_grades($data);
        }
    }


    public function logout() {
        session_destroy();
        redirect('auth/login');
    }


}