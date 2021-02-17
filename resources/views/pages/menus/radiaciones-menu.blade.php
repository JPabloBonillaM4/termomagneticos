{{-- <div class="container mb-5">
    <div class="row justify-content-center">
        <h2 class="col-md-12 text-center text-white">Menú de navegación</h2>
        @foreach($categories as $category)
            @if($category->id == 2)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 text-center mt-5">
                        <a href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif" class="text-decoration-none text-dark">
                            <div class="animationScale">
                                <img src="@if($subcategory->id == 3){{ asset('images/blindaje/titulo_blindaje.jpg') }}@elseif($subcategory->id == 4){{ asset('images/seccion_inicio/section_1.jpg') }}@elseif($subcategory->id == 5){{ asset('images/seccion_inicio/section_1.jpg') }}@endif" class="rounded-img" alt="img_componente">
                            </div>
                            <p class="text-uppercase font-weight-bold mt-3 text-white">{{ $subcategory->name  }}</p>
                        </a>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
</div> --}}
<div class="home_menu hide_on_mobile">
    <div class="row justify-content-center text_contents">
        @foreach($categories as $category)
            @if($category->id == 2)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 text-center object_img">
                        <a href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif" class="text-decoration-none text-dark my-2">
                            <i class="fas fa-arrow-up"></i>
                            <p class="text-uppercase font-weight-bold m-0">{{ $subcategory->name  }}</p>
                        </a>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
    <div class="row justify-content-center contents_img">
        @foreach($categories as $category)
            @if($category->id == 2)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 p-0 img_content" style="background-image: url('@if($subcategory->id == 3){{ asset('images/blindaje/titulo_blindaje.jpg') }}@elseif($subcategory->id == 4){{ asset('images/cristales/background.jpeg') }}@elseif($subcategory->id == 5){{ asset('images/seccion_inicio/section_1.jpg') }}@endif')">
                        <a href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif" class="text-decoration-none text-dark">
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