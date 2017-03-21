<!DOCTYPE html>
<html>
	<head>
		<title>Multiplication table</title>
	</head>
	<body>
		<table>
			<?php
			//create first row of table headers
			echo '<tr>';
			echo '<th>&nbsp;</th>';
			for ($number = 1; $number <= 12; $number++) :
				echo "<th> $number <br> </th>";
			endfor;
			echo '</tr>';
			// create remaining rows
			for ($row = 1, $number = 1; $row <= 12; $row++) :
				echo '<tr>';
				//first cell is a table header
				if ($number == 1) {
					echo "<th> $row </th>";
				}
				while ($number <= 12) :
					echo '<td>' . $row * $number++ . '</td>';
				endwhile;
				echo '</tr>';
				$number = 1;
			endfor;
	?>
</table>
	</body>
</html>