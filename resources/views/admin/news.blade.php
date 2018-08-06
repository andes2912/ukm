@extends('admin.template')
	@section('title')
		Halaman Admin
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Berita</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-display2"></i><h3>News Update [Telah Terbit]</h3>
						<a href="{{ route('news.create')}}" onclick="true" title="Buat Berita Baru"><i class="pe-7s-plus"></i></a>
					</div>
					<div class="widget__config ">						
						<a href="{{ route('news.create')}}" onclick="true" title="Buat Berita Baru"><i class="pe-7s-close"></i></a>					
					</div>
				</header>
							
				<div class="widget__content table-responsive">
								
					<table class="table table-striped media-table">
						<thead>
							<tr>
								<th width="270">Title</th>
								<th width="120">Date</th>
								<th>Description</th>
								<th>Edit</th>
								<th>Hapus</th>
							</tr>
						</thead>
						@foreach($news as $news)
						<tbody>
							<tr class="spacer"></tr>
							<tr>
								<td>
									<div class="media">
										<div class="media-body post_desc">
											<h3>{{$news->title}}</h3>
											<p>Di Terbitkan Oleh : Admin</p>
										</div>
									</div>
								</td>
									<td>
										<p class="post__date">{{$news->created_at->diffForHumans()}}</p>
									</td>
									<td>
										<p class="post__info">{{$news->description}}</p>
									</td>
									<td>
										<a href="#" onclick="return false;" class="post__del"><i class="pe-7f-tools"></i></a>
									</td>
									<td>
										<a href="#" onclick="return false;" class="post__del"><i class="pe-7f-close"></i></a>
									</td>
							</tr>
							<tr class="spacer"></tr>

						</tbody> @endforeach
					</table>
				</div> <!-- /widget__content -->
			</article><!-- /widget -->
		</div>
    @endsection
