<?php

    if(isset($_POST["btn-comment"])){
        $comment = array(
            "author"  => $_POST["user"],
            "comment" => $_POST["comment"]
        );
        array_push($_SESSION["article"][$_POST["article_id"]]["comments"], $comment);
    }
?>

<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Actuality</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-9">

        <?php
            foreach ($_SESSION["article"] as $k => $v) {
        ?>

        <div class="row" id="<?php echo "article".$k; ?>">
        	<div class="col-lg-12">
        		<div class="featured-box">

        			<div class="row">
        				<div class="col-xs-12">
        					<div class="featured-box-title">
        						<div class="row">
        							<div class="col-lg-1">
                                        <div class="row">
                                            <div class="col-lg-12">
				                                <img class="actuality_icon" src="<?php echo $v["icon"]; ?>"/>
                                            </div>
                                        </div>
        							</div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3><?php echo $v["author"]; ?></h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4><?php echo $v["date"]; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-offset-5 col-lg-3">
                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-lg-12">
                                                <?php
                                                for ($i = 0; $i < $v["grade"]; $i++) {
                                                    echo '<i class="fa fa-star" style="font-size:30px"></i>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
        						</div>
        					</div>
        				</div>
        			</div>

        			<div class="row page-header">
        				<div class="col-lg-12">
        					<div class="featured-box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3><?php echo $v["title"]; ?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Abstract : </h4>
                                        <p><?php echo $v["abstract"]; ?></p>
                                    </div>
                                </div>
                            </div>
        				</div>
        			</div>

                    <div class="row">
        				<div class="col-lg-12">
        					<div class="featured-box-comment">

                                <div class="row"> <!-- button comment -->
                                    <div class="col-lg-4">
                                        <div class="btn-group" role="group" aria-label="">
                                            <button type="button" class="btn btn-default">Add to Bibliography</button>
                                            <button type="button" class="btn btn-default">Share</button>
                                            <button type="button" class="btn btn-default">Download</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <?php
                                                    if($v["your_grade"] == -1){
                                                        echo "<h4>Not graded</h4>";
                                                    }else{
                                                        for($i = 0; $i < $v["your_grade"]; $i++){
                                                            echo '<i class="fa fa-star" style="font-size:30px"></i>';
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row"> <!-- lists of comments -->
                                    <div class="col-lg-10">
                                        <div class="comment-lists">

                                            <?php
                                                foreach ($v["comments"] as $k2 => $v2) {
                                            ?>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="comment">
                                                        <h4><?php echo $v2["author"]; ?></h4>
                                                        <p><?php echo $v2["comment"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                             ?>

                                        </div>
                                    </div>
                                </div>

                                <form class="form-inline" action="./?pages=actuality#<?php echo "article".$k; ?>" method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-10">
                                            <input type="hidden" name="article_id" value="<?php echo $k; ?>">
                                            <input type="hidden" name="user" value="<?php echo $_SESSION["USER"]; ?>">
                                            <input type="text" value="" class="form-control" name="comment" placeholder="Comment...">
                                            <button type="submit" name="btn-comment" class="btn btn-default" type="button">
                                                <i class="fa fa-comment"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
        				</div>
        			</div>

        		</div>
        	</div>
        </div>

        <?php
            }
        ?>

    </div>
</div>
