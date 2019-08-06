<html>
    <head>
        <title>Part 5</title>
		 <script src="js/vue.js"></script>
    </head>
	
	 
	 
    <body>
    <style>
      .active{
         color: red;
         background: blue;
      }
    </style>
      <div id = "intro" style = "text-align:center;">
        
         <a :class="{{ 'activeLink': true }}" :href="link1.url" :title="link1.title" > {{ link1.title }}</a>
         <a :href="link2.url" :title="link2.title" > {{ link2.title }}</a>

      
      </div>
      <script type = "text/javascript">
            var app = new Vue({
               el:"#intro",
               data:{
                  link1:{
                     text: "Facebook", title: "Go to youtube", url: "http://www.facebook.com"
                  },
                  link2:{
                     text: "Facebook", title: "Go to Facebook", url: "http://www.facebook.com"
                  
                  },

                  activeLink: "active"
                  

                   
               }

            });
      </script>
   </body>
</html>
