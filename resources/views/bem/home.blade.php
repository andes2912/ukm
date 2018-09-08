@extends('bem.template')
	@section('title')
		Halaman BEM
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
			<h1 class="main-header__title">
				<i class="pe-7f-home"></i>
				<span>Dashboard BEM</span>
			</h1>	
		</div>
				
	@endsection


	@section('isi')
					
		<div class="col-md-12">
			<article class="widget">
				<header class="widget__header one-btn">
					<div class="widget__title">
						<i class="pe-7s-info"></i><h3>Informasi Penting</h3>
					</div>
					<div class="widget__config">
						<a href="#"><i class="pe-7s-close"></i></a>
					</div>
				</header>
				
				<div class="widget__content widget__grid filled pad20">
					<p>1. Proposal pengajuan yang di ajukan oleh setiap UKM bisa dilihat pada menu UKM Darmajaya. <br>
					   2. Proposal yang muncul paling awal adalah proposal terbaru yang baru diajukan. <br>
					   3. Mohon untuk selalu melihat tanggal diajukan agar lebih mudah mengetahuinya. </p>
				</div> <!-- /widget__content -->

			</article><!-- /widget -->
		</div>

		
    @endsection
