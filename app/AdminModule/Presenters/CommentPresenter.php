<?php


declare(strict_types=1);

namespace app\AdminModule\Presenters;

use app\Model\CommentManager;
use Nette\Application\AbortException;

class CommentPresenter extends BaseAdminPresenter {

    /** @var CommentManager */
    private $commentManager;

    /**
     * @param CommentManager $commentManager
     */
    public function __construct(CommentManager $commentManager) {
        parent::__construct();
        $this->commentManager = $commentManager;
    }

    public function renderList() {
        $this->template->comments = $this->commentManager->getAllComments();
    }

    public function actionDelete(int $id = null) {
        $this->commentManager->deleteComment($id);
        $this->flashMessage('Komentář byl úspěšně odstraněn.');
        $this->redirect('Comment:list');
    }
}
