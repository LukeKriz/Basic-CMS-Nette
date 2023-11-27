<?php

declare(strict_types = 1);

namespace app\AdminModule\Presenters;

use app\Model\ContactManager;
use Nette\Application\UI\Form;
use Tomaj\Form\Renderer\BootstrapVerticalRenderer;

class SettingPresenter extends BaseAdminPresenter{

	private $contactManager;


	public function __construct(ContactManager $contactManager) {
		parent::__construct();
		$this->contactManager = $contactManager;
	}

	public function renderContact(){
		$this->template->contact = $this->contactManager->getContact();
	}

	public function actionEditor(int $id = null){
		if($id){
			if(!($contact = $this->contactManager->getContactById($id))){
				$this->flashMessage("Kontakt byl nalezen");
			}else{
				$this['editorForm']->setDefault($contact);
			}
		}
	}


	protected function createComponentEditorForm(): Form {
        $form = new Form;
        $form->setRenderer(new BootstrapVerticalRenderer);
        $form->addHidden('id');
        $form->addText('company', 'Společnost')->setRequired();
        $form->addText('street', 'Ulice')->setRequired();
        $form->addText('house_number', 'Číslo popisné')->setRequired();
        $form->addText('zip', 'PSČ')->setRequired();
        $form->addText('city', 'Město')->setRequired();
        $form->addText('state', 'Stát')->setRequired();
        $form->addText('email', 'Email')->setRequired();
        $form->addText('phone', 'Telefon')->setRequired();
        $form->addSubmit('save', 'Uložit kontakt');
        $form->onSuccess[] = function (Form $form, Array $values) {
            try {
                $this->contactManager->saveContact($values);
                $this->flashMessage('Kontakt byl úspěšně uložen.');
                $this->redirect('Setting:contact');
            } catch (UniqueConstraintViolationException $e) {
                $this->flashMessage('Kontakt již existuje.');
            }
        };
        return $form;
    }


}