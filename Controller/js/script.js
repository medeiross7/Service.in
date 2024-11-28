
function toggleChat() {
  var chatContainer = document.getElementById('chatContainer');
  chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
}

function enviarMensagem() {
  var mensagem = document.getElementById('mensagem').value.trim();

  if (mensagem !== '') {
    // Limpar campo de mensagem
    document.getElementById('mensagem').value = '';

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
    xhttp.open("GET", "enviar_email.php?mensagem=" + mensagem, true);
    xhttp.send();
  }
}
// Alterar idioma
const langToggle = document.getElementById('lang-toggle');
const title = document.getElementById('title');
const description = document.getElementById('description');
const langLabel = document.getElementById('lang-label');

langToggle.addEventListener('change', () => {
  if (langToggle.checked) {
    // Mudar para inglês

    login.textContent = "Sign In";
    cadastro.textContent = "Sign Up";
    prestarservicoo.textContent = "Provide Service";
    solicitarservicoo.textContent = "Request Service";
    account.textContent = "Change Account";
    profiledata.textContent = "Change Profile Data";
    leave.textContent = "Leave";
    precisando.textContent =
      "If you need any domestic service, we at Service.in offer these services, request them here";
    btnsolicitar.textContent = "REQUEST SERVICE";
    langLabel.textContent = 'English:';
  } else {
    // Voltar para português

    login.textContent = "Login";
    cadastro.textContent = "Cadastro";
    prestarservicoo.textContent = "Prestar Servico";
    solicitarservicoo.textContent = "Solicitar Servico";
    account.textContent = "Alterar Conta";
    profiledata.textContent = "Alterar dados do perfil";
    leave.textContent = "Sair";
    precisando.textContent =
      "Esta Precisando de algum serviço domestico, nos da Service.in oferecemos esses serviços, solicite aqui";
    btnsolicitar.textContent = "SOLICITAR SERVICO";
    langLabel.textContent = 'Portugues:';
  }
});
// Modo escuro e modo claro
let trilho = document.getElementById('trilho');
let body = document.querySelector('body');
let central = document.querySelector('.central');
let rodape = document.querySelector('.rodape');
let chatContainer = document.querySelector('.chat-container');

trilho.addEventListener('click', () => {
  body.classList.toggle('dark');
  central.classList.toggle('dark');
  rodape.classList.toggle('dark');
  chatContainer.classList.toggle('dark');
})