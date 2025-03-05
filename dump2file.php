<?php

ob_start();
var_dump($var);
file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/_debug.txt', ob_get_contents(), FILE_APPEND);
ob_end_clean();
