var ul = document.getElementById("lista")
var botaoValores = document.getElementById("inputEntradaValores")
var li;
var itemId;
var item;

var quantidade_total_tarefas = 0
var quantidades_tarefas_feitas = 0

var listaTarefas = [];

dados = document.getElementById("dados")

const Sequelize = require('sequelize');
const sequelize = new Sequelize ('formulario-todo', 'root', '', {
    host: "localhost",
    port: 3312,
    dialect: 'mysql',
});


sequelize.authenticate().then(function(){
    console.log("Conectado com sucesso");

}).catch(function(erro){
    console.log("Erro"+erro);
});


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

    dados.innerHTML = "<h3><b>Tarefas: "+ escrita_dados + "</b>"
}

botaoValores.addEventListener('keyup', function(e){
    var key = e.which || e.keyCode;
        if (key == 13){ 
            if(document.getElementById("inputEntradaValores").value != ""){
                
                item = document.getElementById("inputEntradaValores").value;
                
                //console.log(item);

                itemId  = ul.childElementCount;
        
                li  = criarTabela(item, itemId);
        
                li.appendChild(removerDados(itemId));
        
                ul.appendChild(li);
        
                document.getElementById("inputEntradaValores").value = '';  
        
                quantidade_total_tarefas++;

                listaTarefas.push(item);

                console.log(listaTarefas);

                finaliza();
            }
        }
})
