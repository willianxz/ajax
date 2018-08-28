<html>

   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
             
             
             function getFormattedDate(date) {
                    var MyDate = new Date(date);
                    var MyDateString = '';
                    MyDate.setDate(MyDate.getDate());
                    var tempoMonth = (MyDate.getMonth()+1);
                    var tempoDate = (MyDate.getDate());
                    if (tempoMonth < 10) tempoMonth = '0' + tempoMonth;
                    if (tempoDate < 10) tempoDate = '0' + tempoDate;
                    MyDateString = tempoDate + '-' + tempoMonth + '-' + MyDate.getFullYear();
                    
                    return MyDateString;
             }
             
			
            $("#driver").click(function(event){
               $.getJSON('http://www.icomfloripa.org.br/api/get_tag_posts/?tag_slug=portal-transparencia', function(jd) {
                   
                  /*
                  $('#stage').html('<p>Status: ' + jd.status + '</p>');
                  $('#stage').append('<p>Id: ' +   jd.id + '</p>');
                  $('#stage').append('<p>Count: '+ jd.count+ '</p>');
                  $('#stage').append('<p>Pages: ' + jd.pages+ '</p>');
                  
                  $('#stage').append('<p>Posts id: ' + jd.posts[0].id+ '</p>');
                  $('#stage').append('<p>Posts type: ' + jd.posts[0].type+ '</p>');
                  $('#stage').append('<p>Posts slug: ' + jd.posts[0].slug+ '</p>');
                  $('#stage').append('<p>Posts url: ' + jd.posts[0].url+ '</p>');       //Lista
                  $('#stage').append('<p>Posts status: ' + jd.posts[0].status+ '</p>');
                  $('#stage').append('<p>Posts title: ' + jd.posts[0].title+ '</p>');
                  $('#stage').append('<p>Posts title_plain: ' + jd.posts[0].title_plain+ '</p>');
                  $('#stage').append('<p>Posts content: ' + jd.posts[0].content+ '</p>');
                  $('#stage').append('<p>Posts excerpt: ' + jd.posts[0].excerpt+ '</p>');
                  $('#stage').append('<p>Posts date: ' + jd.posts[0].date+ '</p>');
                  $('#stage').append('<p>Posts modified: ' + jd.posts[0].modified+ '</p>');
                  
                  $('#stage').append('<p>Posts Categories id: ' + jd.posts[0].categories[0].id+ '</p>');
                  $('#stage').append('<p>Posts Categories slug: ' + jd.posts[0].categories[0].slug+ '</p>'); //Lista dentro de Lista
                  $('#stage').append('<p>Posts Categories title: ' + jd.posts[0].categories[0].title+ '</p>');
                  $('#stage').append('<p>Posts Categories description: ' + jd.posts[0].categories[0].description+ '</p>');
                  $('#stage').append('<p>Posts Categories parent: ' + jd.posts[0].categories[0].parent+ '</p>');
                  $('#stage').append('<p>Posts Categories post_count: ' + jd.posts[0].categories[0].post_count+ '</p>');
                  
                  $('#stage').append('<p>Posts Tags id: ' + jd.posts[0].tags[0].id+ '</p>');
                  $('#stage').append('<p>Posts Tags slug: ' + jd.posts[0].tags[0].slug+ '</p>'); //Lista dentro de Lista
                  $('#stage').append('<p>Posts Tags title: ' + jd.posts[0].tags[0].title+ '</p>');
                  $('#stage').append('<p>Posts Tags description: ' + jd.posts[0].tags[0].description+ '</p>');
                  $('#stage').append('<p>Posts Tags post_count: ' + jd.posts[0].tags[0].post_count+ '</p>');
                  
                  $('#stage').append('<p>Posts Author id: ' + jd.posts[0].author.id+ '</p>');
                  $('#stage').append('<p>Posts Author slug: ' + jd.posts[0].author.slug+ '</p>');   //Lista
                  $('#stage').append('<p>Posts Author name: ' + jd.posts[0].author.name+ '</p>');
                  $('#stage').append('<p>Posts Author first_name: ' + jd.posts[0].author.first_name+ '</p>');
                  $('#stage').append('<p>Posts Author last_name: ' + jd.posts[0].author.last_name+ '</p>');
                  $('#stage').append('<p>Posts Author nickname: ' + jd.posts[0].author.nickname+ '</p>');
                  $('#stage').append('<p>Posts Author url: ' + jd.posts[0].author.url+ '</p>');
                  $('#stage').append('<p>Posts Author description: ' + jd.posts[0].author.description+ '</p>');
                  
                  $('#stage').append('<p>Posts Attachments id: ' + jd.posts[0].attachments[0].id+ '</p>'); //Lista dentro de Lista
                  $('#stage').append('<p>Posts Attachments url: ' + jd.posts[0].attachments[0].url+ '</p>'); 
                  $('#stage').append('<p>Posts Attachments slug: ' + jd.posts[0].attachments[0].slug+ '</p>'); 
                  $('#stage').append('<p>Posts Attachments title: ' + jd.posts[0].attachments[0].title+ '</p>'); 
                  $('#stage').append('<p>Posts Attachments description: ' + jd.posts[0].attachments[0].description+ '</p>');
                  $('#stage').append('<p>Posts Attachments caption: ' + jd.posts[0].attachments[0].caption+ '</p>');
                  $('#stage').append('<p>Posts Attachments parent: ' + jd.posts[0].attachments[0].parent+ '</p>');
                  $('#stage').append('<p>Posts Attachments mime_type: ' + jd.posts[0].attachments[0].mime_type+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.full.url: ' + jd.posts[0].attachments[0].images.full.url+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.full.width: ' + jd.posts[0].attachments[0].images.full.width+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.full.height: ' + jd.posts[0].attachments[0].images.full.height+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.thumbnail.url: ' + jd.posts[0].attachments[0].images.thumbnail.url+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.thumbnail.width: ' + jd.posts[0].attachments[0].images.thumbnail.width+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.thumbnail.height: ' + jd.posts[0].attachments[0].images.thumbnail.height+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.medium.url: ' + jd.posts[0].attachments[0].images.medium.url+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.medium.width: ' + jd.posts[0].attachments[0].images.medium.width+ '</p>');
                  $('#stage').append('<p>Posts Attachments images.medium.height: ' + jd.posts[0].attachments[0].images.medium.height+ '</p>');
                  */
                     
                               
                  this.qtd = jd.posts.length;
                  $('#stage').append('<p>Quantidade de posts: ' + this.qtd+ '</p>');
                  $('#stage').append('<hr/>');
                  
                  $('#stage').append('<h1>Postagens</h1>');
                    
                    this.retorno = '';
                    
                    
                   
                    
                    for (i = 0; i < this.qtd; i++){

                    this.retorno += '<p>Id: ' + jd.posts[i].id+ '</p>';

                    this.retorno += '<p>Type: ' + jd.posts[i].type + '</p>';
                    
                    
                   //var date = new Date(jd.posts[i].date);
                   //var dataFormatad = (date.getMonth() + 1) + '-' + date.getDate() + '-' +  date.getFullYear();
                    
                   
                    
                    //var from = jd.posts[i].date; 
                    
                    alert(jd.posts[i].date);
                    
                    this.retorno += '<p>Data: ' + getFormattedDate(jd.posts[i].date) + '</p>';
                    
                    this.retorno += '<p>Title: ' + jd.posts[i].title + '</p>';
                    
                    this.retorno += '<p>Content: ' + jd.posts[i].content + '</p>';
                    
                    this.retorno += '<hr/>';
                    
                    
                }
                  $('#stage').append(this.retorno);
                  
                  
               });
            });
				
         });
      </script>
   </head>
	
   <body>
	
      <p>Click on the button to load result.html file:</p>
		
      <div id = "stage" style = "background-color:skyblue;">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
		
   </body>
	
</html>