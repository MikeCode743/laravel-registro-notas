@extends('layouts.app')

@section('headers')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('GESTION DE GRADOS') }}</div>

                    <div class="card-body text-center">
                        {{ __('Pantalla para crear nuevo registro de grados') }}
                    </div>
                </div>

                <div class="my-4">
                    <form method="POST" action="/grados">


                        @csrf

                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Seleccione...</option>
                                @foreach ($lista_anio_escolar as $item)
                                <option selected>{{$item->FECHA}}</option>
                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fecha_inicio">Fecha de inicio de periodo escolar</label>
                            <input type="text" class="form-control datepickers" id="fecha_inicio"
                                aria-describedby="fechaInicioHelp" placeholder="dd/mm/yyyy">
                            <small id="emailHelp" class="form-text text-muted">Fecha de inicio.</small>
                        </div>

                        <div class="form-group">
                            <label for="fecha_fin">Fecha de finalizacion de periodo escolar</label>
                            <input type="text" class="form-control datepickers" id="fecha_fin"
                                aria-describedby="fechaFinHelp" placeholder="dd/mm/yyyy">
                            <small id="emailHelp" class="form-text text-muted">Fecha de finalizacion.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Nuevo Año Escolar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <script type="text/javascript">
        $(".datepickers").flatpickr({
            "locale": "es"
        });
    </script>
@endsection
