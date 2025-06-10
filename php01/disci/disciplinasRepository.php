
<?php
class disciplinasRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM DISCIPLINAS");

        $disciplinas = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplinas, $row);
        }
        return $disciplinas;
    }

    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM DISCIPLINAS WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function Inserir($disciplina)
    {
        
        
        $sql = "INSERT INTO DISCIPLINAS (disciplina) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $disciplina);
                $stmt->execute();
    }

    public function excluirDisciplina($id)
    {
        $sql = "DELETE FROM DISCIPLINAS where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

    public function Editar($disciplina, $id )
    {
        $sql = "UPDATE DISCIPLINAS set DISCIPLINA = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $disciplina,$id);
                $stmt->execute();
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM DISCIPLINAS WHERE DISCIPLINA like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $disciplinas = [];
        
        while ($row = $resultado->fetch_assoc()) {
            array_push($disciplinas, $row);
        }
        return $disciplinas;
    }
}
