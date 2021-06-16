<?php
$action = filter_input(INPUT_POST, 'action');
$error_message = "";
if ($action == "addLine") {
  try {
    //get the text and contact info from the form, filter it
    $nextLine = filter_input(INPUT_POST, 'nextLine');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subscribe = isset($_POST['subscribe']);
    $math = filter_input(INPUT_POST, 'math');


    //validate the text
    if(!$nextLine) {
      throw new Exception("Please write something. Don't overthink it!");
    }
    //validate email if the email box is checked
    if ($subscribe == TRUE AND $email == FALSE) {
      if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
        throw new Exception("Please enter a valid email address or leave it blank.");
      }
    }
    //validate $math
    if($math != "7") {
      throw new Exception("Oops, check your math.");
    }

    $eD = fopen('ED.txt', 'a');
    fwrite($eD, "\n".$nextLine);
    fclose($eD);

    $contact = fopen('EDcontact.txt', 'a');
    fwrite($contact, "\n".$name.", ".$email.", ".$subscribe);
    fclose($contact);
  }
  catch (Exception $e) {
    $error_message = $e->getMessage();
  }
}
?>


<html lang="en">
<!--Algorithm for exquisite corpse web exercise:
give user opening line of text
ask them for the line they would like to have
ask user if they would like for me to share the completed poem/story with them
if yes, get their email address, add it to a list
once I've received 10 lines, start a new document with new poem/story
automatically notify contributors of the completed poem*/
-->
<head>
  <title>Exquisite Corpse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
</head>

<body>
  <div class="exquisite-corpse">
  <?php
  	include('includes/header.php');
  ?>
<div class="exquisite-corpse-image">
</div>

<!--if the form is empty, or the user hasn't hit submit, display the instructions>-->
<?php if (!$action OR $error_message) { ?>

  <article>
    <h2>Let's Build a Poem</h2>
    <p>Send me a line, and I'll add it to a collective poem. We'll follow the rules of an old parlour game called "Exquisite Corpse," which was invented by surrealists in the 1920s.</p>
    <h3>What is an Exquisite Corpse Poem?</h3>
    <p>According to <a href="https://en.wikipedia.org/wiki/Exquisite_corpse"><i>Wikipedia</i></a>:
      <blockquote cite = "https://en.wikipedia.org/wiki/Exquisite_corpse">
       This technique was invented by surrealists and is similar to an old parlour game called Consequences in which players write in turn on a sheet of paper, fold it to conceal part of the writing, and then pass it to the next player for a further contribution....The name is derived from a phrase that resulted when surrealists first played the game, "Le cadavre exquis boira le vin nouveau. (Translated as: "The exquisite corpse shall drink the new wine.")
     </blockquote>
   </p>



  <h3>Instructions for you:</h3>
  <p>Enter the next line of the prose poem, the only rule being that you must repeat one word from the previous line.</p>

  <h3>The line that came before:</h3>
  <p>
    <?php
    $lines = file('ED.txt');
    $lastLine = array_pop($lines);
    echo htmlspecialchars($lastLine);
    ?>
  </p>


      <form name="ecForm" method="post">
        <label>
          Next Line (your line, required):
        </label>
        <br />
        <textarea name="nextLine" max-length="1000" required><?php echo $nextLine;?></textarea>
        <br /><br />

        <label>
          Name or Pseudonym (optional):<br />
          <input type="text" name="name" value="<?php echo $name;?>">
        </label>
        <br /><br />
        <label>
          Email (optional):<br />
          <input type="email" name="email" value="<?php echo $email;?>">
        </label>
        <br /><br />
        <label>
          <input type="checkbox" name="subscribe" <?php if ($subscribe == 1) echo "checked";?>>
          I would like to be emailed the prose poem whenever it is completed, which may take a while.
        </label>
        <label>
          <br /><br />
          What is 3+4? (required, this is to confirm that you're not a robot):
          <input type="text" name="math" required value="<?php echo $math;?>">

        <?php
          if ($error_message) {
            echo "<p class='error'>$error_message</p>";
          }
        ?>
        <input type="hidden" name="action" value="addLine">
        <button type="submit">Add my line to the collective unconscious</button>
        <br /><br />
      </form>
    </article>
<?php } elseif (!$error_message){
  echo "<article>Thank you!</article>";
  }
  ?>
  <footer>
    <p>Website created by Laurin Penland. The background photograph is a digital image of "Movement of the hand, a hand drawing a circle. Collotype after Eadweard Muybridge, 1887," courtesy of the <a href="https://wellcomecollection.org/works/a3wstquw" target="_blank"><i>Welcome Collection</i></a>.
  </footer>
</div>
</body>
</html>
