<!DOCTYPE html>
<html lang="en">
@include('header')
<body>  

<div class="row">
    <div class="col-lg-2">
        @include('sidebar')
    </div>
    <div class="col-lg-9">
        @yield('content')
    </div>
</div>

</body>

@include('footer')
</html>