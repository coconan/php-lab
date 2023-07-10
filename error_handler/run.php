<?php

error_reporting(-1);

set_error_handler(function ($level, $message, $file = '', $line = 0) {
    if (error_reporting() & $level) {
        file_put_contents('php://stderr', date('Y-m-d H:i:s', time()) . ":" . $file . '#' . $line . "\n");
    }
});
trigger_error("test error reporting -1");
error_reporting(0);
trigger_error("test error reporting 0");
restore_error_handler();
