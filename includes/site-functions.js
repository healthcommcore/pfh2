    // FUNCTION: SHOW MENU
    function showMenu(mID) {
        document.getElementById("subnav"+mID).style.visibility="visible";
    }
    function hideMenu(mID) {
        document.getElementById("subnav"+mID).style.visibility="hidden";
    }
    
    // FUNCTION: SUBNAV ON/OFF
    function subnavOn(sectionID,subnavID) {
        document.images["subnav"+sectionID+subnavID].src="/images/nav/subnav/"+sectionID+"_over_"+subnavID+".gif";
    }
    function subnavOff(sectionID,subnavID) {
        document.images["subnav"+sectionID+subnavID].src="/images/nav/subnav/"+sectionID+"_off_"+subnavID+".gif";
    }
    
 // FUNCTION: LOGOUT 
 
 function doLogout(){
 	
 	location.replace("logout.php");
 }
  
  function logout(){
  
  if(window.xdis){
  clearTimeout(xdis);
  }
  
  xdis=false; 
  xdis=setTimeout('doLogout()', 3600000);
    
  }
  
   logout();