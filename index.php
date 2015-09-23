<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Password Generator</title>
	<link rel="stylesheet" href="password.css" type="text/css"/>
	<?php require 'logic.php';?>
</head>
<body>
	<div class="container">
		<h1>xkcd Password Generator</h1>
			<form action="index.php" method="post">
				<div class ="form-group">
					<h2><label class="options">Select Options</label></h2>
					<!-- words -->
					<label for="number_words">Number Of Words</label>
						<select id="TotalWords" name="TotalWords">
							<?php
								$values = array ('1','2','3','4','5','6','7','8','9');
								foreach($values as $TotalWords){
									echo '<option value="'.$TotalWords.'"'.($_POST['TotalWords']==$TotalWords?' selected="selected"':'').'>'.$TotalWords.'</option>';
								}
							?>
						</select><br>

						<!-- numbers-->
						<label>Add Numbers</label>
						<input type="checkbox" name="NumberCheck" value="number" ><br>
						<!--symbols-->
						<label>Add Symbol</label>
						<input type="checkbox" name="SymbolCheck" value="symbol" ><br><br>

					<!--Generate Password -->
					<input type="submit" name="generate" Value="Generate Password"/>

					<!--Password including php-->
					<h2>Password:<br><?php echo @($password); ?></h2>
				</div>
				</form>
				<h3><a href="https://xkcd.com/936/">xkcd Comic</a></h3>
          		<img class="img-responsive comic" src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password comic">
      </div>
</body>
</html>
