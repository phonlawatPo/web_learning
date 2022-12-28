
<table align="center">
	<tr>
		<td>ชื่อ - นามสกุล</td>
		<td>:
			<?php 
				echo $_POST["fname"]; 
				echo "  ";
				echo $_POST["lname"];	
			?>
		</td>
	</tr>
	<tr>
		<td>เพศ</td>
		<td>:
			<?php
				$seg = $_POST['sex'];
				echo $seg;	
			?>
		</td>
	</tr>
	<tr>
		<td>ที่อยู่</td>
		<td>:
		<?php
			echo $_POST["address"];
		?>
		</td>
	</tr>
	<tr>
		<td>เบอร์โทร</td>
		<td>:
			<?php 
				echo $_POST["tel"]; 	
			?>
		</td>
	</tr>
	<tr>
		<td>อีเมล</td>
		<td>:
			<?php 
				echo $_POST["email"]; 
			?>
		</td>
	</tr>
	<tr>
		<td>User</td>
		<td>:
			<?php 
				echo $_POST["usr"]; 
			?>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:
			<?php 
				echo $_POST["pwd"]; 
			?>
		</td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td>:
			<?php 
				echo $_POST["ComPwd"]; 
			?>
		</td>
	</tr>
	</table>

