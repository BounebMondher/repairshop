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

if (!defined('_PS_VERSION_')) {
    exit;
}

class Repairshop extends Module
{
    public function __construct()
    {
        $this->name = 'repairshop';
        $this->author = 'Mondher Bouneb';
        $this->version = '1.0.0';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Repair shop');
        $this->description =$this->l('Keep track of your repairs status, and keep your clients informed in real-time (back office & front office display)');
        $this->ps_version_compliancy = array('min' => '1.6.0.0', 'max'=>'1.7.99.99');
    }

    public function install()
    {
        $sql = array();
        include(dirname(__FILE__).'/sql/install.php');
        foreach ($sql as $s) {
            if (!Db::getInstance()->execute($s)) {
                return false;
            }
        }
        return parent::install() && $this->registerHook('top') && $this->registerHook('header') && $this->createTabLink() ;
    }

    public function uninstall()
    {
        $sql = array();
        include(dirname(__FILE__).'/sql/uninstall.php');
        foreach ($sql as $s) {
            if (!Db::getInstance()->execute($s)) {
                return false;
            }
        }
        return parent::uninstall();
    }

    public function hookTop()
    {

        return $this->display(__FILE__, 'views/templates/hook/top.tpl') ;
    }

    public function hookHeader()
    {
        $this->context->controller->addCSS(array(
            $this->_path.'views/css/repairshop.css'
        ));
        $this->context->controller->addJS(array(
            $this->_path.'views/js/repairshop.js'
        ));
    }

    public function getContent()
    {
        if(Tools::isSubmit('saversvalue'))
        {
            $rsvalue = Tools::getValue('rsvalue');
            Configuration::updateValue('REPAIRSHOP_VALUE',$rsvalue);
        }

        $this->context->smarty->assign(array(
            'REPAIRSHOP_VALUE' => Configuration::get('REPAIRSHOP_VALUE')
        ));

        return $this->display(__FILE__, 'views/templates/admin/configure.tpl') ;
    }

    public function createTabLink()
    {
        $tab=new Tab;
        foreach(Language::getLanguages() as $lang)
        {
            $tab->name[$lang['id_lang']] = $this->l('Repairs');
        }
        $tab->class_name = 'AdminRepairs';
        $tab->module = $this->name;
        if (_PS_VERSION_ >= '1.7')
            $tab->id_parent =    (int)Tab::getIdFromClassName('SELL');
        else
        $tab->id_parent = 0;
        $tab->add();
        return true;
    }

    public function l($string, $class = null, $addslashes = false, $htmlentities = true)
    {
        if (_PS_VERSION_ >= '1.7') {
            return Context::getContext()->getTranslator()->trans($string);
        } else {
            return parent::l($string, $class, $addslashes, $htmlentities);
        }
    }

}