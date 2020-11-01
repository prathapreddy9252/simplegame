<!DOCTYPE html>
<html>
<head>
	<title>BIrth day LUCKY tESt</title>
	<style >
		.main-frame{
			padding-left:35%;
			padding-top:4%;
			background-color:#307D7E;
		     }
		.form-frame{
			border-radius:10px;
			border-top: solid;
			border-style:double;
			border-width:5px;
			border-color:#4E8975;
			width: 300px;
			height:400px;
			background-color:#CCFFFF;
			text-align:center;
			color:#0C090A;
		}
		form{
			padding-left: 25px;
			padding-bottom: 
			text-align:left;
			font-family:serif;
			font-style: bold;
			font-weight: 30px;

		}	
		button{
			padding: 10px;
			font-style: bold;
			font-size:20px;
			background-color: green;
			color: white;
			border-width:4px;
			border-radius:10px;
			border-color:white;
			border-style:flat;		}
		input{
			width: 20px;
			height: 20px;
			border-width:1px;
			border-color:black;
			font-weight:20px;
			font-family: systemfixed;
			font-style: bold;
			font-size: 20px;
			border-style:flat;
		}
		button:hover{
			background-color: white;
			color: green;
			border-style: groove;
			border-color:green;
			cursor:pointer;
		}
		.form-frame:hover{
			background-color:#307D7E;
			border-width:2px;
			border-color:white;	
			color:white;
		}
		h1{
			color: white;
			
         }
	</style>
</head>
<body class="main-frame">  
	<div class="form-frame">
		<h3 style="padding-top: 40px;">Enter your BORN DATE.......?</h3>
		<form action="" method="post">
			<label for="date">Date &nbsp- Month - Year</label><br>
			<input type="text" id="date" name="day" required> :
			<input type="text" id= "date" name="month" required> :
			<input style="width: 40px;"type="text" id= "date" name="year" required>
			<br/><br><br><br>
			<button type="submit" name="submited">submit</button>
		</form>
	</div>

</body>
</html>
<?php
if(isset($_POST["submited"]))
   {
   $day=$_POST["day"];
   $month=$_POST["month"];
   $year=$_POST["year"];
   $sum=0;
   function filter($value,$result=0){
	   	while ($value) {
	   	$result=$result+($value%10);
	   	$value=$value/10;
	   }
	   return $result;
   }
   if($day>12)
	{
		echo "<h1>day's are just 31 or below</h1> ";
		return 0;
   }
   if($month>31){
   	     echo "<h1>moth's are just  12</h1>";
   	return 0;
   }
   $sum1=filter($day);
   #echo "sum1 $sum1<br>";
   $sum2=filter($month);
   #echo "sum2 $sum2<br>";
   $sum3=filter($year);
   #echo "sum3 $sum3<br>";
   $sum=$sum1+$sum2+$sum3;
   while ($sum>=10) {
   	$sum=filter($sum);
   	# code...
   }
   
   $sum_final=$sum;
   #echo "$sum_final";

   if ($sum_final==1)
        echo "<h1>YOUr LOve IS TRue</h1>";
   elseif($sum_final==2)
        echo "<h1 >YOUr FAMIly IS GOod<h1>";
   elseif($sum_final==3)
        echo "<h1>YOUr VOIce IS SWEet</h1>";
   elseif($sum_final==4)
        echo "<h1>YOUr A TALENTed PERSIon</h1>";
   elseif($sum_final==5)
        echo "<h1>YOUr LOve IS WAITIng For You</h1>";
   elseif($sum_final==6)
        echo "<h1>YOUr LIfe IS GREat</h1>";
   elseif($sum_final==7)
        echo "<h1>INTELLIGEnt</h1>";
   elseif($sum_final==8)
        echo "<h1>BOrn TO Win</h1>";  
   elseif($sum_final==9)
		echo "<h1>COnFUSED pERSIon</h1>"; 
} 
?>