<?php

declare(strict_types=1);

namespace app\AdminModule\Presenters;

use app\Model\ArticleManager;
use app\Model\CommentManager;

final class DashboardPresenter extends BaseAdminPresenter {

	/** @var ArticleManager */
	private $articleManager;

	/** @var CommentManager  */
	private $commentManager;

	/**
	 * @param ArticleManager $articleManager
	 * @param CommentManager $commentManager
	 */
	public function __construct(ArticleManager $articleManager, CommentManager $commentManager) {
		parent::__construct();
		$this->articleManager = $articleManager;
		$this->commentManager = $commentManager;
	}

	public function renderDefault(): void {
		$this->template->articleTotal = $this->articleManager->getArticlesCount();
		$this->template->commentTotal = $this->commentManager->getCommentCount();
	}

}
