@extends('admin.template')
	@section('title')
		Halaman Admin - Musik
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman UKM Musik</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')

	<div class="col-md-12">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Keluar UKM Musik [ Revisi ]</h3>
					<a href=" {{route('admin.UkmMusik.revisiMasuk')}} " button class="btn inverse blue">Lihat Revisi Masuk</a> 
				</div>
				<div class="widget__config">
					<a href="kembali" onclick="window.location.href=' {{route('validasikmhMusik.index')}}'"><i class="pe-7s-back"></i></a>
				</div>
				
			</header>
			
			<div class="widget__content table-responsive">
				
				<table class="table table-striped media-table">
				<thead>
					<tr>
						<th>ID</th>						
						<th >Judul Proposal Revisi</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($revisiKeluarMusik as $revisiKeluarMusik)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$revisiKeluarMusik->id}} </p>
						</td>
						<td>
							<p >{{ $revisiKeluarMusik->title }}</p>
													<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $revisiKeluarMusik->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $revisiKeluarMusik->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<a href="{{ route('KmhMusikOut.download', $revisiKeluarMusik->id) }}" class="btn red">Lihat</a>								
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
