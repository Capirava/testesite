function habilitarInput() {

    const areasEdicao = document.getElementsByClassName("infos");

    for(let i = 0; i < areasEdicao.length; i++) {
        //if(areasEdicao[i].id == "email" || areasEdicao[i].id == "uf") continue;

        areasEdicao[i].disabled = false;
        areasEdicao[i].style.backgroundColor = "white";
    }
    habilitarSubmit(true);
}

function habilitarSubmit(condicao) {

    const botaoSubmit = document.getElementById("salvar-info");

    if(condicao) {
        botaoSubmit.disabled = false;
    } else {
        botaoSubmit.disabled = true;
    }
}

function limpa_formulário_cep() {
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    } else {
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisaCep(valor) {

    let cep = valor.replace(/\D/g, '');

    if (cep != "") {
        let validacep = /^[0-9]{8}$/;

        if(validacep.test(cep)) {
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";

            //Cria um elemento javascript.
            let script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } 
        else {
            limpa_formulário_cep();
            alert("Por favor, insira um formato de CEP válido.");
        }
    } 
    else {
        limpa_formulário_cep();
    }
}
