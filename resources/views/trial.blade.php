@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')
This demo demonstrates the jqxCalendar's range selection mode. Click on a date to select the start date and then click on another cell to select the end date.</title>
    <link rel="stylesheet" href="plugins/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script src="plugins/scripts/demos.js"></script>
    <script src="plugins/jqwidgets/jqxcore.js"></script>
    <script src="plugins/jqwidgets/jqxdatetimeinput.js"></script>
    <script src="plugins/jqwidgets/jqxcalendar.js"></script>
    <script src="plugins/jqwidgets/jqxtooltip.js"></script>
    <script src="plugins/jqwidgets/globalization/globalize.js"></script>
    <script src="plugins/jqwidgets/jqxscrollbar.js"></script>
	<script src="plugins/jqwidgets/jqxlistbox.js"></script>
	<script src="plugins/jqwidgets/jqxdropdownlist.js"></script>

@endsection

@section('maintitle', 'DIREKTORAT PENUNTUTAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'daftar perkara p-21')

@section('materi')


        
        <div id='content'>
  <script type="text/javascript">
      $(document).ready(function () {        
          // define available cultures
          var availableCultures = ['Czech (Czech Republic)', 'German (Germany)', 'English (Canada)', 'English (United States)',
          'French (France)', 'Italian (Italy)', 'Japanese (Japan)', 'Hebrew (Israel)', 'Russian (Russia)', 'Croatian (Croatia)', 'Sanskrit (India)'
          ];
          // create a calendar.
          $("#jqxCalendar").jqxCalendar({ width: '220px', height: '220px', enableTooltips: false});
          // create a ComboBox
          $("#jqxDropDownList").jqxDropDownList({ source: availableCultures,  selectedIndex: 3, width: '200px', height: '25px' });
          // set the culture.
          $("#jqxDropDownList").on('select', function (event) {
              var index = event.args.index;
              switch (index) {
                  case 0:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.cs-CZ.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'cs-CZ' });
                      });
                      break;
                  case 1:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.de-DE.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'de-DE' });
                      });
                      break;
                  case 2:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.en-CA.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'en-CA' });
                      });
                      break;
                  case 3:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.en-US.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'en-US' });
                      });
                      break;
                  case 4:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.fr-FR.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'fr-FR' });
                      });
                      break;
                  case 5:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.it-IT.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'it-IT' });
                      });
                      break;
                  case 6:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.ja-JP.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'ja-JP' });
                      });
                      break;
                  case 7:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.he-IL.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'he-IL' });
                      });
                      break;
                  case 8:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.ru-RU.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'ru-RU' });
                      });
                      break;
                  case 9:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.hr-HR.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'hr' });
                      });
                      break;
                  case 10:
                      $.getScript('plugins/jqwidgets/globalization/globalize.culture.sa-IN.js', function () {
                          $("#jqxCalendar").jqxCalendar({ culture: 'sa-IN' });
                      });
                      break;
              }
          });
      });
  </script>  
  <div style='float:left;' id='jqxWidget'>
    <div style='float: left; margin-right: 20px;' id='jqxCalendar'></div>
    <div style='float: left;'>
        <div style='float: left; font-family: "Verdana", "sans-serif"; font-size: 13px;'>Choose Culture</div>
        <br /> <br />
        <div style='float: left;' id='jqxDropDownList'></div>
    </div>
  </div>
</div>
      

@stop

@section('script')



@endsection







