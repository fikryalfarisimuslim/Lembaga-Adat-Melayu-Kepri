<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', 'http://lembagaadatmelayukepri.com/administrator/'); // isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website
define('DB_HOST', 'mysql.hostinger.co.id'); // host yang di gunakan
define('DB_USERNAME', 'u811128985_crud'); // username host
define('DB_PASSWORD', 'melayu123'); // password host
define('DB_NAME', 'u811128985_crud'); // database yang di gunakan
?>