<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Cms/list.latte */
final class Template63b60d87d0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Cms/list.latte';

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
			foreach (array_intersect_key(['page' => '21'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <h6 class="m-0 font-weight-bold">Seznam cms stránek</h6>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Název stránky</th>
                            <th scope="col">Akce</th>
                        </tr>
                    </thead>
                    <tbody>
';
		foreach ($pages as $page) /* line 21 */ {
			echo '                        <tr>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($page->id) /* line 23 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($page->title) /* line 26 */;
			echo '
                            </td>
                            <td>
                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('editor', [$page->url])) /* line 29 */;
			echo '" class="btn btn-xs btn-primary pull-right" title="Upravit stránku"><i class="far fa-edit"></i></a>
';
			if ($page->on_homepage != 1) /* line 30 */ {
				echo '                                <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('remove', [$page->url])) /* line 30 */;
				echo '" class="btn btn-xs btn-danger pull-right" title="Odstranit stránku"><i class="fas fa-trash-alt"></i></a>
';
			}
			echo '                            </td>
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
