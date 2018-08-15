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
						<span>Halaman Validasi Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')
		
		<div class="row">
			<div class="col-md-6">
				<article class="widget">
					<header class="widget__header one-btn">
						<div class="widget__title">
							<i class="pe-7f-note"></i><h3>Report Validasi Proposal</h3>
						</div>
						<div class="widget__config">
							<a href="#"><i class="pe-7s-close"></i></a>
							<a href="#" style="line-height: 68px;"><i class="pe-7g-arrow2-down"></i></a>
						</div>
					</header>

					<div class="widget__content">
						<div class="tabs">
							<input type="radio" id="tab1" name="msgs_tabs" checked>
							<label for="tab1" class="tabs__tab">Proposal Disetujui</label>
							<input type="radio" id="tab2" name="msgs_tabs">
							<label for="tab2" class="tabs__tab">Revisi Masuk</label>
							<input type="radio" id="tab3" name="msgs_tabs">
							<label for="tab3" class="tabs__tab">Menunggu</label>
							<div class="clearfix"></div>
		
					<div class="tabs__content">	

					<div class="tabs__content--1">
					@foreach($BemBahasaAcc as $BemBahasaAcc)
					<div class="media message">
						{{-- <figure class="pull-left rounded-image message__img">
							<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						</figure> --}}
						<div class="media-body">
							<h4 class="media-heading message__heading"> {{$BemBahasaAcc->title}}</h4> <hr>
							<p class="message__msg"><span> Tanggal : {{ $BemBahasaAcc->created_at }} </span></p>
							<input type="checkbox" class="msg-o" id="msg-o1" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7s-check"></i> <span>Sudah di Validasi</span></a></li>
								<li><a href="{{ route('unduhBem.download', $BemBahasaAcc->id) }}" class="set_fav" onclick="return true;"><i class="pe-7g-arrow2-down"></i> <span>Unduh</span></a></li>

							</ul>
						</div> 
					</div>
				</div> <!-- /message -->
					@endforeach				
			</div> <!-- /tabscontent1 -->
			
			<div class="tabs__content--2">
				@foreach($InputBhsRev as $InputBhsRev)
				<div class="media message">
					{{-- <figure class="pull-left rounded-image message__img">
						<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">				
					</figure> --}}
					<div class="media-body">
						<h4 class="media-heading message__heading">{{$InputBhsRev->title}} </h4> <hr>
						<p class="message__msg"><span>Pengirim  : UKM Bahasa</span> | <span> Tanggal : {{ $InputBhsRev->created_at}}</span> <br> <i class="pe-7s-clock"></i> <span>{{ $InputBhsRev->created_at->diffForHumans() }}</span></p>
						<input type="checkbox" class="msg-o" id="msg-o4" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="{{route('bahasavalidasi.edit', $InputBhsRev->id)}}" onclick="return true;"><i class="pe-7f-back pe-rotate-180"></i> <span>Terima</span></a></li>
								<li><a href="{{ route('unduhBhs.download', $InputBhsRev->id) }}" class="set_fav" onclick="return true;"><i class="pe-7f-back"></i> <span>Lihat</span></a></li>
								<li><form action="{{ route('bahasavalidasi.destroy', $InputBhsRev->id)}}" method="POST">
									{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn"> <i class="pe-7f-trash"></i> <span>Hapus</span> </button>
										 
										
									</form>
								</li>
							</ul>
						</div> 
					</div>
				</div> @endforeach <!-- /message -->	
				
			</div> <!-- /tabscontent2 -->
			
			<div class="tabs__content--3">
				@foreach($BemBahasaDelay as $BemBahasaDelay)
				<div class="media message fav">
					<figure class="pull-left rounded-image message__img">
						<img class="media-object" src="{{ asset('asset/img/user1.jpg')}}" alt="user">
					</figure>
					<div class="media-body">
						<h4 class="media-heading message__heading">{{ $BemBahasaDelay->title }}</h4>
						<p class="message__msg"><span>{{ $BemBahasaDelay->created_at->diffForHumans() }}</span> | <span>{{ $BemBahasaDelay->created_at}}</span></p>
						<input type="checkbox" class="msg-o" id="msg-o6">
						<label class="message__controls--opener" for="msg-o6"><i class="pe-7s-note"></i></label>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7f-back pe-rotate-180"></i> <span>Reply</span></a></li>
								<li><a href="#" class="set_fav" onclick="return false;"><i class="pe-7f-star"></i> <span>Favorite</span></a></li>
								<li><a href="#" onclick="return false;"><i class="pe-7f-trash"></i> <span>Delete</span></a></li>
								<li><a href="#" class="close_cntrl" onclick="return false;"><i class="pe-7g-arrow2-up"></i></a></li>
							</ul>
						</div>
					</div>
				</div> @endforeach <!-- /message -->				
			</div> <!-- /tabscontent3 -->
		</div> 	
	</div> <!-- /tabs -->
								

								
	</div> <!-- /widget__content -->
	</article><!-- /widget -->
	</div>

	<div class="col-md-6">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7f-user"></i><h3>Ravisi Terkirim</h3>
				</div>
				<div class="widget__config">
					<a href="#"><i class="pe-7s-close"></i></a>
				</div>
			</header>

			<div class="widget__content">
				<div class="clearfix"></div>								
				<div class="members__container">									
					<div class="media message checked">
						<div class="media-body"> @foreach( $BemBahasaRev as $BemBahasaRev )
							<h3> {{$BemBahasaRev->title}} </h3> <br>
							<p class="message__location"> <i class="pe-7s-clock"></i> {{$BemBahasaRev->created_at}} | {{$BemBahasaRev->created_at->diffForHumans()}} </p> <hr> <hr> <br>
							@endforeach
						</div>
						
					</div>
				</div> <!-- /members__container -->								
				<div class="clearfix"></div>
				<div class="members__footer"> <a href=""><button class="members__load-more"> Index pengajuan</button></a><a href=" "><button class="members__search"> Index Revisi
					</button></a>
				</div>
			</div>
		</article><!-- /widget -->
	</div>

    @endsection
