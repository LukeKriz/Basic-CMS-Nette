<?php

declare(strict_types=1);

namespace app\FrontModule\Presenters;

use app\Model\CmsManager;

final class HomepagePresenter extends BaseFrontPresenter {

    public function renderDefault(): void {
        $this->template->article = $this->cmsManager->getHomePage();
    }

}
