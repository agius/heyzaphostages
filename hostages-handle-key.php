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
  <?php if(file_exists($_SERVER{'DOCUMENT_ROOT'} . "/assets/". $_REQUEST['Digits'] . ".mp3")) { ?>
    <Play><?php echo "http://judeprank.atevans.com/assets/". $_REQUEST['Digits'] . ".mp3http://judeprank.atevans.com/assets/76145273.mp3?version=2" ?></Play>
  <?php } else { ?>
    <Play>http://judeprank.atevans.com/assets/99999999.mp3</Play>
  <?php } ?>
</Response>
