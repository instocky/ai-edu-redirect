<?php
/**
 * Класс AI_Redirect для обработки редиректов
 *
 * Управляет редиректами на основе конфигурации
 *
 * @package AIEducationRedirect
 */

class AI_Redirect
{
    private $routes;

    /**
     * Конструктор класса AI_Redirect
     * 
     * Загружает конфигурацию и устанавливает хук для проверки редиректов
     */
    public function __construct()
    {
        $config = include(plugin_dir_path(__FILE__) . 'config.php');
        $this->routes = $config['routes'];
        add_action('template_redirect', array($this, 'check_redirect'));
    }

    /**
     * Проверка и выполнение редиректов
     * 
     * Сравнивает текущий URL с настроенными маршрутами и выполняет редирект при совпадении
     *
     * @return void
     */
    public function check_redirect()
    {
        $current_url = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $from => $to) {
            if ($current_url === '/' . $from) {  // Строгое сравнение
                wp_redirect(home_url($to), 301);
                exit;
            }
        }
    }
}
