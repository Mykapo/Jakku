<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 14/06/2018
 * Time: 06:40
 */

namespace Mykapo\Jakku\Core\Router;

use Mykapo\Jakku\Core\Exception\RouterException;

/**
 * Class Router
 * @package Mykapo\Jakku\Core\Router
 *
 * @TODO implement handling of regex pattern in routes.json elements
 */
class Router
{
    private $routeCollection;

    public function __construct()
    {
        $this->routeCollection = \json_decode(file_get_contents(__APP_ROOT__ . "/routes.json"), true);
        if (is_null($this->routeCollection)) {
            throw new RouterException("<h1>Routes are not reachable</h1>", 500);
        }
    }

    /**
     * @param string $uri
     * @param string $method
     * @return string html body
     * @throws RouterException
     */
    public function handle(string $requestedUri, string $method) :string
    {
        $params = [];
        $mostProbableRoutes = $this->getProbableRoutes($requestedUri, $method, $params);
        if (count($mostProbableRoutes) < 1) {
            $this->interruptRequest($requestedUri, $method);
        }

        $mostProbableRoute = reset($mostProbableRoutes);
        $controller = new $mostProbableRoute["controller"];
        $action = $mostProbableRoute["action"];
        $params = array_merge($params, $_POST, $_GET);

        return $controller->$action($params);
    }

    /**
     * @param string $uri
     * @param string $method
     * @throws RouterException
     */
    private function interruptRequest(string $uri, string $method)
    {
        $uriChecker = array_filter($this->routeCollection, function ($route) use ($uri, $method) {
            return $route["uri"] === $uri;
        });

        if (count($uriChecker) < 1) {
            throw new RouterException("<h1>Not Found</h1>", 404);
        } else {
            throw new RouterException("<h1>Method not supported</h1>", 405);
        }
    }

    /**
     * @param string $requestedUri
     * @param string $method
     * @param array $params         passed by reference to get all params
     * @return array
     */
    private function getProbableRoutes(string $requestedUri, string $method, array &$params) :array
    {
        return array_filter($this->routeCollection, function ($route) use ($requestedUri, $method, &$params) {
            $stockedUri = $route["uri"];
            $tempParams = [];
            if (strpos($route["uri"], ":")) {
                $arrRequestedUri = explode("/", $requestedUri);
                $arrStockedUri = explode("/", $stockedUri);
                $length = count($arrStockedUri);

                if ($length !== count($arrRequestedUri)) {
                    return false;
                }

                for ($i = 1; $i < $length; $i++) {
                    if ($arrStockedUri[$i][0] === ":") {
                        $tempParams[substr($arrStockedUri[$i], 1)] = $arrRequestedUri[$i];
                        $arrStockedUri[$i] = "(\\w)+";
                    }
                }

                if (preg_match(sprintf('#%s#', implode("/", $arrStockedUri)), $requestedUri) && in_array($method, $route["method"])) {
                    $params = $tempParams;

                    return true;
                }

                return false;
            } else {

                return $stockedUri === $requestedUri && in_array($method, $route["method"]);
            }
        });
    }
}
