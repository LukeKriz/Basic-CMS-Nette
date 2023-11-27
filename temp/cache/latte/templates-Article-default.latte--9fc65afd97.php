<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\FrontModule\Presenters/templates/Article/default.latte */
final class Template9fc65afd97 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\FrontModule\\Presenters/templates/Article/default.latte';

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

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['article' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <h1 class="my-4">';
		echo LR\Filters::escapeHtmlText($categoryName) /* line 4 */;
		echo '</h1>

    <!-- Blog Post -->
';
		foreach ($articles as $article) /* line 7 */ {
			echo '    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">';
			echo LR\Filters::escapeHtmlText($article->title) /* line 9 */;
			echo '</h2>
        <p class="card-text">';
			echo LR\Filters::escapeHtmlText($article->short_description) /* line 10 */;
			echo '</p>
        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Article:detail', [$article->id])) /* line 11 */;
			echo '" class="btn btn-primary">Celý článek &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Publikováno: ';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($article->date_add, 'j. n. Y H:i')) /* line 14 */;
			echo '
      </div>
    </div>
';

		}

		echo '	  ';
	}
}
