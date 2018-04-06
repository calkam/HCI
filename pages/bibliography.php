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
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publication date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION["bibliography"] as $k => $v) { ?>
                                <tr class="paper">
                                    <th scope="row">1</th>
                                    <td class="title-paper"><?php echo $v["title"]; ?></td>
                                    <td class="author-paper"><?php echo $v["author"]; ?></td>
                                    <td class="date-paper"><?php echo $v["date"]; ?></td>
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
                                            <button type="button" class="btn btn-default">Info</button>
                                            <button type="button" class="btn btn-default">Notes</button>
                                            <button type="button" class="btn btn-default">Tag</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-lg-12 text-left">
                                        <ul class="list-unstyled">
                                            <li><b>Title :</b> <span id="title-win"></span></li>
                                            <li><b>Author :</b> <span id="author-win"></span></li>
                                            <li><b>Date :</b> <span id="date-win"></span></li>
                                        </ul>
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
