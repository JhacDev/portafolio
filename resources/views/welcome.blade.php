@extends('layouts.template')
@push('css')   
@endpush
@section('content')
    {{-- mostramos datos de prueba --}}
    @foreach ($proyectos as $proyecto)
        <tr>
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}" >
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid portfolio-image" src="{{ $proyecto->imagen }}" alt="..." />
                    <h4 class="portfolio-modal-title text-center text-uppercase mb-0">{{ $proyecto->nombre }}</h4>
                </div>
            </div>
            <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5 img-custom portfolio-image" src="{{ $proyecto->imagen }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">{{ $proyecto->descripcion }}</p>
                                    <a href="{{ $proyecto->url }}" class="btn btn-primary">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Visitar Proyecto
                                    </a>
                                    {{-- <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </tr>
    @endforeach
@endsection
