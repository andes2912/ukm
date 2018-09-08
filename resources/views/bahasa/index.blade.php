@extends('bahasa.template')
	@section('title')
		Halaman UKM Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Validasi Data Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
       
		<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Proposal Sudah Disetujui Oleh [ Badan Eksekutif Mahasiswa ]</h3>
						
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
							<th>ID</th>
							<th >Judul Proposal</th>
							<th width="150">Tanggal Disetujui</th>	
							<th width="130">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($BemValidasi as $BemValidasi)
						<tr class="spacer"></tr>
						<tr>
							<td>
								<div class="media">
										
									<div class="post__date ">
										<h3>{{ $BemValidasi->id }}</h3>													
									</div>
								</div>
							</td>
							<td>
								<p class="media-body post_desc">{{ $BemValidasi->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $BemValidasi->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $BemValidasi->created_at->diffForHumans() }}</p>
							</td>
							
							<div class="btn-group block">
								<td>
									<a href="{{ route('unduh.download', $BemValidasi->id) }}" type="button" class="btn inverse red">Lihat</a>
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
						<i class="pe-7s-menu"></i><h3>Daftar Proposal Sudah Disetujui Oleh [ Kemahasiswaan ]</h3>
						
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
							<th>ID </th>
							<th >Judul Proposal</th>
							<th width="150">Tanggal Disetujui</th>	
							<th width="130">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($BahasaValidasi as $BahasaValidasi)
						<tr class="spacer"></tr>
						<tr>
							<td>
								<div class="media">
										
									<div class="post__date ">
										<h3>{{ $BahasaValidasi->id }}</h3>													
									</div>
								</div>
							</td>
							<td>
								<p class="media-body post_desc">{{ $BahasaValidasi->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $BahasaValidasi->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $BahasaValidasi->created_at->diffForHumans() }}</p>
							</td>
							
							<div class="btn-group block">
								<td>
									<a href="{{ route('unduh.download', $BahasaValidasi->id) }}" type="button" class="btn inverse red">Lihat</a>
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
