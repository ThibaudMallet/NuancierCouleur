<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Color generator</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="root boxes">
      <h2>Nuances de gris</h2>
      <div class="boxes">
        <?php
        // TODO
        $colors = [];
        for ($index = 0; $index < 16; $index++) {
          array_push($colors, base_convert($index, 10, 16)) ;
        }
        foreach ($colors as $colorGrey) {
          echo '<div class="box" style="background-color:#';
          for ($index = 0; $index < 3; $index++) {
            echo $colorGrey;
          }
          echo'"></div>';
        };
        ?>
      </div>
    </div>
    <h2>Toutes les couleurs</h2>
    <div class="boxes">
      <?php
      // TODO
      foreach ($colors as $color) {
        for ($index = 0; $index < 16; $index++) {
          for ($jindex = 0; $jindex < 16; $jindex++) {
          echo '<div class="box" style="background-color:#' . $color . $colors[$index] . $colors[$jindex] . '"></div>';
          }
        }
      }
      ?>
    </div>
	</body>
</html>
