@extends('admin.template')
	@section('title')
		Halaman Admin - Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman UKM Bahasa</span>
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
					<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Masuk UKM Bahasa [ Revisi ]</h3>
					<a href="{{route('admin.UkmBahasa.revisi')}}" button class="btn inverse blue">Lihat Revisi Keluar</a> 
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
						<th >Judul Proposal Revisi</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($revisiMsk as $revisiMsk)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$revisiMsk->id}} </p>
						</td>
						<td>
							<p >{{ $revisiMsk->title }}</p>
													<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $revisiMsk->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $revisiMsk->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
							
								<a href="{{ route('bahasa.unduh', $revisiMsk->id) }}" class="btn red">Lihat</a>								
									
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
