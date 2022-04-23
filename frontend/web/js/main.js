// import alert from "../../../vendor/npm-asset/bootstrap/js/src/alert";

$('.brand').on('click', function (event) {
    event.preventDefault();
    alert('Mahsulot yo\'q');
});

function showCart(cart){
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}


function clearCart() {
    $.ajax({
        url: '/site/clear',
        type: 'GET',
        success: function (res) {
            if (!res) alert('xatolik!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
}


function getCar() {
    $.ajax({
        url: '/site/show',
        type: 'GET',
        success: function (res) {
            if (!res) alert('xatolik!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}


$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/site/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert('xatolik!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

