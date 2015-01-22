function validation(url)
{
    if(window.confirm('Voulez-vous supprimer cet élément !!')){ 
        
       
      location.href=url; 
    }else{
        return false;
    }
}
function connexion(url)
{
    if(window.confirm('Veuillez vous connecté !!')){


        location.href=url;
    }else{
        return false;
    }
}
function submit(url){
	location.href = url ;
}