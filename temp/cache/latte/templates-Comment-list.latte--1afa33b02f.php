<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Comment/list.latte */
final class Template1afa33b02f extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Comment/list.latte';

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
			foreach (array_intersect_key(['comment' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <h6 class="m-0 font-weight-bold ">Seznam komentářů</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jméno autora</th>
                        <th scope="col">Mail autora</th>
                        <th scope="col">Obsah Komentáře</th>
                        <th scope="col">Akce</th>
                    </tr>
                    </thead>
                    <tbody>
';
		foreach ($comments as $comment) /* line 22 */ {
			echo '                    <tr>
                        <td>
                            ';
			echo LR\Filters::escapeHtmlText($comment->id) /* line 24 */;
			echo '
                        </td>
                        <td>
                            ';
			echo LR\Filters::escapeHtmlText($comment->author_name) /* line 27 */;
			echo '
                        </td>
                        <td>
                            ';
			echo LR\Filters::escapeHtmlText($comment->author_email) /* line 30 */;
			echo '
                        </td>
                        <td>
                            ';
			echo LR\Filters::escapeHtmlText($comment->content) /* line 33 */;
			echo '
                        </td>
                        <td>
                            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('delete', [$comment->id])) /* line 36 */;
			echo '" class="btn btn-xs btn-danger pull-right" title="Odstranit komentář">
                                <i class="fas fa-trash-alt"></i>
                            </a>
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
