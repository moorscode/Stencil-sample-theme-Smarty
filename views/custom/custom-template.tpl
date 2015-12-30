{extends 'index.tpl'}

{block name="main"}
	{$post->get_content()}
	<h1>{$post->get_title()}</h1>

	Additional content provided by: {$origin}
{/block}