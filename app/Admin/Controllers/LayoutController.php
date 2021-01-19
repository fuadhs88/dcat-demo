<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Dump;

class LayoutController extends Controller
{
    use PreviewCode;

    public function index(Content $content)
    {
        $tab = $this->buildPreviewTab(function () {
            return $this->desc();
        });

        $content->row($tab->withCard());

        (!request('preview')) && $this->build($content);

        return $content->header('Layout');
    }

    /**
     * layout Example
     *
     * @param Content $content
     */
    protected function build(Content $content)
    {
        // 单行单列
        $content->row($this->card('col-md-12', '#81C784'));

        $content->row($this->br());
        // 一行多列
        $content->row(function (Row $row) {
            $row->column(4, $this->card('col-md-4', '#7986CB'));
            $row->column(4, $this->card('col-md-4', '#7986CB'));
            $row->column(4, $this->card('col-md-4', '#7986CB'));
        });

        $content->row($this->br());
        // 行里面有多个列,列里面再嵌套行
        $content->row(function (Row $row) {
            $row->column(9, function (Column $column) {
                // 一列多行
                $column->row($this->card(['col-md-12', 20], '#4DB6AC'));
                // 行里面再嵌套列
                $column->row(function (Row $row) {
                    $row->column(4, $this->card(['col-md-4', 30], '#80CBC4'));
                    $row->column(4, $this->card(['col-md-4', 30], '#4DB6AC'));
                    $row->column(4, function (Column $column) {
                        $column->row(function (Row $row) {
                            $row->column(6, $this->card(['col-md-6', 30], '#26A69A'));
                            $row->column(6, $this->card(['col-md-6', 30], '#26A69A'));
                        });
                    });
                });
            });

            $row->column(3, $this->card(['col-md-3', 95], '#00897B'));
        });

        $content->row('<br>');
    }

    /**
     * @param $text
     * @param int $height
     * @return string
     */
    protected function p($text, $height = 80)
    {
        return "<p style='height:{$height}px;color:#fff'><span>$text</span></p>";
    }

    /**
     * @return string
     */
    protected function br()
    {
        return "<br>";
    }

    /**
     * @param $text
     * @param string $color
     * @return string
     */
    protected function card($text, $color = '#fff')
    {
        $text = $this->p(...(is_string($text) ? [$text] : $text));

        return <<<EOF
<div style="background:$color;padding:10px 22px 16px;box-shadow:0 1px 3px 1px rgba(34, 25, 25, 0.1);margin-bottom:8px;">
$text
</div>
EOF;

    }

    /**
     * @return string
     */
    protected function desc()
    {
        $dump = Dump::make(
            <<<EOF
<b>Dcat Admin</b> Use the grid system of <b>bootstrap</b> for layout, each row can be divided into <b>12</b> grids (columns), and each grid (column) can also be divided into multiple rows

Single row and single column correspond to the content of the green block below
----------------------------------
| col-md-12                           |
|                                              |
----------------------------------

A single row and three columns correspond to the content of the blue-purple block below
-------------------------------------
| col-md-4  | col-md-4  | col-md-4  |
|                    |                    |               |
-------------------------------------

The most complicated one corresponds to the content of the bottom teal color block
---------------------------------------------------------------------------
| col-md-12                                               | col-md-3      |
|                                                         |               |
|---------------------------------------------------------|               |
| col-md-4        | col-md-4      | col-md-6  | col-md-6  |               |
|                 |               |           |           |               |
---------------------------------------------------------------------------
{                ------> col-md-9 <------                }{--> col-md-3 <--}
 
EOF
        );

        return $dump->style('white-space:pre-wrap;background:#333;color:#fefefe');

    }
}
