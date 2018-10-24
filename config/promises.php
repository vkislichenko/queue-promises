<?php

return [

    // Таблица для сохранения промисов
    'database' => [
        'connection'   => null,  //null = подключение по умолчанию
        'table'        => 'promises',
        'events_table' => 'promise_events',
    ],

    // Очередь для задач проверки таймаута
    'timeout_queue' => 'default'

];