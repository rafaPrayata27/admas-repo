
@extends('layout.petugas')
<link rel="stylesheet"{{ asset('fontawesome/css/all.css') }}>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{!! asset('bootstreps/css/form.css') !!}">
@section('konten')
@include('sweetalert::alert')
     

      {{-- @foreach ($saran as $item)
      <tr>
        <td>{{ </td>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->kepuasan }}</td>
        
      </tr>
      @endforeach --}}
      @if ($o>0)
      <div class="my-3 p-3 mt-4 bg-body rounded shadow-sm container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h6 class="border-bottom pb-2 mb-0">Saran Masyarakat</h6>
  @foreach ($saran as $item)
 
    <div class="d-flex text-body-secondary pt-3 ">
     @if ($item->rating == 'Tidak_Puas')
     <i class="bi  bi-emoji-angry-fill " style="font-size: 1.5rem;  margin-right:1%; color: rgb(219, 75, 75);"></i>
     @elseif($item->rating == 'Puas')   
     <i class="bi bi-emoji-neutral-fill" style="font-size: 1.5rem;  margin-right:1%; color: cornflowerblue;"></i>      
     @else
     <i class="bi bi-emoji-laughing-fill" style="font-size: 1.5rem;  margin-right:1%; color: rgb(79, 226, 79);"></i>
     @endif
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">{{ $item->kepuasan }}</strong>
          {{   Carbon\Carbon::parse($item->tgl_komen)->diffForHumans()}}
        </div>
        <span class="d-block">Oleh {{ $item->nama }}</span>
      </div>
    </div>
  @endforeach
    
  </div>
      @else
      <main class="container mt-4">   
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <h6 class="border-bottom pb-2 mb-0">Saran Masyarakat</h6>
          <div class="d-flex text-body-secondary pt-3">
          
            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
              <div class="text-center text-secondary">
                <h6>Belum Ada Saran Masyarakat</h6>
              </div>
              
            </div>
          </div>
         
            
         
        </div>
      </main>
      @endif

      {{-- ini --}}

      

@extends('layout.dashbord')
<link rel="stylesheet" href="fontawesome/css/all.css">
@section('konten')

@include('sweetalert::alert')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">Hallo!! Selamat Datang {{ Auth::guard('masyarakat')->user()->nama }}  <i class="fa-solid fa-hands-clapping fa-shake"></i></h4>
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
                      <div class="card-body">Belum Di Proses <span>{{ $o }}</span></div>
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
                    <div class="card-body">Di Tangani <span>{{ $proses }}</span></div>
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
                  <div class="card-body">Selesai <span>{{ $selesai }}</span></div>
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
                      <div class="card-body">Belum Di Proses <span>{{ $o }}</span></div>
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
                    <div class="card-body">Di Tangani <span>{{ $proses }}</span></div>
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
                  <div class="card-body">Selesai <span>{{ $selesai }}</span></div>
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
        
        
        
        @if ($peng>0)
             <!-- Button trigger modal -->
<button type="button" class="btn btn-info text-white mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Beri Rating Kinerja Petugas Kami
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title justify-content" id="exampleModalLabel">Berikan Saran Anda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/rating" method="post">
            @csrf
            <input type="hidden" name="nik">
            <div class="form-floating">
                <textarea class="form-control" name="kepuasan" required placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea" class="text-secondary">tanggapan/saran anda terhadap kinerja petugas kami </label>
              </div>
              <label class="mt-3 d-block text-center" for="">Beri Rating</label><br>
              <div style="margin-left:5%;">
            <div class="form-check form-check-inline">
               
                <input class="form-check-input" type="radio" required name="rating" id="inlineRadio1" value="Tidak_Puas">
                <label class="form-check-label" for="inlineRadio1"><div class="badge bg-danger text-wrap" style="width: 6rem;">
                    Tidak Puas <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5z"/>
                      </svg>
                  </div></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="rating" id="inlineRadio2" value="Puas">
                <label class="form-check-label" for="inlineRadio2"><div class="badge bg-primary text-wrap" style="width: 6rem;">
                    Puas <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-neutral-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-3 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                      </svg>
                  </div></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="rating" id="inlineRadio2" value="Sangat_Puas">
                <label class="form-check-label" for="inlineRadio2"><div class="badge bg-success text-wrap" style="width: 7rem;">
                    Sangat Puas <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                      </svg>
                  </div></label>
              </div>
              </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
      </div>
    </div>
  </div>

        @else
        <button type="button" class="btn btn-info mb-4 text-white"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover"
        data-bs-title="Hai {{ Auth::guard('masyarakat')->user()->nama }} !"
        data-bs-content=" Pengaduan anda  {{ $peng }},anda sama sekali tidak mempunyai pengaduan.Silakan terlebuh dahulu membuat pengaduan lalu beri penilaian terhadap
        kinerja para petugas kami terima kasih">
        Beri Rating Kinerja Petugas Kami
</button>
        @endif
          

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pengaduan
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>status</th>
                            <th>Foto</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       
                        @foreach ($pengaduan as $isi)
                        <tr>
                            <td>{{ $isi->tgl_pengaduan->isoFormat('dddd, D MMMM Y') }}</td>
                            <td>{{ $isi->isi_laporan }}</td>
                            
                            <td class="d-flex justify-content-center">
                                @if ($isi->status == '0')
                                <span class="badge  text-bg-danger d-flex justify-content-center ">panding</span> 

                                @elseif($isi->status =='proses')
                                <span class="badge  text-bg-warning text-white d-flex justify-content-center">proses</span>
                                @else
                                <span class="badge  text-bg-success d-flex justify-content-center" >selesai</span>
                                @endif
                        </td>
                        <center>
                        <td>
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-transparent " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $isi->id_pengaduan }}">
    <img style="max-width:80px; max-height:80px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$isi->foto }}" alt="">
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $isi->id_pengaduan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <img style="max-width:650px; max-height:600px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$isi->foto }}" alt="">
    </div>
  </div>
                        </td>
                        
                       
                            <td><a href="{{  route('home.show',$isi->id_pengaduan)  }}" type="button"class="btn btn tranparent d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" style="color: grey;" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg></a></td>

                           
                        </tr>
                        @endforeach
                        
                         
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<script src="{{ asset('bootstreps/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('bootstreps/js/bootstrap.js') }}"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>


@endsection
     


 



@endsection
