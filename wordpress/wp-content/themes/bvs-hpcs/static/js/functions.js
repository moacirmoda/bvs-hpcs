jQuery = $;
jQuery(document).ready(function($){
    $("#searchForm").addClass('form');
    $("#searchForm input[type=text]").addClass('form-control');
    $("#searchForm input[type=submit]").addClass('form-control');

    $("#s").prop('placeholder', "Digite sua pesquisa e aperte ENTER");
});
