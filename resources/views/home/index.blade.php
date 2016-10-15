@extends('layouts.home')

@section('title')
    Business Page
@endsection

@section('include_content')


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
		<ul id="dropdown1" class="dropdown-content">
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
		<div class="col s3">
			<ul class="collection">
				<li class="collection-item avatar">
				  <img src="images/yuna.jpg" alt="" class="circle">
				  <span class="title">PHONE NUMBER</span>
				  <p> 855 703 136 38 <br>
					 855 703 166 98
				  </p>
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
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
		
		
		
		<div class="col s6">
			<div class="row">
			 
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<select>
							  <option value="" disabled selected>Choose your option</option>
							  <option value="1">Event</option>
							  <option value="2">Promotion</option>
							  <option value="3">Post</option>
							</select>
							<label>Materialize Select</label>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="file-field input-field">
						  <div class="btn">
							<span>File</span>
							<input type="file" multiple>
						  </div>
						  <div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Upload one or more files">
						  </div>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12">
						  <i class="material-icons prefix">mode_edit</i>
						  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
						  <label for="icon_prefix2">First Name</label>
						</div>
					  </div>
					  
					<button class="btn waves-effect waves-light right" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					  </button>
					  
				</form>
			</div>
			
			
			<div class="row">
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
		
		<div class="col s3">
			<div class="row">
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
	

	
	
	
	
@endsection