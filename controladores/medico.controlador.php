<?php

require_once "modelos/medico.php";

class MedicoControlador {

    private $modelo;

    public function __CONSTRUCT() {
        $this->modelo = new Medico();
    }

    public function Inicio() {
        require_once "vistas/encabezado.php";
        require_once "vistas/medicos/index.php";
        require_once "vistas/pie.php";
    }

    public function FormCrear() {
        $titulo = "Registrar";
        $m = new Medico();
        if (isset($_GET['id'])) {
            $m = $this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/medicos/form.php";
        require_once "vistas/pie.php";
    }

    public function Guardar() {
        $m = new Medico();
        $m->setMed_id(intval($_POST['ID']));
        $m->setNombre($_POST['Nombre']);
        $m->setApellido($_POST['Apellido']);
        $m->setEspecialidad($_POST['Especialidad']);
        $m->setTelefono($_POST['Telefono']);
        $m->setEmail($_POST['Email']);

        // Decide whether to insert or update based on the ID
        $m->getMed_id() > 0 ? $this->modelo->Actualizar($m) : $this->modelo->Insertar($m);

        header("location:?c=medico");
    }

    public function Borrar() {
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=medico");
    }
}
