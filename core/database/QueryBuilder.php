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

    public function selectAll($table, $inicio = null, $itensPorPagina = null)
    {
        $sql = "SELECT * FROM {$table}";

        if ($inicio >= 0 && $itensPorPagina > 0) {
            $sql .= " LIMIT {$inicio}, {$itensPorPagina}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (:%s)',
            $table,
            implode(',', array_keys($parameters)),
            implode(', :', array_keys($parameters)),
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            "DELETE FROM %s WHERE id = :id",
            $table,
            'id = :id'
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function selectJoinADMP($table1, $table2)
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

    public function countAll($table)
    {
        $sql = "select COUNT(*) from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function update($table, $id, $parameters)
    {
        $sql = sprintf(
        'UPDATE %s SET %s WHERE id = :id',
        $table,
        implode(', ', array_map(function($param){
            return $param . ' = :' . $param;
        }, array_keys($parameters))),

        $parameters['id'] = $id
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
