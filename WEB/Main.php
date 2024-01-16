<!DOCTYPE html>
<html>
  <head>
    <title>HRY</title>
    <link rel="stylesheet" type="text/css" href="Main.css">
    <style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
</style>
</head>

<body>
  <nav class="navbar background">
    <ul class="nav-list">
      <div class="logo">
      </div>
      <li><p class="p1"><a href="dama.html">Dáma</a></li>
       <li><p class="p1"><a href="sachy.html">Šachy</a></li>
       <li><p class="p1"><a href="had.html">Had</a></li>
       <li><p class="p1"><a href="Pexeso.html">Pexeso</a></li>
       <li><p class="p1"><a href="Pacman.html">Pac-Man</a></li>
       <li><p class="p1"><a href="../tictactoe/tictactoe_HTML.html">Tic-tac-toe</a></li>
      <li><button onclick="myFunction()">Toggle dark mode</button></li>
    </ul>
    </nav>

    <?php

    $userIsLoggedIn = false;/*
    $username = "nějaký input";
    $password = "nějaký input";
    $array_users = array("admin"=>"1234", "admin2"=>"2345")
    if($password == array_users[$username]) {
      $userIsLoggedIn = true;
    }; */
  
    

    if ($userIsLoggedIn) {
        echo '<div>přihlášen</div>';
     }     else {
        echo '<div>
        
        <section class="firstsection">
          <div class="box-main">
            <div class="firstHalf">
              <h1 class="text-big" id="dama.html">Dáma</h1>
              <p class="text-small">
                Dáma je desková hra pro 2 hráče. Cílem je vzít všechny soupeřovy kameny nebo mu zabránit v dalším tahu. Každý hráč má 12 kamenů a pohybují se diagonálně. Mohou být přeměněny na dámu. Hráč může skákat přes soupeřovy kameny a brát je. Hra končí, když jeden hráč ztratí všechny kameny nebo je mu zabráněno v dalším tahu. Remíza nastane, pokud žádný hráč nemůže táhnout.
              </p>
      
      
            </div>
          </div>
        </section>
      
        <section class="secondsection">
          <div class="box-main">
            <div class="firstHalf">
              <h1 class="text-big" id="sachy.html">Šachy</h1>
              <p class="text-small">
                Šachy jsou desková hra pro 2 hráče, kteří se střídají v tahu. Cílem je dát soupeřovu králi šach a mat. Každý hráč má 16 figurek, každá s vlastními pravidly pohybu. Hra končí vítězstvím jednoho hráče, když dá mat soupeřově králi. Hra může skončit remízou.
              </p>
      
      
            </div>
        </section>
      
          <section class="thirdsection">
          <div class="box-main">
            <div class="firstHalf">
              <h1 class="text-big" id="had.html">
                Had
              </h1>
              <p class="text-small">
                Hra Had je počítačová hra, kde hráč ovládá hada a sbírá jídlo, ale musí se vyhýbat střetům s okraji hrací plochy nebo vlastním tělem hada. Hra končí, pokud se had srazí s okrajem hrací plochy nebo se srazí se svým vlastním tělem. Hodnocení může být založeno na délce hada, počtu získaného jídla nebo na čase.
      
              </p>
      
      
            </div>
      
        </section>
      
            <section class="fourthsection">
          <div class="box-main">
            <div class="firstHalf">
              <h1 class="text-big" id="pexeso.html">
                Pexeso
              </h1>
              <p class="text-small">
                Pexeso je desková hra pro dva a více hráčů, kde jsou karty položeny obrázkem dolů a hráči se snaží najít dvojice stejných obrázků tím, že otočí dvě karty najednou. Pokud najdou dvojici, berou si je a pokračují v dalším tahu. Hra končí, když jsou všechny dvojice nalezeny. Hráč s největším počtem dvojic vyhrává.
              </p>
      
      
            </div>
      
        </section>
      
            <section class="fifthsection">
          <div class="box-main">
            <div class="firstHalf">
              <h1 class="text-big" id="pacman.html">
                Pac-man
              </h1>
              <p class="text-small">
                Pac-Man je arkádová hra, kde hráč ovládá postavu Pac-Mana a snaží se sbírat body na herní ploše a zároveň se vyhýbat nepřátelským duchům. Pokud Pac-Man sežere speciální bod, duchové se zbarví a stávají se dočasně zranitelnými, což umožní Pac-Manovi je sežrat. Cílem hry je získat co nejvíce bodů a překonat vlastní rekord. Hra se skládá z několika kol a každé je náročnější než ta předchozí.
      
              </p>
      
      
            </div>
      
        </section></div>'

  <footer class="background">
    <p class="text-footer">
      &copy;2023 Jirka poslouchá imagine dragons.
    </p>


  </footer>
</body>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</html>

    </style>
  </head>
