<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>
@if($user_details->user_type==3)
@include('includes.student-topbar')
@elseif($user_details->user_type==2)
@include('includes.institute-topbar'))
@endif

@yield('content')
@include('includes.footer')
</body>
</html>
