
function COHR(){
    var resultat=null;
    try{
        resultat=new XMLHttpRequest();
    }
    catch(Error){
        try{
            resultat=new ActiveXObject("Msxml2.XMLHTTP");
        }catch(Error){
            try{
                resultat=new ActiveXObject("Microsoft.XMLHTTP");
            }catch(Error){
                resultat=null;
            }
        }
    }
    return resultat;
}


