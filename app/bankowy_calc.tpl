{extends file="../templates/main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
    <section>
        <form action="{$conf->app_url}/app/bankowy_calc.php" method="post">
            <div class="row gtr-50">
                <div class="col-6 col-12-small">
                    <input type="text" name="kwota" id="contact-name" placeholder="Kwota kredytu" value="{$form->kwota}" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="lata" id="contact-email" placeholder="Lata kredytowania" value="{$form->lata}" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="procent" id="contact-email" placeholder="Oprocentowanie kredytu" value="{$form->procent}" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" class="style1" value="Oblicz" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>





    <div class="messages">

        {* wyświeltenie listy błędów, jeśli istnieją *}
        {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                {foreach  $msgs->getErrors() as $err}
                    {strip}
                        <li>{$err}</li>
                        {/strip}
                    {/foreach}
            </ol>
        {/if}

        {* wyświeltenie listy informacji, jeśli istnieją *}
        {if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol class="inf">
                {foreach  $msgs->getInfos() as $inf}
                    {strip}
                        <li>{$inf}</li>
                        {/strip}
                    {/foreach}
            </ol>
        {/if}



    </div>

{/block}

{block name=Highlights}
    {if isset($res->result)}
        <section id="highlights" class="wrapper style3">
            <div class="title">Obliczona rata kredytu</div>
            <div class="container">
                <h4>Wynik</h4>
                <p class="res">
                    Rata wyniesie {$res->result} zł miesięcznie.
                </p>
            </div>
        </section>   
    {/if}
{/block}


