<?php
$main_title_str = "INFORMATIK";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<title>Informatik</title>
</head>
<body>
	<div class="top-nav">

	</div>
	<div class="content">
		<div class="main-title">
			<div class="letter-container">
				<?php
					foreach(mb_str_split($main_title_str) as $letter){
						?>
							<p><?php echo $letter; ?></p>
						<?php
					}
				?>
			</div>
		</div>
	</div>

	<div class="footer">

	</div>
</body>
</html>