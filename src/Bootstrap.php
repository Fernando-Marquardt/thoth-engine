<?php
declare(strict_types=1);

// SPDX-FileCopyrightText: 2025 Thoth Engine contributors <https://github.com/Fernando-Marquardt/thoth-engine>
// SPDX-License-Identifier: MIT

use Latte\Bridges\Tracy\TracyExtension;
use Latte\Engine;
use Latte\Loaders\FileLoader;
use Tracy\Debugger;

Debugger::enable(Debugger::Development);
Debugger::$showBar = true;

const GAME_NAME = 'Thoth Engine';
const GAME_YEAR = 2025;

$latte = new Engine();
$latte->addExtension(new TracyExtension());
$latte->setLoader(new FileLoader(__DIR__ . '/../templates'));
$latte->setTempDirectory(dirname(__DIR__) . '/cache/templates');
