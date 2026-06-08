<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function selectJoinADMP($table1,$table2)
    {
        $sql = "select p.id,p.titulo,u.nome as autor,DATE_FORMAT(p.data, '%d/%m/%Y') as dataformatada from {$table1} as p join {$table2} as u on p.usuarios_id = u.id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function insertADMP($table, $parameters){
        $sql = sprintf('insert into %s (%s) values (:%s)',
        $table,
        implode(', ', array_keys($parameters)),
        implode(', :', array_keys($parameters)),
        );
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }   
    }