<script>
//Initial load of page
$(document).ready(sizeContent);

//Every resize of window
$(window).resize(sizeContent);

//Dynamically assign height
function sizeContent() {
    var newHeight = $("html").height() - $(".elgg-page-header").height() - $(".elgg-page-footer").height() - $(".elgg-page-topbar").height() + "px";
    $(".elgg-page-body").css("min-height", newHeight);
    $(".elgg-layout-one-sidebar").css("min-height", newHeight);
}
        
</script>




        
