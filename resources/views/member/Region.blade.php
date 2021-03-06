@extends('member.layouts.master')

@section('title', 'Daerah')

@section('content')
<!-- sendary menu start -->
<div class="menu-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                    <div class="page-title-inner">
                        <h4 class="page-title">Daerah ({{ $userRegion->count() }})</h4>
                    </div>
					
                    <div class="filter-menu">
                        <button class="active" data-filter="*">all</button>
                        <button data-filter=".timeline">terbaru</button>
                        <button data-filter=".upload">banyak teman</button>
                        <button data-filter=".folder">default</button>
                    </div>
                    <div class="post-settings-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="post-settings arrow-shape">
                            <ul>
                                <li><button>edit profile</button></li>
                                <li><button>activity log</button></li>
                                <li><button>embed adda</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sendary menu end -->
<!-- Add region section-->
<div class="row justify-content-center mt-20">
	<div class="card col-4 border text-center bg-light">
	<form class="form-inline" action="/member/daerah/new" method="post">
    @csrf
        <input type="hidden" name="uid" value="{{ $user->id }}">
	  	<label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Tambah Daerah</h5></label>
	  	<select name="region" class="mx-auto my-1 mr-sm-2" id="inlineFormCustomSelectPref">
	    	<option selected>pilih</option>
			@foreach($region as $r)
	    	<option value="{{ $r->id }}">{{ $r->region }}</option>
		 	@endforeach
	  	</select>
        <button type="submit" class="edit-btn">Tambah</button>
	</form>
	</div>
	<div class="w-100"></div>
	<div class="col-4">
		@if (\Session::has('error'))
		    <div class="alert alert-error">
		        <ul>
		            <li><h5>{!! \Session::get('error') !!}</h5></li>
		        </ul>
		    </div>
		@endif
	</div>
</div>
<!-- end Add region section -->

<!-- region list section -->
<div class="friends-section mt-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box friends-zone">
                    <!-- start region -->
                    <div class="row mt--20 friends-list just">
                            @foreach($userRegion as $ur)
                        	<div class="col-lg-3 col-sm-6 recently request text-center">
	                            <div class="card friend-list-view">
		                            <form action="/member/daerah/delete" method="post">
		                                @csrf
		                                <div class="profile-thumb">
		                                    <h4>{{ $ur->region }}</h4>
		                                </div>
		                                <input type="hidden" name="uid" value="{{ $user->id }}">
										<input type="hidden" name="region" value="{{ $ur->id}}">
										<button type="submit" class="mb-1 btn-sm btn-danger">Hapus</button>
		                            </form>
		                         </div>
                            </div>
                            @endforeach
                        <!-- endregion -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end region list section -->
@endsection

@push('js-page')
<script>
    // $('.swal2-shown').hide();
</script>
    
@endpush