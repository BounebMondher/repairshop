<?php
/**
 * Module repairshop
 *
 * @category Prestashop
 * @category Module
 * @author    Mondher Bouneb <bounebmondher@gmail.com>
 * @copyright Mondher Bouneb
 * @license   Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

class AdminRepairsController extends ModuleAdminController{

    public function __construct()
    {
        parent::__construct();
    }

    public function init()
    {
        parent::init();
        $this->bootstrap = true;
    }

    protected function l($string, $class = null, $addslashes = false, $htmlentities = true)
    {
        if (_PS_VERSION_ >= '1.7') {
            return Context::getContext()->getTranslator()->trans($string);
        } else {
            return parent::l($string, $class, $addslashes, $htmlentities);
        }
    }

    public function initContent()
    {

        parent::initContent();
        $this->context->smarty->assign(array());
        $this->setTemplate('repairs.tpl');
    }

}