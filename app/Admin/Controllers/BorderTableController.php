<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\UserProfile;
use App\Admin\Renderable\PostTable;
use App\Admin\Renderable\UserTable;
use App\Admin\Repositories\Report;
use App\Http\Controllers\Controller;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Callout;

class BorderTableController extends Controller
{
    use PreviewCode;

    public function index(Content $content)
    {
        return $content
            ->header('Border mode')
            ->description('Border mode + asynchronous loading function demonstration')
            ->body($this->grid());
    }

    protected function grid()
    {
        return new Grid(new Report(), function (Grid $grid) {
            $grid->name;
            $grid->content->limit(50);
            $grid->avgMonthCost->display('Asynchronous form')->modal('Popup title', UserProfile::make());
            $grid->avgYearCost->display('Asynchronous form')->modal('Popup title', UserTable::make());
            $grid->avgYearVist->hide();
            $grid->incrs;
            $grid->date->sortable();
            $grid->created_at;

            $grid->tools($this->buildPreviewButton());

            $grid->tableCollapse(false);

            $grid->withBorder();

            $grid->disableActions();
            $grid->disableBatchDelete();
            $grid->disableCreateButton();
            $grid->disableCreateButton();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->scope(1, admin_trans_field('month'))->where('date', 2019, '<=');
                $filter->scope(2, admin_trans_label('quarter'))->where('date', 2019, '<=');
                $filter->scope(3, admin_trans_label('year'))->where('date', 2019, '<=');

                $filter->equal('content');
                $filter->equal('cost');
            });
        });
    }
}
