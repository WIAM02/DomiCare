<!DOCTYPE html>
<html lang="en">

    <x-navbar>
        <div class="container py-md-5">
            <div class="row align-items-center">
                <div class="col-lg-7 py-3 py-md-5">
                    <h1 class="display-3">Remember Writing?</h1>
                    <p class="lead text-muted">Are you sick of short tweets and impersonal &ldquo;shared&rdquo; posts
                        that are reminiscent of the late 90&rsquo;s email forwards? We believe getting back to actually
                        writing is the key to enjoying the internet again.</p>
                </div>
                <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted mb-1 mr-3"><small>Choisir Status :</small></label>
                            <br>
                            <input type="radio" name="user_type" id="client" value="client"
                                @if (old('user_type') == 'client' || !old('user_type')) checked @endif>
                            <label for="client" class="mb-1 mr-4">Client</label>
                            <input type="radio" name="user_type" id="partenaire" value="partenaire"
                                @if (old('user_type') == 'partenaire') checked @endif>
                            <label for="partenaire" class="mb-1">Partenaire</label>
                        </div>

                        <div class="form-group">
                            <label for="prenom-register" class="text-muted mb-1"><small>Prénom</small></label>
                            <input value="{{ old('prenom') }}" name="prenom" id="prenom-register" class="form-control"
                                type="text" autocomplete="off" placeholder="Votre prénom" />
                        </div>

                        <div class="form-group">
                            <label for="nom-register" class="text-muted mb-1"><small>Nom</small></label>
                            <input value="{{ old('nom') }}" name="nom" id="nom-register" class="form-control"
                                type="text" autocomplete="off" placeholder="Votre nom" />
                        </div>


                        <div class="form-group">
                            <label for="age-register" class="text-muted mb-1"><small>Age</small></label>
                            <input value="{{ old('age') }}" name="age" id="age-register" class="form-control"
                                type="number" min="0" max="120" autocomplete="off"
                                placeholder="Votre age" />
                        </div>

                        <div class="form-group">
                            <label for="telephone-register" class="text-muted mb-1"><small>Télephone</small></label>
                            <input value="{{ old('telephone') }}" name="telephone" id="telephone-register"
                                class="form-control" type="tel" autocomplete="off" pattern="[+]?[0-9]+"
                                placeholder="Exemple: +212670824364 or 0670824364" />
                        </div>

                        <div class="form-group">
                            <label for="ville-register" class="text-muted mb-1"><small>Ville</small></label>
                            <select class="form-control" name="ville" id="ville-register">
                                <option value="{{ old('ville') }}" selected hidden>
                                    {{ old('ville') ? old('ville') : 'Ville de résidence' }}</option>
                                <option value="Tetouan">Tetouan</option>
                                <option value="Tanger">Tanger</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Rabat">Rabat</option>
                                <option value="Agadir">Agadir</option>
                            </select>
                            @error('ville')
                                <p class="m-0 small alert alert-danger shadow-sm"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                            <input value="{{ old('email') }}" name="email" id="email-register" class="form-control"
                                type="text" placeholder="Nom@example.com" autocomplete="off" />
                            @error('email')
                                <p class="m-0 small alert alert-danger shadow-sm"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                            <input value="{{ old('username') }}" name="username" id="username-register"
                                class="form-control" type="text" placeholder="Choisir nom d'utilisateur"
                                autocomplete="off" />
                            @error('username')
                                <p class="m-0 small alert alert-danger shadow-sm"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                            <input name="password" id="password-register" class="form-control" type="password"
                                placeholder="Créer mot de passe" />
                            @error('password')
                                <p class="m-0 small alert alert-danger shadow-sm"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm
                                    Password</small></label>
                            <input name="password_confirmation" id="password-register-confirm" class="form-control"
                                type="password" placeholder="Confirmer mot de passe" />
                            @error('password_confirmation')
                                <p class="m-0 small alert alert-danger shadow-sm"> {{ $message }} </p>
                            @enderror
                        </div>

                        <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for
                            OurApp</button>
                    </form>
                </div>
            </div>
        </div>
    </x-navbar>

</html>
