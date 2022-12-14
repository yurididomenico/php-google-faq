<?php

    $db =
    [
        [
            "domanda" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",

            "risposta" =>
            [
                "La recente <a href='#' class='linkT-None'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
                "Per presentare una richiesta di rimozione, compila questo <a href='#' class='linkT-None'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
                "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
            ]
            
        ],

        [
            "domanda" => "Domanda 2",

            "risposta" =>
            [
                "asdasdasasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd sh",
                "asdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd sh",
                "asdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdhasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd sh asdhasd shh asdhasd sh",
                "loremasdmiasd asdasd asdnasd asd  ddasdasdasdasdasd asdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd shasdasdasda sdasggsdag sdhgsdhsdhasd hadhasdhasdh asdhasd sh"
                
            ]
            
        ],
    ]

?>


<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>YDD - Google FAQ</title>
        <!-- [______Collegamento Bootstrap__________________________________________] -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <!-- [______Collegamento Font__________________________________________] -->
        <script src='https://kit.fontawesome.com/f4affba74f.js' crossorigin='anonymous'></script>
        <!-- [______Favicon______________________________________________________] -->
        <link rel='icon' type='image/x-icon' href='./assets/img/favYconStatic.ico'>
    </head>

    <body>
        <header class="d-flex align-items-center justify-content-between">
            <div class="logoTitolo">
                <a href="#"><img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt=""></a>
                <span>Privacy e termini</span>            
            </div>
            <div class="profilo d-flex align-items-center">
                <span class="d-flex">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical icona"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
                <div>
                    <img src="./assets/img/Y-Profile.png" alt="">
                </div>
            </div>
        </header>


        <nav>
            <ul class="d-flex">
                <li><a href="#">Introduzione</a></li>
                <li><a href="#">Norme sulla privacy</a></li>
                <li><a href="#">Termini di servizio</a></li>
                <li><a href="#">Tecnologie</a></li>
                <li><a href="#" class="paginAttiva">Domande Frequenti</a></li>
            </ul>
        </nav>

        <main>
            
        <?php
        
            foreach ($db as $sezione => $domanda)
            {
                echo "<h2>".$domanda["domanda"]."</h2>";

                for ($i=0; $i < count($domanda["risposta"]); $i++)
                { 
                    echo "<p>".$domanda["risposta"][$i]."</p>";
                }
            }
        
        ?>
            
        </main>

        <!-- Axios 1.1.3 -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
        <!-- Vue.js 2.0 -->
        <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
        <!-- Personal Javascript -->
        <script src='./assets/javascript/main.js'></script>
        <!-- Bootstrap -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>
    </body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    color: inherit;
    text-decoration: none;
    list-style-type: none;
    font-family: 'Montserrat', sans-serif;
}



/* ////////////// HEADER ////////////////////////////////////////////////////// */
header
{

    padding: 15px 20px;
    position: sticky;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    
    background-color: white;
}

header .logoTitolo
{
    font-size: 1.2rem;
    font-weight: 500;
}

header .profilo img
{
    width: 30px;
}

header .profilo div
{
    background-color: lightblue;
    border-radius: 50%;
    padding-left: 5px;
}

header .profilo span 
{
    padding: 0 20px;
}

header .profilo span .icona
{
    padding: 0 2px;
}

/* ////////////// NAV ////////////////////////////////////////////////////// */
nav
{
    padding: 0 20px 9px;
    box-shadow: 0 1px lightgrey;   
    position: sticky;
    top: 60px;
    left: 0;
    right: 0;
    width: 100%;
    
    background-color: white;
}

nav ul
{
    padding: 0;
    margin: 0;
}

nav ul li
{
    padding-right: 40px;
    font-size: 0.9rem;
    font-weight: 500;
    text-decoration: none;
}

nav ul li a
{
    text-decoration: none;
    color: inherit;
}

nav ul .paginAttiva
{
    text-decoration: none;
    color: blue;
    box-shadow: 0 3px blue;
    padding-bottom: 10px;
}

/* ////////////// MAIN ////////////////////////////////////////////////////// */
main
{
    z-index: 0;
    display: hidden;
    overflow: auto;
    padding-top: 100px;
    width: 50%;
    margin: auto;
}

main h2
{
    font-size: 1.4rem;
}

main p
{
    font-size: 0.9rem;
    padding-top: 10px;
}

main .linkT-None
{
    text-decoration: none;
}


</style>