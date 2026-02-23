<?php 
$classePagina = 'pagina-ferrari';
include '../Includes/header.php'; 
?>

<!-- HERO COM IMAGEM GRANDE -->
<section class="hero-rbr">
    <div class="hero-texto">
        <h1>Redbull Ford</h1>
        <p>Desde 1950, escrevendo a história da velocidade.</p>
    </div>
</section>

<main class="equipe">

    <h2>Sobre a equipe</h2>

    <p>
        A Ferrari é uma das equipes mais tradicionais da Fórmula 1, reconhecida mundialmente por sua história vitoriosa, seus carros icônicos e a paixão inigualável de seus torcedores.
    </p>

    <p>
        Presente desde a primeira temporada da categoria, em 1950, é a única equipe que nunca deixou o grid da principal competição do automobilismo mundial. Ao longo das décadas, construiu uma trajetória marcada por conquistas, rivalidades históricas e momentos inesquecíveis.
    </p>

    <p>
        Seu período mais dominante ocorreu no início dos anos 2000, quando conquistou cinco títulos mundiais consecutivos de pilotos com Michael Schumacher, consolidando uma das eras mais impressionantes da história da Fórmula 1.
    </p>

    <h2>Dados da equipe</h2>

    <ul class="info-equipe">
        <li><strong>Fundação:</strong> 1929</li>
        <li><strong>País:</strong> Itália</li>
        <li><strong>Fábrica:</strong> Maranello - Itália</li>
        <li><strong>Chefe de equipe:</strong> Frédéric Vasseur</li>
        <li><strong>Títulos de Construtores:</strong> 16</li>
        <li><strong>Títulos de pilotos:</strong> 15</li>
        <li><strong>Pilotos principais:</strong> Charles Leclerc - Lewis Hamilton</li>
        <li><strong>Piloto reserva:</strong> Antonio Giovinazzi</li>
        <li><strong>Pilotos lendários:</strong> Schumacher, Lauda, Alonso</li>
        <li><strong>Primeira corrida na F1:</strong> 1950</li>
        <li><strong>Primeira vitória:</strong> 1951</li>
        <li><strong>Motor:</strong> Ferrari</li>
        <li><strong>Chassi atual:</strong> SF-26</li>
        <li><strong>Recorde:</strong> Única equipe presente em todas as temporadas da F1</li>
        <li><strong>Vitórias totais:</strong> Mais de 240</li>
        <li><strong>Poles positions:</strong> Mais de 250</li>
        <li><strong>Apelido:</strong> Cavallino Rampante</li>
        <li><strong>Cor tradicional:</strong> Rosso Corsa</li>
        <li><strong>Torcida:</strong> Tifosi</li>
    </ul>

    <section class="pilotos">
        <h2>Pilotos</h2>

        <div class="pilotos-grid">

            <div class="piloto">
                <a href="../Pilotos/leclerc.php">
                    <img src="../Images/charlesleclerc.jpg" alt="Charles Leclerc">
                    <p>Charles Leclerc</p>
                </a>
            </div>

            <div class="piloto">
                <a href="../Pilotos/lewis.php">
                    <img src="../Images/lewishamilton.jpg" alt="Lewis Hamilton">
                    <p>Lewis Hamilton</p>
                </a>
            </div>

        </div>
    </section>

</main>

<?php include '../Includes/footer.php'; ?>