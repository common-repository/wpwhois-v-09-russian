<?php
/*
Plugin Name: WPwhois-v09-Russian
Plugin URI: http://web.yugansk.com/whois-plagin-vidzhet-dlya-wordpress.html
Version: 0.9
Author: D_slammer
Author URI: http://web.yugansk.com
*/

function my_domain_search() {
?>
<script type="text/javascript">
function show (block) {
  document.getElementById(block).style.display='';
  }
   function hide (block) {
  document.getElementById(block).style.display='none';
  }
</script>
<? echo '<div class=whois_form> <form action="" method="post" >


               <center>������� �������� ���:&nbsp;www.<input name="domain_ip" type="text" size="20" />&nbsp;<input type="submit" class="button" name="submitBtn"  value="���������!" /></center>
              <center> �������� �������� ����:

            <input type="checkbox" name="top_ru" checked="checked"/>&nbsp;.ru
             <input type="checkbox" name="top_su"/>&nbsp;.su
            <input type="checkbox" name="top_com"/>&nbsp;.com
            <input type="checkbox" name="top_net"/>&nbsp;.net
            <input type="checkbox" name="top_org" />&nbsp;.org
            <input type="checkbox" name="top_info"/>&nbsp;.info
            <input type="checkbox" name="top_name"/>&nbsp;.name
            <input type="checkbox" name="top_biz" />&nbsp;.biz
            <input type="checkbox" name="top_tv" />&nbsp;.tv				</center>


            </form>  </div>';
echo "<div class=whois_answer>";
   if(!empty($_POST['domain_ip'])) {

if ($_POST['top_ru']==TRUE){
sleep(1);
  $check_dom= $_POST['domain_ip'] .".ru";
$answer= whois("whois.ripn.net",$check_dom);
if (strpos ($answer,"No entries found for the selected source")==FALSE){

echo "<br>����� $check_dom";?>   <a href="javascript:show ('ru')"> ����� </a>
 <div id="ru" style="display:none">
 <br><a href="javascript:hide ('ru')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}
  if ($_POST['top_com']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".com";
$answer= whois("whois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
 echo "<br>����� $check_dom";?>   <a href="javascript:show ('com')"> ����� </a>
 <div id="com" style="display:none">
 <br><a href="javascript:hide ('com')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

 if ($_POST['top_su']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".su";
$answer= whois("whois.ripn.net",$check_dom);
if (strpos ($answer,"No entries found for the selected source")==FALSE){
 echo "<br>����� $check_dom";?>   <a href="javascript:show ('su')"> ����� </a>
 <div id="su" style="display:none">
 <br><a href="javascript:hide ('su')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

   if ($_POST['top_net']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".net";
$answer= whois("whois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
echo "<br>����� $check_dom";?>   <a href="javascript:show ('net')"> ����� </a>
 <div id="net" style="display:none">
 <br><a href="javascript:hide ('net')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

   if ($_POST['top_org']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".org";
$answer= whois("whois.pir.org",$check_dom);
 if ((strlen($answer))>=20){

 echo "<br>����� $check_dom";?>   <a href="javascript:show ('org')"> ����� </a>
 <div id="org" style="display:none">
 <br><a href="javascript:hide ('org')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

  if ($_POST['top_info']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".info";
$answer= whois("whois.afilias.net",$check_dom);
 if ((strlen($answer))>=20){
echo "<br>����� $check_dom";?>   <a href="javascript:show ('info')"> ����� </a>
 <div id="info" style="display:none">
 <br><a href="javascript:hide ('info')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

   if ($_POST['top_name']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".name";
$answer= whois("whois.nic.name",$check_dom);
 if (strpos ($answer,"No match")==FALSE){
 echo "<br>����� $check_dom";?>   <a href="javascript:show ('name')"> ����� </a>
 <div id="name" style="display:none">
 <br><a href="javascript:hide ('name')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

  if ($_POST['top_biz']==TRUE){
 sleep (1);
  $check_dom= $_POST['domain_ip'] .".biz";
$answer= whois("whois.biz",$check_dom);
if ((strlen($answer))>=1650){
 echo "<br>����� $check_dom";?>   <a href="javascript:show ('biz')"> ����� </a>
 <div id="biz" style="display:none">
 <br><a href="javascript:hide ('biz')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
}

   if ($_POST['top_tv']==TRUE){

 sleep (1);
  $check_dom= $_POST['domain_ip'] .".tv";
$answer= whois("tvwhois.verisign-grs.com",$check_dom);
if (strpos ($answer,"No match for")==FALSE){
echo "<br>����� $check_dom";?>   <a href="javascript:show ('ru')"> ����� </a>
 <div id="tv" style="display:none">
 <br><a href="javascript:hide ('tv')"> ������ �������������� ���������� </a> <br>
<?
echo "$answer";
?>
</div>  <?
  } else {
    echo "<br>����� $check_dom �������� ";
    }
  }

}
 echo "</div>";
}

  function whois($url,$domain_ip){
  $sock = fsockopen($url, 43, $errno, $errstr);
    if (!$sock) exit("$errno($errstr)");
   else
   {
     fputs ($sock, $domain_ip."\r\n");
     $text = "";
     while (!feof($sock))
     {
       $text .= fgets ($sock, 128)."<br>";
     }
    fclose ($sock);
    $pattern = "|ReferralServer: whois://([^\n<:]+)|i";
     preg_match($pattern, $text, $out);
    if(!empty($out[1])) return whois($out[1], $domain_ip);
    else return $text;
    }

}

 function widget_whois($args){
  extract($args, EXTR_SKIP);
  echo $before_widget;
  my_domain_search();
  echo $after_widget;
}

      function widget_whois_init(){
  wp_register_sidebar_widget(WHOIS_WIDGET_ID,__('WHOIS'),'widget_whois');
}
add_action("plugins_loaded", "widget_whois_init");
?>