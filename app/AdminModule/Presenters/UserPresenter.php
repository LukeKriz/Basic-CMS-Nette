<?php

declare(strict_types=1);

namespace app\AdminModule\Presenters;

use app\Model\UserManager;
use Nette\Application\AbortException;
use Nette\Application\UI\Form;
use app\Forms\SignUpFormFactory;

class UserPresenter extends BaseAdminPresenter {

	private const PASSWORD_MIN_LENGTH = 6;

	private $userManager;
	private $signUpFormFactory;

	public function __construct(UserManager $userManager, SignUpFormFactory $signUpFormFactory) {
		parent::__construct();

		$this->userManager = $userManager;
		$this->signUpFormFactory = $signUpFormFactory;
	}

	public function renderList() {
		$this->template->users = $this->userManager->getUsers();
	}

	public function actionRemove(int $id = null) {
		$this->userManager->removeUser($id);
		$this->flashMessage('Uživatel byl úspešně odstraněn');
		$this->redirect('User:list');
	}

	protected function createComponentSignUpForm(): Form {
		return $this->signUpFormFactory->create(function(): void {
					$this->redirect('User:list');
				});
	}

}

