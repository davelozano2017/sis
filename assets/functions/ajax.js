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
            modal.find($('#students_id')).val(students_id);
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
            modal.find($('#name')).val(data.name);
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
            modal.find($('#subjects_id')).val(subjects_id);
            modal.find($('#name')).val(data.name);
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

function doctor_modal() {
    var modal = $('#doctor-modal');
    modal.modal();
    $('#formDoctor')[0].reset();
    
    modal.find($('#btn-doctor')).html('Add Doctor <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
}

function admission_modal() {
    var modal = $('#admission-modal');
    modal.modal();
    $('#formAdmission')[0].reset();
    modal.find($('#btn-admissions')).html('Add In Patient <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
    $('#btn-admissions').removeClass('hidden');
}

function out_patient_modal() {
    var modal = $('#out-patient-modal');
    modal.modal();
    $('#formOutPatients')[0].reset();
    modal.find($('#btn-out-patients')).html('Add Out Patient <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
}



function room_modal() {
    var modal = $('#rooms-modal');
    modal.modal();
    $('#formRoom')[0].reset();
    modal.find($('#btn-rooms')).html('Add Room <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
}

function staff_modal() {
    var modal = $('#staff-modal');
    modal.modal();
    $('#formStaff')[0].reset();
    modal.find($('#btn-staff')).html('Add Staff <i class="icon-arrow-right14 position-right"></i>').attr('disabled',true);
}

function InsertOrUpdateRooms() {
    var data = $('#formRooms').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'InsertOrUpdateRooms',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-rooms').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add Room';
            $('#btn-rooms').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
            $('#rooms-modal').modal('hide');
        }
    })
}

function InsertOrUpdateAdmission() {
    var data = $('#formAdmission').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'InsertOrUpdateAdmissions',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-admissions').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add In Patients';
            $('#btn-admissions').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
            $("#admission-modal").modal('hide');
        }
    })
}

function InsertOrUpdateOutPatients() {
    var data = $('#formOutPatients').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'InsertOrUpdateOutPatients',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-out-patients').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add Out Patients';
            $('#btn-out-patients').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
            $('#out-patient-modal').modal('hide');
        }
    })
}



function InsertOrUpdateDoctor() {
    var data = $('#formDoctor').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'InsertOrUpdateDoctor',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-doctor').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add Doctor';
            $('#btn-doctor').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
            $('#doctor-modal').modal('hide');
        }
    })
}

function InsertOrUpdateStaff() {
    var data = $('#formStaff').serialize();
    $.ajax({
        type : 'POST',
        url : url + 'InsertOrUpdateStaff',
        data : data,
        dataType : 'json',
        beforeSend:function() {
            $('#btn-staff').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            data.success === true ? notify(data.type,data.message) : notify(data.type,data.message);
            var content = data.type == 'info' ? 'Save Changes' : 'Add Staff';
            $('#btn-staff').html(content +' <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
            $('#staff-modal').modal('hide');
        }
    })
}

function view_doctor(accounts_id) {
    var modal = $('#doctor-modal');
    $.ajax({
        type : 'POST',
        url : url + 'get_information_by_id',
        data : {
            accounts_id : accounts_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#doctor_accounts_id')).val(data.accounts_id);
            modal.find($('#doctor_name')).val(data.name);
            modal.find($('#doctor_contact')).val(data.contact);
            modal.find($('#doctor_email')).val(data.email);
            modal.find($('#doctor_gender')).val(data.gender);
            modal.find($('#doctor_username')).val(data.username);
            modal.find($('#doctor_address')).val(data.address);
            modal.find($('#status')).val(data.status);
            $('#btn-doctor').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function view_out_patients_by_surname(outpatients_id) {
    var modal = $('#out-patient-modal');
    $.ajax({
        type : 'POST',
        url : url + '../get_out_patient_by_id',
        data : {
            outpatients_id : outpatients_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#outpatients_id')).val(data.outpatients_id);
            modal.find($('#ssurname')).val(data.surname);
            modal.find($('#sfirstname')).val(data.firstname);
            modal.find($('#smiddlename')).val(data.middlename);
            modal.find($('#birthday')).val(data.birthday);
            modal.find($('#sage')).val(data.age);
            modal.find($('#sgender')).val(data.gender);
            modal.find($('#spatient_address')).val(data.address);
            modal.find($('#opd_case_number')).val(data.opd_case_number);
            modal.find($('#chief_complaints')).val(data.chief_complaints);
            modal.find($('#physicians_id')).val(data.physicians_id);
            modal.find($('#hp')).val(data.hp);
            modal.find($('#pulse_rate')).val(data.pulse_rate);
            modal.find($('#respiratory_rate')).val(data.respiratory_rate);
            modal.find($('#temperature')).val(data.temperature);
            modal.find($('#weight')).val(data.weight);
            modal.find($('#date')).val(data.date);
            modal.find($('#time')).val(data.time);
            modal.find($('#impression')).val(data.impression);
            modal.find($('#treatment')).val(data.treatment);
            $('#btn-out-patients').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function view_out_patients(outpatients_id) {
    var modal = $('#out-patient-modal');
    $.ajax({
        type : 'POST',
        url : url + 'get_out_patient_by_id',
        data : {
            outpatients_id : outpatients_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#outpatients_id')).val(data.outpatients_id);
            modal.find($('#surname')).val(data.surname);
            modal.find($('#firstname')).val(data.firstname);
            modal.find($('#middlename')).val(data.middlename);
            modal.find($('#birthday')).val(data.birthday);
            modal.find($('#age')).val(data.age);
            modal.find($('#gender')).val(data.gender);
            modal.find($('#patient_address')).val(data.address);
            modal.find($('#opd_case_number')).val(data.opd_case_number);
            modal.find($('#chief_complaints')).val(data.chief_complaints);
            modal.find($('#physicians_id')).val(data.physicians_id);
            modal.find($('#hp')).val(data.hp);
            modal.find($('#pulse_rate')).val(data.pulse_rate);
            modal.find($('#respiratory_rate')).val(data.respiratory_rate);
            modal.find($('#temperature')).val(data.temperature);
            modal.find($('#weight')).val(data.weight);
            modal.find($('#date')).val(data.date);
            modal.find($('#time')).val(data.time);
            modal.find($('#impression')).val(data.impression);
            modal.find($('#treatment')).val(data.treatment);
            $('#btn-out-patients').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}



function view_admissions(admissions_id) {
    var modal = $('#admission-modal');
    $.ajax({
        type : 'POST',
        url : url + 'get_admissions_by_id',
        data : {
            admissions_id : admissions_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#admissions_id')).val(data.admissions_id);
            modal.find($('#patient_code')).val(data.patient_code);
            modal.find($('#surname')).val(data.surname);
            modal.find($('#firstname')).val(data.firstname);
            modal.find($('#middlename')).val(data.middlename);
            modal.find($('#birthday')).val(data.birthday);
            modal.find($('#patient_address')).val(data.address);
            modal.find($('#birthplace')).val(data.birthplace);
            modal.find($('#age')).val(data.age);
            modal.find($('#gender')).val(data.gender);
            modal.find($('#civil_status')).val(data.civil_status);
            modal.find($('#nationality')).val(data.nationality);
            modal.find($('#religion')).val(data.religion);
            modal.find($('#occupation')).val(data.occupation);
            modal.find($('#name1')).val(data.name1);
            modal.find($('#address1')).val(data.address1);
            modal.find($('#contact1')).val(data.contact1);
            modal.find($('#name2')).val(data.name2);
            modal.find($('#address2')).val(data.address2);
            modal.find($('#contact2')).val(data.contact2);
            modal.find($('#name3')).val(data.name3);
            modal.find($('#address3')).val(data.address3);
            modal.find($('#contact3')).val(data.contact3);

            modal.find($('#hospital_code')).val(data.hospital_code);
            modal.find($('#medical_record_number')).val(data.medical_record_number);
            modal.find($('#room')).val(data.room);
            modal.find($('#admission_date')).val(data.admission_date);
            modal.find($('#admission_time')).val(data.admission_time);
            modal.find($('#discharged_date')).val(data.discharged_date);
            modal.find($('#discharged_time')).val(data.discharged_time);
            modal.find($('#days')).val(data.days);
            modal.find($('#admitting_personnel')).val(data.admitting_personnel);
            modal.find($('#attending_physicians')).val(data.attending_physicians);
            modal.find($('#referred_by')).val(data.referred_by);
            modal.find($('#alert')).val(data.alert);
            modal.find($('#allergic')).val(data.allergic);
            modal.find($('#admission_type')).val(data.admission_type);
            modal.find($('#health_insurance')).val(data.health_insurance);
            modal.find($('#philhealth')).val(data.philhealth);
            modal.find($('#data_furnished')).val(data.data_furnished);
            modal.find($('#informant')).val(data.informant);
            modal.find($('#patient_relation')).val(data.patient_relation);
            modal.find($('#admission_diagnosis')).val(data.admission_diagnosis);
            modal.find($('#final_diagnosis')).val(data.final_diagnosis);
            modal.find($('#icd')).val(data.icd);
            modal.find($('#principal_operation')).val(data.principal_operation);
            modal.find($('#disposition')).val(data.disposition);
            modal.find($('#outcome')).val(data.outcome);
            if(data.status == 1) {
                $('#btn-admissions').addClass('hidden');
            } else {
                $('#btn-admissions').removeClass('hidden');
            }
            modal.find($('#btn-admissions')).html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function view_patients(admissions_id) {
    var modal = $('#admission-modal');
    $.ajax({
        type : 'POST',
        url : url + '../get_admissions_by_id',
        data : {
            admissions_id : admissions_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#admissions_id')).val(data.admissions_id);
            modal.find($('#surname')).val(data.surname);
            modal.find($('#firstname')).val(data.firstname);
            modal.find($('#middlename')).val(data.middlename);
            modal.find($('#birthday')).val(data.birthday);
            modal.find($('#patient_address')).val(data.address);
            modal.find($('#birthplace')).val(data.birthplace);
            modal.find($('#age')).val(data.age);
            modal.find($('#gender')).val(data.gender);
            modal.find($('#civil_status')).val(data.civil_status);
            modal.find($('#nationality')).val(data.nationality);
            modal.find($('#religion')).val(data.religion);
            modal.find($('#occupation')).val(data.occupation);
            modal.find($('#name1')).val(data.name1);
            modal.find($('#address1')).val(data.address1);
            modal.find($('#contact1')).val(data.contact1);
            modal.find($('#name2')).val(data.name2);
            modal.find($('#address2')).val(data.address2);
            modal.find($('#contact2')).val(data.contact2);
            modal.find($('#name3')).val(data.name3);
            modal.find($('#address3')).val(data.address3);
            modal.find($('#contact3')).val(data.contact3);

            modal.find($('#hospital_code')).val(data.hospital_code);
            modal.find($('#medical_record_number')).val(data.medical_record_number);
            modal.find($('#room')).val(data.room);
            modal.find($('#admission_date')).val(data.admission_date);
            modal.find($('#admission_time')).val(data.admission_time);
            modal.find($('#discharged_date')).val(data.discharged_date);
            modal.find($('#discharged_time')).val(data.discharged_time);
            modal.find($('#days')).val(data.days);
            modal.find($('#admitting_personnel')).val(data.admitting_personnel);
            modal.find($('#attending_physicians')).val(data.attending_physicians);
            modal.find($('#referred_by')).val(data.referred_by);
            modal.find($('#alert')).val(data.alert);
            modal.find($('#allergic')).val(data.allergic);
            modal.find($('#admission_type')).val(data.admission_type);
            modal.find($('#health_insurance')).val(data.health_insurance);
            modal.find($('#philhealth')).val(data.philhealth);
            modal.find($('#data_furnished')).val(data.data_furnished);
            modal.find($('#informant')).val(data.informant);
            modal.find($('#patient_relation')).val(data.patient_relation);
            modal.find($('#admission_diagnosis')).val(data.admission_diagnosis);
            modal.find($('#final_diagnosis')).val(data.final_diagnosis);
            modal.find($('#icd')).val(data.icd);
            modal.find($('#principal_operation')).val(data.principal_operation);
            modal.find($('#disposition')).val(data.disposition);
            modal.find($('#outcome')).val(data.outcome);
            if(data.status == 1) {
                $('#btn-admissions').addClass('hidden');
            } else {
                $('#btn-admissions').removeClass('hidden');
            }
            modal.find($('#btn-admissions')).html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function view_rooms(rooms_id) {
    var modal = $('#rooms-modal');
    $.ajax({
        type : 'POST',
        url : url + 'get_rooms_by_id',
        data : {
            rooms_id : rooms_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#rooms_id')).val(rooms_id);
            modal.find($('#room_type')).val(data.room_type);
            modal.find($('#floor')).val(data.floor);
            modal.find($('#room_number')).val(data.room_number);
            $('#btn-rooms').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
        }
    })
}

function delete_rooms() {
    var data = $('#formRooms').serialize();
    var modal = $('#rooms-modal');
    $.ajax({
        type : 'POST',
        url : url + 'delete_rooms_by_id',
        data : data,
        dataType : 'json',
        beforeSend:function(){
            $('#btn-delete-rooms').html(' <i class="icon-spinner2 spinner"></i>').attr('disabled',true);
        },
        success:function(data) {
            modal.modal('hide');
            notify(data.type,data.message);
        }
    })
}

function view_staff(accounts_id) {
    var modal = $('#staff-modal');
    $.ajax({
        type : 'POST',
        url : url + 'get_information_by_id',
        data : {
            accounts_id : accounts_id
        },
        dataType : 'json',
        success:function(data) {
            modal.modal();
            modal.find($('#staff_accounts_id')).val(data.accounts_id);
            modal.find($('#staff_name')).val(data.name);
            modal.find($('#staff_contact')).val(data.contact);
            modal.find($('#staff_email')).val(data.email);
            modal.find($('#staff_gender')).val(data.gender);
            modal.find($('#staff_username')).val(data.username);
            modal.find($('#staff_address')).val(data.address);
            $('#btn-staff').html('Save Changes <i class="icon-arrow-right14 position-right"></i>').attr('disabled',false);
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