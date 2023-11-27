<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\wamp64\www\CMS\app\AdminModule\Presenters/templates/Dashboard/default.latte */
final class Template8f9978c4b1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\wamp64\\www\\CMS\\app\\AdminModule\\Presenters/templates/Dashboard/default.latte';

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


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<h6 class="text-center">Vítejte v administračním rozhraní<br> <span style="font-size:2.5rem;color:#2b7341;">zenon<span></h6>
							<br>

<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-6 col-md-6 mb-4">
		<div class="border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Počet článků</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">';
		echo LR\Filters::escapeHtmlText($articleTotal) /* line 14 */;
		echo '</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-600"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-6 col-md-6 mb-4">
		<div class="border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Počet komentářů</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">';
		echo LR\Filters::escapeHtmlText($commentTotal) /* line 31 */;
		echo '</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-comments fa-2x text-gray-600"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xl-12 col-lg-8">
		<div class="shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold">Nástěnka</h6>
			</div>
			<div class="card-body">


				<table class="table">
					<thead>
						<tr>
							<th class="text-gray-500" scope="col">Tabulka zobrazuje uživatelské role a jejich oprávnění.</th>
							<th scope="col">Admin</th>
							<th scope="col">Správce</th>
							<th scope="col">Host</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Login page</th>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
						</tr>
						<tr>
							<th scope="row">Odhlásit</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Nástěnka</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Seznam článků</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Přidání / Mazání / Editace článků</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Seznam Kategorií</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Přidání / Mazání / Editace kategorií</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Seznam Komentářů</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Mazání komentářů</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Seznam CMS stránek</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Přidání / Mazání / Editace CMS stránek</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Úprava kontaktu systému</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Seznam uživatelů</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
						<tr>
							<th scope="row">Přidání / Mazání uživatelů</th>
							<td><i class="fas fa-check text-success"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
							<td><i class="fas fa-times text-danger"></i></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>





';
	}
}
