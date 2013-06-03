$(document).ready(function () {
    var refer_url = String(document.referrer.substring(35, 52));
    if (window.location.pathname === '/step2.html.php') {
        var stepA = String('/step1_a.html.php'), stepB = String('/step1_b.html.php');
        switch (refer_url) {
            case stepA:
            case stepB:
                $('#back_button').attr('href', refer_url);
                break;
        }
    }

    var idActive;
    switch(window.location.pathname) {
        case '/index.html.php':
            idActive = 'home';
            break;
        case '/winkelmandje.html.php':
            idActive = 'shoppingcart';
            break;
        case '/product_htc_one.html.php':
            idActive = 'htc_one';
            break;
        case '/product_iphone.html.php':
            idActive = 'iphone';
            break;
        case '/contact.html.php':
            idActive = 'contact';
            break;
    }
    $('li.active').removeAttr('class', 'active');
    $('#'+idActive).attr('class', 'active');
});


function addProductToCart(productName, price, quantity) {
    var product = {};
    var json;
    if (productName != null || productName != undefined) {
        product.productName = productName;
    }
    if (price != null || price != undefined) {
        product.price = price;
    }
    if (quantity != null || quantity != undefined) {
        product.quantity = quantity;
    }
    json = JSON.stringify(product);
    $.cookie(product.productName, json);
}

function createRow(product) {
    var tr = $('<tr></tr>').attr('id', product.productName);
    var td1 = $('<td></td>').text(product.productName);
    var td2 = $('<td></td>').html('&euro;' + product.price);
    var td3 = $('<td></td>');
    var input = $('<input>')
        .attr('type', 'number')
        .attr('min', '1')
        .attr('style', 'width:50px;')
        .attr('id', 'product_quantity_' + product.productName)
        .val(product.quantity)
        .appendTo(td3);
    var td4 = $('<td></td>').attr('id', product.productName + '_total').html('&euro;' + (product.price * product.quantity));
    var td5 = $('<td></td>');
    var update = $('<button></button>')
        .attr('type', 'button')
        .attr('onclick', "refreshCart('" + product.productName + "')");
    update.addClass('btn');
    var glyph1 = $('<i></i>').addClass('icon-refresh');
    var del = $('<button></button>').addClass('btn btn-danger')
        .attr('type', 'button')
        .attr('onclick', "deleteProductFromCart('" + product.productName + "')");
    var glyph2 = $('<i></i>').addClass('icon-remove icon-white');
    glyph1.appendTo(update);
    glyph2.appendTo(del);
    td5.html(update[0].outerHTML + del[0].outerHTML);
    td1.appendTo(tr);
    td2.appendTo(tr);
    td3.appendTo(tr);
    td4.appendTo(tr);
    td5.appendTo(tr);
    tr.appendTo('#table_data');
}

function disableButton() {
    var disableButton = true;
    for (var property in $.cookie()) {
        switch (property) {
            case 'iphone':
            case 'htc_one':
                disableButton = false;
                break;
        }
    }
    if (disableButton) {
        $('#order_button').addClass('disabled').attr('onclick', 'return false;');
    } else {
        $('#order_button').removeClass('disabled').removeAttr('onclick');
    }
    return disableButton;
}

function createShoppingCart() {
    for (var property in $.cookie()) {
        switch (property) {
            case 'iphone':
            case 'htc_one':
                console.log(property);
                var obj = null;
                obj = JSON.parse($.cookie(property));
                if (obj != null) {
                    createRow(obj);
                }
                break;
        }
    }
    disableButton();
}

function deleteProductFromCart(productName) {
    $.removeCookie(productName); // delete cookie
    $('#' + productName).remove();
    disableButton();
}

function refreshCart(productName) {
    if (productName != null || productName != undefined) {
        obj = JSON.parse($.cookie(productName));
        obj.quantity = document.getElementById('product_quantity_' + productName).value;
        $('#' + productName + '_total').html('&euro;' + (obj.price * obj.quantity));
    }
    $.cookie(productName, JSON.stringify(obj));
    disableButton();
}
