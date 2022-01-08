<?php
    $database = "feedback";
	$user = "root";
	$pass = "";
	$hostname = "localhost";
	$table = "sfb";
	$db = mysql_connect("$hostname", "$user","$pass");
	mysql_select_db("$database",$db);
	error_reporting(0);
	?>
<html>
<head>
    <title>FeedBack</title>
	 <style type="text/css">
         h1{
             color:black;
             font-family:sans-serif;
             font-size: 40px;
         }
         p{
             color:burlywood;
             font-family: Times New Roman;
             font-size: 20px;
         }
         
	#inform {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: url(source.gif) no-repeat;
            background-position:center;
            background-size:cover;
        }
	#inform-message {
            padding: 1em;
            width: 25em;
            margin: 230px auto 0 auto;
            background-color: rgb(98,130,200,.4);
            border: 1px solid white;
            border-width:medium;
        }

	#inform-message > p {
            margin-top: 0.4em;
            margin-bottom: 1.3em;
        }
	#ok {
            font-size: 15px;
            border: 2px solid blue;
            border-width: medium;
            color: black;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            border-radius: 10px;
	        position:;
            padding: 0.3em;
        
        }
	#ok:hover {
            background-color: #4CAF50; /* Green */
            color: white;
            font-style: italic;
            cursor: pointer;
        }
   
	 </style>
    
</head>
<body>
    <?php 
	if(isset($_POST['submit']))
	{
		$ac_year=$_POST['year'];
		$F_name=$_POST['F_name'];
		$course=$_POST['course'];
		$sub=$_POST['sub'];
		$sem=$_POST['sem'];
		$dof=$_POST['date'];
		$q1=$_POST['q1'];
		$q2=$_POST['q2'];
		$q3=$_POST['q3'];
		$q4=$_POST['q4'];
		$q5=$_POST['q5'];
		$q6=$_POST['q6'];
		$q7=$_POST['q7'];
		$q8=$_POST['q8'];
		$q9=$_POST['q9'];
		$total=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9;
		
	mysql_query("INSERT INTO sfb set acd_year='$ac_year',course='$course',subject='$sub',F_name='$F_name',semester='$sem',date='$dof',q1='$q1',q2='$q2',q3='$q3',q4='$q4',q5='$q5',q6='$q6',q7='$q7',q8='$q8',q9='$q9',total='$total'");
	}
?>
<div id="inform">
      <div id="inform-message">
       <center><h1>Thank You...!</h1>
        <p>for your feedback. And click the button.</p>
        <input id="ok" type="button" value="continue" onclick="location.href='index.html'" /></center>
     
      </div>
    </div>

</body>
</html>