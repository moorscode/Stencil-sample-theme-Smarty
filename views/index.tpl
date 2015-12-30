{include 'snippets/header.tpl'}

<main>
	<div class="container">
		{nocache}
		{block name="main"}
			<h1>{$post->get_title()}</h1>
			{$post->get_content()}
		{/block}
		{/nocache}
	</div>
</main>

{include file="snippets/footer.tpl"}