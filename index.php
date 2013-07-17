<?php include_once("php/header.php") ?>
<script type="text/javascript">
    $(document).ready(function() {
    // Tooltip only Text
    $('.masterTooltip').hover(function(){
            // Hover over code
            var title = $(this).attr('title');
            $(this).data('tipText', title).removeAttr('title');
            $('<p class="tooltip noisy"></p>')
            .text(title)
            .appendTo('body')
            .fadeIn('fast');
    }, function() {
            // Hover out code
            $(this).attr('title', $(this).data('tipText'));
            $('.tooltip').remove();
    }).mousemove(function(e) {
            var mousex = e.pageX + 5; //Get X coordinates
            var mousey = e.pageY + 5; //Get Y coordinates
            $('.tooltip')
            .css({ top: mousey, left: mousex })
    });
    });
</script>
<div id="masterdiv">
    <div class="leftTab poptab" style="top:200px;">
        <div class="tabText unselectable">
            Home
        </div>
    </div>
    <div class="leftTab tab" style="top:240px;">
        <div class="tabText unselectable">
            Tix
        </div>
    </div>
    <div class="leftTab tab" style="top:280px;">
        <div class="tabText unselectable">
            Crew
        </div>
    </div>
    <div class="leftTab tab" style="top:320px;">
        <div class="tabText unselectable">
            Contact
        </div>
    </div>

    <div id="content" class="noisy">
        <center>
        <img src="img/header.png"/><br>
    	</center>
        <div class="content" id="<?php echo $id ?>"><?php print file_get_contents($url.'php/load.php?id='.$id) ?></div>
    </div>
    <div id="gutterL">
        <img src="img/cornerL.gif" class="top"/>
    </div>
    <div id="gutterR">
        <img src="img/cornerR.gif" class="top"/>
    </div>
    <div id="social" class="noisy">
        <div id="socialcenter" class="noisy">
            <center>
            <a href="#" title="tumblr" class="masterTooltip"><img src="img/tmblr.png" alt="TMBLR"/></a>
            <a href="#" title="twitter" class="masterTooltip"><img src="img/twit.png"/></a>
            <a href="#" title="facebook" class="masterTooltip"><img src="img/facebook.png"/></a>
            <a href="#" title="email" class="masterTooltip"><img src="img/mail.png"/></a>
            <center>
        </div>
    </div>
</div>
<?php include_once("php/footer.php") ?>