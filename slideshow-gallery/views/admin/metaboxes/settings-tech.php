<!-- Technical Settings -->

<?php
	
if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
$jsoutput = $this -> get_option('jsoutput');	
	
?>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="jsoutput_perslideshow"><?php _e('JavaScript Output', 'slideshow-gallery'); ?></label></th>
			<td>
				<label class="slideshow-custom-radio">
					<input <?php echo (empty($jsoutput) || (!empty($jsoutput) && $jsoutput == "perslideshow")) ? 'checked="checked"' : ''; ?> type="radio" name="jsoutput" value="perslideshow" id="jsoutput_perslideshow" />
					<span><?php _e('Per Slideshow', 'slideshow-gallery'); ?></span>
				</label>
				<label class="slideshow-custom-radio">
					<input <?php echo (!empty($jsoutput) && $jsoutput == "footerglobal") ? 'checked="checked"' : ''; ?> type="radio" name="jsoutput" value="footerglobal" id="jsoutput_footerglobal" />
					<span><?php _e('All in Footer', 'slideshow-gallery'); ?></span>
				</label>
			</td>
		</tr>
	</tbody>
</table>