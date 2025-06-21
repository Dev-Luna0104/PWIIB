<?php
class AlternativaRepository {
    private $conexao;

    public function __construct(mysqli $conexao) {
        $this->conexao = $conexao;
    }

    public function inserir($texto, $correta, $id_pergunta) {
        $sql = "INSERT INTO alternativas (texto, correta, id_pergunta) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("sii", $texto, $correta, $id_pergunta);
        $stmt->execute();
    }

    public function buscarPorPergunta($id_pergunta) {
        $stmt = $this->conexao->prepare("SELECT * FROM alternativas WHERE id_pergunta = ?");
        $stmt->bind_param("i", $id_pergunta);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $alternativas = [];
        while ($row = $resultado->fetch_assoc()) {
            $alternativas[] = $row;
        }
        return $alternativas;
    }
}
?>
