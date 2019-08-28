<?php
    /*
    *  Realidade Aumentada : Sobreposição de elementos gráficos em um vídeos (live)
    *   - Precisa de camêra
        - Objeto 3D / imagens / vídeos
    *
    */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Realidade aumentada - espaço Instagramável Casa Aberta 2019</title>
        <meta charset="utf-8">

        <!-- Colocamos o Framework A-frame que será responsável por inserir objetos na cena -->
        <script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>
        
        <!-- Colocamos o Framework AR.js que será responsável por reconhcer o marcador onde o objeto será inserido -->
        <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    </head>
    <body style="margin: 0; overflow: hidden;">
        <a-scene embedded arjs>
            <!-- Cria e posiciona o cobo no marcador-->
            <a-box position="0 0.5 0" material="opacity: 0.5"></a-box>
            <!-- chamada do código do marcador HIRO marcador padrão do AR.js -->
            <a-marker-camera preset="hiro"></a-marker-camera>
        </a-scene>
    </body>
</html>