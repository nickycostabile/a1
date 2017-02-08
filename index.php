<?php
$quotes = ['A reader lives a thousand lives before he dies. The man who never reads lives only one. – George R.R. Martin', 'Never trust anyone who has not brought a book with them. – Lemony Snicket', 'Wicked people never have time for reading. It is one of the reasons for their wickedness. – Lemony Snicket'];

$rand_keys = array_rand($quotes);


?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Assignment 1: System Setup</title>

	<link href="stylesheet.css" rel="stylesheet">

</head>
<body>
	<header>
		<p>Assignment 01: System Setup | Nicky Costabile
	</header>

	<div id="content">

		<img src="/images/nicky.jpg" alt="Nicky Costabile">
		<h1>Nicky Costabile</h1>
			<p>Hello. My name is Nicky Costabile. I live in Maryland and work as a Graphic Designer / Front-End Web Developer for a small engineering company. I graduated from Stevenson University with a degree in Visual Communication Design. Shortly after graduating I began teaching myself JavaScript, which ultimately led me to begin pursuing the Web Technologies Professional Graduate Certificate at the Harvard Extension School.</p>

			<p>I am an avid reader (I have my own mini library in my <em>very</em> small apartment). I also enjoy writing, hiking, photography, traveling, and cooking (and eating) Italian food.</p>

	</div>
	<div id="quote">
		<p>
			<?php echo $quotes[$rand_keys]; ?>
		</p>		
	</div>
</body>
</html>
