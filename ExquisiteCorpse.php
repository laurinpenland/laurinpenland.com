<html>
<!--Algorithm for exquisite corpse web exercise:
give user opening line of text
ask them for the land they would like to have
ask user if they would like for me to share the completed poem/story with them
if yes, get their email address, add it to a list
once I've received 10 lines, start a new document with new poem/story
automatically notify contributors of the completed poem*/
-->
<head>
  <title>Exquisite Corpse</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<?php
	include('includes/header.php');
?>
<body>

<article>
  <h3>What is an Exquisite Corpse Poem?</h3>
  <p>According to <a href="https://en.wikipedia.org/wiki/Exquisite_corpse"><i>Wikipedia</i></a>, "This technique was invented by surrealists and is similar to an old parlour game called Consequences in which players write in turn on a sheet of paper, fold it to conceal part of the writing, and then pass it to the next player for a further contribution....</p>

  <p>The name is derived from a phrase that resulted when Surrealists first played the game, 'Le cadavre exquis boira le vin nouveau.'(Translated as: 'The exquisite corpse shall drink the new wine.')"</p>

</article>

  <form action = "ExquisiteDoors2.php" method = "post">
  <button type="submit">Yes, I, too, shall drink the new wine</button>
  </form>
