document.addEventListener('DOMContentLoaded', function() {
    const formuIn = document.getElementById('Formu');
    const clienteNameInput = document.getElementById('nome');
    const enderecoInput = document.getElementById('endereco');
    const telefoneInput = document.getElementById('telefone');
    const nomeprodutoInput = document.getElementById('nomeproduto');
    const descricaoInput = document.getElementById('descricao');
    const quantidadeInput = document.getElementById('quantidade');

    formuIn.addEventListener('submit', function(event) {
        event.preventDefault();
        const nome = clienteNameInput.value;
        const endereco = enderecoInput.value;
        const telefone = telefone.value;
        const nomeproduto = nomeprodutoInput.value;
        const descricao = descricaoInput.value;
        const quantidade = quantidadeInput.value;

        if (nome.trim() === '') {
            alert('Por favor, preencha todos os campos!');
           return;
        }
    });

});