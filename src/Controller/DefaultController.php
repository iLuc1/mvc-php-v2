<?php
namespace src\Controller;

use core\Controller\Controller;
use src\Services\MessageService;

class DefaultController extends Controller {

    /**
     * (Route=/default)
     * (View="View/index.html)
     */
    public function indexAction()
    {
        /** @var MessageService $messageService */
        $messageService = $this->getService("src/Services/MessageService");
        $messageService->setMessage(MessageService::ERROR, 'testando serviço...');
    }


}