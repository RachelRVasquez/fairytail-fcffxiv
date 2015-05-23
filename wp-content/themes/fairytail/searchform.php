<?php
/**
 * The template for displaying the search form.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>