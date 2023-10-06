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
            <a href=\"/blog/\">Blog</a>
          </li>
          ";
        // line 28
        if (($context["logged_in"] ?? null)) {
            // line 29
            echo "          <li>
            <a href=\"/user/logout\" id=\"logout\"> Log Out</a>
             
          </li>
          ";
        } else {
            // line 34
            echo "           <li>
            
            <a href=\"/user/login/\" id=\"logout\"> Log In</a>
             
          </li>
          ";
        }
        // line 40
        echo "          
          ";
        // line 50
        echo "          <li>
              ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
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
  
    ";
        // line 97
        echo "    ";
        // line 98
        echo "
</header>
  
";
        // line 101
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 101), "value", [], "any", false, false, true, 101)) {
            // line 102
            echo "<div class=\"breadcrumbs unique-breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">
        <span class=\"breadcrumbs-list\" itemprop=\"itemListElement\" itemscope itemtype=\"https://schema.org/ListItem\">
          <a itemprop=\"item\" href=\"/\"><span itemprop=\"name\">Home</span></a>
          <meta itemprop=\"position\"  content=\"1\" />

        </span> /
        <span class=\"breadcrumbs-list\" itemprop=\"itemListElement\" itemscope itemtype=\"https://schema.org/ListItem\">
          <span itemprop=\"name\">";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "</span>
          <meta itemprop=\"position\" content=\"2\" />
        </span>
  </div>
";
        }
        // line 114
        echo "      


    <main>
        
<div class=\"content-container\">
  
  <section class=\"main-content profile-main-content\">
    ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "

    ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_pic"] ?? null), 124, $this->source), "html", null, true);
        echo "
    
";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user", [], "any", false, false, true, 126), "user_profile", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
  </section>
  <section class=\"content-sidebar profile-sidebar\">
    <img src=\"/sites/default/files/inline-images/Michael.jpg\" class=\"profile-photo\" alt=\"profile photo\">
    
    
    <h1 class=\"developer-name-h1\">Michael Akerele</h1>
    
    
    
    <small><center>Full Stack Developer<center><span></span>
    </small>
    
    
    <div class=\"profile-stats\">
      
      <a href=\"/contact\"class=\"action-button\">Consult</a>
      <!-- <button class=\"action-button\">Follow</button> -->
      
    </div> 
  <div>";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "</div>
  </section>
  


    <div class=\"social-share-buttons\">

    <span><strong class=\"lighten\">Share:&nbsp;</strong></span>

    <a class=\"social-share action-button\" href=\"mailto:?subject=";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 155), "value", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "&body=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 155, $this->source), "html", null, true);
        echo "\" aria-label=\"Email share\">

        Email
    </a>
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

    
    <button class=\"ChatWithMe active\">&#128488;
    </button>

<div class=\"chat-modal-container\">
    <div class=\"chat-modal-container-inner\">
        <button class=\"close-chat\">X</button>
        <textarea id=\"chat-log\" cols=\"100\" rows=\"20\" placeholder=\"Just a moment ...\" readonly></textarea>
        <div class=\"chat-modal-send\">
          <input id=\"chat-message-input\" type=\"text\" size=\"500\">
          <input id=\"chat-message-submit\" class=\"action-button\" type=\"button\" value=\"Send\">
        </div>
        <span id=\"typing-indicator\"></span>
        <span id=\"room-participant\" hidden>";
        // line 199
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

<script>
const goUP = document.querySelector(\".gototop\");
window.addEventListener('scroll', goToTop);
function goToTop(){
    if (this.pageYOffset > 100){
        goUP.classList.add('active');
    }
    else{
        goUP.classList.remove('active');
    }
}
const goUp = () => {
    
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    
  };
goUP.addEventListener('click', goUp)
</script>

    <script>
        const LetsChatButton = document.querySelector(\".ChatWithMe\");
    
        const LetsChat = () => {
                startLiveChatForm.classList.add('active');  
        };
    
        LetsChatButton.addEventListener('click', LetsChat)
    </script>
    
    
    
    ";
        // line 256
        echo "    
    <script>
        const consentButton = document.querySelector('.cookie-consent')
        const cookieBanner = document.querySelector('.cookie-banner')
        const banner = () =>{

            if (typeof(Storage) !== \"undefined\"){
                
                if(!localStorage.getItem('cookieConsent') && window.location.href!='/privacy-policy/'){
                    cookieBanner.classList.add('active')
                    cookieBanner.style.animation = 'banner 2s'

                    consentButton.addEventListener('click', consent)
                }
                
                function consent(){
                    
                    localStorage.setItem('cookieConsent', 'consented')
                    cookieBanner.classList.remove('active')
                }
            }
        }
        setTimeout(banner, 700)
    </script>

<script>
  const contact = document.querySelector('.contact-member');
  const loggedIn = \"True\"
  const checkStatus = (e) => {
    e.preventDefault();
      alert(\"You need to be logged in. You can create a free account if you don't have one.\")
  }
  if(loggedIn=='False'){
    contact.addEventListener('click', checkStatus)
  }
</script>




<script>
        // open websocket connection

        const chatLog = document.querySelector('#chat-log');
        const chatMessageInput = document.querySelector('#chat-message-input');
        const chatMessageSubmit = document.querySelector('#chat-message-submit');
        const typingIndicator = document.querySelector('#typing-indicator');
        const roomParticipant = document.querySelector('#room-participant');
        const closeChat = document.querySelector('.close-chat')
        const chatModal = document.querySelector('.chat-modal-container');

        function openWebSocket(){

        const newRoomName = localStorage.getItem('room-name');


        const chatSocket = new WebSocket(`ws://localhost:8000/ws/chat/\${newRoomName}/`) 

        chatSocket.addEventListener('message', (event) => {
            const data = JSON.parse(event.data);
            typingIndicator.textContent = data.typing && data.participant !== roomParticipant.textContent
            ? `\${data.participant} is typing...`
            : '';
            if (!data.typing) {
                chatLog.value += `\${data.participant}: \${data.message}\\n`;
            }
        });
        
        chatSocket.addEventListener('close', () => {
            console.error('Chat socket closed unexpectedly');
        });
        
        chatMessageInput.focus();
        
        chatMessageInput.addEventListener('keyup', (event) => {
            if (event.keyCode === 13) {
                chatMessageSubmit.click();
            } else {
                chatSocket.send(JSON.stringify({
                    'typing': true,
                    'participant': '";
        // line 336
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logged_in"] ?? null), 336, $this->source), "html", null, true);
        echo "' ? 'Admin' : 'Me',
                }));
            }
        });
        
        chatMessageSubmit.addEventListener('click', () => {
            const messageInputDom = chatMessageInput;
            const message = messageInputDom.value;
            const participant = '";
        // line 344
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logged_in"] ?? null), 344, $this->source), "html", null, true);
        echo "' ? 'Admin' : 'Me';
            
            chatSocket.send(JSON.stringify({
                'message': message,
                'participant': participant,
            }));
            
            messageInputDom.value = '';
        });

        }
         function endChat() {
        let text = \"The chat will be closed!\\nPress Cancel to continue with chat or OK to end chat.\";
        if (confirm(text) == true) {
            chatModal.classList.remove('active');
            if(localStorage.getItem('room-name')){
                localStorage.removeItem('room-name')
            };
            LetsChatButton.classList.add('active');
        } 
        else {
            return
        }
        }
        
        closeChat.addEventListener('click', endChat);
    </script>
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
        return array (  414 => 344,  403 => 336,  321 => 256,  268 => 199,  219 => 155,  207 => 146,  184 => 126,  179 => 124,  174 => 122,  164 => 114,  156 => 109,  147 => 102,  145 => 101,  140 => 98,  138 => 97,  92 => 51,  89 => 50,  86 => 40,  78 => 34,  71 => 29,  69 => 28,  54 => 16,  47 => 11,  45 => 7,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/portfolio_two/templates/layout/page.html.twig", "/app/themes/contrib/portfolio_two/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 28);
        static $filters = array("escape" => 16);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
