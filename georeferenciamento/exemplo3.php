<html>

   <head>
       <meta charset="utf-8">
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
               $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+$("#endereco").val(), function(jd) {
                   //https://maps.googleapis.com/maps/api/geocode/json?address=sao+paulo
                   
                   if(jd.status === "OK"){
                   alert($("#endereco").val());
                   
                   $("#lat").val(jd.results[0].geometry.location.lat);
                   $("#long").val(jd.results[0].geometry.location.lng);
                   
                   
                  
                  $('#stage').html('<p> result: ' + jd.results + '</p>');
                  $('#stage').append('<p> result adress_components: ' + jd.results[0].address_components + '</p>');
                  $('#stage').append('<p> result adress_components: ' + jd.results[0].address_components[0] + '</p>');
                  $('#stage').append('<p> result adress_components long_name: ' + jd.results[0].address_components[0].long_name + '</p>');
                  $('#stage').append('<p> result adress_components short_name: ' + jd.results[0].address_components[0].short_name + '</p>');
                  $('#stage').append('<p> result adress_components types: ' + jd.results[0].address_components[0].types + '</p>');
                 
                 
                 
                  $('#stage').append('<p> result formatted_address: ' + jd.results[0].formatted_address+ '</p>');                  
                  
                 
                   $('#stage').append('<p> result geometry: ' + jd.results[0].geometry+ '</p>');
                  $('#stage').append('<p> result geometry location: ' + jd.results[0].geometry.location+ '</p>');
                  $('#stage').append('<p> result geometry location lat: ' + jd.results[0].geometry.location.lat+ '</p>');
                  $('#stage').append('<p> result geometry location lng: ' + jd.results[0].geometry.location.lng+ '</p>');
                  $('#stage').append('<p> result geometry location_type: ' + jd.results[0].geometry.location_type+ '</p>');
                  $('#stage').append('<p> result geometry viewport: ' + jd.results[0].geometry.viewport+ '</p>');
                  
                  $('#stage').append('<p> result geometry viewport northeast: ' + jd.results[0].geometry.viewport.northeast+ '</p>');
                  $('#stage').append('<p> result geometry viewport northeast lat: ' + jd.results[0].geometry.viewport.northeast.lat+ '</p>');
                  $('#stage').append('<p> result geometry viewport northeast lng: ' + jd.results[0].geometry.viewport.northeast.lng+ '</p>');
                  
                  $('#stage').append('<p> result geometry viewport southwest: ' + jd.results[0].geometry.viewport.southwest+ '</p>');
                  $('#stage').append('<p> result geometry viewport southwest lat: ' + jd.results[0].geometry.viewport.southwest.lat+ '</p>');
                  $('#stage').append('<p> result geometry viewport southwest lng: ' + jd.results[0].geometry.viewport.southwest.lng+ '</p>');
                  
                  $('#stage').append('<p> result place_id: ' + jd.results[0].place_id+ '</p>');
                  $('#stage').append('<p> result types: ' + jd.results[0].types+ '</p>');
                  
                  
                  $('#stage').append('<p> result address_components: ' + jd.results[0].address_components+ '</p>');
                  $('#stage').append('<p> result address_components: ' + jd.results[0].address_components[0]+ '</p>');
                  $('#stage').append('<p> result address_components: ' + jd.results[0].address_components[0].long_name+ '</p>');
                  $('#stage').append('<p> result address_components: ' + jd.results[0].address_components[0].short_name+ '</p>');
                  $('#stage').append('<p> result address_components: ' + jd.results[0].address_components[0].types+ '</p>');
                  
                  
                  $('#stage').append('<p>Status: ' + jd.status+ '</p>');  
                  
                  
                  
                  }else{
                       $('#stage').html('<p> Não foi possivel encontrar esse endereço.</p>');
                      
                  }
                  
                
                  
               });
            });
				
         });
      </script>
   </head>
	
   <body>
	
      <p>Click on the button to load result.html file:</p>
		
      <div id = "stage" style = "background-color:skyblue;">
         LOCALIZAÇÃO
      </div>
      
      Endereço: <input type="text" name="endereco" id="endereco"/></br>
      
      Long: <input type="text" name="lat" id="lat"/></br>
      
      Lat: <input type="text" name="long" id="long"/></br>
		
      <input type = "button" id = "driver" value = "Load Data" />
		
   </body>
	
</html>