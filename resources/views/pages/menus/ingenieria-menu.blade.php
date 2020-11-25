<div class="container mb-5">
    <div class="row justify-content-center">
        @foreach($categories as $category)
            @if($category->id == 1)
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-4 text-center mt-5">
                        <a href="@if($subcategory->id == 1){{ route('construccion') }}@elseif($subcategory->id == 2){{ route('casos-exito') }}@endif" class="text-decoration-none text-dark">
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