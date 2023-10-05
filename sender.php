<?php

$json = file_get_contents('php://input');
$data = json_decode($json, true);

/* Обрабатываем $data средствами php */
print_r($data);

