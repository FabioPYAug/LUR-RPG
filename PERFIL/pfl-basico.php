<?php
include 'pfl-basico-stl.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Jogador - RPG</title>
</head>

<body>
    <?php
    include 'pfl-basico-js.php';
    ?>
    <div class="container">
        <div class="header">
            <div class="avatar"></div>
            <div class="details">
                <h1 id="nome">João RPG</h1>
                <p class="Detalhes" id="detalhes">descrição</p>
            </div>
        </div>

        <!-- Seções do Perfil -->
        <div class="profile-sections">
            <!-- Dados do Jogador -->
            <div class="section">
                <h2>Dados</h2>
                <p><strong>Sessões Jogadas:</strong></p>
                <p id="valorsessão">0</p>
                <p><strong>Críticos:</strong></p>
                <p id="valorcritico">0</p>
                <p><strong>Falhas:</strong></p>
                <p id="valorfalhas">0</p>
                <p><strong>Oneshots:</strong></p>
                <p id="valoroneshot">0</p>
                <p><strong>Campanhas:</strong></p>
                <p id="valorcampanha">0</p>
            </div>

            <!-- Personagens -->
            <div class="section personagens">
                <h2>Personagens</h2>
                <label for="personagem-select" class="label">Selecione um Personagem:</label>
                <select id="personagem-select" class="styled-select">
                    <option value="">Personagem 1</option>
                </select>

                <div class="carrossel-container">
                    <div class="carrossel" id="carrossel">
                        <div class="token">
                            <img src="https://via.placeholder.com/300" alt="Token 1">
                            <p id="periodo">Período</p>
                            <p id="nomeskin">Nome</p>
                        </div>
                    </div>
                    <button class="carousel-btn left" onclick="moveCarousel(-1)">&#8249;</button>
                    <button class="carousel-btn right" onclick="moveCarousel(1)">&#8250;</button>
                </div>
            </div>

            <div class="section inventory">
                <h2>Histórias Jogadas</h2>
                <ul>
                    <li><img src="https://via.placeholder.com/50">
                        <p>Noite Escura</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Lateral com lista de amigos e sugestões -->
    <div class="side-container">
        <div class="friends">
            <h2>Amigos</h2>
            <ul>
                <li>
                    <img src="https://via.placeholder.com/40" alt="Amigo 1">
                    <span>Amigo 1</span>
                </li>
            </ul>
        </div>
        <div class="suggested-friends">
            <h2>Talvez Conheça</h2>
            <ul>
                <li>
                    <img src="https://via.placeholder.com/40" alt="Amigo Sugerido 1">
                    <span>Amigo Sugerido 1</span>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>