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
        <h2 class="page-header"><small class="font_small">Cast your vote for:</small><br/>
            BEST DIRECTING
        </h2>
    </div>
</div>

<!-- Gallery -->

<div class="row">
    <div class="col-sm-6 col-md-4 portfolio-item">    
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "villeneuve", PDO::PARAM_STR);
        $getVotes->execute();
        $numVotes = $getVotes->rowCount();
        if($numVotes == 0){
            $currResult = 0;
        }
        else{
            $currResult = round(($numVotes/$total)*100);
        }
        ?>
        <div data-content="<?php echo $currResult; ?>%" class="results">
            <img class="img-responsive" src="images/img-villeneuve.jpg" alt="Denis Villeneuve photo">
        </div>
        <h3>
            Denis Villeneuve<br/><em>Arrival</em>
        </h3>
        <a href="#largeModal" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Directing:</strong><br/>Denis Villeneuve,<br/><em>Arrival</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="villeneuve" data-category="directing">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "gibson", PDO::PARAM_STR);
        $getVotes->execute();
        $numVotes = $getVotes->rowCount();
        if($numVotes == 0){
            $currResult = 0;
        }
        else{
            $currResult = round(($numVotes/$total)*100);
        }
        ?>
        <div data-content="<?php echo $currResult; ?>%" class="results">
            <img class="img-responsive" src="images/img-gibson.jpg" alt="Mel Gibson photo">
        </div>
        <h3>
            Mel Gibson<br/><em>Hacksaw Ridge</em>
        </h3>
        <a href="#largeModal2" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal2" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Directing:</strong><br/>Mel Gibson,<br/><em>Hacksaw Ridge</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="gibson" data-category="directing">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix visible-sm-block"></div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "chazelle", PDO::PARAM_STR);
        $getVotes->execute();
        $numVotes = $getVotes->rowCount();
        if($numVotes == 0){
            $currResult = 0;
        }
        else{
            $currResult = round(($numVotes/$total)*100);
        }
        ?>
        <div data-content="<?php echo $currResult; ?>%" class="results">
            <img class="img-responsive" src="images/img-chazelle.jpg" alt="Damien Chazelle photo">
        </div>
        <h3>
            Damien Chazelle<br/><em>La La Land</em>
        </h3>
        <a href="#largeModal3" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal3" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Directing:</strong><br/>Damien Chazelle,<br/><em>La La Land</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="chazelle" data-category="directing">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix visible-md-block"></div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "jenkins", PDO::PARAM_STR);
        $getVotes->execute();
        $numVotes = $getVotes->rowCount();
        if($numVotes == 0){
            $currResult = 0;
        }
        else{
            $currResult = round(($numVotes/$total)*100);
        }
        ?>
        <div data-content="<?php echo $currResult; ?>%" class="results">
            <img class="img-responsive" src="images/img-jenkins.jpg" alt="Barry Jenkins photo">
        </div>
        <h3>
            Barry Jenkins<br/><em>Moonlight</em>
        </h3>
        <a href="#largeModal4" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal4" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Directing:</strong><br/>Barry Jenkins,<br/><em>Moonlight</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="jenkins" data-category="directing">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix visible-sm-block"></div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "lonergan", PDO::PARAM_STR);
        $getVotes->execute();
        $numVotes = $getVotes->rowCount();
        if($numVotes == 0){
            $currResult = 0;
        }
        else{
            $currResult = round(($numVotes/$total)*100);
        }
        ?>
        <div data-content="<?php echo $currResult; ?>%" class="results">
            <img class="img-responsive" src="images/img-lonergan.jpg" alt="Kenneth Lonergan photo">
        </div>
        <h3>
            Kenneth Lonergan<br/><em>Manchester by the Sea</em>
        </h3>
        <a href="#largeModal5" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal5" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Directing:</strong><br/>Kenneth Lonergan,<br/><em>Manchester by the Sea</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="lonergan" data-category="directing">OK</button>
                </div>
            </div>
        </div>
    </div>       

</div>


<div>
    <ul class="pager">
        <li class="next">
            <a href="actor.php">VOTE NEXT FOR: <strong>Best Actor &rarr;</strong></a>
        </li>
    </ul>
</div>

<?php include "includes/footer.php" ?>