<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\FrontModule\Presenters/templates/@layout.latte */
final class Template4b555473b1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\FrontModule\\Presenters/templates/@layout.latte';

	public const Blocks = [
		0 => ['head' => 'blockHead', 'header' => 'blockHeader1', 'scripts' => 'blockScripts'],
		'snippet' => ['header' => 'blockHeader', 'content' => 'blockContent'],
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
		if ($this->hasBlock('title')) /* line 13 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 13 */;
			echo ' | ';
		}
		echo 'ArgoMi - RS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
		echo '/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/css/front-style.css">
    <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */;
		echo '/css/nittro.min.css">
    <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/fontawesome-free/css/all.min.css">
';
		$this->renderBlock('head', get_defined_vars()) /* line 20 */;
		echo '</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(':Front:Homepage:default')) /* line 27 */;
		echo '" class="navbar-brand">';
		echo LR\Filters::escapeHtmlText($domain) /* line 27 */;
		echo '</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(':Front:Homepage:default')) /* line 34 */;
		echo '" class="nav-link">Domů
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
';
		foreach ($menuItems as $menuItem) /* line 38 */ {
			echo '                    <li class="nav-item">
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(':Front:Cms:', [$menuItem->url])) /* line 39 */;
			echo '" class="nav-link">';
			echo LR\Filters::escapeHtmlText($menuItem->title) /* line 39 */;
			echo '</a>
                    </li>
';

		}

		echo '                    <li class="nav-item">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(':Front:Contact:')) /* line 42 */;
		echo '" class="nav-link">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=container>

        <div class="row">
            <div class="col-lg-3"';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('header')), '"';
		echo '>';
		$this->renderBlock('header', [], null, 'snippet') /* line 51 */;
		echo '</div>
            <!-- /.col-lg-3 -->
            <div';
		echo ' id="', htmlspecialchars($this->global->snippetDriver->getHtmlId('content')), '"';
		echo ' class="col-lg-9 nittro-transition-auto nittro-transition-fade">';
		$this->renderBlock('content', [], null, 'snippet') /* line 58 */;
		echo '</div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark" >
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ArgoMi ';
		echo LR\Filters::escapeHtmlText(($this->filters->date)('now', 'Y')) /* line 68 */;
		echo ' v1.0.0</p>
        </div>
        <!-- /.container -->
    </footer>

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 73 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['menuItem' => '38', 'category' => '54', 'flash' => '59'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->createTemplate('../../../Presenters/templates/components/form.latte', $this->params, "import")->render() /* line 6 */;
		return get_defined_vars();
	}


	/** {block head} on line 20 */
	public function blockHead(array $ʟ_args): void
	{
	}


	/** n:snippet="header" on line 51 */
	public function blockHeader(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('header', 'static') /* line 51 */;
		try {
			echo "\n";
			$this->renderBlock('header', get_defined_vars()) /* line 51 */;
			echo '            ';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** n:inner-block="header" on line 51 */
	public function blockHeader1(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '                <h1 class="my-4">ArgoMi</h1>
                <div class="list-group">
';
		foreach ($categories as $category) /* line 54 */ {
			echo '                    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link(':Front:Article:', [$category->url])) /* line 54 */;
			echo '" data-path="';
			echo LR\Filters::escapeHtmlAttr($category->url) /* line 54 */;
			echo '"';
			echo ($ʟ_tmp = array_filter(['list-group-item', $presenter->isLinkCurrent() ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 54 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($category->name) /* line 54 */;
			echo '</a>
';

		}

		echo '                </div>
';
	}


	/** n:snippet="content" on line 58 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->global->snippetDriver->enter('content', 'static') /* line 58 */;
		try {
			echo "\n";
			foreach ($flashes as $flash) /* line 59 */ {
				echo '                <div';
				echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 59 */;
				echo '>';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 59 */;
				echo '</div>
';

			}

			$this->renderBlock('content', [], 'html') /* line 60 */;
			echo '            ';

		} finally {
			$this->global->snippetDriver->leave();
		}
	}


	/** {block scripts} on line 73 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 74 */;
		echo '/js/bootstrap/bootstrap.bundle.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 75 */;
		echo '/js/bootstrap/bootstrap.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 76 */;
		echo '/js/jquery/jquery.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 77 */;
		echo '/js/nittro.min.js" async defer></script>
';
	}
}
