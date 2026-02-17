<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pola Figur</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <script src="script.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<h1 class="title">Obliczanie pól</h1>
  <div class="container">
    <a class="button" href="index.php" title="1">Powrót</a>
  </div><br>
<div id="container1">
<table class="srodek">
    <tr>
    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Pole i obwód Prostokąta</h2>
        <input type="number" id="rectA" placeholder="Bok a">
        <input type="number" id="rectB" placeholder="Bok b">
        <br><button onclick="rectangle()">Oblicz</button>
        <div class="result" id="rectResult" ></div>
        </fieldset>
    </div>
    </td>

    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Okrąg</h2>
        <input type="number" id="circleR" placeholder="Promień r">
        <br><button onclick="circle()">Oblicz</button>
        <div class="result" id="circleResult" ></div>
        </fieldset>
    </div>
    </td>
    </tr>
</table>

    <table class="srodek">
    <tr>
    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Pole Trójkąta</h2>
        <input type="number" id="triA" placeholder="Podstawa a">
        <input type="number" id="triH" placeholder="Wysokość h">
        <br><button onclick="triangleArea()">Oblicz</button>
        <div class="result" id="triResult" ></div>
        </fieldset>
    </div>
    </td>

    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Obwód Trójkąta</h2>
        <input type="number" id="2triA" placeholder="Bok a">
        <input type="number" id="2triB" placeholder="Bok b">
        <input type="number" id="2triC" placeholder="Bok c">
        <br><button onclick="trianglePerimeter()">Oblicz</button>
        <div class="result" id="2triResult" ></div>
        </fieldset>
    </div>
    </td>
    </tr>
    </table>
    
    <table class="srodek">
    <tr>
    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Pole Trapezu</h2>
        <input type="number" id="trapA" placeholder="Podstawa a">
        <input type="number" id="trapB" placeholder="Podstawa b">
        <input type="number" id="trapC" placeholder="Wysokość h">
        <br><button onclick="trapezoidArea()">Oblicz</button>
        <div class="result" id="trapResult" ></div>
        </fieldset>
    </div>
    </td>

    <td>
    <div>
        <fieldset class = "figure-fieldset">
        <h2 >Obwód Trapezu</h2>
        <input type="number" id="2trapA" placeholder="Podstawa a">
        <input type="number" id="2trapB" placeholder="Podstawa b">
        <input type="number" id="2trapC" placeholder="Bok a">
        <input type="number" id="2trapD" placeholder="Bok b">
        <br><button onclick="trapezoidPerimeter()">Oblicz</button>
        <div class="result" id="2trapResult" ></div>
        </fieldset>
    </div>
    </td>
    </tr>
    </table>
</div>

</body>
</html>