<?php 
class admin extends Controller {
    public function __construct() {
        $_SESSION['token'] = TOKEN;
        $this->input = $this->model('account');
        if(!isset($_SESSION['id'])) { redirect('auth/login'); }
    }

    // pages 
    public function index() {
        $data['title']       = 'Dashboard';
        $data['user_info']   = $this->model('account')->get_user_information($_SESSION['id']);
        $data['events']      = $this->model('account')->get_all_events();
        $data['teachers']    = $this->model('account')->get_all_teachers();
        $data['students']    = $this->model('account')->get_all_students();
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        
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
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['section']   = $this->model('account')->get_all_section();
        $data['students']   = $this->model('account')->get_all_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
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
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['assign_in_teachers'] = $this->model('account')->get_assign_in_teachers($user_id);
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
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
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['assign_in_students'] = $this->model('account')->get_assign_in_students($section_id);
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/view_assign_in_students',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function report_student_master_list() {
        $data['title']              = 'Student Master List';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['user_info']          = $this->model('account')->get_user_information($_SESSION['id']);
        $data['all_assign_in_students'] = $this->model('account')->get_all_assign_in_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/report_student_master_list',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }


    public function awards($id) {
        $data['title']                             = 'Parents';
        $data['all_assign_in_students_by_teacher'] = $this->model('account')->all_assign_in_students_by_teacher();
        $data['school_year']                       = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info']                         = $this->model('account')->get_user_information($_SESSION['id']);
        $data['parents_students']                  = $this->model('account')->parents_students($id);
        $data['students']   = $this->model('account')->get_all_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $data['guardian_id'] = $id;
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/awards',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function assign_students() {
        $data['title']     = 'Assign Students';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['section']   = $this->model('account')->get_all_section();
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']  = $this->model('account')->get_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
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
        $data['students']   = $this->model('account')->get_all_students();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/profile',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    

    public function form_137_elementary($students_id) {
        $data['info']  = $this->model('account')->get_student_by_students_id($students_id);
        $data['one']   = $this->model('account')->one($students_id);
        $data['two']   = $this->model('account')->two($students_id);
        $data['three'] = $this->model('account')->three($students_id);
        $data['four']  = $this->model('account')->four($students_id);
        $data['five']  = $this->model('account')->five($students_id);
        $data['six']   = $this->model('account')->six($students_id);
        $data['title'] = 'Elementary';
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $data['attendance']   = $this->model('account')->attendance($students_id);
        $this->view('pages/admin/form_137_elementary',$data);
    }

    public function form_137_secondary($students_id) {
        $data['info']  = $this->model('account')->get_student_by_students_id($students_id);
        $data['students']   = $this->model('account')->get_all_students();
        $data['seven'] = $this->model('account')->seven($students_id);
        $data['eight'] = $this->model('account')->eight($students_id);
        $data['nine']  = $this->model('account')->nine($students_id);
        $data['ten']   = $this->model('account')->ten($students_id);
        $data['title'] = 'Secondary';
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('pages/admin/form_137_secondary',$data);
    }


    public function formss() {

        switch($_POST['action']) {
            case 'Elementary': 
            $_SESSION['filtered_id'] = $_POST['elementary_id'];
            $_SESSION['school_year'] = $_POST['school_year'];
            break;

            case 'Junior High': 
            $_SESSION['filtered_id'] = $_POST['junior_high_id'];
            $_SESSION['school_year'] = $_POST['school_year'];
            break;

            case 'Senior High': 
            $_SESSION['filtered_id'] = $_POST['senior_high_id'];
            $_SESSION['school_year'] = $_POST['school_year'];
            break;
        }

        echo json_encode(array('success'=>true));
    }

    public function form_junior_high() {
        $data['title'] = 'Pre School';
        $data['info']  = $this->model('account')->get_student_by_students_id( $_SESSION['filtered_id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['report']   = $this->model('account')->record_card();
        $this->view('pages/admin/form_junior_high',$data);
    }

    public function form_pres_elem_card() {
        $data['title'] = 'Pre School';
        $data['info']  = $this->model('account')->get_student_by_students_id($_SESSION['filtered_id']);
        $data['award']  = $this->model('account')->get_awards_by_students_id($_SESSION['filtered_id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['report']   = $this->model('account')->record_card();
        $this->view('pages/admin/form_pres_elem_card',$data);
    }

    public function form_shs_report_card() {
        $data['title'] = 'Pre School';
        $data['info']  = $this->model('account')->get_student_by_students_id($_SESSION['filtered_id']);
        $data['award']  = $this->model('account')->get_awards_by_students_id($_SESSION['filtered_id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['shs1st']   = $this->model('account')->shs1st($_SESSION['filtered_id']);
        $data['shs2nd']   = $this->model('account')->shs2nd($_SESSION['filtered_id']);
        $data['attendance']   = $this->model('account')->attendance_shs($_SESSION['filtered_id']);
        $this->view('pages/admin/form_shs_report_card',$data);
    }

    public function password() {
        $data['title'] = 'Password';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/change-password',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function extra_curricular() {
        $data['title']     = 'Extra Curricular';
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['activity']  = $this->model('account')->get_all_activity();
        $data['students']   = $this->model('account')->get_all_students();
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/extra_curricular',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function events() {
        $data['title']     = 'Events';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['events']    = $this->model('account')->get_all_events();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/events',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function students() {
        $data['title']      = 'Students';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['parents']    = $this->model('account')->get_all_parents();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/students',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function section() {
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['title']     = 'Section';
        $data['students']   = $this->model('account')->get_all_students();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['section']   = $this->model('account')->get_all_section();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/section',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function subjects() {
        $data['title']      = 'Subjects';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info']  = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['subjects']   = $this->model('account')->get_all_subjects();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/subjects',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function teachers() {
        $data['title']     = 'Teachers';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']   = $this->model('account')->get_all_students();
        $data['teachers']  = $this->model('account')->get_all_teachers();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
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
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['parents']   = $this->model('account')->get_all_parents();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/parents',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function accounts() {
        $data['title'] = 'Accounts';
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['user_info'] = $this->model('account')->get_user_information($_SESSION['id']);
        $data['accounts'] = $this->model('account')->get_all_users();
        $data['students'] = $this->model('account')->get_all_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
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
        $data['school_year'] = $this->model('account')->get_school_year_active()->fetch_object();
        $data['students']   = $this->model('account')->get_all_students();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/violations',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    public function school_year() {
        $data['title']       = 'School Year';
        $data['user_info']   = $this->model('account')->get_user_information($_SESSION['id']);
        $data['students']    = $this->model('account')->get_all_students();
        $data['school_year'] = $this->model('account')->get_school_year_active();
        $data['list']        = $this->model('account')->get_school_year_active();
        $data['selector']    = $this->model('account')->sy_elementary();
        $data['selector1']   = $this->model('account')->sy_junior_high();
        $data['selector2']   = $this->model('account')->sy_senior_high();
        $this->view('components/header',$data);
        $this->view('components/navigation',$data);
        $this->view('components/sidebar',$data);
        $this->view('pages/admin/school_year',$data);
        $this->view('components/footer',$data);
        $this->view('components/scripts',$data);
    }

    // functions 

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
                'address'     => $this->input->post('address'),
                'dob'         => $this->input->post('dob'),
                'pob'         => $this->input->post('pob')
            );
            $this->model('account')->AddOrUpdateStudents($data);
        }
    }

    public function get_students_using_id() {
        $students_id = $this->input->post('students_id');
        $this->model('account')->get_students_using_id($students_id);
    }

    public function get_school_year_using_id() {
        $school_year_id = $this->input->post('school_year_id');
        $this->model('account')->get_school_year_using_id($school_year_id);
    }

    public function AddOrUpdateSchoolyear() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'school_year_id' => $this->input->post('school_year_id'),
                'school_year'    => $this->input->post('school_year')
            );
            $this->model('account')->AddOrUpdateSchoolyear($data);
        }
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
                'level'       => $this->input->post('level')
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
                'subjects_id'   => $this->input->post('subjects_id'),
                'name'          => $this->input->post('name'),
                'subject_level' => $this->input->post('subject_level')
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

    public function view_awards($students_id) {
        $data = array( 
            'students_id'  => $students_id
        );
        $this->model('account')->view_awards($data);
    }

    
    public function AddOrUpdateAwards() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'stud_id'     => $this->input->post('stud_id'),
                'guardian_id' => $this->input->post('guardian_id'),
                'awards_id'   => $this->input->post('awards_id'),
                'first'       => $this->input->post('first'),
                'second'      => $this->input->post('second'),
                'third'       => $this->input->post('third'),
                'fourth'      => $this->input->post('fourth'),
            );
            $this->model('account')->AddOrUpdateAwards($data);
        } 
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

    public function AddOrUpdateAccounts() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $data = array( 
                'user_id'   => $this->input->post('user_id'),
                'LRN'       => $this->input->post('LRN'),
                'name'      => $this->input->post('name'),
                'contact'   => $this->input->post('contact'),
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'password'  => hashing('password'),
                'role'      => $this->input->post('role'),
                'status'    => $this->input->post('status')
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

    public function attendance_record() {
        $data = array( 
            'level'               => $_POST['level'],
            'school_days'         => $_POST['school_days'],
            'days_absent'         => $_POST['days_absent'],
            'chief_cause1'        => $_POST['chief_cause1'],
            'times_tardy'         => $_POST['times_tardy'],
            'chief_cause2'        => $_POST['chief_cause2'],
            'school_days_present' => $_POST['school_days_present'],
            'students_id'         => $_POST['students_id']
        );
        $this->model('account')->attendance_record($data);
    }

    public function attendance_record_shs() {
        $data = array( 
            'level'       => $_POST['level'],
            'students_id' => $_POST['students_id'],
            'jun'         => $_POST['jun'],
            'jul'         => $_POST['jul'],
            'aug'         => $_POST['aug'],
            'sep'         => $_POST['sep'],
            'oct'         => $_POST['oct'],
            'nov'         => $_POST['nov'],
            'dec'         => $_POST['dec'],
            'jan'         => $_POST['jan'],
            'feb'         => $_POST['feb'],
            'mar'         => $_POST['mar'],
            'apr'         => $_POST['apr'],
            'total'       => $_POST['total']
        );
        $this->model('account')->attendance_record_shs($data);
    }

    public function filter_students() {
        if(isset($_SESSION['token']) == $this->input->post('token')) {
            $LRN = $this->input->post('LRN');
            $this->model('account')->filter_students($LRN);
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