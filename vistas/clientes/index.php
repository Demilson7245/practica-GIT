<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li>Tables</li>
                <li class="active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <div>
            <a class="btn btn-primary btn-flat" href="?c=cliente&a=FormCrear"><i class="fa fa-lg fa-plus"></i></a>
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
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($this->modelo->Listar() as $r): ?>
                            <tr>
                                <td><?=$r->cli_id?></td>
                                <td><?=$r->cli_nom?></td>
                                <td><?=$r->cli_ape?></td>
                                <td><?=$r->cli_dir?></td>
                                <td><?=$r->cli_tel?></td>
                                <td><?=$r->cli_email?></td>
                                <td>
                                    <a class="btn btn-info btn-flat" href="?c=cliente&a=FormCrear&id=<?=$r->cli_id?>"><i class="fa fa-lg fa-refresh"></i></a>
                                    <a class="btn btn-warning btn-flat" href="?c=cliente&a=Borrar&id=<?=$r->cli_id?>"><i class="fa fa-lg fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
