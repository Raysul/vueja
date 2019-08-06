<html>

<head>
    <title>Part 7</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <!-- <li v-for="(skil, i) in skils">
            <p v-if='skil.expariances > 3'> {{ i+1 }} {{ skil.name }} {{ skil.expariances }}</p>
        </li> -->
        <p v-if='show'>
            Sowing
        </p>
        <p v-else='show'>
            Not Sowing
        </p>
    </div>

    <script type="text/javascript">
        var app = new Vue({
            el: "#info",
            data: {
                // skils: [
                //     { name: "php", expariances: 2 },
                //     { name: "html", expariances: 4 },
                //     { name: "java", expariances: 5 },
                //     { name: "css", expariances: 6 },
                // ],
                show: false
            }

        });
    </script>
</body>

</html>