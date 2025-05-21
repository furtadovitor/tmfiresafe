const carouselElement = document.getElementById('clientesCarousel');
const carousel = new bootstrap.Carousel(carouselElement, { interval: 10000, pause: false });

carouselElement.addEventListener('mouseenter', () => {
  carousel.pause();
});

carouselElement.addEventListener('mouseleave', () => {
  carousel.cycle();
});

document.addEventListener('DOMContentLoaded', function () {
  const params = new URLSearchParams(window.location.search);
  const status = params.get('status');
  const mensagemDiv = document.getElementById('mensagem-status');

  if (status && mensagemDiv) {
    let texto = '';
    let bg = '';
    let cor = '';

    if (status === 'sucesso') {
      texto = 'Mensagem enviada com sucesso!';
      bg = '#d1e7dd';
      cor = '#0f5132';
    } else if (status === 'erro') {
      texto = 'Erro ao enviar a mensagem. Tente novamente.';
      bg = '#f8d7da';
      cor = '#842029';
    }

    mensagemDiv.textContent = texto;
    mensagemDiv.style.backgroundColor = bg;
    mensagemDiv.style.color = cor;
    mensagemDiv.style.padding = '8px 12px';
    mensagemDiv.style.border = '1px solid transparent';
    mensagemDiv.style.display = 'block';

    // Remove os parâmetros da URL para não exibir a mensagem ao recarregar
    window.history.replaceState({}, document.title, window.location.pathname + window.location.hash);
  }
});
