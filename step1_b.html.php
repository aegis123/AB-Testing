<!DOCTYPE html>
<html>
<head>
    <!-- Google Analytics Content Experiment code -->
    <script>function utmx_section(){}function utmx(){}(function(){var
            k='72897682-0',d=document,l=d.location,c=d.cookie;
            if(l.search.indexOf('utm_expid='+k)>0)return;
            function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
                indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
                length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
                '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
                    '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
                    '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
                    valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
                    '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
    </script><script>utmx('url','A/B');</script>
    <!-- End of Google Analytics Content Experiment code -->
    <title>Index A/B testing</title>
    <?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?>
<div class="container">
    <div>
        <fieldset>
            <legend>Adres gegevens</legend>
            <form class="form-horizontal" action="step2.html.php" method="POST">
                <div class="control-group">
                    <label class="control-label" for="naam">Naam:</label>
                    <div class="controls">
                        <input type="text" id="naam" placeholder="naam" name="naam" style="width: 21em;" required />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="straat">Straat en huisnummer:</label>
                    <div class="controls">
                        <input type="text" id="straat" placeholder="straat" name="straat" style="width: 17em;" required />
                        <input type="text" id="huisnr" placeholder="huisnr" name="huisnr" style="width: 3em;" required />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="postcode">Stad en Postcode:</label>
                    <div class="controls">
                        <input type="text" id="postcode" placeholder="postcode" name="postcode" style="width: 5em;" required/>
                        <input type="text" id="stad" placeholder="stad" name="stad" style="width: 15em;" required />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" class="btn btn-primary" value="Bestellen" />
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>