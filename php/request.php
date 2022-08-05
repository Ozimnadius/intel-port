<?php
header('Content-Type: application/json');

$data = $_POST;

echo json_encode(array(
    'status' => true
));
exit();