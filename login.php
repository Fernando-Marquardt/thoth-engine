<?php
declare(strict_types=1);

// SPDX-FileCopyrightText: 2025 Thoth Engine contributors <https://github.com/Fernando-Marquardt/thoth-engine>
// SPDX-License-Identifier: MIT

$IP = str_replace(['/', '\\', '\0'], '', $_SERVER['REMOTE_ADDR']);
if (file_exists('ipbans/' . $IP)) {
    die(<<<HTML
<span style='font-weight: bold; color:red;'>
    Your IP has been banned, there is no way around this.
</span>
HTML);
}

global $latte;

require_once './globals_nonauth.php';

$login_csrf = request_csrf_code('login');

$latte->render('views/login.latte', [
    'csrf' => $login_csrf,
]);
