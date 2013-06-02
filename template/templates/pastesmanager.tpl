{include file='header.tpl'}
        <div class="container">
        <h1>{$title}</h1>
            <ul>
{section name=id loop=$tid}
                <li>
{* WARNING!! DON'T REMOVE ESCAPE OR YOU'LL DIE! *}
                    {t}Posting extract:{/t} <a href="index.php?q=view/{$tid[id]}"> {$code[id]|escape:"html"}</a><br/>
                    {t}Posted at{/t} <b>{$posted[id]|date_format:"%d/%m/%Y %k:%M:%S"}</b> {t}espires:{/t} <b>{if $expires[id]==-1}{t}Never{/t}{else}{{$posted[id]+$expires[id]}|date_format:"%d/%m/%Y %k:%M:%S"}{/if}</b><br/>
                    <a class="btn btn-danger" href="index.php?q=pastesmanager/delete/{$tid[id]}">{t}Delete{/t}</a>
                    
                </li>
{sectionelse}
            </ul>
<p>{t}No paste in the database!{/t}</p>
{/section}
            <ul class="pager">
                <li class="previous{if $from-10<0} disabled{/if}">
                    <a href={if $from-10<0}"#"{else}"index.php?q=pastesmanager/view/{$from-10}{/if}">&larr; {t}Newer{/t}</a>
                </li>
                <li class="next{if empty($tid)} disabled{/if}">
                    <a href={if empty($tid)}#{else}"index.php?q=pastesmanager/view/{$from+10}"{/if}>{t}Older{/t} &rarr;</a>
                </li>
            </ul>
        </div>
{include file='footer.tpl'}