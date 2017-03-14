<?php include "includes/header.php" ?>
<?php
$thisCategory = "actress";
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
            BEST ACTRESS IN A LEADING ROLE
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
        $getVotes->bindValue(":answer", "stone", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-stone.jpg" alt="Emma Stone photo">
        </div>
        <h3>
            Emma Stone<br/><em>La La Land</em>
        </h3>
        <a href="#largeModal" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actress:</strong><br/>Emma Stone,<br/><em>La La Land</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="stone" data-category="<?php echo $thisCategory; ?>">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 portfolio-item">
        <?php
        //get percentage of votes for this option
        $getVotes = $connect->prepare("SELECT * FROM " . $votes . " WHERE category = :category AND answer = :answer");
        $getVotes->bindValue(":category", $thisCategory, PDO::PARAM_STR);
        $getVotes->bindValue(":answer", "portman", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-portman.jpg" alt="Natalie Portman photo">
        </div>
        <h3>
            Natalie Portman<br/><em>Jackie</em>
        </h3>
        <a href="#largeModal2" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal2" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actress:</strong><br/>Natalie Portman,<br/><em>Jackie</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="portman" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "negga", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-negga.jpg" alt="Ruth Negga photo">
        </div>
        <h3>
            Ruth Negga<br/><em>Loving</em>
        </h3>
        <a href="#largeModal3" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal3" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actress:</strong><br/>Ruth Negga,<br/><em>Loving</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="negga" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "streep", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-streep.jpg" alt="Meryl Streep photo">
        </div>
        <h3>
            Meryl Streep<br/><em>Florence Foster Jenkins</em>
        </h3>
        <a href="#largeModal4" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal4" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actress:</strong><br/>Meryl Streep,<br/><em>Florence Foster Jenkins</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="streep" data-category="<?php echo $thisCategory; ?>">OK</button>
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
        $getVotes->bindValue(":answer", "huppert", PDO::PARAM_STR);
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
            <img class="img-responsive" src="images/img-huppert.jpg" alt="Isabelle Huppert photo">
        </div>
        <h3>
            Isabelle Huppert<br/><em>Elle</em>
        </h3>
        <a href="#largeModal5" role="button" class="btn btn-primary" data-toggle="modal">Vote</a></p>
    </div>

    <div id="largeModal5" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong>Best Actress:</strong><br/>Isabelle Huppert,<br/><em>Elle</em></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to vote for this selection? Select "OK" to continue voting in the next category.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="modal-btn btn-success" data-submission="huppert" data-category="<?php echo $thisCategory; ?>">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div>
    <ul class="pager">
        <li class="next">
            <a href="music.php">VOTE NEXT FOR: <strong>Best Music &rarr;</strong></a>
        </li>
    </ul>
</div>

<?php include "includes/footer.php" ?>