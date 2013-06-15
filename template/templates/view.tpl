{include file='header.tpl'}
        <div class="container">
            <p>
                {if $hidden == true}{t}Hidden posting{/t}{else}{t}Posting{/t}{/if}: <b>{$tid}</b> {t}from{/t} <b>{$username}</b> {t}posted at{/t} <b>{$posted|date_format:"%d/%m/%Y %H:%M:%S"}</b> {t}espires: <b>{/t}{if $expires==-1}{t}Never{/t}{else}{{$posted + $expires}|date_format:"%d/%m/%Y %H:%M:%S"}{/if}</b>
            </p>
            {$code}
            
            <p>
                <a href="index.php?q=raw/{$tid}">{t}Show as text{/t}</a> &bull; <a href="index.php?q=download/{$tid}">{t}Download{/t}</a> &bull; {if $geshi_lines}<a href="index.php?q=view/{$tid}/nl">{t}Without linenumbers{/t}</a>{else}<a href="index.php?q=view/{$tid}">{t}With linenumbers{/t}{/if}
            </p>
        </div>
{include file='footer.tpl'}