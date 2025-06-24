<?php
class AlternativaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarPorPergunta($idPergunta)
    {
        $sql = "SELECT * FROM ALTERNATIVAS WHERE ID_PERGUNTA = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $idPergunta);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM ALTERNATIVAS WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function inserir($idPergunta, $texto, $correta)
    {
        $sql = "INSERT INTO ALTERNATIVAS (ID_PERGUNTA, TEXTO, CORRETA) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("isi", $idPergunta, $texto, $correta);
        $stmt->execute();
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM ALTERNATIVAS WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    public function editar($id, $texto, $correta)
    {
        $sql = "UPDATE ALTERNATIVAS SET TEXTO = ?, CORRETA = ? WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("sii", $texto, $correta, $id);
        $stmt->execute();
    }
}
?>
