@extends('admin.template')
	@section('title')
		Halaman Admin - Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard UKM DCFC - Halaman Validasi Proposal</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')
		
		<div class="row">
			<div class="col-md-6">
				<article class="widget">
					<header class="widget__header">
						<div class="widget__title">
							<i class="pe-7f-chat"></i><h3>Messages</h3>
						</div>
						<div class="widget__config">
							<a href="#"><i class="pe-7f-refresh"></i></a>
							<a href="#" style="line-height: 68px;"><i class="pe-7g-arrow2-down"></i></a>
						</div>
					</header>

					<div class="widget__content">
						<div class="tabs">
							<input type="radio" id="tab1" name="msgs_tabs" checked>
							<label for="tab1" class="tabs__tab">Disetujui</label>
							<input type="radio" id="tab2" name="msgs_tabs">
							<label for="tab2" class="tabs__tab">Menunggu</label>
							<input type="radio" id="tab3" name="msgs_tabs">
							<label for="tab3" class="tabs__tab">Revisi</label>
							<div class="clearfix"></div>
		
					<div class="tabs__content">	

					<div class="tabs__content--1">
					@foreach($InputBahasa as $InputBahasa)
					<div class="media message">
						<figure class="pull-left rounded-image message__img">
							<img class="media-object" src="img/user1.jpg" alt="user">
						</figure>
						<div class="media-body">
							<h4 class="media-heading message__heading"> UKM Bahasa <span>{{ $InputBahasa->created_at->diffForHumans() }}</span></h4>
							<p class="message__msg">{{$InputBahasa->title}}</p>
							<input type="checkbox" class="msg-o" id="msg-o1" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7f-back pe-rotate-180"></i> <span>validasi</span></a></li>
								<li><a href="#" class="set_fav" onclick="return false;"><i class="pe-7f-star"></i> <span>Favorite</span></a></li>
								<li><a href="#" onclick="return false;"><i class="pe-7f-trash"></i> <span>Delete</span></a></li>
								
							</ul>
						</div> 
					</div>
				</div> <!-- /message -->
					@endforeach				
			</div> <!-- /tabscontent1 -->
			
			<div class="tabs__content--2">
				
				<div class="media message">
					<figure class="pull-left rounded-image message__img">
						<img class="media-object" src="img/user1.jpg" alt="user">
					</figure>
					<div class="media-body">
						<h4 class="media-heading message__heading">UKM Bahasa  <span></span></h4>
						<p class="message__msg"></p>
						<input type="checkbox" class="msg-o" id="msg-o4" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7f-back pe-rotate-180"></i> <span>Reply</span></a></li>
								<li><a href="#" class="set_fav" onclick="return false;"><i class="pe-7f-star"></i> <span>Favorite</span></a></li>
								<li><a href="#" onclick="return false;"><i class="pe-7f-trash"></i> <span>Delete</span></a></li>
								
							</ul>
						</div> 
					</div>
				</div> <!-- /message -->	
				
			</div> <!-- /tabscontent2 -->
			
			<div class="tabs__content--3">
				<div class="media message fav">
					<figure class="pull-left rounded-image message__img">
						<img class="media-object" src="img/user2.jpg" alt="user">
					</figure>
					<div class="media-body">
						<h4 class="media-heading message__heading">Joseph Lewis <span>from twitter  /  1 day ago</span></h4>
						<p class="message__msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<input type="checkbox" class="msg-o" id="msg-o6">
						<label class="message__controls--opener" for="msg-o6"><i class="pe-7s-note"></i></label>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7f-back pe-rotate-180"></i> <span>Reply</span></a></li>
								<li><a href="#" class="set_fav" onclick="return false;"><i class="pe-7f-star"></i> <span>Favorite</span></a></li>
								<li><a href="#" onclick="return false;"><i class="pe-7f-trash"></i> <span>Delete</span></a></li>
								<li><a href="#" class="close_cntrl" onclick="return false;"><i class="pe-7g-arrow2-up"></i></a></li>
							</ul>
						</div>
					</div>
				</div> <!-- /message -->				
			</div> <!-- /tabscontent3 -->
		</div> 	
	</div> <!-- /tabs -->
								

								
	</div> <!-- /widget__content -->
	</article><!-- /widget -->
	</div>

					<div class="col-md-6">
						<article class="widget">
							<header class="widget__header">
								<div class="widget__title">
									<i class="pe-7f-user"></i><h3>Members</h3>
								</div>
								<div class="widget__config">
									<a href="#"><i class="pe-7f-refresh"></i></a>
									<a href="#"><i class="pe-7s-close"></i></a>
								</div>
							</header>

							<div class="widget__content">
								<div class="members__controls">
									<div class="members__controls--total">
										Total users <span>184,036</span>
									</div>
									<div class="members__controls--order custom-dropdown">
										<select class="dropdown-select">
											<option value="1">Sort by <i style="
										content:url(img/arrow.svg); 
										width: 15px; height: 15px; 
										display: inline-block;
										vertical-align: middle;
										margin-left: 6px;
										margin-top: -3px;
									"></i></option>
											<option value="2">Name</option>
											<option value="3">Location</option>
											<option value="4">Added</option>
										</select>
									</div>
								</div>

								<div class="clearfix"></div>
								
								<div class="members__container">
									
									<div class="media message checked">
										<figure class="pull-left rounded-image message__img">
											<img class="media-object" src="img/user4.jpg" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading message__heading">Paul Robert Smith</h4>
											<p class="message__location">
												<i class="pe-7f-map-marker"></i>  Manhattan, United States
											</p>

											<a class="c-btn--check"></a>
											<input type="checkbox" class="btn-more-check" id="more1">
											<label class="c-btn--more" for="more1"></label>

											<div class="message__details">
												<table>
													<tr>
														<td>Email:</td>
														<td>info@contact.com</td>
													</tr>
													<tr>
														<td>Site:</td>
														<td>www.companyname.com</td>
													</tr>
													<tr>
														<td>Company:</td>
														<td>CompanyName</td>
													</tr>
													<tr>
														<td>Plan:</td>
														<td>Premium</td>
													</tr>
													<tr>
														<td>Messages:</td>
														<td><span class="badge badge--line badge--blue">16</span></td>
													</tr>
												</table>
											</div>

										</div>
									</div>

									<div class="media message checked">
										<figure class="pull-left rounded-image message__img">
											<img class="media-object" src="img/user1.jpg" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading message__heading">Victoria Campel</h4>
											<p class="message__location">
												<i class="pe-7f-map-marker"></i>  Barcelona, Spain
											</p>

											<a class="c-btn--check"></a>
											<input type="checkbox" class="btn-more-check" id="more2" checked>
											<label class="c-btn--more" for="more2"></label>

											<div class="message__details">
												<table>
													<tr>
														<td>Email:</td>
														<td>info@contact.com</td>
													</tr>
													<tr>
														<td>Site:</td>
														<td>www.companyname.com</td>
													</tr>
													<tr>
														<td>Company:</td>
														<td>CompanyName</td>
													</tr>
													<tr>
														<td>Pan:</td>
														<td>Premium</td>
													</tr>
													<tr>
														<td>Messages:</td>
														<td><span class="badge badge--line badge--blue">16</span></td>
													</tr>
												</table>
											</div>

										</div>
									</div>

									<div class="media message">
										<figure class="pull-left rounded-image message__img">
											<img class="media-object" src="img/user2.jpg" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading message__heading">Joseph Lewis</h4>
											<p class="message__location">
												<i class="pe-7f-map-marker"></i>  London, United Kingdom
											</p>

											<a class="c-btn--check"></a>
											<input type="checkbox" class="btn-more-check" id="more3">
											<label class="c-btn--more" for="more3"></label>

											<div class="message__details">
												<table>
													<tr>
														<td>Email:</td>
														<td>info@contact.com</td>
													</tr>
													<tr>
														<td>Site:</td>
														<td>www.companyname.com</td>
													</tr>
													<tr>
														<td>Company:</td>
														<td>CompanyName</td>
													</tr>
													<tr>
														<td>Pan:</td>
														<td>Premium</td>
													</tr>
													<tr>
														<td>Messages:</td>
														<td><span class="badge badge--line badge--blue">16</span></td>
													</tr>
												</table>
											</div>

										</div>
									</div>

								</div> <!-- /members__container -->
								
								<div class="clearfix"></div>

								<div class="members__footer"><button class="members__load-more"><span>+</span> Load More...</button><button class="members__search">
										<i class="pe-7s-graph2"></i> Analytics
									</button>
								</div>

							</div>
						</article><!-- /widget -->
					</div>


				</div> <!-- /row -->
    @endsection
