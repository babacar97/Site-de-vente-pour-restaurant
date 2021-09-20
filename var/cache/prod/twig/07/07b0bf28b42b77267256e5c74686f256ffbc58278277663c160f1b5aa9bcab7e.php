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

/* @PrestaShop/Admin/Sell/Order/Order/view.html.twig */
class __TwigTemplate_2c7695bbbe22ebda4e994dd4adb30875b643847aa670f7abea8cffa3ba0f3ac7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["use_regular_h1_structure"] = false;
        // line 27
        ob_start(function () { return ''; });
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 28)->display($context);
        $context["layoutTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        $context["js_translatable"] = twig_array_merge(["The product was successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully added.", [], "Admin.Notifications.Success"), "The product was successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully removed.", [], "Admin.Notifications.Success"), "[1] products were successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully added.", [], "Admin.Notifications.Success"), "[1] products were successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully removed.", [], "Admin.Notifications.Success")],         // line 125
($context["js_translatable"] ?? null));
        // line 31
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "  <div id=\"order-view-page\"
       data-order-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order", [], "Admin.Global"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "reference", []), "html", null, true);
        echo "\">
    <div class=\"row d-print-none\">
      ";
        // line 38
        $context["displayAdminOrderTopHookContent"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTop", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        // line 39
        echo "
      ";
        // line 40
        if ((($context["displayAdminOrderTopHookContent"] ?? null) != "")) {
            // line 41
            echo "        <div class=\"col-md-12\">
          ";
            // line 42
            echo ($context["displayAdminOrderTopHookContent"] ?? null);
            echo "
        </div>
      ";
        }
        // line 45
        echo "      <div class=\"order-actions col-md-12\">
        ";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 46)->display($context);
        // line 47
        echo "      </div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 52
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 52)->display($context);
        // line 53
        echo "      </div>
    </div>

    <div class=\"row d-none mb-4\">
      <div class=\"col-12\" id=\"orderProductsModificationPosition\"></div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 62
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_title.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 62)->display($context);
        // line 63
        echo "      </div>
    </div>

    <div class=\"product-row row\">
      <div class=\"col-md-4 left-column\">
        ";
        // line 68
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 68)->display($context);
        // line 69
        echo "
        ";
        // line 70
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSide", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
        ";
        // line 71
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 71)->display($context);
        // line 72
        echo "
        ";
        // line 73
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSideBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
      </div>

      <div class=\"col-md-8 d-print-block right-column\">
        <div id=\"orderProductsOriginalPosition\">
          ";
        // line 78
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 78)->display($context);
        // line 79
        echo "        </div>
        ";
        // line 80
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 80)->display($context);
        // line 81
        echo "
        ";
        // line 82
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMain", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
        ";
        // line 83
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 83)->display($context);
        // line 84
        echo "
        ";
        // line 85
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMainBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
      </div>
    </div>

    ";
        // line 89
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "sources", []), "sources", []))) {
            // line 90
            echo "      <div class=\"product-row row\">
        <div class=\"col-md-12 left-column\">
          ";
            // line 92
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 92)->display($context);
            // line 93
            echo "        </div>
      </div>
    ";
        }
        // line 96
        echo "
    ";
        // line 97
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []))) {
            // line 98
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 98)->display($context);
            // line 99
            echo "    ";
        }
        // line 100
        echo "
    ";
        // line 101
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrder", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "

    ";
        // line 103
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 103)->display($context);
        // line 104
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 104)->display($context);
        // line 105
        echo "    ";
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 106
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 106)->display($context);
            // line 107
            echo "    ";
        }
        // line 108
        echo "
    ";
        // line 109
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_all_messages_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 109)->display($context);
        // line 110
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 110)->display($context);
        // line 111
        echo "  </div>
";
    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        // line 115
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 117,  227 => 115,  224 => 114,  219 => 111,  216 => 110,  214 => 109,  211 => 108,  208 => 107,  205 => 106,  202 => 105,  199 => 104,  197 => 103,  192 => 101,  189 => 100,  186 => 99,  183 => 98,  181 => 97,  178 => 96,  173 => 93,  171 => 92,  167 => 90,  165 => 89,  158 => 85,  155 => 84,  153 => 83,  149 => 82,  146 => 81,  144 => 80,  141 => 79,  139 => 78,  131 => 73,  128 => 72,  126 => 71,  122 => 70,  119 => 69,  117 => 68,  110 => 63,  108 => 62,  97 => 53,  95 => 52,  88 => 47,  86 => 46,  83 => 45,  77 => 42,  74 => 41,  72 => 40,  69 => 39,  67 => 38,  58 => 36,  55 => 35,  52 => 34,  47 => 31,  45 => 125,  44 => 120,  40 => 28,  38 => 27,  36 => 26,  30 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", "C:\\xampp\\htdocs\\prestashop_1.7.7.6\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\view.html.twig");
    }
}
