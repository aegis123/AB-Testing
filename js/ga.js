/**
 * Created with JetBrains PhpStorm.
 * User: dylan
 * Date: 29-5-13
 * Time: 11:34
 * To change this template use File | Settings | File Templates.
 */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-41294141-2']);
_gaq.push(['_trackPageview']);

if (window.location.pathname == '/thankyou.html.php') {
    if (!($.cookie().hasOwnProperty('adres') && ($.cookie().hasOwnProperty('iphone') || $.cookie().hasOwnProperty('htc_one')))) {
        var order = [];
        var totalPrice = 0;
        var randomNumber = Math.floor(Math.random() * 10000001);
        var json;
        for (var prop in $.cookie()) {
            switch (prop) {
                case 'adres':
                    json = JSON.parse($.cookie(prop));
                    order.push('_addTrans');
                    order.push(String(randomNumber));
                    order.push('A/B Testing shop');
                    order.push(json.stad);
                    order.push(json.stad);
                    order.push('NL');
                    $.removeCookie(prop)
                    break;
                case 'iphone':
                case 'htc_one':
                    json = JSON.parse($.cookie(prop));
                    var item = [];
                    item.push('_addItem');
                    item.push(String(randomNumber));
                    item.push(String(json.productName));
                    item.push(String(json.productName));
                    item.push('smartphones');
                    item.push(String(json.price));
                    item.push(String(json.quantity));
                    $.removeCookie(prop);
                    _gaq.push(item);
                    totalPrice += json.price * json.quantity;
                    break;
            }
        }
        var tax = totalPrice * 0.19;
        order.splice(2, 0, [String(totalPrice), String(tax), String(6.75)]);
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