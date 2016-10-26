@extends('layouts.business')

@section('title')
    Business Page
@endsection

@section('include_content')

<img src="img/b-banner2.png" alt="Unsplashed background img 1" style="width: 100%; margin-bottom: 10px;">

<div class="container">

	<div class="row" style="margin-top: -190px;    z-index: 9999; position: relative;">
		<span class="col s3">
			<img src="img/t-logo.png" alt=""/>
		</span>
		<span class="col s9" style="background: red;background: rgba(174, 176, 189, 0.46); text-align: center; color: white;">
			<h4><b>CAMBODIA AIR TRAFFIC SERVICES CO, LTD.</b></h4>
			<h5><b>PHNOM PENH, <span style="color: #ee6e73">CAMBODIA</span></b></h5>
		</span>
	</div>


	<div class="row">
		<ul id="dropdown1" class="dropdown-content indigo lighten-5">
		  <li><a href="#!">Add new Room & Rate</a></li>
		  <li><a href="#!">Add Business Products</a></li>
		  <li class="divider"></li>
		  <li><a href="#!">Edit contact info</a></li>
		  <li><a href="#!">Edit Business History</a></li>
		  <li class="divider"></li>
		  <li><a href="#!">Change Business Keyword</a></li>
		</ul>
		<nav>
		  <div class="nav-wrapper">
			<ul class="center hide-on-med-and-down">
			  <li><a href="sass.html">Timeline</a></li>
			  <li><a href="sass.html">About</a></li>
			  <li><a href="sass.html">Service</a></li>
			  <li><a href="sass.html">Promotion</a></li>
			  <li><a href="sass.html">Events</a></li>
			  <li><a href="sass.html">Notes</a></li>
			  <li><a href="badges.html">Contact</a></li>
			  <li><a href="badges.html">Feedback</a></li>
			  <!-- Dropdown Trigger -->
			  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Setting<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		  </div>
		</nav>
	</div>
	
	
	<div class="row">
		<div class="col s12 m3">
			<ul class="collection">
				<li class="collection-item avatar">
				  <i class="material-icons circle">contact_phone</i>
				  <span class="title">PHONE NUMBER</span>
				  <p> 855 703 136 38 <br>
					 855 703 166 98
				  </p>
				</li>
				<li class="collection-item avatar">
				  <i class="material-icons circle"></i>
				  <span class="title">EMAIL ADDRESS</span>
				  <p>pak.udomkh@gmail.com</p>
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
				  <i class="material-icons circle green">insert_chart</i>
				  <span class="title">WEBSITE</span>
				  <p>www.translat.google.com</p>
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
				  <i class="material-icons circle red">play_arrow</i>
				  <span class="title">ADDRESS</span>
				  <p>No. 18Eo, St. 468, Toul Tum Poung I, Chamkar Morn, 12310 Phnom Penh</p>
				  <img class="responsive-img" src="img/map.png" style="width: 100%; margin-top:5px;">
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
			  </ul>
		</div>
		
		
		
		<div class="col s12 m5">
			<div class="row">
			 
			 
				<form class="col s12">
					
					<div style="border-top: 1px solid #d9d1d1; background: #fcfbfd; padding-top:2px;">
						<span class="grey-text"><i class="fa fa-file-image-o fa-lg" aria-hidden="true"></i> Photos </span> |
						<span class="grey-text"><i class="fa fa-camera-retro fa-lg" aria-hidden="true"></i> Camara</span>
						<textarea class="materialize-textarea text-post" placeholder="what's your company have?"></textarea>	
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
					
				</form>
				
			</div>
			
			
			<div class="row" style="margin-top:100px;">
				<div class="col s12">
				  <div class="card">
					<div class="card-content">
					  <p>I am a very simple card. I am good at containing small bits of information.
					  I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-image">
					  <img src="http://materializecss.com/images/office.jpg">
					  <span class="card-title">Card Title</span>
					</div>
					<div class="card-action">
					  <a href="#">This is a link</a>
					</div>
				  </div>
				</div>
				
				<div class="row">
					<div class="col s12">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
						  <span class="card-title">Card Title</span>
						  <p>I am a very simple card. I am good at containing small bits of information.
						  I am convenient because I require little markup to use effectively.</p>
						</div>
						<div class="card-action">
						  <a href="#">This is a link</a>
						  <a href="#">This is a link</a>
						</div>
					  </div>
					</div>
				  </div>
				
				
				<div class="col s12">
				  <div class="card">
					<div class="card-content">
					  <p>I am a very simple card. I am good at containing small bits of information.
					  I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-image">
					  <img src="http://materializecss.com/images/yuna.jpg">
					  <span class="card-title">Card Title</span>
					</div>
					<div class="card-action">
					  <a href="#">This is a link</a>
					</div>
				  </div>
				</div>
				
			</div>
			
			
		</div>
		
		
		
		
		
		
		
		
		<div class="col s12 m4">
			<div class="row">
			
				
				<div class="col s12 m12">
					<div class="card-panel teal">
					  <span class="white-text">Community Organization in Phnom Penh, Cambodia</span>
					</div>
				</div>
							
				
			
				<div class="col s12">
				  <div class="card">
					<div class="card-content grey padding-right10-20">
					  <p>ABOUT <i class="fa fa-pencil-square-o right" aria-hidden="true"></i></p>
					</div>
					<div class="card-content">
					  <p class="grey-text darken-4"><i class="fa fa-location-arrow" aria-hidden="true"></i> No.150, st 2004, Teklark2, Tourl kok, Phnom Penh, Cambodia</p>
					  <p class="grey-text darken-4"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +855 703 136 38</p>
					  <p class="grey-text darken-4"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +855 703 136 38</p>
					  <p class="grey-text darken-4"><i class="fa fa-globe" aria-hidden="true"></i> www.aseapages.com</p>
					</div>
					
				  </div>
				</div>
				
				
				
				<div class="col s12">
				  <div class="card">
					<div class="card-content grey padding-right10-20">
					  <p>PHOTO GALLARY</p>
					</div>
					<div class="card-content">
					  <p class="grey-text darken-4"><i class="fa fa-location-arrow" aria-hidden="true"></i> No.150, st 2004, Teklark2, Tourl kok, Phnom Penh, Cambodia</p>
					  <p class="grey-text darken-4"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +855 703 136 38</p>
					  <p class="grey-text darken-4"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +855 703 136 38</p>
					  <p class="grey-text darken-4"><i class="fa fa-globe" aria-hidden="true"></i> www.aseapages.com</p>
					</div>
					
				  </div>
				</div>
				
				
				
				
				
				<div class="col s12">
				  <div class="card">
					<div class="card-content">
					  <p>I am a very simple card. I am good at containing small bits of information.
					  I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-image">
					  <img src="http://materializecss.com/images/sample-1.jpg">
					  <span class="card-title">Card Title</span>
					</div>
					<div class="card-action">
					  <a href="#">This is a link</a>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
		
		
	</div>
	

	
	
	
	
	<div class="row">
		<div class="col s12">
			<h2 class="header">Horizontal Card</h2>
			<div class="card horizontal">
			  <div class="card-image">
				<img src="http://lorempixel.com/100/190/nature/6">
			  </div>
			  <div class="card-stacked">
				<div class="card-content">
				  <p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
				  <a href="#">This is a link</a>
				</div>
			  </div>
			</div>
		</div>
	</div>
	

</div>	
	
	
	
@endsection