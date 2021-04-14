<div class="category-title row justify-content-center mb-5 pb-3 mt-5 pt-5" data-id="{{$categoria->title}}">
    <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">{{$categoria->title}}</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">{{$categoria->description}}</p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    @foreach($categoria->productos as $producto)
        @if(! $producto->s_price)
            @include('theme.components.menu.single-menu', $producto)
        @else
            @include('theme.components.menu.double-menu', $producto)
        @endif
    @endforeach
    </div>
</div>