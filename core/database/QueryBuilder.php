<?php


class QueryBuilder
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function select_all($table, $class_selector)
    {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return  $statement->fetchAll(PDO::FETCH_CLASS, "$class_selector");
    }
    public function insert($table, $parameters)
    {


        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e);
        }
    }
}
