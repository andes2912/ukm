@extends('admin.template')
	@section('title')
		Halaman Admin - Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman UKM Dcfc</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

	@section('isi')
	<div class="row">					
		<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7f-warning"></i><h3>INFORMASI</h3>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
					</div>
				</header>
				
				<div class="widget__content widget__grid filled pad20">
					<p>Proposal yang ditampilkan disini hanya sebagian dari keseluruhan proposal. Klik 'Detail'
						jika ingin melihat keseluruhan data proposal.
					</p>
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>

	</div> <!-- /row -->

	<div class="col-md-12">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Proposal UKM Dcfc [ Pengajuan ]</h3>
					<a href="{{route('admin.UkmBahasa.pengajuanBhs')}}" button class="btn blue">Detail</a>
					<a href="{{url('admin/UkmBahasa/validasi')}}" button class="btn inverse blue">Lihat Validasi</a> 									
				</div>
				<div class="widget__config">
					<a href="{{ url('admin') }}"><i class="pe-7s-back"></i></a>
				</div>
				
			</header>
			
			<div class="widget__content table-responsive">
				
				<table class="table table-striped media-table">
				<thead>
					<tr>
						<th>ID</th>						
						<th >Judul Proposal</th>
						<th>Tanggal Diterima</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($indexDcfc as $indexDcfc)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$indexDcfc->id}} </p>
						</td>
						<td>
							<p class="post__info">{{ $indexDcfc->title }}</p>
						</td>
						<td>
							<p class="post__date">{{ $indexDcfc->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $indexDcfc->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('bahasa.unduh', $indexDcfc->id) }}">Lihat</a></li>									
									<li><a href="{{route ('validasikmh.edit', $indexDcfc->id)}}">Validasi</a></li>
									
								</ul>
							</td>
						</div>
					</tr>
						@endforeach
				</tbody>
				</table>								
			</div> <!-- /widget__content -->
		</article><!-- /widget -->
	</div> <hr>	
    @endsection
