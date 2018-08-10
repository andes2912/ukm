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
						<span>Halaman Validasi Proposal UKM Bahasa</span>
					</h1>
					
				</div>
				
				<div class="main-header__date">
					
				</div>
	@endsection

    @section('isi')
		
		<div class="row">
			<div class="col-md-8">
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
							<label for="tab1" class="tabs__tab">Disetujui</label>
							<input type="radio" id="tab2" name="msgs_tabs">
							<label for="tab2" class="tabs__tab">Revisi</label>
							<input type="radio" id="tab3" name="msgs_tabs">
							<label for="tab3" class="tabs__tab">Menunggu</label>
							<div class="clearfix"></div>
		
					<div class="tabs__content">	

					<div class="tabs__content--1">
					@foreach($BahasaValidasi as $BahasaValidasi)
					<div class="media message">
						<figure class="pull-left rounded-image message__img">
							<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						</figure>
						<div class="media-body">
							<h4 class="media-heading message__heading"> {{$BahasaValidasi->title}} <span>{{ $BahasaValidasi->created_at->diffForHumans() }}</span> </h4> <hr>
							<p class="message__msg"><span>Dikirm : Admin</span> | <span> Tanggal :{{ $BahasaValidasi->created_at }} </span></p>
							<input type="checkbox" class="msg-o" id="msg-o1" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="#" onclick="return false;"><i class="pe-7s-check"></i> <span>Sudah di Validasi</span></a></li>
								<li><a href="{{ route('validasi.download', $BahasaValidasi->id) }}" class="set_fav" onclick="return true;"><i class="pe-7g-arrow2-down"></i> <span>Unduh</span></a></li>

							</ul>
						</div> 
					</div>
				</div> <!-- /message -->
					@endforeach				
			</div> <!-- /tabscontent1 -->
			
			<div class="tabs__content--2">
				@foreach($InputBahasa1 as $InputBahasa1)
				<div class="media message">
					<figure class="pull-left rounded-image message__img">
						<img class="media-object" src="{{asset('asset/img/user1.jpg')}}" alt="user">
						
					</figure>
					<div class="media-body">
						<h4 class="media-heading message__heading">{{$InputBahasa1->title}} <span>{{ $InputBahasa1->created_at->diffForHumans() }}</span></h4> <hr>
						<p class="message__msg"><span>Dikirim : UKM Bahasa</span> | <span> Tanggal : {{ $InputBahasa1->created_at}}</span></p>
						<input type="checkbox" class="msg-o" id="msg-o4" checked>
						<div class="message__controls--cont">
							<ul class="message__controls">
								<li><a href="{{route('inputvalidasi.edit', $InputBahasa1->id)}}" onclick="return true;"><i class="pe-7f-back pe-rotate-180"></i> <span>Terima</span></a></li>
								<li><a href="{{ route('validasi.download', $InputBahasa1->id) }}" class="set_fav" onclick="return true;"><i class="pe-7f-back"></i> <span>Lihat</span></a></li>
								<li><form action="{{ route('inputvalidasi.destroy', $InputBahasa1->id)}}" method="POST">
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
				@foreach($BahasaValidasi3 as $BahasaValidasi3)
				<div class="media message fav">
					<figure class="pull-left rounded-image message__img">
						<img class="media-object" src="{{ asset('asset/img/user1.jpg')}}" alt="user">
					</figure>
					<div class="media-body">
						<h4 class="media-heading message__heading">{{ $BahasaValidasi3->title }}</h4>
						<p class="message__msg"><span>{{ $BahasaValidasi3->created_at->diffForHumans() }}</span> | <span>{{ $BahasaValidasi3->created_at}}</span></p>
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

	<div class="col-md-4">
		<article class="widget">
			<header class="widget__header one-btn">
				<div class="widget__title">
					<i class="pe-7f-menu pe-rotate-90"></i><h3>Pemberitahuan</h3>
				</div>
				<div class="widget__config">
					<a href="#"><i class="pe-7f-refresh"></i></a>
				</div>
			</header>
			
			<div class="widget__content widget__grid filled pad20">
				<p><b><h2><center><u> Mohon Untuk Dibaca </u> </center></h2></b><br>
					<h5>Pastikan data yang divalidasi sudah memenuhi standarisasi peraturan pengajuan Proposal
						program kerja yang ditentukan oleh institusi. <br><br>
						Mohon untuk menghapus proposal masih dalam tabel 'revisi' apabila proposal tersebut sudah
						di validasi (diterima). <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						
						<u style="float:right">IBI DARMAJAYA</u>	
					</h5>	
				</p>			
			</div> <!-- /widget__content -->

		</article><!-- /widget -->
	</div>
    @endsection
