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
                                <input type="text" class="form-control" placeholder="Search...">
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
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION["bibliography"] as $k => $v) { ?>
                                <tr class="paper">
                                    <th scope="row"><?php echo $k; ?></th>
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
