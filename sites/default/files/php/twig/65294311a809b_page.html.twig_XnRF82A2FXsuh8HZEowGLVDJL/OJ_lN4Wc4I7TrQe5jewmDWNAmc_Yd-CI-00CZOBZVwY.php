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

/* themes/contrib/portfolio_two/templates/layout/page.html.twig */
class __TwigTemplate_b79a03a76359afaed6d96d079c3a293a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["current_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 2
        echo "
";
        // line 4
        $context["author_pic"] = ["#theme" => "image_style", "#style_name" => "large", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["profile"] ?? null), "uid", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "user_picture", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), "#attributes" => ["class" => "authorImg"]];
        // line 11
        echo "<header>

<a href=\"/\">  <img class=\"site-logo\" src=\"/themes/contrib/portfolio_two/images/icon.png\" alt=\"logo\"> </a>
     <div class=\"logo\">
      
      <span class=\"site-title\"><a href=\"/\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 16, $this->source), "html", null, true);
        echo "</a></span>
       
     </div>
    <nav>
      <ul class=\"nav-links\">
          <li>
              <a href=\"/\">Home</a>
          </li>
          <li>
            <a href=\"/projects/\">Projects</a>
          </li>
          <li>
            <a href=\"/blog/\">Blog</a>
          </li>
          ";
        // line 30
        if (($context["logged_in"] ?? null)) {
            // line 31
            echo "          <li>
            <a href=\"/user/logout\" id=\"logout\"> Log Out</a>
          </li>
          ";
        } else {
            // line 35
            echo "           <li>
            
            <a href=\"/user/login/\" id=\"logout\"> Log In</a>
             
          </li>
          ";
        }
        // line 41
        echo "        
          <li>
              ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "

          </li>
      </ul>
      <div class=\"burger\">
          <div class=\"line1\"></div>
          <div class=\"line2\"></div>
          <div class=\"line3\"></div>   
      </div>
  
          <div class=\"sub-menu-wrap\" id=\"subMenu\">
            
              <div class=\"sub-menu\">
                <div class=\"user-info\">
                  <h3> Logged in as <span id=\"current-user\">aceman</span></h3>
              </div>
              <hr>
              <a href=\"#\" class=\"sub-menu-link\">
                
                <p> <i class=\"fa-solid fa-user\"></i>&nbsp;&nbsp;&nbsp;&nbsp;My Profile</p>
              </a>
              
              <a href=\"#\" class=\"sub-menu-link\">
                
                  <p> <i class=\"fa-solid fa-user-pen\"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile</p>
              </a>
              <a href=\"#\" class=\"sub-menu-link\">
               <p><i class=\"fa-solid fa-gear\"></i> &nbsp;&nbsp;&nbsp;&nbsp;Change E-mail</p>
              </a>
              <a href=\"#\" class=\"sub-menu-link\">
               <p><i class=\"fa-solid fa-gear\"></i> &nbsp;&nbsp;&nbsp;&nbsp;Change Password</p>
              </a>

              <a href=\"/contact/\" class=\"sub-menu-link\">
                <p><i class=\"fa-solid fa-message\"></i>&nbsp;&nbsp;&nbsp;&nbsp;Get in Touch</p>
              </a><a href=\"#\" class=\"sub-menu-link\">

              <a href=\"/logout/\"> <i class=\"fa-solid fa-right-from-bracket\"></i>&nbsp;&nbsp;&nbsp;&nbsp;Log Out</a>
              </a>
            </div>
            
  </nav>

</header>
  
";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88) &&  !($context["is_front"] ?? null))) {
            // line 89
            echo "<div class=\"breadcrumbs unique-breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">
        <span class=\"breadcrumbs-list\" itemprop=\"itemListElement\" itemscope itemtype=\"https://schema.org/ListItem\">
          <a itemprop=\"item\" href=\"/\"><span itemprop=\"name\">Home</span></a>
          <meta itemprop=\"position\"  content=\"1\" />

        </span> /
        <span class=\"breadcrumbs-list\" itemprop=\"itemListElement\" itemscope itemtype=\"https://schema.org/ListItem\">
          <span itemprop=\"name\">";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 96), "value", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</span>
          <meta itemprop=\"position\" content=\"2\" />
        </span>
  </div>
";
        }
        // line 101
        echo "
    <main>
        
<div class=\"content-container\">
  
  <section class=\"main-content profile-main-content\">
    ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
    
";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user", [], "any", false, false, true, 109), "user_profile", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
  </section>
  <section class=\"content-sidebar profile-sidebar\">
  <div class=\"portfolio-card\">
    <img src=\"/sites/default/files/inline-images/Michael.jpg\" class=\"profile-photo\" alt=\"profile photo\">
    
    <h1 class=\"developer-name-h1\">Michael Akerele</h1>
    
    <small><center>Full Stack Developer<center><span></span>
    </small>
    <div class=\"my-social-networks\">
    <a href=\"https://github.com/stacknatic\"> <i class=\"fa-brands fa-github\"></i></a>
    <a href=\"https://linked.com\"> <i class=\"fa-brands fa-linkedin\"></i></a>

    </div>
    
    <div class=\"profile-stats\">
      <a href=\"/contact\"class=\"action-button\">Consult</a>
      
    </div> 
  </div>
  ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 131
            echo "  <article>
    <h2>";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "</h2>
    <p>";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "</p>
    <!-- Add more fields as needed -->
  </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
  <div class=\"second-sidebar\">";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "</div>
  </section>


<div class=\"social-share-container\">
    <div id=\"sharebTn\"><button id=\"share-button\" title=\"share\">Share</button><div><span class=\"share-result\"></span></div></div>

    <span class=\"lighten desktop-share\"><b>Share:&nbsp;</b></span>
    <div class=\"social-share-buttons\">

    <a href=\"whatsapp://send?text=";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "&body=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 148, $this->source), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener\"><i class=\"fa-brands fa-whatsapp\"></i></a>

    <a href=\"https://www.linkedin.com/shareArticle?url=";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 150, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa-brands fa-linkedin\"></i></a>

    <a class=\"social-share\" href=\"mailto:?subject=";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 152), "value", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "&body=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 152, $this->source), "html", null, true);
        echo "\" aria-label=\"Email share\"> <i class=\"fa-regular fa-envelope\"></i></a>

    </div>


</div>

</div>

   
    <div class=\"cookie-banner\">
        <h3 class=\"centered-text\">I value your privacy</h3>
        <small>I use cookies and similar technologies. Some of the cookies are necessary for the functioning of this website and others are used to ensure the security of michaelakerele.io and to prevent abuse. By using continuing, you agree to the use of cookies in accordance the Privacy Policy of michaelakerele.io. You can learn more about the use of cookies in the <a href=\"/privacy-policy/\">Privacy Policy</a>. </small>
        <div class=\"cookie-buttons-container\">
            <button class=\"action-button cookie-consent\">OK</button>

        </div>
    </div>
</main>

<div class=\"start-live-chat-modal\">
    <h2><strong>Chat with me</strong></h2>
    <img class=\"modal-site-logo\" src=\"/themes/contrib/portfolio_two/images/icon.png\" alt=\"logo\">
        <img class=\"live-chat-admin-avatar\" src=\"/sites/default/files/inline-images/Michael.jpg\" alt=\"admin\">
        <button class=\"action-button close-live-chat-form\">X</button>
        <label for=\"room-name-input\">Hello, let me know if you need help.</label>
        <input id=\"room-name-input\" type=\"text\" size=\"100\" placeholder=\"Type your name to start conversation\" maxlength=\"60\" required>
        <input id=\"room-name-submit\" class=\"action-button\" type=\"button\" value=\"Start Conversation\">
</div>

    <button class=\"ChatWithMe active\"><i class=\"fa-regular fa-comments\"></i></i>
        ";
        // line 184
        echo "        <span class=\"chat-button-notification\"><i class=\"fa-solid fa-circle fa-beat-fade\"></i></span>
    </button>

<div class=\"chat-modal-container\">
    <div class=\"chat-modal-container-inner\">
    <i class=\"fa-solid fa-angles-down\" id=\"minimize-chat\"></i>
    <button class=\"close-chat\">X</button>
    <div class=\"chat-log-container\">
    </div>
    
    <div class=\"chat-modal-send\">
        
        <small class=\"chat-welcome-message\">Just a moment ...</small>
        <input id=\"chat-message-input\" type=\"text\" size=\"500\">
        <i id=\"chat-message-submit\" class=\"fa-regular fa-paper-plane\"></i>
    </div>
    <audio id=\"notificationSound\" src=\"themes/contrib/portfolio_two/sounds/notification.mp3\" preload=\"auto\"></audio>
    <span id=\"typing-indicator\"></span>
    <span id=\"room-participant\" hidden>";
        // line 202
        if (($context["logged_in"] ?? null)) {
            echo "Admin";
        } else {
            echo "Me";
        }
        echo "</span>
    </div>
</div>

    
    <footer class=\"footer\"> 
    <div><a href=\"/privacy-policy/\">Privacy-Policy</a></div>
    <a href=\"/terms-of-use/\">Terms-of-Use</a> | <a href=\"/contact/\">Contact</a> 
    
    
    <button class=\"gototop\">&#x2191;</button>

    </footer>



<script src=\"https://kit.fontawesome.com/92ee97b0b5.js\" crossorigin=\"anonymous\"></script>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/portfolio_two/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 202,  280 => 184,  244 => 152,  239 => 150,  232 => 148,  219 => 138,  216 => 137,  206 => 133,  202 => 132,  199 => 131,  195 => 130,  171 => 109,  166 => 107,  158 => 101,  150 => 96,  141 => 89,  139 => 88,  91 => 43,  87 => 41,  79 => 35,  73 => 31,  71 => 30,  54 => 16,  47 => 11,  45 => 7,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/portfolio_two/templates/layout/page.html.twig", "/var/www/html/drupal-portfolio/themes/contrib/portfolio_two/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 30, "for" => 130);
        static $filters = array("escape" => 16);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
