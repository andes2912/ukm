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
					<i class="pe-7s-menu"></i><h3>Revisi Proposal UKM Bahasa [ Telah Dikirim ]</h3>
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
						<th >Judul Proposal Revisi</th>
						<th>Tanggal Dikirim</th>	
						<th>Time</th>									
						<th width-"170">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($BahasaValidasi2 as $BahasaValidasi2)
					<tr class="spacer"></tr>
					<tr class="spacer">

						<td>
							<p class="post_info"> {{$BahasaValidasi2->id}} </p>
						</td>
						<td>
							<p >{{ $BahasaValidasi2->title }}</p>
													<p class="post__info"> Pengirim : {{ Auth::user()->name}}</p>
						</td>
						<td>
							<p class="post__date">{{ $BahasaValidasi2->created_at }}</p>
						</td>
						<td>
							<p class="post__info">{{ $BahasaValidasi2->created_at->diffForHumans() }}</p>
						</td>
						
						<div class="dropdown">
							<td>
								<button class="btn btn-block red dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('bahasa.unduh', $BahasaValidasi2->id) }}">Lihat</a></li>									
									<li><form action="{{ route('validasi.destroy', $BahasaValidasi2->id)}}" method="POST">
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
