{if $msgs->getSize()>0}
	
		{foreach $msgs->getMessages() as $err}
			{if $err->isError()}
				<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
					{strip}
						<li>{$err->text}</li>
					{/strip}
				</ul>
			{else}
				<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #8f8; width:300px;  color: black;">
					{strip}
						<li>{$err->text}</li>
					{/strip}
				</ul>
			{/if}
		{/foreach}
		
{/if}


