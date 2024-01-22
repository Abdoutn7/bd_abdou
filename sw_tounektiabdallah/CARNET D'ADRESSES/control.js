function ajouter()
{
nom=document.getElementById("nom").Value;
adresse=document.getElementById("mail").Value;
var list=document.getElementById("sename").length;
var exist=false;
if (taille !=0)
{
    i=0
    while((i<taille)&&(exist==false))
    {
        elt=document.getElementById("list").option[i].text;
        alert(h);
        if(h==nom)
        {
            exist=true;
            alert("contact deja existant");
        }
        i++;
    }
}            
}
if(!exist)
{
    n=new option(nom,email);
    document.getElementById("carnet").option[taille]=n;()
}
function supprimer()
{
    var sel=document.getElementById("carnet").selectedIndex;
    if(sel==-1)
    
{
    document.getElementById("carnet").option[sel]=null;
}
}
function adresse()
{
    var sel=document.getElementById("carnet").selectedIndex;
    if(sel==-1)
    alert("veuillez selectionner un element svp");
else
{
    nom=document.getElementById("carnet").options[sel].text;
    email=document.getElementById("carnet").options[sel].value;
    alert("L'adresse mail de" +nom+ "est:"+email);
}    
}