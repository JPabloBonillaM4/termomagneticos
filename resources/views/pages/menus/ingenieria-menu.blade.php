<div class="container mb-5">
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
</div>