<!DOCTYPE html>
<html>
@include('layouts.admin.header')

<body>

@include('layouts.admin.nav')
<div class="container-fuild">
	<div class="container-fuild">
		<div class="row">
			@include('layouts.admin.sidenav')
			<div class="col-sm-10">
				@yield('content')
			</div>
		</div>
	</div>
</div>
@yield('footer')
</body>
</html>
