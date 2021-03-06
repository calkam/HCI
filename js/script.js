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

        $("#textNote").val("");
    });

    $('#generateBiblio').submit(function(){
        var checked = $(".mustGenerated:checked").length;

        console.log(checked);

        if (checked == 0) {
            $("body").append('<div class="text-center alert alert-danger alert-dismissible navbar-fixed-bottom" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>You have not select article to generate.</div>');
            return false;
        } else {
            return true;
        }

    });

    $("#comment-form").submit(function(){
        if($("#comment-text").val() == ""){
            $("#comment-formular").addClass("has-error");
            return false;
        }
        return true;
    });

    $("*").click(function(){
        $(".alert").remove();
    });

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    $("#putTag").click(function(){
        $.ajax({
            url      : "js/tag.php",
            cache    : false,
            dataType : "json",
            error    : function(request, error) { // Info Debuggage si erreur
                       alert("Erreur : responseText: "+request.responseText);
                     },
            success  : function(data) {

                var found = false;

                for(var k in data) {
                    if(k == $("#textTag").val()){
                        $("#tag_info_biblio").append(
                            '<li><i style="color:'+ data[k] +';" class="fa fa-tag"></i>' + $("#textTag").val() + '</li>'
                        );
                        found=true;
                        break;
                    }
                }

                if(!found){
                    $("#tag_info_biblio").append(
                        '<li><i style="color:'+ getRandomColor() +';" class="fa fa-tag"></i>' + $("#textTag").val() + '</li>'
                    );
                }

                $("#textTag").val("");

            }
         });
    });

    $("#allcheck").click( function(){
        if( $(this).is(':checked') ){
            $(".mustGenerated").prop("checked", true);
        }else{
            $(".mustGenerated").prop("checked", false);
        }
    });

    var infoPos   = $("#info_biblio").offset().top;
    var parentPos = $("#info_biblio").parent().offset().top;

    $(window).scroll(function () {
        var windowPos = $(window).scrollTop();

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
