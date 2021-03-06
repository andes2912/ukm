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
						<span>Halaman Data Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        
	<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Pengajuan Proposal Kepada [ Kemahasiswaan ]</h3>
						
					</div>
					<div class="widget__config">
						<a href="Kembali" onclick="window.location.href=' {{route('bahasa.arsip')}}'"><i class="pe-7f-back"></i></a>
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
						@foreach($allKmh as $allKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $allKmh->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $allKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $allKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $allKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('bahasa.download', $allKmh->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('proposal.destroy', $allKmh->id)}}" method="POST">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-block green dropdown-toggle"><span>Hapus</span></button>
									</form></li>
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
