@extends('bem.template')
	@section('title')
		Halaman UKM Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Bahasa</span>
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Bahasa [ Disetujui ]</h3>
						<a href=" {{route('bem.bahasa.approveBhs')}} " class="btn blue btn-primary">Detail</a>
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
							<th >Judul Proposal Disetujui</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipBhsAcc as $ArsipBhsAcc)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipBhsAcc->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $ArsipBhsAcc->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipBhsAcc->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $ArsipBhsAcc->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('unduhBem.download', $ArsipBhsAcc->id) }}" class="btn red"> <span>Lihat</span></a>			
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Bahasa [ Direvisi ]</h3>
						<a href=" {{route('bem.bahasa.revisiBhs')}} " class="btn blue btn-primary">Detail</a>
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
							<th >Judul Proposal Revisi</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipBhsRev as $ArsipBhsRev)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipBhsRev->id }}</h3>													
								</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipBhsRev->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipBhsRev->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipBhsRev->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('unduhBem.download', $ArsipBhsRev->id) }}" class="btn red"> <span>Lihat</span></a>
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Bahasa [ Menunggu ]</h3>
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
							<th >Judul Proposal Menunggu</th>
							<th >Tanggal Dibuat</th>	
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ArsipBhsDelay as $ArsipBhsDelay)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipBhsDelay->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipBhsDelay->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipBhsDelay->created_at }}</p>
							</td>
							<td>ArsipBhsDelay
								<p class="post__info">{{ $ArsipBhsDelay->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('unduhBem.download', $ArsipBhsDelay->id) }}" class="btn red"> <span>Lihat</span></a>
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
