<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h2 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Conocimiento</h2>
            <h2 class="position-absolute text-uppercase text-primary">Mis habilidades</h2>
        </div>
        <div class="row align-items-center">
            @foreach($skills->split($skills->count()/3) as $row)
                <div class="col-md-6">
                    @foreach($row as $skill)
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                                <h6 class="font-weight-bold">{{$skill->percent}}%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100" style="background-color: {{$skill->color}}"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
