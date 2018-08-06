@extends('bahasa.template')
	@section('title')
		Halaman Admin - Bahasa
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Data Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
						<article class="widget">
							<header class="widget__header">
								<div class="widget__title">
									<i class="pe-7s-menu"></i><h3>Daftar Proposal</h3>
									<a href="{{route('inputdcfc.create')}}" type="button" class="btn inverse blue">Tambah</a>
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
							  			<th width="170">Judul Proposal</th>
										<th>Tanggal Buat</th>	
										<th>Time</th>									
							  			<th width-"170">Action</th>
							  		</tr>
							  	</thead>
							  	<tbody>
							  	 @foreach($InputDcfc as $InputDcfc)
							  		<tr class="spacer"></tr>
							  		<tr>
							  			<td>
							  				<div class="media">
													
												<div class="media-body post_desc">
													<h3>{{ $InputDcfc->id }}</h3>													
												</div>
											</div>
										</td>
										<td>
							  				<p class="post__info">{{ $InputDcfc->title }}</p>
							  			</td>
							  			<td>
							  				<p class="post__date">{{ $InputDcfc->created_at }}</p>
							  			</td>
							  			<td>
							  				<p class="post__info">{{ $InputDcfc->created_at->diffForHumans() }}</p>
							  			</td>
							  			
							  			<div class="btn-group block">
											<td>
												<a href="{{ \Storage::url($InputDcfc->filename) }}" type="button" class="btn inverse red">Lihat</a>
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
