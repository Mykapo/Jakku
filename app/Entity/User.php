<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 15/06/2018
 * Time: 05:59
 */

namespace Mykapo\Jakku\Core\Entity;


use Mykapo\Jakku\Core\Exception\OrmException;
use Mykapo\Jakku\Core\Orm\Connect;
use Mykapo\Jakku\Core\Orm\Entity;
use Mykapo\Jakku\Core\Orm\JakkuOrmCompatibleInterface;

class User extends Entity implements JakkuOrmCompatibleInterface
{
    public $id;
    public $company_name;
    public $siret;
    public $name;
    public $address;
    public $email;
    public $logo;
    public $theme;

    private $correspondance = ["purple", "orange", "green", "blue"];
    private $reversedCorrespondance = [
        "purple" => 0,
        "orange" => 1,
        "green" => 2,
        "blue" => 3,
    ];

    public function __construct(
        ?int $id = null,
        ?string $company_name = null,
        ?string $siret = null,
        ?string $name = null,
        ?string $address = null,
        ?string $email = null,
        ?string $logo = null,
        ?int $theme = null
    )
    {
        $this->id = $id;
        $this->company_name = $company_name;
        $this->siret = $siret;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->logo = $logo;
        $this->theme = $this->correspondance[$theme];
    }

    public function save() :bool
    {
        $sql = sprintf("
            INSERT INTO `%s`
              (`id`, `company_name`, `siret`, `name`, `address`, `email`, `logo`, `theme`)
            VALUES
              (:id, :company_name, :siret, :name, :address, :email, :logo, :theme)
            ON DUPLICATE KEY UPDATE
              `company_name` = :uid,
              `siret` = :ucompany_name,
              `name` = :usiret,
              `address` = :uname,
              `email` = :uaddress,
              `logo` = :uemail,
              `theme` = :ulogo
            WHERE
              `id` = :wid  
            ;", User::getTableName());
        $params = [
            [
                "tag" => ":id",
                "values" => $this->id,
                "type" => \PDO::PARAM_INT
            ],[
                "tag" => ":company_name",
                "values" => $this->company_name,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":siret",
                "values" => $this->siret,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":name",
                "values" => $this->name,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":address",
                "values" => $this->address,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":email",
                "values" => $this->email,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":logo",
                "values" => $this->logo,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":theme",
                "values" => $this->theme,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":wid",
                "values" => $this->id,
                "type" => \PDO::PARAM_INT
            ],[
                "tag" => ":ucompany_name",
                "values" => $this->company_name,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":usiret",
                "values" => $this->siret,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":uname",
                "values" => $this->name,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":uaddress",
                "values" => $this->address,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":uemail",
                "values" => $this->email,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":ulogo",
                "values" => $this->logo,
                "type" => \PDO::PARAM_STR
            ],[
                "tag" => ":utheme",
                "values" => $this->theme,
                "type" => \PDO::PARAM_STR
            ]
        ];

        return self::execute($sql, $params);
    }

    public function delete() :bool
    {
        $sql = "DELETE FROM " . self::getTableName() . " WHERE `id` = :id LIMIT 1";
        $params = [["tag" => ":id", "value" => $this->id, PDO::PARAM_INT]];

        return self::execute($sql, $params);
    }

    public static function find(?int $id = null) //:?self
    {
        $params = [];
        $whereClause = " ";
        if (!is_null($id)) {
            $whereClause .= "WHERE id = :id ";
            $params[] = [
                "tag" => ":id",
                "values" => $id,
                "type" => \PDO::PARAM_INT
            ];
        }
        $sql = "SELECT * FROM " . self::getTableName() . $whereClause . " LIMIT :l";
        $params[] = [
                "tag" => ":l",
                "values" => self::DEFAULT_LIMIT,
                "type" => \PDO::PARAM_STR
            ];

        if ($result = Connect::getInstance()->getResult($sql, $params, false)) {
            return new self(
                $result["id"],
                $result["company_name"],
                $result["siret"],
                $result["name"],
                $result["address"],
                $result["email"],
                $result["logo"],
                $result["theme"]
            );
        }

        return null;
    }

    public static function findAll(?int $offset = null, ?int $limit = null) :?array
    {
        $sql = "SELECT * FROM " . self::getTableName() . " LIMIT :lim";
        $params = [[
            "tag" => ":lim",
            "value" => $limit ?? self::DEFAULT_LIMIT,
            "type" => \PDO::PARAM_INT
        ]];
        $results = Connect::getInstance()->getResult($sql, $params, true);
        $selfCollection = [];
        foreach ($results as $user) {
            $selfCollection[] = new self(
                $user["id"],
                $user["company_name"],
                $user["siret"],
                $user["name"],
                $user["address"],
                $user["email"],
                $user["logo"],
                $user["theme"]
            );
        }

        return $selfCollection;
    }

    public static function findBy(array $conditions, ?int $offset = null, ?int $limit = null) :?array
    {
        $conds = " ";
        $params = [];
        foreach ($conditions as $condition => $value) {
            $conds .= "WHERE " . $condition . "=:" . $condition . " AND ";
            $vtype = gettype($value);
            $params[] = [
                "tag" => ":".$condition,
                "value" => $value,
                "type" => (is_string($vtype) ? \PDO::PARAM_STR : (is_int($vtype) ? \PDO::PARAM_INT : (is_bool($vtype) ? \PDO::PARAM_BOOL : null)));
            ];
        }
        $conds = substr($conds, 0, -4);
        $sql = "SELECT * FROM " . self::getTableName() . $conds . " LIMIT :lim;";
        $params = [[
            "tag" => ":lim",
            "value" => $limit ?? self::DEFAULT_LIMIT,
            "type" => \PDO::PARAM_INT
        ]];
        $results = Connect::getInstance()->getResult($sql, $params, true);
        $selfCollection = [];
        foreach ($results as $user) {
            $selfCollection[] = new self(
                $user["id"],
                $user["company_name"],
                $user["siret"],
                $user["name"],
                $user["address"],
                $user["email"],
                $user["logo"],
                $user["theme"]
            );
        }

        return $selfCollection;
    }

    public static function getTableName() :string
    {
        return "user";
    }
}
