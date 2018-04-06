$( document ).ready(function() {

    $(".paper").click(function(){
        $("#info_biblio").css('visibility', 'visible');
        $("#info_biblio").addClass("col-lg-3");
        $("#table-biblio").removeClass("col-lg-12");
        $("#table-biblio").addClass("col-lg-9");

        var title = $(this).find(".title-paper").text();
        var author = $(this).find(".author-paper").text();
        var date = $(this).find(".date-paper").text();

        $("#title-win").html(title);
        $("#author-win").html(author);
        $("#date-win").html(date);

    });

});
