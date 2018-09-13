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
						<span>Halaman Arsip Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
	@endsection

	@section('isi')

        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ Kmh ]</h3>
						<a href=" {{route('bahasa.revisiBem')}}" class="btn yellow">BEM</a>
					</div>
					<div class="widget__config">
						<a href="Kembali" onclick="window.location.href=' {{route('bahasa.arsip')}} '" ><i class="pe-7f-back"></i></a>
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
						@foreach($RevisiKmh as $RevisiKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $RevisiKmh->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $RevisiKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $RevisiKmh->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $RevisiKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('bahasa.download', $RevisiKmh->id)}} " class="btn blue" >Lihat</a>
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
