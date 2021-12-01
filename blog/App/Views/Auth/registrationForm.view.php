<?php /** @var Array $data */ ?>
<script src="validation.js"></script>
<div class="container register">
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row  justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Registrovať sa</h2>

                                <form method="post" action="?c=auth&a=registration">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Zadaj Email</label>
                                        <input type="email" id="email" class="form-control form-control-lg"
                                               name="email" required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Zadaj heslo</label>
                                        <input type="password" id="password" class="form-control form-control-lg"
                                               name="password" required>
                                    </div>


                                    <div id="submit-info">
                                        Formulár obsahuje chyby a nie je možné ho odoslať.
                                    </div>
                                    <input type="submit" value="Registrovat" id="submit">

                                    <p3 class="text-center text-muted mt-5 mb-0"><a
                                                href="?c=Auth&a=loginForm" class="fw-bold text-body"><u>Prihlásiť sa</u></a></p3>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>