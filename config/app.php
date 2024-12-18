<?php

return [
    /**
     * Идентификатор навыка.
     *
     * Используется при загрузке изображений и звуков.
     */
    'skill_id' => env('SKILL_ID'),

    /**
     * OAuth-токен.
     *
     * Используется при загрузке изображений и звуков.
     */
    'oauth' => env('OAUTH'),

    /**
     * Временная зона.
     */
    'timezone' => env('TIMEZONE', 'Europe/Moscow'),

    /**
     * Хранилище.
     *
     * Используется для хранения данных, логов, кэширования изображений
     * и прочих файлов которые нужно хранить в навыке.
     */
    'storage_path' => storage_path(),

    /**
     * Тестовый запрос.
     *
     * Например, чтобы провести тестирование или отладку навыка
     * или для чего-то ещё.
     */
    'request' => null,
];