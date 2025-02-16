@extends('plantilla')
@section('contenido')

    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">

                <h2>Listado de Categorías</h2><br />

                <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                    <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Categoría
                </button>
            </div>
            <div class="card-body">
                <div class="form-group row">

                </div>
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr class="bg-primary">

                            <th>Categoría</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>categoria</td>
                            <td>descripcion</td>
                            <td>
                                <button type="button" class="btn btn-success btn-md">

                                    <i class="fa fa-check fa-2x"></i> Activo
                                </button>

                            </td>

                            <td>
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#abrirmodal">

                                    <i class="fa fa-edit fa-2x"></i> Editar
                                </button> &nbsp;
                            </td>

                            <td>


                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-lock fa-2x"></i> Desactivar
                                </button>

                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!--Inicio del modal agregar/actualizar-->
    <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>


                    <form id="guardarNuevaCategoria" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="text-input">Categoría</label>
                            <div class="col-md-9">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre de categoría"
                                    required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i>
                                Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-times fa-2x"></i>
                                Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->

    <script>
        $("#guardarNuevaCategoria").submit(function (event) {
            event.preventDefault();

            $.ajax({
                url: '/guardarNuevaCategoria',
                type: 'POST',
                data: $("form").serialize(),
                success: function (dat) {
                    alertify.alert("CATEGORIA ENVIADA", function () {
                        window.location = '/categoria';
                    });
                }
            })
        });
    </script>
@endsection