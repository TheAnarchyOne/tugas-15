@extends('adminlte.master')

@section('content')

    <div class="mt-3 ml-3">
        <h4>
            {{ $pertanyaan->judul}}
        </h4>
        <p>
            {{ $pertanyaan->isi}}
        </p>
        <!-- <p>
            {{ $pertanyaan->tanggal_dibuat}}
        </p>
        <p>
            {{ $pertanyaan->tanggal_diperbaharui}}
        </p>
        <p>
            {{ $pertanyaan->user_id}}
        </p>
        <p>
            {{ $pertanyaan->jawaban_id}}
        </p> -->
    </div>

@endsection