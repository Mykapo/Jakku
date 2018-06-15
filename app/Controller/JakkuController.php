<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 14/06/2018
 * Time: 21:14
 */

namespace Mykapo\Jakku\Controller;


class JakkuController
{
    public function indexAction(?array $params)
    {
        return "<h1>YOLOOOOOO</h1>";
    }

    public function testAction($params)
    {
        return "<h1>" . implode(" : ", $params) . "</h1>";
    }

    public function redirectAction()
    {
        http_response_code(301);
        header("Location: /");
        exit;
    }
}