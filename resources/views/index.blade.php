<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Anime-HUb</title>
</head>
<body>
  <header class="spacer layer1" id="navbar">
    <div class="navbar">
      <div class="logo"><img src="MicrosoftTeams-image.png">Anime-Hub</div>
      <div class="menu" onclick="toggleMenu()">Menu</div>
      <div class="links">
        <a href="#">Főoldal</a>
        <a href="#">Animék</a>
        <a href="#">Kategóriák</a>
        <a href="#">Bejelentkezés</a>
        <a href="#">Regisztráció</a>
      </div>
    </div>
  </header>
  <section class="sections elso">
      <div class="content">
        <div class="anime-details">
          <div class="container">
              <div class="anime-image">
                  <img src="https://github.com/kovpal322/2.csoport/blob/main/jujutsu.jpg?raw=true" alt="Anime kep">
              </div>
              <div class="anime-info">
                  <h1>Jujutsu kaisen</h1>
                  <p><strong>Kategória:</strong>shounen</p>
                  <p><strong>Leírás:</strong>A történet Yuji Itadori-t követi, egy gimnazista diákot, aki lenyűgöző atlétai képességekkel rendelkezik, és véletlenül egy átokkal terhelt tárgyra bukkan, melyben a Sukuna néven ismert gonosz átok található. Miután véletlenül szabadon engedi az átkot, Yuji belekeveredik a Jujutsu Mágusok világába, olyan személyek közé, akik az átkokkal és természetfeletti veszélyekkel harcolnak. Csatlakozik a Tokyo Jujutsu High-hoz, ahol megtanulja irányítani az átkok energiáját, és más mágusokkal együtt harcol, hogy megakadályozzák az átkokat abban, hogy ártást okozzanak a világnak. A sorozat az intenzív akció, lenyűgöző karakterek és bonyolult természetfeletti hagyományok miatt vált kedvencévé a manga és anime rajongók körében.</p>
              </div>
          </div>
        </div>
      </div>
  </section>
  <div class="spacer layer2"> <h1>Újjonan Feltőltött</h1></div>
  <section id="home" class="sections">
    <div class="container1" id="anime-list">

  </div>
</section>
<div class="spacer layer3"></div>
<section class="sections kat">
    <div class="kategoriak">
      <div class="widget">
        <h1>Kategóriák</h1>
        <div class="menu-about-container">
          <ul class="layoutgrid">
            <li class="menu-item"><a href="Shounen">Shounen</a></li>
            <li class="menu-item"><a href="Shoujo">Shoujo</a></li>
            <li class="menu-item"><a href="Seinen">Seinen</a></li>
            <li class="menu-item"><a href="Josei">Josei</a></li>
            <li class="menu-item"><a href="Kodomomuke">Kodomomuke</a></li>
            <li class="menu-item"><a href="Isekai">Isekai</a></li>
            <li class="menu-item"><a href="Mecha">Mecha</a></li>
            <li class="menu-item"><a href="Fantasy">Fantasy</a></li>
            <li class="menu-item"><a href="Slice-of-Life">Slice of Life</a></li>
            <li class="menu-item"><a href="Horror">Horror</a></li>
            <li class="menu-item"><a href="Romance">Romance</a></li>
            <li class="menu-item"><a href="Comedy">Comedy</a></li>
            <li class="menu-item"><a href="Mystery">Mystery</a></li>
            <li class="menu-item"><a href="Psychological">Psychological</a></li>
            <li class="menu-item"><a href="Thriller">Thriller</a></li>
            <li class="menu-item"><a href="Superhero">Superhero</a></li>
            <li class="menu-item"><a href="Sci-Fi">Sci-Fi</a></li>
            <li class="menu-item"><a href="Adventure">Adventure</a></li>
            <li class="menu-item"><a href="Magical-Girl">Magical Girl</a></li>
            <li class="menu-item"><a href="Drama">Drama</a></li>
          </ul>
        </div>
      </div>
    </div>
</section>
<div class="spacer layer4"><h1>Bejelentkezés vagy Regisztráció</h1></div>
<section class="sections logreg">
<div class="container3">
    <div class="form-container">
      <h2>Login</h2>
      <form class="login-form">
        <div class="form-group">
          <label for="login-username">Felhasznalonev:</label>
          <input type="text" id="login-username" name="login-username" required>
        </div>
        <div class="form-group">
          <label for="login-password">Jelszó:</label>
          <input type="password" id="login-password" name="login-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Bejelentkezés</button>
        </div>
      </form>
    </div>

    <div class="form-container">
      <h2>Sign Up</h2>
      <form class="signup-form">
        <div class="form-group">
          <label for="signup-username">Felhasznalonev:</label>
          <input type="text" id="signup-username" name="signup-username" required>
        </div>
        <div class="form-group">
          <label for="signup-password">Jelszó:</label>
          <input type="password" id="signup-password" name="signup-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Regisztráció</button>
        </div>
      </form>
    </div>
  </div>
</section> 
<script>
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "backend.php", true);
        xhr.onload = function () {
            if (xhr.status == 200) {
                var animelist = JSON.parse(xhr.responseText);
                var container = document.getElementById("anime-list");

                // Az animelist tömb fordítása (az utolsó elem legyen az első)
                var reversedAnimeList = animelist.reverse();

                // Csak az első 5 elemet kiválasztjuk (azaz az eredeti utolsó 5 elemet)
                var firstFiveAnime = reversedAnimeList.slice(0, 5);

                firstFiveAnime.forEach(function (anime) {
                    var productDiv = document.createElement("div");
                    productDiv.className = "anime";

                    var img = document.createElement("img");
                    img.src = anime.image_path;
                    img.alt = anime.title;
                    productDiv.appendChild(img);

                    var title = document.createElement("h2");
                    title.textContent = anime.title;
                    productDiv.appendChild(title);

                    container.appendChild(productDiv);
                });
            }
        };
        xhr.send();

    </script>
</body>
</html>