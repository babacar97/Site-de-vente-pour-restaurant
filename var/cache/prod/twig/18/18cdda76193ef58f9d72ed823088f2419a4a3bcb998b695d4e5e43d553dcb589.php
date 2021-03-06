<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__a44b190c4f17e0d98c910c236704e2298988dbcdc6c901883c9b917be4ee9445 */
class __TwigTemplate_d447767e571761885d86cc9d0cc407ae45f698cd895e05f7200356a67b753f2c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_1.7.7.6/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_1.7.7.6/img/app_icon.png\" />

<title>Produit • Platsénégal</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.7.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '660c234dee33653025680d068ee509f2';
    var token_admin_orders = '5fe194546b42fdd9d9791cb0363fcef7';
    var token_admin_customers = 'a7f9a341f8f998830974301cc3a35780';
    var token_admin_customer_threads = 'ad8ad4562883c683d5d62121019b1a5b';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'be89ae00e5386f05db85aaf534c1da1a';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/modules/catalog/recommended?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao';
    var admin_notification_get_link = '/prestashop_1.7.7.6/admin7791bfwld/index.php/common/notifications?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao';
    var admin_notification_push_link = '/prestashop_1.7.7.6/admin7791bfwld/index.php/common/notifications/ack?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/prestashop_1.7.7.6/admin7791bfwld/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/admin7791bfwld/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.7.6/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var appagebuilder_listshortcode_url = \"http:\\/\\/localhost\\/prestashop_1.7.7.6\\/admin7791bfwld\\/index.php?controller=AdminApPageBuilderShortcode&token=d0c625292d1a301b4542c77b5efbb749&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/prestashop_1.7.7.6\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/prestashop_1.7.7.6\\/admin7791bfwld\\/\";
var baseDir = \"\\/prestashop_1.7.7.6\\/\";
var changeFormLanguageUrl = \"\\/prestashop_1.7.7.6\\/admin7791bfwld\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"F cfa\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"F cfa\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var leofeature_module_dir = \"\\/prestashop_1.7.7.6\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
var url_ajax_blog = \"http:\\/\\/localhost\\/prestashop_1.7.7.6\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/admin7791bfwld/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/js/admin.js?v=1.7.7.6\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/admin7791bfwld/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/js/tools.js?v=1.7.7.6\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/admin7791bfwld/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/admin7791bfwld/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/appagebuilder/views/js/admin/function.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.7.6/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_1.7.7.6/admin7791bfwld/index.php/common/notifications?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop_1.7.7.6\\/admin7791bfwld\\/index.php?controller=AdminGamification&token=8975d091db57b151bf91cd61a0f1c892\";
            var current_id_tab = 10;
        </script>

";
        // line 112
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/prestashop_1.7.7.6/admin7791bfwld/index.php\"  data-token=\"CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminDashboard&amp;token=4fdfee0cb35a8d9c64260798e4a478f8\"></a>
      <span id=\"shop_version\">1.7.7.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminOrders&amp;token=5fe194546b42fdd9d9791cb0363fcef7\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=24935aa3a8f75c604f67beb5a395ea5e\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/modules/manage?token=fdec1888a1c2d8c4ee3f89c2634a1d18\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=aaec8cba0af20270e17ad8ffabc66a98\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/products/new?token=fdec1888a1c2d8c4ee3f89c2634a1d18\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/categories/new?token=fdec1888a1c2d8c4ee3f89c2634a1d18\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"180\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/14?-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\"
        data-post-link=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminQuickAccesses&token=18978e5862d47a367e66d1958e91b64d\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminQuickAccesses&token=18978e5862d47a367e66d1958e91b64d\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminSearch&amp;token=272fc56b945d836481b4cf57adf06e6d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop_1.7.7.6/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/babacarndiaye808%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Babacar</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/employees/1/edit?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLogin&amp;logout=1&amp;token=b9739d6dd8dd9c7807470758606ec8ee\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/employees/toggle-navigation?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminDashboard&amp;token=4fdfee0cb35a8d9c64260798e4a478f8\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/orders/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/orders/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/orders/invoices/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/orders/credit-slips/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/orders/delivery-slips/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCarts&amp;token=fdbd6bbefdba4b147b66c9932358376b\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/products?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/products?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/categories?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/monitoring/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminAttributesGroups&amp;token=333951750d3dcd9e772647ea1fcb2d91\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/catalog/brands/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/attachments/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCartRules&amp;token=aaec8cba0af20270e17ad8ffabc66a98\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/stocks/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/customers/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/customers/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/addresses/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCustomerThreads&amp;token=ad8ad4562883c683d5d62121019b1a5b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCustomerThreads&amp;token=ad8ad4562883c683d5d62121019b1a5b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/sell/customer-service/order-messages/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminReturn&amp;token=297534bc3e74eb38147397c3837c6f33\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminMetricsStats&amp;token=5245a9f708c6f3132b0e5f1c86bdb409\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"144\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminMetricsStats&amp;token=5245a9f708c6f3132b0e5f1c86bdb409\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLegacyStatsMetrics&amp;token=dba31751bde8aa683aa28a5023f81325\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/modules/manage?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/modules/manage?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/modules/addons/modules/catalog?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"171\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=23af6567d2535dd4f445c8dfc1bec867\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"174\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=7840c34d52e22e8cea079317af2a6b59\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/design/themes/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/design/themes/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/modules/addons/themes/catalog?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/design/mail_theme/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/design/cms-pages/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/design/modules/positions/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminImages&amp;token=96f786e4e511edf37202590a01a25b8c\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/modules/link-widget/list?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCarriers&amp;token=981f096b88820a944868f856f0a4eb0e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminCarriers&amp;token=981f096b88820a944868f856f0a4eb0e\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/shipping/preferences?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/payment/payment_methods?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/payment/payment_methods?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/payment/preferences?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/international/localization/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/international/localization/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminZones&amp;token=8d2511459812ee152672a7d0b735dfff\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/international/taxes/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/improve/international/translations/settings?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"148\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminPsfacebookModule&amp;token=97df2a017657b977eeadf2a6692f5e95\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-148\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminPsfacebookModule&amp;token=97df2a017657b977eeadf2a6692f5e95\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"152\" id=\"subtab-AdminApPageBuilder\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderProfiles&amp;token=7bf9103351e5f5d20139c57a11f77acb\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Ap PageBuilder
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-152\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminApPageBuilderProfiles\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderProfiles&amp;token=7bf9103351e5f5d20139c57a11f77acb\" class=\"link\"> Ap Profiles Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminApPageBuilderPositions\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderPositions&amp;token=40c5c3c69da9433433e0500fddff14dd\" class=\"link\"> Ap Positions Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminApPageBuilderShortcode\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderShortcode&amp;token=d0c625292d1a301b4542c77b5efbb749\" class=\"link\"> Ap ShortCode Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminApPageBuilderProducts\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderProducts&amp;token=ed196431119f8e10975768540605fab3\" class=\"link\"> Ap Products List Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminApPageBuilderDetails\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderDetails&amp;token=b890b523fe5eafd1116e77bdf13032b4\" class=\"link\"> Ap Products Details Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=7e0c82a1b725c24115ebfa0b9114df6a\" class=\"link\"> Ap Live Theme Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminApPageBuilderModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderModule&amp;token=8919c8aa4010b877591d66fee797e50d\" class=\"link\"> Ap Module Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=3ea6e08a5b317ec5096c9afb5235aaaf\" class=\"link\"> Ap Theme Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"178\" id=\"subtab-AdminApPageBuilderHook\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminApPageBuilderHook&amp;token=52666d1e5472cea4a419f4989c8fb804\" class=\"link\"> Ap Hook Control Panel
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogDashboard&amp;token=72fb3990fdf7f4a98fd57041c11c42bd\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Gestion
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-165\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogDashboard&amp;token=72fb3990fdf7f4a98fd57041c11c42bd\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"167\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogCategories&amp;token=b4a32aea16fcbf5ba8f85cc035bedab1\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogBlogs&amp;token=52dc291c0b4b4c85f3e99df4dee747ea\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogComments&amp;token=af0c19fc34f3515d3a7e2e7995b9655e\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"170\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeoblogModule&amp;token=4cc3cef9c0d4a12d1d2bd0e603267d25\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"175\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeofeatureModule&amp;token=37685a587d8e9dff2305af7ec9be78f3\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Management Feature
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-175\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"176\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeofeatureModule&amp;token=37685a587d8e9dff2305af7ec9be78f3\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"177\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminLeofeatureReviews&amp;token=304be8e9a18e7bc746f884d6d080aed5\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/preferences/preferences?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/preferences/preferences?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/order-preferences/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/product-preferences/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/customer-preferences/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/contacts/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/shop/seo-urls/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminSearchConf&amp;token=75e4016e58e3d7fb2416bd17d27e344b\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminGamification&amp;token=8975d091db57b151bf91cd61a0f1c892\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/system-information/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/system-information/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/performance/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/administration/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/emails/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/import/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/employees/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/sql-requests/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/logs/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_1.7.7.6/admin7791bfwld/index.php/configure/advanced/webservice-keys/?_token=CPdJ6-g1_nb3pnwLp63BdPl3ccN6h9KuJtuuuV90qao\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
                
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1282
        $this->displayBlock('content_header', $context, $blocks);
        // line 1283
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1284
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1285
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1286
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop_1.7.7.6/admin7791bfwld/index.php?controller=AdminDashboard&amp;token=4fdfee0cb35a8d9c64260798e4a478f8\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=babacarndiaye808%40gmail.com&amp;firstname=Babacar&amp;lastname=Ndiaye&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_1.7.7.6%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_1.7.7.6/admin7791bfwld/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=babacarndiaye808%40gmail.com&amp;firstname=Babacar&amp;lastname=Ndiaye&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_1.7.7.6%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1393
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 112
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1282
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1283
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1284
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1285
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1393
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__a44b190c4f17e0d98c910c236704e2298988dbcdc6c901883c9b917be4ee9445";
    }

    public function getDebugInfo()
    {
        return array (  1483 => 1393,  1478 => 1285,  1473 => 1284,  1468 => 1283,  1463 => 1282,  1454 => 112,  1446 => 1393,  1337 => 1286,  1334 => 1285,  1331 => 1284,  1328 => 1283,  1326 => 1282,  152 => 112,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a44b190c4f17e0d98c910c236704e2298988dbcdc6c901883c9b917be4ee9445", "");
    }
}
