<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:04:14
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143bf5eb80e53_50571321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edeeb9fa26ba04d679ab963205e8248405f4cf08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143bf5eb80e53_50571321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- @file modules\appagebuilder\views\templates\admin\_configure\helpers\form\form -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_800863666143bf5eafb234_70422782', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_800863666143bf5eafb234_70422782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_800863666143bf5eafb234_70422782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'blockLink') {
echo '<script'; ?>
>

function getMaxIndex()
{
    if($('.link_group').length == 0)
    {
        return 1;
    }
    else
    {
        var list_index = [];
        $('.link_group').each(function(){
            list_index.push($(this).data('index'));
        })
        return Math.max.apply(Math,list_index) + 1;
    }
}

function updateNewLink(total_link, scroll_to_new_e, current_index, allow_add_fieldname)
{
    var array_id_lang = $.parseJSON(list_id_lang);
    if(allow_add_fieldname){
        $('.form-group.link_group.new .form-action').trigger("change"); // FIX show_hide input follow select_box
        hideOtherLanguage(id_language); // FIX when add new link, only show input in current_lang

        updateField('add','link_title_'+total_link,true);
        updateField('add','link_url_'+total_link,true);

        updateField('add','target_type_'+total_link, false);
        updateField('add','link_type_'+total_link, false);
        updateField('add','cmspage_id_'+total_link, false);
        updateField('add','category_id_'+total_link, false);
        updateField('add','product_id_'+total_link, false);
        updateField('add','manufacture_id_'+total_link, false);
        updateField('add','page_id_'+total_link, false);
        updateField('add','page_param_'+total_link, false);
        updateField('add','supplier_id_'+total_link, false);
    }

    $('.link_group.new .form-group .tmp').each(function(){
        // RENAME INPUT
        var e_obj = $(this);
        if($(this).closest(".translatable-field").length)
        {
            // MULTI_LANG
            $.each(array_id_lang, function( index, value ) {
                if (current_index == 0)
                {
                    // ADD NEW
                    switch(e_obj.attr('id'))
                    {
                        case 'link_title_'+value:
                            e_obj.attr('id','link_title_'+total_link+'_'+value);
                            e_obj.attr('name','link_title_'+total_link+'_'+value);
                            break;
                        case 'link_url_'+value:
                            e_obj.attr('id','link_url_'+total_link+'_'+value);
                            e_obj.attr('name','link_url_'+total_link+'_'+value);
                            break;
                    }
                }
            });

        }else{
            // ONE_LANG
            switch(e_obj.attr('id'))
            {
                case 'link_title_'+id_language:
                    e_obj.attr('id','link_title_'+total_link+'_'+id_language);
                    e_obj.attr('name','link_title_'+total_link+'_'+id_language);
                    break;
                case 'link_url_'+id_language:
                    e_obj.attr('id','link_url_'+total_link+'_'+id_language);
                    e_obj.attr('name','link_url_'+total_link+'_'+id_language);
                    break;
                default:
                    var old_id = e_obj.attr('id');
                    var old_name = e_obj.attr('name');
                    e_obj.attr('id',old_id+'_'+total_link);
                    e_obj.attr('name',old_name+'_'+total_link);
                    break;
            }
        }
    });
    $("#total_link").val(total_link);
}

function updateField(action, value, is_lang)
{
    if (action == 'add')
    {
        if (is_lang == true)
        {
            $('#list_field_lang').val($('#list_field_lang').val()+value+',');
        }
        else
        {
            $('#list_field').val($('#list_field').val()+value+',');
        }
    }
    else
    {
        // REMOVE
        if (is_lang == true)
        {
            var old_list_field_lang = $('#list_field_lang').val();
            var new_list_field_lang = old_list_field_lang.replace(value+',','');
            $('#list_field_lang').val(new_list_field_lang);
        }
        else
        {
            var old_list_field = $('#list_field').val();
            var new_list_field = old_list_field.replace(value+',','');
            $('#list_field').val(new_list_field);
        }
    }

    // UPDATE INDEX FORM 2,3,4,5,
    $('#list_id_link').val('');
    $('.link_group').each(function(){
        $('#list_id_link').val($('#list_id_link').val()+$(this).data('index')+',');
    })	
}

$(document).off("click", ".add-new-link");
$(document).on("click", ".add-new-link", function(e) {
    e.preventDefault();
    addLinkForm();
});

/**
 * ACTION FOR BUTTON ADD NEW
 * param : index for edit ajax_widget
 */
function addLinkForm( index ){
    var maxIndex = getMaxIndex();
    var allow_add_fieldname = true;
    if(index){
        maxIndex = index;
        allow_add_fieldname = false;
    }

    var new_link_html = '';
    new_link_html += '<div class="form-group link_group new">';

    $('.parent-tmp').each(function(){
        new_link_html += $(this).prop('outerHTML');
        new_link_html = new_link_html.replace('parent-tmp hidden','');
        new_link_html = new_link_html.replace('parent-tmp','');
        new_link_html = new_link_html.replace('display: none;','');
    });

    new_link_html += "<div class='form-group'>";
                    new_link_html += "<div class='col-lg-3'></div>";
                    new_link_html += "<div class='col-lg-9'>";
                        new_link_html += "<button class='fr btn btn-warning remove_link'>"+remove_button_text+"</button>";
                    new_link_html += '</div>';
                new_link_html += '</div>';
            new_link_html += '</div>';

    $(new_link_html).insertBefore('.form-group.frm-add-new-link').data('index', maxIndex);

    updateNewLink(maxIndex, true , 0, allow_add_fieldname);
    $('.link_group.new').removeClass('new');
}

$(document).off("click", ".remove_link");
$(document).on("click", ".remove_link", function(e) {
    e.preventDefault();

    $(this).closest('.link_group').find('.tmp').each(function(){
        // REMOVE FORM list_field, list_field_lang
        var name_val = $(this).attr('name');
        if($(this).closest(".translatable-field").length)
        {
            name_val = name_val.substring(0, name_val.lastIndexOf('_'));
            updateField('remove',name_val,true);
        }
        else
        {
            updateField('remove',name_val,false);
        }
    });

    $(this).closest('.link_group').fadeOut(function(){
        // REMOVE FORM
        $(this).remove();
        var total_link = parseInt($("#total_link").val())-1;
        $("#total_link").val(total_link);

        $('#list_id_link').val('');
        $('.link_group').each(function(){
            $('#list_id_link').val($('#list_id_link').val()+$(this).data('index')+',');
        })
    });
});

$(document).off("change", ".form-action");

$(".form-action").each(function(e) {
    $(this).attr('data-name', $(this).attr('name') );
});
$(document).on("change", ".link_group .form-action", function(e) {
    var elementName = $(this).attr('data-name');
    $('.' + elementName + '_sub', $(this).closest('.form-group.link_group')).hide();
    $('.' + elementName + '-' + $(this).val(), $(this).closest('.form-group.link_group')).show();
});

/**
 * AJAX FOR EDIT BLOCKLINK WIDGET
 */
function editWidgetLink()
{
    if ($('#list_id_link').length && $('#list_id_link').val() != '')
    {
        var list_id_link = $('#list_id_link').val().split(',');
        $.each(list_id_link, function( index, value ) {
            if (value != '')
            {
                // GENERATE FORM
                addLinkForm(value);
            }
        });

        $.each(listData, function( index, value ) {
            // FILL DATA INTO FORM
            $('#'+index).val(value);
            $('#'+index).val(value).prop('selected', true);;
        });

        setTimeout(function(){
            // SHOW_HIDE INPUT FOLLOW SELECT_BOX
            $('.form-group.link_group .form-action').trigger("change");
        }, 500);
    }
}
editWidgetLink();
<?php echo '</script'; ?>
>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'leoalert') {?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['show']) {?>
            <div class="alert alert-danger">
                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['href'])) && $_smarty_tpl->tpl_vars['input']->value['href']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['input']->value['href'];?>
" target="_blank">
                <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['html_text'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['href'])) && $_smarty_tpl->tpl_vars['input']->value['href']) {?>
                </a>
                <?php }?>
            </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'counterbox') {?>
        <?php echo '<script'; ?>
>

            function getMaxIndex()
            {
                if($('.link_group').length == 0)
                {
                    return 1;
                }
                else
                {
                    var list_index = [];
                    $('.link_group').each(function(){
                        list_index.push($(this).data('index'));
                    })
                    return Math.max.apply(Math,list_index) + 1;
                }
            }

            function updateNewLink(total_link, scroll_to_new_e, current_index, allow_add_fieldname)
            {
                var array_id_lang = $.parseJSON(list_id_lang);
                if(allow_add_fieldname){
                    $('.form-group.link_group.new .form-action').trigger("change"); // FIX show_hide input follow select_box
                    hideOtherLanguage(id_language); // FIX when add new link, only show input in current_lang
                    updateField('add','link_title_'+total_link,true);
                    updateField('add','bootom_html_'+total_link, true);

                    updateField('add','min_'+total_link,false);
                    updateField('add','max_'+total_link, false);
                    updateField('add','increment_'+total_link, false);
                    updateField('add','number_suffix_'+total_link, false);
                    updateField('add','delay_'+total_link, false);
                    updateField('add','counterclass_'+total_link, false);
                }

                $('.link_group.new .form-group .tmp').each(function(){
                    // RENAME INPUT
                    var e_obj = $(this);
                    if($(this).closest(".translatable-field").length)
                    {
                        // MULTI_LANG
                        $.each(array_id_lang, function( index, value ) {
                            if (current_index == 0)
                            {
                                // ADD NEW
                                switch(e_obj.attr('id'))
                                {
                                    case 'link_title_'+value:
                                        e_obj.attr('id','link_title_'+total_link+'_'+value);
                                        e_obj.attr('name','link_title_'+total_link+'_'+value);
                                        break;
                                    case 'bootom_html_'+value:
                                        e_obj.attr('id','bootom_html_'+total_link+'_'+value);
                                        e_obj.attr('name','bootom_html_'+total_link+'_'+value);
                                        break;
                                }
                            }
                        });

                    }else{
                        // ONE_LANG
                        switch(e_obj.attr('id'))
                        {
                            case 'link_title_'+id_language:
                                e_obj.attr('id','link_title_'+total_link+'_'+id_language);
                                e_obj.attr('name','link_title_'+total_link+'_'+id_language);
                                break;
                            case 'bootom_html_'+id_language:
                                e_obj.attr('id','bootom_html_'+total_link+'_'+id_language);
                                e_obj.attr('name','bootom_html_'+total_link+'_'+id_language);
                                break;
                            default:
                                var old_id = e_obj.attr('id');
                                var old_name = e_obj.attr('name');
                                e_obj.attr('id',old_id+'_'+total_link);
                                e_obj.attr('name',old_name+'_'+total_link);
                                break;
                        }
                    }
                });
                $("#total_link").val(total_link);
            }

            function updateField(action, value, is_lang)
            {
                if (action == 'add')
                {
                    if (is_lang == true)
                    {
                        $('#list_field_lang').val($('#list_field_lang').val()+value+',');
                    }
                    else
                    {
                        $('#list_field').val($('#list_field').val()+value+',');
                    }
                }
                else
                {
                    // REMOVE
                    if (is_lang == true)
                    {
                        var old_list_field_lang = $('#list_field_lang').val();
                        var new_list_field_lang = old_list_field_lang.replace(value+',','');
                        $('#list_field_lang').val(new_list_field_lang);
                    }
                    else
                    {
                        var old_list_field = $('#list_field').val();
                        var new_list_field = old_list_field.replace(value+',','');
                        $('#list_field').val(new_list_field);
                    }
                }

                // UPDATE INDEX FORM 2,3,4,5,
                $('#list_id_link').val('');
                $('.link_group').each(function(){
                    $('#list_id_link').val($('#list_id_link').val()+$(this).data('index')+',');
                })
            }

            $(document).off("click", ".add-new-link");
            $(document).on("click", ".add-new-link", function(e) {
                e.preventDefault();
                addLinkForm();
            });

            /**
             * ACTION FOR BUTTON ADD NEW
             * param : index for edit ajax_widget
             */
            function addLinkForm( index ){
                var maxIndex = getMaxIndex();
                var allow_add_fieldname = true;
                if(index){
                    maxIndex = index;
                    allow_add_fieldname = false;
                }

                var new_link_html = '';
                new_link_html += '<div class="form-group link_group new">';

                $('.parent-tmp').each(function(){
                    new_link_html += $(this).prop('outerHTML');
                    new_link_html = new_link_html.replace('parent-tmp hidden','');
                    new_link_html = new_link_html.replace('parent-tmp','');
                    new_link_html = new_link_html.replace('display: none;','');
                });

                new_link_html += "<div class='form-group'>";
                new_link_html += "<div class='col-lg-3'></div>";
                new_link_html += "<div class='col-lg-9'>";
                new_link_html += "<button class='fr btn btn-warning remove_link'>"+remove_button_text+"</button>";
                new_link_html += '</div>';
                new_link_html += '</div>';
                new_link_html += '</div>';

                $(new_link_html).insertBefore('.form-group.frm-add-new-link').data('index', maxIndex);

                updateNewLink(maxIndex, true , 0, allow_add_fieldname);
                $('.link_group.new').removeClass('new');
            }

            $(document).off("click", ".remove_link");
            $(document).on("click", ".remove_link", function(e) {
                e.preventDefault();

                $(this).closest('.link_group').find('.tmp').each(function(){
                    // REMOVE FORM list_field, list_field_lang
                    var name_val = $(this).attr('name');
                    if($(this).closest(".translatable-field").length)
                    {
                        name_val = name_val.substring(0, name_val.lastIndexOf('_'));
                        updateField('remove',name_val,true);
                    }
                    else
                    {
                        updateField('remove',name_val,false);
                    }
                });

                $(this).closest('.link_group').fadeOut(function(){
                    // REMOVE FORM
                    $(this).remove();
                    var total_link = parseInt($("#total_link").val())-1;
                    $("#total_link").val(total_link);

                    $('#list_id_link').val('');
                    $('.link_group').each(function(){
                        $('#list_id_link').val($('#list_id_link').val()+$(this).data('index')+',');
                    })
                });
            });

            $(document).off("change", ".form-action");

            $(".form-action").each(function(e) {
                $(this).attr('data-name', $(this).attr('name') );
            });
            $(document).on("change", ".link_group .form-action", function(e) {
                var elementName = $(this).attr('data-name');
                $('.' + elementName + '_sub', $(this).closest('.form-group.link_group')).hide();
                $('.' + elementName + '-' + $(this).val(), $(this).closest('.form-group.link_group')).show();
            });

            /**
             * AJAX FOR EDIT BLOCKLINK WIDGET
             */
            function editWidgetLink()
            {
                if ($('#list_id_link').length && $('#list_id_link').val() != '')
                {
                    var list_id_link = $('#list_id_link').val().split(',');
                    $.each(list_id_link, function( index, value ) {
                        if (value != '')
                        {
                            // GENERATE FORM
                            addLinkForm(value);
                        }
                    });

                    $.each(listData, function( index, value ) {
                        // FILL DATA INTO FORM
                        $('#'+index).val(value);
                        $('#'+index).val(value).prop('selected', true);;
                    });

                    setTimeout(function(){
                        // SHOW_HIDE INPUT FOLLOW SELECT_BOX
                        $('.form-group.link_group .form-action').trigger("change");
                    }, 500);
                }
            }
            editWidgetLink();
        <?php echo '</script'; ?>
>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tabConfig') {?>
		<div class="row">
			<?php $_smarty_tpl->_assignInScope('tabList', $_smarty_tpl->tpl_vars['input']->value['values']);?>
			<ul class="nav nav-tabs" role="tablist">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabList']->value, 'value', false, 'key', 'tabList', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['index'];
?>
				<li role="presentation" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first'] : null)) {?>active<?php }?>"><a href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="aptab-config" role="tab" data-toggle="tab"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
</a></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image_url_360') {?>
        <div class="col-lg-9">
            <input type="text" value="" name="image_link_360"/>
            <button type="button" class="btn btn-default btn-image_link_360"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this image url','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
        </div>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'selectImg') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
		<div class="row selectImg lang">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<?php }?>
					<div class="col-lg-6">
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['show_image'])) && $_smarty_tpl->tpl_vars['input']->value['show_image'] != false) {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?>
							<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_image']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
" class="img-thumbnail" data-img="">
							<?php }?>
						<?php }?>
                                                <div style="margin-top: 10px; font-size: 13px;">
						<a class="choose-img <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));
}?>" data-fancybox-type="iframe" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['href'],'html','UTF-8' ));?>
" data-for="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                                                -
                                                <a class="reset-img"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset this image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                                                -
                                                <a class="reset-allimg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset all image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                                                </div>
						<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
" type="text" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
" class="hide img-value<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));
}?>" value="<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));
}?>"/>

					</div>
                        
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' ));?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
							<li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'html','UTF-8' ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				<?php }?>
                
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
				<?php }?>
				<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
-selectbutton').click(function(e){
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
').trigger('click');
					});
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' ));?>
-name').val(file[file.length-1]);
					});
				});
			<?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
        <?php } else { ?>
            <div class="row selectImg">
                <div class="col-lg-6">
                    <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['show_image'])) && $_smarty_tpl->tpl_vars['input']->value['show_image'] != false) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_image']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" class="img-thumbnail" data-img="">
                        <?php }?>
                    <?php }?>
                    <div></div>
                    <a class="choose-img <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));
}?>" data-fancybox-type="iframe" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['href'],'html','UTF-8' ));?>
" data-for="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a> - 
                    <a href="javascript:void(0)" onclick="resetLeoImage();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                    <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" type="text" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" class="hide input-s-image" value="<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
 <?php }?>"/>
                    <?php echo '<script'; ?>
 type="text/javascript">
                        function resetLeoImage(){
                            // Reset img and hidden input
                            $(".img-thumbnail").hide();
                            $(".img-thumbnail").attr('src','');
                            $(".input-s-image").val('');
                        }
                    <?php echo '</script'; ?>
>            
                </div>

                    <?php echo '<script'; ?>
 type="text/javascript">
                    $(document).ready(function(){
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-selectbutton').click(function(e){
                            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').trigger('click');
                        });
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').change(function(e){
                            var val = $(this).val();
                            var file = val.split(/[\\/]/);
                            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-name').val(file[file.length-1]);
                        });
                    });
                <?php echo '</script'; ?>
>
            </div>
            
        <?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'img_cat') {?>
		<?php $_smarty_tpl->_assignInScope('tree', $_smarty_tpl->tpl_vars['input']->value['tree']);?>
			<?php $_smarty_tpl->_assignInScope('imageList', $_smarty_tpl->tpl_vars['input']->value['imageList']);?>
			<?php $_smarty_tpl->_assignInScope('selected_images', $_smarty_tpl->tpl_vars['input']->value['selected_images']);?>
		<div class="form-group form-select-icon">
			<label class="control-label col-lg-3 " for="categories"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 </label>
			<div class="col-lg-9">
			<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
			</div>
			<input type="hidden" name="category_img" id="category_img" value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selected_images']->value,'html','UTF-8' ));?>
'/>
			<div id="list_image_wrapper" style="display:none">
				<div class="list-image">
					<img id="apci" src="" class="hidden" path="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['path_image'],'html','UTF-8' ));?>
" widget="ApCategoryImage"/>
					<a data-for="#apci" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['href_image'],'html','UTF-8' ));?>
" class="apcategoryimage field-link choose-img"> [<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
]</a>
                    <input type="text" class="image_link_cat" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Link','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" style="width: 100px;display: inline-block;"/>
					<a href="javascript:;" class="apcategoryimage field-link remove-img hidden"> [<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
]</a>
				  </div>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript">
				full_loaded = true;
				intiForApCategoryImage();
			<?php echo '</script'; ?>
>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'categories') {?>
		<?php echo '<script'; ?>
 type="text/javascript">
			var full_loaded = undefined;
		<?php echo '</script'; ?>
>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'bg_img') {?>
		<div class="col-lg-9 ">
			<input type="text" name="bg_img" id="bg_img" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['bg_img'],'html','UTF-8' ));?>
" class="">
          <?php if (strpos($_smarty_tpl->tpl_vars['fields_value']->value['bg_img'],"/") !== false) {?>
              <img id="s-image" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['bg_img'],'html','UTF-8' ));?>
"/>
          <?php } else { ?>
              <img id="s-image"<?php if (!$_smarty_tpl->tpl_vars['fields_value']->value['bg_img']) {?> class="hidden" src="" <?php } else { ?>src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_link'],'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['bg_img'],'html','UTF-8' ));?>
"<?php }?>/>
          <?php }?>
			<div>
				<a class="choose-img" data-fancybox-type="iframe" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminApPageBuilderImages'),'html','UTF-8' ));?>
&ajax=1&action=manageimage&imgDir=images" data-for="#bg_img"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a> -
				<a class="reset-img" href="javascript:void(0)" onclick="resetBgImage();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                <a class="reset-allimg" href="javascript:void(0)" onclick="resetAllBgImage();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset All Language','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
			</div>
			<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please put image link or select image','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			function resetBgImage(){
				// Reset img and hidden input
				$("#s-image").addClass('hiden');
				$("#s-image").attr('src','');
				$("#bg_img").val('');
			}
		<?php echo '</script'; ?>
>
	<?php }?>    
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'apExceptions') {?>
		<div class="well">
				<div>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please specify the files for which you do not want it to be displayed.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please input each filename, separated by a comma (",").','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also click the filename in the list below, and even make a multiple selection by keeping the Ctrl key pressed while clicking, or choose a whole range of filename by keeping the Shift key pressed while clicking.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br />
						<?php echo $_smarty_tpl->tpl_vars['exception_list']->value;?>
				</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'ApColumnclass' || $_smarty_tpl->tpl_vars['input']->value['type'] == 'ApRowclass') {?>
		<div class="">
			<div class="well">
				<div class="row">
				   <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'ApRowclass') {?> 
				   <label class="choise-class col-lg-12"><input type="checkbox" class="chk-row" data-value="row" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use class row','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
				   <?php }?>
				   <label class="control-label col-lg-1"><?php echo $_smarty_tpl->tpl_vars['input']->value['leolabel'];?>
</label>
					<div class="col-lg-11"><input type="text" class="element_class" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['class'],'html','UTF-8' ));?>
" name="class"></div>
				</div><br/>
				<div class="desc-bottom">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert new or select classes for toggling content across viewport breakpoints','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br>
				<ul class="ap-col-class">
                    <li>
                        <label class="choise-class"><input class="select-class" name="hidden_from[]" type="radio" data-value="hidden-xl-down" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden on All Devices','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
                    </li>
					<li>
						<label class="choise-class"><input class="select-class" name="hidden_from[]" type="radio" data-value="hidden-lg-down" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden from Large devices (screen < 1200px)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
					</li>
					<li>
						<label class="choise-class"><input class="select-class" name="hidden_from[]" type="radio" data-value="hidden-md-down" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden from Medium devices (screen < 992px)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
					</li>
					<li>
						<label class="choise-class"><input class="select-class" name="hidden_from[]" type="radio" data-value="hidden-sm-down" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden from Small devices (screen < 768px)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
					</li>
					<li>
						<label class="choise-class"><input class="select-class" name="hidden_from[]" type="radio" data-value="hidden-xs-down" value="1"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden from Extra small devices (screen < 576px)','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
					</li>
									</ul>
				</div>
			</div>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'bg_select') {?>
		<?php echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'column_width') {?>
		<div class="panel panel-default">
			<div class="panel-body">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Responsive: You can config width for each Devices','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
			</div>
			<table class="table">
				<thead><tr>
					  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Devices','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</th>
					  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</th>
				</tr></thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['columnGrids'], 'gridValue', false, 'gridKey');
$_smarty_tpl->tpl_vars['gridValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gridKey']->value => $_smarty_tpl->tpl_vars['gridValue']->value) {
$_smarty_tpl->tpl_vars['gridValue']->do_else = false;
?>
					<tr>
						<td>
							<span class="col-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridKey']->value,'html','UTF-8' ));?>
"></span>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridValue']->value,'html','UTF-8' ));?>

						</td>
						<td>
							<div class="btn-group">
								<input type='hidden' class="col-val" name='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridKey']->value,'html','UTF-8' ));?>
' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['gridKey']->value],'html','UTF-8' ));?>
"/>
								<button type="button" class="btn btn-default apbtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
									<span class="width-val ap-w-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['gridKey']->value],'.','-'),'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['gridKey']->value],'html','UTF-8' ));?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['gridKey']->value],'-','.'),'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span><span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widthList']->value, 'itemWidth');
$_smarty_tpl->tpl_vars['itemWidth']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->do_else = false;
?>
									<li>
										<a class="width-select" href="javascript:void(0);" tabindex="-1">
											<span data-width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));?>
" class="width-val ap-w-<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strpos($_smarty_tpl->tpl_vars['itemWidth']->value,"."),'html','UTF-8' ))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8' ));
}?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8' ));?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'-','.'),'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
										</a>
									</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						</td>
					</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'reloadControler') {?>
		<div class="col-lg-9 ">
			<div style="margin-top: 5px; font-size: 13px;">
				<a class="reload-controller-exception" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reload','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
			</div>
		</div>
            <?php echo '<script'; ?>
>
                $(document).off('click', '.reload-controller-exception').on('click', '.reload-controller-exception', function(){
                    $($globalthis.currentElement).data('form').reloadControllerException = '1';
                    var idFormApRow = $($globalthis.currentElement).data('form').form_id;
                    $('.'+idFormApRow+' .btn-edit').first().click();
                    $($globalthis.currentElement).data('form').reloadControllerException = '0';
                });
            <?php echo '</script'; ?>
>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
