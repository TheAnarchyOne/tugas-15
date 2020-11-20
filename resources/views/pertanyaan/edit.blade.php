@extends('adminlte.master')

@section('content')

    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value=" {{ old('judul', $pertanyaan->judul) }}" placeholder="Masukkan Judul">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" class="form-control" id="isi" name="isi" value=" {{ old('isi', $pertanyaan->isi) }}" placeholder="Masukkan Isi">
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
<!-- 
                    <div class="form-group">
                        <label for="tanggal_dibuat">tanggal_dibuat</label>
                        <input type="text" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat" value=" {{ old('tanggal_dibuat', $pertanyaan->tanggal_dibuat) }}" placeholder="Masukkan tanggal_dibuat">
                        @error('tanggal_dibuat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_diperbaharui">tanggal_diperbaharui</label>
                        <input type="text" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui" value=" {{ old('tanggal_diperbaharui', $pertanyaan->tanggal_diperbaharui) }}" placeholder="Masukkan tanggal_diperbaharui">
                        @error('tanggal_diperbaharui')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="user_id">user_id</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value=" {{ old('user_id', $pertanyaan->user_id) }}" placeholder="Masukkan user_id">
                        @error('user_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jawaban_id">jawaban_id</label>
                        <input type="text" class="form-control" id="jawaban_id" name="jawaban_id" value=" {{ old('jawaban_id', $pertanyaan->jawaban_id) }}" placeholder="Masukkan jawaban_id">
                        @error('jawaban_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
               
                </div> -->
             

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            </div>
    </div>

@endsection