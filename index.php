<!DOCTYPE html>

<html>
  <head>
    <link type="text/css" rel="stylesheet" href="main.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Henrike Dosk&copy;</title>
  </head>


    <body>


        <div class="header">
            <h1>----<span class="toFade">Henrike Dosk</span>--<span class="cut">&#9986;</span>----</h1>
            <p class="CE">Cutter/ Editor</p>
        </div>

        <div class="content">
          <a href="http://player.vimeo.com/video/55218795" target="_blank" title="Die Essenz des Guten" >
            <div class="a"></div></a>
          <a href="mov/">
            <div class="b"></div></a>
            <div class="c"></div>
            <div class="d"></div>
            <div class="e"></div>
            <div class="f"></div>
        </div>

        <div class="menu">
            <ul><li>Home</li>
                <li>Portfolio
                    <ul>
                        <li>Film</li>
                        <li>Music Video</li>
                        <li>Short Movies</li>
                    </ul>
                </li>
                <li>Vita</li>
                <li>Contact</li>
            </ul>
        </div>

        <div class="contact">
          telephone: +(0049)174 69 707 66 |
          <a href="https://goo.gl/maps/MZ917" class="link">+++ B&auml;nschstr.88, 10247 Berlin, Germany +++</a>
          | Email:
          <a href="mailto:henrikedosk@email.com" class="link2">henrikedosk@email.com</a>
        </div>

        <div class="links">
            <table>
                <tr>
                    <td>
                    <a href="http:www.twitter.com" target="_blank" title="twitter" >
                    <div class="twitter"></div>
                    <a/>
                </td>
                <td>
                    <a href="http://facebook.com" target="_blank" title="facebook" >
                    <div class="facebook"></div>
                    </a>
                </td>
                <td>
                    <a href="http://www.youtube.com" target="_blank" title="youtube" >
                    <div class="youtube"></div>
                    </a>
                </td>
                <td>
                    <a href="http://www.pinterest.com" target="_blank" title="pinterest" >
                    <div class="pinterest"></div>
                    </a>
                </tr>
            </table>
        </div>





    <script>

      $('.a, .b, .c, .d, .e, .f').hover(function () {
        $('.a, .b, .c, .d, .e, .f').not($(this)).stop().animate({
        opacity: .3}, 500);
          }, function () {
      $('.a, .b, .c, .d, .e, .f').stop().animate({
        opacity: 1 }); }, 250);

      $('.toFade').mouseover(function () {
        $('.toFade').fadeTo("slow", 0.15);
      });

      $('.toFade').mouseleave(function () {
        $('.toFade').fadeTo("slow", 1);
      });

      $('.link').mouseover(function () {
        $('.link').fadeTo("slow", 0.15);
      });

      $('.link').mouseleave(function () {
        $('.link').fadeTo("slow", 1);
      });

      $('.link2').mouseover(function () {
        $('.link2').fadeTo("slow", 0.15);
      });

      $('.link2').mouseleave(function () {
        $('.link2').fadeTo("slow", 1);
      });

      $('.cut').click(function() {
        $('.cut').animate({
        'marginLeft' : "+=30px"
        });
        $('.cut').animate({
        'marginLeft' : "-=30px"
        });
      });

    </script>

  </body>
</html>
