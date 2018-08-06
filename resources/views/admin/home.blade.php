@extends('admin.template')
	@section('title')
		Halaman Admin
	@endsection

	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')

	<div class="col-md-12">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7f-menu"></i><h3>Media Table</h3>
				</div>
				<div class="widget__config">
					<a href="#"><i class="pe-7s-plus"></i></a>
				</div>
			</header>
			
			<div class="widget__content table-responsive">
				
				<table class="table table-striped media-table">
				<thead>
					<tr>
						<th width="270">Post Description</th>
						<th width="120">Date</th>
						<th>Post Info</th>
						<th>Del</th>
					</tr>
				</thead>
				<tbody>

						<tr class="spacer"></tr>
					<tr>
						<td>
							<div class="media">
								<figure class="pull-left post__img">
									<img class="media-object" src="img/post3.jpg" alt="user">
								</figure>
								<div class="media-body post_desc">
									<h3>Wood Burning Logo</h3>
									<p>A fresh looking wood...</p>
									<button class="btn blue btn-sm">Edit</button>
								</div>
							</div>
						</td>
						<td>
							<p class="post__date">19 Jan, 2014 <br>19:53</p>
						</td>
						<td class="not-padding">
							<p class="post__info">A fresh looking wood burning psd logo mockup with a pyrogravure art style to create burn marks of your design…</p>
						</td>
						<td>
							<a href="#" onclick="return false;" class="post__del"><i class="pe-7f-close"></i></a>
						</td>
					</tr>					
				</tbody>
				</table>				
			</div> <!-- /widget__content -->
		</article><!-- /widget -->
	</div>
	
    @endsection
