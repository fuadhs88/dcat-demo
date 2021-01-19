<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Controllers\UserController;

class RowSpaceController extends UserController
{
    use PreviewCode;

    protected $title = 'Table row spacing mode';

    public function grid()
    {
        return parent::grid()
            ->tableCollapse(false)
            ->tools($this->buildPreviewButton());
    }
}
