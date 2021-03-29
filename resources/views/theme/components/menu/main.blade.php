<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Menú</h2>
                <p>Ni una buena historia comenzó con una ensalada...</p>
            </div>
        </div>
    </div>
    <!--categories-->
    @include('theme.components.menu.categories')
    <div class="container">
        @foreach($categorias as $categoria)
            @include('theme.components.menu.dinamic-menu', $categoria)
        @endforeach
    </div>
</section>