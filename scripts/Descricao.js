
// Meter o carrinho vazio
let carrinho = [];
let total = 0;
// Funcao para adicionar itens ao carrinho
function adicionarAoCarrinho(nome, preco) {
  carrinho.push({ nome, preco });
  total += preco;
  atualizarCarrinho();
}
// Funcao para atualizar carrinho
function atualizarCarrinho() {
  const lista = document.getElementById('lista-carrinho');
  const totalElem = document.getElementById('total');
  lista.innerHTML = '';

  carrinho.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.nome} - ${item.preco}€`;
    lista.appendChild(li);
  });

  totalElem.textContent = `Total: ${total}€`;
}
// Funcao para Checkout
function irParaCheckout() {
  localStorage.setItem('carrinho', JSON.stringify(carrinho));
  localStorage.setItem('total', total.toFixed(2));
  console.log('Carrinho salvo:', localStorage.getItem('carrinho'));
  console.log('Total salvo:', localStorage.getItem('total'));
  window.location.href = 'venda.html';
}
