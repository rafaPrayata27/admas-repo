

@extends('layout.dashbord')
<link rel="stylesheet"{{ asset('fontawesome/css/all.css') }}>
<link rel="stylesheet" type="text/css" href="{!! asset('bootstreps/css/form.css') !!}">
@section('konten')
<main>
    <div class="container-fluid px-4">
       
           
                        
        

        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded border-light">
          <div class="card-body">
            <div class="alert alert-primary container  fw-semibold text-dark" role="alert">
             Detail Laporan Anda
            </div> 
            <table class="table table-hover " style="width:550px ;">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <th>Tanggal Laporan:</th>
                  <td>{{  $data->tgl_pengaduan->isoFormat('dddd, D MMMM Y') }}</td>
                  
                </tr>
                
                <tr>
                  <th >Di Kirim Pada Jam:</th>
                  <td>{{ $data->tgl_pengaduan->format('H:i:s' ) }}</td>
                  
                </tr>
                <tr>
                  <th >Kategori Pengaduan:</th>
                  <td >{{ $data->jenis_pengaduan }}</td>
                 
                </tr>
                <tr>
                  <th >Isi Laporan:</th>
                  <td >{{ $data->isi_laporan }}</td>
                 
                </tr>
                <tr>
                  <th>Status Pengerjaan:</th>
                <td >
                  @if ($data->status == '0')
                  <div class="badge bg-danger text-wrap" style="width: 5rem;">
                    pending
                  </div>

                  @elseif($data->status =='proses')
                  <div class="badge bg-warning text-wrap" style="width: 5rem;">
                    proses
                  </div>
                  @else
                  <div class="badge bg-success text-wrap" style="width: 5rem;">
                    selesai
                  </div>
                  @endif
                </td>
                </tr>
                <tr>
                  <th>Presentase:</th>
                  <td>
                    @if ($data->status == '0')
                    <div class="progress " role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger  progress-bar-striped progress-bar-animated " style="width: 10%">5%</div>
                      </div>
                        @elseif($data->status == 'proses')
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 50%">50%</div>
                          </div>
                    @else
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                      </div>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary-subtle fw-semibold text-dark" style="border-radius:10px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Lihat Foto Laporan
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> <img src="{{ url('foto').'/'.$data->foto }}" class="card-img-bottom" alt="..."></div>
              </div>
            </div>
        </div>

       
    
       @if ($tanggapan>0)
       <main class="container mt-5">
  
        <div class="my-3 p-3 bg-body rounded shadow p-3 mb-5 bg-body-tertiary rounded">
          <h6 class="border-bottom pb-2 mb-0">Tanggapan Petugas</h6>
         
          @foreach ($arguments as $field)
          <div class="d-flex text-body-secondary pt-3">
           
            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
              <div class="d-flex justify-content-between">
                <strong class="text-gray-dark">{{ $field->tanggapan }}</strong>
                <span>{{ Carbon\Carbon::parse($field->tgl_tanggapan)->diffForHumans() }}</span>
              </div>
              <span class="d-block">Di Tanggapi Oleh {{ $field->name }}</span>
            </div>
          </div>
          @endforeach
         
        </div>
      </main>
       @else
    <main class="container mt-5">   
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Tanggapan Petugas</h6>
    <div class="d-flex text-body-secondary pt-3">
    
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="text-center text-secondary">
          <h6>Belum Ada Tanggapan Dari Petugas</h6>
        </div>
        
      </div>
    </div>
   
      
   
  </div>
</main>
       @endif
          
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection