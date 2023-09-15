<?php

class Conexao{
    
    private $db;
    private $dbHost = "tads_2a_manha.mysql.dbaas.com.br";
    private $dbName = "tads_2a_manha";
    private $dbUser = "tads_2a_manha";
    private $dbPass = "UMCtads2023!";
    
    public function __construct(){
        
        try{
            $this->db = new PDO("mysql:host=$this->dbHost; dbname=$this->dbName", $this-> dbUser, $this->dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die("Erro ao conectar ao banco de dados: ". $e->getMessage());
        }
    }

    public function executarQuery($sql,$params = []){
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        }catch(PDOException $e){
            die("Erro ao executar a consulta: ". $e->getMessage());
        }
    }

    //Funções especificas para o CRUD
    //CREATE
    public function cadastrarRegistro($dados){
        $sql = "INSERT INTO vitor_logins (user, senha, email, celular) VALUES (:user,:senha,:email,:celular)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($dados);
        return $this->db->lastInsertId();
    }
    //READ
    public function verificarLogin($user, $senha) {
        $sql = "SELECT * FROM vitor_logins WHERE user = :user AND senha = :senha";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function listarRegistrosID($id)
{
    $sql = "SELECT * FROM vitor_logins WHERE id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function listarRegistros(){
            $sql= "SELECT * FROM vitor_logins";
            $stmt= $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    //UPTADE
     public function editarRegistro($id,$dados){
        $sql = "UPDATE vitor_logins SET user = :user, senha = :senha, email = :email, celular = :celular WHERE vitor_logins.id = :id";
        $stmt = $this->db->prepare($sql);
        $dados[':id'] = $id;
        return $stmt->execute($dados);
        }
    //DELETE
    public function excluirRegistro($id){
        $sql = "DELETE FROM vitor_logins WHERE vitor_logins.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}