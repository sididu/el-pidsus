@extends('layouts.penyidikan_template')

@section('title', 'Buat Pengumuman')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Ganti Judul Halaman')

@section('materi')

        <div class="row">
        	<<div class="col-md-8 col-md-offset-2">
        	<h1>Buat Pengumuman</h1>
        	<hr>
        		{!! Form::open(['route' => 'pengumuman.store']) !!}
    				{{ Form::label('judul', 'Judul')}}
				{!! Form::close() !!}
        	</div>
        </div>
      
@stop

@section('script')

@endsection
