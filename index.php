<?php
include_once('header.php')
?>

<!-- Main -->
<main role="main">
    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page']=="web-developer"){
      ?>
        <iframe id="myIframe" src="web-developer/" style="position: absolute;width: 100%;height: calc(100% - 3.5rem);border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="mobile-developer"){
      ?>
        <iframe id="myIframe" src="mobile-developer/" style="position: absolute;width: 100%;height: calc(100% - 3.5rem);border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="data-science"){
      ?>  
        <iframe id="myIframe" src="data-science/" style="position: absolute;width: 100%;height: calc(100% - 3.5rem);border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="computer-vision"){
      ?>
        <iframe id="myIframe" src="computer-vision/" style="position: absolute;width: 100%;height: calc(100% - 3.5rem);border: none; overflow:auto;"></iframe>
      <?php
      }elseif ($_GET['page']=="game-developer"){
      ?>
        <iframe id="myIframe" src="game-developer/" style="position: absolute;width: 100%;height: calc(100% - 3.5rem);border: none; overflow:auto;"></iframe>
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

<?php
include_once("footer.php");
?>