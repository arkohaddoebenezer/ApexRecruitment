<!DOCTYPE html>
<html>
@include('admin.includes.head')

<body>
    @include('admin.includes.preloader')
    @include('admin.includes.header')
    @include('admin.includes.leftsidebar')
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
		<div class="pd-ltr-20">
            @yield('content')
        </div>
    </div>
    @include('admin.includes.footer')
    @include('admin.includes.script')
</body>

</html>
