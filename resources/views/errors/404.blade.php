@extends('layouts.app')
@section('title', '404 - Page Not Found')
@section('content')
	<main>
		<section class="pt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<!-- Image -->
						<img src="{{ asset('assets/images/element/error404-01.svg') }}" class="h-200px h-md-400px mb-4" alt="">
						<!-- Title -->
						<h1 class="display-1 text-danger mb-0">404</h1>
						<!-- Subtitle -->
						<h2>Oh no, something went wrong!</h2>
						<!-- info -->

						<p class="mb-4">Someting wrong or this page doesn't exist.</p>
						<!-- Button -->
						<a href="{{ route('home') }}" class="btn btn-primary mb-0">Go to Homepage</a>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
