<?php

class GroenteController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->groenten = Groenten::find();
    }

}

