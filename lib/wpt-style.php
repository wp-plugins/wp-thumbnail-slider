<?php 
function wptEditableCSS(){
    ?>
<style type="text/css">
 #wptSlider {
	 border-radius: <?php $wpt_border_radius = get_option('wpt_border_radius'); if(!empty($wpt_border_radius)) {echo $wpt_border_radius;} else {echo "0";}?>px;
 	 border: <?php $wpt_border = get_option('wpt_border'); if(!empty($wpt_border)) {echo $wpt_border;} else {echo "5";}?>px solid <?php $wpt_bg_color = get_option('wpt_bg_color'); if(!empty($wpt_bg_color)) {echo $wpt_bg_color;} else {echo "#569625";}?>;
 }
 .lSSlideOuter .lSPager.lSGallery li{
	 border:1px solid <?php $wpt_thumb_border = get_option('wpt_thumb_border'); if(!empty($wpt_thumb_border)) {echo $wpt_thumb_border;} else {echo "#0a0a0a";}?>;
}
.lSSlideOuter .lSPager.lSGallery li.active, .lSSlideOuter .lSPager.lSGallery li:hover {
  border: 1px solid <?php $wpt_thumb_hover = get_option('wpt_thumb_hover'); if(!empty($wpt_thumb_hover)) {echo $wpt_thumb_hover;} else {echo "#ae66b0";}?>;
}
.wptColor{display:none !important;}
</style>
<?php
}
add_action('wp_footer','wptEditableCSS', 100);
?>