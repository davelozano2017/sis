<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 137</title>
    <style>
    * {
        padding:0;
        margin:0;
    }
    body {
        font-size:11.5px
    }
    table , td, th {
    border: 1px solid #595959;
    border-collapse: collapse;
}
td, th {
    padding: 3px;
    width: 30px;
    height: 10px;
}
input[type="text"] {text-align:left;border:solid 1px #fff;outline:none }

th {
    background: #fff;
}
.even {
    background: #fbf8f0;
}
.odd {
    background: #fefcf9;
}
</style>
</head>
<body >

<div style="margin:auto;width:720px">
    
<table style="width:100%" cellspacing=0 border=1>
<tr>
    <th style="border:1px solid #fff"><img style="width:120px;height:110px"src="http://localhost/sis/assets/images/logo.jpg"></th>
    <th style="border:1px solid #fff;width:300px">
    Department of Education <br> 
    Region IV - A CALABARZON <br> 
    Division of Cavite <br> 
    MENDEZ CHRISTIAN ACADEMY INC. <br>
    Asis. Mendez. Cavite <br> 
    Telephone No. (046) 8610052 <br>
    <br>
    ELEMENTARY SCHOOL PERMANENT RECORD
</th>
    <th style="border:1px solid #fff"><img style="width:120px;height:110px"src="http://www.freelogovectors.net/wp-content/uploads/2014/05/deped-logo.png"></th>
</tr>
<tr>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px" colspan=2>Name: <input type="text" style="width:80%" autofocus value="<?=$data['info']->surname?> <?=$data['info']->firstname?> <?=$data['info']->middlename?>" ></td>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px" >Sex:: <input type="text" value="<?=$data['info']->gender?>" style="width:80%"> </td>
</tr>

<tr>
    <td style="border:1px solid #fff" colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Surname) &nbsp;&nbsp;&nbsp;&nbsp;(Given) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(M.I)</td>
</tr>
</table >
<table style="width:100%" cellspacing=0 border=1>
<tr>


<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:40%;margin-right:5px" >Date Of Birth: 
<input type="text" value="<?=date(DATE_FORMAT,strtotime($data['info']->dob));?>" style="width:50%"></td>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:40%">Place Of Birth: <input type="text" style="width:70%" value="<?=$data['info']->pob?>"> </td>
</tr>
</table>


<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border:1px solid #fff;border-bottom:1px solid #000;width:100%" > Parent / Guardian: <input type="text" value="<?=$data['info']->name?> - <?=$data['info']->address?>" style="width:80%"></td>

</tr>

<tr>

<td style="border:1px solid #fff;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Name   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Occupation </td>

</tr>
</table>

<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:20%" >Pre-Elementary Course Completed: <input type="text" style="width:20%"></td>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;text-align:center;width:30%">General Average: <input type="text" style="width:20%"></td>
</tr>
</table>
<table style="width:100%" cellspacing=0 border=1>
    <tr>
        <th style="border:1px solid #fff" rowspan=2></th>
    </tr>
    <tr>
        <th style="border:1px solid #fff"> ELEMENTARY SCHOOL PROGRESS </th>
        <th style="border:1px solid #fff" rowspan=1></th>
    </tr>

</table>



<div style="width:355px;float:right" >
    <table style="width:100%" cellspacing=0 border=1>
        <tr>
            <td colspan=13 style="text-align:center">GRADE TWO</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="two"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>

       

        <tr>
            <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td style="text-align:center" colspan="3">Final Rating</td>
        </tr>
        <?php if($data['two']->num_rows > 0) { ?> 
            <?php foreach($data['two'] as $rowtwo) { ?>
            <?php 
            $a = $rowtwo['first'] + $rowtwo['second'] + $rowtwo['third'] + $rowtwo['fourth'];
            $aa = $a / 4;
            $average2 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowtwo['subjects_name']?> II</b></td>
                <td><input type="text" value="<?=$rowtwo['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowtwo['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowtwo['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowtwo['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average2?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>

        <tr>
            <td colspan="6"><b style="font-size:10px">Christian Living II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Computer Education II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">English II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Filipino II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mathematics II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mother Tongue II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">MSEP II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Science & Health II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Sibika at Kultura II</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <?php } ?>
        

        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>
        </tr>

    </table>
</div>

<div style="width:355px" >
    <table style="width:100%" cellspacing=0 border=1>
        <tr>
            <td colspan=13 style="text-align:center">GRADE ONE</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="one"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>
        <tr>
            <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td style="text-align:center" colspan="3">Final Rating</td>
        </tr>
        <?php if($data['one']->num_rows > 0) { ?>
            <?php foreach($data['one'] as $rowone) { ?>
            <?php 
            $a = $rowone['first'] + $rowone['second'] + $rowone['third'] + $rowone['fourth'];
            $aa = $a / 4;
            $average1 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowone['subjects_name']?> I</b></td>
                <td><input type="text" value="<?=$rowone['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowone['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowone['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowone['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average1?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="6"><b style="font-size:10px">Christian Living I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Computer Education I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">English I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Filipino I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Mathematics I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Mother Tongue I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">MSEP I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Science & Health I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Sibika at Kultura I</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>
        <?php } ?>
        
        
        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>
        </tr>

    </table>
</div>


<br>

<div style="width:355px;float:right" >
    <table style="width:100%" cellspacing=0 border=1>
    <tr>
            <td colspan=13 style="text-align:center">GRADE FOUR</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="four"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>
        <tr>
        <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td  style="text-align:center" colspan="3">Final Rating</td>
        </tr>

        <?php if($data['four']->num_rows > 0) { ?>
            <?php foreach($data['four'] as $rowfour) { ?>
            <?php 
            $a = $rowfour['first'] + $rowfour['second'] + $rowfour['third'] + $rowfour['fourth'];
            $aa = $a / 4;
            $average4 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowfour['subjects_name']?> IV</b></td>
                <td><input type="text" value="<?=$rowfour['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfour['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfour['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfour['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average4?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
            <td colspan="6"><b style="font-size:10px">Christian Living IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Computer Education IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">English IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Filipino IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mathematics IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mother Tongue IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">MSEP IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Science & Health IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Sibika at Kultura IV</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>
        <?php } ?>
        
        

        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>
        </tr>

    </table>
</div>

<div style="width:355px" >
    <table style="width:100%" cellspacing=0 border=1>
        <tr>
            <td colspan=13 style="text-align:center">GRADE THREE</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="three"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>
        <tr>
            <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td style="text-align:center" colspan="3">Final Rating</td>
        </tr>

        <?php if($data['three']->num_rows > 0) { ?>
            <?php foreach($data['three'] as $rowthree) { ?>
            <?php 
            $a = $rowthree['first'] + $rowthree['second'] + $rowthree['third'] + $rowthree['fourth'];
            $aa = $a / 4;
            $average3 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowthree['subjects_name']?> III</b></td>
                <td><input type="text" value="<?=$rowthree['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowthree['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowthree['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowthree['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average3?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>

            <tr>
                <td colspan="6"><b style="font-size:10px">Christian Living III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Computer Education III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">English III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Filipino III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Mathematics III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Mother Tongue III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">MSEP III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Science & Health III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>

            <tr>
                <td colspan="6"><b style="font-size:10px">Sibika at Kultura III</b></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td><input type="text" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
            </tr>
        
        <?php } ?>
        
        

        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>
        </tr>

    </table>
</div>

<br>

<div style="width:355px;float:right" >
    <table style="width:100%" cellspacing=0 border=1>
    <tr>
            <td colspan=13 style="text-align:center">GRADE SIX</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="six"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>
        <tr>
            <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td style="text-align:center" colspan="3">Final Rating</td>
        </tr>
        
        <?php if($data['six']->num_rows > 0) { ?>
            <?php foreach($data['six'] as $rowsix) { ?>
            <?php 
            $a = $rowsix['first'] + $rowsix['second'] + $rowsix['third'] + $rowsix['fourth'];
            $aa = $a / 4;
            $average6 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowsix['subjects_name']?> VI</b></td>
                <td><input type="text" value="<?=$rowsix['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowsix['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowsix['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowsix['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average6?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>

        <tr>
            <td colspan="6"><b style="font-size:10px">Christian Living VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Computer Education VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">English VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Filipino VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mathematics VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mother Tongue VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">MSEP VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Science & Health VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Sibika at Kultura VI</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>
        
        <?php } ?>

        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>            
        </tr>

    </table>
</div>

<div style="width:355px" >
    <table style="width:100%" cellspacing=0 border=1>
        <tr>
            <td colspan=13 style="text-align:center">GRADE FIVE</td>
        </tr>
        <tr>
            <td colspan="10"  style="border:none">School</td>
            <td colspan="2" style="border-right:1px solid #000;border-left:1px solid #fff">SY <b id="five"></b></td>
        </tr>
        <tr>
            <td colspan="6" rowspan="2">Learning Areas</td>
            <td style="text-align:center" colspan="4">Periodic Rating</td>
            <td style="text-align:center" colspan="3">Remarks</td>
        </tr>
        <tr>
        <td style="text-align:center">1<sup>st</sup></td>
            <td style="text-align:center">2<sup>nd</sup></td>
            <td style="text-align:center">3<sup>rd</sup></td>
            <td style="text-align:center">4<sup>th</sup></td>
            <td style="text-align:center" colspan="3">Final Rating</td>
        </tr>

        <?php if($data['five']->num_rows > 0) { ?>
            <?php foreach($data['five'] as $rowfive) { ?>
            <?php 
            $a = $rowfive['first'] + $rowfive['second'] + $rowfive['third'] + $rowfive['fourth'];
            $aa = $a / 4;
            $average5 = $aa < 75 ? 'Failed' : 'Passed';
            ?>
            <tr>
                <td colspan="6"><b style="font-size:10px"><?=$rowfive['subjects_name']?> V</b></td>
                <td><input type="text" value="<?=$rowfive['first']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfive['second']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfive['third']?>" style="text-align:center;width:100%"></td>
                <td><input type="text" value="<?=$rowfive['fourth']?>" style="text-align:center;width:100%"></td>
                <td colspan="3"><input type="text" value="<?=$average5?>" style="text-align:center;width:100%"></td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
            <td colspan="6"><b style="font-size:10px">Christian Living V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Computer Education V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">English V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Filipino V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mathematics V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Mother Tongue V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">MSEP V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Science & Health V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>

        <tr>
            <td colspan="6"><b style="font-size:10px">Sibika at Kultura V</b></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td><input type="text" style="text-align:center;width:100%"></td>
            <td colspan="3"><input type="text" style="text-align:center;width:100%"></td>
        </tr>
        <?php } ?>
        
        

        <tr>
            <td colspan="6"><b>General Average</b></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td><input type="text" style="width:100%"></td>
            <td colspan="3"><input type="text" style="width:100%"></td>
        </tr>

    </table>
</div>
<center>
<table style="width:100%;border:none;text-align: center">
    <tr>
        <td style="border:none"> A - Very Good</td>
        <td style="border:none"> B - Good</td>
        <td style="border:none"> C- Fair</td>
        <td style="border:none"> D- Poor</td>
    </tr>
</table>
<b >Attendance Record</b>
</center>

<form name="form" id="form" method="POST">
<input type="hidden" name="students_id" value="<?=$data['info']->students_id?>">
<table style="width:100%;border:none;text-align: center">
    <tr>
        <td>Grade</td>
        <td>No. of School Days</td>
        <td>No. of Days Absent</td>
        <td>Chief Cause</td>
        <td>No. of Times Tardy</td>
        <td>Chief Cause</td>
        <td>No. of School Days Present</td>
    </tr>


    <?php if($data['attendance']->num_rows > 0) { ?>
        <?php $ii=1; foreach($data['attendance'] as $rows) { ?>
            <tr>
            <td><?=$ii++?></td>
            <td><input type="text" value="<?=$rows['school_days']?>" style="width:100%;text-align:center"></td>
            <td><input type="text" value="<?=$rows['days_absent']?>" style="width:100%;text-align:center"></td>
            <td><input type="text" value="<?=$rows['chief_cause1']?>" style="width:100%;text-align:center"></td>
            <td><input type="text" value="<?=$rows['times_tardy']?>" style="width:100%;text-align:center"></td>
            <td><input type="text" value="<?=$rows['chief_cause2']?>" style="width:100%;text-align:center"></td>
            <td><input type="text" value="<?=$rows['school_days_present']?>" style="width:100%;text-align:center"></td>
        <?php } ?>        
    <?php } else { ?>
        <?php for($i=1; $i <= 6;$i++) { ?>
            <tr>
            <td><?=$i?><input type="hidden" name="level[]" value="Grade <?=$i?>"></td>
            <td><input type="text" name="school_days[]" style="width:100%;text-align:center"></td>
            <td><input type="text" name="days_absent[]" style="width:100%;text-align:center"></td>
            <td><input type="text" name="chief_cause1[]" style="width:100%;text-align:center"></td>
            <td><input type="text" name="times_tardy[]" style="width:100%;text-align:center"></td>
            <td><input type="text" name="chief_cause2[]" style="width:100%;text-align:center"></td>
            <td><input type="text" name="school_days_present[]" style="width:100%;text-align:center"></td>
        <?php } ?>
    <?php } ?>
        
            
        
       
       
        <tr>
        <td></td>
        <td><input type="text" style="width:100%"></td>
        <td><input type="text" style="width:100%"></td>
        <td><input type="text" style="width:100%"></td>
        <td><input type="text" style="width:100%"></td>
        <td><input type="text" style="width:100%"></td>
        <td><input type="text" style="width:100%"></td>
    </tr>
</table>
<a id="btn"  name="btn" style="padding:5px;position:absolute;margin:auto"></a>
        </form>
<br>
<center>
<b>CERTIFICATE OF TRANSFER</b>
</center>

<br>
TO WHOM IT MAY CONCERN : <br>
<table style="border:none;width:100%">
<tr>
<td style="border:none">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that this is a true record of the Elementary School Permanent Record of _____________________________________________. He/She is eligible for transfer and admission to Grade ___________.</td>
<td style="border:none">
 
</td>
</tr>


</table>
<table style="float:right;border:none">
<tr>
<td style="border:none">
Certified by:<br>
[Mrs.] Lolita B. Romano<br>
Administrator/Directress
</td>


</tr>
</table>



</div>
</div>

</div>

</body>
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
                url : 'http://localhost/sis/admin/attendance_record',
                data: data,
                dataType: 'json',
                success:function(data) {

                }
            })

        } 
    }
    </script>

<script>
document.getElementById('one').innerHTML = '<?=$rowone['sy']?>';
document.getElementById('two').innerHTML = '<?=$rowtwo['sy']?>';
document.getElementById('three').innerHTML = '<?=$rowthree['sy']?>';
document.getElementById('four').innerHTML = '<?=$rowfour['sy']?>';
document.getElementById('five').innerHTML = '<?=$rowfive['sy']?>';
document.getElementById('six').innerHTML = '<?=$rowsix['sy']?>';

</script>
</html>