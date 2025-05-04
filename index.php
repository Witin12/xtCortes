<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xt Cortes | Página Inicial</title>

    <!--* links -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <!-- banner e nav -->
    <div class="bannerContainer">
        <div class="banner">
            <img src="img/barber.png" alt="Fundo Banner">
        </div>
    </div>

    <div class="navContainer">
        <div class="topNav">
            <div class="logo">
                <img src="img/logo.png" alt="Logo XT Cortes">
            </div>
            <div class="contato">
                <h3>14 99151-7548</h3>
            </div>
        </div>
        <span class="lineNav"></span>
    </div>

    <!-- Serviços oferecidos -->
    <div class="serviceContainer">
        <div class="titleService">
            <h2>Serviços Disponíveis</h2>
        </div>
        <span class="lineService"></span>
        <div class="carousel">
            <button class="arrow left">&lt;</button>
            <div class="cardsContainer">
                <div class="card">
                    <img src="img/fotoCard.png" alt="Foto do Serviço">
                    <h4>Degradê e Barba</h4>
                    <p>R$40,00</p>
                </div>
                <div class="card">
                    <img src="img/fotoCard.png" alt="Foto do Serviço">
                    <h4>Cabelo Degradê</h4>
                    <p>R$30,00</p>
                </div>
                <div class="card">
                    <img src="img/fotoCard.png" alt="Foto do Serviço">
                    <h4>Social e Barba</h4>
                    <p>R$35,00</p>
                </div>
                <div class="card">
                    <img src="img/fotoCard.png" alt="Foto do Serviço">
                    <h4>Social</h4>
                    <p>R$25,00</p>
                </div>
                <div class="card">
                    <img src="img/fotoCard.png" alt="Foto do Serviço">
                    <h4>Corte e Pigmentação</h4>
                    <p>R$50,00</p>
                </div>
            </div>
            <button class="arrow right">&gt;</button>
        </div>

    </div>

    <!-- Agendamentos de Horários -->
    <div class="agendamentoContainer" id="agendamento">
        <div class="titleAgendamento">
            <h2>Agendamentos</h2>
        </div>
        <span class="lineAgendamentos"></span>
        <div class="formContainer">
            <form>
                <div class="tipoForm">
                    <label for="">Tipo de Serviço</label>
                    <select name="typeService" id="service" class="form-control">
                        <option value="Degradê e Barba">Degradê e Barba</option>
                        <option value="Cabelo Degradê">Cabelo Degradê</option>
                        <option value="Social e Barba">Social e Barba</option>
                        <option value="Social">Social</option>
                        <option value="Corte e Pigmentação">Corte e Pigmentação</option>
                    </select>
                </div>
                <div class="dateForm">
                    <label for="">Data</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="hoursForm">
                    <label for="">Horário</label>
                    <select id="hours">
                        <option value="08">08:00</option>
                        <option value="09">09:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                    </select>
                </div>
                <div class="nameForm">
                    <label for="">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome...">
                </div>
                <div class="cellForm">
                    <label for="">Número de contato</label>
                    <input type="text" name="cell" id="cell" placeholder="Digite o telefone de contato...">
                </div>
                <div class="btnForm">
                    <button type="button" class="btn" id="btnForm">Agende seu horário</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Localização via Google Maps -->
    <div class="localContainer">
        <div class="titleLocal">
            <h2>Venha Conhecer</h2>
            <p>Av. Alfredo Pauleti - nº 780</p>
        </div>
        <span class="lineLocal"></span>
        <div class="localMap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d921.6798925615421!2d-48.972261847488596!3d-22.477170124158544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c0a138735372ed%3A0x6749f681c84471f3!2sAv.%20Alfredo%20Paulete%2C%20780%20-%20Jardim%20Vienense%2C%20Agudos%20-%20SP%2C%2017120-000!5e0!3m2!1spt-BR!2sbr!4v1737588034198!5m2!1spt-BR!2sbr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <div class="footerContainer">
        <footer>
            <h2>Pronto para atualizar seu estilo?</h2>
            <h2>Agende conosco agora!</h2>
            <div class="info">
                <p>Atendimento de terça à sábado das 08H às 18H</p>
                <button class="btn">Agende seu horário</button>
            </div>
            <p>Desenvolvido por Witor Santos - 2025 &copy;</p>
        </footer>
    </div>
</body>

</html>