<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGS Defense</title>
</head>
<body>
<div id="loader" class="loading">
        <img width="150" src="./public/assets/img/logo.webp" alt="">
    </div>
    <header class="headerTop blur">
        <a class="linkLogo" href="/index.html">
            <img class="headerLogo" width="150" src="./public/assets/img/logo2.webp" alt="">
        </a>
        <nav class="desktop">
            <a href="">
                <ul class="itemNavList">
                    <li class="item"><a href="/">INÍCIO</a></li> 
                    <li class="item"><a href="/about.html">SOBRE</a></li>
                    <li class="itemX" onmouseleave="hiddenNavMenuTop()" onmouseover="showNavMenuTop()"><a href="#" style="color:#0840B2;">EMBARCAÇÕES <i class="fa-solid fa-chevron-down"></i></a>
                        <div id="embarc" class="hidden">
                            <ul style="list-style: none;">
                                <li class="itemChild"><a href="dgs680.html">DGS 680</a></li>
                                <li class="itemChild"><a href="dgs777.html">DGS 777</a></li>
                                <li class="itemChild"><a href="dgs888.html">DGS 888</a></li>
                                <li class="itemChild"><a href="dgs999.html">DGS 999</a></li>
                                <li class="itemChild"><a href="dgs1200.html">DGS 1200</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="item"><a href="./posvenda.html">PÓS VENDA</a></li>
                    <li class="item"><a href="./dgsacademy.html">DGS ACADEMY</a></li>
                    <li class="item"><a href="https://noticias.dgs.ind.br/">NOTÍCIAS</a></li>
                </ul>
        </nav>
        <nav class="navMenuMobile">
            <button class="buttonHeaderMenuMobile" onclick="show()">
                <a class="linkHeaderMenu" style="font-size: 1.1rem; ">MENU</a>
            </button>
        </nav>

        <aside id="menuMobile" class="hidden">
            <button class="close" onclick="closer()"> <i class="fa-solid fa-xmark"></i> </button>
            <div class="menuMobileLateral">
                <a href="?router=Site/home/">Início</a> 
                <a href="?router=Site/galeria/barcos">Sobre</a> 
                <div>
                    <a onclick="embarcacaoShow()" class="btnCustom" >Embarcações <i class="fa-solid fa-chevron-down"></i></a>
                    <div id="embarcacaoMenu" class="hidden">
                        <ul style="list-style-type: none;"id="itemEmbarcacao" class="">
                            <li class="itemLateral"><a href="./dgs1200.html">DGS 1200</a></li>
                            <li class="itemLateral"><a href="./dgs1200.html">DGS 999</a></li>
                            <li class="itemLateral"><a href="./dgs1200.html">DGS 888</a></li>
                            <li class="itemLateral"><a href="./dgs1200.html">DGS 777</a></li>
                            <li class="itemLateral"><a href="./dgs1200.html">DGS 680</a></li>
                        </ul>
                    </div>
    
                </div>
    
                <a href="/dgsacademy.html">DGS Academy</a>  
                <a href="./posvenda.html">Pós Venda</a> 
                <a href="https://noticias.dgs.ind.br/"> Notícias</a> 
                <a href="./contato.html">Contato</a>
                <a href="https://dgsboats.com/">DGS BOATS CORP - USA</a>
                <span style="margin-top:30px ; color:black;">
                    <a style="color:black;" href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>  
                    <a style="color:black;" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a> 
                    <a style="color:black;" href="https://www.instagra.com"><i class="fa-brands fa-instagram"></i></a> 
                </span> 
            </div>
        </aside>

    </header>


</body>
</html>