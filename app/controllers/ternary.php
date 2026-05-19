<?php

$ternaryCases = [
    [
        'file' => 'app/views/home.view.php',
        'line' => 17,
        'expression' => 'isset($listings) ? $listings : []',
        'note' => 'Fallback to an empty array for foreach.'
    ],
    [
        'file' => 'app/controllers/listings/index.php',
        'line' => 22,
        'expression' => "count(\$where) ? ' WHERE ' . implode(' AND ', \$where) : ''",
        'note' => 'Conditionally append SQL WHERE clause.'
    ],
    [
        'file' => 'app/config/db.php',
        'line' => 21,
        'expression' => "getenv('MYSQL_HOST') ?: '127.0.0.1'",
        'note' => 'Use default host when env var is empty.'
    ],
    [
        'file' => 'app/config/db.php',
        'line' => 22,
        'expression' => "getenv('MYSQL_PORT') ?: '3306'",
        'note' => 'Use default port when env var is empty.'
    ],
    [
        'file' => 'app/config/db.php',
        'line' => 23,
        'expression' => "getenv('MYSQL_DBNAME') ?: 'jobseeker'",
        'note' => 'Use default DB name when env var is empty.'
    ],
    [
        'file' => 'app/config/db.php',
        'line' => 24,
        'expression' => "getenv('MYSQL_USERNAME') ?: 'root'",
        'note' => 'Use default username when env var is empty.'
    ],
    [
        'file' => 'app/config/db.php',
        'line' => 25,
        'expression' => "getenv('MYSQL_PASSWORD') ?: ''",
        'note' => 'Use empty password by default.'
    ],
    [
        'file' => 'app/controllers/auth/logout.php',
        'line' => 12,
        'expression' => "\$params['path'] ?: '/'",
        'note' => 'Fallback cookie path during logout.'
    ],
    [
        'file' => 'app/views/partials/job-card.php',
        'line' => 7,
        'expression' => '\$job->city ?: \$job->state ?: \$job->address',
        'note' => 'Choose first available location field.'
    ],
    [
        'file' => 'app/views/listings/show.view.php',
        'line' => 11,
        'expression' => '\$listing->city ?: \$listing->state ?: \$listing->address',
        'note' => 'Choose first available location field.'
    ],
    [
        'file' => 'app/public/BLOG/blog.php',
        'line' => 178,
        'expression' => 'header ? header.offsetHeight : 0',
        'note' => 'JavaScript ternary for scroll offset fallback.'
    ],
];

require basePath('views/ternary/ternary.php');

?>