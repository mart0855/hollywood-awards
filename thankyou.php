<?php include "includes/header.php" ?>
<?php
$thisCategory = "directing";
//get total number of votes for directing
$getTotal = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category");
$getTotal->bindValue(":category", $thisCategory, PDO::PARAM_STR);
$getTotal->execute();
$total = $getTotal->rowCount();
?>


        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
        <h2 class="page-header"><small class="font_small">Thank you!</small><br/>
            Polling closes on Sunday, February 26 at 8:00pm (EST).
        </h2>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <p class="lead">We know you have an insatiable appetite for everything Hollywood! Sign into Texture and search for these celebrity-related stories:</p>
             </div>
        </div>

        <!-- START THE FEATURETTES -->

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><em>Oscars So Right</em><br/><span class="text-muted">Entertainment Weekly, February 3, 2017</span></h2>
                <p><strong>Why it's a must-read story:</strong> Get inside intel on the nominees, predictions plus a look back at the musical that changed the game – 65 years ago!</p>
                <a href="https://read.texture.ca/dl/content/ew/2017-02-03/ri/219676aa-a3ee-389c-8086-a33489c1bbdc/?view=article&src=Email" target="_blank"><p>Keep reading &rarr;</p></a>
            </div>
            <div class="col-md-5">
                <a href="https://read.texture.ca/dl/content/ew/2017-02-03/ri/219676aa-a3ee-389c-8086-a33489c1bbdc/?view=article&src=Email" target="_blank"><img class="featurette-image img-responsive center-block" src="images/img-oscars.jpg" alt="Oscars so right: Entertainment Weekly, Feb 3rd"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading"><em>And Then There Were Nine</em><br/><span class="text-muted">Hollywood Reporter, February 3, 2017</span></h2>
                <p><strong>Why it's a must-read story:</strong> Discover how each best picture nominee made the cut from a field of 336 contenders as pros, cons and controversies colour the final homestretch to Oscar.</p>
                <a href="https://read.texture.ca/dl/content/thr/2017-02-03/ri/c72fd7c1-f254-31b5-8780-62b7f018dccf/?view=article&src=Email" target="_blank"><p>Keep reading &rarr;</p></a>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <a href="https://read.texture.ca/dl/content/thr/2017-02-03/ri/c72fd7c1-f254-31b5-8780-62b7f018dccf/?view=article&src=Email" target="_blank"><img class="featurette-image img-responsive center-block" src="images/img-nine.jpg" alt="And Then There Were Nine: Hollywood Reporter, Feb 3rd"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><em>Hollywood 2017</em><br/><span class="text-muted">Vanity Fair, No. 679</span></h2>
                <p><strong>Why it's a must-read story:</strong> This year's definitive guide pays homage to Hollywood! It covers little-known anecdotes from the inner workings of old Hollywood right up to the paramount women of 2017 who dominated the big screen.</p>
                <a href="https://read.texture.ca/dl/content/vyf/2017-02-04/ri/0f3b05c7-07a5-3a7d-8c7e-8b5737fa8553/?view=article&src=Email" target="_blank"><p>Keep reading &rarr;</p></a>
            </div>
            <div class="col-md-5">
                <a href="https://read.texture.ca/dl/content/vyf/2017-02-04/ri/0f3b05c7-07a5-3a7d-8c7e-8b5737fa8553/?view=article&src=Email" target="_blank"><img class="featurette-image img-responsive center-block" src="images/img-hollywood.jpg" alt="Hollywood 2017: Vanity Fair, No. 679"></a>
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    <!-- Footer -->

    <footer class="footer">
        <div class="container text-center">
            <p class="copyright">&trade;Texture is a trademark used under license by Rogers Media or an affiliate.<br/><br/>&#169; 2017 Rogers Media</p>
            <a href="https://www.facebook.com/texturecanada" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/texturecanada" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://www.instagram.com/texturecanada" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCxMwoP994PTxOuBKOt0PtEg" target="_blank"><i class="fa fa-youtube"></i></a>
        </div><!--End container-->
    </footer><!--End footer 2-->

    </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/toggle.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>        
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
