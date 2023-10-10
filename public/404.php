<?php

declare(strict_types=1);

header('HTTP/1.1 404 Not Found');
header('Cache-Control: public');
header('Cache-Control: max-age=' . (
    str_contains(urldecode($_SERVER['REQUEST_URI']), '/.') ? '31536000' : '3600'
), false);
if (ob_get_length()) {
    ob_clean();
}
?><html><head><title>404 Not Found</title></head><body><h1 style="text-align:center">404 Not Found</h1></body></html>