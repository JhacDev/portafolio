@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? __('Show') . " " . __('Proyecto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 bg-center">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalle') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proyectos.index') }}"> {{ __('Retornar') }}</a>
                        </div>
                    </div>

                    <div class="card-body ">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $proyecto->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagen:</strong>
                                    {{ $proyecto->imagen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $proyecto->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Url:</strong>
                                    {{ $proyecto->url }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
