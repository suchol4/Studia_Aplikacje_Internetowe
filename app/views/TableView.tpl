{extends file="main_sidebar.tpl"}

{block name=DataView}
    <div class="title">Tabela</div>
{/block}

{block name=content}

    <table id="tab_kredyt" class="pure-table">
        <thead>
            <tr>
                <th>Kwota</th>
                <th>Lata</th>
                <th>Procent</th>
                <th>Rata</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            {foreach $rates as $r}
                {strip}
                    <tr>
                        <td>{$r["kwota"]}</td>
                        <td>{$r["lat"]}</td>
                        <td>{$r["procent"]}</td>
                        <td>{$r["rata"]}</td>
                        <td>{$r["data"]}</td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>

    {include file='messages.tpl'}

{/block}
