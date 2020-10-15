@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-lg-8">
        <div class="card card-outline card-sena elevation-2">
            <div class="card-body">
                <div class="col-12 mt-2 mb-4 text-center">
                    <h3 class="card-title">proveedor</h3>
                </div>
                <form method="POST" action="{{route('proveedor.store')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row justify-content-center">

                        <input id="id_empresa" name="id_empresa" type="hidden" class="form-control" value="{{Auth::user()->id_empresa}}">

                            <div class="form-group col-8">
                                <input id="Razon social" name="razon_social" placeholder="Razon social" type="text" class="form-control" maxlength="10" required autofocus>
                            </div>
                            <div class="form-group col-8">
                                <input id="Nit" name="nit" placeholder="NIT" type="number" class="form-control" maxlength="10" required>
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
