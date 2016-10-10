@extends('layouts.business')

@section('title')
    Business Page
@endsection

@section('include_content')
    <div class="row">
			<div class="col s8">
				<img src="img/b-name.png">
			</div>
			
			<div class="col s4">
				<img class="responsive-img" src="img/socail.png" style="width: 100%; margin-top:5px;">
				<p class="center blue-text darken-4" style="margin-top: -5px;">Shar this page</p>
			</div>
		</div>
		
		
		<div class="row z-depth-2">
			<div class="col s8">
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col s3"><a class="active" href="#inbox">Home</a></li>
						<li class="tab col s3"><a href="#unread">Items</a></li>
					</ul>
				</div>
				<div id="inbox" class="col s12">
					<img class="responsive-img" src="img/b-content.png" style="width: 100%; margin-top: 15px;">
					<img class="responsive-img" src="img/b-photo.png" style="width: 100%; margin-top: 15px;">
					<img class="responsive-img" src="img/b-additional.png" style="width: 100%; margin-top: 15px;">
					<img class="responsive-img" src="img/b-comment.png" style="width: 100%; margin-top: 15px;">
				</div>
				<div id="unread" class="col s12">Unread</div>
			</div>
			
			<div class="col s4">
				<img class="responsive-img" src="img/b-contact.png" style="width: 100%">
				<img class="responsive-img" src="img/b-map.png" style="width: 100%">
				<img class="responsive-img" src="img/b-open-h.png" style="width: 100%">
				<img class="responsive-img" src="img/b-brochure.png" style="width: 100%">
			</div>
		</div>
@endsection