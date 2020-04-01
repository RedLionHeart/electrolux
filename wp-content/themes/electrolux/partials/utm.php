<?php session_start();

$keys = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term');
foreach ($keys as $row) {
if (!empty($_GET[$row])) {
$value = strval($_GET[$row]);
$value = stripslashes($value);
$value = htmlspecialchars_decode($value, ENT_QUOTES);
$value = strip_tags($value);
$value = htmlspecialchars($value, ENT_QUOTES);
$_SESSION['utm'][$row] = $value;
}
}
?>
<?php
$inputSource = "";
$inputMedium = "";
$inputCampaign = "";
$inputContent = "";
$inputTerm = "";
if (!empty($_SESSION['utm'])) {
    foreach ($_SESSION['utm'] as $i => $row) {
        if($i === 'utm_source'){
            $inputSource = $row;
        }
        if ($i === 'utm_medium'){
            $inputMedium = $row;
        }
        if ($i === 'utm_campaign'){
            $inputCampaign = $row;
        }
        if ($i === 'utm_content'){
            $inputContent = $row;
        }
        if ($i === 'utm_term'){
            $inputTerm = $row;
        }
    }
}
?>
<input type="hidden" name="source" class="source" value="<?php echo $inputSource ?>" />
<input type="hidden" name="medium" class="medium" value="<?php echo $inputMedium ?>" />
<input type="hidden" name="campaign" class="campaign" value="<?php echo $inputCampaign ?>" />
<input type="hidden" name="content" class="content" value="<?php echo $inputContent ?>" />
<input type="hidden" name="term" class="term" value="<?php echo $inputTerm ?>" />