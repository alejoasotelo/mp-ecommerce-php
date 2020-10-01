<?php

$data = json_encode($_POST);

file_put_contents('php://stderr', $data);
file_put_contents(__DIR__.'/log/error.log', $data);
