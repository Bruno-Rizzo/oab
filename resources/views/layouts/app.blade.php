<!DOCTYPE html>

<html lang="pt-BR">

@include('layouts.header')

<body data-topbar="dark" data-layout="horizontal">

    <div id="layout-wrapper">

        @include('layouts.topbar')

        @include('layouts.navbar')

        <div class="main-content">

            @yield('main_content')

            @include('layouts.footer')

        </div>

    </div>

    @include('layouts.scripts')

    @include('sweetalert::alert')

    @livewireScripts

</body>

</html>
