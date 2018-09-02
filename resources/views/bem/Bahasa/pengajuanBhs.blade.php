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
						<i class="pe-7s-menu"></i><h3>Daftar Pengajuan Proposal UKM Bahasa</h3>
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
						@foreach($PengajuanBhs as $PengajuanBhs)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $PengajuanBhs->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $PengajuanBhs->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $PengajuanBhs->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $PengajuanBhs->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $PengajuanBhs->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBhs.download', $PengajuanBhs->id) }}" > <span>Lihat</span></a></button></li>
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
