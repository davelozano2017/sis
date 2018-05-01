<?php
class account extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function get_user_information($account_id) {
        $query = $this->db->query("SELECT * FROM users WHERE user_id = $account_id");
        return $query->fetch_object();
    }

    public function get_all_users() {
        $query = $this->db->query("SELECT * FROM users WHERE role = 3 || role = 0");
        return $query;
    }

    public function AddOrUpdateActivity($data) {
        $activity_id = $data['activity_id'];
        $LRN         = $data['LRN'];
        $activity    = $data['activity'];
        $description = $data['description'];
        if(empty($activity_id)) {
            $query   = $this->db->query("SELECT * FROM activity WHERE activity = '$activity'");
            if($query->num_rows > 0) {
                notify('error',$activity.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO activity (LRN,activity,description) VALUES ('$LRN','$activity','$description')");
                if($query) {
                    notify('success','new extra curricular activity has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE activity SET activity = '$activity', description = '$description' WHERE activity_id = '$activity_id'");
            if($query) {
                notify('info',$activity.' has been updated.',true);
            }
        }
    }

    public function get_all_activity() {
        $query = $this->db->query("SELECT * FROM activity as a INNER JOIN students as s ON a.LRN = s.LRN");
        return $query;
    }

    public function get_activity_using_id($activity_id) {
        $query = $this->db->query("SELECT * FROM activity WHERE activity_id = $activity_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_activity_using_id($activity_id) {
        $query = $this->db->query("DELETE FROM activity WHERE activity_id = $activity_id");
        notify('success','Activity has been deleted.',true);
    }

    public function get_all_events() {
        $query = $this->db->query("SELECT * FROM events");
        return $query;
    }

    public function get_all_students() {
        $query = $this->db->query("SELECT * FROM students ");
        return $query;
    }

    public function record_card() {
        $id = $_SESSION['filtered_id'];
        $sy = $_SESSION['school_year'];
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id INNER JOIN users as u ON ag.teachers_id = u.user_id WHERE ag.students_id = '$id' AND ag.sy = '$sy' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function shs1st($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id INNER JOIN users as u ON ag.teachers_id = u.user_id WHERE ag.students_id = $students_id AND ag.sy = '".$_SESSION['school_year']."' AND su.subject_level = 'Senior High School - 1st Semenster' ORDER BY su.subjects_name DESC");
        return $query; 
    }

    public function shs2nd($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id INNER JOIN users as u ON ag.teachers_id = u.user_id WHERE ag.students_id = $students_id AND ag.sy = '".$_SESSION['school_year']."' AND su.subject_level = 'Senior High School - 2nd Semenster' ORDER BY su.subjects_name DESC");
        return $query; 
    }

    public function get_awards_by_students_id($students_id) {
        $syq = $this->db->query("SELECT * FROM school_year");
        $row = $syq->fetch_object();
        $sy  = $row->school_year;
        $query = $this->db->query("SELECT * FROM assign_awards WHERE stud_id = $students_id AND s_y = '$sy'");
        return $query->fetch_object(); 
    }

    public function one($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id LEFT JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2017 - 2018' ORDER BY su.subjects_name ASC");
        return $query; 
    }


    public function two($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id LEFT JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2018 - 2019' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function three($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id LEFT JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2019 - 2020' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function four($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2020 - 2021' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function five($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2021 - 2022' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function six($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2022 - 2023' ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function seven($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2023 - 2024' GROUP BY su.subjects_name ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function eight($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2024 - 2025' GROUP BY su.subjects_name ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function nine($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2025 - 2026' GROUP BY su.subjects_name ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function ten($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2026 - 2027' GROUP BY su.subjects_name ORDER BY su.subjects_name ASC");
        return $query; 
    }

    public function eleven($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2027 - 2028' ORDER BY su.subjects_name DESC");
        return $query; 
    }

    public function twelve($students_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN section as s ON ag.section_id = s.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '2028 - 2029' ORDER BY su.subjects_name DESC");
        return $query; 
    }


    public function get_student_by_students_id($students_id) {
        $query = $this->db->query("SELECT * FROM students as s INNER JOIN users as u ON u.user_id = s.guardian_id WHERE s.students_id = $students_id");
        return $query->fetch_object();
    }

    public function sy_elementary() {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id WHERE ag.students_id = s.students_id  AND se.level = 'Grade 1' || se.level = 'Grade 2' || se.level = 'Grade 3' || se.level = 'Grade 4' || se.level = 'Grade 5' || se.level = 'Grade 6' GROUP BY ag.sy");
        return $query;
    }

    public function sy_junior_high() {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id WHERE ag.students_id = s.students_id  AND se.level = 'Grade 7' || se.level = 'Grade 8' || se.level = 'Grade 9' || se.level = 'Grade 10' GROUP BY ag.sy");
        return $query;
    }

    public function sy_senior_high() {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id WHERE ag.students_id = s.students_id  AND se.level = 'Grade 11' || se.level = 'Grade 12' GROUP BY ag.sy");
        return $query;
    }

    public function get_students() {
        $syq = $this->db->query("SELECT * FROM school_year");
        $row = $syq->fetch_object();
        $sy  = $row->school_year;
        $check = $this->db->query("SELECT * FROM assign_students WHERE school_years = '$sy'");
        if($check->num_rows > 0) {
            foreach($check as $c) {
                $students_id = $c['students_id'];
                $this->db->query("UPDATE students SET stats = 1 WHERE students_id = '$students_id'");
            }
        } else {
            $this->db->query("UPDATE students SET stats = 0");
        }
            $query = $this->db->query("SELECT * FROM students WHERE stats = 0");
            return $query;
    }

    public function get_my_students($user_id) {
        $query = $this->db->query("SELECT * FROM students as s INNER JOIN users as u ON s.guardian_id = u.user_id WHERE u.user_id = $user_id");
        return $query;
    }

    public function get_my_subjects($user_id) {
        $query = $this->db->query("SELECT * FROM assign_teachers as ast INNER JOIN assign_students as ass ON ass.section_id = ast.section_id GROUP BY ast.subjects_id");
        return $query;
    }

    public function get_my_violations($user_id) {
        $check = $this->db->query("SELECT * FROM users WHERE user_id = $user_id");
        $row = $check->fetch_object();
        $LRNN = $row->LRNN;
        $query = $this->db->query("SELECT * FROM violations as v INNER JOIN students as s ON s.LRN = v.LRN WHERE v.LRN = '$LRNN'");
        return $query;
    }

    public function get_my_activity($user_id) {
        $check = $this->db->query("SELECT * FROM users WHERE user_id = $user_id");
        $row = $check->fetch_object();
        $LRNN = $row->LRNN;
        $query = $this->db->query("SELECT * FROM activity as a INNER JOIN students as s ON s.LRN = a.LRN WHERE a.LRN = '$LRNN'");
        return $query;
    }



    public function get_all_section() {
        $query = $this->db->query("SELECT * FROM section");
        return $query;
    }


    public function get_all_school_year() {
        $query = $this->db->query("SELECT * FROM school_year");
        return $query;
    }

    public function get_all_subjects() {
        $query = $this->db->query("SELECT * FROM subjects");
        return $query;
    }

    public function get_all_teachers() {
        $query = $this->db->query("SELECT * FROM users WHERE role = 1");
        return $query;
    }

    public function get_all_parents() {
        $query = $this->db->query("SELECT * FROM users WHERE role = 2");
        return $query;
    }

    public function get_all_accounts() {
        $query = $this->db->query("SELECT * FROM accounts");
        return $query;
    }

    public function get_all_violations() {
        $query = $this->db->query("SELECT * FROM violations as v INNER JOIN students as s ON v.LRN = s.LRN");
        return $query;
    }

    public function get_all_violations_by_LRN() {
        $check = $this->db->query("SELECT * FROM users WHERE user_id = ".$_SESSION['id']);
        $row = $check->fetch_object();
        $lrn = $row->LRNN;
        $query = $this->db->query("SELECT * FROM violations as v INNER JOIN students as s ON v.LRN = s.LRN WHERE v.LRN = '$lrn'");
        return $query;
    }

    public function get_all_activity_by_LRN() {
        $check = $this->db->query("SELECT * FROM users WHERE user_id = ".$_SESSION['id']);
        $row = $check->fetch_object();
        $lrn = $row->LRNN;
        $query = $this->db->query("SELECT * FROM activity as a INNER JOIN students as s ON a.LRN = s.LRN WHERE a.LRN = '$lrn'");
        return $query;
    }

    public function view_violations() {
        $query = $this->db->query("SELECT * FROM violations as v INNER JOIN students as s ON v.LRN = s.LRN INNER JOIN users as u ON u.user_id = s.guardian_id WHERE u.user_id = ".$_SESSION['id']);
        return $query;
    }

    public function view_activities() {
        $query = $this->db->query("SELECT * FROM activity as a INNER JOIN students as s ON a.LRN = s.LRN INNER JOIN users as u ON u.user_id = s.guardian_id WHERE u.user_id = ".$_SESSION['id']);
        return $query;
    }

    public function parents_students($id){
        $query = $this->db->query("SELECT * FROM users as u INNER JOIN students as s ON u.user_id = s.guardian_id LEFT JOIN assign_awards as aa ON aa.stud_id = s.students_id WHERE u.user_id = $id");
        return $query;
    }

    public function AddOrUpdateAwards($data) {
        $awards_id   = $data['awards_id'];
        $guardian_id = $data['guardian_id'];
        $stud_id     = $data['stud_id'];
        $first       = $data['first'];
        $second      = $data['second'];
        $third       = $data['third'];
        $fourth      = $data['fourth'];
        if(empty($awards_id)) {
            $query   = $this->db->query("SELECT * FROM assign_awards WHERE first = '$first' || second = '$second' || third = '$third' || fourth = '$fourth' AND stud_id = '$stud_id'");
            if($query->num_rows > 0) {
                notify('error','Award already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO assign_awards (stud_id,guardians_id,first,second,third,fourth) VALUES ('$stud_id','$guardian_id','$first','$second','$third','$fourth')");
                if($query) {
                        notify('info','Award has been added.',true);
                } else {
                    echo json_encode(['success' => false]);
                }
            }
        } else {
            $query = $this->db->query("UPDATE assign_awards SET first = '$first', second = '$second', third = '$third', fourth = '$fourth' WHERE awards_id = '$awards_id'");
            if($query) {
                notify('info','Award has been updated.',true);
            }
        }
    }

    public function view_awards($data) {
        $stud_id = $data['students_id'];
        $query = $this->db->query("SELECT * FROM assign_awards WHERE stud_id = '$stud_id'");
        if($query->num_rows > 0) {
            echo json_encode($query->fetch_object());
        } else {
            echo json_encode(array(
                'success' => true,
                'stud_id' => $stud_id
            ));
        }
    }

    public function AddOrUpdateEvents($data) {
        $events_id   = $data['events_id'];
        $title       = $data['title'];
        $start       = $data['start'];
        $end         = $data['end'];
        $description = $data['description'];
       
        if(empty($events_id)) {
            $query   = $this->db->query("SELECT * FROM events WHERE title = '$title'");
            if($query->num_rows > 0) {
                notify('error',$title.' already exist.',false);
            } else {
                if($start > $end) {
                    notify('error','Invalid date span.',false);
                } else {
                    $query = $this->db->query("INSERT INTO events (title,start,end,description) VALUES ('$title','$start','$end','$description')");
                    if($query) {
                        notify('success','new event has been added.',true);
                    }
                }
            }
        } else {
            $query = $this->db->query("UPDATE events SET title = '$title', start = '$start', end = '$end', description = '$description' WHERE events_id = '$events_id'");
            if($query) {
                notify('info',$title.' has been updated.',true);
            }
        }
    }

    public function get_events_using_id($events_id) {
        $query = $this->db->query("SELECT * FROM events WHERE events_id = $events_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_events_using_id($events_id) {
        $query = $this->db->query("DELETE FROM events WHERE events_id = $events_id");
        notify('success','Events has been deleted.',true);
    }

    public function AddOrUpdateStudents($data) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $students_id  = $data['students_id'];
        $LRN          = $data['LRN'];
        $guardian_id  = $data['guardian_id'];
        $surname      = $data['surname'];
        $firstname    = $data['firstname'];
        $middlename   = $data['middlename'];
        $gender       = $data['gender'];
        $contact      = $data['contact'];
        $email        = $data['email'];
        $address      = $data['address'];
        $dob          = $data['dob'];
        $pob          = $data['pob'];
        if(empty($students_id)) {
            $query   = $this->db->query("SELECT * FROM students WHERE LRN = '$LRN'");
            if($query->num_rows > 0) {
                notify('error',$LRN.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO students (LRN,guardian_id,surname,firstname,middlename,genderr,contact,email,address,school_year,dob,pob) VALUES ('$LRN','$guardian_id','$surname','$firstname','$middlename','$gender','$contact','$email','$address','$school_year','$dob','$pob')");
                if($query) {
                    notify('success','new student has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE students SET LRN = '$LRN', guardian_id = '$guardian_id', surname = '$surname', firstname = '$firstname', middlename = '$middlename', genderr = '$gender',contact = '$contact', email = '$email', address = '$address', school_year = '$school_year', dob = '$dob', pob = '$pob' WHERE students_id = '$students_id' ");
            if($query) {
                notify('info',$LRN.' has been updated.',true);
            }
        }
    }

    public function get_school_year_using_id($school_year_id) {
        $query = $this->db->query("SELECT * FROM school_year WHERE school_year_id = '$school_year_id'");
        echo json_encode($query->fetch_object());
    }

    public function sy($data) {
        $school_year_id = $data['school_year_id'];
        $school_year    = $data['school_year'];
        $query = $this->db->query("UPDATE school_year SET school_year = '$school_year' WHERE school_year_id = $school_year_id");
        if($query) {
            notify('info','School year has been updated.',true);
        }
    }

    public function get_students_using_id($students_id) {
        $query = $this->db->query("SELECT * FROM students WHERE students_id = $students_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_students_using_id($students_id) {
        $query = $this->db->query("DELETE FROM students WHERE students_id = $students_id");
        notify('success','Student has been deleted.',true);
    }

    public function AddOrUpdateSection($data) {
        $section_id  = $data['section_id'];
        $name        = $data['name'];
        $level       = $data['level'];
        if(empty($section_id)) {
            $query   = $this->db->query("SELECT * FROM section WHERE section_name = '$name' AND level = '$level'");
            if($query->num_rows > 0) {
                notify('error',$name.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO section (section_name,level) VALUES ('$name','$level')");
                if($query) {
                    notify('success','new section has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE section SET section_name = '$name', level = '$level' WHERE section_id = '$section_id'");
            if($query) {
                notify('info',$name.' has been updated.',true);
            }
        }
    }

    public function get_section_using_id($section_id) {
        $query = $this->db->query("SELECT * FROM section WHERE section_id = $section_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_section_using_id($section_id) {
        $query = $this->db->query("DELETE FROM section WHERE section_id = $section_id");
        notify('success','Section has been deleted.',true);
    }

    public function AddOrUpdateSubjects($data) {
        $subjects_id   = $data['subjects_id'];
        $name          = $data['name'];
        $subject_level = $data['subject_level'];
        if(empty($subjects_id)) {
            $query   = $this->db->query("SELECT * FROM subjects WHERE subjects_name = '$name' AND subject_level = '$subject_level'");
            if($query->num_rows > 0) {
                notify('error',$name.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO subjects (subjects_name,subject_level) VALUES ('$name','$subject_level')");
                if($query) {
                    notify('success','new subject has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE subjects SET subjects_name = '$name', subject_level = '$subject_level' WHERE subjects_id = '$subjects_id'");
            if($query) {
                notify('info',$name.' has been updated.',true);
            }
        }
    }

    public function get_subjects_using_id($subjects_id) {
        $query = $this->db->query("SELECT * FROM subjects WHERE subjects_id = $subjects_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_subjects_using_id($subjects_id) {
        $query = $this->db->query("DELETE FROM subjects WHERE subjects_id = $subjects_id");
        notify('success','Subject has been deleted.',true);
    }

    public function AddOrUpdateTeachers($data) {
        $user_id                = $data['user_id'];
        $name                   = $data['name'];
        $contact                = $data['contact'];
        $email                  = $data['email'];
        $educational_background = $data['educational_background'];
        $username               = $data['username'];
        $password               = $data['password'];
        $role                   = $data['role'];
        $status                 = $data['status'];
        if(empty($user_id)) {
            $check       = $this->db->query("SELECT * FROM users WHERE username = '$username'");
            if($check->num_rows > 0) {
                notify('error','Username already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO users (name, contact, email, educational_background, username, password, role, status) VALUES ('$name', '$contact', '$email', '$educational_background', '$username', '$password', '$role', '$status')");
                notify('success','New teachers has been added.',true);
            }
        } else {
            $query = $this->db->query("UPDATE users SET name = '$name', contact = '$contact', email = '$email', educational_background = '$educational_background', username = '$username', status = '$status' WHERE user_id = $user_id");
            notify('info','Data has been changed.',true);
        }
    }

    public function get_teachers_using_id($user_id) {
        $query = $this->db->query("SELECT * FROM users WHERE user_id = $user_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_teachers_using_id($user_id) {
        $query = $this->db->query("DELETE FROM users WHERE user_id = $user_id");
        notify('success','Teacher has been deleted.',true);
    }

    public function AddOrUpdateParents($data) {
        $user_id                = $data['user_id'];
        $name                   = $data['name'];
        $contact                = $data['contact'];
        $email                  = $data['email'];
        $username               = $data['username'];
        $password               = $data['password'];
        $role                   = $data['role'];
        $status                 = $data['status'];
        if(empty($user_id)) {
            $check       = $this->db->query("SELECT * FROM users WHERE username = '$username'");
            if($check->num_rows > 0) {
                notify('error','Username already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO users (name, contact, email, username, password, role, status) VALUES ('$name', '$contact', '$email', '$username', '$password', '$role', '$status')");
                notify('success','New guardian has been added.',true);
            }
        } else {
            $query = $this->db->query("UPDATE users SET name = '$name', contact = '$contact', email = '$email', username = '$username', status = '$status' WHERE user_id = $user_id");
            notify('info','Data has been changed.',true);
        }
    }

    public function get_parents_using_id($user_id) {
        $query = $this->db->query("SELECT * FROM users WHERE user_id = $user_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_parents_using_id($user_id) {
        $query = $this->db->query("DELETE FROM users WHERE user_id = $user_id");
        notify('success','Guardian has been deleted.',true);
    }


    public function AddOrUpdateViolations($data) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $violations_id  = $data['violations_id'];
        $LRN            = $data['LRN'];
        $description    = $data['description'];
        if(empty($violations_id)) {
            $query = $this->db->query("INSERT INTO violations (LRN, description,scy) VALUES ('$LRN', '$description','$school_year')");
            notify('success','New violation has been added.',true);
        } else {
            $query = $this->db->query("UPDATE violations SET LRN = '$LRN', description = '$description' WHERE violations_id = $violations_id");
            notify('info','Violation has been changed.',true);
        }
    }

    public function get_violations_using_id($violations_id) {
        $query = $this->db->query("SELECT * FROM violations WHERE violations_id = $violations_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_violations_using_id($violations_id) {
        $query = $this->db->query("DELETE FROM violations WHERE violations_id = $violations_id");
        notify('success','Violation has been deleted.',true);
    }


    public function AddOrUpdateAccounts($data) {
        $user_id    = $data['user_id'];
        $LRN        = $data['LRN'];
        $name       = $data['name'];
        $contact    = $data['contact'];
        $email      = $data['email'];
        $username   = $data['username'];
        $password   = $data['password'];
        $role       = $data['role'];
        $status     = $data['status'];
        if(empty($user_id)) {
            $check       = $this->db->query("SELECT * FROM users WHERE username = '$username'");
            if($check->num_rows > 0) {
                notify('error','Username already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO users (LRNN,name, contact, email, username, password, role, status) VALUES ('$LRN','$name', '$contact', '$email', '$username', '$password', '$role', '$status')");
                if($query) {
                    notify('success','New account has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE users SET LRNN = '$LRN', name = '$name', contact = '$contact', email = '$email', username = '$username', role = '$role', status = '$status' WHERE user_id = $user_id");
            if($query) {
                notify('info','Data has been changed.',true);
            }
        }
    }

    public function get_accounts_using_id($user_id) {
        $query = $this->db->query("SELECT * FROM users WHERE user_id = $user_id");
        echo json_encode($query->fetch_object());
    }

    public function delete_accounts_using_id($user_id) {
        $query = $this->db->query("DELETE FROM users WHERE user_id = $user_id");
        notify('success','Account has been deleted.',true);
    }


    public function user_login($data) {
        $username = $data['username'];
        $password = $data['password'];
        $check = $this->db->query("SELECT * FROM users WHERE username = '$username' AND status = 0");
        if($check->num_rows > 0) {
            $row = $check->fetch_object();
            $role = $row->role;
            $hash = $row->password;
            if(verify($password,$hash) && $role == 0) {
                $_SESSION['id'] = $row->user_id;
                echo json_encode(['url' => URL.'admin/dashboard','success' => true]);
            } elseif(verify($password,$hash) && $role == 1) {
                $_SESSION['id'] = $row->user_id;
                echo json_encode(['url' => URL.'teachers/dashboard','success' => true]);
            } elseif(verify($password,$hash) && $role == 2) {
                $_SESSION['id'] = $row->user_id;
                echo json_encode(['url' => URL.'parents/dashboard','success' => true]);
            } elseif(verify($password,$hash) && $role == 3) {
                $_SESSION['id'] = $row->user_id;
                echo json_encode(['url' => URL.'students/dashboard','success' => true]);
            } else {
                notify('error','Invalid username or password',false);
            }
        } else {
            notify('error','Invalid username or password',false);
        }
    }

    public function user_recovery($username) {
        $check = $this->db->query("SELECT * FROM users WHERE username = '$username'");
        if($check->num_rows > 0) {
            $_SESSION['username'] = $username;
            echo json_encode(['url' => URL.'auth/account','success' => true]);
        } else {
            notify('error','No record found',false);
        }
    }

    public function new_password($password) {
        $username = $_SESSION['username'];
        $query = $this->db->query("UPDATE users SET password = '$password' WHERE username = '$username'");
        echo json_encode(['url' => URL.'auth/login','success' => true]);
    }

    public function update_profile($data) {
        $user_id   = $data['user_id' ];
        $name      = $data['name'];
        $contact   = $data['contact'];
        $email     = $data['email'];
        $username  = $data['username'];
        $query     = $this->db->query("UPDATE users SET name = '$name', contact = '$contact', email = '$email', username = '$username' WHERE user_id = $user_id");
        notify('info','Data has been changed.',true);
    }

    public function update_picture() {
        $image   = $_FILES['files']['name'];
        $user_id = $_SESSION['id'];
        move_uploaded_file($_FILES['files']['tmp_name'],UPLOADS.'profile/'.$_FILES['files']['name']);
        $query = $this->db->query("UPDATE users SET image = '$image' WHERE user_id = $user_id");
        notify('info','profile has been changed.',true);
    }

    public function get_assign_in_teachers($user_id) {
        $query = $this->db->query("SELECT * FROM users as u INNER JOIN assign_teachers as a ON u.user_id = a.teachers_id INNER JOIN section as s ON a.section_id = s.section_id INNER JOIN subjects as su ON a.subjects_id = su.subjects_id WHERE a.teachers_id = $user_id ORDER BY s.level ASC");
        return $query;
    }

    public function delete_assign_in_teachers($data) {
        $user_id     = $data['user_id'];
        $section_id  = $data['section_id'];
        $subjects_id = $data['subjects_id'];
        $query = $this->db->query("DELETE FROM assign_teachers WHERE teachers_id = $user_id AND section_id = $section_id AND subjects_id = $subjects_id");
        notify('info','Record has been deleted.',true);
    }

    public function assign_to_teachers($data) {
        $user_id    = $data['user_id'];
        $section_id = $data['section_id'];
        foreach($data['subjects_id'] as $key => $value){
            $subjects_id = $data['subjects_id'][$key];
            $validate = $this->db->query("SELECT * FROM assign_teachers WHERE section_id = $section_id AND subjects_id = $subjects_id");
            if($validate->num_rows) {
            } else {
                $query = $this->db->query("INSERT INTO assign_teachers (teachers_id,section_id,subjects_id) VALUES ('$user_id','$section_id','$subjects_id')");
            }
        }
        notify('success','Successfully assigned.',true);
    }

    public function get_assign_in_students($section_id) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $query = $this->db->query("SELECT * FROM students as s INNER JOIN assign_students as a ON s.students_id = a.students_id INNER JOIN section as se ON a.section_id = se.section_id WHERE a.section_id = $section_id AND a.school_years = '$school_year' GROUP BY a.students_id");
        return $query;
    }

    public function get_all_assign_in_students() {
        $query = $this->db->query("SELECT * FROM students as s INNER JOIN assign_students as a ON s.students_id = a.students_id INNER JOIN section as se ON a.section_id = se.section_id ");
        return $query;
    }

    public function all_assign_in_students_by_teacher() {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $teachers_id = $_SESSION['id'];
        $query = $this->db->query("SELECT * FROM assign_teachers as at INNER JOIN assign_students as a ON at.section_id = a.section_id INNER JOIN students as s ON a.students_id = s.students_id INNER JOIN section as se ON at.section_id = se.section_id WHERE at.teachers_id = $teachers_id AND a.school_years = '$school_year' GROUP BY a.students_id");
        return $query;
    }

    public function delete_assign_in_students($data) {
        $students_id = $data['students_id'];
        $section_id  = $data['section_id'];
        $query = $this->db->query("DELETE FROM assign_students WHERE students_id = $students_id AND section_id = $section_id");
        $this->db->query("UPDATE students SET stats = 0 WHERE students_id = $students_id");
        notify('info','Record has been deleted.',true);
    }

    public function assign_to_students($data) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $section_id = $data['section_id'];
        foreach($data['students_id'] as $key => $value){
            $students_id = $data['students_id'][$key];
            $validate = $this->db->query("SELECT * FROM assign_students WHERE students_id = $students_id AND school_years = '$school_year'");
            if($validate->num_rows > 0) {
            } else {
                $query = $this->db->query("INSERT INTO assign_students (section_id,students_id,school_years) VALUES ('$section_id','$students_id','$school_year')");
                $this->db->query("UPDATE students SET stats = 1 WHERE students_id = $students_id");
            }
        }
        notify('success','Successfully assigned.',true);
    }

    public function assign_student_grades($data) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $user_id     = $data['user_id'];
        $subjects_id = $data['subjects_id'];
        $flag = '';
        if(empty($subjects_id)) {
            $flag = 2;
        } else {
            foreach($_POST['students_id'] as $key => $value) {
                $section_id  = $data['section_id'][$key];
                $students_id = $data['students_id'][$key];
                $first       = $data['first'][$key];
                $second      = $data['second'][$key];
                $third       = $data['third'][$key];
                $fourth      = $data['fourth'][$key];
                $validate    = $this->db->query("SELECT * FROM assign_grades WHERE students_id = $students_id AND section_id = $section_id AND subjects_id = $subjects_id AND sy = '$school_year'");
                if($validate->num_rows > 0) {
                    $flag = 0;
                } else {
                    $query = $this->db->query("INSERT INTO assign_grades (teachers_id,students_id,section_id,subjects_id,first,second,third,fourth,sy) VALUES ('$user_id','$students_id','$section_id','$subjects_id','$first','$second','$third','$fourth','$school_year')");
                    if($query) {
                        $flag = 1;
                    }
                }
            }
        }

        if($flag == 0) {
            notify('error','Grades already assigned.',false);
        } elseif($flag == 1) {
            notify('success','Grades successfully assigned.',true);
        } else {
            notify('error','Please select subject.',false);
        }
    }

    public function update_student_grades($data) {
        $assign_grades_id = $data['assign_grades_id'];
        $first            = $data['first'];
        $second           = $data['second'];
        $third            = $data['third'];
        $fourth           = $data['fourth'];
        $query            = $this->db->query("UPDATE assign_grades SET first = '$first', second = '$second', third = '$third', fourth = '$fourth' WHERE assign_grades_id = $assign_grades_id");
        return $query ? notify('success','Grades successfully updated.',true) : null;
    }



    public function get_students_by_teacher($teachers_id) {
        $query = $this->db->query("SELECT * FROM assign_teachers as at INNER JOIN assign_students as a ON at.section_id = a.section_id WHERE at.teachers_id = $teachers_id GROUP BY a.students_id");
        return $query;
    }

    public function get_sections_by_teacher($teachers_id) {
        $query = $this->db->query("SELECT * FROM assign_teachers WHERE teachers_id = $teachers_id");
        return $query;
    }

    public function get_subjects_by_teacher($teachers_id) {
        $query = $this->db->query("SELECT * FROM assign_teachers WHERE teachers_id = $teachers_id");
        return $query;
    }

    public function update_password($data) {
        $password  = $data['password'];
        $user_id   = $data['accounts_id'];
        $query = $this->db->query("UPDATE users SET password = '$password' WHERE user_id = '$user_id'");
        if($query) {
            notify('info','Password has been changed.',true);
        }
    }

    public function filter_students($LRN) {
        $query = $this->db->query("SELECT * FROM students WHERE LRN = '$LRN'");
        echo json_encode($query->fetch_object());
    }

    public function get_assigned_grades($assign_grades_id) {
        $query = $this->db->query("SELECT * FROM assign_grades WHERE assign_grades_id = '$assign_grades_id'");
        echo json_encode($query->fetch_object());
    }

    public function get_all_grades($students_id) {
        $sy = $this->db->query("SELECT * FROM school_year LIMIT 1");
        $row = $sy->fetch_object();
        $school_year = $row->school_year;
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE ag.students_id = $students_id AND ag.sy = '$school_year'");
        return $query;
    }

    public function get_all_grades_by_students($guardian_id) {
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id WHERE s.guardian_id = $guardian_id");
        return $query;
    }

    public function get_all_grades_by_stud() {
        $check = $this->db->query("SELECT * FROM users WHERE user_id = ".$_SESSION['id']);
        $row = $check->fetch_object();
        $lrn = $row->LRNN;
        $query = $this->db->query("SELECT * FROM assign_grades as ag INNER JOIN students as s ON ag.students_id = s.students_id INNER JOIN section as se ON ag.section_id = se.section_id INNER JOIN subjects as su ON ag.subjects_id = su.subjects_id INNER JOIN users as u ON s.LRN = u.LRNN WHERE u.LRNN = '$lrn'");
        return $query;
    }

    public function post($data) {
        $query = $this->db->real_escape_string(htmlentities($_POST[$data]));
        return $query;
    }


}
