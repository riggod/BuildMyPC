<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>

    <!-- fonts -->

    <link rel="stylesheet" href="./styles/home.css" />
  </head>
  <body>
    <!-- header -->
    <?php include 'navigation.php' ?>
    

    <!-- sliding images -->
    <div class="slidershow-middle">
      <div class="slides">
        <input type="radio" name="r" id="r1" checked />
        <input type="radio" name="r" id="r2" />
        <input type="radio" name="r" id="r3" />
        <input type="radio" name="r" id="r4" />
        <input type="radio" name="r" id="r5" />
        <div class="slide s1">
        <a href="https://www.ibuypower.com/"><img src="images/sliding_home/ElementCL-Pro-Apr2021-TV.webp" alt="" /></a>
        </div>
        <div class="slide">
        <a href="https://www.asus.com/in/"><img src="images/sliding_home/iBP-PoweredByASUS-TV.webp" alt="" /></a>
        </div>
        <div class="slide">
        <a href="https://www.intel.in/content/www/in/en/homepage.html"><img src="images/sliding_home/Intel-11thGen-TV.webp" alt="" /></a>
        </div>
        <div class="slide">
        <a href="https://www.nvidia.com/en-in/design-visualization/desktop-graphics/"><img src="images/sliding_home/Nvidia-30Series-TV.webp" alt="" /></a>
        </div>
        <div class="slide">
        <a href="https://www.marvel.com/games/marvels-guardians-of-the-galaxy"><img src="images/sliding_home/NVIDIA-Guardians-TV-Wall.webp" alt="" /></a>
        </div>
      </div>

      <div class="navigation">
        <label
          for="r1"
          class="bar"
          id="bar1"
          onclick="change_counter(1)"
        ></label>
        <label
          for="r2"
          class="bar"
          id="bar2"
          onclick="change_counter(2)"
        ></label>
        <label
          for="r3"
          class="bar"
          id="bar3"
          onclick="change_counter(3)"
        ></label>
        <label
          for="r4"
          class="bar"
          id="bar4"
          onclick="change_counter(4)"
        ></label>
        <label
          for="r5"
          class="bar"
          id="bar5"
          onclick="change_counter(5)"
        ></label>
      </div>
    </div>

    <!-- main section -->
    <div class="main-content">
      <div class="shop_now1">
        <a href="custom_rigs.php">ASSEMBLE YOUR GAMING BUILD</a>
      </div>
      
    </div>

    <!-- footer -->
    <?php include 'footer.php' ?>
    

    <script src="script/homepage.js"></script>
  </body>
</html>
