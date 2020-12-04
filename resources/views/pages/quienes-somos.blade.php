@extends('index')
@section('content')
    <div class="parallax section1">
        <div class="h-100 d-flex justify-content-center align-items-center background-shadow columnFlex">
            <div class="logos-inicio ml-2">
                <img src="{{ asset('images/logos_inicio/autonics.png') }}" class="mr-3 card-contact img-fluid img-logo-index" alt="logo autonics">
                <img src="{{ asset('images/logos_inicio/electronicon-signet.png') }}" class="mt-2 card-contact img-fluid img-logo-index" alt="logo signet">
                <img src="{{ asset('images/eaton-logo-1.png') }}" class="card-contact mt-2 img-fluid img-logo-index p-2" alt="logo eaton">
                <img src="{{ asset('images/logos_inicio/ide.png') }}" class="mr-3 card-contact mt-2 img-fluid img-logo-index p-2" alt="logo ide">
                <img src="{{ asset('images/logos_inicio/tdk.png') }}" class="mt-2 card-contact img-fluid img-logo-index p-2" alt="logo tdk">
                <img src="{{ asset('images/logos_inicio/moeltek.png') }}" class="mr-3 card-contact mt-2 img-fluid img-logo-index p-2" alt="logo moeltek">
                <img src="{{ asset('images/logos_inicio/finder-cut.png') }}" class="card-contact mt-2 img-fluid img-logo-index" alt="logo finder">
            </div>
            <h1 class="title-our text-white text-uppercase text-center title adjust_title adjust_title_mobile container">termomagnéticos y control de radiaciones S.A de C.V</h1>
            {{-- <a data-scroll href="#quienes_somos" class="arrow_ancle">
                <div class="arrow bounce mt-5 mobile_arrow">
                    <span class="fa fa-arrow-down fa-2x"></span>
                </div>
            </a> --}}
        </div>
    </div>
    @include('pages.menus.home-menu')
@endsection