<?php
$main_title_str = "INFORMATIK";
$main_title_colors = [
	"#32B9FF", "#45BFE8", "#57C5D1", "#6ACBB9", "#7DD1A2", "#8FD78B", "#A2DE74", "#B4E45D", "#C7EA46", "#DAF02E", "#ECF617", "#FFFC00"
];

include("php/utils.php");

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

<script src="js/particles.js"></script>
<script src="js/index.js"></script>

	<title>Informatik</title>
</head>
<body>
	<div class="top-nav">
	</div>
	<div class="content">
		<div style="height: 50vh">
			<div class="particle-container" id="particles-js"></div>
			<div class="main-title">
				<div class="letter-container">
					<?php
						$i = 0;
						foreach(mb_str_split($main_title_str) as $letter){
							?>
								<p style=
								"color: <?php echo $main_title_colors[$i];?>;
								animation-delay: <?php echo $i * 0.1 ?>s;"><?php echo $letter; ?></p>
							<?php
							$i++;
						}
					?>
				</div>
			</div>
		</div>
		<div class="practice-card-container">
			<?php
			$dir = './Übungen';
			$files = scandir($dir);
			$files = \array_diff($files, [".", ".."]);
			$i = 0;
				foreach($files as $file){
					$file_url = $dir . '/' . $file;
					?>
						<div class="practice-card" style="animation-delay: <?php echo $i++ * 0.5 + 1; ?>s;">
							<iframe src="<?php echo $file_url; ?>"></iframe>
							<div onclick="window.location='<?php echo $file_url; ?>'" class="practice-card-cover"></div>
							<p><?php echo substr($file, 0, -4); ?></p>
						</div>
					<?php
				}
			?>
		</div>
	</div>

	<div class="footer">

	</div>
</body>
</html>