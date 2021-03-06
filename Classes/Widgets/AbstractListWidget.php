<?php
declare(strict_types=1);

namespace FriendsOfTYPO3\Dashboard\Widgets;

abstract class AbstractListWidget extends AbstractWidget
{
    /**
     * @var array
     */
    protected $items = [];

    protected $iconIdentifier = 'dashboard-bars';

    protected $limit = 5;

    protected $totalItems = 0;

    /**
     * @var string
     */
    protected $templateName = 'ListWidget';

    public function __construct()
    {
        $this->height = 4;
        $this->width = 2;
    }

    /**
     * @return string
     */
    public function renderWidgetContent(): string
    {
        $this->prepareData();
        $this->initializeView();

        $this->view->assign('title', $this->title);
        $this->view->assign('items', $this->items);
        $this->view->assign('totalNumberOfItems', $this->totalItems);

        return $this->view->render();
    }
}
