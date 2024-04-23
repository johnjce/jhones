<div class="container-fluid pt-5" id="service">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h2 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">En que te ayudaría</h2>
            <h2 class="position-absolute text-uppercase text-primary">Servicios</h2>
        </div>
        <div class="row pb-3">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="{{ $service->icon }} service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{ $service->name }}</h4>
                    </div>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
