@extends('layout.common')

@section('script')
<script>
        $(document).ready(function () {
 
 $('#calendar').fullCalendar({
    defaultView: 'listWeek',
     header: {
         left: 'prev,next today',
         center: 'title',
         right: 'month,agendaWeek,agendaDay'
     },
     lang: "ja",
     axisFormat: 'H:mm', //時間軸に表示する時間の表示フォーマットを指定する
     editable: false, // 変更不可にする
     eventLimit: true, // allow "more" link when too many events
     eventLimitClick:'popover',
    //  events: [
    //      {
    //          title: 'test',
    //          start: '2018-07-20'
    //      }
    //  ]
    events: {
        url:'/test'
    }
 });
});
</script>

@endsection


@section('content')
 
<div id="calendar"></div>

@endsection




