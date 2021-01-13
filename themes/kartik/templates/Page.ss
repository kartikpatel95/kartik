<!DOCTYPE html>
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]><html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="$ContentLocale" class="ie ie8"><![endif]-->

    <% include HeaderTag %>
<body>
<header>
    <% require themedCSS('dist/css/layout') %>
    <% require themedCSS('dist/css/vendor/bootstrap.min') %>
    <% require themedCSS('dist/css/framework/typography') %>
    <% include Header %>
</header>
<div class="main">
    <div class="typography">
        $Layout
    </div>
</div>
<footer>
    <% include Footer %>
    <% require javascript('_resources/themes/kartik/dist/javascript/vendor/jquery.min.js') %>
    <% require javascript('_resources/themes/kartik/dist/javascript/vendor/bootstrap.min.js') %>
    <% require javascript('_resources/themes/kartik/dist/javascript/timeline.js') %>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA1_8CQ8CZfGldwFCSQiNL8t0RGJWcaPg&callback=initMap"></script>
</footer>
</body>
</html>
