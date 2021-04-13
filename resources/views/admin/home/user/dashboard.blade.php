<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center popup-donacion" style="height: 300px ; background-repeat: no-repeat; background-size: cover">
            <div class="title">
                <div class="sub">Dona una</div>
                <div class="main">Piscola</div>
            </div>
        </div>
        <div class="col-md-12 alert mt-4 d-flex align-items-center" style="justify-content: space-around; flex-wrap: wrap">
            <div class="text text-center text-donar">El 100% de los fondos será donado al sueldo de nuestros colaboradores.</div>
            <a href="{{url('/cuenta/donar')}}" >
                <img src='https://www.flow.cl/img/botones/btn-donar-celeste.png'>
            </a>
        </div>
        <div class="col-md-12 card deal-card py-4 d-flex" style="flex-direction: row; width: 100%">
            <div class="text-center">
                <!--img src="https://via.placeholder.com/120" alt=""-->
                {!! QrCode::size(120)->generate('GHFIUERFGUAERHJ') !!}
            </div>

            <div class="d-flex align-items-center flex-column w-100">
                <h3>Cupon de pago</h3>
                <div class="title-deal-card">
                    <strong>Promocion:</strong>Dona una piscola.
                </div>


                <div class="token-deal-card">GHFIUERFGUAERHJ</div>
            </div>
            <div class="footer d-flex flex-column align-items-center mt-2 text-center">
                <div class="status mb-1">Valido</div>
                <div class="price-deal-card">$3000</div>
            </div>
            </div>
        </div>
    </div>
</div>