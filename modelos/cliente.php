<?php

class Cliente {

    private $pdo;

    private $cli_id;
    private $cli_nom;
    private $cli_ape;
    private $cli_dir;
    private $cli_tel;
    private $cli_email;

    public function __CONSTRUCT() {
        $this->pdo = BasedeDatos::Conectar();
    }

    // Getters y Setters
    public function getCli_id() : ?int {
        return $this->cli_id;
    }

    public function setCli_id(int $id) {
        $this->cli_id = $id;
    }

    public function getCli_nom() : ?string {
        return $this->cli_nom;
    }

    public function setCli_nom(string $nom) {
        $this->cli_nom = $nom;
    }

    public function getCli_ape() : ?string {
        return $this->cli_ape;
    }

    public function setCli_ape(string $ape) {
        $this->cli_ape = $ape;
    }

    public function getCli_dir() : ?string {
        return $this->cli_dir;
    }

    public function setCli_dir(string $dir) {
        $this->cli_dir = $dir;
    }

    public function getCli_tel() : ?string {
        return $this->cli_tel;
    }

    public function setCli_tel(string $tel) {
        $this->cli_tel = $tel;
    }

    public function getCli_email() : ?string {
        return $this->cli_email;
    }

    public function setCli_email(string $email) {
        $this->cli_email = $email;
    }

    // Métodos CRUD
    public function Listar() {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM clientes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM clientes WHERE cli_id=?;");
            $consulta->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);

            $c = new Cliente();
            $c->setCli_id($r->cli_id);
            $c->setCli_nom($r->cli_nom);
            $c->setCli_ape($r->cli_ape);
            $c->setCli_dir($r->cli_dir);
            $c->setCli_tel($r->cli_tel);
            $c->setCli_email($r->cli_email);

            return $c;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Insertar(Cliente $c) {
        try {
            $consulta = "INSERT INTO clientes (cli_nom, cli_ape, cli_dir, cli_tel, cli_email) VALUES (?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $c->getCli_nom(),
                        $c->getCli_ape(),
                        $c->getCli_dir(),
                        $c->getCli_tel(),
                        $c->getCli_email()
                    ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Cliente $c) {
        try {
            $consulta = "UPDATE clientes SET 
                cli_nom=?,
                cli_ape=?,
                cli_dir=?,
                cli_tel=?,
                cli_email=?
                WHERE cli_id=?;
            ";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $c->getCli_nom(),
                        $c->getCli_ape(),
                        $c->getCli_dir(),
                        $c->getCli_tel(),
                        $c->getCli_email(),
                        $c->getCli_id()
                    ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $consulta = "DELETE FROM clientes WHERE cli_id=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
