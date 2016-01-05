<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Click outside to close menu - source: stackoverflow  -->
<script>
jQuery('body').bind('click', function(e) {
    if(jQuery(e.target).closest('.navbar').length == 0) {
        // click happened outside of .navbar, so hide
        var opened = jQuery('.navbar-collapse').hasClass('collapse in');
        if ( opened === true ) {
            jQuery('.navbar-collapse').collapse('hide');
        }
    }
});
</script>
