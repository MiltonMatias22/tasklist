<!-- route to layout -->
@extends('layouts.website')
<!-- subtitle page -->
@section('subtitle',  'Contact')
<!-- content from layout -->
@section('content')

<header class="pagehead">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Contato</h1>
				<p>Envie-nos uma mensagem através do formulário!</p>
			</div>
		</div>
	</div>
</header>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Formulário</h2>
				<hr>
				<form class="" action="{!! route('contact.send') !!}" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nome" name="name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone" name="phone">
					</div>
					<div class="form-group">
						<textarea class="form-control" col="30" row="10" name="menssage"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control btn btn-success" value="Enviar" >
					</div>

					<!--
						* Anti CSRF-(Cross-Site Request Forgery) attack
					-->
					{{ csrf_field() }}

				</form>
			</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
					mollitia consequuntur a, ratione quia eius vero, explicabo aliquam
					quasi accusantium eos reprehenderit culpa, iste possimus animi dolores
					perspiciatis voluptate nulla libero quidem soluta nobis cupiditate id.
					At, natus, labore! Saepe cupiditate accusantium quas similique,
					assumenda consequatur, nesciunt velit explicabo officiis.
				</p>
			</div>
		</div>
	</div>
</section>

@endsection
