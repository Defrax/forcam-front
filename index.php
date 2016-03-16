<?php
require_once __DIR__ . '/partials/header.php';
//require_once __DIR__ . '/partials/header.html';
require_once __DIR__ . '/partials/new-header.html';

if (isset($_GET['page'])) {
    require_once __DIR__ . '/pages/' . $_GET['page'] . '.html';
} else {
    require_once __DIR__ . '/pages/home_p.html';
}

require_once __DIR__ . '/partials/footer.html';
require_once __DIR__ . '/partials/footer.php';


