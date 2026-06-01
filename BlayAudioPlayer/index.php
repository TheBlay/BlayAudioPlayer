<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blay Audio Player</title>
    <!-- REPO: https://github.com/TheBlay/BlayAudioPlayer 
     Criado por: Henrique Blay
     Data de criação: 01/06/2026
    -->
</head>
<body>

    <div class="player-container">
        <img id="capa" src="uploads/capas/padrao.jpg" alt="Capa do Álbum" width="200">
        <h2 id="titulo">Selecione uma música</h2>
        <h3 id="artista">Artista</h3>

        <audio id="audio-player" controls></audio> 

        <div class="controles">
            <button id="btn-anterior">Anterior</button>
            <button id="btn-play-pause">Play</button>
            <button id="btn-proxima">Próxima</button>
        </div>
    </div>
    
</body>
</html>