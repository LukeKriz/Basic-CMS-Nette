<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Category/list.latte */
final class Templatef83f9816c4 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Category/list.latte';

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
			foreach (array_intersect_key(['category' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '<div class="row">
    <div class="col-xl-12 col-lg-8">
        <div class="shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold">Seznam kategorí
                </h6>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Název kategorie</th>
                        <th scope="col">Akce</th>
                    </tr>
                    </thead>
                    <tbody>
';
		foreach ($categories as $category) /* line 22 */ {
			echo '                        <tr>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($category->id) /* line 24 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($category->name) /* line 27 */;
			echo '
                            </td>
                            <td>
                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('editor', [$category->url])) /* line 30 */;
			echo '" class="btn btn-xs btn-primary pull-right" title="Upravit kategorii"><i class="far fa-edit"></i></a>
                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('remove', [$category->url])) /* line 31 */;
			echo '" class="btn btn-xs btn-danger pull-right" title="Odstranit kategorii"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
';

		}

		echo '                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>';
	}
}
