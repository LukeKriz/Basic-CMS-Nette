<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\Presenters/templates/Home/default.latte */
final class Template818fd25e98 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\Presenters/templates/Home/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['article' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		foreach ($articles as $article) /* line 2 */ {
			echo '    <div class="post">
        <div class="date">';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($article->date_add, 'F j, Y')) /* line 3 */;
			echo '</div>

        <h2>';
			echo LR\Filters::escapeHtmlText($article->title) /* line 5 */;
			echo '</h2>

        <div>';
			echo LR\Filters::escapeHtmlText($article->description) /* line 7 */;
			echo '</div>
    </div>
';

		}
	}
}
