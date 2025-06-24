<?php
class AlternativaRepository {
    private $conexao;

    public function __construct(mysqli $conexao) {
        $this->conexao = $conexao;
    }

    public function Inserir($disciplina)
    {
        
        
        $sql = "INSERT INTO alt3re (disciplina) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $disciplina);
                $stmt->execute();
    }

    public function listarPorPergunta($idPergunta) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM alternativas WHERE ID_PERGUNTA = ?"
        );
        $stmt->bind_param("i", $idPergunta);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
