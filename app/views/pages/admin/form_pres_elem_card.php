<?php 
if($data['report']->num_rows > 0) { } else { redirect('admin/dashboard');  } 
$row = $data['report']->fetch_object();
switch($row->sy) {
    case '2017 - 2018': ''; break;
    case '2018 - 2019': ''; break;
    case '2019 - 2020': ''; break;
    case '2020 - 2021': ''; break;
    case '2021 - 2022': ''; break;
    case '2022 - 2023': ''; break;

    default: 
    redirect('admin/dashboard');
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pre School - Elementary Card</title>
    <style>
    * {
        padding:0;
        margin:0;
    }
    table , td, th {
    border: 1px solid #595959;
    border-collapse: collapse;
}

</style>

    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:10px;padding:0px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:0px 4px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-l711{border-color:inherit;padding:5px}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-uys7{border-color:inherit;text-align:center;padding:5px}
.tg .tg-us36{border-color:inherit;vertical-align:top}
.tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
input[type="text"] { width:100%;text-align:center }
.no-border { border:none }
.s { width:16.66%;text-align:left;border:1px solid #fff }
.a { width:16.66%;text-align:left;border-left:1px solid #000;border-right:1px solid #fff;border-top:1px solid #fff;border-bottom:1px solid #fff;padding-left:5px }
</style>
</head>
<body >
<div style="width:600px;margin:auto;padding:10px">

<table style="width:100%" cellspacing=0 border=1>
<tr>
    <th style="border:1px solid #000;width:12%"><img style="margin-top:3px;width:80px;height:80px;padding:5px"src="http://localhost/sis/assets/images/logo.jpg"></th>
    <th style="border:1px solid #000;width:76%">
    MENDEZ CHRISTIAN ACADEMY <br> 
    Asis III, Mendez, Cavite <br>
    DepEd Recognition No. K – 054 s. 2003, E -013 s. 2006 <br>
    </th>

<th style="border:1px solid #000;width:12%"><img style="margin-top:3px;width:80px;height:80px;padding:5px" src="http://www.freelogovectors.net/wp-content/uploads/2014/05/deped-logo.png"></th>

<tr>
    <td style="border:1px solid #000;text-align:center" colspan=3 ><h2 style="padding:5px">REPORT CARD</h2><h3 style="padding:5px;margin-top:-10px">Elementary Department</h3></td>
</tr>
    
</tr>
</table>

<?php $row = $data['report']->fetch_object();?> 


<table style="width:100%" cellspacing=0>
    <th class="no-border a">Name</th> 
    <td class="no-border s" style="border-right:1px solid #000 !important;text-align:left" colspan=6> <input 
    value="<?=$data['info']->surname?> <?=$data['info']->firstname?> <?=$data['info']->middlename?>" autofocus type="text" style="border:none;outline:none;text-align:left !important"></td>
    <tr>
    <th class="no-border a">Age</th>
    <td class="no-border s"><input value="" type="text" style="border:none;outline:none;text-align:left !important"></td>
    <th class="no-border s">Gender</th>
    <td class="no-border s"><input value="<?=$data['info']->genderr?>" type="text" style="border:none;outline:none;text-align:left !important"></td>
    <th class="no-border s">School Year</th>
    <td class="no-border s" style="border-right:1px solid #000 !important;"><input value="<?=$row->sy?>" type="text" style="border:none;outline:none;text-align:left !important"></td>
    <tr>

    <th class="no-border a">Year</th>
    <td class="no-border s"><input value="<?=$row->level?>" type="text" style="border:none;outline:none;text-align:left !important"></td>
    <th class="no-border s">Section</th>
    <td class="no-border s"><input type="text" value="<?=$row->section_name?>" style="border:none;outline:none;text-align:left !important"></td>
    <th class="no-border s">LRN</th>
    <td class="no-border s" style="border-right:1px solid #000 !important;"><input value="<?=$data['info']->LRN?>" type="text" style="border:none;outline:none;text-align:left !important"></td>
    <tr>
    <th class="no-border a">Adviser</th> 
    <td class="no-border s" style="border-right:1px solid #000 !important;text-align:left" colspan=6> <input type="text" value="<?=$row->name?>" style="border:none;outline:none;text-align:left !important"></td>
    <tr>
</table>

    <table class="tg" style="width:100%">
        
        <tr>
            <td class="tg-uys7" colspan="5" style="width:50%">Subjects</td>
            <td class="tg-uys7" style="width:7%">1</td>
            <td class="tg-uys7" style="width:7%">2</td>
            <td class="tg-uys7" style="width:7%">3</td>
            <td class="tg-uys7" style="width:7%">4</td>
            <td class="tg-uys7">Final Rating / Remarks</td>
        </tr>

        <?php foreach($data['report'] as $rowsix) { ?>
        <?php 
        $a = $rowsix['first'] + $rowsix['second'] + $rowsix['third'] + $rowsix['fourth'];
        $aa = $a / 4;
        $average6 = $aa < 75 ? 'Failed' : 'Passed';
        ?>
     
        <tr>
            <td class="tg-l711" colspan="5"><?=$rowsix['subjects_name']?></td>
            <td class="tg-l711"><input type="text" value="<?=$rowsix['first']?>" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" value="<?=$rowsix['second']?>" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" value="<?=$rowsix['third']?>" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" value="<?=$rowsix['fourth']?>" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" value="<?=$average6?>" style="border:none;outline:none"></td>
        </tr>
        <?php } ?>

        

        <tr>
            <td class="tg-l711" colspan="5">Average</td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
        </tr>
        
    </table>

    <table class="tg" style="width:100%">
        <tr>
            <td style="border:1px solid #000;text-align:center" colspan=3 ><h3 style="padding:10px">ATTENDANCE RECORD</h3></td>
        </tr>
    </table>    

    <table class="tg" style="width:100%">
        <tr>
            <td class="tg-uys7" style="width:20%"></td>
            <td class="tg-uys7" style="width:5%">J</td>
            <td class="tg-uys7" style="width:5%">J</td>
            <td class="tg-uys7" style="width:5%">A</td>
            <td class="tg-uys7" style="width:5%">S</td>
            <td class="tg-uys7" style="width:5%">O</td>
            <td class="tg-uys7" style="width:5%">N</td>
            <td class="tg-uys7" style="width:5%">D</td>
            <td class="tg-uys7" style="width:5%">J</td>
            <td class="tg-uys7" style="width:5%">F</td>
            <td class="tg-uys7" style="width:5%">M</td>
            <td class="tg-uys7" style="width:5%">A</td>
            <td class="tg-uys7" style="width:7%">Total</td>
        </tr>
        
        <tr>
            <td class="tg-l711">Days of School</td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
        </tr>
        
        <tr>
            <td class="tg-l711">Days of Present</td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
        </tr>

        <tr>
            <td class="tg-l711">Days of Absent</td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
            <td class="tg-l711"><input type="text" style="border:none;outline:none"></td>
        </tr>

    </table>    

    <table class="tg" style="width:100%">
       <tr>
       <th class="tg-l711 a" style="border:1px solid #fff !important;text-align:center" ><h3>Eligible for Transfer and Admission to</h3></th>
       </tr>
    </table> 

    <table class="tg" style="width:100%">
        <tr>    
            <th class="tg-l711 a" style="border:1px solid #fff !important;text-align:center;width:50%" ><input type="text" style="border-top:solid 1px #fff;border-left:solid 1px #fff;border-right:solid 1px #fff;border-bottom:solid 1px #000;outline:none"></th>
            <th class="tg-l711 a" style="border:1px solid #fff !important;text-align:center;width:50%" ><input readonly type="text" style="border-top:solid 1px #fff;border-left:solid 1px #fff;border-right:solid 1px #fff;border-bottom:solid 1px #000;outline:none" value="Date: <?= date('F d Y'); ?>" ></th>
        </tr>
    </table>    

    <table class="tg" style="width:100%">
        <tr>    
            <th class="tg-l711 a" style="border:1px solid #fff !important;text-align:center;width:50%" >
            <input  value="<?=$row->name?>"  type="text" style="border-top:solid 1px #fff;border-left:solid 1px #fff;border-right:solid 1px #fff;border-bottom:solid 1px #000;outline:none"></th>
            <th class="tg-l711 a" style="border:1px solid #fff !important;text-align:center;width:50%" ><input type="text" style="border-top:solid 1px #fff;border-left:solid 1px #fff;border-right:solid 1px #fff;border-bottom:solid 1px #000;outline:none" ></th>
        </tr>
    </table> 

    <table class="tg" style="width:100%">
        <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">Class Adviser</th>
        <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">Principal</th>
    </table>    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">PARENT'S / GUARDIAN'S SIGNATURE</th>
        </tr>
    </table>   

     <table class="tg" style="width:100%">
        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">First Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Second Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Third Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Fourth Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>
    </table>  

    <br>
    <br>
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">HONORS / AWARDS OBTAINED</th>
        </tr>
    </table> 

    <table class="tg" style="width:100%">
        
        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">First Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=$data['award']->first?>" type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Second Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=$data['award']->second?>" type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Third Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=$data['award']->third?>" type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Fourth Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=$data['award']->fourth?>" type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Final</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>
    </table>   

     <br>
    <br>
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">GUIDELINES FOR RATING</th>
        </tr>
    </table> 

    <table class="tg" style="width:100%">
        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">O</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">Outstanding</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">93 & above</td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">VS</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">Very satisfactory</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">86 - 92.99</td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">S</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">Satisfactory</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">80 - 85.99</td>
        </tr>

        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">MS</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">Moderately Satisfactory</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">75 - 79.99</td>
        </tr>

        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">NI</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">Needs Improvements</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">74.99 & below</td>
        </tr>
    </table> 

    <br>
    <br>
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">HONORS AND AWARDS</th>
        </tr>
    </table> 

    <table class="tg" style="width:100%">
        <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:right;font-size:16px">Excellent </td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">95.50 - 100</td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:right;font-size:16px">Outstanding</td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">92.50 - 95.49</td>
        </tr>

         <tr>
            <td class="tg-l711" style="border:1px solid #fff;font-weight:bolder;text-align:right;font-size:16px">Achiever </td>
            <td class="tg-l711" style="border:solid 1px #fff;-bottom:solid 1px #000;font-weight:bolder;font-size:18px">90.00 - 92.49</td>
        </tr>

    </table>   


</div>

</body>
</html>