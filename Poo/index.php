<?php

require_once "supersaiyajin.php";

$goku = new Saiyajin("Goku", 10000);
$goku2 = new Saiyajin("Goku2", 3000);
$vegeta = new Saiyajin("Vegeta", 8000);
$personajes = [$goku, $goku2, $vegeta];

function nivelSayajin(int $nivel_poder): string {
    if ($nivel_poder < 5000) return "Bajo";
    elseif ($nivel_poder < 8000) return "Medio";
    elseif ($nivel_poder < 10000) return "Alto";
    else return "Ultra";
}

function colorPorNivel(int $nivel_poder): string {
    if ($nivel_poder > 8000) return "red";
    elseif ($nivel_poder > 5000) return "orange";
    elseif ($nivel_poder > 3000) return "gold";
    else return "green";
}

$imagenes = [
    "Goku" => "https://www.yourdecoration.es/cdn/shop/products/abystyle-abydco571-dragon-ball-super-goku-ultra-instinct-poster-38x52cm_500x.jpg?v=1709735022",
    "Goku2" => "https://erikstore.com/28107-large_default/poster-grande-dragon-ball-z-ss-goku.jpg",
    "Vegeta" => "https://ih1.redbubble.net/image.2664870444.3998/flat,750x,075,f-pad,750x1000,f8f8f8.u2.jpg"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personajes Saiyajin</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle, #1e1e1e, #000);
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background: #111;
            padding: 30px 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        header img {
            height: 180px;
            border-radius: 60px;
            width: 75%;
            box-shadow: 0 0 100px limegreen;
        }

        header h1 {
            margin-top: 15px;
            font-size: 3em;
            color: #00ff88;
            text-shadow: 3px 3px 6px #000;
            animation: moverIzqDer 6s linear infinite;
        }

        @keyframes moverIzqDer {
            0%   { transform: translateX(0); }
            50%  { transform: translateX(50px); }
            100% { transform: translateX(0); }
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            padding: 50px 20px;
        }

        .personaje {
            background-color: #222;
            border: 2px solid #555;
            border-radius: 15px;
            width: 280px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 0 20px #000;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            cursor: pointer;
        }

        .personaje:hover {
            transform: scale(1.07);
            box-shadow: 0 0 25px #00ffcc;
        }

        .personaje img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            box-shadow: 0 0 10px #000;
            position: relative;
            z-index: 1;
        }

        .nivel {
            font-weight: bold;
            font-size: 1.2em;
        }

        .peleas {
            margin-top: 12px;
            text-align: left;
            font-size: 0.95em;
        }

        .peleas p {
            margin: 6px 0;
        }

        .nombre-animado {
            font-size: 1.8em;
            font-weight: bold;
            color: #00ffff;
            animation: flotar 3s ease-in-out infinite;
            margin-bottom: 10px;
        }

        @keyframes flotar {
            0%, 100% { transform: translateY(0px); color: #00ffff; }
            50% { transform: translateY(-10px); color: #ff00ff; }
        }

        .aura {
            position: absolute;
            top: -25px;
            left: -25px;
            width: 330px;
            height: 330px;
            border-radius: 50%;
            pointer-events: none;
            animation: auraGlow 1.2s infinite alternate;
            box-shadow:
                0 0 20px 10px #f5d742,
                0 0 40px 20px #f5d742,
                0 0 70px 30px #f5d742,
                0 0 100px 50px #f5d742;
            filter: drop-shadow(0 0 10px #f5d742);
            z-index: 0;
        }

        @keyframes auraGlow {
            0% {
                box-shadow:
                    0 0 20px 10px #f5d742,
                    0 0 40px 20px #f5d742,
                    0 0 70px 30px #f5d742,
                    0 0 100px 50px #f5d742;
                opacity: 0.7;
                transform: scale(1);
                filter: drop-shadow(0 0 10px #f5d742);
            }
            100% {
                box-shadow:
                    0 0 35px 20px #f5d742,
                    0 0 60px 40px #f5d742,
                    0 0 90px 50px #f5d742,
                    0 0 120px 80px #f5d742;
                opacity: 1;
                transform: scale(1.1);
                filter: drop-shadow(0 0 20px #f5d742);
            }
        }

        .poder-brillante {
            display: inline-block;
            margin-top: 5px;
            font-size: 1.3em;
            font-weight: bold;
            color: #fff700;
            text-shadow: 0 0 5px #fff700, 0 0 10px #ffaa00, 0 0 15px #ffaa00;
            animation: resplandor 1.5s infinite alternate;
        }

        @keyframes resplandor {
            0% {
                text-shadow: 0 0 5px #fff700, 0 0 10px #ffaa00, 0 0 15px #ffaa00;
                transform: scale(1);
            }
            100% {
                text-shadow: 0 0 10px #fff700, 0 0 20px #ffaa00, 0 0 30px #ffaa00;
                transform: scale(1.05);
            }
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="https://www.fayerwayer.com/resizer/v2/FGLWR6ZNMJC6RJXZORS42H6SQE.jpg?smart=true&auth=afc0ac73e2055b19f05b16d13553818dfd9b004ccc159c0a9982afafeb89a609&width=1440&height=810" alt="Shenlong">
    <h1>¡Personajes Saiyajin!</h1>
</header>

<div class="container">
<?php foreach ($personajes as $personaje): 
    $nombre = $personaje->getNombre();
    $poder = $personaje->getNivelPoder();
    $nivel = nivelSayajin($poder);
    $color = colorPorNivel($poder);
    $img = $imagenes[$nombre] ?? "";
?>
    <div class="personaje" tabindex="0" aria-label="Personaje <?= htmlspecialchars($nombre) ?>">
        <h2 class="nombre-animado"><?= htmlspecialchars($nombre) ?></h2>
        <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($nombre) ?>">
        <p class="nivel" style="color: <?= htmlspecialchars($color) ?>;">
            Nivel Sayajin: <?= $nivel ?><br>
            <span class="poder-brillante"><?= $poder ?> pts</span>
        </p>

        <div class="peleas">
            <h3>Peleas:</h3>
            <?php foreach ($personajes as $oponente): 
                if ($personaje !== $oponente): ?>
                    <p>
                        <?= $nombre ?> vs <?= $oponente->getNombre() ?>: 
                        <?php
                            if ($poder > $oponente->getNivelPoder()) echo "$nombre gana!";
                            elseif ($poder < $oponente->getNivelPoder()) echo $oponente->getNombre() . " gana!";
                            else echo "¡Empate!";
                        ?>
                    </p>
            <?php endif; endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>

<script>
  document.querySelectorAll('.personaje').forEach(personaje => {
    personaje.addEventListener('click', () => {
      let aura = personaje.querySelector('.aura');
      if (!aura) {
        aura = document.createElement('div');
        aura.classList.add('aura');
        personaje.appendChild(aura);
      } else {
        aura.remove();
      }
    });
  });
</script>

</body>
</html>
