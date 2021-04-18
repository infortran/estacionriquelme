<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center popup-donacion" style="height: 300px ; background-repeat: no-repeat; background-size: cover">
            <div class="pop_title">
                <div class="sub_title">Dona una</div>
                <div class="main_title">Piscola</div>
            </div>
        </div>
        <div class="col-md-12 alert mt-4 d-flex align-items-center" style="justify-content: space-around; flex-wrap: wrap">
            <div class="text text-center text-donar">El 100% de los fondos será donado al sueldo de nuestros colaboradores.</div>
            <a href="{{url('/cuenta/donar')}}" >
                <img src='https://www.flow.cl/img/botones/btn-donar-celeste.png'>
            </a>
        </div>

        @foreach($cupones as $cupon)
        <div class="col-md-12 card deal-card">
            <div class="deal-card-header">
                <h3>Cupón de donación</h3>
            </div>
            <hr>
            <div class="deal-card-body">
                <div class="flow-order d-flex align-items-center justify-content-center flex-column">
                    <div class="title-order">Flow Nº :</div>
                    <div class="number-deal-card">{{$cupon->flow_order}}</div>
                </div>
                <div class="text-center d-flex align-items-center justify-content-center">
                    <!--img src="https://via.placeholder.com/120" alt=""-->
                    {!! QrCode::size(80)->generate($cupon->token) !!}
                    <div class="token-deal-card">{{$cupon->token}}</div>
                </div>

                <div class="cupon-info d-flex align-items-center flex-column justify-content-center text-center">
                    <div class="title-cupon">
                        <strong>Promocion:</strong>Dona una piscola.
                    </div>
                    <div class="fecha-cupon">
                        <strong>Fecha: </strong>{{$cupon->created_at->format('d/m/Y')}}
                    </div>
                </div>
                <div class="footer d-flex flex-column align-items-center text-center">
                    @if($cupon->pagado)
                        <div class="status error mb-1">Cobrado</div>
                        @else
                        <div class="status valid mb-1">Valido</div>
                        @endif

                    <div class="price-deal-card">$ {{$cupon->precio}}</div>
                </div>
            </div>


        </div>
        @endforeach
    </div>
</div>