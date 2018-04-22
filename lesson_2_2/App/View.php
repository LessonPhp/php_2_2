<?php

namespace App;


class View
{

    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        return $this->render($template);
    }
}