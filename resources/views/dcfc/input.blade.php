@extends('bahasa.template')
	@section('title')
		Halaman DCFC
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Dashboard Input Proposal UKM DCFC</span>
					</h1>
					
				</div>
				
	@endsection

    @section('isi')
        <div class="col-md-12">
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
                    <h2> INI Pemberitahuan</h2>
                </div> <!-- /widget__content -->

            </article><!-- /widget -->
        </div>
        
        <div class="col-md-10">
            <article class="widget widget__form">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7s-menu"></i><h3>Kirim Proposal</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>
            <form action="{{ route('inputdcfc.store') }}" method="POST" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="widget__content">
                    
                    <label for="input-1" class="stacked-label">
                        <i class="pe-7f-pen"></i>
                    </label>
                    <input type="text" name="title" class="stacked-input" id="input-1" placeholder="Judul Proposal">
                    
                    <label class="full-label">
                        <input type="file" name="file" id="file-att">
                        <i class="pe-7f-paperclip"></i><span class="label">Attachment</span>
                    </label>
                    <button type="submit" onclick="return true;">Send</button>
                </div>
                </form>
            </article>
		</div>
    @endsection
