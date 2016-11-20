<?php

namespace Kanboard\Plugin\Instantactions;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:board:task:footer', 'Instantactions:layout/footer');
    }

    public function getPluginName()
    {
        return 'Instantactions';
    }

    public function getPluginDescription()
    {
        return t('This plugin adds instant actions to tasks in the board view.');
    }

    public function getPluginAuthor()
    {
        return 'Mehari, Reith';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Alokaado/instant_remove';
    }
}
?>
