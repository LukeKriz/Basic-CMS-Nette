<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Sign/out.latte */
final class Templatef78f42fb1e extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Sign/out.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="text-center">
    <h1 class="h1 text-white mb-4">Odhlášeno!</h1>
</div>

<br><br>

<p class="text-center"	><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 8 */;
		echo '" class="btn btn-primary button">Přihlašte se do svého účtu</a></p>';
	}
}
