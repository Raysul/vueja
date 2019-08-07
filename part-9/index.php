<html>

<head>
    <title>Part 7</title>
    <script src="js/vue.js"></script>
</head>



<body>
    <div id="info" style="text-align:center;">
        <li v-for="(skill, i ) in skills">
            {{ i+1 }} {{ skill }} <button @click="remodeSkill(i)">X</button>
        </li>
        <h2>show email addrss</h2>
        <li v-for="email in emails">
            {{ email }}
        </li>

        <input type="text" v-model="newSkill">
        <button @click="addNewSill()">Add</button>


        <input type="text" v-model="newEmail">
        <button @click="addNewEmail">Add Emaidl</button>
    </div>



    <script type="text/javascript">
    var app = new Vue({
        el: "#info",
        data: {
            newSkill: "",
            skills: [
                "html", "css", "php", "java"
            ],
            emails: [
                "md@gmail.com"
            ]
        },

        methods: {
            addNewSill: function() {
                this.skills.push(this.newSkill);
                this.newSkill = "";
            },
            addNewEmail: function() {
                this.emails.push(this.newEmail);
            },
            remodeSkill: function(i) {
                this.skills.splice(i, 1);
            }


        }

    });
    </script>
</body>

</html>