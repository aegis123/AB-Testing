/**
 * Created with JetBrains PhpStorm.
 * User: dylan
 * Date: 29-5-13
 * Time: 13:08
 * To change this template use File | Settings | File Templates.
 */

function addProductToCart(productName, price, quantity) {
    var product = {};
    if(productName != null || productName != undefined) {
        product.productName = productName;
    }
    if(price != null || price != undefined) {
        product.price = price;
    }
    if(quantity != null || quantity != undefined) {
        product.quantity = quantity;
    }
    var json = JSON.stringify(product);
    $.cookie(product.productName, json);
}

function createRow(product) {
    var tr = $('<tr></tr>');
    var td1 = $('<td></td>').text(product.productName);
    var td2 = $('<td></td>').html('&euro;' + product.price);
    var td3 = $('<td></td>');
    var input = $('<input>')
        .attr('type', 'number')
        .attr('min', '1')
        .attr('style', 'width:50px;')
        .attr('id', 'product_quantity')
        .val(product.quantity)
        .appendTo(td3);
    var td4 = $('<td></td>').html('&euro;' + (product.price * product.quantity));
    var td5 = $('<td></td>');
    var update = $('<button></button>')
        .attr('type', 'button')
        .attr('onclick', "refreshCart('"+product.productName+"')");
    update.addClass('btn');
    var glyph1 = $('<i></i>').addClass('icon-refresh');
    var del = $('<button></button>').addClass('btn btn-danger')
        .attr('type', 'button')
        .attr('onclick', "deleteProductFromCart('" + product.productName+"')");
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

function createShoppingCart() {
    for (property in $.cookie()) {
        switch(property) {
            case 'iphone':
            case 'htc_one':
                var obj = null;
                obj = JSON.parse($.cookie(property));
                if(obj != null){
                    createRow(obj);
                }
                break;
        }
    }
}

function deleteProductFromCart(productName){
    $.cookie(productName, null); // delete cookie
    document.location.reload();
}

function refreshCart(productName){
    if(productName != null || productName != undefined){
        obj = JSON.parse($.cookie(productName));
        obj.quantity = document.getElementById('product_quantity').value;
    }
    console.log(obj);
    console.log('JSON to String:'+JSON.stringify(obj))
    console.log($.cookie(productName, JSON.stringify(obj)));
    console.log('Cookie: ' + $.cookie(productName));

}