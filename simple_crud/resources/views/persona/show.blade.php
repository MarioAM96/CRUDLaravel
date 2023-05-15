@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? "{{ __('Show') Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $persona->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $persona->Cédula }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $persona->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $persona->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $persona->Fecha_de_Nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
