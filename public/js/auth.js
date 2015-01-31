function login(str){
	var name = document.getElementById("username");
	var pwd = document.getElementById("password");
	var btn = document.getElementById("btn");
	var namestate = document.getElementById("namestate");
	var pwdstate = document.getElementById("pwdstate");
	var lgerror = document.getElementById("lgerror");
	lgerror.style.display = "none";
	if (str == "name")
	{
		if (name.value == "")
		{
			namestate.className = "fa_close fa";
			namestate.style.display = "";

		} else {
			
			//namestate.className = "fa_check fa";
			namestate.style.display = "none";
		}
	}

	if (str == "pwd")
	{
		if (pwd.value == "")
		{
			pwdstate.className = "fa_close fa";
			pwdstate.style.display = "";
		} else {
			//pwdstate.className = "fa_check fa";
			pwdstate.style.display = "none";
		}
	}


	if (str == "btn")
	{
		login("name");
		login("pwd");
		if (name.value != "" && pwd.value != "")
		{

			form1.submit();
			return;
		}

		lgerror.style.display = "";
	}

}


function getRequestParam(name) {
        var search = document.location.search;
        var pattern = new RegExp("[?&]"+name+"\=([^&]+)", "g");
		var matcher = pattern.exec(search);
        var items = null;
        if(null != matcher){
                try{
                        items = decodeURIComponent(decodeURIComponent(matcher[1]));
                }catch(e){
                        try{
                                items = decodeURIComponent(matcher[1]);
                        }catch(e){
                                items = matcher[1];
                        }
                }
        }
        return items;
}


window.onload=function() {
	if(getRequestParam('error') != null){
		if(getRequestParam('error') == "1") {
			pwdstate.style.display = "";
			pwdstate.className = "fa_close fa";
			namestate.style.display = "";
			lgerror.style.display = "";
			document.getElementById("username").value=getRequestParam("name");
		}
	}
}



