<?php
spl_autoload_register(function ($className) {
    if (strtolower(substr($className, 0, 6)) == 'alipay'
        && strtolower(substr($className, -7)) == 'request') {
        $file = sprintf('%s/request/%s.php', __DIR__, $className);
        if (file_exists($file)) {
            require $file;
        }
    }

    if (($file = sprintf('%s/%s.php', __DIR__, $className)) && file_exists($file)) {
        require $file;
    }
});
