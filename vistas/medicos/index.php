<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1>Tabla de Médicos</h1>
            <ul class="breadcrumb side">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Tablas</li>
                <li class="active"><a href="#">Tabla de Médicos</a></li>
            </ul>
        </div>
        <div>
            <a class="btn btn-primary btn-flat" href="?c=medico&a=FormCrear"><i class="fa fa-lg fa-plus"></i> Añadir Médico</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Especialidad</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $medicos = $this->modelo->Listar();
                        if (empty($medicos)): ?>
                            <tr>
                                <td colspan="8" class="text-center">No hay médicos registrados.</td>
                            </tr>
                        <?php else: 
                            foreach ($medicos as $r): ?>
                                <tr>
                                    <td><?=$r->medico_id?></td>
                                    <td><?=$r->nombre?></td>
                                    <td><?=$r->apellido?></td>
                                    <td><?=$r->especialidad?></td>
                                    <td><?=$r->telefono?></td>
                                    <td><?=$r->email?></td>
                                    <td><?=$r->estado?></td>
                                    <td>
                                        <a class="btn btn-info btn-flat" href="?c=medico&a=FormCrear&id=<?=$r->med_id?>"><i class="fa fa-lg fa-refresh"></i> Editar</a>
                                        <a class="btn btn-warning btn-flat" href="?c=medico&a=Borrar&id=<?=$r->med_id?>" onclick="return confirm('¿Estás seguro de eliminar este médico?');"><i class="fa fa-lg fa-trash"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; 
                        endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
