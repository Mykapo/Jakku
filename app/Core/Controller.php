<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 15/06/2018
 * Time: 02:34
 */

namespace Mykapo\Jakku\Core;


use Mykapo\Jakku\Core\Exception\RouterException;

abstract class Controller
{
    private $views_dir = __APP_ROOT__ . "/views";

    protected function render(string $page, ?array $params = null) :string
    {
        ob_start();
        require_once sprintf("%s/%s", $this->views_dir, $page);

        return ob_get_clean();
    }

    protected function redirectTo($location)
    {
        http_response_code(301);
        header(sprintf("Location: %s", $location));
        exit;
    }

    protected function notFound()
    {
        throw new RouterException("<h1>Page not found</h1>", 404);
    }
}