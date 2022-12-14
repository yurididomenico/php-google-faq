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
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
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

header
{
    padding: 15px 20px;
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


</style>