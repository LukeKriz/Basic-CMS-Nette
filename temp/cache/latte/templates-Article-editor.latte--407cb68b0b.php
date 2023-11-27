<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Article/editor.latte */
final class Template407cb68b0b extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Article/editor.latte';

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

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 20 */;
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="row">
    <div class="col-xl-12 col-lg-8">
        <div class="shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold">Editor článku
                </h6>
            </div>
            <div class="card-body">
';
		$ʟ_tmp = $this->global->uiControl->getComponent('editorForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 12 */;

		echo '            </div>
        </div>
    </div>
</div>

';
	}


	/** {block scripts} on line 20 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlockParent('scripts', get_defined_vars()) /* line 21 */;
		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/js/speakingurl.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */;
		echo '/js/slugify.min.js"></script>
<script type="text/javascript" src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: \'textarea[name=description]\',
        plugins: [
            \'advlist autolink lists link image charmap print preview anchor\',
            \'searchreplace visualblocks code fullscreen\',
            \'insertdatetime media table paste\'
        ],
        toolbar: \'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\',
        entities: \'160,nbsp\',
        entity_encoding: \'raw\'
    });
</script>
<script>
    jQuery(function ($) {
        $.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
        $(\'#frm-editorForm-url\').slugify(\'#frm-editorForm-title\'); // Type as you slug

        $("#frm-editorForm-url").slugify("#frm-editorForm-title", {
            separator: \'-\' // If you want to change separator from hyphen (-) to underscore (_).
        });
    });
</script>
';
	}
}
