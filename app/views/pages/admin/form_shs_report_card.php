<?php 
if($data['shs1st']->num_rows > 0) { } else { redirect('admin/dashboard');  } 
$row = $data['shs1st']->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SHS Report Card</title>
</head>
<body>
  
  <div style="margin:auto;width:700px">
  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-l711{border-color:inherit}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-us36{border-color:inherit;vertical-align:top}
.tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
.tg .tg-p8bj{font-weight:bold;border-color:inherit;vertical-align:top}
.tg .tg-6ic8{font-weight:bold;border-color:inherit;text-align:right;vertical-align:top}
.no-border{ border:none !important;outline:none; }
input[type="text"] { border:none !important;outline:none;width:30px;text-align:center }
</style>
<table class="tg" style="width:100%">
  <tr>
    <th class="tg-us36 no-border" rowspan="2" style="width:30%"><img src="http://localhost/sis/assets/images/logo.jpg" style="width:100px;height:100px"></th>
    <th class="tg-c3ow no-border" colspan="3" rowspan="2" style="width:40%">Republic of the Philippines<br>Department of,Education<br>Region IV-A, CALABARZON <br>DIVISION OF CAVITE<br>MENDEZ CHRISTIAN ACADEMY<br>Asis 3 Mendez,,Cavite</th>
    <th class="tg-us36 no-border" rowspan="2" style="width:30%"><img src="https://i.pinimg.com/originals/82/f1/c9/82f1c91e1c28f7b0bbc1d9a41332ba48.png" style="width:100px;height:100px"></th>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-us36 no-border" style="width:1% !important">NAME: </td>
    <td class="tg-us36 no-border"><input style="width:100% !important;text-align:left" value="<?=$data['info']->surname?> <?=$data['info']->firstname?> <?=$data['info']->middlename?>" autofocus type="text"></td>
    <td class="tg-dvpl no-border" colspan="2">SEX:</td>
    <td class="tg-us36 no-border"><input value="<?=$data['info']->genderr?>" type="text"></td>
  </tr>
  <tr>
    <td class="tg-us36 no-border">GRADE/SEC:</td>
    <td class="tg-us36 no-border"><input value="<?=$row->level?>" style="width:100% !important;text-align:left" type="text"></td>
    <td class="tg-dvpl no-border" colspan="2">AGE:</td>
    <td class="tg-us36 no-border"><input style="width:100% !important;text-align:left" type="text"></td>
  </tr>
  <tr>
    <td class="tg-us36 no-border">CURRICULUM:</td>
    <td class="tg-us36 no-border"><input style="width:40% !important;text-align:left" value="K - 12" type="text"></td>
    <td class="tg-dvpl no-border" colspan="2">S.Y:</td>
    <td class="tg-us36 no-border"><input value="<?=$row->sy?>" style="width:100% !important;text-align:left" type="text"></td>
  </tr>
  <tr>
    <td class="tg-l711 no-border">TRACK/STRAND:</td>
    <td class="tg-us36 no-border"><input style="width:100% !important;text-align:left" type="text" value="General Academic"></td>
    <td class="tg-dvpl no-border" colspan="2">LRN:</td>
    <td class="tg-us36 no-border"><input style="width:100% !important;text-align:left" value="<?=$data['info']->LRN?>" type="text"></td>
  </tr>
  <tr>
    <td class="tg-c3ow no-border" colspan="5">REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</td>
  </tr>
  <tr>
    <td class="tg-us36 no-border" colspan="5"><b>First Semester</b></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="2">Subjects</td>
    <td class="tg-c3ow" colspan="2">     Quarter     </td>
    <td class="tg-c3ow" rowspan="2"><br>Semester Final<br>Grade</td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="2">Core Subjects</td>
    <td class="tg-c3ow">1</td>
    <td class="tg-c3ow">2</td>
  </tr>
  <?php foreach($data['shs1st'] as $rowsix) { ?>
  <?php 
  $a = $rowsix['first'] + $rowsix['second'];
  $aa = $a /2;
  if($rowsix['second'] == 0 ) {
    $average = '';
  } else {
    $average = $aa < 75 ? 'Failed' : 'Passed';
  }
  ?>

  <tr>
    <td class="tg-us36" colspan="2"><?=$rowsix['subjects_name']?></td>
    <td class="tg-us36"><input type="text" value="<?=$rowsix['first']?>"></td>
    <td class="tg-us36"><input type="text" value="<?=$rowsix['second']?>"></td>
    <td class="tg-dvpl"><input type="text" value="<?=$aa?>%" style="width:100%"></td>
  </tr>

  <?php } ?>

  <tr>
    <td class="tg-us36 no-border" colspan="5"></td>
  </tr>
  <tr>
    <td class="tg-6ic8" colspan="4">General Average for the Semester</td>
    <td class="tg-dvpl"><input type="text" value="<?=$average?>" style="width:100%"></td>
  </tr>

  <tr>
    <td class="tg-us36 no-border" colspan="5"><b>Second Semester</b></td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="2">Subjects</td>
    <td class="tg-c3ow" colspan="2">     Quarter     </td>
    <td class="tg-c3ow" rowspan="2"><br>Semester Final<br>Grade</td>
  </tr>
  <tr>
    <td class="tg-us36" colspan="2">Core Subjects</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">4</td>
  </tr>
  <?php if($data['shs2nd']->num_rows > 0) { ?>
    <?php foreach($data['shs2nd'] as $rowss) { ?>
    <?php 
    $a = $rowss['third'] + $rowss['fourth'] ;
    $aa = $a / 2;
    if($rowss['third'] == 0 ) {
      $average2 = '';
    } else {
      $average2 = $aa < 75 ? 'Failed' : 'Passed';
    }
    ?>

    <tr>
      <td class="tg-us36" colspan="2"><?=$rowss['subjects_name']?></td>
      <td class="tg-us36"><input type="text" value="<?=$rowss['third']?>"></td>
      <td class="tg-us36"><input type="text" value="<?=$rowss['fourth']?>"></td>
      <td class="tg-dvpl"><input type="text" value="<?=$aa?>%" style="width:100%"></td>
    </tr>

    <?php } ?>
  <?php } else { ?>
    <tr>
      <td class="tg-us36" colspan="2">Statistics and Probability</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Reading and Writing	</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Practical Research 1	</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Physical Science</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Physical Education and Health	</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Pag babasa at pag susuri ng iba't ibang teksto tungkol sa pananaliksik	</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Humanities 2 - Intro to World Religion and Belief System</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Fundamentals of ABM 1	</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Entrepreneurship</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>

    <tr>
      <td class="tg-us36" colspan="2">Christian Living</td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-us36"><input type="text" value="0"></td>
      <td class="tg-dvpl"><input type="text" value="" style="width:100%"></td>
    </tr>
  <?php } ?> 
  

  <tr>
    <td class="tg-us36 no-border" colspan="5"></td>
  </tr>
  <tr>
    <td class="tg-6ic8" colspan="4">General Average for the Semester</td>
    <td class="tg-dvpl"><input type="text" value="<?=$average2?>" style="width:100%"></td>
  </tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711 a" style="border:1px solid #fff;font-weight:bolder;text-align:center;font-size:16px">PARENT'S / GUARDIAN'S SIGNATURE</th>
        </tr>
    </table>   

     <table class="tg" style="width:100%">
        <tr>
            <td class="tg-l711" style="width:200px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">First Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="width:200px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Second Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="width:200px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Third Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="width:200px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Fourth Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
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
            <td class="tg-l711" style="width:300px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">First Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=@$data['award']->first?>" type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="width:300px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Second Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=@$data['award']->second?>" type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

         <tr>
            <td class="tg-l711" style="width:300px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Third Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=@$data['award']->third?>" type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

        <tr>
            <td class="tg-l711" style="width:300px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Fourth Quarter</td>
            <td class="tg-l711" style="border:1px solid #fff"><input value="<?=@$data['award']->fourth?>" type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>

        <tr>
            <td class="tg-l711" style="width:300px;border:1px solid #fff;font-weight:bolder;text-align:left;font-size:16px">Final</td>
            <td class="tg-l711" style="border:1px solid #fff"><input type="text" style="text-align:left;width:100%;border-top:solid 1px #fff; border-left:solid 1px #fff; border-right:solid 1px #fff; border-bottom:solid 1px #000; outline:none"></td>
        </tr>
    </table>  
    
    <br>
    <br>
    <center><label for="" ><b>REPORT ON ATTENDANCE</b></label></center>
   <form name="form" id="form" method="POST"> 
   <input type="hidden" name="students_id" value="<?=$data['info']->students_id?>">
   <input type="hidden" name="level" value="<?=$row->level?>">
   
   <?php if($data['attendance']->num_rows > 0) { ?>
      <table class="tg" style="width:100%">
        <tr>
          <th class="tg-031e" colspan="3" style="width:600px"></th>
          <th class="tg-yw4l">Jun</th>
          <th class="tg-yw4l">Jul</th>
          <th class="tg-yw4l">Aug</th>
          <th class="tg-yw4l">Sep</th>
          <th class="tg-yw4l">Oct</th>
          <th class="tg-yw4l">Nov</th>
          <th class="tg-yw4l">Dec</th>
          <th class="tg-yw4l">Jan</th>
          <th class="tg-yw4l">Feb</th>
          <th class="tg-yw4l">Mar</th>
          <th class="tg-yw4l">Apr</th>
          <th class="tg-yw4l">Total</th>
        </tr>
      <?php foreach($data['attendance'] as $rows) { ?>
          <tr>
            <td class="tg-031e" colspan="3" style="width:600px"><?=$rows['title']?></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['jun']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['jul']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['aug']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['sep']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['oct']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['nov']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['dece']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['jan']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['feb']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['mar']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['apr']?>" style="width:100%"></td>
            <td class="tg-yw4l"><input type="text" value="<?=$rows['total']?>" style="width:100%"></td>
          </tr>
      <?php } ?>
      </table>
   <?php } else { ?>
    <table class="tg" style="width:100%">
  <tr>
    <th class="tg-031e" colspan="3" style="width:600px"></th>
    <th class="tg-yw4l">Jun</th>
    <th class="tg-yw4l">Jul</th>
    <th class="tg-yw4l">Aug</th>
    <th class="tg-yw4l">Sep</th>
    <th class="tg-yw4l">Oct</th>
    <th class="tg-yw4l">Nov</th>
    <th class="tg-yw4l">Dec</th>
    <th class="tg-yw4l">Jan</th>
    <th class="tg-yw4l">Feb</th>
    <th class="tg-yw4l">Mar</th>
    <th class="tg-yw4l">Apr</th>
    <th class="tg-yw4l">Total</th>
  </tr>
  <tr>
    <td class="tg-031e" colspan="3" style="width:600px">No of school days <input type="hidden" name="title[]" value="No of school days"></td>
    <td class="tg-yw4l"><input type="text" name="jun[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jul[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="aug[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="sep[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="oct[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="nov[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="dec[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jan[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="feb[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="mar[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="apr[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="total[]" style="width:100%"></td>
  </tr>
  <tr>
    <td class="tg-031e" colspan="3" style="width:600px">No of days present  <input type="hidden" name="title[]" value="No of days present"></td>
    <td class="tg-yw4l"><input type="text" name="jun[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jul[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="aug[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="sep[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="oct[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="nov[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="dec[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jan[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="feb[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="mar[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="apr[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="total[]" style="width:100%"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="3">No of days absent  <input type="hidden" name="title[]" value="No of days absent"></td>
    <td class="tg-yw4l"><input type="text" name="jun[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jul[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="aug[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="sep[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="oct[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="nov[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="dec[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="jan[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="feb[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="mar[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="apr[]" style="width:100%"></td>
    <td class="tg-yw4l"><input type="text" name="total[]" style="width:100%"></td>
  </tr>
</table>
   <?php } ?>
  
<a id="btn"  name="btn" style="padding:5px;position:absolute;margin:auto"></a>
</form>
<br><br>
<center><label for="" ><b>Certificate Of Transfer</b></label></center>
<table class="tg" style="width:100%">
  <tr>
    <td class="tg-yw4l" style="border:solid 1px #fff">Admitted to Grade: </td>
    <td class="tg-yw4l" style="border:solid 1px #fff"><?=$row->level?></td>
    <td class="tg-yw4l" style="border:solid 1px #fff">Section:  </td>
    <td class="tg-yw4l" style="border:solid 1px #fff">General Academic</td>
  </tr>
</table>
<table class="tg" style="width:100%">
  <tr>
    <td class="tg-yw4l" style="border:solid 1px #fff;width:222px;">Eligibility for Admission to Grade: </td>
    <td class="tg-yw4l" style="border:solid 1px #fff;text-align:left"><?=$row->level?></td>
  </tr>
  </table>

<table class="tg" style="width:100%">
  <tr>
    <td class="tg-yw4l" style="border:solid 1px #fff">Approved: </td>
  </tr>
  </table>
<br>
  <table class="tg" style="width:100%">
  <tr>
    <td class="tg-yw4l" style="width:25%;border:solid 1px #fff;text-align:center">MRS. LOLITA B. ROMANO: </td>
    <td class="tg-yw4l" style="width:25%;border:solid 1px #fff;text-align:center"> </td>
  </tr>
  <tr>
    <td class="tg-yw4l" style="width:25%;border:solid 1px #fff;text-align:center">Principal </td>
    <td class="tg-yw4l" style="width:25%;border:solid 1px #fff;text-align:center">Adviser: </td>
  </tr>
  </table>

  <br>
  <center><label for="" ><b>Cancellation of Eligibility to Transfer</b></label></center>
<table class="tg" style="width:100%">
  <tr>
    <td class="tg-yw4l" style="width:25%;border:solid 1px #fff">Admitted in:  _________________________________</td>
  </tr>
</table>
  <label for="">&nbsp;Date: <?=date('F d Y')?></label>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript" >
    var isCtrl = false;     
    document.onkeyup=function()
    { 
        var e = window.event;
        if(e.keyCode == 17) 
        {
            isCtrl=false; 
        }
    } 
    
    document.onkeydown=function()
    { 
        var e = window.event;
        
        if(e.keyCode == 17) 
        {
            isCtrl=true; 
        }
        if(e.keyCode == 80 && isCtrl == true) // Ctrl + P
        { 
            var data = $('form').serialize();
            $.ajax({
                type : 'POST',
                url : 'http://localhost/sis/admin/attendance_record_shs',
                data: data,
                dataType: 'json',
                success:function(data) {

                }
            })

        } 
    }
    </script>

</body>
</html>