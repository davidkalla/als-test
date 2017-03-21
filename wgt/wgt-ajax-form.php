<?php
function wgtAJAXForm() {
 global $ISO_common,$ISO_se_args,$make,$model;
?>

<a name="quote_form"></a>

<script type="text/javascript" src="https://<?= $_SERVER['HTTP_HOST'] ?>/formquote?timestamp=<?= date("U") ?>&partner=<?= get_option('ISO_LEADPARTNER') ?>&variant=122&session_id=<?= $ISO_common->session_id() ?>&http_referer=<?= urlencode($ISO_common->http_referer()) ?>&encrypt_string=<?= $ISO_se_args->encrypt_string() ?>&type_search=<?= $ISO_se_args->type_search() ?>&placement=<?= $ISO_se_args->placement() ?>&adid=<?= $ISO_se_args->adid() ?>&qs=<?= $ISO_se_args->qs() ?>&click_info=<?= $_SESSION['ppc_click_info'] ?>&params=options%3Dpreselected_make%3D<?= $make ?>%26goto_page%3D1"></script>

<?php /*
<script type="text/javascript">
function <?= $ISO_common->nmspace(); ?>preload_js_new_form_local() {
 <?= $ISO_common->nmspace(); ?>jsform_new_watchdog = setInterval(
    function(){
      var frm = document.<?= $ISO_common->nmspace(); ?>newCarPurchaseForm;
      if (frm != null && frm.make.options.length > 10) {
       clearInterval(<?= $ISO_common->nmspace(); ?>jsform_new_watchdog);
       <?= $ISO_common->nmspace(); ?>select_new_car_local('<?php global $make; echo $make; ?>','<?php global $model; echo $model; ?>','<?php global $zip; echo $zip; ?>');
      }
    }
    , 500);
}

function <?= $ISO_common->nmspace(); ?>select_new_car_local(make, model, zip) {
 if (document.getElementById("<?= $ISO_common->nmspace(); ?>div_newCarPurchaseForm").style.display != "none" && document.getElementById("<?= $ISO_common->nmspace(); ?>div_Loading").style.display == "none" && document.<?= $ISO_common->nmspace(); ?>newCarPurchaseForm.btn_submit.disabled == false) {
  var oSelMk = document.<?= $ISO_common->nmspace(); ?>newCarPurchaseForm.make;
  var oSelMd = document.<?= $ISO_common->nmspace(); ?>newCarPurchaseForm.model;
  var oInpZip = document.<?= $ISO_common->nmspace(); ?>newCarPurchaseForm.zip;
  <?= $ISO_common->nmspace(); ?>initSelect(oSelMk, make);
  oSelMk.onchange();
  <?= $ISO_common->nmspace(); ?>initSelect(oSelMd, model);
  oSelMd.onchange();
  oInpZip.value = zip;
  oInpZip.onkeyup();
 }
}
</script>

      */ ?>

<?php
}
?>