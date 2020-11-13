@include('pages.administrador.templates.header')
    <!-- Site wrapper -->
    <div class="wrapper">
        {{-- NAVBAR ADMIN --}}
        @include('pages.administrador.templates.navbar')
        {{-- ASIDE ADMIN --}}
        @include('pages.administrador.templates.aside')
        <div class="content-wrapper change_dark">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('content-header','Página en blanco')</h1>
                            @yield('content-header-extra')
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right text-uppercase">
                                <li><a href="{{ route('admin.index') }}">Inicio</a>/</li>
                                <li class="active">{{ Request::path() }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            {{-- CONTENT --}}
            <section class="content pb-5">
                <input type="hidden" value="{{ Auth::user()->id }}" id="user_id">
                @yield('contenido')
            </section>
        </div>
        {{-- MODAL DELETE --}}
        @include('pages.administrador.pages.modal_delete')
        {{-- FOOT --}}
        @include('pages.administrador.templates.foot')
    </div>
{{-- FOOTER --}}
@include('pages.administrador.templates.footer')