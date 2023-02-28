
function Envoie(){
   
    objetXHR = COHR();
    var anticacheTime=new Date().getTime();
    var personne_id=document.getElementById("id_personne").textContent;
    var libelle=document.getElementById("libelle").value;
    var contenue=document.getElementById("contenu").value;
    objetJSon=new Object();
    objetJSon.personne_id=personne_id;
    objetJSon.libelle=libelle;
    objetJSon.contenu=contenue;

    var parametres=JSON.stringify(objetJSon);

    objetXHR.open("post","Serveur/TraitementsActions.php",true);
   
    objetXHR.onreadystatechange=reload;
    objetXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    document.getElementById("button").disabled=true;
    document.getElementById("charge").style.visibility="visible";
    objetXHR.send(parametres);


}