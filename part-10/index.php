<html>

<head>
    <title>Part 10</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <h2>{{ name | lower }}</h2>
        <h3>{{ address | upper }}</h3>
        <h4>To Date: {{ today }}</h4>
    </div>





    <script type="text/javascript">
    // < global function

    Vue.filter("lower", function(s) {
        return s.toLowerCase();
    })




    // date function filer



    var app = new Vue({
        el: "#info",
        data: {
            name: "Hello World",
            address: "My address In jamalpur",
            today: new Date(),
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