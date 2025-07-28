<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kematian Itu Dekat</title>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&family=EB+Garamond&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: #000; /* latar full hitam */
      font-family: 'EB Garamond', serif;
      color: #e0e0e0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }

    .container {
      background-color: rgba(20, 20, 20, 0.8); /* abu gelap transparan */
      padding: 50px 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 900px;
      box-shadow: 0 0 40px rgba(255, 0, 0, 0.4);
      text-align: center;
    }

    h1 {
      font-family: 'Creepster', cursive;
      font-size: 50px;
      color: #ff3b3b;
      margin-bottom: 30px;
    }

    .line {
      font-size: 20px;
      margin-bottom: 15px;
      color: #ff8888;
      animation: fadeIn 1s ease-out forwards;
      opacity: 0;
    }

    .line:nth-child(2) { animation-delay: 1s; }
    .line:nth-child(3) { animation-delay: 2s; }
    .line:nth-child(4) { animation-delay: 3s; }
    .line:nth-child(5) { animation-delay: 4s; }
    .line:nth-child(6) { animation-delay: 5s; }
    .line:nth-child(7) { animation-delay: 6s; }
    .line:nth-child(8) { animation-delay: 7s; }

    .ayat {
      font-style: italic;
      margin-top: 30px;
      color: #aaa;
      font-size: 16px;
    }

    .emoji-jumpscare {
      font-size: 40px;
      position: absolute;
      animation: flicker 3s infinite ease-in-out;
      opacity: 0.2;
    }

    .emoji1 { top: 10%; left: 10%; }
    .emoji2 { bottom: 12%; right: 10%; }
    .emoji3 { top: 15%; right: 15%; }

    @keyframes fadeIn {
      to { opacity: 1; transform: translateY(0); }
      from { opacity: 0; transform: translateY(20px); }
    }

    @keyframes flicker {
      0%, 100% { opacity: 0.2; transform: scale(1); }
      50% { opacity: 0.6; transform: scale(1.1); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>KEMATIAN ITU DEKAT</h1>
    <div class="line">💀 Setiap yang bernyawa pasti akan merasakan mati…</div>
    <div class="line">⚫ Kematian datang tanpa aba-aba…</div>
    <div class="line">🪦 Sudah siapkah kau menghadapi alam kubur?</div>
    <div class="line">🌑 Dunia hanyalah persinggahan…</div>
    <div class="line">👁️ Amalmu akan menemanimu, bukan hartamu…</div>
    <div class="line">⏳ Waktu terus berjalan… mendekat… dan menjemput…</div>
    <div class="line">☠️ Kematian… adalah pintu menuju akhirat…</div>
    <div class="line">Ihhhhh Takotnyeeeeee 😱</div>

    <div class="ayat">"Tiap-tiap yang berjiwa akan merasakan mati." <br>– QS. Al-Ankabut: 57</div>
  </div>

  <!-- Emoji jumpscare -->
  <div class="emoji-jumpscare emoji1">👻</div>
  <div class="emoji-jumpscare emoji2">😱</div>
  <div class="emoji-jumpscare emoji3">💀</div>
</body>
</html>
