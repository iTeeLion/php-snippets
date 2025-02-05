<?php

ob_start();
var_dump($var);
file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/_debug', ob_end_clean(), FILE_APPEND);
