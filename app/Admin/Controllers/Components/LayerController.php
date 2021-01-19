<?php

namespace App\Admin\Controllers\Components;

use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Box;
use Dcat\Admin\Widgets\Code;
use Dcat\Admin\Widgets\Dropdown;
use Illuminate\Routing\Controller;

class LayerController extends Controller
{
    protected $positionMap = [
        'rt', 'rb', '100px',
    ];

    protected $btnStyleMap = [
        'success', 'danger', 'warning', 'info',
    ];

    public function index(Content $content)
    {
        $menuBuilder = function ($type, $position) {
            $type = $type == 'danger' ? 'error' : $type;

            return "<a href='javascript:LA.$type(\"layer It is a popular web pop-up component in recent years\", \"$position\")'>$position</a>";
        };

        $menuButtons = array_map(function ($btn) use ($menuBuilder) {
            return Dropdown::make($this->positionMap)
                ->withoutTextButton()
                ->buttonClass("btn btn-$btn")
                ->map(function ($position) use ($btn, $menuBuilder) {
                    return $menuBuilder($btn, $position);
                });
        }, $this->btnStyleMap);

        $content->row(<<<EOF
<p style="margin:20px 0 ">
    <div class="btn-group">
        <a class='btn btn-success' onclick='LA.success("Success")'>LA.success("Success")</a>{$menuButtons[0]}
    </div> &nbsp;
    <div class="btn-group">
        <a class='btn btn-danger' onclick='LA.error("Error")'>LA.error("Error")</a>{$menuButtons[1]}
    </div> &nbsp;
    <div class="btn-group">
        <a class='btn btn-warning' onclick='LA.warning("Warning")'>LA.warning("Warning")</a>{$menuButtons[2]}
    </div> &nbsp;
    <div class="btn-group">
        <a class='btn btn-info' onclick='LA.info("Info")'>LA.info("Info")</a>{$menuButtons[3]}
    </div> &nbsp;
    
    <a class='btn btn-custom' onclick='LA.confirm("confirm?", function(){ LA.success("confirmed") })'>LA.confirm("confirm?", fn)</a>&nbsp;&nbsp;&nbsp;
    
    <a class='btn btn-purple' id="layeropen">iframe popup</a>&nbsp;
</p>
EOF
        );
        Admin::script(<<<EOF
$('#layeropen').click(function () {
    layer.open({
        type: 2,
        title: 'Iframe',
        shadeClose: true,
        shade: false,
        area: ['70%', '80%'],
        content: 'https://www.baidu.com'
    });
});
EOF
        );
        $content->row(Box::make('Code', new Code(__FILE__, 12, 1000))->style('default'));

        $header = 'Layer pop-up layer';

        return $content->header($header);
    }
}
