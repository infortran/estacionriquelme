

document.addEventListener('DOMContentLoaded', ()=>{
    //popupDonacion()
    confScrollIds()
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

const confScrollIds = () => {
    const categories = document.querySelectorAll('.category-title')
    let titles = []
    categories.forEach((e,i)=>{
        titles[i] = e.dataset.id
    })
    titles = titles.map((e)=>{
        return e.split(/(\s+)/)
    })
    for(let i = 0; i < titles.length; i++){
        let arr = titles[i].reduce((acc, el)=>{
            if(el && el != ' '){
                acc.push(el.toLowerCase())
            }
            return acc
        },[])
        console.log(arr)
        titles[i] = arr.join('-')
    }

    console.log(titles)
    categories.forEach((e,i)=>{
        e.id = titles[i]
    })

    //console.log(categories)
}

const scrollToTop = () => {
    const scrollToTopBtn = document.getElementById("scroll-top")
}