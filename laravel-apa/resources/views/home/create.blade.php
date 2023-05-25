

@extends('layout.dashbord')
@section('konten')
@include('sweetalert::alert')
<style>
  .image_upload > input{display:none;}
  input[type=text]{width:220px;height:auto;}
  </style>
<h1 class="h3 mb-4 text-gray-800">Buat Pengaduan</h1>

<div class="container shadow p-3 mb-2 bg-body-tertiary rounded">
  
  
    <form  method="post" action="/home" enctype="multipart/form-data">
      @csrf
      <input type="hidden" class="form-control" name='nik'>
      
  <div class="d-flex flex-row-reverse">
    <div class="p-1"><p class="image_upload">
      <label for="userImage">
      <a class="btn btn-primary btn-sm mt-2"  rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span><i class="bi bi-camera-fill"></i></a>
      </label>
      <input type="file" name="foto" id="userImage">
    </p></div>
    <div class="p-1 mt-2">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <p class="text-secondary">masukkan foto aduan di sini <i class="bi bi-arrow-right"></i></p>
      </label>
     
    </div>
  
  </div>
  
  
    
      <select class="form-select form-select-sm mb-3 mt-2" name="jenis_pengaduan" aria-label=".form-select-lg example">
        <option selected>Pilih Jenis Pengaduan</option>
        <option value="publik"> Pelayanan publik masyarakat</option>
        <option value="penyalahgunaan wewenang">Penyalahgunaan Wewenang</option> 
       
      </select>
  
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" name="isi_laporan" style="min-height:95px; max-height:250px;" id="floatingTextarea"></textarea>
    <label for="floatingTextarea">Pengaduan</label>
  </div>
  <input type="reset" class="btn btn-sm btn-danger mt-4" value="Reset">
  <button type="submit" class="btn  btn-sm btn-primary mt-4">Buat Pengaduan</button>
 
</form>
</div>




@endsection
{{-- <form  method="post" action="/home" enctype="multipart/form-data">
  @csrf
  <input type="hidden" class="form-control" name='nik'>
  
  <div class="form-floating container mb-4">
      <textarea class="form-control{{ $errors->has('isi_laporan') ? ' is-invalid' : '' }}" name="isi_laporan" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
      <label for="floatingTextarea" class="text-center text-secondary"  value="{{ Session::get('isi_laporan') }}">Isi Laporan</label>
      @if($errors->has('isi_laporan'))
      <span class="invalid-feedback">{{ $errors->first('isi_laporan') }}</span>
    @endif
    </div>
   
   <div class="row g-3">
    <div class="col">
      
      <select class="form-select" id="floatingSelect" name="jenis_pengaduan" aria-label="Floating label select example">
        <option value="publik"> Pelayanan publik masyarakat</option>
        <option value="penyalahgunaan wewenang">Penyalahgunaan Wewenang</option>
       
        
      </select>
    </div>
    <div class="col">
      <input class="form-control form-control{{ $errors->has('foto') ? ' is-invalid' : '' }} " name="foto"   id="formFileSm" type="file">
      @if($errors->has('foto'))
      <span class="invalid-feedback">{{ $errors->first('foto') }}</span>
    @endif
    </div>
  </div>
  <div class="row g-3 mt-3 mb-4">

  
  <div id="passwordHelpBlock" class="col form-text container ">
    pilih jenis pelayanan masyarakat
    </div>
    <div id="passwordHelpBlock" class="col form-text container">
      masukkan foto laporan
    </div>
  </div>
  <div class="container mt-2">
  <button type="submit" class="btn btn-primary" style="width:100%;">Buat Pengaduan</button>
  </div>

 
  

</form> --}}
