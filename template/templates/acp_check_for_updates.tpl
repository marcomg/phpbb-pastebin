{include file='header.tpl'}
{if !isset($error)}
        <div class="container">
{if ($available)== (true)}
            <div class="alert alert-info"><p>{t 1=$version}There are updates available, the latest available version is %1, click{/t} <a href="https://github.com/marcomg/phpbb-pastebin">{t}here{/t}</a> {t}to go to the official website and download the latest version. Remember to read the guide on how to install the software!{/t}</p></div>
{else}
            <div class="alert alert-success"><p>{t}You have the latest version available{/t}</p></div>
{/if}
        </div>
{/if}
{include file='footer.tpl'}
