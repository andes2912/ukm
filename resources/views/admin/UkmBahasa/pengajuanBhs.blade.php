@extends('admin.template')
	@section('title')
		Halaman Admin - Bahasa
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
					<i class="pe-7s-menu"></i><h3>Daftar Proposal UKM Bahasa [ Pengajuan ]</h3>
					<a href="{{url('admin/UkmBahasa/validasi')}}" button class="btn inverse blue">Lihat Validasi</a> 
					{{-- <a href="{{route('inputvalidasi.edit',$InputBahasa1)}}" button class="btn inverse red">Validasi</a> --}}
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
						<th >Judul Proposal </th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pengajuanbhs as $pengajuanbhs)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$pengajuanbhs->id}} </p>
						</td>
						<td>
							<p >{{ $pengajuanbhs->title }}</p>
								<p class="post__info"> Pengirim : Bahasa</p>
						</td>
						<td>
							<p class="post__date">{{ $pengajuanbhs->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $pengajuanbhs->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('bahasa.unduh', $pengajuanbhs->id) }}">Lihat</a></li>									
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
