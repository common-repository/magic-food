<?php
$oumsite ="http://www.oleksandrustymenko.net.ua";
$ouhelp = 'You have a short time to remove each item of food. You must remove each item in order, first all tomatoes, then all bananas, then onions, and finally peppers.';
$ou_imloaderfile = plugin_dir_url( __FILE__ );
$oumfloaderimage2 = $ou_imloaderfile.'images/we.png';
$oumfloaderimage3 = $ou_imloaderfile.'images/start.png';
$oumfloaderimage4 = $ou_imloaderfile.'images/back.png';
$oumfloaderimage6 = $ou_imloaderfile.'images/site.png';
$oumfloadergoogle = $ou_imloaderfile.'images/google.png';
?>
<style>
#mfwindow
{
    width:580px;
    overflow: hidden;
    height:auto;
    background: #005c99;
    user-select: none;
    font-family: 'Acme', sans-serif;
}

.mfleft
{
    float: left;
    width: 400px;
    height: auto;
}

.mfleft_game
{
    width: 400px;
    height: 420px;
    overflow:hidden;
}


.mfleft_help
{
    width: 400px;
    height: 450px;
    overflow:hidden;
}

.mfleft_about
{
    width: 400px;
    height: 450px;
    overflow:hidden;
}


.mfleft_next_game
{
    width: 400px;
    height: 420px;
    overflow:hidden;
}

.mfleft_end_game
{
    width: 400px;
    height: 420px;
    overflow:hidden;
}

.mfleft_info
{
    width: 400px;
    height: auto;
    overflow:hidden;
    text-align:left;
	margin:0px 0px 10px 0px;
}

.mfright
{
    float:left;
    width: 180px;
    height: auto;
}

.mfright_level
{
    width: 180px;
    height: 50px;
    color: #999999;
    font-size: 24px;
    overflow:hidden;
}

.mfright_points
{
    width: 180px;
    height: 50px;
    color: #999999;
    font-size: 24px;
    overflow:hidden;
}

.mfright_second
{
    width: 180px;
    height: auto;
    color: #999999;
    font-size: 24px;
}

.mfright_second1
{
    width: 180px;
    height: auto;
    color: #999999;
    font-size: 24px;
    overflow: hidden;
}



.mfright_second3
{
    width: 180px;
    height: 50px;
    color: #999999;
    font-size: 24px;
}

.mfright_button
{
    width: 180px;
    height: 50px;
    color: #999999;
    font-size: 24px;
}

input[type=submit]
{
    width: 100%;
    background-color: #004d66;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
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

<div id="mfwindow">
    <div class="mfleft">
        <div style="display:none;" id="mf_help" class="mfleft_help">
            <div style="margin: 30px auto 0px auto; width: 390px;color: #999999; font-size:50px; text-align:center;">
                <b>HELP</b>
            </div>
            <div style="margin: 15px auto 0px auto; width: 320px;color: #999999; font-size:16px; text-align:justify;">
                You have a short time to remove each item of food. You must remove each item in order, first all tomatoes, then all bananas, then onions, and finally peppers.
                
                <br />
                <br />
                Fruit created Fast Icon (www.fasticon.com)

				<br />
				<br />
				Site: www.oleksandrustymenko.in.ua
				<br />
				Skype: oleksandrustymenko
            </div>
        </div>
        
        <div id="start_game" class="mfleft_game"></div>
        <div id="next_level" class="left_next_game" style="display:none;">
            <div style="margin: 138px auto 0px auto; width: 392px; color: #999999; font-size:50px; text-align:center;">
                <b>POINTS: </b><span id="oumfscore4">0</span>
            </div>
            <div style="margin: 15px auto 0px auto; width: 100px; color: #999999; font-size:50px; text-align:center;">
                <input type="Submit" onclick="next_game_cont(); return false;" value="NEXT">
            </div>
        </div>
        <div id="gameend_level" class="mfleft_end_game" style="display:none;">
            <div style="margin: 158px auto 0px auto; width: 390px; color: #999999; font-size:50px; text-align:center;">
                <b>TIME IS UP</b>
            </div>
        </div>
        <div id="start_info" class="mfleft_info"></div>
    </div>
    <div class="mfright">
        <div class="mfright_level">
            <div style="margin: 10px auto; width: 100%; background-color: #004d66; width: 160px; border: none; border-radius: 4px; font-size: 20px;">
                <div style="padding: 0px 20px;">
                    <b>Level: </b><span id="oumflevel2">1</span>
                </div>
            </div>
        </div>
        <div class="mfright_points">
            <div style="margin: 10px auto; width: 100%; background-color: #004d66; width: 160px; border: none; border-radius: 4px; font-size: 20px;">
                <div style="padding: 0px 20px;">
                    <b>Points: </b><span id="oumfscore3">0</span>
                </div>
            </div>
        </div>
        <div class="mfright_second">
            <div class="mfright_second1">
                <div style="position:relative;margin: 50px auto 10px auto; width: 80px; height:80px; border-radius: 10px; text-align:center; background:#004d66;">
                    <div id="e1" style="padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/a1.png" border="none" style="width:50px; height:50px;">
                    </div>
                    <div id="e2" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/a2.png" border="none" style="width:50px; height:50px;">
                    </div>
                    <div id="e3" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/a3.png" border="none" style="width:50px; height:50px;">
                    </div>
                    <div id="e4" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/a4.png" border="none" style="width:50px; height:50px;">
                    </div>
                </div>
            </div>
            <div class="mfright_second3">
                <div style="padding: 0px 10px;">
                    <input type="Submit" onclick="help(); return false;" value="HELP">
                </div>
            </div>
        </div>
        <div class="mfright_button">
            <div style="padding: 0px 10px;">
                <span id="u1"><input type="Submit" onclick="start(); return false;" value="START"></span>
                <span id="u2" style="display:none;"><input type="Submit" onclick="stop_game(); return false;" value="STOP"></span>
            </div>
        </div>
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
	stop_game();
	jQuery("#mf_about").hide();
    jQuery("#start_game").hide();
    jQuery("#start_info").hide();
    jQuery("#mf_help").show();
}
function about()
{
    jQuery("#start_game").hide();
    jQuery("#start_info").hide();
    jQuery("#mf_help").hide();
    //jQuery("#mf_about").show();
    stop_game();
}
function stop_game()
{
    clearInterval(oumagicfoodtimer1);
    jQuery("#start_game").css('pointer-events','none');
    jQuery("#gameend_level").hide();
    jQuery("#next_level").hide();
    jQuery("#start_game").empty();
    jQuery("#start_game").show();
    jQuery("#start_info").show();
    jQuery("#oumflevel").val('1');
    jQuery("#oumfscore").val('0');
    jQuery("#oumfscore3").html('0');
    jQuery("#oumfscore4").html('0');
    jQuery("#oumflevel2").html('1');
    var oumfx_a1 ='';
    var oumfx_a2 ='';
    var oumfx_a3 ='';
    var oumfx_a4 ='';
    var oui ='';
    var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
    var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
    var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
    var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';
    for(oui=1; oui<111; oui++)
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
        var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:25px; height:25px;">';

        jQuery("#start_game").append('<div style="float:left; width:39px; height:36px;"><div style="overflow:hidden; margin:3px auto; width:30px;">'+imgdetect2+'</div></div>');

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
    jQuery("#start_info").show();
    var oumfx_a1 ='';
    var oumfx_a2 ='';
    var oumfx_a3 ='';
    var oumfx_a4 ='';
    var oui ='';

    var imga1 = '<?php echo $ou_imloaderfile;?>images/a1.png';
    var imga2 = '<?php echo $ou_imloaderfile;?>images/a2.png';
    var imga3 = '<?php echo $ou_imloaderfile;?>images/a3.png';
    var imga4 = '<?php echo $ou_imloaderfile;?>images/a4.png';
    for(oui=1; oui<111; oui++)
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
        var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:25px; height:25px;">';

        jQuery("#start_game").append('<div style="float:left; width:39px; height:36px;"><div style="overflow:hidden; margin:3px auto; width:30px;">'+imgdetect2+'</div></div>');
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
        jQuery("#start_info").show();
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
                                jQuery("#start_info").hide();
                                jQuery("#next_level").show();
                            }
                        }
                        jQuery('#m'+ss).hide();
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
for(oui=1; oui<111; oui++)
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
    var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:25px; height:25px;">';

    jQuery("#start_game").append('<div style="float:left; width:39px; height:36px; "><div style="overflow:hidden; margin:0 auto; width:30px;">'+imgdetect2+'</div></div>');

}
jQuery("#start_info").append('<span style="padding:5px 0px 0px 20px; color:#ffffff; font-size:14px;">Strawberry : <span id="oumfct1">'+oumfx_a1+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;">Banana : <span id="oumfct2">'+oumfx_a2+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;">Grapes : <span id="oumfct3">'+oumfx_a3+'</span></span><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;">Watermelon : <span id="oumfct4">'+oumfx_a4+'</span></span><div style="padding:10px 0px 0px 0px; text-align:center;"><span style="padding:5px 0px 0px 10px; color:#ffffff; font-size:14px;">Time : <span id="oumfct5">90</span> seconds</span></div>');

});
    </script>