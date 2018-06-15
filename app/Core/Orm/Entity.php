<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 15/06/2018
 * Time: 05:05
 */

namespace Mykapo\Jakku\Core\Orm;


use Mykapo\Jakku\Core\Exception\OrmException;

abstract class Entity
{
    protected const DEFAULT_LIMIT = 50;

    public static function execute(string $query, array $conditions) :bool
    {
        $connection = Connect::getInstance();
        $stmt = $connection->getStmt($query, $conditions);

        if ($stmt->errorCode() !== '00000') {
            throw new OrmException("Something went wrong with the query : " . $stmt->errorInfo()[2], 500);
        } else {

            return true;
        }
    }
}