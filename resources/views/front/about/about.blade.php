<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">John es...</h1>
            <h1 class="position-absolute text-uppercase text-primary">Quien soy</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="{{ asset("storage/$setting->about_photo") }}" alt="">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">{{ $setting->about_title }}</h3>
                <p>{{ $setting->about_description }}</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2"><h6>Nombre: <span class="text-secondary">{{$user->name}}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{$user->experience}} años</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Teléfono: <span class="text-secondary">{{$user->phone}}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{$user->email}}</span></h6></div>
                </div>
            </div>
        </div>
    </div>
</div>
