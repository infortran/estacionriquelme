<div class="pricing-entry d-flex ftco-animate">
    <div class="icono {{$producto->icon}}">
        <span class="flaticon-{{$producto->icon}}"></span>
    </div>
    <div class="desc pl-3">
        <div style="display:flex">
            <div style="flex:2">
                <div class="d-flex text align-items-center">
                    <h3><span>{{$producto->title}}</span></h3>
                </div>
                <div class="d-block">
                    <p>{{$producto->description}}</p>

                </div>
            </div>
            <div style="flex:.5" class="double-price d-none d-lg-flex">
                <span style="color:#fac564;font-size: 17px" class="price">{{$producto->m_capacity}} ${{number_format($producto->m_price,0,'','.')}}</span>
                <span style="color:#fac564;font-size: 17px" class="price">{{$producto->s_capacity}} $${{number_format($producto->s_price,0,'','.')}}</span>
            </div>
        </div>
        <div class="double-price-xs d-flex d-lg-none text-center">
            <div style="color:#fac564;flex:1" class="price mobile-price">
                <div>{{$producto->m_capacity}}</div>
                <div style="font-size: 17px">${{number_format($producto->m_price,0,'','.')}}</div>
            </div>
            <div style="color:#fac564;flex:1" class="price sec-price">
                <div>{{$producto->s_capacity}}</div>
                <div style="font-size: 17px">${{number_format($producto->s_price,0,'','.')}}</div>
            </div>
            <hr>
        </div>
    </div>
</div>