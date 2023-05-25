@extends('layout.dashbord')
@section('konten')

<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<div class="container-fluid">
    @include('sweetalert::alert')

    <!-- Page Heading -->
    @if (session::has('success'))
    <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
        <i class="bi-check-circle-fill"></i>
        <strong class="mx-2">Success!</strong>{{ Auth::guard('masyarakat')->user()->nama }} {{ session::get('success') }}
        <meta http-equiv="refresh" content="2;url=/home">
    </div>
    
        
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        @if ($peng>0)
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Kotak Saran <i class="bi bi-envelope-paper"></i></a>
       
        @endif
       

    </div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Semua Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $peng }}</div>
                        </div>
                        <div class="col-auto">
                            <li type="button" class="nav-item dropdown no-arrow mx-1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-eye"></i>
                              </button>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Semua Pengaduan 
                                    </h6>
                                    
                                    
                                   @foreach ($all as $item)
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            
                                        </div>
                                        <div class="  ">
                                            <div class="d-inline-block text-truncate" style="max-width: 170px;">{{ $item->isi_laporan }}</div>
                                            <div class="small text-gray-500">di buat {{ Carbon\Carbon::parse($item->tgl_pengaduan)->diffForHumans()  }}</div>
                                        </div>
                                    </a>
                                       
                                   @endforeach
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More complaint</a>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Belum Di Peroses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $o }}</div>
                        </div>
                        <div class="col-auto">
                            <li type="button" class="nav-item dropdown no-arrow mx-1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-eye"></i>
                              </button>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                     Belum Di proses
                                    </h6>
                                    
                                    
                                   @foreach ($blm as $item)
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            
                                        </div>
                                        <div class="  ">
                                            <div class="d-inline-block text-truncate" style="max-width: 170px;">{{ $item->isi_laporan }}</div>
                                            <div class="small text-gray-500">di buat {{ Carbon\Carbon::parse($item->tgl_pengaduan)->diffForHumans()  }}</div>
                                        </div>
                                    </a>
                                       
                                   @endforeach
                                    <a class="dropdown-item text-center small text-gray-500 " href="#">Read More complaint</a>
                                </div>
                            </li>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Sedang Di Proses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $proses }}</div>
                        </div>
                        <div class="col-auto">
                            <div class="col-auto">
                                <li type="button" class="nav-item dropdown no-arrow mx-1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-eye"></i>
                                  </button>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="messagesDropdown">
                                        <h6 class="dropdown-header">
                                            Sedang Di Proses
                                        </h6>
                                        
                                        
                                       @foreach ($prs as $item)
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3">
                                                
                                            </div>
                                            <div class="  ">
                                                <div class="d-inline-block text-truncate" style="max-width: 170px;">{{ $item->isi_laporan }}</div>
                                                <div class="small text-gray-500">di buat {{ Carbon\Carbon::parse($item->tgl_pengaduan)->diffForHumans()  }}</div>
                                            </div>
                                        </a>
                                           
                                       @endforeach
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More complaint</a>
                                    </div>
                                </li>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pengerjaan Telah Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $selesai }}</div>
                        </div>
                        <div class="col-auto">
                            <li type="button" class="nav-item dropdown no-arrow mx-1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-eye"></i>
                              </button>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Pengerjaan Telah Selesai
                                    </h6>
                                    
                                    
                                   @foreach ($sls as $item)
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            
                                        </div>
                                        <div class="  ">
                                            <div class="d-inline-block text-truncate" style="max-width: 170px;">{{ $item->isi_laporan }}</div>
                                            <div class="small text-gray-500">di buat {{ Carbon\Carbon::parse($item->tgl_pengaduan)->diffForHumans()  }}</div>
                                        </div>
                                    </a>
                                       
                                   @endforeach
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Earnings (Monthly) Card Example -->
       
    </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row g-3">
            <div class="col">
             <h6 class="m-0 font-weight-bold text-primary">Daftar Pengaduan Anda</h6>
            </div>
            <div class="col" style="margin-left:30%;">
                <form action="{{ url('home') }}" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" >
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"  name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            </div>
          </div>
      </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>status</th>
                            <th class="text-center">Foto</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                           
                            @foreach ($pengaduan as $isi)
                            <tr class="">
                                <td class="">{{ $isi->tgl_pengaduan->isoFormat('dddd, D MMMM Y') }}</td>
                                <td class="">{{ $isi->isi_laporan }}</td>
                                
                                <td class="">
                                    @if ($isi->status == '0')
                                    <span class="badge  text-bg-danger  ">panding</span> 
                                    
                                    @elseif($isi->status =='proses')
                                    <span class="badge  text-bg-warning text-white ">proses</span>
                                    @else
                                    <span class="badge  text-bg-success " >selesai</span>
                                    @endif
                            </td>
                            <center>
                            <td>
                                <!-- Button trigger modal -->
    <button type="button" class="btn btn-transparent" style="margin-left:20%;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $isi->id_pengaduan }}">
        <img style="max-width:80px; max-height:80px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$isi->foto }}" alt="">
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal{{ $isi->id_pengaduan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <img style="max-width:650px; max-height:600px;"  class="object-fit-xl-contain border rounded" src="{{ url('foto').'/'.$isi->foto }}" alt="">
        </div>
      </div>
                            </td>
                            
                           
                                <td class="position-relative"><a href="{{  route('home.show',$isi->id_pengaduan)  }}" type="button"class="btn btn tranparent d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" style="color: grey;" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg></a></td>
    
                               
                            </tr>
                            @endforeach
                            
                        
                    </tbody>
                </table>
                {{ $pengaduan->links() }}
               
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Saran Anda</h1>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- Page level plugins -->
 <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

 <!-- Page level custom scripts -->
 <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

  

@endsection