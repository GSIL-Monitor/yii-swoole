<?php
/**
 * sw http server config
 */
return [
    'worker_num'      => 1,
    'task_worker_num' => 1,
    'max_request'     => 3,
    'dispatch_mode'   => 1,
    'daemonize'       => 0,
    'pid_file'        => __DIR__ . '/../bin/server.pid',
    'log_file'        => __DIR__ . '/../logs/sw.log',
];