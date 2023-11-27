<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/User/list.latte */
final class Template8223e15e6c extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/User/list.latte';

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
			foreach (array_intersect_key(['my_user' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <h6 class="m-0 font-weight-bold">Seznam uživatelů</h6>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Jméno</th>
							<th scope="col">Příjmení</th>
							<th scope="col">Email</th>
							<th scope="col">Role</th>
							<th scope="col">Akce</th>
						</tr>
                    </thead>
                    <tbody>
';
		foreach ($users as $my_user) /* line 22 */ {
			echo '						<tr>
							<td>
								';
			echo LR\Filters::escapeHtmlText($my_user->id) /* line 24 */;
			echo '
							</td>
							<td>
								';
			echo LR\Filters::escapeHtmlText($my_user->firstname) /* line 27 */;
			echo '
							</td>
							<td>
								';
			echo LR\Filters::escapeHtmlText($my_user->lastname) /* line 30 */;
			echo '
							</td>
							<td>
								';
			echo LR\Filters::escapeHtmlText($my_user->email) /* line 33 */;
			echo '
							</td>
							<td>
								';
			echo LR\Filters::escapeHtmlText($my_user->role) /* line 36 */;
			echo '
							</td>

							<td>
';
			if ($my_user->id != 1) /* line 40 */ {
				echo '								<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('remove', [$my_user->id])) /* line 40 */;
				echo '" class="btn btn-xs btn-danger pull-right" title="Odstranit Uživatele"><i class="fas fa-trash-alt"></i></a>
';
			}
			echo '							</td>
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
