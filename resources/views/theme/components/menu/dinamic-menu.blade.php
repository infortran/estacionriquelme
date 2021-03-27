<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5" id="{{--id con el nombre de la categoria para el anchor--}}">
    <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">{{--titulo categoria dinamica--}}</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">{{--descripcion categoria dinamica--}}</p>
    </div>
</div>

@if()
    @foreach()
        @include('theme.components.menu.single-menu', $producto)
    @endforeach
@else
    @foreach()
        @include('theme.components.menu.double-menu', $producto)
    @endforeach
@endif