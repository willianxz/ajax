<html>

   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
               $.getJSON('http://www.icomfloripa.org.br/api/get_tag_posts/?tag_slug=portal-transparencia', function(jd) {
             
                  $('#stage').html('<p> Status: ' + jd.status + '</p>');
                  $('#stage').append('<p>Count : ' + jd.count+ '</p>');
                  $('#stage').append('<p>Pages: ' + jd.pages+ '</p>');
               });
            });
				
         });
      </script>
   </head>
	
   <body>
	
      <p>Click on the button to load result.html file:</p>
		
      <div id = "stage" style = "background-color:#cc0;">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
		
   </body>
	
</html>