<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Category/editor.latte */
final class Template3ebadc7a0f extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Category/editor.latte';

	public const Blocks = [
		['content' => 'blockContent', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 21 */;
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
                <h6 class="m-0 font-weight-bold">Editor kategorie
                </h6>
            </div>
            <div class="card-body">
';
		$ʟ_tmp = $this->global->uiControl->getComponent('editorForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 13 */;

		echo '            </div>
        </div>
    </div>
</div>

';
	}


	/** {block scripts} on line 21 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlockParent('scripts', get_defined_vars()) /* line 22 */;
		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */;
		echo '/js/speakingurl.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */;
		echo '/js/slugify.min.js"></script>
<script>
    jQuery(function ($) {
        $.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
        $(\'#frm-editorForm-url\').slugify(\'#frm-editorForm-name\'); // Type as you slug

        $("#frm-editorForm-url").slugify("#frm-editorForm-name", {
            separator: \'-\' // If you want to change separator from hyphen (-) to underscore (_).
        });
    });
</script>
';
	}
}
