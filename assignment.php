<?php

$assignment_instruction = [
  'instruction' => 'dequeue',
  'post_work_activity_sid' => 'WA20750a202f2e2e5acfbdb9e095e22973',
  'from' => '+917829887000' 
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);