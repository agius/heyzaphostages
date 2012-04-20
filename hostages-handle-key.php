<?php

  // if the caller pressed anything but 1 or 2 send them back
  if($_REQUEST['Digits'].length() !== 8) {
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
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } elseif ($_REQUEST['Digits'] == '23419654') { ?>
  <Say>good guess, but the real secret is what's on the inside. Something... alcoholic.</Say>
<?php } else { ?>
  <Say>play my little game. if you win, you will get a reward. if you do not, the hostages will die. your first code is 98314335</Say>
<?php } ?>
</Response>
