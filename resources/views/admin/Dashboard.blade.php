@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      {{-- Content --}}
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- small box -->
              <div class="small-box bg-success  ">
                <div class="inner">
                  <h3>{{ $news }}</h3>
  
                  <p>Keuangan Nasional</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-usd"></i>
                </div>
                <a href="{{ '/admin/news/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $news }}</h3>
  
                  <p>Keuangan Region 1</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-usd"></i>
                </div>
                <a href="{{ '/admin/news/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $event }}</h3>
  
                  <p>Keuangan Region 2</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-usd"></i>
                </div>
                <a href="{{ '/admin/event/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $user }}</h3>
  
                  <p>Keuangan region 3</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-usd"></i>
                </div>
                <a href="{{ '/admin/user/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>{{ $news }}</h3>
        
                        <p>Berita</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-speakerphone"></i>
                      </div>
                      <a href="{{ '/admin/news/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                      <div class="inner">
                        <h3>{{ $event }}</h3>
        
                        <p>Event</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-model-s"></i>
                      </div>
                      <a href="{{ '/admin/event/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-indigo">
                      <div class="inner">
                        <h3>{{ $user }}</h3>
        
                        <p>Junlah User</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                      <a href="{{ '/admin/user/list' }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
            </div>
        </div>
      </section>
      {{-- End Content --}}
</div>
    
@endsection