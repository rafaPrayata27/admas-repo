

@extends('layout.petugas')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@section('konten')

@include('sweetalert::alert')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">Hallo!! Selamat Datang {{ Auth::guard('web')->user()->name }}  <i class="fa-solid fa-hands-clapping fa-shake"></i></h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
     
        @if (Session::has('success'))
            <div class="pt-3">
            <div class="alert alert-success">
                <span class="badge rounded-pill text-bg-success">Success</span>  {{ Auth::guard('masyarakat')->user()->nama}} {{ Session::get('success') }} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
              </svg>
               <meta http-equiv="refresh" content="3;url=/home">
            </div>
            </div>
            @endif

            @if (Session::has('create'))
            <div class="pt-3">
              <div class="alert alert-primary">
                <span class="badge rounded-pill text-bg-primary">success</span>   {{ Auth::guard('masyarakat')->user()->nama }}  {{ Session::get('create') }}
              </div>
            </div>
              
          @endif
            @if (Session::has('petugas'))
            <div class="pt-3">
              <div class="alert alert-success">
                <span class="badge rounded-pill text-bg-success">success</span>   {{ Auth::guard('web')->user()->name }}  {{ Session::get('petugas') }}
              </div>
            </div>
              
          @endif
            @if (Session::has('create'))
            <div class="pt-3">
              <div class="alert alert-primary">
                <span class="badge rounded-pill text-bg-primary">success</span>   {{ Auth::guard('masyarakat')->user()->nama }}  {{ Session::get('create') }}
              </div>
            </div>
              
          @endif
          

          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary text-white mb-4">
                      <div class="card-body"> Total Pengaduan <span>{{ $pengall }}</span></div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                          <a class="small text-white stretched-link" href="#">View Details</a>
                          <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Belum Di Proses <span>{{ $pengblm }}</span></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Di Tangani <span>{{ $pengpros }}</span></div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Selesai <span>{{ $pengsls }}</span></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/user">View Details</a>
                    <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg></div>
                </div>
            </div>
        </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary text-white mb-4">
                      <div class="card-body"> Total Pengaduan <span>{{ $pengall }}</span></div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                          <a class="small text-white stretched-link" href="#">View Details</a>
                          <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Belum Di Proses <span>{{ $pengblm }}</span></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Di Tangani <span>{{ $pengpros }}</span></div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Selesai <span>{{ $pengsls }}</span></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/user">View Details</a>
                    <div class="small text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg></div>
                </div>
            </div>
        </div>
              </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
             
              <span class="visually-hidden">Next</span>
            </button>
            
          </div>
          
                <div class="container">
                  
                  
                  <section id="stats-subtitle">
                
                  <div class="row">
                    <div class="col-xl-6 col-md-12">
                      <div class="card overflow-hidden">
                        <div class="card-content">
                          <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                              <div class="align-self-center">
                                <i class="icon-speech warning font-large-2 mr-2"></i>
                              </div>
                              <div class="media-body">
                                <h4>Total Saran</h4>
                                <span>Masyarakat</span>
                              </div>
                              <div class="align-self-center">
                                <h1>{{ $allkomen }}</h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-xl-6 col-md-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                              <div class="align-self-center">
                                <i class="fa-3x mr-2 bi bi-emoji-angry danger"></i>
                                
                              </div>
                              <div class="media-body">
                                <h4>Tidak Puas</h4>
                                <span>Saran Masyarakat</span>
                              </div>
                              <div class="align-self-center"> 
                                <h1>{{ $komentidakpuas }}</h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-xl-6 col-md-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                              <div class="align-self-center">
                                <h1 class="mr-2">{{ $puas }} </h1>
                              </div>
                              <div class="media-body">
                                <h4>Puas</h4>
                                <span>Saran Masyarakat</span>
                              </div>
                              <div class="align-self-center">
                                <i class="fa-3x mr-2 bi  bi-emoji-neutral primary"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-xl-6 col-md-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                              <div class="align-self-center">
                                <h1 class="mr-2">{{ $sangatpuas }}</h1>
                              </div>
                              <div class="media-body">
                                <h4>Sangat Puas</h4>
                                <span>Saran Masyarakat</span>
                              </div>
                              <div class="align-self-center">
                                <i class="fa-3x mr-2 bi bi-emoji-laughing success"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                </div>
             
  
                
         
            
    
      
        
           
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pengaduan
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table-striped">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>status</th>
                            <th>Foto</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                       
                       @foreach ($pengaduan as $item)
                           <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->tgl_pengaduan->isoFormat('dddd, D MMMM Y') }}</td>
                            <td><a href="{{  route('dashbord.show',$item->id_pengaduan)  }}">{{ $item->isi_laporan }}</a></td>
                            <td>{{ $item->status }}</td>
                            <td> <button type="button" class="btn btn-transparent " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id_pengaduan }}">
                                <img style="max-width:80px; max-height:80px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$item->foto }}" alt="">
                              </button>
                              
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal{{ $item->id_pengaduan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered border-primary">
                                    <img style="max-width:650px; max-height:600px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$item->foto }}" alt="">
                                </div>
                              </div></td>

                           </tr>
                       @endforeach
                        
                        
                         
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
  window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('data');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(data);
    }
});

</script>
@endsection