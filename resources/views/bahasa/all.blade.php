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
				<header class="widget__header">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>Daftar Proposal UKM Bahasa</h3>
						
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
							<th width="120">ID Proposal</th>
							<th >Judul Proposal</th>
							<th width="150">Tanggal Dibuat</th>	
							<th width="130">Time</th>									
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($InputBahasa as $InputBahasa)
						<tr class="spacer"></tr>
						<tr>
							<td>
								<div class="media">
										
									<div class="post__date ">
										<h3>{{ $InputBahasa->id }}</h3>													
									</div>
								</div>
							</td>
							<td>
								<p class="media-body post_desc">{{ $InputBahasa->title }}</p>
							</td>
							<td>
								<p class="post__date">{{ $InputBahasa->created_at }}</p>
							</td>
							<td>
								<p class="post__info">{{ $InputBahasa->created_at->diffForHumans() }}</p>
							</td>
							<div class="dropdown">
							<td>
								<button class="btn btn-block blue dropdown-toggle" type="button" data-toggle="dropdown">Action
									<span class="caret"><i class="pe-7g-arrow2-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button type="submit" class="btn btn-block red dropdown-toggle">
										<a href="{{ route('bahasa.download', $InputBahasa->id) }}" > <span>Lihat</span></a></button></li>
									<li><form action="{{ route('proposal.destroy', $InputBahasa->id)}}" method="POST">
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
