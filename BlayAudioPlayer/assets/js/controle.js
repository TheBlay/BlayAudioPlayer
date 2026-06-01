let musicas = [];
let indiceAtual = 0;
const audio = document.getElementById('audio-player');

// 1. Busca as músicas do PHP
fetch('buscar_musicas.php')
    .then(response => response.json())
    .then(data => {
        musicas = data;
        if(musicas.length > 0) {
            carregarMusica(indiceAtual);
        }
    });

// 2. Carrega a música na tela e no player
function carregarMusica(indice) {
    const musica = musicas[indice];
    document.getElementById('titulo').innerText = musica.titulo;
    document.getElementById('artista').innerText = musica.artista;
    document.getElementById('capa').src = musica.caminho_capa;
    audio.src = musica.caminho_arquivo;
}

// 3. Eventos de Controle (Play/Pause)
document.getElementById('btn-play-pause').addEventListener('click', () => {
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
});

// Evento para ir para a próxima quando a atual acabar
audio.addEventListener('ended', () => {
    indiceAtual = (indiceAtual + 1) % musicas.length;
    carregarMusica(indiceAtual);
    audio.play();
});