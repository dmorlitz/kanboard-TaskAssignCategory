<?php
namespace Kanboard\Plugin\TaskAssignCategory;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskAssignCategory\Action\TaskAssignCategory;
class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskAssignCategory($this->container));
    }
    public function getPluginName()
    {
        return 'TaskAssignCategory';
    }

    public function getPluginDescription()
    {
        return t('Automatically assign a category when a task is moved to a specific column');
    }

    public function getPluginAuthor()
    {
        return 'David Morlitz';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/dmorlitz/kanboard-TaskAssignCategory';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.5';
    }
}
