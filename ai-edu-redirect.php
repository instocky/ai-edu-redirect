<?php
/**
 * Plugin Name: AI Education Redirect
 * Description: Плагин для редиректа на основе конфигурации
 * Version: 0.7.14.22
 * Author: Irvin Con
 *
 * Основной файл плагина, инициализирует обработчик редиректов
 *
 * @package AIEducationRedirect
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-ai-redirect.php';

/**
 * Инициализация плагина AI Education Redirect
 * 
 * Создает экземпляр класса AI_Redirect для обработки редиректов
 *
 * @return void
 */
function ai_edu_redirect_init()
{
    $redirect = new AI_Redirect();
}

add_action('plugins_loaded', 'ai_edu_redirect_init');
