<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\FrontModule\Presenters/templates/Cms/default.latte */
final class Template8484f7783b extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\FrontModule\\Presenters/templates/Cms/default.latte';

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

		echo '    <h1 class="my-4">';
		echo LR\Filters::escapeHtmlText($page->title) /* line 2 */;
		echo '</h1>

    <!-- Blog Post -->
    <div class="card mb-4">
';
		if ($page->has_picture) /* line 6 */ {
			echo '        <img class="card-img-top" src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
			echo '/images/cms/';
			echo LR\Filters::escapeHtmlAttr($page->id) /* line 7 */;
			echo '.jpg?';
			echo LR\Filters::escapeHtmlAttr(time()) /* line 7 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($page->title) /* line 7 */;
			echo '">
';
		}
		echo '        <div class="card-body">
            <h2 class="card-title">';
		echo LR\Filters::escapeHtmlText($page->title) /* line 10 */;
		echo '</h2>
            <p class="card-text">';
		echo $page->description /* line 11 */;
		echo '</p>
        </div>
        <div class="card-footer text-muted">
            Publikováno: ';
		echo LR\Filters::escapeHtmlText(($this->filters->date)($page->date_add, 'j. n. Y H:i')) /* line 14 */;
		echo '
        </div>
    </div>
';
	}
}
