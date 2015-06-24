<!DOCTYPE html>
<html><head>
    <title>WebGL Filter</title>
    <script type="text/javascript" src="assets/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="assets/jquery.ui.slider.js"></script>
    <script type="text/javascript" src="http://evanw.github.com/glfx.js/glfx.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head><body>
    <div id="toolbar">
        <div class="button" id="load"><?php echo __('Carregar'); ?></div>
        <div class="button" id="save"><?php echo __('Salvar'); ?></div>
        <!-- <div class="button disabled"><?php echo __('Desfazer'); ?></div>
        <div class="button disabled"><?php echo __('Refazer'); ?></div> -->
        <div class="button" id="about"><?php echo __('Sobre'); ?></div>
    </div>
    <div id="sidebar"></div>
    <div id="editor">
        <div class="contents">
            <div id="placeholder"></div>
            <canvas id="canvas2d"></canvas>
            <div id="nubs"></div>
        </div>
    </div>
    <div id="fade"></div>
    <div id="dialog"></div>
    <div id="loading">
        <script type="text/javascript">document.write('<?php echo __('Carregando'); ?>');</script>
        <noscript><?php echo __('Por favor, habilite o javascript'); ?></noscript>
    </div>
</body></html>
