<?php

  // if the caller pressed anything but 1 or 2 send them back
  if(strlen($_REQUEST['Digits']) != 8) {
    header("Location: hostages.php");
    die;
  }
  
  // otherwise, if 1 was pressed we Dial 3105551212. If 2 
  // we make an audio recording up to 30 seconds long.
  header("content-type: text/xml");
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<?php if ($_REQUEST['Digits'] == '98314335') { ?>
  <Say>Your first clue is: We see Heyzap awesomeness every week. But what's BEHIND the awesomeness?</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>now you're getting it. your next clue is behind the least-used computer in the office</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>the next clue requires a green thumb, and a power cord</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>you'd better hurry, or i will kill one of the hostages. the paperless office is a universal dream. your next clue is a nightmare</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>you're doing well. the clues will get harder from here. you may need to use some collective intelligence to find the next one</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>the next clue is a hairy one - red and hairy</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>if you're not an Englishman, you must be a Bitter American</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>from here you can see dinosaurs, plumbers, and how you're a pawn in my little game</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>almost there.
  your last clue is in cryostasis</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>congratulations! the countdown timer has five minutes left
  the best view isn't in the office, it's up the corporate ladder</Say>
<?php } else { ?>
  <Say>welcome to my little game. if you win, you will get a reward. if you do not, the hostages will die. your first code is 98314335</Say>
<?php } ?>
</Response>
