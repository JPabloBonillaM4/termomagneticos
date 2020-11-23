<div class="menu-project">
    <small class="font-weight-bold">Navegar</small>
    @foreach ($proyectos as $proyecto)
        <a data-toggle="tooltip" data-placement="right" data-html="true" title="<span class='text-uppercase'>{{ $proyecto->title }}</span>" href="#{{ $proyecto->id }}"><i class="fas fa-circle"></i></a>
    @endforeach
</div>