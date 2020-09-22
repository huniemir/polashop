{extends file="templates/{$conf->theme}/view.tpl"}
{block name=title}Sklep internetowy Polashop{/block}
{block name=body}Rejestracja{/block}
{block name=content}
<form action="{$conf->action_url}register" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
		 <div class="pure-control-group">
			<label for="id_email">E-Mail: </label>
			<input id="id_email" type="text" name="email"/>
		</div>
        <div class="pure-control-group">
			<label for="id_login">Nazwa użytkownika: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zarejestruj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
