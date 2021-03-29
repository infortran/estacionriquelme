<div class="pricing-entry d-flex ftco-animate">
    <div class="icono {{$producto->icon}}">
        <span class="flaticon-{{$producto->icon}}"></span>
    </div>
    <div class="desc pl-3">
        <div class="d-flex text align-items-center">
            <h3><span>{{$producto->title}}</span></h3>
            <span class="price">{{$producto->m_capacity ?? ''}}</span>
            <span class="price">${{number_format($producto->m_price, 0, '', '.')}}</span>
        </div>
        <div class="d-block">
            <p>{{$producto->description ?? ''}}</p>
        </div>
    </div>
</div>