function exibirPopup() {
    document.getElementById('overlay').style.display = 'flex';
    document.getElementById('popup').style.display = 'block';
    document.getElementById('qr-code').style.filter = 'blur(5px)';
    document.getElementById('resultado').innerText = '';
    document.getElementById('codigo').value = '';
}

function ocultarPopup() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
}

function validarCodigo() {
    // Obtém o valor do campo de texto
    const texto = document.getElementById('codigo').value;

    // Implemente suas regras de validação aqui
    if (texto == 'b49556') {
        document.getElementById('resultado').innerText = 'Código válido! Acesse o QR code para prosseguir.';
        document.getElementById('qr-code').style.filter = 'blur(0px)';
    } else {
        document.getElementById('resultado').innerText = 'Código inválido!';
    }
}
