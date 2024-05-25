{extends file="main.tpl"}

{block name=Nav}
    <nav id="nav">
        <ul>
            <li><a href="{$conf->app_url}/index.php">Home</a></li>
            <li class="current"><a href="{$conf->action_root}tableView"">Tabela</a></li>
            <li class="current"><a href="{$conf->action_url}logout">Wyloguj</a></li>
        </ul>
    </nav>
{/block}