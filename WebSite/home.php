<?php
$dataInicio = new DateTime("2023-12-12 00:00:00");
$dataAgora = new DateTime();
$segundosTotais = $dataAgora->getTimestamp() - $dataInicio->getTimestamp();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I Love you</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: black;
            overflow-x: hidden;
        }
        #slideshow {
            width: 500px;
            height: 600px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 4px 4px 8px rgba(151, 6, 255, 0.5);
            transition: all 0.3s ease;
        }
        #slideshow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h1 {
            color: white;
        }
        #contador {
            color: purple;
            font-size: 20px;
            margin-top: 10px;
        }
        p {
            color: #555;
        }
        .text {
            max-width: 600px;
            margin: 20px auto;
            color: white;
            text-align: justify;
        }
        hr {
            margin: 20px auto;
            width: 50%;
        }

        @keyframes cair {
            0% {
                transform: translateY(-50px);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }
        .coracao {
            position: fixed;
            top: -50px;
            font-size: 24px;
            color: #ff4081;
            user-select: none;
            pointer-events: none;
            animation-name: cair;
            animation-timing-function: linear;
            animation-iteration-count: 1;
        }
    </style>
</head>
<body>

    <iframe style="border-radius:12px"
        src="https://open.spotify.com/embed/track/5K3mMpiWtKvCplBl7ov4Q9?utm_source=generator" 
        width="50%" height="152" frameBorder="0" allowfullscreen=""
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
    </iframe>

    <br><br><br>
    <div id="slideshow">
        <img id="slide" src="img1.jpg" alt="Slideshow" />
    </div>

    <h1> I Love You my girlfriend </h1>
    <p>We've been together since: </p>
    <div id="contador"></div>

    <hr>

    <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque aliquet sapien. Etiam commodo pellentesque erat, sit amet tincidunt quam molestie quis. Phasellus venenatis tincidunt purus, vel eleifend libero tincidunt id. Sed vitae dui sed dui sagittis accumsan a at turpis. Integer a varius nibh. Suspendisse blandit ipsum in mauris imperdiet, vitae commodo est vulputate. Fusce nec felis eu dolor lacinia aliquet. Phasellus pulvinar sollicitudin libero, non placerat magna tincidunt in. Quisque fermentum vehicula erat et rhoncus. Quisque et venenatis nunc. Sed vel arcu vitae erat elementum scelerisque id et est. Quisque ligula ante, sollicitudin facilisis vestibulum non, facilisis in eros.
    </p>

    <script>
        const imagens = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg"];
        var foto = 0;
        const slide = document.getElementById("slide");

        setInterval(() => {
            foto = (foto + 1) % imagens.length;
            slide.src = imagens[foto];
        }, 1200);

        var segundos = <?php echo $segundosTotais; ?>;

        function atualizarContador() {
            var dias = Math.floor(segundos / (60 * 60 * 24));
            var horas = Math.floor((segundos % (60 * 60 * 24)) / (60 * 60));
            var minutos = Math.floor((segundos % (60 * 60)) / 60);
            var segundosRestantes = segundos % 60;

            document.getElementById("contador").innerHTML =
                dias + " days, " + horas + " hours, " + minutos + " minutes and " + segundosRestantes + " seconds";

            segundos++;
        }

        atualizarContador();
        setInterval(atualizarContador, 1000);

        function criarCoracao() {
            const coracao = document.createElement("div");
            coracao.classList.add("coracao");
            coracao.style.left = Math.random() * window.innerWidth + "px";
            coracao.style.animationDuration = 3 + Math.random() * 2 + "s";
            coracao.style.fontSize = 12 + Math.random() * 24 + "px";
            coracao.textContent = "❤️";

            document.body.appendChild(coracao);

            coracao.addEventListener("animationend", () => {
                coracao.remove();
            });
        }

        setInterval(criarCoracao, 300);
    </script>

</body>
</html>