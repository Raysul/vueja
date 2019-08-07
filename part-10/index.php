<html>

<head>
    <title>Part 9-1</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <h2>{{ upperCaseName }}</h2>
    </div>



    <script type="text/javascript">
    var app = new Vue({
        el: "#info",
        data: {
            name: "Hello World",
        },
        computed: {
            upperCaseName: function() {
                return this.name.toUpperCase();
            }
        }

    });
    </script>
</body>

</html>