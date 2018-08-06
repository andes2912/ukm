@extends('dcfc.template')
	@section('title')
		Halaman Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard UKM Dcfc</span>
					</h1>
					
				</div>
				
	@endsection


    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>News Update</h3>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
						<a href="#"><i class="pe-7s-close"></i></a>
					</div>
				</header>
							
				<div class="widget__content table-responsive">
								
					<table class="table table-striped media-table">
						<thead>
							<tr>
								<th width="270">Post Description</th>
								<th width="120">Date</th>
								<th>Post Info</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="spacer"></tr>
							<tr>
								<td>
									<div class="media">
										<figure class="pull-left post__img">
											<img class="media-object" src="img/post1.jpg" alt="user">
										</figure>
										<div class="media-body post_desc">
											<h3>Gravity Psd B-Cards</h3>
											<p>A classic approach...</p>
										</div>
									</div>
								</td>
									<td>
										<p class="post__date">26 Feb, 2014 <br>15:20</p>
									</td>
									<td>
										<p class="post__info">A classic approach to our gravity series of psd business cards mockup which can be used for both vertical...</p>
									</td>
									<td>
										<a href="#" onclick="return false;" class="post__del"><i class="pe-7f-close"></i></a>
									</td>
							</tr>
							<tr class="spacer"></tr>

						</tbody>
					</table>
				</div> <!-- /widget__content -->
			</article><!-- /widget -->
		</div>
    @endsection
