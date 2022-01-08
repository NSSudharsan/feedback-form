<?php
    $database = "feedback";
	$user = "root";
	$pass = "";
	$hostname = "localhost";
	$table = "sfb";
	$db = mysql_connect("$hostname", "$user","$pass");
	mysql_select_db("$database",$db);

    $sum=0;
    $i=0;
    $avg=0;
    $per=0;
    $result=0;
error_reporting(0);

if(isset($_POST['submit']))
	{
    $F_name=$_POST['F_name'];
    $sem=$_POST['sem'];
    $course=$_POST['course'];
    $sub=$_POST['sub'];
    
     $result=mysql_query("select * from sfb where F_name='$F_name' and semester='$sem' and course='$course' and subject='$sub'"); 
    
    }
?>
<html>
    <head>
    <title> Dashboard </title>
    <style>
        body{
            background: url(black1.gif) no-repeat;
            background-position:left;
            background-size:cover;
        }
        table{
            position:relative;
            text-align: center;
            width: 100%;
        }
        tr:hover{
            background-color: darkgray;
            font-size: 20px;
            font-family: Times New Roman;
            font-style: bold;
            color: black;
        }
        hr{
            color: antiquewhite;
        }
        p{
            font-weight: 700;
            background-color: aqua;
        }
        #para{
            position: fixed;
            width: 27%;
            padding-left: 1%;
        }
        #head{
            background-color: antiquewhite;
            border-top-style: groove;
            text-align-last: left;
        }
    
        #but{
            cursor: pointer;
            border-radius:2px;
            background-color:coral;
            color:#ffffff;
            font-family:sans-serif;
            font-style:oblique;
            font-size: 14px;
            text-align:center;
        }
        #but:hover{
                    cursor: pointer;
                    background:rgb(0,117,0);
                    font-style:oblique;
                    color:black;
        }
        .scrollable {
            height: 600px;
        overflow-y: scroll;
        position: relative;
      }
    </style>
    </head>
<body>
<div id="head">
<form method="POST" action="dashboard.php">
    Faculty name : <select name="F_name" required>
        <option></option>
        <option value="Bajulunisha. A">Bajulunisha. A</option>
                                        <option value="Dhanamathi. A">Dhanamathi. A</option>
                                        <option value="Gunasundari. C">Gunasundari. C</option>
                                        <option value="Gunasekaran. K">Gunasekaran. K</option>
                                        <option value="Kannan. R">Kannan. R</option>
                                        <option value="Sivakumar. K">Sivakumar. K</option>
                                        <option value="Suganthi. M">Suganthi. M</option>
                                        <option value="Tamilselvi. M">Tamilselvi. M</option>
                                        <option value="Vishnupriya. S">Vishnupriya. S</option>
        </select> &nbsp;&nbsp;
    semester: <select name="sem">
        <option></option>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
        </select> &nbsp;&nbsp;
    course:<select name="course">
        <option></option>
        <option value="BE">BE</option>
        <option value="ME">ME</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Subject :<select name="sub">
        <option></option>
        <optgroup label="------------------------------ Sem - I ------------------------------">
            
        </optgroup>
        <optgroup label="------------------------------ Sem - II ------------------------------">
            <option value="HS8251">Technical English-HS8251</option>
            <option value="MA8251">Engineering Mathematics-II -MA8251</option>
            <option value="PH8252">Physics for Information Science-PH8252</option>
            <option value="BE8255">Basic E E&amp;M Engineering-BE8255</option>
            <option value="GE8291">Environmental Science &amp; Engineering-GE8291</option>
            <option value="CS8251">Programming in C -CS8251</option>
        </optgroup>
        <optgroup label="------------------------------ Sem - III ------------------------------">
        </optgroup>
        <optgroup label="------------------------------ Sem - IV ------------------------------">
            <option value="MA8402">Probability and Queueing Theory-MA8402</option>
            <option value="CS8491">Computer Architecture -CS8491</option>
            <option value="CS8492">Database Management Systems -CS8492</option>
            <option value="CS8451">Design &amp; Analysis of Algorithems -CS8451</option>
            <option value="CS8493">Operating Systems -CS8493</option>
            <option value="CS8494">Software Engineering -CS8494</option>
        </optgroup>
        <optgroup label="------------------------------ Sem - V ------------------------------">
        </optgroup>
        <optgroup label="------------------------------ Sem - VI ------------------------------">
            <option value="CS8651">Internet Programming -CS8651</option>
            <option value="CS8691">Artificial Intelligence -CS8691</option>
            <option value="CS8601">Mobile Computing -CS8601</option>
            <option value="CS8602">Compiler Design -CS8602</option>
            <option value="CS8603">Distributed Systems -CS8603</option>
            <option value="IT8076">Software Testing -IT8076</option>
        </optgroup>
        <optgroup label="------------------------------ Sem - VII ------------------------------">
        </optgroup>
        <optgroup label="------------------------------ Sem - VIII ------------------------------">
        <option value="CS6801">Multi Core Architectures and Programming-CS6801</option>
        <option value="CS6010">Social Network Analysis-CS6010</option>
        <option value="MG6088">Software Project Management-MG6088</option>
        </optgroup>   
        </select>
    <input type="submit" value="search" name="submit" id="but"/>
</form>
    <hr>
</div>
<form style="padding-left:30%;width:60%;scroll-behavior:smooth;position:fixed;">    
<div class="scrollable">
<table>
<tr style="background-color: #4CAF50;color:bock;font-style:bold;"><!--<th>Faculty Name</th><th>Semester</th><th>Course</th>--><th>Date of FeedBack</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Total</th></tr>
<?php         
	while($row=mysql_fetch_array($result))
	{
?>
    <?php $name=$row['F_name']; ?>
    <?php $sem=$row['semester'];?>
    <?php $sub=$row['subject'];?>
<tr style="color:white;font-style:normal;"><!--<td><?php //echo $row['F_name']; ?></td><td><?php //echo $row['semester'];?></td><td><?php //echo $row['course'];?></td>--><td><?php echo $row['date'];?></td><td><?php echo $row['q1']; ?></td><td><?php echo $row['q2']; ?></td><td><?php echo $row['q3']; ?></td><td><?php echo $row['q4']; ?></td><td><?php echo $row['q5']; ?></td><td><?php echo $row['q6']; ?></td><td><?php echo $row['q7']; ?></td><td><?php echo $row['q8']; ?></td><td><?php echo $row['q9']; ?></td><td><?php echo $row['total']; ?> </td></tr>
	<?php  $sum = $sum+$row['total']; 
            $i++;
    } ?>
</table>
</div>
</form>
<div id="para">
    <p> Faculty Name&nbsp;:&nbsp;<em style="font-size:20px;"><?php echo $name; ?></em><br />
        Semester&nbsp;:&nbsp;<?php echo $sem; ?><br />
        The Subject-Code :&nbsp;<?php echo $sub; ?><br />
        The number of sudents to give feedback :<?php echo $i; ?><br />
        The Faculty get total score is &nbsp;:&nbsp;<?php echo $sum; ?></p><br />
        <!--The AVG :<?php //if($sum!=0) {$avg=$sum/$i;} echo $avg; ?><br />-->
        <b style="color:red">In Persentage :<h1><?php if($sum!=0){$per=$sum/($i*45)*100;} echo $per; ?>%</h1><br /></b>
</div>    
</body>
</html>