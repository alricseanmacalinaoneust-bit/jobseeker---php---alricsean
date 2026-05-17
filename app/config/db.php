<?php

// Load .env file from the project root if environment variables are not already set
$envPath = __DIR__ . '/../../.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$k, $v] = array_map('trim', explode('=', $line, 2) + [1 => '']);
        if ($k !== '') {
            // only set if not already present in environment
            if (getenv($k) === false) {
                putenv("{$k}={$v}");
                $_ENV[$k] = $v;
            }
        }
    }
}

return [
    'host' => getenv('MYSQL_HOST') ?: '127.0.0.1',
    'port' => getenv('MYSQL_PORT') ?: '3306',
    'dbname' => getenv('MYSQL_DBNAME') ?: 'jobseeker',
    'username' => getenv('MYSQL_USERNAME') ?: 'root',
    'password' => getenv('MYSQL_PASSWORD') ?: ''
];

?>