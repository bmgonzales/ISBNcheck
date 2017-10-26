<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>WorldCat ISBN Check</title>

</head><body>

<h1>WorldCat ISBN Check</h1>

<br><br><br>

<h4><strong>Copy ISBN list and paste here: </strong></h4><br>
<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<textarea name="isbnlist" cols="80" rows="10" style="border: 2px solid #005481;" required></textarea><br><br>
<input type='submit' class='submit' name='submit' value='Submit'></div>
</form>

<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<div style="width:90%;">
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	print $results;
}?>
</div>

		
</body></html>