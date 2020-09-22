{extends file="templates/{$conf->theme}/view.tpl"}
{block name=script}
  window.onload = ajaxReloadElement("results","{$conf->app_url}/shopcart_data");
{/block}
{block name=title}
	Koszyk
{/block}
{block name=body}
{/block}
{block name=content}

<div id="results">

</div>


{/block}
