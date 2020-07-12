@if (Session::has('success'))
<div class="button is-primary m-l-25" role="alert">
	<strong>Başarılı: </strong> {{Session::get('success') }}
</div>
@endif

@if (count($errors) > 0)
<div class="button is-danger m-l-25" role="alert">
	<strong>Hata: </strong>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }} </li>
		@endforeach
	</ul>
</div>
@endif