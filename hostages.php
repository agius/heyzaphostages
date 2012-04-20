<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Gather numDigits="8" action="hostages-handle-key.php" method="POST">
      <Say>
        Enter your code now
      </Say>
    </Gather>
</Response>