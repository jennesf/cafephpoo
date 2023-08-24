<?php
class Autenticacao{
    private $conexao;
    public function __construct($conxao) {
        $this->conexao = $conexao;
    }
    public function verificarUsuario($email,$senha) {
        $query = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $this->conexao->prepare($query); //stmt = variavel
        $stmt->blind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1){
            $usuario = $result-> fetch_assoc(); //fecth-assoc associa o nome das colunas com indice
            if(password_verify($senha, $usuario['senha'])){
                return $usuario;
            }
        }

        return false;
    } 
}