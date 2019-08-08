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
            transition: margin-left 0.5s;
            /* transition: transform .5s; */
            /* transition: margin-top 1s; */
            /* transition: background 1s; */
        }

        .fade-enter,
        .fade-leave-to

        /* .fade-leave-active below version 2.1.8 */
            {
            margin-left: -2222px;
            /* transform: rotate(180deg); */
            /* margin-top: -555; */
            /* background: red; */
        }
    </style>
</head>

<body>
    <div id="info" style="text-align:center;">
        <input type="text" v-model="newSkill">
        <button @click="addNewSill()">Add</button>
        <transition-group name="fade">
            <li v-for="(skill, i ) in skills" :key="i">
                {{ i+1 }} {{ skill }} <button @click="remodeSkill(i)">X</button>
            </li>
            </transition>






    </div>


    <script type="text/javascript">
        var app = new Vue({
            el: "#info",
            data: {
                newSkill: "",
                skills: [
                    "html", "css", "php", "java"
                ]
            },

            methods: {
                addNewSill: function () {
                    this.skills.push(this.newSkill);
                    this.newSkill = "";
                },
                remodeSkill: function (i) {
                    this.skills.splice(i, 1);
                }


            }

        });
    </script>
</body>

</html>