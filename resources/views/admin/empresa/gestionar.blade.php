@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="card-title mb-4">Gestionar Empresas</h3>
    </div>

</div>
<div class="row justify-content-center">
    <div class="col-12">
        @if(count($empresas)>=1)
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Empresa</th>
                                    <th class="text-center">NIT</th>
                                    <th class="text-center">Dirección</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($empresas as $empresa)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$empresa->empresa}}</td>
                                        <td class="text-center">{{$empresa->nit}}</td>
                                        <td class="text-center">{{$empresa->direccion}}</td>
                                        <td class="text-center">{{$empresa->telefonos}}</td>

                                        <td class="text-center align-middle">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-6">
                                                    <a href="" type="button">
                                                        <i class="fas fa-edit" data-toggle="tooltip" title="Actualizar Empresa"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{$empresas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h4 class="mt-5 text-center">No hay empresas registradas</h4>
        @endif
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
