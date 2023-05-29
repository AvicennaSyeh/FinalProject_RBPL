<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-pUA-Compatible" content="ie=edge" />
    <title>Star Rating in HTML CSS & JavaScript</title>
    <link rel="stylesheet" href="rating.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <script src="rating.js" defer></script>

  </head>
  <body>
    <div class="container">
    <div class="rating-box">
      <header>How Was Your Experience With This Nurse?</header>
        <div class="Nurse">
        <img src="ryujin.jpeg" />
        </div>
        <h5>Ajeng Riyustina</h5>
        <div class="Keterangan">
            <i class="fa-sharp fa-solid fa-location-dot"></i> <h3>Sidoarjo</h3>
            <i class="fa-sharp fa-regular fa-star"></i> <h3>New Born</h3>
        </div>
    </div>
    <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h2>Click the stars to rate us!</h2>
      <div class="rating-box1">
        <textarea>share your feedback</textarea>
     </div>
     <div class="btn">
        <button type="submit">Submit</button>
      </div>
  </body>
</html>