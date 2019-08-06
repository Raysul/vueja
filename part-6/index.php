<html>

<head>
    <title>Part 6</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <!-- // <h1>{{ name }}</h1>
        //! <h1>{{ address }}</h1>
        // <h1>{{ email }}</h1>
        // <h1>{{ mobail }}</h1> -->

        <h1>{{ mydetails()}}</h1>
    </div>
    <script type="text/javascript">
    var app = new Vue({
        el: "#info",
        data: {
            name: "md.kamal",
            address: "dhaka,badday",
            email: "mdkamal@gmail.com",
            mobai: 01760025001,
        },
        methods: {
            mydetails: function() {
                return "I am " + this.name + " " + this.address;
            }
        }
    });
    </script>
</body>

</html>