@extends('index')
@section('title','Ingeniería eléctrica')
@section('content')
    <div class="parallax titulo_ingenieria view_h">
        <div class="h-100 d-flex justify-content-center background-shadow" style="position: relative;">
            <p class="text-white text-uppercase text-center title container r2_mobile mt-5">ingeniería eléctrica</p>
            <div class="home_menu_2 hide_on_mobile">
                <div class="row justify-content-center text_contents">
                    @foreach($categories as $category)
                        @if($category->id == 1)
                            @foreach($category->subcategories as $subcategory)
                                <div class="col-md-6 text-center object_img">
                                    <a href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" class="text-decoration-none text-dark my-2">
                                        <i class="fas fa-directions"></i>
                                        <p class="text-uppercase font-weight-bold m-0">{{ $subcategory->name  }}</p>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="row justify-content-center contents_img">
                    @foreach($categories as $category)
                        @if($category->id == 1)
                            @foreach($category->subcategories as $subcategory)
                                <div class="col-md-6 p-0 img_content" style="background-image: url('@if($subcategory->id == 1){{ asset('images/construccion/titulo_construccion.jpg') }}@elseif($subcategory->id == 2){{ asset('images/casos-exito/titulo_casos_exito.jpg') }}@endif')">
                                    <a href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" class="text-decoration-none text-dark">
                                        <div class="especial_background">
                                            <p>Ver sección</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- @include('pages.menus.ingenieria-menu') --}}
        </div>
    </div>
@endsection