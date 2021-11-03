<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function dataAction()
    {
        $data = new \Application\Model\Data();
        return new ViewModel([
            'dzisiaj' => $data->dzisiaj(),
            'dni_tygodnia' => $data->dniTygodnia(),
        ]);
    }

    public function miesiaceAction(){
        $miesiace = new \Application\Model\Miesiace();
        return new ViewModel([
            'miesiace' => $miesiace->pobierzWszystkie()
        ]);
    }

    public function liczbyAction(){
        $data = new \Application\Model\Liczby();
        $val = $data->generuj();
        return new ViewModel([
            'parzyste' =>  $val[0],
            'nieparzyste' =>  $val[1]
        ]);
    }
}
