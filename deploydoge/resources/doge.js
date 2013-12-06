var allButtons = document.getElementsByTagName("button");
for(var i =0; i < allButtons.length; i++){
    var aButton = allButtons[i];   
    aButton.onclick = function(){
        var deployInstructions = "deploy.php";
        var projectId = this.getAttribute('data-proj');
        deployInstructions += "?proj=" + projectId;
        if(document.getElementById(projectId + '-sat')){
        	deployInstructions += "&sat=" + document.getElementById(projectId + '-sat').value;
    	}
        //window.location.href=deployInstructions;

		var r = new XMLHttpRequest();
		r.open("POST", deployInstructions, true);
		r.onreadystatechange = function () {
		  if (r.readyState != 4 || r.status != 200) return;
		  //alert("Success: " + r.responseText);
		  	var overlayDiv = document.createElement('div');
		  	overlayDiv.setAttribute('id','resultOverlay');
		  	overlayDiv.setAttribute('class','overlay');
		  	document.getElementsByTagName('body')[0].appendChild(overlayDiv);
			var div = document.createElement('div');
			div.setAttribute('class','results');
			div.setAttribute('id','result');
			document.getElementsByTagName('body')[0].appendChild(div);
			// assuming elements contains string of html with your elements
			div.innerHTML = r.responseText;
		};
		r.send();


        return false;
    };
    document.addEventListener('click', function(){
    	var overlayElem = document.getElementById("resultOverlay");
    	if(overlayElem){ overlayElem.parentNode.removeChild(overlayElem); }
    	var resultElem = document.getElementById("result");
    	if(resultElem){ resultElem.parentNode.removeChild(resultElem); }
    });
}