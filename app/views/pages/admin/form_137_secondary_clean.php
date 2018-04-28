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
.tg .tg-l711{border-color:inherit}
input[type="text"] {text-align:left;border:solid 1px #fff;outline:none }
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-uys7{border-color:inherit;text-align:center}
.tg .tg-us36{border-color:inherit;vertical-align:top}
.tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
.c { width:10%;text-align:center;}
.d { width:22%;text-align:center;}
</style>
</head>
<body>
<div style="margin:auto;width:740px">

<table style="width:100%" cellspacing=0 border=1>
<tr>
    <th style="border:1px solid #fff;width:20%"><img style="width:120px;height:110px"src="http://localhost/sis/assets/images/logo.jpg"></th>
    <th style="border:1px solid #fff;width:60%">
    REPUBLIC OF THE PHILIPPINES <br> 
    Department of Education <br>
    Region IV - A CALABARZON <br> 
    Division of Cavite <br> 
    MENDEZ CHRISTIAN ACADEMY INC. <br>
    Asis III, Mendez. Cavite <br> 
    Tel # 8610052 <br>
    <br>
    SECONDARY STUDENT'S PERMANENT RECORD
    </th>

<th style="border:1px solid #fff;width:20%"><img style="width:120px;height:110px" src="http://www.freelogovectors.net/wp-content/uploads/2014/05/deped-logo.png"></th>


</table >

<table style="width:100%" cellspacing=0 border=1>

<tr>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px;width:1%">Name: </td>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px;width:40%"><input type="text" value="<?=$data['info']->surname?> <?=$data['info']->firstname?> <?=$data['info']->middlename?>" style="width:100%"></td>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px;width:10%">Date of Birth:  </td>
    <td style="border-bottom:1px solid #000;border-left:#fff solid 1px;border-right:#fff solid 1px;width:20%"><input type="text" value="<?=date(DATE_FORMAT,strtotime($data['info']->dob));?>" style="width:100%"></td>
</tr>
</table >


<table style="width:100%" cellspacing=0 border=1>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;margin-right:5px" >Place Of Birth:</td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:66%margin-right:5px" ><input type="text" value="<?=$data['info']->pob?>" style="width:100%"></td>


<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #fff;width:34%;margin-right:5px" ></td>
</tr>
</table>


<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border:1px solid #fff;border-bottom:1px solid #000;width:17%" > Parent / Guardian: </td>
<td style="border:1px solid #fff;border-bottom:1px solid #000;width:40%" > <input type="text" style="width:100%" value="<?=$data['info']->name?>"> </td>
<td style="border:1px solid #fff;border-bottom:1px solid #000;width:10%" >Occupation </td>
<td style="border:1px solid #fff;border-bottom:1px solid #000;width:40%" > <input value="" type="text" style="width:100%"> </td>

</tr>
</table>

<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:5%" >Address:</td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:70%" ><input type="text" value="<?=$data['info']->address?>" style="width:100%"></td>

</tr>
</table>

<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #fff;width:30%" >Elementary Course Completed: </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:45%;" ><input type="text" style="width:100%"> </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:13%">&nbsp; School Year: </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:42%" ><input type="text" style="width:100%"> </td>

</tr>
</table>

<table style="width:100%" cellspacing=0 border=1>
<tr>

<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:50%" >Total no of years in to complete elementary course: </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:20%" ><input type="text" style="width:100%">  </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:17%" >General Average: </td>
<td style="border-left:1px solid #fff;border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #000;width:5%" ><input type="text" style="width:100%"> </td>

</tr>
</table>

<br>
<br>
<br>


<div style="width:365px;float:right" >
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711" colspan="18" style="text-align:left">CLASSIFIED AS <input type="text" style="width:75%"></th>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">SCHOOL  <input type="text" style="width:75%"> </td>
            <td class="tg-us36" colspan=8> SY <input type="text" id="eight" style="width:70%"></td>
        </tr>
        <tr>
            <td class="tg-uys7 d" colspan="5" rowspan="2">SUBJECTS</td>
            <td class="tg-uys7" colspan="4">Class Standing</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Final Rating</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Action<br>Taken</td>
            <td class="tg-c3ow" colspan="3" rowspan="2">Units<br>Earned</td>
        </tr>
        <tr>
            <td class="tg-l711 c">1st</td>
            <td class="tg-l711 c">2nd</td>
            <td class="tg-l711 c">3rd</td>
            <td class="tg-l711 c">4th</td>
        </tr>
        
        <tr>
            <td class="tg-l711" colspan="5">Aralin Panlipunan II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Computer  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Elective  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">English  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Filipino  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">MAPEH  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Mathematics  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Science  II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">T.L.E II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Values ED/EP II</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">GEN. AVE.</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">Total Days of School <input type="text" style="width:25%"></td>
            <td class="tg-l711" colspan="9">Days Present: <input type="text" style="width:25%"> </td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total Units Earned <input type="text" style="width:25%"></td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total No of years in school to date <input type="text" style="width:25%"></td>
        </tr>
    </table>
</div>



<div style="width:365px" >
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711" colspan="18" style="text-align:left">CLASSIFIED AS <input type="text" style="width:75%"></th>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">SCHOOL  <input type="text" style="width:75%"> </td>
            <td class="tg-us36" colspan=8> SY <input type="text" id="seven" style="width:70%"></td>
        </tr>
        <tr>
            <td class="tg-uys7 d" colspan="5" rowspan="2">SUBJECTS</td>
            <td class="tg-uys7" colspan="4">Class Standing</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Final Rating</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Action<br>Taken</td>
            <td class="tg-c3ow" colspan="3" rowspan="2">Units<br>Earned</td>
        </tr>
        <tr>
            <td class="tg-l711 c">1st</td>
            <td class="tg-l711 c">2nd</td>
            <td class="tg-l711 c">3rd</td>
            <td class="tg-l711 c">4th</td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Aralin Panlipunan I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Computer  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Elective  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">English  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Filipino  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">MAPEH  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Mathematics  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Science  I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">T.L.E I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Values ED/EP I</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        
        <tr>
            <td class="tg-l711" colspan="5">GEN. AVE.</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">Total Days of School <input type="text" style="width:25%"></td>
            <td class="tg-l711" colspan="9">Days Present: <input type="text" style="width:25%"> </td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total Units Earned <input type="text" style="width:25%"></td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total No of years in school to date <input type="text" style="width:25%"></td>
        </tr>
    </table>
</div>
<br>

<div style="width:365px;float:right">
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711" colspan="18" style="text-align:left">CLASSIFIED AS <input type="text" style="width:75%"></th>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">SCHOOL  <input type="text" style="width:75%"> </td>
            <td class="tg-us36" colspan=8> SY <input type="text" id="ten" style="width:70%"></td>
        </tr>
        <tr>
            <td class="tg-uys7 d" colspan="5" rowspan="2">SUBJECTS</td>
            <td class="tg-uys7" colspan="4">Class Standing</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Final Rating</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Action<br>Taken</td>
            <td class="tg-c3ow" colspan="3" rowspan="2">Units<br>Earned</td>
        </tr>
        <tr>
            <td class="tg-l711 c">1st</td>
            <td class="tg-l711 c">2nd</td>
            <td class="tg-l711 c">3rd</td>
            <td class="tg-l711 c">4th</td>
        </tr>
        
        <tr>
            <td class="tg-l711" colspan="5">Aralin Panlipunan IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Computer  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Elective  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">English  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Filipino  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">MAPEH  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Mathematics  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Science  IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">T.L.E IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Values ED/EP IV</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">GEN. AVE.</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">Total Days of School <input type="text" style="width:25%"></td>
            <td class="tg-l711" colspan="9">Days Present: <input type="text" style="width:25%"> </td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total Units Earned <input type="text" style="width:25%"></td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total No of years in school to date <input type="text" style="width:25%"></td>
        </tr>
    </table>
</div>



<div style="width:365px" >
    <table class="tg" style="width:100%">
        <tr>
            <th class="tg-l711" colspan="18" style="text-align:left">CLASSIFIED AS <input type="text" style="width:75%"></th>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">SCHOOL  <input type="text" style="width:75%"> </td>
            <td class="tg-us36" colspan=8> SY <input type="text" id="nine" style="width:70%"></td>
        </tr>
        <tr>
            <td class="tg-uys7 d" colspan="5" rowspan="2">SUBJECTS</td>
            <td class="tg-uys7" colspan="4">Class Standing</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Final Rating</td>
            <td class="tg-uys7" colspan="3" rowspan="2">Action<br>Taken</td>
            <td class="tg-c3ow" colspan="3" rowspan="2">Units<br>Earned</td>
        </tr>
        <tr>
            <td class="tg-l711 c">1st</td>
            <td class="tg-l711 c">2nd</td>
            <td class="tg-l711 c">3rd</td>
            <td class="tg-l711 c">4th</td>
        </tr>
        
        <tr>
            <td class="tg-l711" colspan="5">Aralin Panlipunan III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Computer  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Elective  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">English  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Filipino  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">MAPEH  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Mathematics  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Science  III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">T.L.E III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>

        <tr>
            <td class="tg-l711" colspan="5">Values ED/EP III</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%;text-align:center"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        
        <tr>
            <td class="tg-l711" colspan="5">GEN. AVE.</td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-l711" colspan="3"><input type="text" style="width:100%"></td>
            <td class="tg-us36" colspan="3"><input type="text" style="width:100%"></td>
        </tr>
        <tr>
            <td class="tg-l711" colspan="9">Total Days of School <input type="text" style="width:25%"></td>
            <td class="tg-l711" colspan="9">Days Present: <input type="text" style="width:25%"> </td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total Units Earned <input type="text" style="width:25%"></td>
        </tr>
        <tr>
            <td class="tg-us36" colspan="18">Total No of years in school to date <input type="text" style="width:25%"></td>
        </tr>
    </table>
</div>
<br>


<table style="border:none;width:100%">
<tr>
    <td style="border:none;text-align:justify">
    &nbsp;&nbsp;&nbsp;&nbsp; I certify that this the true record of <input type="text" style="width:35%;border-bottom:1px solid #000">. This student is eligible for admission to the <input type="text" style="width:5%;border-bottom:1px solid #000"> year level as a regular student, and has no property accountability in this school as of this <input type="text" style="width:5%;border-bottom:1px solid #000"> day of <input type="text" style="width:7%;border-bottom:1px solid #000">, 201
    </td>
</tr>


</table>
<table style="float:right;border:none">
<tr>

<td style="border:none">

<br>Certified by:<br>
(Mrs.) Lolita B. Romano<br>
Administrator/Directress
</td>


</tr>
</table>


</div>
</div>

</div>

<script>
</script>
</body>
</html>