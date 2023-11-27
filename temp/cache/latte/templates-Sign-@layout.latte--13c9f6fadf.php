<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Sign/@layout.latte */
final class Template13c9f6fadf extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Sign/@layout.latte';

	public const Blocks = [
		['head' => 'blockHead', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="ArgoMi.cz">

        <title>';
		if ($this->hasBlock('title')) /* line 14 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 14 */;
			echo ' | ';
		}
		echo 'Zenon</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
		<link href="https://fonts.googleapis.com/css2?family=Alata&family=Finger+Paint&display=swap" rel="stylesheet">


		<link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/css/sb-admin-2.css">
';
		$this->renderBlock('head', get_defined_vars()) /* line 23 */;
		echo '    </head>

    <body class="bg-admin">
';
		foreach ($flashes as $flash) /* line 27 */ {
			echo '		<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 27 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 27 */;
			echo '</div>
';

		}

		echo '		<a class="logo"  href="/admin"><img class="logo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 28 */;
		echo '/img/logo.png" alt="alt"/><p>zen<span>on</span></p></a>
        <div class="container">


            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">


                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
';
		$this->renderBlock('content', [], 'html') /* line 47 */;
		echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


';
		$this->renderBlock('scripts', get_defined_vars()) /* line 62 */;
		echo '    </body>
</html>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '27'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->createTemplate('../../../../Presenters/templates/components/form.latte', $this->params, "import")->render() /* line 6 */;
		return get_defined_vars();
	}


	/** {block head} on line 23 */
	public function blockHead(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 62 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 63 */;
		echo '/js/jquery/jquery.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 64 */;
		echo '/js/bootstrap/bootstrap.bundle.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 65 */;
		echo '/js/jquery-easing/jquery.easing.min.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 66 */;
		echo '/js/sb-admin-2.js"></script>
';
	}
}
