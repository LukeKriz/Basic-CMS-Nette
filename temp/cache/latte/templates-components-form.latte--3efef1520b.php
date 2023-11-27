<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\Presenters\templates\components\form.latte */
final class Template3efef1520b extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\Presenters\\templates\\components\\form.latte';

	public const Blocks = [
		['form' => 'blockForm', 'bootstrap-form' => 'blockBootstrap_form'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '

';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['error' => '4, 24', 'input' => '8, 27', 'name' => '27'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {define form $formName} on line 1 */
	public function blockForm(array $ʟ_args): void
	{
		extract($this->params);
		$formName = $ʟ_args[0] ?? $ʟ_args['formName'] ?? null;
		unset($ʟ_args);

		$form = $this->global->formsStack[] = is_object($ʟ_tmp = $formName) ? $ʟ_tmp : $this->global->uiControl[$ʟ_tmp] /* line 2 */;
		Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
		echo '    <form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false) /* line 2 */;
		echo '>
';
		ob_start(fn() => '');
		try {
			echo '    <ul class=error>';
			ob_start();
			try {
				echo "\n";
				foreach ($form->ownErrors as $error) /* line 4 */ {
					echo '        <li>';
					echo LR\Filters::escapeHtmlText($error) /* line 4 */;
					echo '</li>
';

				}

				echo '    ';

			} finally {
				$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
			}
			echo '</ul>
';

		} finally {
			if ($ʟ_ifc[0] ?? null) {
				ob_end_clean();

			} else {
				echo ob_get_clean();
			}
		}
		echo '
    <table>
';
		foreach ($form->controls as $input) /* line 8 */ {
			if (!$input->getOption('rendered') && $input->getOption('type') !== 'hidden') /* line 9 */ {
				echo '    <tr';
				echo ($ʟ_tmp = array_filter([$input->required ? 'required' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 10 */;
				echo '>

        <th>';
				echo ($ʟ_label = Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getLabel())?->startTag() /* line 12 */;
				echo $ʟ_label?->endTag() /* line 12 */;
				echo '</th>
        <td>';
				echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl() /* line 13 */;
				echo ' ';
				ob_start(fn() => '');
				try {
					echo '<span class=error>';
					ob_start();
					try {
						echo LR\Filters::escapeHtmlText($input->error) /* line 13 */;

					} finally {
						$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
					}
					echo '</span>';
				} finally {
					if ($ʟ_ifc[1] ?? null) {
						ob_end_clean();

					} else {
						echo ob_get_clean();
					}
				}
				echo '</td>
    </tr>
';
			}

		}

		echo '    </table>
    ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(end($this->global->formsStack), false) /* line 2 */;
		echo '</form>
';
		array_pop($this->global->formsStack);
	}


	/** {define bootstrap-form $formName} on line 21 */
	public function blockBootstrap_form(array $ʟ_args): void
	{
		extract($this->params);
		$formName = $ʟ_args[0] ?? $ʟ_args['formName'] ?? null;
		unset($ʟ_args);

		$form = $this->global->formsStack[] = is_object($ʟ_tmp = $formName) ? $ʟ_tmp : $this->global->uiControl[$ʟ_tmp] /* line 22 */;
		Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
		echo '    <form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false) /* line 22 */;
		echo ' class=form-horizontal>
';
		ob_start(fn() => '');
		try {
			echo '    <ul class=error>';
			ob_start();
			try {
				echo "\n";
				foreach ($form->ownErrors as $error) /* line 24 */ {
					echo '        <li>';
					echo LR\Filters::escapeHtmlText($error) /* line 24 */;
					echo '</li>
';

				}

				echo '    ';

			} finally {
				$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
			}
			echo '</ul>
';

		} finally {
			if ($ʟ_ifc[2] ?? null) {
				ob_end_clean();

			} else {
				echo ob_get_clean();
			}
		}
		echo "\n";
		foreach ($form->controls as $name => $input) /* line 27 */ {
			if (!$input->getOption('rendered') && $input->getOption('type') !== 'hidden') /* line 28 */ {
				echo '    <div';
				echo ($ʟ_tmp = array_filter(['form-group', $input->required ? 'required' : null, $input->error ? 'has-error' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 29 */;
				echo '>

        <div class="col-sm-2 control-label">';
				echo ($ʟ_label = Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getLabel())?->startTag() /* line 31 */;
				echo $ʟ_label?->endTag() /* line 31 */;
				echo '</div>

        <div class="col-sm-10">
';
				if (in_array($input->getOption('type'), ['text', 'select', 'textarea'], true)) /* line 34 */ {
					echo '                ';
					echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl()->addAttributes(['class' => 'form-control']) /* line 35 */;
					echo "\n";
				} elseif ($input->getOption('type') === 'button') /* line 36 */ {
					echo '                ';
					echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl()->addAttributes(['class' => 'btn btn-default']) /* line 37 */;
					echo "\n";
				} elseif ($input->getOption('type') === 'checkbox') /* line 38 */ {
					echo '                <div class="checkbox">';
					echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl() /* line 39 */;
					echo '</div>
';
				} elseif ($input->getOption('type') === 'radio') /* line 40 */ {
					echo '                <div class="radio">';
					echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl() /* line 41 */;
					echo '</div>
';
				} else /* line 42 */ {
					echo '                ';
					echo Nette\Bridges\FormsLatte\Runtime::item($input, $this->global)->getControl() /* line 43 */;
					echo "\n";
				}



				echo "\n";
				ob_start(fn() => '');
				try {
					echo '            <span class=help-block>';
					ob_start();
					try {
						echo LR\Filters::escapeHtmlText($input->error ?: $input->getOption('description')) /* line 46 */;

					} finally {
						$ʟ_ifc[3] = rtrim(ob_get_flush()) === '';
					}
					echo '</span>
';

				} finally {
					if ($ʟ_ifc[3] ?? null) {
						ob_end_clean();

					} else {
						echo ob_get_clean();
					}
				}
				echo '        </div>
    </div>
';
			}

		}

		echo '    ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(end($this->global->formsStack), false) /* line 22 */;
		echo '</form>
';
		array_pop($this->global->formsStack);
	}
}
