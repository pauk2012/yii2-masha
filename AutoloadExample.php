<?php

namespace pauko\mashaMarker;
use yii\web\View;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function init()
    {
        Asset::register($this->getView());
        AssetIE::register($this->getView());

    }
    public function run()
    {

    echo       "<div id=\"upmsg-selectable\">
    <div class=\"upmsg-selectable-inner\">
        <img src=\"../src/img/textselect/upmsg_arrow.png\" alt=\"\">
        <p>Вы можете отметить интересные вам фрагменты текста, которые будут доступны по уникальной ссылке в адресной строке браузера.</p>
        <a href=\"#\" class=\"upmsg_closebtn\"></a>
    </div>
</div>
";
        $this->getView()->registerJs("MaSha.instance = new MaSha({'selectable': 'content',
                                    'ignored': '.ignored',
                                    'validate': true});");


/*
        $this->getView()->registerJs("var posts = document.querySelectorAll('td.selectable');
        new MultiMaSha(posts, function(el){
            return el.id;
        }, {
            'validate': true
        })", View::POS_READY);
*/
    }
}
