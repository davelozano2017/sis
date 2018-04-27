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
  $average = $aa < 75 ? 'Failed' : 'Passed';
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
  <?php foreach($data['shs2nd'] as $rowss) { ?>
  <?php 
  $a = $rowss['first'] + $rowss['second'] ;
  $aa = $a / 2;
  $average2 = $aa < 75 ? 'Failed' : 'Passed';
  ?>

  <tr>
    <td class="tg-us36" colspan="2"><?=$rowss['subjects_name']?></td>
    <td class="tg-us36"><input type="text" value="<?=$rowss['third']?>"></td>
    <td class="tg-us36"><input type="text" value="<?=$rowss['fourth']?>"></td>
    <td class="tg-dvpl"><input type="text" value="<?=$aa?>%" style="width:100%"></td>
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
</div>
</body>
</html>