 jQuery(document).ready(function($) {
   $(".applyButton").click(function(){
    $("#id").val($(this).attr('data-id'));
    $("#title").val($(this).attr('data-title'));
    $("#country").val($(this).attr('data-country'));
   });
});
