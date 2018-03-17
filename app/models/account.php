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
        $subject     = $data['subject'];
        $description = $data['description'];
        if(empty($activity_id)) {
            $query   = $this->db->query("SELECT * FROM activity WHERE subject = '$subject'");
            if($query->num_rows > 0) {
                notify('error',$subject.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO activity (subject,description) VALUES ('$subject','$description')");
                if($query) {
                    notify('success','new subject has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE activity SET subject = '$subject', description = '$description' WHERE activity_id = '$activity_id'");
            if($query) {
                notify('info',$subject.' has been updated.',true);
            }
        }
    }
    
    public function get_all_activity() {
        $query = $this->db->query("SELECT * FROM activity");
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
        $query = $this->db->query("SELECT * FROM students");
        return $query;
    }

    public function get_all_section() {
        $query = $this->db->query("SELECT * FROM section");
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
        $query = $this->db->query("SELECT * FROM violations");
        return $query;
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
                $query = $this->db->query("INSERT INTO events (title,start,end,description) VALUES ('$title','$start','$end','$description')");
                if($query) {
                    notify('success','new event has been added.',true);
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
        if(empty($students_id)) {
            $query   = $this->db->query("SELECT * FROM students WHERE LRN = '$LRN'");
            if($query->num_rows > 0) {
                notify('error',$LRN.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO students (LRN,guardian_id,surname,firstname,middlename,gender,contact,email,address) VALUES ('$LRN','$guardian_id','$surname','$firstname','$middlename','$gender','$contact','$email','$address')");
                if($query) {
                    notify('success','new student has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE students SET LRN = '$LRN', guardian_id = '$guardian_id', surname = '$surname', firstname = '$firstname', middlename = '$middlename', gender = '$gender',contact = '$contact', email = '$email', address = '$address' WHERE students_id = '$students_id' ");
            if($query) {
                notify('info',$LRN.' has been updated.',true);
            }
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
        $description = $data['description'];
        if(empty($section_id)) {
            $query   = $this->db->query("SELECT * FROM section WHERE name = '$name' AND level = '$level'");
            if($query->num_rows > 0) {
                notify('error',$name.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO section (name,level,description) VALUES ('$name','$level','$description')");
                if($query) {
                    notify('success','new section has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE section SET name = '$name', level = '$level', description = '$description' WHERE section_id = '$section_id'");
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
        $subjects_id  = $data['subjects_id'];
        $name         = $data['name'];
        $description  = $data['description'];
        if(empty($subjects_id)) {
            $query   = $this->db->query("SELECT * FROM subjects WHERE name = '$name'");
            if($query->num_rows > 0) {
                notify('error',$name.' already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO subjects (name,description) VALUES ('$name','$description')");
                if($query) {
                    notify('success','new subject has been added.',true);
                }
            }
        } else {
            $query = $this->db->query("UPDATE subjects SET name = '$name', description = '$description' WHERE subjects_id = '$subjects_id'");
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
        $violations_id  = $data['violations_id'];
        $name           = $data['name'];
        $description    = $data['description'];
        if(empty($violations_id)) {
            $check       = $this->db->query("SELECT * FROM violations WHERE name = '$name'");
            if($check->num_rows > 0) {
                notify('error','Violation already exist.',false);
            } else {
                $query = $this->db->query("INSERT INTO violations (name, description) VALUES ('$name', '$description')");
                notify('success','New violation has been added.',true);
            }
        } else {
            $query = $this->db->query("UPDATE violations SET name = '$name', description = '$description' WHERE violations_id = $violations_id");
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
                notify('success','New account has been added.',true);
            }
        } else {
            $query = $this->db->query("UPDATE users SET name = '$name', contact = '$contact', email = '$email', username = '$username', role = '$role', status = '$status' WHERE user_id = $user_id");
            notify('info','Data has been changed.',true);
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
                echo json_encode(['url' => URL.'doctor/dashboard','success' => true]);
            } elseif(verify($password,$hash) && $role == 2) {
                $_SESSION['id'] = $row->user_id;
                echo json_encode(['url' => URL.'staff/dashboard','success' => true]);
            } else {
                notify('error','Invalid username or password',false);
            }
        } else {
            notify('error','Invalid username or password',false);
        }
    }

    public function user_recovery($data) {
        $email = $data['email'];
        $check = $this->db->query("SELECT * FROM users WHERE email = '$email'");
        if($check->num_rows > 0) {
        } else {
            notify('error','No record found',false);
        }
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

    public function update_password($data) {
        $password  = $data['password'];
        $user_id   = $data['accounts_id'];
        $query = $this->db->query("UPDATE accounts SET password = '$password' WHERE user_id = '$user_id'");
        notify('info','Password has been changed.',true);
    }

    public function post($data) {
        $query = $this->db->real_escape_string(htmlentities($_POST[$data]));
        return $query;
    }

}
