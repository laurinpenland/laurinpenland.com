<html>
<head>
  <title>Exquisite Doors</title>
  <link rel = "stylesheet" type = "text/css" href = "LPstylesheet.css">
</head>
<?php
	include('includes/header.php');
?>
<body>

<article>
  <?php
    $nextLine = $_POST['nextLine'];
    $name = $_POST['name'];
    $email = $_POST['email'];

	  $eD = fopen('ED.txt', 'a');
    fwrite($eD, "\n".$nextLine);
    fclose($eD);

    $contact = fopen('EDcontact.txt', 'a');
    fwrite($contact, "\n".$name.", ".$email);
    echo "Thank you, whoever you are.";

    #replace line on homepage with nextLine

  ?>
</article>
</body>
</html>
