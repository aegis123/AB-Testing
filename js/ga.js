/**
 * Created with JetBrains PhpStorm.
 * User: dylan
 * Date: 29-5-13
 * Time: 11:34
 * To change this template use File | Settings | File Templates.
 */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-41294141-1']);
_gaq.push(['_trackPageview']);

if (window.location.pathname == '/thankyou.html.php') {
    if ($.cookie().hasOwnProperty('adres') && ($.cookie().hasOwnProperty('iphone') || $.cookie().hasOwnProperty('htc_one'))) {
        var order = [];
        var totalPrice = 0, quantity = 0;
        var randomNumber =Math.floor(Math.random()*10000001)
        for (var prop in $.cookie()) {
            switch (prop) {
                case 'adres':
                    order.push('_addTrans');
                    order.push(randomNumber);
                    order.push('A/B Testing shop');
                    order.push(prop.stad);
                    order.push(prop.stad);
                    order.push('NL');
                    break;
                case 'iphone':
                case 'htc_one':
                    var item = [];
                    item.push('_addItem');
                    item.push(String(randomNumber));
                    item.push(prop.productName);
                    item.push(prop.productName);
                    item.push('smartphones');
                    item.push(prop.price);
                    item.push(prop.quantity);
                    _gaq.push(item);
                    totalPrice += prop.price;
                    quantity += prop.quantity;
                    break;
            }
        }
        totalPrice = totalPrice * quantity;
        var tax = totalPrice*0.19 - totalPrice;
        order.splice(2, String(totalPrice));
        order.splice(3, String(tax));
        order.splice(4, String(6.75));
        console.log(order);
        _gaq.push(order);
        _gaq.push(['_trackTrans']);
    }
}

(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();