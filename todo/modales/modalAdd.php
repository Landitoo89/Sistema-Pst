    <div class="modal fade" id="agregarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Registrar Nuevo Estudiante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEmpleado" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cédula</label>
                            <input type="text" name="cedula" class="form-control" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Seleccione la edad</label>
                                <select class="form-select" name="edad" required>
                                    <option value=""> Seleccione </option>
                                    <?php
                                    for ($i = 10; $i <= 18; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    } ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Sexo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo_m" value="Masculino" checked>
                                    <label class="form-check-label" for="sexo_m">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo_f" value="Femenino">
                                    <label class="form-check-label" for="sexo_f">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="number" name="telefono" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Seleccione el Año</label>
                            <select name="ano" class="form-select" required>
                                <option selected value="">Seleccione</option>
                                <?php
                                $anos = array(
                                    "1er",
                                    "2do",
                                    "3er",
                                    "4to",
                                    "5to",
                                );
                                foreach ($anos as $ano) {
                                    echo "<option value='$ano'>$ano</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Seleccione La seccion</label>
                            <select name="seccion" class="form-select" required>
                                <option selected value="">Seleccione</option>
                                <?php
                                $secciones = array(
                                    "A",
                                    "B",
                                    "C",
                                    "D",
                                );
                                foreach ($secciones as $seccion) {
                                    echo "<option value='$seccion'>$seccion</option>";
                                }
                                ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Fecha de Ingreso</label>
                            <input type="date" name="fecha_registro" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre Del Representante</label>
                            <input type="text" name="nombre_representante" class="form-control" />
                        </div>
                        <div class="mb-3 mt-4">
                            <label class="form-label">Cambiar Foto del estudiantes</label>
                            <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg" />
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn_add" onclick="registrarEmpleado(event)">
                                Registrar nuevo estudiantes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>