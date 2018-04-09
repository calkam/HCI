$( document ).ready(function() {

    $(".paper").click(function(){
        $("#info_biblio").css('visibility', 'visible');
        $("#info_biblio").addClass("col-lg-3");
        $("#table-biblio").removeClass("col-lg-12");
        $("#table-biblio").addClass("col-lg-9");

        var title = $(this).find(".title-paper").text();
        var author = $(this).find(".author-paper").text();
        var date = $(this).find(".date-paper").text();
        var journal = $(this).find(".journal-paper").text();
        var volume = $(this).find(".volume-paper").text();
        var number = $(this).find(".number-paper").text();
        var pages = $(this).find(".pages-paper").text();
        var publisher = $(this).find(".publisher-paper").text();

        $("#title-win").html(title);
        $("#author-win").html(author);
        $("#date-win").html(date);
        $("#journal-win").html(journal);
        $("#volume-win").html(volume);
        $("#number-win").html(number);
        $("#pages-win").html(pages);
        $("#publisher-win").html(publisher);

    });

    $("#info_biblio_btn_info").click(function(){
        $("#info_info_biblio").show();
        $("#info_note_biblio").hide();
        $("#info_tag_biblio").hide();
    });

    $("#info_biblio_btn_note").click(function(){
        $("#info_info_biblio").hide();
        $("#info_note_biblio").show();
        $("#info_tag_biblio").hide();
    });

    $("#info_biblio_btn_tags").click(function(){
        $("#info_info_biblio").hide();
        $("#info_note_biblio").hide();
        $("#info_tag_biblio").show();
    });

    $("#putNote").click(function(){
        $("#note_info_biblio").append(
            '<div class="row"><div class="col-lg-12"><div class="panel panel-default"><div class="panel-body">' + $("#textNote").val() + '</div></div></div></div>'
        );
    });

    var infoPos   = $("#info_biblio").offset().top;
    var parentPos = $("#info_biblio").parent().offset().top;

    $(window).scroll(function () {
        var windowPos = $(window).scrollTop();

        console.log(windowPos);

        if(windowPos > infoPos){
            $("#info_biblio").css({
                top: windowPos - parentPos,
            });
        }

        if(windowPos < infoPos){
            $("#info_biblio").css({
                top: infoPos - parentPos,
            });
        }
    })

});
