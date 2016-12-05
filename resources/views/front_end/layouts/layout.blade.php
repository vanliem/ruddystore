<!DOCTYPE html>
<!--[if lt IE 8]>      
<html class="no-js lt-ie10 lt-ie9 lt-ie8">
    <![endif]-->
    <!--[if IE 8]>         
    <html class="no-js lt-ie10 lt-ie9">
        <![endif]-->
        <!--[if IE 9]>         
        <html class="no-js lt-ie10">
            <![endif]-->
            <!--[if gt IE 8]><!--> 
            <html class="no-js">
                <meta http-equiv="content-type" content="text/html;charset=utf-8" />
                <head>
                    <base href="{!! config('url.baseUrl') !!}">
                    <meta charset="utf-8">
                    <title>Ruddy Store Online</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="description" content="">
                    <meta name="author" content="ProteusThemes">
                    <script type="text/javascript">
                        WebFontConfig = {
                            google : {
                                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
                            }
                        };
                        (function() {
                            var wf = document.createElement('script');
                            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                            wf.type = 'text/javascript';
                            wf.async = 'true';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(wf, s);
                        })();
                    </script>
                    {!! Html::style("stylesheets/bootstrap.css") !!}
                    {!! Html::style("stylesheets/responsive.css") !!}
                    {!! Html::style("js/rs-plugin/css/settings.css") !!}
                    {!! Html::style("js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css") !!}
                    {!! Html::style("js/prettyphoto/css/prettyPhoto.css") !!}
                    {!! Html::style("stylesheets/main.css") !!}
                    {!! Html::script('js/modernizr.custom.56918.js') !!}

                    {!! Html::style("images/apple-touch/144.png", ['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144']) !!}
                    {!! Html::style("images/apple-touch/72.png", ['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72']) !!}
                    {!! Html::style("images/apple-touch/57.png", ['rel' => 'shortcut icon', 'sizes' => '72x72']) !!}
                </head>
                <body class="boxed">
                    <div class="master-wrapper">
                    </div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                    {!! HTML::script('js/underscore/underscore-min.js') !!}
                    {!! HTML::script('js/bootstrap.min.js') !!}
                    {!! HTML::script('js/rs-plugin/js/jquery.themepunch.plugins.min.js') !!}
                    {!! HTML::script('js/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
                    {!! HTML::script('js/jquery.carouFredSel-6.2.1-packed.js') !!}
                    {!! HTML::script('js/jquery-ui-1.10.3/touch-fix.min.js') !!}
                    {!! HTML::script('js/isotope/jquery.isotope.min.js') !!}
                    {!! HTML::script('js/bootstrap-tour/build/js/bootstrap-tour.min.js') !!}
                    {!! HTML::script('js/prettyphoto/js/jquery.prettyPhoto.js') !!}
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
                    {!! HTML::script('js/goMap/js/jquery.gomap-1.3.2.min.js') !!}
                    {!! HTML::script('js/custom.js') !!}
                </body>
            </html>