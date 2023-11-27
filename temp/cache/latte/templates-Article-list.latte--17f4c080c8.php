<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Article/list.latte */
final class Template17f4c080c8 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Article/list.latte';

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
			foreach (array_intersect_key(['article' => '21'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '<div class="row">
    <div class="col-xl-12 col-lg-8">
        <div class="shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold">Seznam článků</h6>
            </div>
            <div class="card-body">


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Název článku</th>
                            <th scope="col">Krátký popis</th>
                            <th scope="col">Akce</th>
                        </tr>
                    </thead>
                    <tbody>
';
		foreach ($articles as $article) /* line 21 */ {
			echo '                        <tr>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($article->id) /* line 23 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($article->title) /* line 26 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($article->short_description) /* line 29 */;
			echo '
                            </td>

                            <td>
                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('editor', [$article->url])) /* line 33 */;
			echo '" class="btn btn-xs btn-primary pull-right" title="Upravit článek"><i class="far fa-edit"></i></a>
                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('remove', [$article->url])) /* line 34 */;
			echo '" class="btn btn-xs btn-danger pull-right" title="Odstranit článek"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
';

		}

		echo '                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
';
	}
}
