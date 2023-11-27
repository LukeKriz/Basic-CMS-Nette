<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/@layout.latte */
final class Template6edb065fa9 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/@layout.latte';

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
		if ($this->hasBlock('title')) /* line 10 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 10 */;
			echo ' | ';
		}
		echo 'zenon - Administrace</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */;
		echo '/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" type="text/css" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
		echo '/css/sb-admin-2.css">
		<link href="https://fonts.googleapis.com/css2?family=Alata&family=Finger+Paint&display=swap" rel="stylesheet">
';
		$this->renderBlock('head', get_defined_vars()) /* line 17 */;
		echo '    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="logo-sidebar"  href="/admin"><img class="logo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
		echo '/img/logo.png" alt="alt"/><p>zen<span>on</p></span></a>
				<!-- Divider -->
				<hr class="sidebar-divider my-0">
				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">
					<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Dashboard:')) /* line 32 */;
		echo '" class="nav-link">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider">
				<!-- Heading -->
				<div class="sidebar-heading">Web</div>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="far fa-newspaper"></i>
						<span>Články</span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Article:editor')) /* line 48 */;
		echo '" class="collapse-item">Přidat článek</a>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Article:list')) /* line 49 */;
		echo '" class="collapse-item">Seznam článků</a>
						</div>
					</div>

					<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
						<i class="fas fa-bars"></i>
						<span>Kategorie</span>
					</a>
					<div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
						<div class="bg-none py-2 collapse-inner rounded">

							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Category:editor')) /* line 62 */;
		echo '" class="collapse-item">Přidat kategorii</a>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Category:list')) /* line 63 */;
		echo '" class="collapse-item">Seznam kategorií</a>
						</div>
					</div>
				</li>
				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-comments"></i>
						<span>Komentáře</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Správa komentářů:
							</h6>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Comment:list')) /* line 77 */;
		echo '" class="collapse-item">Seznam komentářů</a>
						</div>
					</div>
				</li>

				<hr class="sidebar-divider">
				<!-- Heading -->
				<div class="sidebar-heading">Konfigurace</div>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
						<i class="fas fa-fw fa-folder"></i>
						<span>CMS</span>
					</a>
					<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">CMS stánky:</h6>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Cms:editor')) /* line 94 */;
		echo '" class="collapse-item">Přidat cms stránku</a>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Cms:list')) /* line 95 */;
		echo '" class="collapse-item">Seznam stránek</a>
						</div>
					</div>
				</li>


				<!-- Nav Item - Charts -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
						<i class="fas fa-cog"></i>
						<span>Nastavení</span>
					</a>
					<div id="collapseSetting" class="collapse" aria-labelledby="headingSetting" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Nastavení:</h6>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Setting:contact')) /* line 110 */;
		echo '" class="collapse-item">Kontakt</a>
						</div>
					</div>
				</li>


				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
						<i class="fas fa-users"></i>
						<span>Uživatelé</span>
					</a>
					<div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('User:add')) /* line 123 */;
		echo '" class="collapse-item">Přidat uživatele</a>
							<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('User:list')) /* line 124 */;
		echo '" class="collapse-item">Seznam uživatelů</a>
						</div>
					</div>
				</li>


				<hr class="sidebar-divider d-none d-md-block">
				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle">
					</button>
				</div>
			</ul>

			<div id="content-wrapper" class="d-flex flex-column">
				<div id="content">

					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
						<!-- Topbar Navbar -->
						<ul class="navbar-nav ml-auto">

							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline">';
		echo LR\Filters::escapeHtmlText($firstname) /* line 148 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($lastname) /* line 148 */;
		echo '</span>
									<i class="fas fa-user"></i>
								</a>
								<!-- Dropdown - User Information -->
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
										<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Odhlásit</a>
								</div>
							</li>
						</ul>
					</nav>
					<div class="container-fluid">

';
		foreach ($flashes as $flash) /* line 162 */ {
			echo '						<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 162 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 162 */;
			echo '</div>
';

		}

		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 164 */;
		echo '					</div>
				</div>
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>&copy; zenon v1.0 ';
		echo LR\Filters::escapeHtmlText(($this->filters->date)('now', 'Y')) /* line 170 */;
		echo '</span>
						</div>
					</div>
				</footer>

			</div>


        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>  </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chcete se odhlásit?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">Vyberte "Odhlásit" pokud jste si opravdu jisti.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Zrušit
                        </button>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 199 */;
		echo '" class="btn btn-primary">Odhlásit</a>
                    </div>
                </div>
            </div>
        </div>
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 204 */;
		echo '    </body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '162'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->createTemplate('../../../Presenters/templates/components/form.latte', $this->params, "import")->render() /* line 2 */;
		return get_defined_vars();
	}


	/** {block head} on line 17 */
	public function blockHead(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 204 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 205 */;
		echo '/js/jquery/jquery.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 206 */;
		echo '/js/bootstrap/bootstrap.bundle.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 207 */;
		echo '/js/jquery-easing/jquery.easing.min.js"></script>
        <script type="application/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 208 */;
		echo '/js/sb-admin-2.js"></script>
';
	}
}
