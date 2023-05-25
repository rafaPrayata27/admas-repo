

@extends('layout.petugas')
<link rel="stylesheet"{{ asset('fontawesome/css/all.css') }}>
<link rel="stylesheet" type="text/css" href="{!! asset('bootstreps/css/form.css') !!}">
@section('konten')
<main>
    <div class="container-fluid px-4">
        @include('sweetalert::alert')
           
                        
        

        <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded border-light">
          <div class="card-body">
            <div class="alert alert-dark container  fw-semibold text-dark" role="alert">
             Detail Laporan Anda
            </div> 
            <table class="table table-hover " style="width:550px ;">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                    <td>Nik Pelapor</td>
                    <td>{{ $data->nik }}</td>
                </tr>
                <tr>

                  <th>Tanggal Laporan:</th>
                  <td>{{  $data->tgl_pengaduan->isoFormat('dddd, D MMMM Y') }}</td>
                  
                </tr>
                
                <tr>
                  <th >Di Kirim Pada Jam:</th>
                  <td>{{ $data->tgl_pengaduan->format('H:i:s') }}</td>
                  
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
                  <span class="badge  text-bg-danger  ">panding</span> 

                  @elseif($data->status =='proses')
                  <span class="badge  text-bg-warning text-white ">proses</span>
                  @else
                  <span class="badge  text-bg-success " >selesai</span>
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
                  
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" style="border-radius:5%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Buat Tanggapan
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tanggapan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/dashbord" method="post">
          @csrf

          <input type="hidden" name="id_pengaduan" value="{{ $data->id_pengaduan }}">
          <input type="hidden" name="user_id">

        <div class="modal-body">
          <div class="form-floating">
            <textarea placeholder="Leave a comment here" name="tanggapan"class="form-control{{ $errors->has('tanggapan') ? ' is-invalid' : '' }}" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Tanggapan</label>
            @if($errors->has('tanggapan'))
              <span class="invalid-feedback">{{ $errors->first('tanggapan') }}</span>
            @endif
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Oke</button>
        </div>
        </form>
      </div>
    </div>
  </div>
                  
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3"  style="margin-left:1%; border-radius:5%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Ubah Status
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{'/dashbord/'.$data->id_pengaduan}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_pengaduan" value="{{ $data->id_pengaduan }}">
            <select class="form-select" name="status" aria-label="Default select example">
                @if ($data->status == '0')
  
   
                <option selected>pekerjaaan dalam peninjauan</option>
                <option value="proses">pekerjan sedang berlangsung</option>
                <option value="selesai">pekerjaan telah selesai</option>
              </select>
               @elseif($data->status =='proses')
              
              
                <option value="0">pekerjaaan dalam peninjauan</option>
                <option selected>pekerjan sedang berlangsung</option>
                <option value="selesai">pekerjaan telah selesai</option>
              </select>
               @else
             
                <option value="0">pekerjaaan dalam peninjauan</option>
                <option value="proses">pekerjan sedang berlangsung</option>
                <option selected>pekerjaan telah selesai</option>
              </select>
               @endif
              </select>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
              </tbody>
            </table>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark-subtle fw-semibold text-dark" style="border-radius:10px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Lihat Foto Laporan
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> <img src="{{ url('foto').'/'.$data->foto }}" class="card-img-bottom" alt="..."></div>
              </div>
            </div>
        </div>
          
</main>




@endsection