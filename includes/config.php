<?php
/**
 * Конфигурация плагина AI Education Redirect
 *
 * Содержит массивы маршрутов для редиректов и слагов для подключения Tailwind и Alpine.js
 *
 * @package AIEducationRedirect
 */

return [
    'routes' => [
        'parent/' => 'parent/slugRegistry/',
        'parent/slugregistry/' => 'parent/slugRegistry/',
        'parent/edustandart/' => 'parent/eduStandart/',
    ],
    'tailwind_alpine_slugs' => [
        'parent/slugRegistry',
        'parent/eduStandart',
    ],
];