@extends('musik.template')
	@section('title')
		Halaman UKM Musik
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Musik</span>
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Musik [ BEM ]</h3>
						<a href=" {{route('musik.pengajuanBem')}} " class="btn blue btn-primary">Detail</a>
						<a href=" {{route('musik.revisiBem')}}" class="btn yellow">Revisi</a>
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
						@foreach($arsipBem as $arsipBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $arsipBem->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $arsipBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $arsipBem->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $arsipBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhMusik.download', $arsipBem->id)}}" class="btn red">Lihat</a>
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Musik [ KMH ]</h3>
						<a href=" {{route('musik.pengajuanKmh')}} " class="btn blue btn-primary">Detail</a>
						<a href=" {{route('musik.revisiKmh')}}" class="btn yellow">Revisi</a>
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
						@foreach($arsipKmh as $arsipKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $arsipKmh->id }}</h3>													
								</div>
							</td>
							<td>
								<p class="post_info">{{ $arsipKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $arsipKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $arsipKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhMusik.download', $arsipKmh->id)}}" class="btn red">Lihat</a>
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
