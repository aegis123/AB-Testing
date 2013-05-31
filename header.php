<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" charset="utf-8"
        type="text/javascript"></script>
<script src="js/jquery.cookie.js" charset="utf-8" type="text/javascript"></script>


<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
<script src="js/bootstrap.js" charset="utf-8" type="text/javascript"></script>
<!-- End Bootstrap -->

<link rel="stylesheet" href="css/mystyle.css"/>
<script src="js/shopping_script.js" charset="utf-8" type="text/javascript"></script>

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/ico/favicon.png">
<!-- End Fav and touch icons -->

<!-- Google Analytics -->
<script type="text/javascript" charset="utf-8">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-41294141-2']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

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
</script>
<script type="text/javascript" charset="utf-8">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-41294141-1');
    ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
