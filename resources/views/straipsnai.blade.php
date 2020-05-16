<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('jsc/straipsnai.js')}}"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/Normalize.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Visazinis
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <button type="button" class="btn btn-primary" style="margin:5px">
        <a class="nav-link" href="index2.html">Home <span class="sr-only">(current)</span></a>
          </button>
      </li>
      <li class="nav-item">
       <button type="button" class="btn btn-primary" style="margin:5px">
        <a class="nav-link" href="#">Link</a>
          </button>
      </li>
      <li class="nav-item dropdown">
       <button type="button" class="btn btn-primary" style="margin:5px">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
          </button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-primary" style="margin:5px">
         <a class="nav-link active" href="index2.html">Active</a>
          </button>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" style="margin-right: 5px"></i>Search</button>
    </form>
  </div>
</nav>

<div class="container mt-3">


<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/foto6.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/foto5.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/foto13.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Visazinis</h1>
      <p>Naudinga informacija ir karstos naujienos</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">apie mus &raquo;</a></p>
    </div>
      </div>
  <div class="container-fluid">
      <div class="row">
        
      <?php





class straipsnai{
    var $id;
    var $pavadinima;
    var $antraste;
    var $paveik;
   
    

    function __construct($id, $pave, $pav, $ant){
        $this->id = $id;
        $this->paveik = $pave;
        $this->pavadinima = $pav;
        $this->antraste = $ant;
        
       
       
    }
    
        function getTrumpas(){
            echo  "<div class=\"col-12 col-md-6 col-lg-3 m\">";  
            echo  "<div class=\"card\" style=\"width:380px; margin-top: 50px\">";
            echo  "<img class=\"card-img-top\" src=\"" . $this->paveik . "\" alt=\"Card image\" style=\" height: 200px;\">";
            echo  "<div class=\"card-body\">";
            echo  "<h4 class=\"card-title\">" . $this->pavadinima . "</h4>";
            echo  "<p class=\"card-text\">" . $this->antraste . "</p>";
            echo  "<p><a class=\"btn btn-secondary\" href=\"?straipsnai=" . $this->id . "\" role=\"button\">Skaityti toliau &raquo;</a></p>";
            echo  "</div>";
            echo  "</div>";
            echo  "</div>";
            
        
            
            }

            function getPilnas(){

                echo  "<div class=\"col-12 col-md-6 col-lg-3 m\">";  
                echo  "<div class=\"card\" style=\"width:380px; margin-top: 50px\">";
                echo  "<img class=\"card-img-top\" src=\"" . $this->paveik . "\" alt=\"Card image\" style=\" height: 200px;\">";
                echo  "<div class=\"card-body\">";
                echo  "<h4 class=\"card-title\">" . $this->pavadinima . "</h4>";
                echo  "<p class=\"card-text\">" . $this->antraste . "</p>";
                echo  "</div>";
                echo  "</div>";
                echo  "</div>";
                echo  "<div class=\"row\">";
                echo  "<div class=\"col-12 col-md-6 col-lg-3 m\">";
                echo  "<p style=\"margin:20px\">" . $this->te . "</p>";
                ?>
                <div class="small-container">
                

                <form>
                <input id="item" type="text" placeholder="New" required />
                <input id="submiteris" type="submit" value="Submit" />
                </form>

 
                <h2>komentarai</h2>
                <ul></ul>

                
                <?php
                echo  "</div>";
                echo  "</div>";
            
                
                }
        }





    
    


class text extends straipsnai{
    var $te;
public function __construct($id, $pave, $pav, $ant, $tex){
    parent::__construct($id, $pave, $pav, $ant);
    $this->te = $tex;
    


}
}
   



$straipsnai1 = new text(1, "./img/foto111.jpg", "Sportas > Žalgiris", "Kai prabyla tritaškiai, nutyla kitos melodijos: kaip turkai pranoko Žalgirio rekordus?", "Gretindami taškus, kuriuos „Žalgirio“ žaidėjo pelno mikrodvikovose ir kuriuos leidžia pelnyti varžovams, matome, kad Z.LeDay čia yra akivaizdus lyderis (+30). Teigiamą balansą turi tik penki žalgiriečiai, tarp kurių ir komandą jau palikęs Alexas Perezas (+5). Didžiausią neigiamą balansą turi N.Hayesas (-29) ir Paulius Jankūnas (-11), tačiau daryti aklas išvadas iš šios statistikos vargiai galima, mat ji visiškai priklauso nuo trenerių štabo skirtų gynybinių užduočių. Pavyzdžiui, KC Riversui ar A.Milakniui nebūna skiriami dengti individualiai stipriausi varžovų žaidėjai, tad normalu, kad statistiškai mikrodvikovose jie praleidža žymiai mažiau taškų nei, pavyzdžiui, patikimais gynybos specialistais laikomi, bet dažnai atakuojami Th.Walkupas ar N.Hayesas. „Žalgirio“ žaidėjų pelnyti ir praleisti taškai „vienas prieš vieną“ situacijose (2019-20 m. sezonas)");

$straipsnai2 = new text(2, "img/foto222.jpg", "Verslas > Karjera", "Į duomenų analitiką pasukusi Svetlana: Pradėjau mažais žingsniukais, o šiandien esu ten, kur noriu būti",  "Mokslai buvo ne tiek sudėtingi, kiek intensyvūs. IT srityje reikia nuolatos mokytis. Jeigu stengsiesi, dirbsi ir nebijosi klysti – galėsi tapti IT specialistu. Man nebuvo labai sunku. Gal dėl to, kad jau turėjau bazinių žinių. Tačiau reikėjo dirbti intensyviai, susikoncentruoti ir daug išmokti. Mokslai truko mėnesį, o labiausiai patiko paruošta programa. Žinoma, buvo nuostabus kolektyvas, puikūs mokytojai ir skani kava, tačiau man labiausiai pravertė tikslingai paruošta programa ir naudingai išnaudotas laikas. Galiu tik pasidžiaugti, kad mano lūkesčiai buvo visiškai patenkinti – gavau tai, ko tikėjausi. Mokiausi kiekvieną dieną ir tai davė naudos. Manau būtų kur kas sunkiau, o ir reikėtų labiau pasistengti, jeigu visiškai nebūčiau susidūrusi su duomenų analitika. Tačiau aš ir toliau intensyviai mokausi, o kadangi turiu naują darbą – jame tenka ne tik panaudoti įgytas žinias, bet ir kasdien tobulėti. Neįsivaizduoju, kaip išlikti šioje srityje, jeigu nuolat nesimokysi (juokiasi).");

$straipsnai3 = new text(3, "img/foto333.jpg", "Vardai > Lietuva", "Milda Govedaitė – apie filmą Importinis jaunikis: iš ko juokiasi lietuvių žiūrovas?", "Filme pasakojama komiška romantinė istorija: įsimylėjėlių pora iš studijų užsienyje grįžta susipažinti su josios tėvais. Grįžimo tikslas – iškelti vestuves merginos gimtinėje Lietuvoje. Mergina lietuvaitė, jos vaikinas prancūzas. Viskas čia kaip ir gerai. Tačiau jaunosios tėvui nepranešama, kad vaikinas yra juo-da-odis. Štai dėl šio fakto ir vyksta didžioji filmo problematika. Dažnai kino juostose rasistiniai, homofobiški ar seksistiniai juokeliai taip šaržuojami tik juodojo humoro ar suaugusiesiems skirtose komedijose. Šį filmą kino teatruose gali žiūrėti visi asmenys nuo trylikos metų, o nuo septynerių su suaugusio asmens kompanija. Taip kad cenzas ganėtinai liberalus. Visa istorija filme vaikštinėja trapia linija tarp juokingai pavojingų rasistinių juokelių. Kartais atrodydavo, kad tie nekorektiški juokučiai ims ir išsprūs, bet tai filme yra gudriai apžaidžiama. Kaip ir visi supranta, iš ko juokiamasi, bet teisiškai kibti neturi kaip.");

$straipsnai4 = new text(4, "img/foto444.jpg", "Muzika > Eurovizija", "Eurovizijos pusfinalį užvaldė Monikos: viena labiau patiko komisijai, kita – žiūrovams", "Anot dainininkės Monikos Marijos, komisijos balsas galutiniuose nacionalinių atrankų etapuose turėtų būti antraeilis. „Eurovizija“ yra ta vieta, kur mes savotiškai renkame prezidentą, prezidentą muzikoje, mūsų šalies atstovą Europos konkurse. Man atrodo, kad tokioje situacijoje, kai po lygiai gaunama balų, žmonių balsas turėtų lemti. Būtent jis yra dauguma, o komisijos nuomonė yra tik kelių žmonių“, – komentavo ji. Mergina pridūrė, jog apie tai tikrai pati pagalvojo per praeitą laidą, kai pamatė balsavimo lentelę. „Gaila, kad daugumos balsas pas mus dar nėra teisėtas ir labai ką nors lemiantis. Tuo labiau, aš suprasčiau, jeigu komisijoje sėdėtų žmonės, kurie patys yra pasaulinio lygio atlikėjai, patys yra padarę pasaulinio ar bent jau europinio lygio šou, o dabar vertina tie, kurie tiesiog turi didesnį išsilavinimą toje srityje, bet realiai to įrodę prieš pasaulį nėra. Nežinau, ar labai teisinga sakyti, kad jų balsas svarbesnis negu visų žmonių, negu visos publikos, kuri, man atrodo, irgi turi muzikos skonį, domisi, žiūri tą konkursą“, – sakė atlikėja.");

$straipsnai5 = new text(5, "img/foto555.jpg", "Kultūra > Literatūra", "Pokalbis su į Vilniaus knygų mugę atvyksiančiu S.Ahnhemu – apie sekso scenas, politiką detektyvuose bei Žvaigždžių karus", "Literatūros tradicijoje detektyvinės istorinės išradėju laikomas amerikiečių rašytojas Edgaras Allanas Poe, iš jo mokėsi Šerloko Holmso kūrėjas Arthuras Conanas Doyle’is. Kokią jūsų kūrybai padarė detektyvų klasika? – Jaunystėje šių knygų niekada neskaičiau. Tačiau Šerlokas Holmsas, E.A.Poe pasakojimai, Agatha’os Christie Mis Marpl – mūsų kultūros dalis. Žinoma, tai britų [E.A.Poe yra amerikiečių rašytojas aut.] išradimas. Kai pats pradėjau skaityti kriminalinę literatūrą, tai buvo švedų rašytojo Henningo Georgo Mankellio knygos. Tai buvo ilgos, bet įtraukiančios, kupinos žiaurybių istorijos. Jis yra šio žanro meistras. Kartu su Stiegu Larssonu <…> sukūrėme naują detektyvinių istorijų perspektyvą. – Kaip manote, kokie yra to gero skandinaviško detektyvo bruožai – išprotėjusi žmona palėpėje, genialusis detektyvas, gerasis policininkas? – Ko gero, veikėjai galėtų būti absoliučiai bet kokie (juokiasi). Tačiau svarbiausia, jog detektyvas nebūtų nuobodus! Geras pasakojimas apie nusikaltimus turi būti kupinas paslapties, jaudinantis, stebinantis ir lengvai skaitomas. O, kaip rašytojas tą daro – ar veiksmas vyksta korumpuotoje policijoje, ateityje ar šiais laikais – priklauso nuo asmeninio stiliaus.");

$straipsnai6 = new text(6, "img/foto666.jpg", "Sportas > Eurolyga", "Barcelona vėl neteko Th.Heurtelio, bet pratęsė Olimpia krepšininkų išvykų košmara", "Po kelių akimirkų dvitaškį pelnė „Olimpia“ centras Kalebas Tarčevskis, persvėręs rezultatą, tačiau dvikovos ir viso turo MVP tapo Malcolmas Delaney. Įžaidėjas iš JAV dvikovos pabaigoje įmetė šeštąjį savo tritaškį, o vėliau atliko sėkmingą rezultatyvų perdavimą Brandonui Daviesui. M.Delaney šio vakaro susitikime pelnė 26 taškus (3/4 dvit., 6/9 trit., 2/2 baud.), atkovojo 5 ir perėmė 1 kamuolį, atliko 9 rezultatyvius perdavimus, suklydo 3 kartus ir surinko 37 naudingumo balus. Artūrą Gudaitį šio vakaro rungtynėse žaidė stabdė greitos pražangos. Lietuvis per 10 minučių ant parketo pelnė 3 taškus (1/2 dvit., 1/2 baud.), atkovojo 3 kamuolius, blokavo metimą, prasižengė 3 kartus ir surinko 4 naudingumo balus. „Barcelona“: Malcolmas Delaney 26, Kyle'as Kuricas 16, Nikola Mirotičius 15, Brandonas Daviesas 12. „Olimpia“: Sergio Rodriguezas 14, Kalebas Tarčevskis 13, Nemanja Nedovičius 12, Luisas Scola ir Vladimiras Micovas – po 10.");

$straipsnai7 = new text(7, "img/foto777.jpg", "Pasaulis kišenėje > Kelionių istorijos", "Keistas plūduriuojantis viešbutis, kurio niekas nenori – net Šiaurės Korėja...", "Praėjus vos daugiau nei metams nuo atidarymo, plaukiojantis viešbutis buvo parduotas įmonei Vietname. 1989 m. jis buvo nuvilktas į Saigono upę – už 5 tūkst. km. Tapo Saigono plūduriuojančiu viešbučiu. Vietname kaip tik kaip ant mielių augo turistų skaičius, ir prabangių viešbučių karą išgyvenusiai šaliai labai reikėjo. Plūduriuojantis viešbutis tapo itin populiarus, bet visgi jo valdytojai susidūrė su finansiniais nuostoliais ir turėjo jį parduoti. Šįkart pirkėjas – Šiaurės Korėja. Plūduriuojantis viešbutis buvo atvilktas į Kumgango kalno turistinį regioną, kuris yra šalia sienos su Pietų Korėja ir buvo skirtas turistams iš šios šalies. Viešbučiui duotas „Jūros Kumgango“ vardas – arba tiesiog „Haegumgang viešbutis“. Po dešimties metų Šiaurės Korėjos karys netyčia nušovė pietų korėjietę, ir turai į kurortą buvo nutraukti.");

$straipsnai8 = new text(8, "img/foto888.jpg", "Gyvenimas > Grožis", "Antakių meistrė – apie dažniausias moterų klaidas, antakių laminavimą ir atsiauginimą", "Paprašyta pasidalyti patarimais, kaip atsiauginti antakius, G.Ladinskytė pirmiausia patarė atidėti pincetą keletui mėnesių ir leisti plaukeliams ataugti. „Žinoma, galite nueiti pas antakių meistrą, kad šiek tiek išpešiotų plaukelius, patvarkytų antakius, bet pačioms geriau neliesti. Nes kartais tie „nereikalingi“ plaukeliai yra labai reikalingi“, – sakė vizažistė. Žinome, kad ricinų aliejus yra ta priemonė, kuri skatina plaukų augimą. Jis puikiai tinka antakiams, tik labai svarbu antakius aliejumi tepti reguliariai – kiekvieną vakarą. „Jei neturite ricinų aliejaus, bet turite kokį nors aliejų, skirtą plaukų galiukams, antakius galite tepti ir juo. Tik rekomenduoju aliejumi antakius tepti praėjus savaitei po antakių korekcijos, kai jau nuo odos nusiplauna dažai“, – patarė pašnekovė. Tiesa, kai kurios moterys, net ir tepdamos antakius ricinų ar kitu aliejumi, norimo poveikio gali nesulaukti. „Kaip sakau ir savo klientėms: jei jūs niekada neturėjote vešlių antakių arba nuolat pešiojote tas pačias vietas kokius penkerius metus, jūsų antakiai nebeataugs, nes tose vietose nebėra svogūnėlių“, – teigė G.Ladinskytė. Kalbėdama apie antakių dažymą, vizažistė rekomendavo pradėti juos dažyti nuo aukščiausio taško – linkio. „Ten spalva turėtų būti intensyviausia, ryškiausia. Taip pat ryškesnė turėtų būti ir antakio apačia. Antakio priekis turėtų būti išretušuotas, šviesesnis. Svarbiausia, kad antakiai neatrodytų kaip nupiešti“, – sakė antakių meistrė.");



        if (isset($_GET["straipsnai"])){
            if ($_GET["straipsnai"] == 1 ){
			$straipsnai1->getPilnas();
}       
      if ($_GET["straipsnai"] == 2){
          $straipsnai2->getPilnas();
}    
      if ($_GET["straipsnai"] == 3){
          $straipsnai3->getPilnas();
}    
      if ($_GET["straipsnai"] == 4){
          $straipsnai4->getPilnas();
}
      if ($_GET["straipsnai"] == 5){
          $straipsnai5->getPilnas();
}
      if ($_GET["straipsnai"] == 6){
          $straipsnai6->getPilnas();
}
      if ($_GET["straipsnai"] == 7){
          $straipsnai7->getPilnas();
}
      if ($_GET["straipsnai"] == 8){
          $straipsnai8->getPilnas();
}
 }
 else {
         
          $straipsnai1->getTrumpas();
          $straipsnai2->getTrumpas();
          $straipsnai3->getTrumpas();
          $straipsnai4->getTrumpas();
          $straipsnai5->getTrumpas();
          $straipsnai6->getTrumpas();
          $straipsnai7->getTrumpas();
          $straipsnai8->getTrumpas();
 }  
    ?>




      </div>
  </div>
</main>
<div class="links">
                    <a href="{{ url('/') }}">Atgal</a>
                </div>

    <footer>
    <p>&copy 2020</p>
    <p>Tomas Chabada</p>
    <nav>
    <img src="img/foto11.jpg" alt="paveikslelis" height="120" width="120">
    </nav>
    </footer>

                
            </div>
        </div>
    </body>
</html>
