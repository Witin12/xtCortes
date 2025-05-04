// Animação de cards
const cardsContainer = document.querySelector('.cardsContainer');
const cards = document.querySelectorAll('.card');
const leftArrow = document.querySelector('.arrow.left');
const rightArrow = document.querySelector('.arrow.right');
let currentIndex = 0;
const visibleCards = 3;
const cardWidth = cards[0].offsetWidth + 15;

function updateCarousel() {
    const offset = -currentIndex * cardWidth;
    cardsContainer.style.transform = `translateX(${offset}px)`;

    leftArrow.disabled = currentIndex === 0;
    rightArrow.disabled = currentIndex >= cards.length - visibleCards;
}

leftArrow.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});

rightArrow.addEventListener('click', () => {
    if (currentIndex < cards.length - visibleCards) {
        currentIndex++;
        updateCarousel();
    }
});

updateCarousel();

// Selecionando elementos do formulário de agendamento
const tipoServico = document.querySelector("#service");
const date = document.querySelector("#date");
const time = document.querySelector("#hours");
const name = document.querySelector("#name");
const cell = document.querySelector("#cell");
const btnForm = document.querySelector("#btnForm");

function sendMessage() {
    const message = `*Agendamento Confirmado*\n\n` +
        `*Tipo de Serviço:* ${tipoServico.value}\n` +
        `*Data:* ${date.value}\n` +
        `*Horário:* ${time.value}\n` +
        `*Nome Cliente:* ${name.value}\n` +
        `*Número de Contato:* ${cell.value}\n`;

    const apiUrl = "https://api.whatsapp.com/send?phone=+5514991958891&text=" + encodeURIComponent(message);

    window.open(apiUrl, "_blank");
}

btnForm.addEventListener("click", (e) => {
    e.preventDefault();
    sendMessage();
});
