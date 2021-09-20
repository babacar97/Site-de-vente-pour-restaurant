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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_51875358eb355250cfdc886a65c9697103aa6021ac59873ea8209c355df8e321 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div id=\"customerCard\" class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div id=\"customerInfo\" class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 37
            echo "          <div class=\"col-md-6\">
            <h2 class=\"mb-0\">
              <i class=\"material-icons\">account_box</i>

              ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "gender", []), "html", null, true);
            echo "
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "

              <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []), "html", null, true);
            echo "</strong>
            </h2>
            ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", [])) {
                // line 48
                echo "              <strong class=\"text-muted\">Guest</strong>
            ";
            }
            // line 50
            echo "          </div>

          <div id=\"viewFullDetails\" class=\"col-md-6 text-right\">
            <a class=\"d-print-none\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])]), "html", null, true);
            echo "\">
              ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
            </a>
          </div>
        ";
        } else {
            // line 58
            echo "          <div class=\"col\">
            <h2 class=\"mb-0\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
          </div>
        ";
        }
        // line 62
        echo "      </div>
    </div>

    ";
        // line 65
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 66
            echo "      <div class=\"row mt-3\">
        <div id=\"customerEmail\" class=\"col-md-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <a href=\"mailto:";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "\">
              ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "
            </a>
          </p>

          ";
            // line 77
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 78
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
          ";
            }
            // line 83
            echo "
          ";
            // line 84
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []))) {
                // line 85
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIRET", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 90
            echo "
          ";
            // line 91
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 92
                echo "            <p class=\"mb-1 d-block d-md-none\">
              <strong>";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-block d-md-none\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 97
            echo "        </div>
        <div id=\"validatedOrders\" class=\"col-md-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
          </p>

          ";
            // line 106
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 107
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>
              <span class=\"badge rounded badge-dark\">";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
            </p>
          ";
            }
            // line 114
            echo "
          ";
            // line 115
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 116
                echo "            <p class=\"mb-1 d-none d-md-block\">
              <strong>";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-none d-md-block\">";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 121
            echo "        </div>
      </div>
    ";
        }
        // line 124
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 126
        if (($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", []) === false)) {
            // line 127
            echo "          <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
            <div class=\"row justify-content-between no-gutters\">
              <strong>";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 130
            if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
                // line 131
                echo "                <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                  <i class=\"material-icons\">more_vert</i>
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                     href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
                  >
                    ";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>

                  <a href=\"#\"
                     class=\"dropdown-item js-update-customer-address-modal-btn\"
                     data-toggle=\"modal\"
                     data-target=\"#updateCustomerAddressModal\"
                     data-address-type=\"shipping\"
                  >
                    ";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </div>
              ";
            }
            // line 152
            echo "            </div>

            ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddressFormatted", []), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 155
                echo "              <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "          </div>
        ";
        }
        // line 159
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-md-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 163
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 164
            echo "              <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                <i class=\"material-icons\">more_vert</i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right\">
                <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                   href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
                >
                  ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>

                <a href=\"#\"
                   class=\"dropdown-item js-update-customer-address-modal-btn\"
                   data-toggle=\"modal\"
                   data-target=\"#updateCustomerAddressModal\"
                   data-address-type=\"invoice\"
                >
                  ";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 185
        echo "          </div>

          ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddressFormatted", []), "
"));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 188
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "        </div>
      </div>
    </div>

    ";
        // line 194
        if ((( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0)) &&  !(null === ($context["privateNoteForm"] ?? null)))) {
            // line 195
            echo "      <div id=\"privateNote\" class=\"mt-2 info-block\">
        <div class=\"row\">
          ";
            // line 197
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []));
            // line 198
            echo "
          <div class=\"col-md-6\">
            <h3 class=\"mb-0";
            // line 200
            echo (( !($context["isPrivateNoteOpen"] ?? null)) ? (" d-print-none") : (""));
            echo "\">
              ";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"col-md-6 text-right d-print-none\">
            <a href=\"#\"
               class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 206
            if (($context["isPrivateNoteOpen"] ?? null)) {
                echo "is-opened";
            }
            echo "\"
            >
              ";
            // line 208
            if (($context["isPrivateNoteOpen"] ?? null)) {
                // line 209
                echo "                <i class=\"material-icons\">remove</i>
              ";
            } else {
                // line 211
                echo "                <i class=\"material-icons\">add</i>
              ";
            }
            // line 213
            echo "            </a>
          </div>

          <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 216
            if ( !($context["isPrivateNoteOpen"] ?? null)) {
                echo "d-none";
            }
            echo "\">
            ";
            // line 217
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 219
($context["orderForViewing"] ?? null), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 220
($context["orderForViewing"] ?? null), "id", [])])])]);
            // line 222
            echo "

              ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? null), "note", []), 'widget');
            echo "
              <div class=\"d-none\">
                ";
            // line 226
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? null), 'rest');
            echo "
              </div>

              <div class=\"mt-2 text-right\">
                <button type=\"submit\"
                        class=\"btn btn-primary btn-sm js-private-note-btn\"
                        ";
            // line 232
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 233
            echo "                >
                  ";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
                </button>
              </div>
            ";
            // line 237
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_end');
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 242
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 242,  470 => 237,  464 => 234,  461 => 233,  457 => 232,  448 => 226,  443 => 224,  439 => 222,  437 => 220,  436 => 219,  435 => 217,  429 => 216,  424 => 213,  420 => 211,  416 => 209,  414 => 208,  407 => 206,  399 => 201,  395 => 200,  391 => 198,  389 => 197,  385 => 195,  383 => 194,  377 => 190,  368 => 188,  363 => 187,  359 => 185,  352 => 181,  340 => 172,  335 => 170,  327 => 164,  325 => 163,  320 => 161,  310 => 159,  306 => 157,  297 => 155,  292 => 154,  288 => 152,  281 => 148,  269 => 139,  264 => 137,  256 => 131,  254 => 130,  250 => 129,  246 => 127,  244 => 126,  240 => 124,  235 => 121,  230 => 119,  225 => 117,  222 => 116,  220 => 115,  217 => 114,  211 => 111,  205 => 108,  202 => 107,  200 => 106,  194 => 103,  188 => 100,  183 => 97,  178 => 95,  173 => 93,  170 => 92,  168 => 91,  165 => 90,  160 => 88,  155 => 86,  152 => 85,  150 => 84,  147 => 83,  142 => 81,  137 => 79,  134 => 78,  132 => 77,  125 => 73,  121 => 72,  115 => 69,  110 => 66,  108 => 65,  103 => 62,  97 => 59,  94 => 58,  87 => 54,  83 => 53,  78 => 50,  74 => 48,  72 => 47,  67 => 45,  62 => 43,  58 => 42,  54 => 41,  48 => 37,  46 => 36,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "C:\\xampp\\htdocs\\prestashop_1.7.7.6\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Order\\Blocks\\View\\customer.html.twig");
    }
}
