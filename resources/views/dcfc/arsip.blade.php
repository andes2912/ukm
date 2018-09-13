@extends('dcfc.template')
	@section('title')
		Halaman UKM Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Dcfc</span>
					</h1>
					
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Dcfc [ BEM ]</h3>
						<a href=" {{route('dcfc.pengajuanBem')}} " class="btn blue btn-primary">Detail</a>
						<a href=" {{route('dcfc.revisiBem')}}" class="btn yellow">Revisi</a>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
					</div>
					
				</header>
				
				<div class="widget__content table-responsive">
					
					<table class="table table-striped media-table">
					<thead>
						<tr>
							<th >ID</th>
							<th >Judul Proposal</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipDcfcBem as $ArsipDcfcBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipDcfcBem->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcBem->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $ArsipDcfcBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhDcfc.download', $ArsipDcfcBem->id)}}" class="btn red">Lihat</a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>
					

					
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>

	<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Dcfc [ KMH ]</h3>
						<a href=" {{route('dcfc.pengajuanKmh')}} " class="btn blue btn-primary">Detail</a>
						<a href=" {{route('dcfc.revisiKmh')}}" class="btn yellow">Revisi</a>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
					</div>
					
				</header>
				
				<div class="widget__content table-responsive">
					
					<table class="table table-striped media-table">
					<thead>
						<tr>
							<th >ID</th>
							<th >Judul Proposal</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipDcfcKmh as $ArsipDcfcKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipDcfcKmh->id }}</h3>													
								</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhDcfc.download', $ArsipDcfcKmh->id)}}" class="btn red">Lihat</a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>
				
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>
		
	{{-- <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ BEM ]</h3>
						<a href=" {{route('dcfc.revisiBem')}} " class="btn blue btn-primary">Detail</a>
					</div>
					<div class="widget__config">
						<a href="#" onclick="window.location.href='#'" ><i class="pe-7f-back"></i></a>
					</div>
					
				</header>
				
				<div class="widget__content table-responsive">
					
					<table class="table table-striped media-table">
					<thead>
						<tr>
							<th >ID</th>
							<th >Judul Proposal</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipDcfcRevMskBem as $ArsipDcfcRevMskBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipDcfcRevMskBem->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcRevMskBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcRevMskBem->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcRevMskBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhBemDcfc.download', $ArsipDcfcRevMskBem->id)}} " class="btn red">Lihat</a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>
					

					
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>


		<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ KMH ]</h3>
						<a href="" class="btn blue btn-primary">Detail</a>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
					</div>
					
				</header>
				
				<div class="widget__content table-responsive">
					
					<table class="table table-striped media-table">
					<thead>
						<tr>
							<th >ID</th>
							<th >Judul Proposal</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipDcfcRevMskKmh as $ArsipDcfcRevMskKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipDcfcRevMskKmh->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcRevMskKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcRevMskKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcRevMskKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('unduhKmhDcfc.download', $ArsipDcfcRevMskKmh->id) }}" class="btn red"> <span>Lihat</span></a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>
					

					
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div> --}}
    @endsection
