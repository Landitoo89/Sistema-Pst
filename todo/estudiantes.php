<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Cédula</th>
                <th scope="col">Avatar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($estudiantes as $estudiante) { ?>
                <tr id="estudiante_<?php echo $estudiante['id']; ?>">
                    <th scope='row'><?php echo $estudiante['id']; ?></th>
                    <td><?php echo $estudiante['nombre']; ?></td>
                    <td> <?php echo $estudiante['edad']; ?></td>
                    <td><?php echo $estudiante['cedula']; ?></td>
                    <td>
                        <?php
                        $avatar = $estudiante['avatar'];
                        if ($avatar == '') {
                            $avatar = 'assets/imgs/sin-foto.jpg';
                        } else {
                            $avatar = "acciones/fotos_estudiante/" . $avatar;
                        }
                        ?>
                        <img class="rounded-circle" src="<?php echo $avatar; ?>" alt="<?php echo $estudiante['nombre']; ?>" width="50" height="50">
                    </td>
                    <td>
                        <a title="Ver detalles del empleado" href="#" onclick="verDetallesEmpleado(<?php echo $estudiante['id']; ?>)" class="btn btn-success">
                            <i class="bi bi-binoculars"></i>
                        </a>
                        <a title="Editar datos del empleado" href="#" onclick="editarEmpleado(<?php echo $estudiante['id']; ?>)" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a title="Eliminar datos del empleado" href="#" onclick="eliminarEmpleado(<?php echo $estudiante['id']; ?>, '<?php echo $estudiante['avatar']; ?>')" class="btn btn-danger">
            <i class="bi bi-trash"></i>
</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>