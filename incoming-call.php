<?php
 header('Content-Type: application/xml');
 $output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
 echo $output;
 
 ?>
<Response>
  <Gather action="enqueue-call.php" numDigits="1" timeout="10" method="GET">
    <Say voice="alice" language="en-US">Welcome to Rasvic Services. For IT Consulting Services press one.</Say>
    <Say voice="alice" language="en-US">For linguistic services press two.</Say>
  </Gather>
</Response>