<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

require __DIR__ . '/Installer.php';

$silent = false;
$app_dir = 'application';

// php update.php -s
if (isset($argv[1]) && $argv[1] === '-s') {
    $silent = true;

    // php update.php -s app
    if (isset($argv[2]) && is_dir($argv[2])) {
        $app_dir = $argv[2];
    }
}

// php update.php app
if (isset($argv[1]) && is_dir($argv[1])) {
    $app_dir = $argv[1];
}

$installer = new Installer($silent);
$installer->update($app_dir);
