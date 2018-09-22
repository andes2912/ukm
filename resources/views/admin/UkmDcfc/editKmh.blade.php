@extends('admin.template')
	@section('title')
		Halaman Admin - Dcfc
	@endsection

	@section('topbar')
		
	@endsection
	
	@section('header')
		<div class="main-header__nav">
					<h1 class="main-header__title">
						<i class="pe-7f-home"></i>
						<span>Halaman Input Validasi Proposal</span>
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
						di validasi (diterima). <br><br>
						<u style="float:right">IBI DARMAJAYA</u>	
					</h5>	
				</p>		
                </div> <!-- /widget__content -->

            </article><!-- /widget -->
        </div>
        
        <div class="col-md-8">
            <article class="widget widget__form">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7s-menu"></i><h3>Kirim Proposal</h3>
                    <a href="{{route('validasikmh.index')}}" class="btn blue">Lihat Validasi</a>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>
            <form action="{{ route('validasikmh.store', $kmhdcfc->id) }}" method="POST" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="widget__content">

                    <label for="input-1" class="stacked-label">
                        <i class="pe-7f-pen"></i>
                    </label>
                    <input type="text" name="title" class="stacked-input" value=" {{$kmhdcfc->title}} " id="input-1" placeholder="Judul Proposal">                   

                    <label for="input-1" class="stacked-label">
                        <i class="pe-7f-pen"></i>
                    </label>                   
                    <input type="text" class="stacked-input" id="input-1"  placeholder="Status Proposal" disabled>
                        <select class="btn btn-block white dropdown-toggle" type="button" name="status">
                            <option value="Disetujui">Disetujui</option>
                            <option value="Revisi">Revisi</option>
                            <option value="Menunggu">Menunggu</option>
                        </select>
                    
                    <label class="full-label">
                        <input type="file" name="file" id="file-att">
                        <i class="pe-7f-paperclip"></i><span class="label">Pilih File .pdf</span>
                    </label>
                    <button type="submit" onclick="return true;">Send</button>
                </div>
                </form>
            </article>
        </div>
    @endsection
