<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 15/06/2018
 * Time: 05:05
 */

namespace Mykapo\Jakku\Core\Orm;

use PHPUnit\Runner\Exception;

class Connect
{
    private $pdo;
    private static $instance;

    private function __construct() {
        try {
            $dsn = sprintf("mysql:host=%s;port=%s;database=%s", __DB_HOST__, __DB_PORT__, __DB_NAME__);
            $this->pdo = new \PDO($dsn, __DB_USER__, __DB_PASS__);
            $this->pdo->exec("SET NAMES UTF8");
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public static function getInstance() :self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getResult(string $query, ?array $arguments = null, bool $isForMany = true)
    {
        $stmt = $this->pdo->prepare($query);
        if (!is_null($arguments)) {
            $l = count($arguments) ;
            for ($i = 0; $i < $l; $i++) {
                $stmt->bindValue($arguments[$i]["tag"], $arguments[$i]["value"], $arguments["$i"]["type"]);
            }
        }
        $stmt->execute();

        if ($stmt->errorCode() != '00000') {
            if ($isForMany) {

                return $stmt->fetchAll(\PDO::FETCH_OBJ);
            } else {

                return $stmt->fetch(\PDO::FETCH_OBJ);
            }
        } else {
            throw new Exception("Query didn't work : " . $stmt->errorInfo()[2], 500);
        }
    }

    public function getStmt(string $query, ?array $arguments = null) :\PDOStatement
    {
        $stmt = $this->pdo->prepare($query);
        if (!is_null($arguments)) {
            $l = count($arguments) ;
            for ($i = 0; $i < $l; $i++) {
                $stmt->bindValue($arguments[$i]["tag"], $arguments[$i]["value"], $arguments["$i"]["type"]);
            }
        }
        $stmt->execute();

        return $stmt;
    }

    public function lastId() :?Int
    {
        return $this->pdo->lastInsertId();
    }
}