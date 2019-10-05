@extends('layouts.default', ['title' => 'Contact'])

@section('content')

	<div class="container">
		
		<div class="row justify-content-md-center">
			<div class="col-md-8 col-sd-10">
				<h2>Get in touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:jis@jisdev.com">ask for help</a>.</p>

				<form action="#" method="POST">
					
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="message" class="control-label sr-only">message</label>
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"></textarea>
					</div>

					<div class="form-group">
						<button class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
					</div>

				</form>

			</div>
		</div>

	</div>

@endsection