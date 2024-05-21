

<div>
    <div class="center-text">
        <h1 class="text-style text-center p-2 mb-10"> Preguntas Frecuentes</h1>

        <h4 class="p-2">
            ¿Tienes preguntas acerca de Kambista? ¡Esperamos que esta lista de preguntas frecuentes pueda ayudarte!
        </h4>

        <div>
            <h1 class="p-2"> Cambio </h1>
        </div>
   
        {{-- dasasd --}} 

            <div class="accordion custom-accordion" id="custom-accordion-one">
                @foreach ($HomeHelps as $key => $HomeHelp)
                    <div class="card mb-2">
                        <div class="" id="heading{{$key}}">
                            <h5 class="m-0">
                                <a class="custom-accordion-title d-block vc_tta-panel-title hoverable-none btn text-truncate"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true"
                                    aria-controls="collapse{{$key}}">
                                    {{$HomeHelp->title}}
                                    <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                </a>
                            </h5>
                        </div>
            
                        <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}"
                            data-bs-parent="#custom-accordion-one">
                            <div class="card-body">
                                <p>{!! $HomeHelp->body !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
     
            

     {{--        <div class="card mb-0">
                <div class="card-header" id="headingFive">
                    <h5 class="m-0">
                        <a class="custom-accordion-title collapsed d-block" data-bs-toggle="collapse"
                            href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Q. Can this theme work with WordPress? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        ...
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-header" id="headingSix">
                    <h5 class="m-0">
                        <a class="custom-accordion-title collapsed d-block" data-bs-toggle="collapse"
                            href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Q. How do I get help with the theme? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        ...
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-header" id="headingSeven">
                    <h5 class="m-0">
                        <a class="custom-accordion-title collapsed d-block" data-bs-toggle="collapse"
                            href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Q. Will you regularly give updates of Hyper ? <i
                                class="mdi mdi-chevron-down accordion-arrow"></i>
                        </a>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#custom-accordion-one">
                    <div class="card-body">
                        ...
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- dasasd --}}

    </div>

</div>