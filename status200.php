<?php
/**
 * status200.php — HTTP status sanity check
 * Upload to your webroot and visit https://your-domain/status200.php
 * Expected: HTTP 200 with plain text output.
 */

// Clear any existing buffers to avoid leftover output affecting headers
if (function_exists('ob_get_level')) {
    while (ob_get_level() > 0) { @ob_end_clean(); }
}

// Force HTTP 200 OK (compatible with older PHP)
if (function_exists('http_response_code')) {
    http_response_code(200);
} else {
    header('HTTP/1.1 200 OK', true, 200);
}

// Helpful headers
header('Content-Type: text/plain; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('X-Debug-Status', '200');
header('X-PHP-SAPI', php_sapi_name());

// Output basic environment info
echo "OK 200\n";
echo "Timestamp: " . gmdate('c') . " (UTC)\n";
echo "Server IP: " . (isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'n/a') . "\n";
echo "Client IP: " . (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'n/a') . "\n";
echo "Protocol: " . (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'n/a') . "\n";
echo "Request URI: " . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'n/a') . "\n";
echo "HTTPS: " . (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'off') . "\n";
echo "X-Forwarded-Proto: " . (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'n/a') . "\n";
echo "Host: " . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'n/a') . "\n";
echo "PHP SAPI: " . php_sapi_name() . "\n";

// Show request headers if available
if (!function_exists('getallheaders')) {
    function getallheaders() {
        $headers = [];
        foreach ($_SERVER as $name => $value) {
            if (substr($name, 0, 5) == 'HTTP_') {
                $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))));
                $headers[$key] = $value;
            }
        }
        return $headers;
    }
}
$headers = getallheaders();
if (!empty($headers)) {
    echo "\nRequest headers:\n";
    foreach ($headers as $k => $v) {
        echo $k . ': ' . $v . "\n";
    }
}

exit;
