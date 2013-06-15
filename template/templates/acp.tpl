{include file='header.tpl'}
        <div class="container">
        <h1>{$title}</h1>
            <form class="form-inline" method="post">
                <input type="text" name="acp" class="input-small" placeholder="">
                <input class="btn btn-warning" type="submit" formaction="index.php?q=acp/delete" value="{t}Delete by tid{/t}">
                <input class="btn btn-danger" type="submit" formaction="index.php?q=acp/deleteAllByUser" value="{t}Delete by username{/t}">
            </form>
            <ul>
{section name=id loop=$tid}
                <li>
                    {t}Posting{/t} {t}from{/t} <b>{$username[id]}</b> {t}posted at{/t} <b>{$posted[id]|date_format:"%d/%m/%Y %H:%M:%S"}</b> {t}espires:{/t} <b>{if $expires[id]==-1}{t}Never{/t}{else}{{$posted[id]+$expires[id]}|date_format:"%d/%m/%Y %H:%M:%S"}{/if}</b> {t}Paste type:{/t} {if $hidden}{t}hidden{/t}{else}{t}public{/t}{/if}
                    <br/>
                    {* WARNING!! DON'T REMOVE ESCAPE OR YOU'LL DIE! *}
                    <a href="index.php?q=view/{$tid[id]}">{t}Little extract:{/t} {$code[id]|escape:"html"}</a><br/>
                    <a class="btn btn-danger" href="index.php?q=acp/delete/{$tid[id]}">{t}Delete{/t}</a>
                </li>
{sectionelse}
            </ul>
<p>{t}No paste in the database!{/t}</p>
{/section}
            <ul class="pager">
                <li class="previous{if $from-10<0} disabled{/if}">
                    <a href={if $from-10<0}"#"{else}"index.php?q=acp/view/{$from-10}"{/if}>&larr; {t}Newer{/t}</a>
                </li>
                <li class="next{if empty($tid)} disabled{/if}">
                    <a href={if empty($tid)}#{else}"index.php?q=acp/view/{$from+10}"{/if}>{t}Older{/t} &rarr;</a>
                </li>
            </ul>
        </div>
{include file='footer.tpl'}