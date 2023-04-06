var provincias_SAN_JOSE = ["SAN JOSÉ","ALAJUELITA","VAZQUEZ DE CORONADO","ACOSTA","TIBÁS","MORAVIA","MONTES DE OCA","TURRUBARES","DOTA","CURRIDABAT","PÉREZ ZELEDÓN","LEÓN CORTÉS CASTRO"];
var provincias_ALAJUELA = ["ALAJUELA","ATENAS","GRECIA","GUATUSO","LOS CHILES","NARANJO","OROTINA","PALMARES","POÁS","RÍO CUARTO","SAN CARLOS","SAN MATEO","SAN RAMÓN","SARCHÍ","UPALA","ZARCERO"];
var provincias_CARTAGO = ["CARTAGO","ALVARADO","EL GUARCO","JIMÉNEZ","LA UNIÓN","OREAMUNO","PARAÍSO","TURRIALBA"];
var provincias_HEREDIA = ["HEREDIA","BARVA","BELÉN","FLORES","SAN ISIDRO","SAN PABLO","SAN RAFAEL","SANTA BÁRBARA","SANTO DOMINGO","SARAPIQUÍ"];
var provincias_GUANACASTE = ["LIBERIA","ABANGARES","BAGACES","CAÑAS","CARRILLO","HOJANCHA","LA CRUZ","NANDAYURE","NICOYA","SANTA CRUZ","TILARÁN"];
var provincias_PUNTARENAS = ["PUNTARENAS","BUENOS AIRES","CORREDORES","COTO BRUS","ESPARZA","GARABITO","GOLFITO","MONTES DE ORO","MONTEVERDE","OSA","PARRITA","PUERTO JIMÉNEZ","QUEPOS"];
var provincias_LIMON = ["LIMÓN","GUÁCIMO","MATINA","POCOCÍ","SIQUIRRES","TALAMANCA"];

function cambia_canton(){
//se toma el valor del select de la provincia seleccionada
    var pvc
    pvc = document.getElementById('provincia').value
    mis_pvcs = acentos(pvc)

// se verifica si la provivncia existe

if (mis_pvcs!=0) {

mis_cantones=eval("provincias_" + mis_pvcs)
//se calcula la cantidad de cantones
num_cantones = mis_cantones.length
//se marca el numero de canton en el select
document.tblDatos.canton.length = num_cantones

for(i=0;i<num_cantones;i++){
    document.tblDatos.canton.options[i].value=mis_cantones[i]
    document.tblDatos.canton.options[i].text=mis_cantones[i]
    }
}else{
//si no hay canton seleccionado se borra del select
document.tblDatos.canton.length = 1

document.tblDatos.canton.options[0].value = " "
document.tblDatos.canton.options[0].text = "SIN ASIGNAR"
    }
}




function acentos(pvc){
    var acentuada
    if(pvc=="SAN JOSÉ"){ acentuada="SAN_JOSE";}
    else{
        if(pvc=="VAZQUEZ DE CORONADO"){ acentuada="VAZQUEZ_DE_CORONADO"; }
        else{
            if(pvc=="TIBÁS"){ acentuada="TIBAS"; }
            else{
                if(pvc=="MONTES DE OCA"){ acentuada="MONTES_DE_OCA"; }
                else{
                    if(pvc=="PÉREZ ZELEDÓN"){ acentuada="PEREZ_ZELEDON"; }
                    else{
                        if(pvc=="LEÓN CORTÉS CASTRO"){ acentuada="LEON_CORTES_CASTRO"; }
                        else{
                            if(pvc=="BELÉN"){ acentuada="BELEN"; }
                            else{
                                if(pvc=="SAN ISIDRO"){ acentuada="SAN_ISIDRO"; }
                                else{
                                    if(pvc=="SAN PABLO"){ acentuada="SAN_PABLO"; }
                                    else{
                                        if(pvc=="SAN RAFAEL"){ acentuada="SAN_RAFAEL"; }
                                        else{
                                            if(pvc=="SANTA BÁRBARA"){ acentuada="SANTA_BARBARA"; }
                                            else{
                                                if(pvc=="SANTO DOMINGO"){ acentuada="SANTO_DOMINGO"; }
                                                else{
                                                    if(pvc=="SARAPIQUÍ"){ acentuada="SARAPIQUI"; }
                                                    else{
                                                        if(pvc=="LOS CHILES"){ acentuada="LOS_CHILES"; }
                                                        else{
                                                            if(pvc=="POÁS"){ acentuada="POAS"; }
                                                            else{
                                                                if(pvc=="RÍO CUARTO"){ acentuada="RIO_CUARTO"; }
                                                                else{
                                                                    if(pvc=="SAN CARLOS"){ acentuada="SAN_CARLOS"; }
                                                                    else{
                                                                        if(pvc=="SAN MATEO"){ acentuada="SAN_MATEO"; }
                                                                        else{
                                                                            if(pvc=="SAN RAMÓN"){ acentuada="SAN_RAMÓN"; }
                                                                            else{
                                                                                if(pvc=="SARCHÍ"){ acentuada="SARCHI"; }
                                                                                else{
                                                                                    if(pvc=="EL GUARCO"){ acentuada="EL_GUARCO"; }
                                                                                    else{
                                                                                        if(pvc=="JIMÉNEZ"){ acentuada="JIMENEZ"; }
                                                                                        else{
                                                                                            if(pvc=="LA UNIÓN"){ acentuada="LA_UNION"; }
                                                                                            else{
                                                                                                if(pvc=="PARAÍSO"){ acentuada="PARAISO"; }
                                                                                                else{
                                                                                                    if(pvc=="CAÑAS"){ acentuada="CANAS"; }
                                                                                                    else{
                                                                                                        if(pvc=="LA CRUZ"){ acentuada="LA_CRUZ"; }
                                                                                                        else{
                                                                                                            if(pvc=="SANTA CRUZ"){ acentuada="SANTA_CRUZ"; }
                                                                                                            else{
                                                                                                                if(pvc=="TILARÁN"){ acentuada="TILARAN"; }
                                                                                                                else{
                                                                                                                    if(pvc=="BUENOS AIRES"){ acentuada="BUENOS_AIRES"; }
                                                                                                                    else{
                                                                                                                        if(pvc=="COTO BRUS"){ acentuada="COTO_BRUS"; }
                                                                                                                        else{
                                                                                                                            if(pvc=="MONTES DE ORO"){ acentuada="MONTES_DE_ORO"; }
                                                                                                                            else{
                                                                                                                                if(pvc=="PUERTO JIMÉNEZ"){ acentuada="PUERTO_JIMENEZ"; }
                                                                                                                                else{
                                                                                                                                    if(pvc=="LIMÓN"){ acentuada="LIMON"; }
                                                                                                                                    else{
                                                                                                                                        if(pvc=="GUÁCIMO"){ acentuada="GUACIMO"; }
                                                                                                                                        else{
                                                                                                                                            if(pvc=="POCOCÍ"){ acentuada="POCOCI"; }
                                                                                                                                            
                                                                                                                                            else{
                                                                                                                                                acentuada=pvc;
                                                                                                                                            }
}
}
}	
}
}
}
}
}
}
}
}
}
}
}
}
}
}	
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}        
            
 return  acentuada
 
    }// fin funcion acentos
 