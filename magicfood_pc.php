<?php
$oumsite ="http://www.oleksandrustymenko.net.ua";
$ou_imloaderfile = plugin_dir_url( __FILE__ );

?>
<style>
#mfwindow
{
    width:580px;
    overflow: hidden;
    height:auto;
    background:  #ffdd99;
    user-select: none;
    font-family: 'Acme', sans-serif;
}

.mfleft_info
{
    width: 400px;
    height: auto;
    overflow:hidden;
    text-align: center;
	margin:0px 0px 10px 0px;
}

.mfleft
{
    float: left;
    width: 400px;
    height: auto;
}
    
.mfright
{
    float:left;
    width: 180px;
    height: auto;
}
    
.mfleft_game
{
    margin:15px 0px 5px 36px;
    width: 400px;
    min-height: 420px;
    overflow:hidden;
}
    
.mfright_level
{
    margin: 20px auto 0px auto;
    width: 160px;
    height: 50px;
    color: #000000;
    font-size: 24px;
    overflow:hidden;
}
    
.mfright_points
{
    margin: 0px auto;
    width: 160px;
    height: 50px;
    color: #000000;
    font-size: 24px;
    overflow:hidden;
}

.mfright_second
{
    margin: 20px auto 0px auto;
    width: 160px;
    height: auto;
    color: #000000;
    font-size: 24px;
}

.mfright_second1
{
    margin: 0px auto;
    width: 160px;
    height: auto;
    color: #000000;
    font-size: 24px;
    overflow: hidden;
}
    
.mfright_second3
{
    margin: 20px auto 0px auto;
    width: 160px;
    height: 50px;
    color: #000000;
    font-size: 24px;
}
    
.mfright_button
{
    margin: 10px auto 0px auto;
    width: 160px;
    height: 50px;
    color: #999999;
    font-size: 24px;
}
    
input[type=submit],
input[type=submit]:active,
input[type=submit]:visited
{
    width: 100%;
    background-color: #ffcc66;
    color: #000000;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}
    
input[type=submit]:hover
{
    width: 100%;
    background-color: #e69900;
    color: #000000;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}
    
.mfleft_end_game
{
    width: 400px;
    height: 520px;
    overflow:hidden;
}
   
.mfleft_next_game
{
    width: 400px;
    height: 520px;
    overflow:hidden;
}
</style>

<div id="mfwindow">
    
    <!-- left -->
    <div class="mfleft">
        
        <div id="gameend_level" class="mfleft_end_game" style="display:none;">
            <div style="margin: 188px auto 0px auto; width: 390px; color: #000000; font-size:50px; text-align:center;">
                <b>TIME IS UP</b>
            </div>
        </div>
        
        <div id="next_level" class="mfleft_next_game" style="display:none;">
            <div style="margin: 168px auto 0px auto; width: 390px; color: #000000; font-size:50px; text-align:center;">
                <b>POINTS: </b><span id="oumfscore4">0</span>
            </div>
            <div style="margin: 5px auto 0px auto; width: 100px; color: #000000; font-size:50px; text-align:center;">
                <input type="Submit" onclick="next_game_cont(); return false;" value="NEXT">
            </div>
        </div>
        
        <div id="start_game" class="mfleft_game"></div>
        
        <div id="start_info" class="mfleft_info"></div>
    </div>
    
    <!-- right -->
    <div class="mfright">
        <div class="mfright_level">
            <div style="width: 100%; background-color: #ffcc66; border: none; border-radius: 4px; font-size: 20px;">
                <div style="padding: 0px 20px;">
                    <b>Level: </b><span id="oumflevel2">1</span>
                </div>
            </div>
        </div>
        
        <div class="mfright_points">
            <div style="width: 100%; background-color: #ffcc66; border: none; border-radius: 4px; font-size: 20px;">
                <div style="padding: 0px 20px;">
                    <b>Points: </b><span id="oumfscore3">0</span>
                </div>
            </div>
        </div>
        
        <div class="mfright_second">
            <div class="mfright_second1">
                <div style="margin: 0 auto; width: 110px; height:100px; border-radius: 10px; text-align:center; background:#ffcc66;">
                    <div id="e1" style="padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/b1.png" border="none" style="width:80px; height:75px;">
                    </div>
                    <div id="e2" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/b2.png" border="none" style="width:80px; height:75px;">
                    </div>
                    <div id="e3" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/b7.png" border="none" style="width:80px; height:75px;">
                    </div>
                    <div id="e4" style="display:none; padding: 12px 0px;">
                        <img src="<?php echo $ou_imloaderfile;?>images/b5.png" border="none" style="width:80px; height:75px;">
                    </div>
                </div>
            </div>
            
            <div class="mfright_button">
                <div style="margin: 0 auto; width: 110px;">
                    <span id="u1"><input type="Submit" onclick="start(); return false;" value="START"></span>
                <span id="u2" style="display:none;"><input type="Submit" onclick="stop_game(); return false;" value="STOP"></span>
                </div>
            </div>
            
        </div>
        
    </div>
    
</div>

<script>
var oumagicfoodtimer1;
var oumgtotalSeconds = '';
var oumagicfoodtimer1;    
  
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
    var imga1 = '<?php echo $ou_imloaderfile;?>images/b1.png';
    var imga2 = '<?php echo $ou_imloaderfile;?>images/b2.png';
    var imga3 = '<?php echo $ou_imloaderfile;?>images/b7.png';
    var imga4 = '<?php echo $ou_imloaderfile;?>images/b5.png';
    for(oui=1; oui<61; oui++)
    {
        var oumfarray = ["b1", "b2", "b7", "b5"];
        var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];
        if(oumfkey == 'b1')
        {
            oumfx_a1++;
            var aumft1 = oumfx_a1;
            jQuery("#oumftom").val(aumft1);
            jQuery("#oumfct1").html(aumft1);
        }
        if(oumfkey == 'b2')
        {
            oumfx_a2++;
            var aumft2 = oumfx_a2;
            jQuery("#oumfban").val(aumft2);
            jQuery("#oumfct2").html(aumft2);
        }
        if(oumfkey == 'b7')
        {
            oumfx_a3++;
            var aumft3 = oumfx_a3;
            jQuery("#oumfhoh").val(aumft3);
            jQuery("#oumfct3").html(aumft3);
        }
        if(oumfkey == 'b5')
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
        var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:45px; height:40px;">';

        jQuery("#e2").hide();
        jQuery("#e3").hide();
        jQuery("#e4").hide();
        jQuery("#e1").show();
        
        jQuery("#start_game").append('<div style="float:left; width:60px; height:50px; "><div style="overflow:hidden; margin:0 auto;">'+imgdetect2+'</div></div>');

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

    var imga1 = '<?php echo $ou_imloaderfile;?>images/b1.png';
    var imga2 = '<?php echo $ou_imloaderfile;?>images/b2.png';
    var imga3 = '<?php echo $ou_imloaderfile;?>images/b7.png';
    var imga4 = '<?php echo $ou_imloaderfile;?>images/b5.png';
    for(oui=1; oui<61; oui++)
    {
        var oumfarray = ["b1", "b2", "b7", "b5"];
        var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];

        if(oumfkey == 'b1')
        {
            oumfx_a1++;
            var aumft1 = oumfx_a1;
            jQuery("#oumftom").val(aumft1);
            jQuery("#oumfct1").html(aumft1);
        }
        if(oumfkey == 'b2')
        {
            oumfx_a2++;
            var aumft2 = oumfx_a2;
            jQuery("#oumfban").val(aumft2);
            jQuery("#oumfct2").html(aumft2);
        }
        if(oumfkey == 'b7')
        {
            oumfx_a3++;
            var aumft3 = oumfx_a3;
            jQuery("#oumfhoh").val(aumft3);
            jQuery("#oumfct3").html(aumft3);
        }
        if(oumfkey == 'b5')
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
        var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:45px; height:40px;">';

        jQuery("#e2").hide();
        jQuery("#e3").hide();
        jQuery("#e4").hide();
        jQuery("#e1").show();
        
        jQuery("#start_game").append('<div style="float:left; width:60px; height:50px; "><div style="overflow:hidden; margin:0 auto;">'+imgdetect2+'</div></div>');
    }
    jQuery("#oumfct1").html(oumfx_a1);
    jQuery("#oumfct2").html(oumfx_a2);
    jQuery("#oumfct3").html(oumfx_a3);
    jQuery("#oumfct4").html(oumfx_a4);
    start();
}

    
jQuery(document).ready(function(){
jQuery("#start_game").css('pointer-events','none');
var oumfx_a1 ='';
var oumfx_a2 ='';
var oumfx_a3 ='';
var oumfx_a4 ='';
var oui ='';

var imga1 = '<?php echo $ou_imloaderfile;?>images/b1.png';
var imga2 = '<?php echo $ou_imloaderfile;?>images/b2.png';
var imga3 = '<?php echo $ou_imloaderfile;?>images/b7.png';
var imga4 = '<?php echo $ou_imloaderfile;?>images/b5.png';
for(oui=1; oui<61; oui++)
{
    var oumfarray = ["b1", "b2", "b7", "b5"];
    var oumfkey = oumfarray[Math.floor(Math.random()*oumfarray.length)];
    if(oumfkey == 'b1')
    {
        oumfx_a1++;
        var aumft1 = oumfx_a1;
        jQuery("#oumftom").val(aumft1);
        jQuery("#oumfct1").html(aumft1);
    }
    if(oumfkey == 'b2')
    {
        oumfx_a2++;
        var aumft2 = oumfx_a2;
        jQuery("#oumfban").val(aumft2);
        jQuery("#oumfct2").html(aumft2);
    }
    if(oumfkey == 'b7')
    {
        oumfx_a3++;
        var aumft3 = oumfx_a3;
        jQuery("#oumfhoh").val(aumft3);
        jQuery("#oumfct3").html(aumft3);
    }
    if(oumfkey == 'b5')
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
    var imgdetect2 = '<img id="m'+ouii+'" onclick="main('+s+','+ss+'); return false;"  src="'+imgdetect+'" border="none" style="width:45px; height:40px;">';

    jQuery("#start_game").append('<div style="float:left; width:60px; height:50px; "><div style="overflow:hidden; margin:0 auto;">'+imgdetect2+'</div></div>');

}
  
jQuery("#start_info").append('<span style="padding:5px 0px 0px 20px; color:#000000; font-size:14px;">Cherry : <span id="oumfct1">'+oumfx_a1+'</span></span><span style="padding:5px 0px 0px 10px; color:#000000; font-size:14px;">Strawberry : <span id="oumfct2">'+oumfx_a2+'</span></span><span style="padding:5px 0px 0px 10px; color:#000000; font-size:14px;">Guava : <span id="oumfct3">'+oumfx_a3+'</span></span><span style="padding:5px 0px 0px 10px; color:#000000; font-size:14px;">Kiwi : <span id="oumfct4">'+oumfx_a4+'</span></span><div style="padding:10px 0px 0px 0px; text-align:center;"><span style="padding:5px 0px 0px 10px; color:#000000; font-size:14px;">Time : <span id="oumfct5">90</span> seconds</span></div>');    
    
});

function start()
{
    jQuery("#mf_help").hide();

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
        if(detect == 'b1')
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
            if(detect == 'b2')
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
                if(detect == 'b7')
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
                    if(detect == 'b5')
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
                                jQuery("#oumfscore").val(score2);
                                jQuery("#e4").hide();
                                jQuery("#e1").show();
                                jQuery("#start_game").hide();
                               // jQuery("#start_info").hide();
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
</script>

<input type="hidden" autocomplete="off" id="oumftom" value="0">
<input type="hidden" autocomplete="off" id="oumfban" value="0">
<input type="hidden" autocomplete="off" id="oumfhoh" value="0">
<input type="hidden" autocomplete="off" id="oumfper" value="0">
<input type="hidden" autocomplete="off" id="oumflevel" value="1">
<input type="hidden" autocomplete="off" id="oumfscore" value="0">