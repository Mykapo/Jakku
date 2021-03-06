<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 14/06/2018
 * Time: 05:56
 */

namespace Mykapo\Jakku\Core;

use Mykapo\Jakku\Core\Exception\RouterException;
use Mykapo\Jakku\Core\Exception\ServerException;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Mykapo\Jakku\Core\Router\Router;

/**
 * Class FrontController
 * @package Mykapo\Jakku\Core
 */
class FrontController
{
    /**
     * @var Response
     */
    private $response;

    /**
     * @var Request
     */
    private $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @TODO : implements Middlewares
     * @return null|Response
     */
    public function getResponse() :?Response
    {
        $this->response = new \GuzzleHttp\Psr7\Response();
        $method = $this->request->getMethod();
        $url = $this->request->getUri()->getPath();
        try {
            if (is_null($this->response)) { throw new ServerException("<h1>Internal Server Error</h1>", 500); }
            if ($url[-1] === "/" && $url !== '/') {
                $url = substr($url, 0, -1);
                $this->response = $this->response
                    ->withStatus(301)
                    ->withHeader("Location", $url);
            } else {
                $router = new Router();
                $response = $router->handle($url, $method);
                $this->response->getBody()->write($response);
            }
        } catch (\Exception $e) {
            http_response_code($e->getCode());
            die($e->getMessage());
//            $this->response
//                ->withStatus($e->getCode())
//                ->getBody()
//                ->write(
//                    $e->getMessage()
//                );
        }

        return $this->response;
    }
}