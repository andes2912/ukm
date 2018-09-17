@extends('psdj.template')
	@section('title')
		Halaman UKM Psdj
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Psdj</span>
					</h1>
					
				</div>
				
	@endsection

	@section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Disetujui UKM Psdj [ BEM ]</h3>
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
						@foreach($accBem as $accBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $accBem->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $accBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $accBem->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $accBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href=" {{route('unduhPsdjIn.download', $accBem->id)}} " class="btn blue" >Lihat</a>
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
