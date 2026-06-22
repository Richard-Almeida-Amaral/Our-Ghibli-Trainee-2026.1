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


    public function countAll($table, $textoBusca, $colunaBusca)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";
        $parameters = [];


        if ($textoBusca && $colunaBusca) {
            $sql .= " where $colunaBusca[0] like :textoBusca OR $colunaBusca[1] like :textoBusca";
            $parameters['textoBusca'] = '%' . $textoBusca . '%';
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function countPosts($textoBusca = null)
    {
        $sql = "SELECT COUNT(*) FROM posts p JOIN usuarios u ON p.usuarios_id = u.id";
        $parameters = [];

        if ($textoBusca) {
            $sql .= " WHERE p.titulo LIKE :textoBusca OR p.descricao LIKE :textoBusca OR u.nome LIKE :textoBusca";
            $parameters['textoBusca'] = '%' . $textoBusca . '%';
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
            return (int) $stmt->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectJoinADMP($table1, $table2, $inicio = null, $itensPorPagina = null, $textoBusca = null)
    {
        $parameters = [];
        $whereSql = '';

        if ($textoBusca) {
            $whereSql = " WHERE p.titulo LIKE :textoBusca OR p.descricao LIKE :textoBusca OR u.nome LIKE :textoBusca";
            $parameters['textoBusca'] = '%' . $textoBusca . '%';
        }

        $sql = "SELECT p.id, p.titulo, p.descricao, p.imagem, u.nome AS autor, DATE_FORMAT(p.data, '%d/%m/%Y') AS dataformatada FROM {$table1} p JOIN {$table2} u ON p.usuarios_id = u.id {$whereSql} ORDER BY p.data DESC";

        if ($inicio >= 0 && $itensPorPagina > 0) {
            $sql .= " LIMIT {$inicio}, {$itensPorPagina}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectUsuarios($tabela, $limit, $offset, $textoBusca = null, $colunaBusca = null)
    {
        $limit = (int) $limit;
        $offset = (int) $offset;

        $parameters = [];
        $whereSql = '';

        if ($textoBusca && $colunaBusca) {
            $whereSql = " where $colunaBusca[0] like :textoBusca OR $colunaBusca[1] like :textoBusca";
            $parameters['textoBusca'] = '%' . $textoBusca . '%';
        }

        $sql = "SELECT * FROM {$tabela}" . $whereSql;

        if ($limit > 0 && $offset >= 0) {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectOne($table, $id) {}

    public function edit($table, $id, $parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE id= %s',
            $table,
            implode(', ', array_map(function ($param) {
                return $param . ' = :' . $param;
            }, array_keys($parameters))),

            $id
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function verificalogin($email, $senha)
    {
        $sql = sprintf('SELECT * FROM usuarios WHERE email = :email AND  senha = :senha');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $email,
                'senha' => $senha
            ]);

            $userlogin = $stmt->fetch(PDO::FETCH_OBJ);

            return $userlogin;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function selectUltimosPosts($limite = 6)
    {
        $sql = "
        SELECT p.id, p.titulo, p.descricao, p.imagem,u.nome AS autor, DATE_FORMAT(p.data, '%d/%m/%Y') AS dataformatada FROM posts p JOIN usuarios u ON p.usuarios_id = u.id ORDER BY p.data DESC LIMIT :limite";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
