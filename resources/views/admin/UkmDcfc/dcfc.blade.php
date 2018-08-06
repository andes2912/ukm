@extends('admin.template')
	@section('title')
		Halaman Admin - DCFC
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard UKM DCFC</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')

	<div class="col-md-8">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Proposal UKM DCFC [Belum di Validasi]</h3>
					<a href="{{url('admin/UkmDcfc/validasi')}}" button class="btn inverse red">Validasi</a>
				</div>
				<div class="widget__config">
					<a href="{{ url('admin') }}"><i class="pe-7s-back"></i></a>
				</div>
				
			</header>
			
			<div class="widget__content table-responsive">
				
				<table class="table table-striped media-table">
				<thead>
					<tr>						
						<th >Judul Proposal</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($InputDcfc as $InputDcfc)
					<tr class="spacer"></tr>
					<tr>
						
						<td>
							<p class="post__info">{{ $InputDcfc->title }}</p>
						</td>
						<td>
							<p class="post__date">{{ $InputDcfc->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $InputDcfc->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="btn-group block">
							<td>
								<a href="{{ Storage::url($InputDcfc->filename) }}" type="button" class="btn inverse red">Lihat</a>
							</td>
						</div>
						
					</tr>
						@endforeach
				</tbody>
				</table>
				

				
			</div> <!-- /widget__content -->

		</article><!-- /widget -->
	</div>
	<div class="col-md-4">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7f-speaker"></i><h3>Alert messages</h3>
				</div>
				<div class="widget__config">
					<a href="#"><i class="pe-7f-refresh"></i></a>
				</div>
			</header>
			
			<div class="widget__content">
				
				
				<div class="alert alert-fixed alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="pe-7s-close"></i></span><span class="sr-only">Close</span></button>
					<div class="alert__icon pull-left">
					<i class="pe-7s-close-circle"></i>
					</div>
				<p class="alert__text"></p>
				</div>
				
			</div> <!-- /widget__content -->

		</article><!-- /widget -->
	</div>					
    @endsection
