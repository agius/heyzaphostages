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
  <?php if(file_exists($_SERVER{'DOCUMENT_ROOT'} . "/my_images/". $_REQUEST['Digits'] . ".mp3")) { ?>
    <Play><?php echo $_SERVER{'DOCUMENT_ROOT'} . "/my_images/". $_REQUEST['Digits'] . ".mp3" ?></Play>
  <?php } else { ?>
    <Say>That was an invalid code.</Say>
  <?php } ?>
</Response>
