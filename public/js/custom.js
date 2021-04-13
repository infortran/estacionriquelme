

document.addEventListener('DOMContentLoaded', ()=>{
    //popupDonacion()
})

const popupDonacion = () => {
    swal.fire({
        html:`<div class="popup-donacion">
                  <div class="title">
                      <div class="sub">Dona una</div>
                      <div class="main">Piscola</div>
                  </div>
                  <div class="text">El 100% de los fondos será donado al sueldo de nuestros colaboradores</div>
                  <div class="promo">
                      <div class="sub">Al abrir nuestro bar lleva:</div>
                      <div class="main">2 x 1</div>
                  </div>
                  <div class="img">
                      <img src="/images/piscola2.jpeg" alt="">
                  </div>
              </div>`,
        confirmButtonColor:'#fac564',
        confirmButtonText:'Quiero donar ahora',
        showCloseButton: true
    }).then((result)=>{
        if(result.isConfirmed){
            window.location.href = "/cuenta";
        }
    })
}