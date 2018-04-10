<?php

    if(isset($_POST["btn-comment"])){
        $comment = array(
            "author"  => $_POST["user"],
            "comment" => $_POST["comment"]
        );
        array_push($_SESSION["article"][$_POST["article_id"]]["comments"], $comment);
    }

    if(isset($_POST["btn-grade"])){
        $_SESSION["article"][$_POST["article_id"]]["your_grade"] = intval($_POST["grade"]);
    }

    if(isset($_POST["btn-add-biblio"])){

        $article = array(
            "title"     => $_POST["title"],
            "author"    => $_POST["author"],
            "journal"   => $_POST["journal"],
            "volume"    => $_POST["volume"],
            "number"    => $_POST["number"],
            "pages"     => $_POST["pages"],
            "date"      => $_POST["date"],
            "publisher" => $_POST["publisher"]
        );

        array_push($_SESSION["bibliography"], $article);
    }

?>

<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1>Actuality</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">

            <?php
                foreach ($_SESSION["article"] as $k => $v) {
            ?>

            <div class="row" id="<?php echo "article".$k; ?>">
            	<div class="col-xs-12">
            		<div class="featured-box">

            			<div class="row">
            				<div class="col-xs-12">
            					<div class="featured-box-title">
            						<div class="row">
            							<div class="col-xs-4 col-lg-2">
                                            <div class="row">
                                                <div class="col-lg-12">
    				                                <img class="img-responsive actuality_icon" src="<?php echo $v["icon"]; ?>"/>
                                                </div>
                                            </div>
            							</div>
                                        <div class="col-xs-4 col-lg-4">
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
                                        <div class="col-xs-2 col-xs-push-1 col-lg-4">
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-lg-12">
                                                    <div class="hidden-xs hidden-sm">
                                                        <?php
                                                        for ($i = 0; $i < $v["grade"]; $i++) {
                                                            echo '<i class="fa fa-star" style="font-size:30px"></i>';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="hidden-md hidden-lg">
                                                        <h4><?php echo $v["grade"]; ?>/5</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            						</div>
            					</div>
            				</div>
            			</div>

                        <div class="page-header">
                			<div class="row">
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
                        </div>

                        <div class="row">
            				<div class="col-lg-12">
            					<div class="featured-box-comment">

                                    <div class="row">
                                        <div class="col-lg-6 col-xs-6">
                                            <div class="btn-group" role="group" aria-label="">
                                                <form action="./?pages=actuality#<?php echo "article".$k; ?>" method="post">
                                                    <input type="hidden" name="title" value="J'ai ete ajouter">
                                                    <input type="hidden" name="author" value="par moi">
                                                    <input type="hidden" name="journal" value="test">
                                                    <input type="hidden" name="volume" value="test">
                                                    <input type="hidden" name="number" value="8000">
                                                    <input type="hidden" name="pages" value="42">
                                                    <input type="hidden" name="date" value="1970">
                                                    <input type="hidden" name="publisher" value="The Boss">
                                                    <button type="submit" name="btn-add-biblio" class="btn btn-default">Add to Bibliography</button>
                                                    <button type="button" class="btn btn-default">Share</button>
                                                    <button type="button" class="btn btn-default">Download</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form class="form-inline" action="./?pages=actuality#<?php echo "article".$k; ?>" method="post">
                                                        <input type="hidden" name="article_id" value="<?php echo $k; ?>">
                                                        <select name="grade" class="form-control">
                                                            <option value="1" <?php if($v[your_grade] == 1) echo "selected"; ?> >1</option>
                                                            <option value="2" <?php if($v[your_grade] == 2) echo "selected"; ?> >2</option>
                                                            <option value="3" <?php if($v[your_grade] == 3) echo "selected"; ?> >3</option>
                                                            <option value="4" <?php if($v[your_grade] == 4) echo "selected"; ?> >4</option>
                                                            <option value="5" <?php if($v[your_grade] == 5) echo "selected"; ?> >5</option>
                                                        </select>
                                                        <button type="submit" name="btn-grade" class="btn btn-default" type="button">
                                                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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

</div>
