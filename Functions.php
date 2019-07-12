<?php
	$con=mysqli_connect("localhost","root","","studentdbsystem");

		$get_details="select * from student";
		$run_detail=mysqli_query($con, $get_details);

		while ($row_pro=mysqli_fetch_array($run_detail)) {
			$stdnumber=$row_pro['Sno'];
			$stdname=$row_pro['Sname'];

			echo "<table>
			<tr>
			<td>".$stdnumber. " : </td>
			<td>".$stdname. "</td>
			</tr>
			</table>
			";
			# code...
		}



?>