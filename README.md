```html
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noticias X Horario | México y el Mundo</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background: #0a0a0a; color: #fff; }
    header { background: linear-gradient(90deg, #006847 33%, #fff 33% 66%, #CE1126 66%); padding: 15px; text-align: center; }
    header h1 { color: #000; font-size: 24px; }
    header p { color: #000; font-size: 14px; }
    .himno { background: #111; padding: 10px; text-align: center; font-size: 12px; }
    .container { max-width: 600px; margin: 20px auto; padding: 10px; }
    .noticia { background: #1a1a1a; border-radius: 12px; margin-bottom: 20px; overflow: hidden; border: 2px solid #333; }
    .etiqueta { background: #CE1126; padding: 8px 12px; font-weight: bold; font-size: 14px; }
    video { width: 100%; display: block; background: #000; }
    .info { padding: 12px; }
    .info h3 { font-size: 16px; margin-bottom: 5px; }
    .info p { font-size: 13px; color: #aaa; }
    .autor { color: #00ff88; font-weight: bold; }
    footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    .btn-telegram { display: block; background: #0088cc; color: #fff; text-align: center; padding: 15px; border-radius: 10px; text-decoration: none; font-weight: bold; margin: 20px 0; }
  </style>
</head>
<body>

  <header>
    <h1>NOTICIAS X HORARIO</h1>
    <p>México y el Mundo en 2 minutos</p>
  </header>

  <div class="himno">
    🇲🇽 Iniciamos con el Himno Nacional Mexicano
  </div>

  <div class="container">

    <a href="https://t.me/NoticiasXOficial" class="btn-telegram">📲 Únete al Canal de Telegram</a>

    <!-- REEL 1: PRESIDENTE -->
    <div class="noticia">
      <div class="etiqueta">🇲🇽 BIENVENIDA</div>
      <video controls poster="portada-presidente.jpg">
        <source src="reels/presidente-14ago.mp4" type="video/mp4">
      </video>
      <div class="info">
        <h3>Presidente de la República</h3>
        <p>Saludo y panorama del día</p>
      </div>
    </div>

    <!-- REEL 2: MUNDO -->
    <div class="noticia">
      <div class="etiqueta">🌎 TOUR X EL MUNDO</div>
      <video controls>
        <source src="reels/mundo-economia.mp4" type="video/mp4">
      </video>
      <div class="info">
        <h3>Economía Global</h3>
        <p class="autor">Por: @PeriodistaIndependiente1</p>
      </div>
    </div>

    <!-- REEL 3: SECRETARÍA -->
    <div class="noticia">
      <div class="etiqueta">🏛️ SECRETARÍA DE SALUD</div>
      <video controls>
        <source src="reels/salud-14ago.mp4" type="video/mp4">
      </video>
      <div class="info">
        <h3>Nueva campaña de vacunación</h3>
        <p class="autor">Por: @PeriodistaIndependiente2</p>
      </div>
    </div>

    <!-- COPIA Y PEGA ESTE BLOQUE PARA MÁS REELS -->
    
  </div>

  <footer>
    ¿Eres periodista? Manda tu reel a noticiasx@email.com <br>
    © 2026 Noticias X Horario | Hecho en México ♾️
  </footer>

</body>
</html>
```

