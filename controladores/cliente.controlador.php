<?php

require_once "modelos/cliente.php";

class ClienteControlador {

    private $modelo;

    public function __CONSTRUCT() {
        $this->modelo = new Cliente();
    }

    public function Inicio() {
        require_once "vistas/encabezado.php";
        require_once "vistas/clientes/index.php";
        require_once "vistas/pie.php";
    }

    public function FormCrear() {
        $titulo = "Registrar";
        $c = new Cliente();
        if (isset($_GET['id'])) {
            $c = $this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/clientes/form.php";
        require_once "vistas/pie.php";
    }

    public function Guardar() {
        $c = new Cliente();
        $c->setCli_id(intval($_POST['ID']));
        $c->setCli_nom($_POST['Nombre']);
        $c->setCli_ape($_POST['Apellido']);
        $c->setCli_dir($_POST['Direccion']);
        $c->setCli_tel($_POST['Telefono']);
        $c->setCli_email($_POST['Email']);

        $c->getCli_id() > 0 ?
        $this->modelo->Actualizar($c) :
        $this->modelo->Insertar($c);

        header("location:?c=cliente");
    }

    public function Borrar() {
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=cliente");
    }

}
