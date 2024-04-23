    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h2 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Galería</h2>
                <h2 class="position-absolute text-uppercase text-primary">Mi Portfolio</h2>
            </div>
            <div class="row portfolio-container">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{$portfolio->category->name }}">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="{{ asset("storage/$portfolio->image") }}" alt="imagen-logo">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="{{ asset("storage/$portfolio->image") }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                                </a>
                                <a href="{{ $portfolio->project_url }}" data-lightbox="portfolio">
                                    <i class="fa-solid fa-link text-white" style="margin-left:20px; font-size: 50px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
