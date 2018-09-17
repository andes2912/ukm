@extends('bem.template')
	@section('title')
		Halaman UKM Musik
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Data Proposal UKM Musik</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Masuk UKM Musik [ Revisi ]</h3>
						<a href=" {{route('bem.musik.revisiMusikSend')}} " class="btn blue">Lihat Revisi Keluar</a>
					</div>
					<div class="widget__config">
						<a href="#" title="Kembali" onclick="window.location.href =' {{route('validasimusik.index')}} '" ><i class="pe-7s-back"></i></a>
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
						@foreach($revisimasuk as $revisimasuk)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $revisimasuk->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $revisimasuk->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $revisimasuk->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $revisimasuk->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $revisimasuk->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('DownloadMusikIn.download', $revisimasuk->id) }}" class="btn red"> <span>Lihat</span></a>
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
