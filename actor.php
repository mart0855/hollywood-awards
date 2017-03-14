<?php include "includes/header.php" ?>
<?php
$thisCategory = "actor";
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
            BEST ACTOR IN A LEADING ROLE
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
        $getVotes->bindValue(":answer", "affleck", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-affleck.jpg" alt="Casey Affleck photo">
        </div>
        <h3>
            Casey Affleck<br/><em>Manchester by the Sea</em>
        </h3>
        <a href="#largeModal" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actor:</strong><br/>Casey Affleck,<br/><em>Manchester by the Sea</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" data-submission="affleck" data-category="<?php echo $thisCategory; ?>" class="modal-btn btn-success">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "garfield", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-garfield.jpg" alt="Andrew Garlfield photo">
        </div>
        <h3>
            Andrew Garfield<br/><em>Hacksaw Ridge</em>
        </h3>
        <a href="#largeModal2" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal2" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actor:</strong><br/>Andrew Garfield,<br/><em>Hacksaw Ridge</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="garfield" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "gosling", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-gosling.jpg" alt="Ryan Gosling photo">
        </div>
        <h3>
            Ryan Gosling<br/><em>La La Land</em>
        </h3>
        <a href="#largeModal3" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal3" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actor:</strong><br/>Ryan Gosling,<br/><em>La La Land</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="gosling" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "mortensen", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-mortensen.jpg" alt="Viggo Mortensen photo">
        </div>
        <h3>
            Viggo Mortensen<br/><em>Captain Fantastic</em>
        </h3>
        <a href="#largeModal4" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal4" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actor:</strong><br/>Viggo Mortensen,<br/><em>Captain Fantastic</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="mortensen" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "washington", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-washington.jpg" alt="Denzel Washington photo">
        </div>
        <h3>
            Denzel Washington<br/><em>Fences</em>
        </h3>
        <a href="#largeModal5" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal5" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actor:</strong><br/>Denzel Washington,<br/><em>Fences</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="washington" data-category="<?php echo $thisCategory; ?>">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div>
    <ul class="pager">
        <li class="next">
            <a href="actress.php">VOTE NEXT FOR: <strong>Best Actress &rarr;</strong></a>
        </li>
    </ul>
</div>

<?php include "includes/footer.php" ?>