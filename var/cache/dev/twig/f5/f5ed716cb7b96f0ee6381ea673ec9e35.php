<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_69db01c3c3947aef6f6a6081470a29e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello Мир!</h1>

    This is <strong>курсы валют</strong>

    <div class=\"alert alert-primary my-5\" role=\"alert\">
        Створити сервіс для зберігання історії курсів валют долара і євро до украхїнської гривні з періодичним оновленням з зовнішнього джерела даних. Інтерфейс користувача на вибір:<br />
        - веб сторінка для перегляду в браузері історії зміни курсу.<br />
        - телеграм-бот що дозволить отримувати дані зміни курсу.
    </div>


    ";
        // line 23
        if ((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Из</th>
                    <th scope=\"col\">В</th>
                    <th scope=\"col\">Продажа</th>
                    <th scope=\"col\">Покупка</th>
                    <th scope=\"col\">Дата</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 36, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                // line 37
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
                echo "</th>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rate"], "fromCurrency", [], "any", false, false, false, 39), "code", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rate"], "toCurrency", [], "any", false, false, false, 40), "code", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "sell", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "buy", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rate"], "date", [], "any", false, false, false, 43), "d-m-Y"), "html", null, true);
                echo "</td>
                    <tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 49
            echo "    
            <div class=\"alert alert-danger my-5\" role=\"alert\">
                <h3>Записей нет</h3>

                <p>
                    1. php bin/console doctrine:fixtures:load
                </p>
                <p>
                    2. php bin/console get-currency-rates
                </p>
            </div>

    ";
        }
        // line 62
        echo "    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  200 => 62,  185 => 49,  180 => 46,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  140 => 37,  123 => 36,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello Мир!</h1>

    This is <strong>курсы валют</strong>

    <div class=\"alert alert-primary my-5\" role=\"alert\">
        Створити сервіс для зберігання історії курсів валют долара і євро до украхїнської гривні з періодичним оновленням з зовнішнього джерела даних. Інтерфейс користувача на вибір:<br />
        - веб сторінка для перегляду в браузері історії зміни курсу.<br />
        - телеграм-бот що дозволить отримувати дані зміни курсу.
    </div>


    {% if rates %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Из</th>
                    <th scope=\"col\">В</th>
                    <th scope=\"col\">Продажа</th>
                    <th scope=\"col\">Покупка</th>
                    <th scope=\"col\">Дата</th>
                </tr>
            </thead>
            <tbody>
                {% for rate in rates %}
                    <tr>
                        <th scope=\"row\">{{ loop.index }}</th>
                        <td>{{ rate.fromCurrency.code }}</td>
                        <td>{{ rate.toCurrency.code }}</td>
                        <td>{{ rate.sell }}</td>
                        <td>{{ rate.buy }}</td>
                        <td>{{ rate.date|date('d-m-Y') }}</td>
                    <tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
    
            <div class=\"alert alert-danger my-5\" role=\"alert\">
                <h3>Записей нет</h3>

                <p>
                    1. php bin/console doctrine:fixtures:load
                </p>
                <p>
                    2. php bin/console get-currency-rates
                </p>
            </div>

    {% endif %}
    
</div>
{% endblock %}
", "home/index.html.twig", "/Users/valentyn/Sites/symfony-currency-test/templates/home/index.html.twig");
    }
}
