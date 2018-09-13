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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Disetujui UKM Dcfc [ BEM ]</h3>
						<a href=" {{route('dcfc.disetujuiBem')}} " class="btn blue btn-primary">Detail</a>
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
						@foreach($disetujuiBem as $disetujuiBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $disetujuiBem->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $disetujuiBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $disetujuiBem->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $disetujuiBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhBemDcfc.download', $disetujuiBem->id)}} " class="btn blue" >Lihat</a>
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
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Disetujui UKM Dcfc [ KMH ]</h3>
						<a href=" {{route('dcfc.disetujuiKmh')}} " class="btn blue btn-primary">Detail</a>
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
						@foreach($disetujuiKmh as $disetujuiKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $disetujuiKmh->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $disetujuiKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $disetujuiKmh->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $disetujuiKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhKmhDcfc.download', $disetujuiBem->id)}} " class="btn blue" >Lihat</a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>

				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>

	
    @endsection
