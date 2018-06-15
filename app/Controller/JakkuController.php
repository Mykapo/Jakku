<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 14/06/2018
 * Time: 21:14
 */

namespace Mykapo\Jakku\Controller;

use Mykapo\Jakku\Core\Controller;

class JakkuController extends Controller
{
    public function indexAction(?array $params)
    {
        return "<h1>YOLOOOOOO</h1>";
    }

    public function testAction($params)
    {
        if (!file_exists(__APP_ROOT__ . "/views/" . $params["page"] . ".php"))
        {
            return $this->notFound();
        }

        return $this->render($params["page"] . ".php");
    }

    public function redirectAction()
    {
        http_response_code(301);
        header("Location: /");
        exit;
    }
}