@extends('admin.template')
	@section('title')
		Halaman Admin - Musik
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Arsip Proposal UKM Musik</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
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
					<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Musik [ Disetujui ]</h3>
					<a href="{{route('admin.UkmMusik.disetujui')}}" button class="btn blue">Detail</a> 
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
						<th >Judul Proposal Disetujui</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($disetujui as $disetujui)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$disetujui->id}} </p>
						</td>
						<td>
							<p >{{ $disetujui->title }}</p>
							<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $disetujui->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $disetujui->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('KmhMusikOut.download', $disetujui->id) }}">Lihat</a></li>									
									<li><form action="{{ route('validasi.destroy', $disetujui->id)}}" method="POST">
									{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn"> <i class="pe-7f-trash"></i> <span>Hapus</span> </button>										 								
									</form>
								</li>
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
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Musik [ Revisi ]</h3>
					<a href="{{route('admin.UkmMusik.revisiKeluar')}}" button class="btn blue">Detail</a> 
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
					@foreach($direvisi as $direvisi)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$direvisi->id}} </p>
						</td>
						<td>
							<p >{{ $direvisi->title }}</p>
							<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $direvisi->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $direvisi->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('KmhMusikOut.download', $direvisi->id) }}">Lihat</a></li>									
									<li><form action="{{ route('validasi.destroy', $direvisi->id)}}" method="POST">
									{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn"> <i class="pe-7f-trash"></i> <span>Hapus</span> </button>										 								
									</form>
								</li>
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
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Daftar Arsip Proposal UKM Musik [ Menunggu ]</h3>
					<a href="{{route('admin.UkmMusik.menunggu')}}" button class="btn blue">Detail</a> 
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
						<th >Judul Proposal Menunggu</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($menunggu as $menunggu)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$menunggu->id}} </p>
						</td>
						<td>
							<p >{{ $menunggu->title }}</p>
													<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $menunggu->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $menunggu->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('KmhMusikOut.download', $menunggu->id) }}">Lihat</a></li>									
									<li><form action="{{ route('validasi.destroy', $menunggu->id)}}" method="POST">
									{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn"> <i class="pe-7f-trash"></i> <span>Hapus</span> </button>										 								
									</form>
								</li>
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
