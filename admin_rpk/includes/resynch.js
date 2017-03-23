 //xmlhttp script
function doStuff(){ //Handles the response 
	if (http.readyState == 4) {
	    if (http.status == 200) {        
			//alert(http.getAllResponseHeaders());
			resultz = http.responseText; 
			//rsltztxt = window.opener.document.createTextNode(resultz);
			window.opener.document.getElementById('changedis').innerHTML =resultz;
		} else {
            alert('There was an error with the request.');
        }
	}		
}
	
function updaterx() {//opens and sends the request, calls the response handler
	var url = "milestoneReload.php";	
	http.open("GET", url, true); 
	http.onreadystatechange = doStuff; 
	http.setRequestHeader("Content-Type","text/html");
	http.send(null);
}	

function getHTTPObject() {//creates the proper XMLHttprequest object
	var xmlhttp;
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
    	try {
      		xmlhttp = new XMLHttpRequest();
    	} catch (e) {
      		xmlhttp = false;
    	}
  	}
 	 return xmlhttp;
}

var http = getHTTPObject();

if (document.Selector.operation.value=="selector"){
	updaterx();
}
//end xmlhttp script