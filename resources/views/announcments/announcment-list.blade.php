<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>
@extends('layouts.front-app')

@section('content')
<!-- Main body starts -->
<div id="container-wrap" class="box-shad-5-DDD">
    <div id="container-wrap-border">
        <div id="container" class="clearfix">
            <div class="homeContent">
                <!-- Right section -->
                <div class="box-wrap ">
                    <div class="parentDiv">

                        <div class="avatar-container  homeSection dashboard-head">
                            <span class="pull-left">My  Announcements</span>
                        </div>
                        <div class="posts" id="dashboard-home">
                            <div id="accordion" role="tablist">
                                <?php $i = 0; ?>
                                @foreach($arr_announcements as $announcements)
                                <?php $i++; ?>
                                <div class="card @if($announcements->is_read==='Unread')unread-message @endif" id="annoc_{{$announcements->id}}">
                                    <div class="card-header" role="tab" >
                                        <a class="announcement-subject" data-toggle="collapse" href="javascript:void(0)" onclick="showNotifications('{{$i}}','{{$announcements->id}}')" aria-expanded="true" aria-controls="{{$i}}">{{$announcements->subject}} 
                                            <span class="annoc-date-time pull-right">{{time_elapsed_string($announcements->created_at)}}</span>
                                        </a>
                                    </div>
                                    <div id="{{$i}}" class="collapse show" role="tabpanel" aria-labelledby="{{$announcements->id}}" data-parent="#accordion">
                                        <div class="card-body">{{nl2br($announcements->message)}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right section ends -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showNotifications (notification_id, announcement_id) {
    var notification_id = notification_id;
    var announcement_id = announcement_id;
    if ($('#' + notification_id).hasClass("in")) {
    $('#' + notification_id).removeClass('in');
    } else {

    $('#' + notification_id).addClass('in');
    if ($('#annoc_' + announcement_id).hasClass('card unread-message ')){
    $.ajax({
    url: "{{url('/')}}/unread-message",
            cache: false,
            data:{id:announcement_id},
            success: function (data) {
            var obj = $.parseJSON(data);
            console.log(obj);
            if (obj.code === '1'){
                alert('Something went wrong');
                location.reload();
            } else {
                    $('#annoc_' + announcement_id).removeClass('unread-message ');
            }
            },
            error: function (error) {
            alert('Something went wrong');
            }
    });
    }
    }

    }
</script>
<!-- Main body ends -->
@endsection
