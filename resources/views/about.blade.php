@extends('app.app')

@section('title')
{!!$title!!}
@endsection
@section('contain')

<div class="container">
	<div class="row m-2 p-2">
		<h1 class="text-dark">{!!$page!!}</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie orci eget consectetur mattis. Curabitur sagittis mauris massa, vitae elementum sem dignissim hendrerit. Nullam ultrices dui non ornare tempus. Sed porttitor nibh quam, nec semper dolor fringilla non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel elementum mauris. Quisque eleifend turpis nisl, eu convallis ante lacinia ac. Integer a metus non ligula volutpat eleifend sit amet quis purus. Mauris ac risus in justo tempus dictum. Donec vulputate interdum pellentesque. Phasellus euismod tortor ut felis elementum, sed porta ligula dignissim. Duis aliquam felis neque, a eleifend tortor suscipit vel. Quisque iaculis sem at diam cursus, ut dapibus purus ullamcorper. Curabitur ac tempus odio, non condimentum arcu.</p>
	</div>
</div>

@endsection