<?php

$data = json_encode($_POST);

file_put_contents('php://stderr', $data);
