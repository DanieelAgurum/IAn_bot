<!-- MODAL -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content p-4 animate-modal">

            <!-- NAV TABS -->
            <ul class="nav nav-pills nav-justified mb-3" id="authTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-login" data-bs-toggle="pill" data-bs-target="#pills-login"
                        type="button" role="tab" aria-controls="pills-login" aria-selected="true">
                        Iniciar sesión
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-register" data-bs-toggle="pill" data-bs-target="#pills-register"
                        type="button" role="tab" aria-controls="pills-register" aria-selected="false">
                        Registrarse
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- LOGIN -->
                <div class="tab-pane fade show active animate-tab" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form>
                        <div class="text-center mb-3">
                            <p>Inicia sesión con:</p>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>

                        <p class="text-center">o:</p>

                        <div class="form-floating mb-4">
                            <input type="email" id="loginName" class="form-control" placeholder="Correo electrónico o usuario" required />
                            <label for="loginName">Correo electrónico o usuario</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" id="loginPassword" class="form-control" placeholder="Contraseña" required />
                            <label for="loginPassword">Contraseña</label>
                        </div>

                        <div class="row mb-4 justify-content-center">
                            <div class="col-md-6 d-flex">
                                <a href="#!">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn w-75 btn-primary btn-auth-login">Ingresar</button>
                        </div>

                        <div class="text-center mt-3">
                            <p>¿No tienes cuenta?
                                <a href="#!" data-bs-toggle="pill" data-bs-target="#pills-register">Regístrate</a>
                            </p>
                        </div>
                    </form>
                </div>

                <!-- REGISTRO -->
                <div class="tab-pane fade animate-tab" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <form>
                        <div class="text-center mb-3">
                            <p>Regístrate con:</p>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary rounded-circle mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>

                        <p class="text-center">o:</p>

                        <div class="form-floating mb-4">
                            <input type="text" id="registerName" class="form-control" placeholder="Nombre completo" required />
                            <label for="registerName">Nombre completo</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="text" id="registerUsername" class="form-control" placeholder="Nombre de usuario" required />
                            <label for="registerUsername">Nombre de usuario</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="email" id="registerEmail" class="form-control" placeholder="Correo electrónico" required />
                            <label for="registerEmail">Correo electrónico</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" id="registerPassword" class="form-control" placeholder="Contraseña" required />
                            <label for="registerPassword">Contraseña</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" id="registerRepeatPassword" class="form-control" placeholder="Repite la contraseña" required />
                            <label for="registerRepeatPassword">Confirma la contraseña</label>
                        </div>

                        <div class="form-check custom-checkbox d-flex justify-content-center mb-4">
                            <input class="form-check-input" type="checkbox" id="registerCheck">
                            <label class="form-check-label ms-2" for="registerCheck">
                                He leído y acepto los <a href="#">términos</a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn w-75 btn-primary btn-auth-register">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>