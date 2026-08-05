@extends('layouts.auth')

@section('content')
<h1>Créer un compte</h1>
<p class="account-subtitle">Accédez à votre tableau de bord</p>

<!-- Form -->
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="Nom complet">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="{{old('email')}}" placeholder="Adresse e-mail">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Mot de passe">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="Confirmer le mot de passe">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Créer un compte</button>
	</div>
</form>
<!-- /Form -->
								
<div class="text-center dont-have">Vous avez déjà un compte ? <a href="{{route('login')}}">Se connecter</a></div>
@endsection


