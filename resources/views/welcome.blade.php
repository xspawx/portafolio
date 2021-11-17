@extends('layouts.template')

@section ('content')


@foreach ($proyectos as $proyecto)
                                       
                                         


            <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
                        </div>
                    </div>
                   
                    
                    <div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0 text-center" >{{ $proyecto->nombre }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4 text-uppercase fs-4 ">{{ $proyecto->descripcion }}</p>

                                    
                                    <a name="Descargar" id="boton"  class="btn btn-primary   center w-33" href="{{ $proyecto->url }}" role="button"> DESCARGAR </a>

                                    

                                    <style>
                                        .btn {
justify-content: center ;
align-items: center;
margin-left:45%;


                                        }
                                    </style>

                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                        
@endforeach

@endsection