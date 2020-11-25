<div class="container mb-5">
    <div class="row justify-content-center">
        <h2 class="col-md-12 text-center text-white">Menú de navegación</h2>
        @foreach($categories as $category)
            @if($category->id == 2)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 text-center mt-5">
                        <a href="@if($subcategory->id == 3){{ route('blindaje') }}@elseif($subcategory->id == 4){{ route('cristales') }}@elseif($subcategory->id == 5){{ route('puertas') }}@endif" class="text-decoration-none text-dark">
                            <div class="animationScale">
                                <img src="{{ asset('images/seccion_inicio/section_2.jpg') }}" class="rounded-img" alt="img_componente">
                            </div>
                            <p class="text-uppercase font-weight-bold mt-3 text-white">{{ $subcategory->name  }}</p>
                        </a>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
</div>