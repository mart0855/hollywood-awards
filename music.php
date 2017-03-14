<?php include "includes/header.php" ?>
<?php
$thisCategory = "music";
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
            BEST MUSIC (ORIGINAL SCORE)
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
        $getVotes->bindValue(":answer", "hurwitz", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-lalaland.jpg" alt="La La Land screenshot">
        </div>
        <h3>
            Justin Hurwitz<br/><em>La La Land</em>
        </h3>
        <a href="#largeModal" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Music:</strong><br/>Justin Hurwitz,<br/><em>La La Land</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to finish voting.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="hurwitz" data-category="<?php echo $thisCategory; ?>">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "levi", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-jackie.jpg" alt="Jackie screenshot">
        </div>
        <h3>
            Mica Levi<br/><em>Jackie</em>
        </h3>
        <a href="#largeModal2" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal2" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Music:</strong><br/>Mica Levi,<br/><em>Jackie</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to finish voting.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="levi" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "britell", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-moonlight.jpg" alt="Moonlight screenshot">
        </div>
        <h3>
            Nicholas Britell<br/><em>Moonlight</em>
        </h3>
        <a href="#largeModal3" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal3" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Music:</strong><br/>Nicholas Britell,<br/><em>Moonlight</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to finish voting.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="britell" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "bertelmann-ohalloran", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-lion.jpg" alt="Lion screenshot">
        </div>
        <h3>
            Volker Bertelmann and Dustin O'Halloran<br/><em>Lion</em>
        </h3>
        <a href="#largeModal4" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal4" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Music:</strong><br/>Volker Bertelmann and Dustin O'Halloran,<br/><em>Lion</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to finish voting.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="bertelmann-ohalloran" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "newman", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-passengers.jpg" alt="Passengers screenshot">
        </div>
        <h3>
            Thomas Newman<br/><em>Passengers</em>
        </h3>
        <a href="#largeModal5" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal5" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Music:</strong><br/>Thomas Newman,<br/><em>Passengers</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to finish voting.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="newman" data-category="<?php echo $thisCategory; ?>">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include "includes/footer.php" ?>
