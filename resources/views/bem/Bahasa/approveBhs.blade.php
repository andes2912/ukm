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
						<span>Halaman Data Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Bahasa [ Disetujui ]</h3>
					</div>
					<div class="widget__config">
						<a href="#" title="Kembali" onclick="window.location.href ='{{ route('bahasavalidasi.index') }}'" ><i class="pe-7s-back"></i></a>
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
						@foreach($ArsipBhsApprov as $ArsipBhsApprov)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipBhsApprov->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $ArsipBhsApprov->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipBhsApprov->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $ArsipBhsApprov->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipBhsApprov->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('unduhBem.download', $ArsipBhsApprov->id)}}" class="btn red"> <span>Lihat</span></a>									
								</ul>
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
