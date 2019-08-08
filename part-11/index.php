<html>

<head>
    <title>Part 11</title>
    <script src="js/vue.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>



<body>
    <div id="info" style="text-align:center;">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
            </div>
        </div>

        <raysul title="Panel Heading" content="Panel Content">

        </raysul>
    </div>
    <script type="text/javascript">
        Vue.component('raysul', {
         '   template: <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
            </div>
        </div>
        '
        ,
             
        });
    </script>
<!-- 
    <script type="text/javascript">
        var app = new Vue({
            el: "#info",
            data: {

            }
        });
    </script> -->
</body>

</html>