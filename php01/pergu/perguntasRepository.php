<?php
class PerguntaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $resultado = $this->conexao->query(
            "SELECT * FROM PERGUNTAS");

        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM PERGUNTAS WHERE PERGUNTA like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM PERGUNTAS WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($PERGUNTA, $ID_DISCIPLINA)
    {
        $sql = "INSERT INTO PERGUNTAS (PERGUNTA,ID_DISCIPLINA) VALUES (?,?)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $PERGUNTA, $ID_DISCIPLINA);
                $stmt->execute();
               
    }

    public function Editar($PERGUNTA, $ID_DISCIPLINA, $id)
    {
        $sql = "UPDATE PERGUNTAS set PERGUNTA = ?, ID_DISCIPLINA = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $PERGUNTA, $ID_DISCIPLINA, $id);
                $stmt->execute();
    }

    public function Excluir($id)
    {
        $sql = "DELETE FROM PERGUNTAS where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}