{include file='header.tpl'}
        <div class="container">
            <h1>{$title}</h1>
            <h2>{t}About phpbb-pastebin{/t}</h2>
            <p>
                {t}phpbb-pastebin is a pastebin completed integred with phpbb3.{/t}
            </p>
            <p>
                {t 1='<a href="https://github.com/marcomg">Marco Guerrini</a>'}It was developed by %1 and is written in PHP.{/t}
            </p>
            
            <h2>{t}Sources{/t}</h2>
            <p>
                {t 1='https://github.com/marcomg/phpbb-pastebin'}phpbb-pastebin sources are freely available from my <a href="%1">git repository</a>.{/t}
            </p>
            
            <h2>{t}License{/t}</h2>
            <p>
                 {t 1='<a href="http://www.gnu.org/licenses/gpl-3.0-standalone.html">' 2='</a>'}phpbb-pastebin is licensed under the %1GPLv3%2 license.{/t}
            </p>
            
            <h2>{t}Libraries{/t}</h2>
            <p>
                {t}To develop phpbb-pastebin, these libraries have been used:{/t}
                <ul>
                    <li>{t 1='<a href="http://twitter.github.com/bootstrap">Bootstrap</a>'}%1, a front-end framework for faster and easier web development;{/t}</li>
                    <li>{t 1='<a href="http://qbnz.com/highlighter/">GeSHi</a>'}%1, a Generic Syntax Highlighter;{/t}</li>
                    <li>{t 1='<a href="http://jquery.com/">jQuery</a>'}%1, a JavaScript library;{/t}</li>
                    <li>{t 1='<a href="http://launchpad.net/php-gettext/">php-gettext</a>'}%1, a library for gettext emulation in PHP;{/t}</li>
                    <li>{t 1='<a href="http://www.smarty.net/">Smarty</a>'}%1, a template engine;{/t}</li>
                    <li>{t 1='<a href="http://github.com/caribe/smarty-gettext">smarty-gettext</a>'}%1, a smarty plugin for using gettext in smarty templates, modified by me to use it with php-gettext.{/t}</li>
                </ul>
            </p>
        </div>
{include file='footer.tpl'}
