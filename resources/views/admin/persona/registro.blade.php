@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-lg-8">
        <div class="card card-outline card-sena elevation-2">
            <div class="card-body">
                <div class="col-12 mt-2 mb-4 text-center">
                    <h3 class="card-title">Registro Persona</h3>
                </div>
                <form method="POST" action="" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row justify-content-center">

                            <div class="form-group col-8">
                                <input name="identificacion" id="Identificacion" placeholder="Identificacion" type="text" class="form-control" maxlength="10" required>
                            </div>

                           <div class="form-group col-8">
                                <input name="nombres" id="Nombres" placeholder="Nombres" type="text" class="form-control" maxlength="40" required>
                            </div>

                            <div class="form-group col-8">
                                <input name="apellidos" id="Apellidos" placeholder="Apellidos" type="text" class="form-control" maxlength="40" required>
                            </div>
                            <div class="form-group col-8">
                                <input name="telefono" id="Telefono" placeholder="Telefono" type="text" class="form-control" maxlength="40" required>
                            </div>
                            <div class="form-group col-8">
                                <input name="direccion" id="Direccion" placeholder="Direccion" type="text" class="form-control" maxlength="40" required>
                            </div>
                            <div class="form-group col-8 mt-3">
                                <button class="btn w-100 btn-azul" type="submit">Registrar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
