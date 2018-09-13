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
					<div class="widget__title ">
						<i class="pe-7s-menu"></i><h3> Daftar Arsip Pengajuan Proposal UKM Bahasa [ BEM ]</h3>
						<a href="{{ route ('bahasa.allbem')}}" class="btn blue btn-primary">Detail</a>
						<a href="{{ route ('bahasa.revisiBem')}}" class="btn yellow btn-primary">Revisi</a>
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
						@foreach($InputBahasaBemNew as $InputBahasaBemNew)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $InputBahasaBemNew->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $InputBahasaBemNew->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $InputBahasaBemNew->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaBemNew->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('bahasa.download', $InputBahasaBemNew->id) }}" class="btn red"> <span>Lihat</span></a>
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
						<i class="pe-7s-menu"></i><h3> Daftar Arsip Pengajuan Proposal UKM Bahasa [ KMH ]</h3>
						<a href="{{ route ('bahasa.allkmh')}}" class="btn blue btn-primary">Detail</a>
						<a href="{{ route ('bahasa.revisiKmh')}}" class="btn yellow btn-primary">Revisi</a>
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
						@foreach($InputBahasaKmhNew as $InputBahasaKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $InputBahasaKmh->id }}</h3>													
									</div>
							</td>
							<td>
								<p class="post_info">{{ $InputBahasaKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $InputBahasaKmh->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<a href="{{ route('bahasa.download', $InputBahasaKmh->id) }}" class="btn red"> <span>Lihat</span></a>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>
	
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>

		{{-- <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ BEM ]</h3>
						<a href=" {{route('bahasa.revisiBhs')}}" class="btn blue btn-primary">Detail</a>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
						<a href="#"><i class="pe-7s-close"></i></a>
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
						@foreach($InputBahasaRevBem as $InputBahasaRevBem)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $InputBahasaRevBem->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaRevBem->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $InputBahasaRevBem->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $InputBahasaRevBem->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaRevBem->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('bahasa.download', $InputBahasaRevBem->id) }}" > <span>Lihat</span></a></button></li>
									
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
						<i class="pe-7s-menu"></i><h3>Daftar Arsip Revisi Proposal UKM Bahasa [ KMH ]</h3>
						<a href=" {{route('bahasa.revisiBhs')}}" class="btn blue btn-primary">Detail</a>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7f-refresh"></i></a>
						<a href="#"><i class="pe-7s-close"></i></a>
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
						@foreach($InputBahasaRevKmh as $InputBahasaRevKmh)
						<tr class="spacer"></tr>
						<tr>
							<td>										
									<div class="post_info ">
										<h3>{{ $InputBahasaRevKmh->id }}</h3>													
									</div>
							
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaRevKmh->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $InputBahasaRevKmh->created_at }}</p>
							</td>
							<td>
								<p class="post_date"> {{ $InputBahasaRevKmh->user }} </p>
							</td>
							<td>
								<p class="post__info">{{ $InputBahasaRevKmh->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('bahasa.download', $InputBahasaRevKmh->id) }}" > <span>Lihat</span></a></button></li>
									
								</ul>
							</td>
						</div>
							
						</tr>
							@endforeach
					</tbody>
					</table>

				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div> --}}
    @endsection
