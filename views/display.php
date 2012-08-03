  <!--[if lt IE 9]><script type="text/javascript" src="<?php echo $js_path;?>excanvas.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $js_path;?>jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo $js_path;?>jquery.tagcanvas.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#tag_canvas').tagcanvas({
        interval: 10,
        textFont: 'Segoe UI, Ubuntu, Arial Black,sans-serif',
        textHeight: 14,
        decel: 0.95,
        depth: 0.09,
        frontSelect: true,
        shadow: '<?php echo $shadow;?>',
        textColour: '<?php echo $text_color; ?>',
        outlineColour: '<?php echo $outline_color; ?>',
        outlineThickness: 1,
        reverse: true,
        depth: '20',
        maxSpeed: '<?php echo $speed ; ?>',
        shape: '<?php echo $shape ; ?>'
    },'smoketags');
});
</script>

<div class="widget smoketags">
      <canvas id="tag_canvas" width="<?php echo $width ?>" height="<?php echo $height ?>" >
          <p>
              You need Adobe Flash to view this tag cloud. You can get it <a href="http://get.adobe.com/flashplayer/" title="Link to Flash Player">from here</a>.
          </p>
      </canvas>

    <div id="smoketags">
        <?php echo $cloud_tags ; ?>
    </div>
</div>
