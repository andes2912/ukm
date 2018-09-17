@extends('bem.template')
	@section('title')
		Halaman UKM Psdj
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Data Proposal UKM Psdj</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Masuk UKM Psdj [ Revisi ]</h3>
						<a href=" {{route('bem.psdj.revisiMasukPsdj')}} " class="btn blue">Lihat Revisi Masuk</a>
					</div>
					<div class="widget__config">
						<a href="#" title="Kembali" onclick="window.location.href =' {{route('validasipsdj.index')}} '" ><i class="pe-7s-back"></i></a>
					</div>
					
				</header>
				
				<div class="widget__content table-responsive">
					
					<table class="table table-striped media-table">
					<thead>
						<tr>
							<th >ID</th>
							<th >Judul Proposal Revisi</th>
							<th >Tanggal Dibuat</th>	
							<th> Ditujukan</th>
							<th width="170">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($revisikeluar as $revisikeluar)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $revisikeluar->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $revisikeluar->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $revisikeluar->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $revisikeluar->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $revisikeluar->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('downloadBemPsdj.download', $revisikeluar->id) }}" class="btn red"> <span>Lihat</span></a>
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
