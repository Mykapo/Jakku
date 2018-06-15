<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 15/06/2018
 * Time: 04:35
 */

namespace Mykapo\Jakku\Core\Orm;

/**
 * All Jakku's Entity MUST implements JakkuOrmCompatibleInterface
 * not that "array $coonditions" are always the same ["tag"=>,"value"=>,type=>]
 *
 * Interface JakkuOrmCompatibleInterface
 * @package Mykapo\Jakku\Core\Orm
 */
interface JakkuOrmCompatibleInterface
{
    /**
     * Insert into or Update database using the data store in the instance
     * Return true if everything went ok, otherwise it's false
     *
     * @return bool
     */
    public function save() :bool;

    /**
     * Remove from database
     *
     * @return bool
     */
    public function delete() :bool;

    /**
     * Find by id in database and create an instance with the query's result
     * If no id is specified, the query get the last record from database
     *
     * @param int|null $id
     * @return JakkuOrmCompatibleInterface|null
     */
    public static function find(?int $id = null) :?self;

    /**
     * Get all results
     *
     * @param int|null $offset
     * @param int|null $limit
     * @return array|null
     */
    public static function findAll(?int $offset = null, ?int $limit = null) :?array;

    /**
     * Get an array of result filtered by condition specified in first argument
     * findBy([id => $n]) must be an array of one element similar as what would find($n) return
     *
     * @param array $conditions
     * @param int|null $offset
     * @param int|null $limit
     * @return array|null
     */
    public static function findBy(array $conditions, ?int $offset = null, ?int $limit = null) :?array;

    /**
     * Execute a query in database
     *
     * @param string $query
     * @param array $conditions
     * @return bool|null
     */
    public static function execute(string $query, array $conditions) :bool;

    /**
     * Return the table name from where the Entity will find data
     *
     * @return string
     */
    public static function getTableName() :string;
}
