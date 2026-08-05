@extends('layouts.auth')

@section('content')
<h1>Mot de passe oublié ?</h1>
<p class="account-subtitle">Saisissez votre adresse e-mail pour recevoir un lien de réinitialisation</p>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Form -->
<form action="{{route('forgot-password')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Adresse e-mail">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Réinitialiser le mot de passe</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Vous souvenez-vous de votre mot de passe ? <a href="{{route('login')}}">Se connecter</a></div>
@endsection
