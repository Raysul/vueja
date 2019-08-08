<html>

<head>
    <title>Animatoion</title>
    <script src="js/vue.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        .foo {
            background: lime;
            padding: 20;
            margin: 0 auto;
            width: 600px;
            height: 250px;
        }

        .fade-enter-active,
        .fade-leave-active {
            transition: margin-top 1s;
        }

        .fade-enter,
        .fade-leave-to

        /* .fade-leave-active below version 2.1.8 */
            {
            margin-top: -555;
        }
    </style>
</head>

<body>
    <div id="info" style="text-align:center;">
        <button @click="show = !show">admintion</button>

        <div class="container">
            <transition name="fade">
                <div class="foo" v-if="show">
                    <p>This is a animation</p>
                </div>
            </transition>
        </div>
    </div>


    <script type="text/javascript">
        var app = new Vue({
            el: "#info",
            data: {
                show: true
            }
        });
    </script>
</body>

</html>