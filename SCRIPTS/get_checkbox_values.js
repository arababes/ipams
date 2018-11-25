var inputs = document.getElementsByTagName('input');



var getIds = function(){
	
	url = "?";
		var count = 0;
	for(var i = 0; i < inputs.length; i++) {
		if(inputs[i].type == "checkbox"){
			if(inputs[i].checked){
				if(count > 0){	
					url += "&";
				}
				url += "id[]="+inputs[i].id;
				count++;
			}
		}

	}
	

	window.history.pushState(null, null, url);


}



