@extends('layouts.auth')

@section('content')
<h1>Connexion</h1>
<p class="account-subtitle">Accédez à votre tableau de bord</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Adresse e-mail">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Mot de passe">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block" type="submit">Se connecter</button>
	</div>
</form>
<!-- /Form -->

{{-- <div class="text-center forgotpass"><a href="{{route('forgot-password')}}">Forgot Password?</a></div> --}}

<div class="text-center dont-have">Vous n'avez pas de compte ? <a href="{{route('register')}}">Créer un compte</a></div>
@endsection

