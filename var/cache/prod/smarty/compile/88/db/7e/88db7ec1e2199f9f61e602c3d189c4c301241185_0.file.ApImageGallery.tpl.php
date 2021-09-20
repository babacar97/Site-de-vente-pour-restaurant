<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:53
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\shortcodes\ApImageGallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be95e46c35_87572062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88db7ec1e2199f9f61e602c3d189c4c301241185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\shortcodes\\ApImageGallery.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be95e46c35_87572062 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ap-info" style="display: none;"></div>

<?php echo '<script'; ?>
>
$(document).off("click", ".btn-create-folder");
$(document).on("click", ".btn-create-folder", function(){

    var data = "&ajax=1&action=callmethod&type_shortcode=ApImageGallery&method_name=CreateDir&path=" + $("#path").val();
    var url = $globalthis.ajaxShortCodeUrl;
    var html = '';

    $(".ap-info").html("");
    $(".ap-info").removeClass("alert-success alert-danger");
    $(".ap-info").hide();

    $("#ap_loading").show();
    $.ajax({
        type: "POST",
        headers: {"cache-control": "no-cache"},
        url: url,
        async: true,
        cache: false,
        data: data,
        dataType: "json",
        success: function (jsonData) {
            $("#ap_loading").hide();
            if (jsonData.success) {
                if(typeof jsonData.img_dir == "undefined")
                    jsonData.img_dir = "";
                html = jsonData.information + "<p style=\"font-weight: bold;\">" + jsonData.img_dir + "</p>";

                $(".ap-info").addClass("alert alert-success").html(html).slideDown();
            }
            if (jsonData.hasError) {
                if(typeof jsonData.img_dir == "undefined")
                    jsonData.img_dir = "";
                html = jsonData.error + "<p style=\"font-weight: bold;\">" + jsonData.img_dir + "</p>";

                $(".ap-info").addClass("alert alert-danger").html(html).slideDown();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            $("#ap_loading").hide();
        }
    });

});
<?php echo '</script'; ?>
>
<?php }
}
