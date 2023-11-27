<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\FrontModule\Presenters/templates/Homepage/default.latte */
final class Templateafa75a9ef4 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\FrontModule\\Presenters/templates/Homepage/default.latte';

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
		echo "\n";
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <div class="card mt-4">
';
		if ($article->has_picture) /* line 3 */ {
			echo '            <img class="card-img-top" src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 4 */;
			echo '/images/cms/';
			echo LR\Filters::escapeHtmlAttr($article->id) /* line 4 */;
			echo '.jpg?';
			echo LR\Filters::escapeHtmlAttr(time()) /* line 4 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($article->title) /* line 4 */;
			echo '">
';
		}
		echo '        <div class="card-body">
            <h3 class="card-title">';
		echo LR\Filters::escapeHtmlText($article->title) /* line 7 */;
		echo '</h3>
            <p class="card-text">';
		echo LR\Filters::escapeHtmlText($article->description) /* line 8 */;
		echo '</p>

        </div>
    </div>
';
	}
}
