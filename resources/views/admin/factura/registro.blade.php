@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-lg-8">
        <div class="card card-outline card-sena elevation-2">
            <div class="card-body">
                <div class="col-12 mt-2 mb-4 text-center">
                    <h3 class="card-title">Registro Factura</h3>
                </div>
                <form method="POST" action="{{route('factura.store')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row justify-content-center">
                        <div class="form-group col-8">
                            <input name="creado" placeholder="Creado" type="hidden" class="form-control" value="0">
                        </div>

                        <div class="form-group col-8">
                            <input name="numero_factura" placeholder="Numero de factura" type="number" class="form-control" maxlength="10" required>
                        </div>

                        <div class="form-group col-8">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled >Seleccione Producto</option>
                                <option>Producto 1</option>
                            </select>
                        </div>

                        <div class="form-group col-8">
                            <input name="cantidad" placeholder="Cantidad Producto" type="number" class="form-control" maxlength="10" required>
                        </div>

                        <div class="form-group col-8">
                            <input name="medio_pago" placeholder="Medio Pago" type="text" class="form-control" maxlength="40" required>
                        </div>
                        <div class="form-group col-8">
                            <input name="total" placeholder="Total" type="number" class="form-control" maxlength="40" required>
                        </div>
                        <div class="form-group col-8">
                            <label>IVA</label>
                            <input name="iva_total" class="form-control" value="19%" disabled>
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
