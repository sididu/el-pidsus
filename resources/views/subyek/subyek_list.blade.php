@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div><h3><a href="home"><img class="push-left" src="dist/img/logo-kejaksaan.png" width="100"></a>
  Dashboard
  <small>Control panel</small>
</h3>
</div>
@stop

@section('content')
<div class="box box-success">
  <div class="box-header with-border">
  <h3 class="box-title text-uppercase">DAFTAR Tahanan <small>[RT-1]</small></h3>
    <div class="pull-right">
      <a href="frp1" class="btn btn-defaul btn-xs"> Tambah Kasus &nbsp; <span class="glyphicon glyphicon-plus"></span></a>
    </div>
  </div>
  <div class="box-body">




    <table class="table table-striped">
      <th>
        <td width="33%">
          Tersangka
        </td>
        <td width="33%">
          Kasus
        </td>
        <td width="33%">
          Obyek Pidana
        </td>
      </th>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk1')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk2')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk3')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk4')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk5')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk6')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk7')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk8')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('modul._tsk9')</div>
        </td>
      </tr>

    </table>
    
    






  </div>
  <div class="panel-footer">Panel footer</div>
</div>

@stop