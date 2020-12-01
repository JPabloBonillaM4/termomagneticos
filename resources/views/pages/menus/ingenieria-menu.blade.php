{{-- <div class="container mb-5">
    <div class="row justify-content-center">
        <h2 class="col-md-12 text-center text-white">Menú de navegación</h2>
        @foreach($categories as $category)
            @if($category->id == 1)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 text-center mt-5">
                        <a href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" class="text-decoration-none text-dark">
                            <div class="animationScale">
                                <img 
                                    src="@if($subcategory->id == 1){{ asset('images/construccion/titulo_construccion.jpg') }}@elseif($subcategory->id == 2){{ asset('images/casos-exito/titulo_casos_exito.jpg') }}@endif" 
                                    class="rounded-img" alt="img_componente">
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
            @if($category->id == 1)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-6 text-center object_img">
                        <a href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" class="text-decoration-none text-dark my-2">
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