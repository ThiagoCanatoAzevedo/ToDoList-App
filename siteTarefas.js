var ul = document.getElementById("list")
var botaoValores = document.getElementById("inputActivities")
var li;
var itemId;
var item;

var quantidade_total_tarefas = 0
var quantidades_tarefas_feitas = 0

var listaTarefas = [];

dados = document.getElementById("informations")


finaliza()

function removeTask(itemId){

    for (i = 0; i < ul.children.length; i++){

        if(ul.children[i].getAttribute("ToDoList") == itemId){
            
            ul.children[i].remove()
            quantidades_tarefas_feitas++
            finaliza()

        }
    }

}

function criarTabela(itemValue, itemId){
    let li = document.createElement("li");

    li.setAttribute("ToDoList", itemId);
    
    li.appendChild(document.createTextNode(itemValue));
    
    return li;
}

function removerDados(itemId){
    let btn = document.createElement("button");
    btn.setAttribute("onclick", "removeTask("+itemId+")");
    btn.innerHTML = "X";
    
    btn.style.marginLeft = "0.4rem"
    btn.style.backgroundColor = "#007991"
    btn.style.color="black"
    btn.style.border="0.2rem solid"
    return btn;
}

function finaliza(){
    escrita_dados = quantidade_total_tarefas+'/'+quantidades_tarefas_feitas

    informations.innerHTML = "<h3><b>Tarefas: "+ escrita_dados + "</b>"
}

botaoValores.addEventListener('keyup', function(e){
    var key = e.which || e.keyCode;
        if (key == 13){ 
            if(document.getElementById("inputActivities").value != ""){
                
                item = document.getElementById("inputActivities").value;

                itemId  = ul.childElementCount;
        
                li  = criarTabela(item, itemId);
        
                li.appendChild(removerDados(itemId));
        
                ul.appendChild(li);
        
                document.getElementById("inputActivities").value = '';  
        
                quantidade_total_tarefas++;

                listaTarefas.push(item);

                console.log(listaTarefas);

                finaliza();
            }
        }
})
