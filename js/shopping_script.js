/**
 * Created with JetBrains PhpStorm.
 * User: dylan
 * Date: 29-5-13
 * Time: 13:08
 * To change this template use File | Settings | File Templates.
 */
var product = new Object();
function addProductToCart(productName, price, quantity) {
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
