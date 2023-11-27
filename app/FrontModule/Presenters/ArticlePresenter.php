<?php


declare(strict_types=1);

namespace app\FrontModule\Presenters;

use app\Model\CategoryManager;
use app\Model\ArticleManager;
use app\Model\CommentManager;
use app\Components\Comments;

/**
 * @package App\FrontModule\Presenters
 */
class ArticlePresenter extends BaseFrontPresenter {

    /** @var int */
    private $article_id;

    /** @var ArticleManager */
    private $articleManager;

    /** @var CommentManager */
    private $commentManager;

    /**
     * @param ArticleManager $articleManager
     * @param CommentManager $commentManager
     */
    public function __construct(
            ArticleManager $articleManager,
            CommentManager $commentManager) {
        parent::__construct();
        $this->articleManager = $articleManager;
        $this->commentManager = $commentManager;
    }

    public function actionDetail(int $id) {
        $this->article_id = $id;
    }

    public function renderDefault(string $url) {
        $parameters = $this->getParameters();
        if ($url && ($category = $this->categoryManager->getCategory($url))) {
            $parameters['category_id'] = $category->id;
        } elseif ($url) {
            $this->flashMessage('Zvolená kategorie neexistuje.');
            $this->redirect(':Front:Homepage:');
        }
        $products = $this->articleManager->getArticles($parameters);
        $this->template->categoryName = isset($category) ? $category->name : 'Články';
        $this->template->articles = $products;
    }

    public function renderDetail(int $id) {
        try {
            $this->template->article = $this->articleManager->getArticleFromId($id);
        } catch (\Exception $e) {
            $this->error('Článek nebyl nalezen');
        }
    }

    public function createComponentComments(): Comments {
        return new Comments($this->commentManager, $this->article_id);
    }

}
