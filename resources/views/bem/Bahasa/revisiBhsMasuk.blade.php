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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal Masuk UKM Bahasa [ Revisi ]</h3>
						<a href=" {{route('bem.bahasa.revisiBhs')}} " class="btn blue">Lihat Revisi Keluar</a>
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
						@foreach($revisiBhsMasuk as $revisiBhsMasuk)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $revisiBhsMasuk->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $revisiBhsMasuk->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $revisiBhsMasuk->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $revisiBhsMasuk->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $revisiBhsMasuk->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBem.download', $revisiBhsMasuk->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('proposal.destroy', $revisiBhsMasuk->id)}}" method="POST">
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
