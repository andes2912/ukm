@extends('dcfc.template')
	@section('title')
		Halaman UKM Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Dcfc</span>
					</h1>
					
				</div>
				
	@endsection

	@section('isi')
		<div class="row">					
			<div class="col-md-12">
				<article class="widget">
					<header class="widget__header one-btn">
						<div class="widget__title">
							<i class="pe-7f-warning"></i><h3>INFORMASI</h3>
						</div>
						<div class="widget__config">
							<a href="#"><i class="pe-7f-refresh"></i></a>
						</div>
					</header>
					
					<div class="widget__content widget__grid filled pad20">
						<p>Proposal yang ditampilkan disini hanya sebagian dari keseluruhan proposal. Klik 'Detail'
							jika ingin melihat keseluruhan data proposal.
						</p>
					</div> <!-- /widget__content -->

				</article><!-- /widget -->
			</div>

		</div> <!-- /row -->
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Dcfc [ BEM ]</h3>
						<a href=" {{route('bem.bahasa.approveBhs')}} " class="btn blue btn-primary">Detail</a>
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
						@foreach($ArsipDcfcBem as $ArsipDcfcBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipDcfcBem->id }}</h3>													
								</div>							
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcBem->created_at }}</p>
							</td>

							<td>
								<p class="post__info">{{ $ArsipDcfcBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBem.download', $ArsipDcfcBem->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('bahasavalidasi.destroy', $ArsipDcfcBem->id)}}" method="POST">
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

	<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Pengajuan Proposal UKM Dcfc [ KMH ]</h3>
						<a href=" {{route('bem.bahasa.revisiBhs')}} " class="btn blue btn-primary">Detail</a>
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
						@foreach($ArsipDcfcKmh as $ArsipDcfcKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
								<div class="post_info ">
									<h3>{{ $ArsipDcfcKmh->id }}</h3>													
								</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBem.download', $ArsipDcfcKmh->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('bahasavalidasi.destroy', $ArsipDcfcKmh->id)}}" method="POST">
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
		
	<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ BEM ]</h3>
						<a href="" class="btn blue btn-primary">Detail</a>
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
						@foreach($ArsipDcfcRevMskBem as $ArsipDcfcRevMskBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipDcfcRevMskBem->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcRevMskBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcRevMskBem->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcRevMskBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBem.download', $ArsipDcfcRevMskBem->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('proposal.destroy', $ArsipDcfcRevMskBem->id)}}" method="POST">
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


		<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ KMH ]</h3>
						<a href="" class="btn blue btn-primary">Detail</a>
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
						@foreach($ArsipDcfcRevMskKmh as $ArsipDcfcRevMskKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $ArsipDcfcRevMskKmh->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $ArsipDcfcRevMskKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $ArsipDcfcRevMskKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $ArsipDcfcRevMskKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('unduhBem.download', $ArsipDcfcRevMskKmh->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('proposal.destroy', $ArsipDcfcRevMskKmh->id)}}" method="POST">
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
