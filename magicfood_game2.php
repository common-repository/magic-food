<?php
if(!defined('ABSPATH')) exit;
$oumagiccodecode = $_POST['nonce'];
if (!wp_verify_nonce($oumagiccodecode, 'ccd3sk353'))
{
    wp_die();
}
$oumffile = plugin_dir_url( __FILE__ );
$oumfloaderimage4a = $oumffile.'images/back.png';
$oumfloaderimage4next = $oumffile.'images/next.png';
$oumf_a1 = 'a1';
$oumf_a2 = 'a2';
$oumf_a3 = 'a3';
$oumf_a4 = 'a4';

$oumfx_a1 ='';
$oumfx_a2 ='';
$oumfx_a3 ='';
$oumfx_a4 ='';
?>
<script>
var oumagicfoodtimer1 = setInterval(oumftimer, 1000);
   
var dlevel = jQuery("#oumflevel").val();
if(dlevel == 1)
{
    var oumgtotalSeconds = 90;
}
if(dlevel == 2)
{
    var oumgtotalSeconds = 85;
}
if(dlevel == 3)
{
    var oumgtotalSeconds = 80;
}
if(dlevel == 4)
{
    var oumgtotalSeconds = 75;
}
if(dlevel == 5)
{
    var oumgtotalSeconds = 70;
}
if(dlevel == 6)
{
    var oumgtotalSeconds = 65;
}
if(dlevel == 7)
{
    var oumgtotalSeconds = 60;
}
if(dlevel == 8)
{
    var oumgtotalSeconds = 55;
}
if(dlevel == 9)
{
    var oumgtotalSeconds = 45;
}
if(dlevel == 10)
{
    var oumgtotalSeconds = 40;
}
if(dlevel == 11)
{
    var oumgtotalSeconds = 35;
}
if(dlevel == 12)
{
    var oumgtotalSeconds = 30;
}
if(dlevel == 13)
{
    var oumgtotalSeconds = 25;
}
if(dlevel == 14)
{
    var oumgtotalSeconds = 20;
}
if(dlevel >= 15)
{
    var oumgtotalSeconds = 15;
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
        jQuery("#oumagicfoodarraygame").hide();
        jQuery("#oumagicfoodarraygame2").hide();
        jQuery("#oumagicfoodarraygame3").show();
        clearInterval(oumagicfoodtimer1);
    }
        
} 
</script>
<script>
function oumagicfoodsnext()
{
    var leveli = jQuery("#oumflevel").val();
    var leveli2 = parseInt(leveli);
    var leveli3 = leveli2+1;
    jQuery("#oumflevel").val(leveli3);
    
}
</script>
<script>
function oumagicfoodsnext()
{
    var leveli = jQuery("#oumflevel").val();
    var leveli2 = parseInt(leveli);
    var leveli3 = leveli2+1;
    jQuery("#oumflevel").val(leveli3);
    var formData = new FormData();
        formData.append('action', 'oufoodstart2');
        formData.append('nonce', '<?php echo wp_create_nonce('ccd3sk353');?>');
        jQuery.ajax({
        type: "post",
        url: oumfajaxcode.oumfajax_url,
        data: formData,
        contentType:false,
        processData:false,
        beforeSend: function() 
        {
            jQuery("#oumagicfoodarraygame4").hide();
            jQuery("#ou_magicfood_loader2").show();
        },
        success: function(html)
        {
            jQuery("#oumagicfoodarraygame").empty();
            jQuery("#oumagicfoodarraygame").append(html);
            jQuery("#ou_magicfood_loader2").hide();
            jQuery("#oumagicfoodarraygame").show();
            jQuery("#oumagicfoodarraygame2").show();
        }
        });
    
}
</script>
<?php
for($oui=1;$oui<101;$oui++)
{
    echo '<div id="oumagicfoodarray" style="float:left; width:39px; height:36px; border: 1px solid #330000;">';
                
        $oumfarray = array(
        'key' => $oumf_a1,
        'key2' => $oumf_a2,
        'key3' => $oumf_a3,
        'key4' => $oumf_a4
        );
        $oumfarraykey = array_rand($oumfarray);
        $oumfimagedetec = 'oumfidimm'.$oui;          
        if($oumfarray[$oumfarraykey] == $oumf_a1)
        {
            $oumfx_a1++;
            ?>
            <script>
            var aumft1 = '<?php echo $oumfx_a1;?>';
            jQuery(document).ready(function(){
            jQuery("#oumftom").val(aumft1);
            jQuery("#oumfct1").html(aumft1);
            });     
            </script>
            <?php
        }
        if($oumfarray[$oumfarraykey] == $oumf_a2)
        {
            $oumfx_a2++;
            ?>
            <script>
            var aumft2 = '<?php echo $oumfx_a2;?>';
            jQuery(document).ready(function(){
            jQuery("#oumfban").val(aumft2);
            jQuery("#oumfct2").html(aumft2);
            });     
            </script>
            <?php
        }
        if($oumfarray[$oumfarraykey] == $oumf_a3)
        {
            $oumfx_a3++;
            ?>
            <script>
            var aumft3 = '<?php echo $oumfx_a3;?>';
            jQuery(document).ready(function(){
            jQuery("#oumfhoh").val(aumft3);
            jQuery("#oumfct3").html(aumft3);
            });     
            </script>
            <?php
        }
        if($oumfarray[$oumfarraykey] == $oumf_a4)
        {
            $oumfx_a4++;
            ?>
            <script>
            var aumft4 = '<?php echo $oumfx_a4;?>';
            jQuery(document).ready(function(){
            jQuery("#oumfper").val(aumft4);
            jQuery("#oumfct4").html(aumft4);
            });     
            </script>
            <?php
        }
        ?>
        <script>
        function oumfdelim<?php echo $oui;?>()
        {
            var detect = '<?php echo $oumfarray[$oumfarraykey];?>';
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
                        jQuery("#oumfscore2").html(score2);
                    }
                    else
                    {
                        jQuery("#oumftom").val(all);
                        jQuery("#oumfct1").html("0");
                        jQuery("#oumfscore").val(score2);
                        jQuery("#oumfscore2").html(score2);
                    }
                        jQuery(".<?php echo $oumfimagedetec;?>").hide();
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
                            jQuery("#oumfscore2").html(score2);
                        }
                        else
                        {
                            jQuery("#oumfban").val(all);
                            jQuery("#oumfct2").html("0");
                            jQuery("#oumfscore").val(score2);
                            jQuery("#oumfscore2").html(score2);
                        }
                        jQuery(".<?php echo $oumfimagedetec;?>").hide();
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
                                jQuery("#oumfscore2").html(score2);
                            }
                            else
                            {
                                jQuery("#oumfhoh").val(all);
                                jQuery("#oumfct3").html("0");
                                jQuery("#oumfscore").val(score2);
                                jQuery("#oumfscore2").html(score2);
                            }
                            jQuery(".<?php echo $oumfimagedetec;?>").hide();
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
                                    jQuery("#oumfscore2").html(score2);
                                }
                                else
                                {
                                    jQuery("#oumfper").val(all);
                                    jQuery("#oumfct4").html("0");
                                    if(all ==0)
                                    {
                                        jQuery("#oumfscore").val(score2);
                                        jQuery("#oumfscore2").html(score2);
                                        jQuery("#oumagicfoodarraygame").hide();
                                        jQuery("#oumagicfoodarraygame2").hide();
                                        jQuery("#oumagicfoodarraygame4").show();
                                        clearInterval(oumagicfoodtimer1);
                                    }
                                }
                                jQuery(".<?php echo $oumfimagedetec;?>").hide();
                            }
                        }
                    }
                }
            }   
        }
        </script>
        <?php
        $oumfmainimageall = $oumffile.'images/'.$oumfarray[$oumfarraykey].'.png';
        echo '<div style="overflow:hidden; margin:3px auto; width:30px;">';
            echo '<img onclick="oumfdelim'.$oui.'(); return false;" class="'.$oumfimagedetec.' " src="'.esc_url($oumfmainimageall).'" border="none" style="width:30px; height:30px;">';
        echo '</div>';
                
    echo '</div>';
}
    