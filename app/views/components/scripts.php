<!-- Core JS files -->
<script type="text/javascript" src="<?=ASSETS?>js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="<?=ASSETS?>js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/pickers/daterangepicker.js"></script>


<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/extensions/responsive.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/pages/datatables_responsive.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/ui/ripple.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/core/app.js"></script>

<script type="text/javascript" src="<?=ASSETS?>functions/ajax.js"></script>
<script type="text/javascript" src="<?=ASSETS?>angular/1.4.8.angular.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>angular/1.4.2.angular.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/pages/datatables_extension_buttons_print.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script type="text/javascript">
var app = angular.module('app', ['ngMessages']);
app.controller('mainController',function($scope){
    $scope.sname     = '<?=$data['user_info']->name?>',
    $scope.scontact  = '<?=$data['user_info']->contact?>',
    $scope.semail    = '<?=$data['user_info']->email?>',
    $scope.susername = '<?=$data['user_info']->username?>'
    
});

toastr_option();
$('.picture').change( function(event) {
    $("#preview").attr('src',URL.createObjectURL(event.target.files[0]));
});
$(document).ready(function() {
    $("#contact").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

</script>

<!-- /theme JS files -->
</body>
</html>
