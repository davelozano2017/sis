<?php 
class admin extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
        if(!isset($_SESSION['id'])) { redirect(URL.'auth/login'); }
    }

    // pages 
    public function index() {
        $data['title']     = 'Dashboard';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['events']    = $this->model('account')->get_all_events();
        $data['teachers']  = $this->model('account')->get_all_teachers();
        $data['students']  = $this->model('account')->get_all_students();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/dashboard',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    // pages 
    public function assign_teachers() {
        $data['title']     = 'Assign Teachers';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['teachers']  = $this->model('account')->get_all_teachers();
        $data['subjects']  = $this->model('account')->get_all_subjects();
        $data['section']   = $this->model('account')->get_all_section();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/assign_teachers',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function view_assign_in_teachers($user_id) {
        $data['title']              = 'Assign Teachers';
        $data['user_info']          = $this->model('account')->get_user_information($_SESSION['id']);
        $data['assign_in_teachers'] = $this->model('account')->get_assign_in_teachers($user_id);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/view_assign_in_teachers',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function view_assign_in_students($section_id) {
        $data['title']              = 'Assign Students';
        $data['user_info']          = $this->model('account')->get_user_information($_SESSION['id']);
        $data['assign_in_students'] = $this->model('account')->get_assign_in_students($section_id);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/view_assign_in_students',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function report_student_master_list() {
        $data['title']              = 'Student Master List';
        $data['user_info']          = $this->model('account')->get_user_information($_SESSION['id']);
        $data['all_assign_in_students'] = $this->model('account')->get_all_assign_in_students();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/report_student_master_list',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function assign_students() {
        $data['title']     = 'Assign Students';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['section']   = $this->model('account')->get_all_section();
        $data['students']  = $this->model('account')->get_all_students();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/assign_students',$data);
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

    public function profile() {
        $data['title'] = 'Profile';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function password() {
        $data['title'] = 'Password';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/change-password',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function activity() {
        $data['title']     = 'Activity';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['activity']  = $this->model('account')->get_all_activity();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/activity',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function events() {
        $data['title']     = 'Events';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['events']    = $this->model('account')->get_all_events();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/events',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function students() {
        $data['title']      = 'Students';
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['parents']    = $this->model('account')->get_all_parents();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/students',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function section() {
        $data['title']     = 'Section';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['section']   = $this->model('account')->get_all_section();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/section',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function subjects() {
        $data['title']      = 'Subjects';
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['subjects']   = $this->model('account')->get_all_subjects();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/subjects',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function teachers() {
        $data['title']     = 'Teachers';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['teachers']  = $this->model('account')->get_all_teachers();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/teachers',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function parents() {
        $data['title']     = 'Parents';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['parents']   = $this->model('account')->get_all_parents();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/parents',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function accounts() {
        $data['title'] = 'Accounts';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['accounts'] = $this->model('account')->get_all_users();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/accounts',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function violations() {
        $data['title']      = 'Violations';
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['violations'] = $this->model('account')->get_all_violations();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/violations',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    // functions 

    public function AddOrUpdateActivity() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'activity_id' => $this->input->post('activity_id'),
                'subject'     => $this->input->post('subject'),
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

    public function AddOrUpdateEvents() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'events_id'   => $this->input->post('events_id'),
                'title'       => $this->input->post('title'),
                'start'       => $this->input->post('start'),
                'end'         => $this->input->post('end'),
                'description' => $this->input->post('description')
            );
            $this->model('account')->AddOrUpdateEvents($data);
        }
    }

    public function get_events_using_id() {
        $events_id = $this->input->post('events_id');
        $this->model('account')->get_events_using_id($events_id);
    }

    public function delete_events_using_id() {
        $events_id = $this->input->post('events_id');
        $this->model('account')->delete_events_using_id($events_id);
    }

    public function AddOrUpdateStudents() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'students_id' => $this->input->post('students_id'),
                'LRN'         => $this->input->post('LRN'),
                'guardian_id' => $this->input->post('guardian_id'),
                'surname'     => $this->input->post('surname'),
                'firstname'   => $this->input->post('firstname'),
                'middlename'  => $this->input->post('middlename'),
                'gender'      => $this->input->post('gender'),
                'contact'     => $this->input->post('contact'),
                'email'       => $this->input->post('email'),
                'address'     => $this->input->post('address')
            );
            $this->model('account')->AddOrUpdateStudents($data);
        }
    }

    public function get_students_using_id() {
        $students_id = $this->input->post('students_id');
        $this->model('account')->get_students_using_id($students_id);
    }

    public function delete_students_using_id() {
        $students_id = $this->input->post('students_id');
        $this->model('account')->delete_students_using_id($students_id);
    }

    public function AddOrUpdateSection() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'section_id'  => $this->input->post('section_id'),
                'name'        => $this->input->post('name'),
                'level'       => $this->input->post('level'),
                'description' => $this->input->post('description')
            );
            $this->model('account')->AddOrUpdateSection($data);
        }
    }

    public function get_section_using_id() {
        $section_id = $this->input->post('section_id');
        $this->model('account')->get_section_using_id($section_id);
    }

    public function delete_section_using_id() {
        $section_id = $this->input->post('section_id');
        $this->model('account')->delete_section_using_id($section_id);
    }

    public function AddOrUpdateSubjects() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'subjects_id' => $this->input->post('subjects_id'),
                'name'        => $this->input->post('name'),
                'description' => $this->input->post('description')
            );
            $this->model('account')->AddOrUpdateSubjects($data);
        }
    }

    public function get_subjects_using_id() {
        $subjects_id = $this->input->post('subjects_id');
        $this->model('account')->get_subjects_using_id($subjects_id);
    }

    public function delete_subjects_using_id() {
        $subjects_id = $this->input->post('subjects_id');
        $this->model('account')->delete_subjects_using_id($subjects_id);
    }

    public function AddOrUpdateTeachers() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'                => $this->input->post('user_id'),
                'name'                   => $this->input->post('name'),
                'contact'                => $this->input->post('contact'),
                'email'                  => $this->input->post('email'),
                'username'               => $this->input->post('username'),
                'password'               => hashing('password'),
                'role'                   => 1,
                'status'                 => $this->input->post('status'),
                'educational_background' => $this->input->post('educational_background')
            );
            $this->model('account')->AddOrUpdateTeachers($data);
        }
    }

    public function get_teachers_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->get_teachers_using_id($user_id);
    }

    public function delete_teachers_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->delete_teachers_using_id($user_id);
    }

    public function AddOrUpdateParents() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'                => $this->input->post('user_id'),
                'name'                   => $this->input->post('name'),
                'contact'                => $this->input->post('contact'),
                'email'                  => $this->input->post('email'),
                'username'               => $this->input->post('username'),
                'password'               => hashing('password'),
                'role'                   => 2,
                'status'                 => $this->input->post('status')
            );
            $this->model('account')->AddOrUpdateParents($data);
        }
    }

    public function get_parents_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->get_teachers_using_id($user_id);
    }

    public function delete_parents_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->delete_teachers_using_id($user_id);
    }

    public function AddOrUpdateViolations() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'violations_id' => $this->input->post('violations_id'),
                'name'          => $this->input->post('name'),
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

    public function AddOrUpdateAccounts() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'                => $this->input->post('user_id'),
                'name'                   => $this->input->post('name'),
                'contact'                => $this->input->post('contact'),
                'email'                  => $this->input->post('email'),
                'username'               => $this->input->post('username'),
                'password'               => hashing('password'),
                'role'                   => $this->input->post('role'),
                'status'                 => $this->input->post('status')
            );
            $this->model('account')->AddOrUpdateAccounts($data);
        }
    }

    public function delete_assign_in_teachers() {
        $data = array(
            'user_id'     => $this->input->post('user_id'),
            'section_id'  => $this->input->post('section_id'),
            'subjects_id' => $this->input->post('subjects_id'),
        );
        $this->model('account')->delete_assign_in_teachers($data);
    }

    public function delete_assign_in_students() {
        $data = array(
            'students_id' => $this->input->post('students_id'),
            'section_id'  => $this->input->post('section_id'),
        );
        $this->model('account')->delete_assign_in_students($data);
    }

    public function assign_to_teachers() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'     => $this->input->post('user_id'),
                'section_id'  => $this->input->post('section_id'),
                'subjects_id' => $_POST['subjects_id']
            );
            $this->model('account')->assign_to_teachers($data);
        }
    }

    public function assign_to_students() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'section_id'  => $this->input->post('section_id'),
                'students_id' => $_POST['students_id']
            );
            $this->model('account')->assign_to_students($data);
        }
    }

    public function get_accounts_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->get_accounts_using_id($user_id);
    }

    public function delete_accounts_using_id() {
        $user_id = $this->input->post('user_id');
        $this->model('account')->delete_accounts_using_id($user_id);
    }

    public function logout() {
        session_destroy();
        redirect('auth/login');
    }
    
}