<html>
<head>
  <title>Exquisite Doors Form</title>
  <link rel = "stylesheet" type = "text/css" href = "styles/stylesheet.css">
</head>

<?php
	include('includes/header.php');
?>

<body>
<form action = "ExquisiteDoors.php" method = "post">
<article>


    <h3>The line that came before:</h3>
    <p>
    <?php

    $lines = file('eD.txt');
    $lastLine = array_pop($lines);
    echo $lastLine;

    ?>
</article>

<article>
  </p>
  <h3>Instructions for you:</h3>
    <p>Enter the next line of the prose poem, the only rule being that you must repeat one word from the previous line.</p>
</article>

<article>
    <label>
    Next Line (your line):
    </label>
    <br />
    <textarea name="nextLine"></textarea>
    <br /><br />

    <label>
      Name or Pseudonym (optional):<br />
        <input type="text" name="name">
    </label>
    <br /><br />
    <label>
      Email (optional):<br />
      <input type="email" name="email">
    </label>
    <br /><br />
    <label>
      <input type="checkbox" name="subscribe" checked="checked" />
      I would like to be emailed the prose poem whenever it is completed, which may take a while.
    </label>
    <br /><br />
</article>

<button type="submit">Add my line to the collective unconscious</button>
</form>

</html>
