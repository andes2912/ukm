@extends('musik.template')
	@section('title')
		Halaman Musik
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard UKM Musik</span>
					</h1>
					
				</div>
				
	@endsection


    @section('isi')
        <div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-menu"></i><h3>News Update</h3>
					
					</div>
					<div class="widget__config true">
						<a href=" {{route('bahasa.arsip')}} " ><i class="pe-7s-close"></i></a>
					</div>
				</header>
							
				<div class="widget__content table-responsive">
								
					<table class="table table-striped media-table">
						<thead>
							<tr>
								<th width="120">Title</th>
								<th width="570">Description</th>
								<th width="470">Diterbitkan</th>
								
							</tr>
						</thead>
						@foreach($news as $news)
						<tbody>
							<tr class="spacer"></tr>
							<tr>
								<td>
									<div class="media">
										<figure class="pull-left post__img">
												<img class="media-object" src="{{asset('asset/img/admin1.jpg')}}" alt="user">
											</figure>
										<div class="media-body post_desc">
											
											<h3>{{$news->title}}</h3>
											<span>by : Admin</span> | {{$news->created_at}}
										</div>
									</div>
								</td>
								<td>
									<p class="post__date">{{$news->description}}</p>
								</td>
								<td>
									<p class="post__info">{{$news->created_at->diffForHumans()}}</p>
								</td>
								
							</tr>
							<tr class="spacer"></tr>

						</tbody> @endforeach
					</table>
				</div> <!-- /widget__content -->
			</article><!-- /widget -->
		</div>
    @endsection
