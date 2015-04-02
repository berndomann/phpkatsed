<!doctype html>
<html>
	<head>
		<title>Menüü proov</title>
	</head>
	<body>
		<select>
			<option>Hiiumaa</option>
			<option selected="selected">Läänemaa</option>
			<option>Harjumaa</option>
		</select>
		<form action="?">
			<?php
				$riigid=array("Soome", "Eesti", "Läti", "Leedu");
				$valikunr=2;
				for($riiginr=0; $riiginr<count($riigid); $riiginr++){
					$lisand=($riiginr==$valikunr) ? "selected='selected'": "";
					echo "<option value='$riiginr' $lisand<$riigid[$riiginr]</option>\n";
				}
			?>
		</form>
	</body>
</html>