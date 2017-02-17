<?php

$digit_pressed = $_REQUEST['Digits'];

if ($digit_pressed == '1') {
  $team = "IT Consulting";
}
elseif ($digit_pressed == '2') {
  $team =  "Linguistic Services";
}
else { $team = "IT Consulting";
}

 header('Content-Type: application/xml');
 $output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
 echo $output;
 ?>
<Response>
	<Enqueue> workflowSid="WWe3b15175ad1fc864b17fb97797b3905c";
		<Task> {"selected_team": "<?= $team ?>"} </Task>
	</Enqueue>
</Response>