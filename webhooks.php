<?php

$data = json_encode($_POST);

file_put_contents(__DIR__ . '/webhooks_response.json', $data);
