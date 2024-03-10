
function Ubaci(name, value) {
    localStorage.setItem(name, JSON.stringify(value));
}
function Izbaci(name) {
    return JSON.parse(localStorage.getItem(name));
}
if (Izbaci("cart") == null) {
    Ubaci("cart", []);
}
$(document).on("click", "#addCart", addToCart);

function addToCart(){
    let quantity = 0;



    let cart = Izbaci("cart");
    console.log(cart);


    for (let k of cart) {

       var provera =k.id == this.getAttribute("data-id");
        if (k.id == this.getAttribute("data-id")) {
            quantity++;
            toastr.error('Proizvod je već dodat u korpu!')

        }

    }
        if (!provera){
            toastr.success('Proizvod je uspesno dodat u korpu!')
        }
        cart.push({ "id": this.getAttribute("data-id"), "quantity": 1 });
        Ubaci("cart", cart);


}


console.log(document.location.pathname)
if(document.location.pathname=='/cart'){
    function listCart(){
        console.log("sssss")
        var cart = Izbaci('cart');

        console.log(cart)
        $.ajax({
            method: 'get',
            url: '/cart_items',
            data: {
                'products': cart
            },
            success: function (response) {
                console.log(response);
                var block = $('#cartList');
                block.empty();

                if (response.length > 0) {
                    response.forEach(function(item) {
                        block.append(
                            '<tr>' +
                            '<td>' + item.name + '</td>' +
                            '<td>' + parseInt(item.price) + '$</td>' +
                            '<td><button class="delete-item btn btn-danger" data-id="' + item.model_id + '">Delete</button></td>' +
                            '</tr>'
                        );
                    });
                } else {
                    block.append('<tr><td colspan="3">Korpa je prazna</td></tr>');
                }
            }
            ,
            error: function (err) {
                console.log(err)
            }

        })
    }
    window.onload=function (){
        listCart();
    }
    $(document).on('click', '.delete-item', function() {
        let idP = $(this).data("id");
        console.log(idP);
        let inCart = Izbaci("cart");
        let out = inCart.filter(el => el.id != idP);

        if (out.length == 0) {
            Ubaci("cart", []);
        }
        else {
            Ubaci("cart", out);

        }
        listCart();
        console.log('Proizvod je uspešno obrisan');
        toastr.warning('Obrisano!')
    });


    $(document).on('click', '#checkCart', function() {
       var inCart = Izbaci('cart');

        $.ajax({
            method: 'get',
            url: '/cart_check',
            data: {
                'products': inCart
            },
            success: function (response) {
                console.log(response);
                clearCart();
                toastr.success('Uspešna kupovina!')

            }
            ,
            error: function (err) {
                console.log(err)
                location.href = '/login'
            }

        })
    })
function clearCart(){
    Ubaci("cart", []);


    listCart();
}
$('#clearCart').click(function (){
    clearCart();
    toastr.warning('Svi proizvodi iz korpe su obrisani!')
    });
}

function changeImage(url){
    document.getElementById('mainImage').src = url;
    document.getElementById('largeImage').src = url;
}
function scrollToSection(section) {
    var section = document.querySelector(section);
    console.log(section);
    section.scrollIntoView({behavior: 'smooth'});
}
function showOverlay() {
    document.getElementById('overlay').style.display = 'flex';
    $('#largeImage').zoom();
}

function hideOverlay() {
    document.getElementById('overlay').style.display = 'none';
}
