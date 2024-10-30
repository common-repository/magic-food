<?php
$ou_imloaderfile = plugin_dir_url( __FILE__ );
?>
        <style>
        img 
        {
            width: 100%;
            height: auto;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        input[type=submit]
        {
            background-color: #004d66;
            color: #ffffff;
            padding: 3%;
            margin: 2px 0;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        input[type=submit]:hover
        {
            background-color: #002633;
        }
        </style>
    
        <input type="hidden" autocomplete="off" id="oumftom" value="0">
        <input type="hidden" autocomplete="off" id="oumfban" value="0">
        <input type="hidden" autocomplete="off" id="oumfhoh" value="0">
        <input type="hidden" autocomplete="off" id="oumfper" value="0">
        <input type="hidden" autocomplete="off" id="oumflevel" value="1">
        <input type="hidden" autocomplete="off" id="oumfscore" value="0">
        <audio id="win1" src="music1.mp3" preload="auto"></audio>
        <div id="window" style="width:100%; height:100%; overflow:hidden; background: #005c99; user-select: none;">
            <div style="display:none; width:100%;" id="mf_help">
                <div style="padding: 10px 10px 15px 10px; color: #999999; font-size:30px; text-align:center;">
                    <b>HELP</b>
                </div>
                <div style="width:100%; color: #999999; font-size:20px; text-align:justify;">
                    <div style="padding: 0px 10px;">
                        You have a short time to remove each item of food. You must remove each item in order, first all strawberry, then all bananas, all watermelons, and all grapes.
                    </div>
                </div>
            </div>
            
            <div style="display:none; width:100%;" id="mf_about">
                <div style="padding: 10px 10px 15px 10px; color: #999999; font-size:30px; text-align:center;">
                    <b>ABOUT</b>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:left;">
                    <div style="padding: 0px 10px;">
                        Name: MAGIC FOOD
                    </div>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:left;">
                    <div style="padding: 0px 10px;">
                        Designed by Oleksandr Ustymenko
                    </div>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:left;">
                    <div style="padding: 0px 10px;">
                        Site: www.oleksandrustymenko.in.ua
                    </div>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:left;">
                    <div style="padding: 0px 10px;">
                        Skype: oleksandrustymenko
                    </div>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:left;">
                    <div style="padding: 0px 10px;">
                        Images: Fast Icon (www.fasticon.com)
                    </div>
                </div>
            </div>
            <div id="next_level" class="left_next_game" style="display:none;">
                <div style="padding: 10px 10px 15px 10px; color: #999999; font-size:30px; text-align:center;">
                    <b>POINTS: </b><span id="oumfscore4">0</span>
                </div>
                <div style="width:100%; color: #999999; font-size:16px; text-align:center;">
                    <div style="padding: 15px 10px;">
                        <input type="Submit" onclick="next_game_cont(); return false;" value="NEXT">
                    </div>
                </div>
            </div>
            
            <div id="gameend_level"  style="display:none; ">
                <div style="padding: 10px 10px 15px 10px; color: #999999; font-size:30px; text-align:center;">
                    <b>TIME IS UP</b>
                </div>
            </div>
            
            <div id="start_game" style="width:100%; height:80%; overflow: hidden;"></div>
            
            <div id="start_info" style="padding:10px 0px 0px 0px; width:100%; height:10%; overflow: hidden; text-align:center;"></div>
            
            <div id="start_buttons" style=" width:100%; text-align:center; overflow: hidden;">
                <input type="Submit" onclick="about(); return false;" value="ABOUT"> 
                <input type="Submit" onclick="help(); return false;" value="HELP">
                <span id="u1"><input type="Submit" onclick="start(); return false;" value="START"></span>
                <span id="u2" style="display:none;"><input type="Submit" onclick="stop_game(); return false;" value="STOP"></span>
            
            </div>

            
        </div>
        
        <script>
        var oumagicfoodtimer1;
        var oumgtotalSeconds = '';
        var oumagicfoodtimer1;
        function help()
        {
            jQuery("#mf_about").hide();
            jQuery("#start_game").hide();
            jQuery("#start_info").hide();
            jQuery("#mf_help").show();
            stop_game2();
        }

        function about()
        {
            jQuery("#start_game").hide();
            jQuery("#start_info").hide();
            jQuery("#mf_help").hide();
            jQuery("#mf_about").show();
            stop_game2();
        }
           
        function stop_game2()
        {
            clearInterval(oumagicfoodtimer1);
            jQuery("#start_game").css('pointer-events','none');
            jQuery("#gameend_level").hide();
            jQuery("#next_level").hide();
            jQuery("#start_game").empty();
            jQuery("#start_game").hide();
            jQuery("#oumflevel").val('1');
            jQuery("#oumfscore").val('0');
            jQuery("#oumfscore3").html('0');
            jQuery("#oumfscore4").html('0');
            jQuery("#oumflevel2").html('1');

            jQuery("#e4").hide();
            jQuery("#e3").hide();
            jQuery("#e2").hide();
            jQuery("#e1").show();


            var oumfx_a1 ='';
            var oumfx_a2 ='';
            var oumfx_a3 ='';
            var oumfx_a4 ='';
            var oui ='';

            var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
            var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
            var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
            var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';

            for(oui=1; oui<81; oui++)
            {
                var oumfarray = ["a1", "a2", "a3", "a4"];
                var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];

                if(oumfkey == 'a1')
                {
                    oumfx_a1++;
                    var aumft1 = oumfx_a1;
                    jQuery("#oumftom").val(aumft1);
                    jQuery("#oumfct1").html(aumft1);
                }
                if(oumfkey == 'a2')
                {
                    oumfx_a2++;
                    var aumft2 = oumfx_a2;
                    jQuery("#oumfban").val(aumft2);
                    jQuery("#oumfct2").html(aumft2);
                }
                if(oumfkey == 'a3')
                {
                    oumfx_a3++;
                    var aumft3 = oumfx_a3;
                    jQuery("#oumfhoh").val(aumft3);
                    jQuery("#oumfct3").html(aumft3);
                }
                if(oumfkey == 'a4')
                {
                    oumfx_a4++;
                    var aumft4 = oumfx_a4;
                    jQuery("#oumfper").val(aumft4);
                    jQuery("#oumfct4").html(aumft4);
                }

                var s = "'"+oumfkey+"'";
                var ss = "'m"+oui+"'";
                var ouii = 'm'+oui;
                var imgdetect = '<?php echo $ou_imloaderfile;?>images/'+oumfkey+'.png';
                var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:100%; height:auto;">';

                var imgdetectz = '<?php echo $ou_imloaderfile;?>images/az.png';
                var imgdetect3 = '<img id="mz'+ouii+'"src="'+imgdetectz+'" border="none" style="display:none; width:100%; height:auto;">';

                jQuery("#start_game").append('<div style="float:left; width:10%; height:10%;"><div style="overflow:hidden; width:100%; height:100%; width:100%;"><div style="padding:10%;">'+imgdetect2+''+imgdetect3+'</div></div></div>');

            }
            jQuery("#oumfct1").html(oumfx_a1);
            jQuery("#oumfct2").html(oumfx_a2);
            jQuery("#oumfct3").html(oumfx_a3);
            jQuery("#oumfct4").html(oumfx_a4);
            jQuery("#oumfct5").html('90');
            jQuery("#u2").hide();
            jQuery("#u1").show();
        }        
            
        function stop_game()
        {
            clearInterval(oumagicfoodtimer1);
            jQuery("#start_game").css('pointer-events','none');
            jQuery("#gameend_level").hide();
            jQuery("#next_level").hide();
            jQuery("#start_game").empty();
            jQuery("#start_game").show();
            jQuery("#oumflevel").val('1');
            jQuery("#oumfscore").val('0');
            jQuery("#oumfscore3").html('0');
            jQuery("#oumfscore4").html('0');
            jQuery("#oumflevel2").html('1');

            jQuery("#e4").hide();
            jQuery("#e3").hide();
            jQuery("#e2").hide();
            jQuery("#e1").show();


            var oumfx_a1 ='';
            var oumfx_a2 ='';
            var oumfx_a3 ='';
            var oumfx_a4 ='';
            var oui ='';

            var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
            var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
            var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
            var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';

            for(oui=1; oui<81; oui++)
            {
                var oumfarray = ["a1", "a2", "a3", "a4"];
                var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];

                if(oumfkey == 'a1')
                {
                    oumfx_a1++;
                    var aumft1 = oumfx_a1;
                    jQuery("#oumftom").val(aumft1);
                    jQuery("#oumfct1").html(aumft1);
                }
                if(oumfkey == 'a2')
                {
                    oumfx_a2++;
                    var aumft2 = oumfx_a2;
                    jQuery("#oumfban").val(aumft2);
                    jQuery("#oumfct2").html(aumft2);
                }
                if(oumfkey == 'a3')
                {
                    oumfx_a3++;
                    var aumft3 = oumfx_a3;
                    jQuery("#oumfhoh").val(aumft3);
                    jQuery("#oumfct3").html(aumft3);
                }
                if(oumfkey == 'a4')
                {
                    oumfx_a4++;
                    var aumft4 = oumfx_a4;
                    jQuery("#oumfper").val(aumft4);
                    jQuery("#oumfct4").html(aumft4);
                }

                var s = "'"+oumfkey+"'";
                var ss = "'m"+oui+"'";
                var ouii = 'm'+oui;
                var imgdetect = '<?php echo $ou_imloaderfile;?>images/'+oumfkey+'.png';
                var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:100%; height:auto;">';

                var imgdetectz = '<?php echo $ou_imloaderfile;?>images/az.png';
                var imgdetect3 = '<img id="mz'+ouii+'"src="'+imgdetectz+'" border="none" style="display:none; width:100%; height:auto;">';

                jQuery("#start_game").append('<div style="float:left; width:10%; height:10%;"><div style="overflow:hidden; width:100%; height:100%; width:100%;"><div style="padding:10%;">'+imgdetect2+''+imgdetect3+'</div></div></div>');

            }
            jQuery("#oumfct1").html(oumfx_a1);
            jQuery("#oumfct2").html(oumfx_a2);
            jQuery("#oumfct3").html(oumfx_a3);
            jQuery("#oumfct4").html(oumfx_a4);
            jQuery("#oumfct5").html('90');
            jQuery("#u2").hide();
            jQuery("#u1").show();
        }    
            
        function next_game_cont()
        {
            jQuery("#next_level").hide();
            jQuery("#start_game").empty();
            jQuery("#start_game").show();
            var oumfx_a1 ='';
            var oumfx_a2 ='';
            var oumfx_a3 ='';
            var oumfx_a4 ='';
            var oui ='';

            var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
            var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
            var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
            var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';

            for(oui=1; oui<81; oui++)
            {
                var oumfarray = ["a1", "a2", "a3", "a4"];
                var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];

                if(oumfkey == 'a1')
                {
                    oumfx_a1++;
                    var aumft1 = oumfx_a1;
                    jQuery("#oumftom").val(aumft1);
                    jQuery("#oumfct1").html(aumft1);
                }
                if(oumfkey == 'a2')
                {
                    oumfx_a2++;
                    var aumft2 = oumfx_a2;
                    jQuery("#oumfban").val(aumft2);
                    jQuery("#oumfct2").html(aumft2);
                }
                if(oumfkey == 'a3')
                {
                    oumfx_a3++;
                    var aumft3 = oumfx_a3;
                    jQuery("#oumfhoh").val(aumft3);
                    jQuery("#oumfct3").html(aumft3);
                }
                if(oumfkey == 'a4')
                {
                    oumfx_a4++;
                    var aumft4 = oumfx_a4;
                    jQuery("#oumfper").val(aumft4);
                    jQuery("#oumfct4").html(aumft4);
                }

                var s = "'"+oumfkey+"'";
                var ss = "'m"+oui+"'";
                var ouii = 'm'+oui;
                var imgdetect = '<?php echo $ou_imloaderfile;?>images/'+oumfkey+'.png';
                var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:100%; height:auto;">';

                var imgdetectz = '<?php echo $ou_imloaderfile;?>images/az.png';
                var imgdetect3 = '<img id="mz'+ouii+'"src="'+imgdetectz+'" border="none" style="display:none; width:100%; height:auto;">';

                jQuery("#start_game").append('<div style="float:left; width:10%; height:10%; "><div style="overflow:hidden; width:100%; height:100%; width:100%;"><div style="padding:10%;">'+imgdetect2+''+imgdetect3+'</div></div></div>');

            }
                jQuery("#oumfct1").html(oumfx_a1);
                jQuery("#oumfct2").html(oumfx_a2);
                jQuery("#oumfct3").html(oumfx_a3);
                jQuery("#oumfct4").html(oumfx_a4);

            start();
        }    
            
        function start()
        {
            jQuery("#mf_help").hide();
            jQuery("#mf_about").hide();

            jQuery("#start_game").show();
            jQuery("#start_info").show();

            jQuery("#u1").hide();
            jQuery("#u2").show();
            var dlevel = jQuery("#oumflevel").val();
            if(dlevel == 1)
            {
                oumgtotalSeconds = 90;
            }
            if(dlevel == 2)
            {
                oumgtotalSeconds = 85;
            }
            if(dlevel == 3)
            {
                oumgtotalSeconds = 80;
            }
            if(dlevel == 4)
            {
                oumgtotalSeconds = 75;
            }
            if(dlevel == 5)
            {
                oumgtotalSeconds = 70;
            }
            if(dlevel == 6)
            {
                oumgtotalSeconds = 65;
            }
            if(dlevel == 7)
            {
                oumgtotalSeconds = 60;
            }
            if(dlevel == 8)
            {
                oumgtotalSeconds = 55;
            }
            if(dlevel == 9)
            {
                oumgtotalSeconds = 45;
            }
            if(dlevel == 10)
            {
                oumgtotalSeconds = 40;
            }
            if(dlevel == 11)
            {
                oumgtotalSeconds = 35;
            }
            if(dlevel == 12)
            {
                oumgtotalSeconds = 30;
            }
            if(dlevel == 13)
            {
                oumgtotalSeconds = 25;
            }
            if(dlevel == 14)
            {
                oumgtotalSeconds = 20;
            }
            if(dlevel >= 15)
            {
                oumgtotalSeconds = 15;
            }
            jQuery("#start_game").css('pointer-events','all');
            oumagicfoodtimer1 = setInterval(oumftimer, 1000);
        }    
            
        function oumftimer()
        {
            var level = jQuery("#oumflevel").val();
            jQuery("#oumflevel2").html(level);

            var oumfnextlevel3 = parseInt(level);
            var oumfnextlevel2 = oumfnextlevel3+1;
            jQuery("#oumfnextlevel").html(oumfnextlevel2);

            var point = jQuery("#oumfscore").val();
            jQuery("#oumfscore2").html(point);
            jQuery("#oumfscore3").html(point);
            jQuery("#oumfscore4").html(point);
            oumgtotalSeconds--;

            jQuery("#oumfct5").html(oumgtotalSeconds);

            if(oumgtotalSeconds == 0)
            {
                jQuery("#start_game").hide();
                jQuery("#gameend_level").show();
                clearInterval(oumagicfoodtimer1);

                jQuery("#e2").hide();
                jQuery("#e3").hide();
                jQuery("#e4").hide();
                jQuery("#e1").show();
            }
        }   
            
        function main(s,ss)
        {
            var detect = s;
            var detect2 = jQuery("#oumftom").val();

            if(detect2 >=1)
            {
                if(detect == 'a1')
                {
                    var total = jQuery("#oumftom").val();
                    var total1 = parseInt(total);
                    var all = total1 - 1;
                    var score = jQuery("#oumfscore").val();
                    var score1 = parseInt(score);
                    var score2 = score1+1;

                    if(all >=1)
                    {
                        jQuery("#oumftom").val(all);
                        jQuery("#oumfct1").html(all);
                        jQuery("#oumfscore").val(score2);
                        jQuery("#oumfscore3").html(score2);
                    }
                    else
                    {
                        jQuery("#oumftom").val(all);
                        jQuery("#oumfct1").html("0");
                        jQuery("#oumfscore").val(score2);
                        jQuery("#oumfscore3").html(score2);
                        jQuery("#e1").hide();
                        jQuery("#e2").show();
                    }
                    jQuery('#m'+ss).hide();
                    jQuery('#mz'+ss).show();
                }
            }
            else
            if(detect2 ==0)
            {
                var detect3 = jQuery("#oumfban").val();
                if(detect3 >=1)
                {
                    if(detect == 'a2')
                    {
                        var total = jQuery("#oumfban").val();
                        var total1 = parseInt(total);
                        var all = total1 - 1;
                        var score = jQuery("#oumfscore").val();
                        var score1 = parseInt(score);
                        var score2 = score1+1;
                        if(all >=1)
                        {
                            jQuery("#oumfban").val(all);
                            jQuery("#oumfct2").html(all);
                            jQuery("#oumfscore").val(score2);
                            jQuery("#oumfscore3").html(score2);
                        }
                        else
                        {
                            jQuery("#oumfban").val(all);
                            jQuery("#oumfct2").html("0");
                            jQuery("#oumfscore").val(score2);
                            jQuery("#oumfscore3").html(score2);
                            jQuery("#e2").hide();
                            jQuery("#e3").show();
                        }
                        jQuery('#m'+ss).hide();
                        jQuery('#mz'+ss).show();
                    }
                }
                else
                if(detect3 ==0)
                {
                    var detect4 = jQuery("#oumfhoh").val();
                    if(detect4 >=1)
                    {
                        if(detect == 'a3')
                        {
                            var total = jQuery("#oumfhoh").val();
                            var total1 = parseInt(total);
                            var all = total1 - 1;
                            var score = jQuery("#oumfscore").val();
                            var score1 = parseInt(score);
                            var score2 = score1+1;
                            if(all >=1)
                            {
                                jQuery("#oumfhoh").val(all);
                                jQuery("#oumfct3").html(all);
                                jQuery("#oumfscore").val(score2);
                                jQuery("#oumfscore3").html(score2);
                            }
                            else
                            {
                                jQuery("#oumfhoh").val(all);
                                jQuery("#oumfct3").html("0");
                                jQuery("#oumfscore").val(score2);
                                jQuery("#oumfscore3").html(score2);
                                jQuery("#e3").hide();
                                jQuery("#e4").show();
                            }
                            jQuery('#m'+ss).hide();
                            jQuery('#mz'+ss).show();
                        }
                    }
                    else
                    if(detect4 ==0)
                    {
                        var detect5 = jQuery("#oumfper").val();
                        if(detect5 >=1)
                        {
                            if(detect == 'a4')
                            {
                                var total = jQuery("#oumfper").val();
                                var total1 = parseInt(total);
                                var all = total1 - 1;
                                var score = jQuery("#oumfscore").val();
                                var score1 = parseInt(score);
                                var score2 = score1+1;
                                if(all >=1)
                                {
                                    jQuery("#oumfper").val(all);
                                    jQuery("#oumfct4").html(all);
                                    jQuery("#oumfscore").val(score2);
                                    jQuery("#oumfscore3").html(score2);
                                }
                                else
                                {
                                    jQuery("#oumfper").val(all);
                                    jQuery("#oumfct4").html("0");
                                    if(all ==0)
                                    {
                                        var rlevel = jQuery("#oumflevel").val();
                                        var rlevel2 = parseInt(rlevel);
                                        var rlevel3 =rlevel2+1;
                                        jQuery("#oumflevel").val(rlevel3);
                                        clearInterval(oumagicfoodtimer1);
                                        jQuery("#oumfscore3").html(score2);
                                        jQuery("#oumfscore4").html(score2);
                                        jQuery("#e4").hide();
                                        jQuery("#e1").show();
                                        jQuery("#start_game").hide();
                                        jQuery("#next_level").show();
                                    }
                                }
                                jQuery('#m'+ss).hide();
                                jQuery('#mz'+ss).show();
                            }
                        }
                    }
                }

            }
        }    
            
        jQuery(document).ready(function(){
        jQuery("#start_game").css('pointer-events','none');
        var oumfx_a1 ='';
        var oumfx_a2 ='';
        var oumfx_a3 ='';
        var oumfx_a4 ='';
        var oui ='';

        var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
        var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
        var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
        var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';

        for(oui=1; oui<81; oui++)
        {
            var oumfarray = ["a1", "a2", "a3", "a4"];
            var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];

            if(oumfkey == 'a1')
            {
                oumfx_a1++;
                var aumft1 = oumfx_a1;
                jQuery("#oumftom").val(aumft1);
                jQuery("#oumfct1").html(aumft1);
            }
            if(oumfkey == 'a2')
            {
                oumfx_a2++;
                var aumft2 = oumfx_a2;
                jQuery("#oumfban").val(aumft2);
                jQuery("#oumfct2").html(aumft2);
            }
            if(oumfkey == 'a3')
            {
                oumfx_a3++;
                var aumft3 = oumfx_a3;
                jQuery("#oumfhoh").val(aumft3);
                jQuery("#oumfct3").html(aumft3);
            }
            if(oumfkey == 'a4')
            {
                oumfx_a4++;
                var aumft4 = oumfx_a4;
                jQuery("#oumfper").val(aumft4);
                jQuery("#oumfct4").html(aumft4);
            }

            var s = "'"+oumfkey+"'";
            var ss = "'m"+oui+"'";
            var ouii = 'm'+oui;
            var imgdetect = '<?php echo $ou_imloaderfile;?>images/'+oumfkey+'.png';
            var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:100%; height:auto;">';
            
            var imgdetectz = '<?php echo $ou_imloaderfile;?>images/az.png';
            var imgdetect3 = '<img id="mz'+ouii+'"src="'+imgdetectz+'" border="none" style="display:none; width:100%; height:auto;">';

            jQuery("#start_game").append('<div style="float:left; width:10%; height:10%; "><div style="overflow:hidden; width:100%; height:100%; width:100%;"><div style="padding:10%;">'+imgdetect2+''+imgdetect3+'</div></div></div>');

        }
        jQuery("#start_info").append('<span style="padding:5px 0px 0px 0px; color:#ffffff; font-size:14px;"><img src="'+imga1+'"style="width:19px; height:19px;"  border="none" > : <span id="oumfct1">'+oumfx_a1+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><img src="'+imga2+'"style="width:19px; height:19px;"  border="none" > : <span id="oumfct2">'+oumfx_a2+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><img src="'+imga3+'"style="width:19px; height:19px;"  border="none" > : <span id="oumfct3">'+oumfx_a3+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><img src="'+imga4+'"style="width:19px; height:19px;"  border="none" > : <span id="oumfct4">'+oumfx_a4+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><div><b>Time:</b> <span id="oumfct5">90</span> seconds</span> <span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><b>Level: </b><span id="oumflevel2">1</span></span> <span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;"><b>Points: </b><span id="oumfscore3">0</span></span></div>');

        });
        </script>