var url = getAbsolutePath();
var include = url+'../app/views/pages/includes';
function login() {
    var data = $('#formLogin').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'user_login',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-login').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? location.href = data.url : notify(data.type,data.message);
            $('#btn-login').html('Login <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function recover() {
    var data = $('#formRecover').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'user_recovery',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-recover').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? location.href = data.url : notify(data.type,data.message);
            $('#btn-recover').html('Reset password <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

// activity 

function add_new_activity() {
    var modal = $('#modal-activity');
    $('#btn-activity').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formActivity')[0].reset();
    modal.modal();
}

function activity() {
    var data = $('#formActivity').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateActivity',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-activity').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'activity' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-activity').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_activity(activity_id) {
    var modal = $('#modal-activity');
    $('#btn-activity').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_activity_using_id',
        data : { activity_id : activity_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#activity_id')).val(activity_id);
            modal.find($('#subject')).val(data.subject);
            modal.find($('#description')).val(data.description);
            modal.modal();
            $('#btn-activity').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_activity(activity_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_activity_using_id',
        data : { activity_id : activity_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'activity';
        }
    })
}

// end activity 


// events
function add_new_events() {
    var modal = $('#modal-events');
    $('#btn-events').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formEvents')[0].reset();
    modal.modal();
}

function events() {
    var data = $('#formEvents').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateEvents',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-events').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'events' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-events').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_events(events_id) {
    var modal = $('#modal-events');
    $('#btn-events').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_events_using_id',
        data : { events_id : events_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#events_id')).val(events_id);
            modal.find($('#title')).val(data.title);
            modal.find($('#start')).val(data.start);
            modal.find($('#end')).val(data.end);
            modal.find($('#description')).val(data.description);
            modal.modal();
            $('#btn-events').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_events(events_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_events_using_id',
        data : { events_id : events_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'events';
        }
    })
}
// end events


// students
function add_new_students() {
    var modal = $('#modal-students');
    $('#btn-students').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formStudents')[0].reset();
    modal.modal();
}

function students() {
    var data = $('#formStudents').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateStudents',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-students').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'students' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-students').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_students(students_id) {
    var modal = $('#modal-students');
    $('#btn-students').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_students_using_id',
        data : { students_id : students_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#stud_id')).val(students_id);
            modal.find($('#LRN')).val(data.LRN);
            modal.find($('#guardian_id')).val(data.guardian_id);
            modal.find($('#surname')).val(data.surname);
            modal.find($('#firstname')).val(data.firstname);
            modal.find($('#middlename')).val(data.middlename);
            modal.find($('#gender')).val(data.gender);
            modal.find($('#contact')).val(data.contact);
            modal.find($('#email')).val(data.email);
            modal.find($('#address')).val(data.address);
            modal.modal();
            $('#btn-students').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_students(students_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_students_using_id',
        data : { students_id : students_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'students';
        }
    })
}
// end students

// section
function add_new_section() {
    var modal = $('#modal-section');
    $('#btn-section').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formSection')[0].reset();
    modal.modal();
}

function section() {
    var data = $('#formSection').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateSection',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-section').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'section' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-section').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_section(section_id) {
    var modal = $('#modal-section');
    $('#btn-section').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_section_using_id',
        data : { section_id : section_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#section_id')).val(section_id);
            modal.find($('#name')).val(data.section_name);
            modal.find($('#level')).val(data.level);
            modal.find($('#description')).val(data.description);
            modal.modal();
            $('#btn-section').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_section(section_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_section_using_id',
        data : { section_id : section_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'section';
        }
    })
}
// end section

// subjects
function add_new_subjects() {
    var modal = $('#modal-subjects');
    $('#btn-subjects').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formSubjects')[0].reset();
    modal.modal();
}

function subjects() {
    var data = $('#formSubjects').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateSubjects',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-subjects').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'subjects' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-subjects').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_subjects(subjects_id) {
    var modal = $('#modal-subjects');
    $('#btn-subjects').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_subjects_using_id',
        data : { subjects_id : subjects_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#subj_id')).val(subjects_id);
            modal.find($('#name')).val(data.subjects_name);
            modal.find($('#description')).val(data.description);
            modal.modal();
            $('#btn-subjects').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_subjects(subjects_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_subjects_using_id',
        data : { subjects_id : subjects_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'subjects';
        }
    })
}
// end subjects

// teachers
function add_new_teachers() {
    var modal = $('#modal-teachers');
    $('#btn-teachers').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formTeachers')[0].reset();
    modal.modal();
}

function teachers() {
    var data = $('#formTeachers').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateTeachers',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-teachers').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'teachers' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-teachers').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_teachers(user_id) {
    var modal = $('#modal-teachers');
    $('#btn-teachers').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_teachers_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#user_id')).val(user_id);
            modal.find($('#name')).val(data.name);
            modal.find($('#contact')).val(data.contact);
            modal.find($('#email')).val(data.email);
            modal.find($('#username')).val(data.username);
            modal.find($('#status')).val(data.status);
            modal.find($('#educational_background')).val(data.educational_background);
            modal.modal();
            $('#btn-teachers').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_teachers(user_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_teachers_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'teachers';
        }
    })
}
// end teachers

// Parents
function add_new_parents() {
    var modal = $('#modal-parents');
    $('#btn-parents').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formParents')[0].reset();
    modal.modal();
}

function parents() {
    var data = $('#formParents').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateParents',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-parents').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'parents' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-parents').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_parents(user_id) {
    var modal = $('#modal-parents');
    $('#btn-parents').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_parents_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#user_id')).val(user_id);
            modal.find($('#name')).val(data.name);
            modal.find($('#contact')).val(data.contact);
            modal.find($('#email')).val(data.email);
            modal.find($('#username')).val(data.username);
            modal.find($('#status')).val(data.status);
            modal.modal();
            $('#btn-parents').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_parents(user_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_parents_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'parents';
        }
    })
}
// end Parents

// Violations
function add_new_violations() {
    var modal = $('#modal-violations');
    $('#btn-violations').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formViolations')[0].reset();
    modal.modal();
}

function violations() {
    var data = $('#formViolations').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateViolations',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-violations').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'violations' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-violations').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_violations(violations_id) {
    var modal = $('#modal-violations');
    $('#btn-violations').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_violations_using_id',
        data : { violations_id : violations_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#violations_id')).val(violations_id);
            modal.find($('#name')).val(data.name);
            modal.find($('#description')).val(data.description);
            modal.modal();
            $('#btn-violations').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_violations(violations_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_violations_using_id',
        data : { violations_id : violations_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'violations';
        }
    })
}
// end Violations

// Accounts
function add_new_accounts() {
    var modal = $('#modal-accounts');
    $('#btn-accounts').html('Add New <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#formAccounts')[0].reset();
    modal.modal();
}

function accounts() {
    var data = $('#formAccounts').serialize();
    $.ajax({
        type : 'POST',
        url : url+'AddOrUpdateAccounts',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-accounts').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data){
            data.success === true ? location.href = url + 'accounts' : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add New';
            $('#btn-accounts').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function modify_accounts(user_id) {
    var modal = $('#modal-accounts');
    $('#btn-accounts').html('Save Changes <i class="icon-arrow-right14 position-right"></i>');
    $.ajax({
        type : 'POST',
        url : url+'get_accounts_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            modal.find($('#user_id')).val(user_id);
            modal.find($('#name')).val(data.name);
            modal.find($('#contact')).val(data.contact);
            modal.find($('#email')).val(data.email);
            modal.find($('#status')).val(data.status);
            modal.find($('#role')).val(data.role);
            modal.modal();
            $('#btn-accounts').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_accounts(user_id) {
    $.ajax({
        type : 'POST',
        url : url+'delete_accounts_using_id',
        data : { user_id : user_id },
        dataType : 'json',
        success:function(data){
            location.href = url + 'accounts';
        }
    })
}
// end Accounts


function update_profile() {
    var data = $('#formUpdateProfile').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'update_profile',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-upload-profile').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            $('#btn-upload-profile').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}



function update_password() {
    var data = $('#formUpdateProfile').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'update_password',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-upload-profile').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            $('#btn-upload-profile').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function profile_picture() {
    var data = new FormData($('#formProfile')[0]);
    $.ajax({  
        type: 'POST',
        url: url + 'update_picture',
        data: data,  
        contentType: false, 
        processData:false, 
        cache:false,
        dataType: 'json',
        mimeType: "multipart/form-data",
        success: function(data) {  
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
        }  
    });  
}

function assign_teachers(user_id) {
    var modal = $('#modal-assign-teachers');
    $('#btn-assign-teacher').html('Assign <i class="icon-arrow-right14 position-right"></i>');
    modal.find($('#user_id')).val(user_id);
    modal.modal();
}

function assign_to_teachers() {
    var data  = $('#formAssign').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'assign_to_teachers',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-assign-teacher').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? location.href = url + 'assign_teachers' : notify(data.type,data.message);
            $('#btn-assign-teacher').html('Assign <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_assign_in_teachers(user_id,section_id,subjects_id) {
    $.ajax({
        type : 'POST',
        url : url + '../delete_assign_in_teachers',
        data : { user_id : user_id, section_id : section_id, subjects_id : subjects_id},
        dataType : 'json',
        success:function(data) {
            location.href = url + '../view_assign_in_teachers/'+user_id 
        }
    })
}

function assign_students(section_id) {
    var modal = $('#modal-assign-students');
    $('#btn-assign-students').html('Assign <i class="icon-arrow-right14 position-right"></i>');
    modal.find($('#sec_id')).val(section_id);
    modal.modal();
}

function assign_to_students() {
    var data  = $('#formAssign').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'assign_to_students',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-assign-students').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? location.href = url + 'assign_students' : notify(data.type,data.message);
            $('#btn-assign-students').html('Assign <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_assign_in_students(section_id,students_id) {
    $.ajax({
        type : 'POST',
        url : url + '../delete_assign_in_students',
        data : { section_id : section_id, students_id : students_id},
        dataType : 'json',
        success:function(data) {
            location.href = url + '../view_assign_in_students/'+section_id 
        }
    })
}


function assign_grades_in_students(section_id,students_id,subjects_id) {
    var modal = $('#modal-assign-grades');
    $('#btn-assign-student-grades').html('Assign <i class="icon-arrow-right14 position-right"></i>');
    modal.find($('#sec_id')).val(section_id);
    modal.find($('#stud_id')).val(students_id);
    modal.modal();
}

function assign_student_grades() {
    var data  = $('#formAssign').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'assign_student_grades',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-assign-student-grades').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? location.href = url + 'student_grade_book' : notify(data.type,data.message);
            $('#btn-assign-student-grades').html('Assign <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}


function notify(type,message) {
    Command: toastr[type](message)
}

function toastr_option() {
    toastr.options = {
        "newestOnTop": true, "progressBar": true, "positionClass": "toast-top-right", "preventDuplicates": true, "showDuration": 300, "hideDuration": 1000, "timeOut": 5000, "extendedTimeOut": 1000, "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut"
    }
}

function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

$('#subjects_id').select2({ placeholder: 'Select Subjects' });
$('#students_id').select2({ placeholder: 'Select Students' });
$('#guardian_id').select2({ placeholder: 'Select Guardian' });
$('#section_id').select2();