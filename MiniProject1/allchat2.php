<?php

if(!isset($_SESSION['usermail'])) {
  header("Location:index.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome</title>
    
  </head>
  <body>
  <script>
            var idhtml=0;
         
           function funA() {
          var  ajax=new XMLHttpRequest();
      
            ajax.onreadystatechange=function() {
                if(this.readyState==4 && this.status==200) {
                    var data = JSON.parse(this.responseText);
                    
                    for(var i=0;i<data.length;i++) {
                        document.getElementById('allchat').innerHTML+='<div class="card"><div class="card-body"><h6 class="card-subtitle mb-2 text-muted text-left">'+data[i]["sender"]+'</h6><p class="card-text float-left">'+data[i]["message"]+'</p></div></div>';
                    }
                    idhtml+=data.length;
                  
                } 
            }
            ajax.open("GET","allchatphp.php?mid="+idhtml,true);
          





           
        
           ajax.send(); 
           }
          setInterval(funA,1000);
        </script>  
<div class="container-flude">
    	
        <div class="msg-group center" id="allchat">
           <h3 align="center">Messages</h3>
    </div>
       
        
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>