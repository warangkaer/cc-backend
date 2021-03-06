@extends('showroom2.layouts.master')

@section('title', 'Edit-merchandise')

@section('content')
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url('{{asset('assets/img/merchandise.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2><em>Merchandise</em></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->
<div class="container">
	<div class="row justify-content-center mb-3">
		<h3>Edit Merchandise</h3>	
	</div>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	
	<form action="/showroom/merchandise/edit" method="post" enctype="multipart/form-data">
		@csrf

		<input type="hidden" name="id" value="{{ $merchan->id }}">
		<input type="hidden" name="user_id" value="{{ $user }}">
		<div class="form-group">
			<div class="form-row">
				<div class="col">
					<input type="text" class="form-control" name="np" placeholder="Nama Produk" value="{{ $merchan->nama_produk }}">
				</div>
				<div class="col">
					<input type="number" class="form-control" name="harga" placeholder="Harga" value="{{ $merchan->harga }}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="form-row">
				<div class="col">
					<label for="kondisi">Kondisi</label>
					<select class="form-control" id="kondisi" name="kondisi">
						<option>Baru</option>
						<option>Bekas</option>
					</select>
				</div>
				<div class="col">
					<label for="region">Daerah</label>
					<select class="form-control" name="region_id">
						@foreach($region as $r)
							<option value="{{ $r->id }}">{{ $r->region }}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="stok">Stok</label>
					<input type="number" class="form-control" id="stok" name="stok" value="{{ $merchan->stok }}">
				</div>
				<div class="col">
					<label for="kategori">Kategori</label>
					<input type="text" class="form-control" id="kategori" name="kategori" value="{{ $merchan->kategori }}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="deskripsi">Deskripsi</label>
			<textarea class="form-control" id="deskripsi" name="deskripsi">{{ $merchan->deskripsi }}</textarea>
		</div>
	    <div class="form-group">
	    	<div class="custom-file">
			  <input type="file" class="custom-file-input" id="customFile" name="gambar[]" multiple>
			  <label class="custom-file-label" for="customFile">Pilih Gambar</label>
			</div>
	    </div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Edit">
		</div>

	</form>
	<br>
	<div class="row">
		<h3>Syarat & Ketentuan Berjualan di Showroom CC</h3>
		<br>
		<br>
		<p>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<br>
		<p>2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<br>
		<p>3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

@endsection