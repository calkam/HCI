<?php
    $biblio = $_SESSION["bibliography"];
    $directory = "All";
    if(isset($_POST["btn-directory"])){
        if($_POST["directory"] != "All"){
            $directory = $_POST["directory"];
            $directory_article_id = $_SESSION["directory"][$_POST["directory"]];
            $biblio = array();
            foreach($directory_article_id as $k => $v){
                array_push($biblio, $_SESSION["bibliography"][$v]);
            }
        }
    }

    if(isset($_POST["btn-add-directory"])){
        $directoryName = $_POST["directoryName"];
        $_SESSION["directory"][$directoryName] = array();
        echo '<div class="text-center alert alert-success alert-dismissible navbar-fixed-bottom" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                The New Directory '.$directoryName.' have been correctly added.
            </div>';
    }

    if(isset($_POST["generateBiblio"])){
        $file = "data/reference.bib";
        header("Content-Disposition: attachment; filename=reference.bib");
        header("Content-Length: " . filesize($file));
        header("Content-Type: application/octet-stream;");
        readfile($file);

        echo '<div class="text-center alert alert-success alert-dismissible navbar-fixed-bottom" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                The Bibliography '.$directoryName.' have been correctly generated.
            </div>';
    }

?>
<div class="row">
    <div class="col-xs-12">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-4">
                        <h1>Bibliography</h1>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group custom-search-form" style="margin-top: 30px;">
                                <input type="text" class="form-control" placeholder="Search..." required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-7">

        <form class="form-inline" action="./?pages=bibliography" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <label for="selectDirectory" class="control-label">Choose Directory</label>
                    <select name="directory" class="form-control" style="width:60%;">
                        <?php foreach($_SESSION["directory"] as $k => $v){ ?>
                            <?php if($directory == $k){ ?>
                                <option value="<?php echo $k; ?>" selected><?php echo $k; ?></option>
                            <?php }else{ ?>
                                <option value="<?php echo $k; ?>"><?php echo $k; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <div class="form-group">
                        <button type="submit" name="btn-directory" class="btn btn-default" type="button">
                            Change Directory
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="col-lg-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Add directory
        </button>
    </div>
    <div class="col-lg-2">
        <form class="form-inline" id="generateBiblio" action="./?pages=bibliography" method="post">
            <button type="submit" name="generateBiblio" class="btn btn-primary">
                Generate Bibliography
            </button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div id="table-biblio" class="col-lg-12">
                        <table width="100%" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><input id="allcheck" type="checkbox"></th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($biblio as $k => $v) { ?>
                                <tr class="paper">
                                    <th scope="row"><input class="mustGenerated" type="checkbox"></th>
                                    <td class="title-paper"><?php echo $v["title"]; ?></td>
                                    <td class="author-paper"><?php echo $v["author"]; ?></td>
                                    <td class="date-paper"><?php echo $v["date"]; ?></td>
                                    <td class="journal-paper dontseeninfo"><?php echo $v["journal"]; ?></td>
                                    <td class="volume-paper dontseeninfo"><?php echo $v["volume"]; ?></td>
                                    <td class="number-paper dontseeninfo"><?php echo $v["number"]; ?></td>
                                    <td class="pages-paper dontseeninfo"><?php echo $v["pages"]; ?></td>
                                    <td class="publisher-paper dontseeninfo"><?php echo $v["publisher"]; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div id="info_biblio">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="btn-group" role="group" aria-label="">
                                            <button id="info_biblio_btn_info" type="button" class="btn btn-default">Info</button>
                                            <button id="info_biblio_btn_note" type="button" class="btn btn-default">Notes</button>
                                            <button id="info_biblio_btn_tags" type="button" class="btn btn-default">Tag</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="info_info_biblio">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-lg-12 text-left">
                                            <ul class="list-unstyled">
                                                <li><b>Title :</b> <span id="title-win"></span></li>
                                                <li><b>Author :</b> <span id="author-win"></span></li>
                                                <li><b>Journal :</b> <span id="journal-win"></span></li>
                                                <li><b>Volume :</b> <span id="volume-win"></span></li>
                                                <li><b>Number :</b> <span id="number-win"></span></li>
                                                <li><b>Pages :</b> <span id="pages-win"></span></li>
                                                <li><b>Date :</b> <span id="date-win"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div id="info_note_biblio">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-lg-12">

                                            <div class="row">
                                                <div class="col-lg-12" id="note_info_biblio">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="input-group">
                                                        <input type="text" id="textNote"class="form-control" placeholder="Note...">
                                                        <span class="input-group-btn">
                                                            <button id="putNote" class="btn btn-default" type="button">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="info_tag_biblio">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-lg-12">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="list-unstyled" id="tag_info_biblio">

                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="input-group">
                                                        <input type="text" id="textTag"class="form-control" placeholder="Note...">
                                                        <span class="input-group-btn">
                                                            <button id="putTag" class="btn btn-default" type="button">
                                                                <i class="fa fa-tags"></i>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Directory</h4>
            </div>
            <form class="form-horizontal" action="./?pages=bibliography" method="post">
                <div class="modal-body">
                    <input type="text" name="directoryName" class="form-control" placeholder="Directory Name...">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btn-add-directory" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
