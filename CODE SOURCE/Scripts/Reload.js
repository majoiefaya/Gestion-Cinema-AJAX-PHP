function reload(){
    
    if(objetXHR.readyState==4){
        if(objetXHR.status==200){
            var ReponseServeur=objetXHR.responseText;
            var ReponseServeurResultats=eval('('+ReponseServeur+')');

            message=document.getElementById('message').innerHTML=ReponseServeurResultats.resultats.message;
            document.getElementById("message").style.visibility="visible";
            document.getElementById("button").disabled=false;
            document.getElementById("charge").style.visibility="hidden";
        
        }else{
            document.getElementById("button").disabled=false;
            document.getElementById("charge").style.visibility="hidden";

            objetXHR.abort();
            objetXHR=null;
        }
    }
}