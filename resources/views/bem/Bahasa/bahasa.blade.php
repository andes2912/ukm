@extends('bem.template')
	@section('title')
		Halaman BEM - Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman UKM Bahasa</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')

	<div class="col-md-12">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7s-menu"></i><h3>Proposal UKM Bahasa [ Pengajuan ]</h3>
					<a href=" {{url('bem/bahasa/bahasavalidasi')}} " button class="btn inverse blue">Lihat Validasi</a> 
				</div>
				<div class="widget__config">
					<a href=""><i class="pe-7s-back"></i></a>
				</div>
				
			</header>
			
			<div class="widget__content table-responsive">
				
				<table class="table table-striped media-table">
				<thead>
					<tr>
						<th>ID</th>						
						<th >Judul Proposal</th>
						<th>Tanggal Diterima</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($InputBahasa as $InputBahasa)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$InputBahasa->id}} </p>
						</td>
						<td>
							<p class="post__info">{{ $InputBahasa->title }}</p>
						</td>
						<td>
							<p class="post__date">{{ $InputBahasa->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $InputBahasa->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Lihat</a></li>									
									<li><a href=" {{route('bahasavalidasi.edit', $InputBahasa->id )}} ">Validasi</a></li>
									
								</ul>
							</td>
						</div>
					</tr>
						@endforeach
				</tbody>
				</table>								
			</div> <!-- /widget__content -->
		</article><!-- /widget -->
	</div> <hr>	
    @endsection
