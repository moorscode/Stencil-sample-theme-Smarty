{include 'snippets/header.tpl'}

<div class="container">
	{nocache}
	{foreach from=$posts item=post}
		<section>
			<h2>{$post->get_title()}</h2>
			{$post->get_excerpt()}

			<p><a href="{$post->get_permalink()}">{'Read more...'|__}</a></p>
		</section>
	{/foreach}
	{/nocache}
</div>

{include 'snippets/footer.tpl'}