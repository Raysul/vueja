<html>

<head>
    <title>Part 9-1</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <h2>{{ name | upper }}</h2>
        <h3>{{ address | upper }}</h3>
    </div>



    <script type="text/javascript">
    var app = new Vue({
        el: "#info",
        data: {
            name: "Hello World",
            address: "My address In jamalpur",
        },

        filters: {
            upper: function(s) {
                return s.toUpperCase();
            }
        }
    });
    </script>
</body>

</html>