@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="card-title mb-4">Gestionar Bodega</h3>
    </div>

</div>
<div class="row justify-content-center">
    <div class="col-12">
        @if(count($bodegas)>=1)
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Bodega</th>
                                    <th class="text-center">Ciudad</th>
                                    <th class="text-center">Direccion</th>
                               
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($bodegas as $bodega)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$bodega->bodega}}</td>
                                        <td class="text-center">{{$bodega->ciudad}}</td>
                                        <td class="text-center">{{$bodega->direccion}}</td>

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
                            {{$bodegas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h4 class="mt-5 text-center">No hay bodegas registradas</h4>
        @endif
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection

