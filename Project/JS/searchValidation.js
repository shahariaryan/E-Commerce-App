        function get(id)
		   {
			return document.getElementById(id);
		    }
		function suggest(control){
				 
	         	var key=control.value;
				  if(key==""){
				 get("suggestion").innerHTML="";
				  return;
				  }
		        var xhttp= new XMLHttpRequest();
	         	xhttp.onreadystatechange=function(){
			    if(this.readyState==4 && this.status==200)
			    {
					get("suggestion").innerHTML= this.responseText;
				  }
	            
		       };  
	        	xhttp.open("GET","searchUser.php?key="+key,true);
		        xhttp.send();
			   }
		