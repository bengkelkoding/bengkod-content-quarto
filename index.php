<!-- Main -->
<?php
include './header.php';
?>
<main role="main">
    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page']=="a56764040f7c92578bb2c011f845aae9"){
      ?>
        <iframe id="myIframe" src="a56764040f7c92578bb2c011f845aae9/" style="position: absolute;width: 94%;height: 94%;border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="1d63721b0fb4c25cbae5c02375064885"){
      ?>
        <iframe id="myIframe" src="1d63721b0fb4c25cbae5c02375064885/" style="position: absolute;width: 94%;height: 94%;border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="05523a261ba32a27ed36e885a86f9fed"){
      ?>  
        <iframe id="myIframe" src="05523a261ba32a27ed36e885a86f9fed/" style="position: absolute;width: 94%;height: 94%;border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="a82f3db817c535a4bae230a7ce1aebdd"){
      ?>
        <iframe id="myIframe" src="a82f3db817c535a4bae230a7ce1aebdd/" style="position: absolute;width: 94%;height: 94%;border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="60ffabea50867a5af1ab63905905c95a"){
      ?>
        <iframe id="myIframe" src="60ffabea50867a5af1ab63905905c95a/" style="position: absolute;width: 94%;height: 94%;border: none; overflow:auto;"></iframe>
      <?php
      }else{
      ?>
      <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h2>404 Not Found</h2>
            </div>
          </div>
      </section>
    <?php
      }
    } else {
      include_once("main.php");
    }
    ?>
</main>
