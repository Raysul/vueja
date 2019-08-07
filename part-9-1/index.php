<html>

<head>
    <title>Part 9-1</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <li v-for="(payment, i ) in payments">
            {{ i+1 }} {{ payment.name }} {{ payment.amounte }}
        </li>
        unPayment data
        <li v-for="(payments, i ) in unPament">
            {{ i+1 }} {{ payments.name }} {{ payments.amounte }}
        </li>
        <h2>Total amount: {{ sum }}</h2>
    </div>



    <script type="text/javascript">
        var app = new Vue({
            el: "#info",
            data: {
                payments: [
                    { name: "houseRent", amounte: 1500, puid: true },
                    { name: "electricty", amounte: 500, puid: false },
                    { name: "net", amounte: 220, puid: true }
                ]
            },
            computed: {
                unPament: function () {
                    return this.payments.filter(function (p) {
                        return p.puid
                    });

                },
                totalAmount: function () {
                    var sum = 0;
                    for (var i = 0; i < this.payments.length; i++) {
                        sum += this.payments[i].amounte;
                    }
                    return sum;
                }

            }

        });
    </script>
</body>

</html>