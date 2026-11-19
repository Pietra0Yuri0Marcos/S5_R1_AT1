<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class PersonagemRepository implements RepositoryInterface{

    private $conn;

    public function __construct()
    {
        $this->conn = Database::conectar();
    }

    #[Override]
    public function criar($objeto)
    {
        $sql = "INSERT INTO personagens (nome, idade, genero, personalidade, obra) VALUES (:n, :i, :g, :p, :o)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $objeto->getNome(),
            ':i' => $objeto->getIdade(),
            ':g' => $objeto->getGenero(),
            ':p' => $objeto->getPersonalidade(),
            ':o' => $objeto->getObra()
        ]);
    }

    public function listar(){
        $stmt = $this->conn->query("SELECT * FROM personagens ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    #[Override]
    PUBLIC function buscarPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM personagens WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    #[Override]
    public function atualizar($id, $objeto)
    {
        $sql = "UPDATE personagens SET nome=:n, idade=:i, genero=:g, personalidade=:p, obra=:o WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $objeto->getNome(),
            ':i' => $objeto->getIdade(),
            ':g' => $objeto->getGenero(),
            ':p' => $objeto->getPersonalidade(),
            ':o' => $objeto->getObra(),
            ':id' => $id
        ]);
    }

    #[Override]
    public function excluir($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM personagens WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
?>