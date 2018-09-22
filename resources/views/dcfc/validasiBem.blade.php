@extends('dcfc.template')
	@section('title')
		Halaman UKM Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Report Validasi Proposal UKM Dcfc</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="row">
			<div class="col-md-6">
				<article class="widget">
					<header class="widget__header one-btn">
						<div class="widget__title">
							<i class="pe-7f-note"></i><h3>Validasi Proposal Dari [ BEM ]</h3>
						</div>
						<div class="widget__config">
							<a href="#"><i class="pe-7f-refresh"></i></a>
							<a href="#" style="line-height: 68px;"><i class="pe-7g-arrow2-down"></i></a>
						</div>
					</header>

					<div class="widget__content">
						<div class="tabs">
							<input type="radio" id="tab1" name="msgs_tabs" checked>
							<label for="tab1" class="tabs__tab">Disetujui</label>
							<input type="radio" id="tab2" name="msgs_tabs">
							<label for="tab2" class="tabs__tab">Revisi Diterima</label>
							<input type="radio" id="tab3" name="msgs_tabs">
							<label for="tab3" class="tabs__tab">Menunggu</label>
							<div class="clearfix"></div>
		
					<div class="tabs__content">

					<div class="tabs__content--1">
					@foreach($BemDcfcAcc as $BemDcfcAcc)
					<div class="media message">
						{{-- <figure class="pull-left rounded-image message__img">
							<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						</figure> --}}
						<div class="media-body">
							<h4 class="media-heading message__heading"> {{$BemDcfcAcc->title}}</h4> <span style="color:coral;"> <h5> {{ $BemDcfcAcc->created_at->diffForHumans() }}</h5></span><hr>
							<p class="message__msg"><span style="color:dodgerblue">Pengirim : BEM </span> | <span style="color:darkorange; font:bold;"> Tanggal :{{ $BemDcfcAcc->created_at }}</span></p>
							<input type="checkbox" class="msg-o" id="msg-o1" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return true;" title="Proposal Sudah di Validasi" ><i class="pe-7s-check"></i><span>Sudah di Validasi</span></a></li>
								<li><a href=" {{ route('dcfc.inputKmh', $BemDcfcAcc->id)}} " onclick="return true;" title="Kirim ke Kemahasiswaan" ><i class="pe-7s-back"></i><span>Kirim</span></a></li>
								<li><a href=" {{ route('unduhBemDcfc.download', $BemDcfcAcc->id) }}" title="Download file {{ $BemDcfcAcc->title }}" onclick="return true;"><i class="pe-7f-back pe-rotate-180"></i> <span>Cetak</span></a></li>
			
								
							</ul>
						</div> 
					</div>
				</div> <!-- /message -->
					
					@endforeach				
			</div> <!-- /tabscontent1 -->
			
			<div class="tabs__content--2">
				@foreach($BemDcfcRev as $BemDcfcRev)
				<div class="media message">
					{{-- <figure class="pull-left rounded-image message__img">
							<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						</figure> --}}
					<div class="media-body">
						<h4 class="media-heading message__heading">{{$BemDcfcRev->title}}</h4> <span style="color:coral;"> <h5> {{ $BemDcfcRev->updated_at->diffForHumans() }}</h5></span> <hr>
						<p class="message__msg"><span style="color:dodgerblue">Pengirim : BEM </span> | <span style="color:darkorange; font:bold;"> Tanggal :{{ $BemDcfcRev->updated_at}} </span></p>
						<input type="checkbox" class="msg-o" id="msg-o4" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="{{route('proposaldcfc.edit',$BemDcfcRev->id)}}" onclick="return true;"><i class="pe-7f-back pe-rotate-180"></i> <span>Revisi</span></a></li>
								<li><a href="{{ route('unduhBemDcfc.download', $BemDcfcRev->id) }}" class="set_fav" onclick="return true;"><i class="pe-7f-back"></i> <span>Lihat</span></a></li>
								
							</ul>
						</div> 
					</div>
				</div>
				
				 @endforeach <!-- /message -->	
				
			</div> <!-- /tabscontent2 -->
			
			<div class="tabs__content--3">
				@foreach($BemDcfcDelay as $BemDcfcDelay)
				<div class="media message">
					{{-- <figure class="pull-left rounded-image message__img">
							<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						</figure> --}}
					<div class="media-body">
						<h4 class="media-heading message__heading">{{ $BemDcfcDelay->title }}</h4>
						<p class="message__msg"><span>{{ $BemDcfcDelay->created_at->diffForHumans() }}</span> | <span>{{ $BemDcfcDelay->created_at }}</span></p>
						<input type="checkbox" class="msg-o" id="msg-o6" checked>
						
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7f-back pe-rotate-180"></i> <span>Lihat</span></a></li>
								<li><a href="#" class="set_fav" onclick="return false;"><i class="pe-7f-trash"></i> <span>Delete</span></a></li>
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
					<i class="pe-7f-user"></i><h3>Revisi Terkirim ke [ BEM ]</h3>
				</div>
				<div class="widget__config">
					<a href="#"><i class="pe-7s-close"></i></a>
				</div>
			</header>

			<div class="widget__content">
				<div class="clearfix"></div>								
				<div class="members__container">									
					<div class="media message checked">
						<div class="media-body"> @foreach( $DcfcRevKeluar as $DcfcRevKeluar )
							<h3> {{$DcfcRevKeluar->title}} </h3> <br>
							<p class="message__location" style="color:darkorange; font:bold;"> <i class="pe-7s-clock"></i> {{$DcfcRevKeluar->created_at}} | {{$DcfcRevKeluar->created_at->diffForHumans()}} </p> <hr> <hr> <br>
							@endforeach
						</div>
						
					</div>
				</div> <!-- /members__container -->								
				<div class="clearfix"></div>
				<div class="members__footer"> <a href="{{route('dcfc.arsip')}}"><button class="members__load-more"> Index pengajuan</button></a><a href=" {{route('dcfc.revisiBem')}} "><button class="members__search"> Index Revisi
					</button></a>
				</div>
			</div>
		</article><!-- /widget -->
	</div>

    @endsection
