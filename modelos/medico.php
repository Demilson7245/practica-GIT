<?php

class Medico {
    private $pdo;

    private $medico_id;
    private $nombre;
    private $apellido;
    private $especialidad;
    private $telefono;
    private $email;

    public function __CONSTRUCT() {
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getMed_id(): ?int {
        return $this->medico_id;
    }

    public function setMed_id(int $id): void {
        $this->medico_id = $id;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellido(): ?string {
        return $this->apellido;
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $apellido;
    }

    public function getEspecialidad(): ?string {
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad): void {
        $this->especialidad = $especialidad;
    }

    public function getTelefono(): ?string {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function Listar() {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM medicos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return [];
        }
    }

    public function Obtener($id) {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM medicos WHERE med_id=?;");
            $consulta->execute([$id]);
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            if ($r) {
                $m = new Medico();
                $m->setMed_id($r->med_id);
                $m->setNombre($r->nombre);
                $m->setApellido($r->apellido);
                $m->setEspecialidad($r->especialidad);
                $m->setTelefono($r->telefono);
                $m->setEmail($r->email);
                return $m;
            }
            return null;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    public function Insertar(Medico $m) {
        try {
            $consulta = "INSERT INTO medicos(nombre, apellido, especialidad, telefono, email) VALUES (?, ?, ?, ?, ?);";
            $this->pdo->prepare($consulta)
                ->execute([
                    $m->getNombre(),
                    $m->getApellido(),
                    $m->getEspecialidad(),
                    $m->getTelefono(),
                    $m->getEmail()
                ]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function Actualizar(Medico $m) {
        try {
            $consulta = "UPDATE medicos SET 
                nombre=?, 
                apellido=?, 
                especialidad=?, 
                telefono=?, 
                email=? 
                WHERE med_id=?;";
            $this->pdo->prepare($consulta)
                ->execute([
                    $m->getNombre(),
                    $m->getApellido(),
                    $m->getEspecialidad(),
                    $m->getTelefono(),
                    $m->getEmail(),
                    $m->getMed_id()
                ]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $consulta = "DELETE FROM medicos WHERE med_id=?;";
            $this->pdo->prepare($consulta)
                ->execute([$id]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}
