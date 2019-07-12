<?php
	$con=mysqli_connect("localhost","root","","studentdbsystem");
		
		if (isset($_POST['submit'])) {
			# code...
		
		
		$sno = $_POST['Sno'];
		$sname = $_POST['Sname'];

		$query="INSERT INTO student(Sno, Sname) VALUES('$sno','$sname')";
		$getDetails=mysqli_query($con, $query);
		if($getDetails) {
			echo"Inserting success";
		}
		else{
			echo "False";
		}
	}
		

	/*function Display()
	{
		while (mysqli_fetch_array($run_detail)) 
		{
			$Sno=
			# code...
		}
		$get_detail="select * from student";
		$run_detail=sqli_query($con, $get_detail);

	}*/

?>