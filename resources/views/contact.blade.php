@extends('master')
@section('title', 'contact')
@section('content')

            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Contactez nous</h1>
                            <p class="lead fw-normal text-muted mb-0">Travaillons ensemble!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                             
                            @isset($data)
                            <p><strong>Nom : </strong> {{ $data->nom }} </p>
                            <p><strong>Telehpone : </strong> {{ $data->telephone }} </p>
                            <p><strong>Email : </strong> {{ $data->email }} </p>
                            <p><strong>Message : </strong> {{ $data->message }} </p>
                            @else

                                <form method="post">
                                @csrf
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input name="nom" class="form-control" id="name" type="text" placeholder="Enter votre nom..." data-sb-validations="required" />
                                        <label for="nom">Nom Complet</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">un nom est obligatoire.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Adresse Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">un email est obligatoire.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email pas valide.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input name="telephone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Telephone</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">un numero est obligatoire.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea name="message" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">un message est obligatoire.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">formulaire envoyera avec succes!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">erreur envoie du message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Envoyer</button></div>
                                </form>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @section('js')
          <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        @endsection
        @endsection