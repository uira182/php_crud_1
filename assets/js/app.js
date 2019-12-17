//Confirmação Formulario Cadastro Cliente
var form_grava = document.forms.grava;
form_grava.addEventListener("submit", function(event) {
    let cont = 0;
    let cad_info = document.querySelectorAll(".cad_info");
    for (let info of cad_info) {
        if (info.value == '') {
            cont++;
            alert("Preencha os campo: " + info.alt);
            event.preventDefault();
            break;
        }
    }
    console.log(cont);
});

//Link <a> Deletar Cliente
var link_del = document.querySelectorAll('.del_link');
for (let del of link_del) {
    del.addEventListener("click", function(event) {
        let del_nome = del.name;
        let conf = confirm("Deseja realmente excluir o cliente: " + del_nome + "?");

        if (!conf) {
            event.preventDefault();
        } else {
            alert('Usuario foi deletado!');
        }
    });
}