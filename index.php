<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Pyramid">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Volume of a Pyramid, in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Pyramid, in PHP</h1>";
		?>

		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblSideA">Side a:</label>
      <input type="text" id="side-a" placeholder="Enter the side a" name="side-a">
      <br>
      <br>
      <label for="lblSideB">Side b:</label>
      <input type="text" id="side-b" placeholder="Enter the side b" name="side-b">
      <br>
      <br>
      <label for="lblHeight">Height:</label>
      <input type="text" id="height" placeholder="Enter the height" name="height">
      <br>
      <br>
      <input type="submit" value="Calculate Volume">
		</form>

		<!-- iframe for the results to show on the web page. -->
		<iframe id="results" name="results">			
			The volume of the pyramid is" + $volume + cm<sup>3</sup>
    </iframe>
  </body>
</html>