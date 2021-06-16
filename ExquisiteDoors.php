<html>
<head>
  <title>Exquisite Doors</title>
  <link rel = "stylesheet" type = "text/css" href = "styles/stylesheet.css">
</head>
<?php
	include('includes/header.php');
?>
<body>

<article>
  <?php
    //get the text and contact info from the form, filter it
    $nextLine = filter_input(INPUT_POST, 'nextLine');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subscribe = isset($_POST['subscribe']);

    //validate the text MY ERROR MESSAGES AREN'T WORKIING
    if($nextLine == FALSE) {
      $error_message = "Please write something. Don't overthink it!";
      echo $error_message;
    }
    //validate email if the email box is checked
    if ($subscribe === TRUE AND $email === FALSE) {
      if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
      echo $error_message = "Please enter a valid email address or leave it blank.";}
      }

    //else {$error_message = '';}

    //need to make this so that it only echos if there is an error message
    //echo "THIS IS AN ERROR MESSAGE ", $error_message;

	  $eD = fopen('ED.txt', 'a');
    fwrite($eD, "\n".$nextLine);
    fclose($eD);

    $contact = fopen('EDcontact.txt', 'a');
    fwrite($contact, "\n".$name.", ".$email.", ".$subscribe);
    fclose($contact);
    echo "Thank you, whoever you are.";

    #replace line on homepage with nextLine

  ?>
</article>
</body>
</html>
