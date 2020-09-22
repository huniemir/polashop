{extends file="templates/{$conf->theme}/view.tpl"}
{block name=script}
	window.onload = ajaxReloadElement("results","{$conf->app_url}/settings_data");
{/block}
{block name=title}
	Ustawienia konta
{/block}
{block name=body}
{/block}
{block name=content}
<div id="results">
Ładowanie...

</div>
{/block}
