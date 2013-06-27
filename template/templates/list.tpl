{include file='header.tpl'}
        <div class="container">
        <h1>{$title}</h1>
            <ul>
{section name=id loop=$tid}
                <li>
                    {t}Posting{/t} {t}from{/t} <b>{$username[id]}</b> {t}posted at{/t} <b>{$posted[id]|date_format:"%d/%m/%Y %H:%M:%S"}</b> {t}espires:{/t} <b>{if $expires[id]==-1}{t}Never{/t}{else}{{$posted[id]+$expires[id]}|date_format:"%d/%m/%Y %H:%M:%S"}{/if}</b>
                    <br/>
                    {* WARNING!! DON'T REMOVE ESCAPE OR YOU'LL DIE! *}
                    {t}Paste extract:{/t} <a href="index.php?q=view/{$tid[id]}">{$code[id]|escape:"html"}</a>
                </li>
{sectionelse}
            </ul>
<p>{t}No paste in the database!{/t}</p>
{/section}
            <ul class="pager">
                <li class="previous{if $from-10<0} disabled{/if}">
                    <a href={if $from-10<0}"#"{else}"index.php?q=list/{$from-10}"{/if}>&larr; {t}Newer{/t}</a>
                </li>
                <li class="next{if {$tid|@count} != 10} disabled{/if}">
                    <a href={if {$tid|@count} != 10}#{else}"index.php?q=list/{$from+10}"{/if}>{t}Older{/t} &rarr;</a>
                </li>
            </ul>
        </div>
{include file='footer.tpl'}