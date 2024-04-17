<div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contacto</h1>
            <h1 class="position-absolute text-uppercase text-primary">Contáctame</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    @if (Session::has('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        <br>
                    @endif
                    <form id="contactForm" method="POST" action="{{ route('contact') }}">
                        @csrf
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Tu Nombre"
                                       required name="name" value="{{old('name')}}"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Tu Email" value="{{old('email')}}"
                                       required name="email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Asunto" value="{{old('subject_mail')}}"
                                   required name="subject_mail"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Mensaje" name="content"
                                          required>{{old('content')}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Contactar</button>
                        </div>
                        @if ($errors->any())
                            <br>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
