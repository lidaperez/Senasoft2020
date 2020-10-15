@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="card-title mb-4">Gestionar Personas</h3>
    </div>

</div>
<div class="row justify-content-center">
    <div class="col-12">
        @if(count($personas)>=1)
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Identificacion</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">Direccion</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($personas as $persona)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$persona->identificacion}}</td>
                                        <td class="text-center">{{$persona->nombres}}</td>
                                        <td class="text-center">{{$persona->apellidos}}</td>
                                        <td class="text-center">{{$persona->telefono}}</td>
                                        <td class="text-center">{{$persona->direccion}}</td>

                                        <td class="text-center align-middle">
                                            <div class="row justify-content-center text-center">
                                                <!-- <div class="col-3">
                                                    <a href="" type="button">
                                                        <i class="fas fa-eye" data-toggle="tooltip" title="Detalle Persona"></i>
                                                    </a>
                                                </div> -->
                                                <div class="col-3">
                                                    <a href="" type="button">
                                                        <i class="fas fa-edit" data-toggle="tooltip" title="Actualizar Persona"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{$personas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h4 class="mt-5 text-center">No hay personas registradas</h4>
        @endif
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
