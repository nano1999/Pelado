@yield('admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	@if(Auth::user()->hasRole('profesor') || Auth::user()->hasRole('admin'))
		@yield('subcontent')
	@else
		<script>window.location = "/login";</script>
	@endif
