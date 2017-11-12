<?php
/**
 * The sidebar template file.
 * @package SongWriter
 * @since SongWriter 1.0.0
*/
?>
<?php global $songwriter_options_db; ?>
<?php if ($songwriter_options_db['songwriter_display_sidebar'] != 'Hide') { ?>
<aside id="sidebar">
<?php if ( dynamic_sidebar( 'sidebar-1' ) ) : else : ?>
<?php endif; ?>
</aside> <!-- end of sidebar -->
<?php } ?>