{extends file="main.tpl"}

{block name=content}
{*<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Użytkownik: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	*}

<section>
        <form action="{$conf->action_url}login" method="post">
            <div class="row gtr-50">
                <div class="col-6 col-12-small">
                    <label for="id_login">Użytkownik: </label>
                    <input type="text" id="id_login" type="text" name="login"/>
                </div>
                <div class="col-6 col-12-small">
                    <label for="id_pass">Hasło: </label>
                    <input id="id_pass" type="password" name="pass" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input input type="submit" value="zaloguj" class="style1" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>	

{include file='messages.tpl'}

{/block}
