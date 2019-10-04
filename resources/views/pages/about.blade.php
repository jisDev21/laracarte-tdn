@extends('layouts.default', ['title' => 'About'])

@section('content')

	<div class="container">
		
		<h2>What is laracarte ?</h2>
		<p>Laracarte is a cone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

		<div class="row">
			<div class="col-md6">
				<p class="alert alert-warning"><strong><i class="fas fa-exclamation-triangle"></i> This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong></p>
				<p>Fell free to help to improve the <a href="https://github.com/jisDev21/laracarte-tdn">source code</a></p>

				<hr>

				<h2>What is laracarte ?</h2>
				<p>Laramap is the website by wich Laracarte was inspired :).</p>
				<p>More info <a href="https://laramap.com/p/about">here</a>.</p>

				<hr>
	
				<h2>Wich tools and services are use in Laracarte ?</h2>
				<p>Basically it's built on Laravel &amp; Bootstrap. But here's a bunch of services used for email and other sections.</p>
				<ul>
					<li>Laravel</li>
					<li>Bootstrap</li>
					<li>Amazon S3</li>
					<li>Mandrill</li>
					<li>Google Maps</li>
					<li>Gravatar</li>
					<li>Antny Martin's Geolocation Package</li>
					<li>Michel Fortin's Markdown Parser Package</li>
					<li>Heroku</li>
				</ul>

			</div>
		</div>

	</div>

@endsection