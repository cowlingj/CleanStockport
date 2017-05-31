<!-- #CleanStockport - Index/Home Page -->
<?php require('../../lib/db-functions.php'); ?>
<html>
	<head>
		<link rel="stylesheet" href="../assets/mystyles.css">
		<title>#CleanStockport</title>
	</head>

	<body>
		<!-- Banner -->
		<div class="banner">
			<div class="bimage">
				<img src="../assets/images/banner.png" alt="#CleanStockport" height="100" width="716">
			</div>
			<!-- Banner Button -->
			<div class="button">
				<button type="button" onclick="location.href = 'CreateAJob.php'" >Submit Job</button>
			</div>
		</div>
		
		<!-- Using PHP to display the available jobs -->
		<?php
			$task = getAll();
			while($row = $task->fetch_assoc()){
				echo "<div class='task'>";
			  echo "<h2>" . $row["name"] . "</h2>";
			  echo "<img src='../assets/images/StockportPhotos/" . $row["image"] . ".jpg' alt='image' height='160px' width='160px'>";
			  echo "<p>" . $row["postcode"] . "</p>" . "<p>" . $row["price"] . "</p>";
			  echo "</div>";
			}
		?>
		
	</body>
</html>