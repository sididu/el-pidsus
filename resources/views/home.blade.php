@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Dashboard')

@section('materi')

@include('partials._dataperkara')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._3dpiedonut')
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._3dbubble')
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('partials._pemulihanaset')
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kerugiannegara')
	</div>
</div>
      
@stop

@section('script')

@endsection
