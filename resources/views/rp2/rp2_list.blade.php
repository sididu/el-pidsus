@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYELIDIKAN')

@section('materi')




   <div class="table-responsive no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Kasus</th>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2a')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2b')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2c')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2d')
                  </td>
                </tr>
              </tbody></table>
            </div>
    






@stop

@section('script')

@endsection