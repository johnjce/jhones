<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h2 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Calidad</h2>
            <h2 class="position-absolute text-uppercase text-primary">Educación & Experiencia</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">Mis Estudios</h3>
                <div class="qualification-border">
                    @foreach ($educations as $education)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $education->title }}</h5>
                            <p class="mb-2"><strong>{{ $education->association }}</strong> | <small>{{ $education->from }} - {{ $education->to }}</small></p>
                            {!! $education->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Mi Experiencia</h3>
                <div class="qualification-border">
                    @foreach ($experiences as $experience)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $experience->title }}</h5>
                            <p class="mb-2"><strong>{{ $experience->association }}</strong> | <small>{{ $experience->from }} - {{ $experience->to }}</small></p>
                            {!! $experience->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
