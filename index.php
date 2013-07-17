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
    <a href="home">
        <div id = "home" class="leftTab tab noisy" style="top:200px;" onclick="tabClick(event)">
            <div class="tabText unselectable">
                Home
            </div>
        </div>
    </a>
    <a href="tix">
        <div id = "tix" class="leftTab tab noisy" style="top:235px;" onclick="tabClick(event)">
            <div class="tabText unselectable">
                Tix
            </div>
        </div>
    </a>
    <a href="crew">
        <div id = "crew" class="leftTab tab noisy" style="top:270px;" onclick="tabClick(event)">
            <div class="tabText unselectable">
                Crew
            </div>
        </div>
    </a>
    <a href="contact">
        <div id = "contact" class="leftTab tab noisy" style="top:305px;" onclick="tabClick(event)">
            <div class="tabText unselectable">
                Contact
            </div>
        </div>
    </a>
    <script type="text/javascript">
            $(".leftTab").each( function() {
                    if(this.id == '<?php echo $id; ?>') {
                            $(this).removeClass("tab");
                            $(this).removeClass("noisy");
                            $(this).addClass("poptab");
                    };
            });
    </script>
    <a href="http://www.boston.com/yourcampus/news/emerson/2012/12/ambition_passion_drives_emersons_non-profit_student_theater_group.html" onclick="javascript:void window.open('http://www.boston.com/yourcampus/news/emerson/2012/12/ambition_passion_drives_emersons_non-profit_student_theater_group.html','1374036248335','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
        <div class="rightTab noisy" style="top:200px;" >
            <div class="tabText unselectable">
                In the News
            </div>
        </div>
    </a>

    <div id="contenttop" class="noisy">
        <center>
        <img src="img/header.png"/><br>
    	</center>

        <div id="contentleft" class="content" id="<?php echo $id ?>"><?php print file_get_contents($url.'php/load.php?id='.$id) ?></div>
        <div id="contentright">
            <center><img src="img/ourseason.png"/><br>
            <?php
             $input = explode(",",file_get_contents('txt/homeimg.txt'));
             for ($i = 0;$i<count($input);$i++) {
                echo "<img src='" . $input[$i] . "' class='.contentrightimage'/><br>";
             }
             ?>
        </div>
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