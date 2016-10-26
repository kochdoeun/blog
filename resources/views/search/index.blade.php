@extends('layouts.business')

@section('title')
    Business Page
@endsection

@section('include_content')


<div class="container">


	<div class="row center" style="margin-top: 35px;">
		<h5>You are searching for "require little markup to use effectively"</h5>
	</div>
	
	
	<div class="row">
		<div class="col s12 m3">
			<div class="card">
				<div class="card-content">
					<h6>REFINE YOUR SEARCH</h6>
					<hr/>
					<img onclick="openMap()" src="/img/b-map.png" style="width:100%; height: 70px;"/>
					<script>
						function openMap(){
							document.getElementById("allb-map").style.display="block";
							//$("#allb-map").css("display":"block");
						}
					</script>
				</div>
			</div>
			
			<div class="card">
				<div class="card-content">
					<h6>REFIND BY TOP COUNTRY</h6>
					<hr/>
					<div>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-content">
					<h6>TOP BUSINESS CATEGORY</h6>
					<hr/>
					<div>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-content">
					<h6>TOP BUSINESS KEYWORD</h6>
					<hr/>
					<div>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
						<a href="">Cambodia</a><br/>
						<a href="">Vietname</a><br/>
						<a href="">Lao</a><br/>
						<a href="">Thailand</a><br/>
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		<div class="col s12 m9">
		
			<div class="row">
		
				<div id="allb-map" style="display:none" class="m12">
					<img src="/img/map.png" style="width: 100%;"/>
				</div>
		
		
				<div class="col s12 m8">		
					<div class="row">
						<div class="card">
							<div class="card-content">
								<h6 class="center">29 BUSINESS ARE FOUND ON GOONPAGES</h6>		
								<hr/>
								<div class="center">
									<a href="">Business Location</a> | 
									<a href="">Business Products</a>
								</div>
								<hr/>
								
								
								<?php for($i=0; $i<12; $i++){ ?>
								
								<a href="http://dev.blog.com/bpage" style="display: block; color: rgba(14, 14, 14, 0.95); background: rgba(236, 227, 227, 0.15); margin: -2px; padding: 0 9px; border: 1px solid rgba(146, 134, 134, 0.16); margin-top: 10px; background-color: white;">
									<div class="row">
										<div class="col s3">
											<img src="img/t-logo.png" style="    width: 100%; border: 1px solid rgba(236, 229, 229, 0.24); border-radius: 2px; margin-top: 7px;"/>
										</div>
										<div class="col s9" style="padding: 0">
											<h6>ASEAPAGES BUSINESS DIRECTORY CO,LTD.</h6>
											<p style="line-height: 1.7;">Site map Contact Us About Us Site map Contact Us About Us Our Vision Our Mission Connect Facebook Yourtube Link-in Twitter </p>
										</div>
									</div>
									<div class="row" style="margin:-20px -10px 0 -10px; background: rgba(239, 234, 243, 0.34);">
										<div class="s12 center">
											PHNOM PENH - CAMBODIA
										</div>
									</div>
								</a>
								<?php } ?>
								
								
							</div>
						</div>
					</div>
					
					<div class="row center">
						  <ul class="pagination">
							<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
							<li class="active"><a href="#!">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						  </ul>
					</div>
					
				</div>
			
			
			
			
			
				
				<div class="col s12 m4">
			
					<div class="row">
						
						<div class="col m12">
						  <div class="card right">
							<div class="card-content right">
								<i class="material-icons circle green">insert_chart</i>
								<h6>A DEDICATED PAGE FOR YOUR COMPANY</h6>
								<a class="waves-effect blue-grey lighten-1 btn right">ADD YOUR COMPANY</a>
							</div>
						  </div>
						</div>
					
						<div class="col m12">
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
						
						
						<div class="col m12">
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