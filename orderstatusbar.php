<?php
declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

class OrderStatusBar extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'orderstatusbar';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Aironas Stunžėnas';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Order Status Bar');
        $this->description = $this->l('Controller decoration so you could display custom order statuses');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('header');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
