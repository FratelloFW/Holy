<?php

namespace Holy;

class Core{
    protected $template;
    protected $variables;
    private $prepared;

    public function ValParser(){
        $template_to_line = explode("\n", $this->template);
        foreach($template_to_line as $line){
            $result = $this->GatheringValFunc($line, false);
        }
    }

    public function FuncParser(){

    }

    public function GatheringValFunc(string $line, bool $type){
        if($type){
            $pattern = '/\{\%.+?\%\}/';
        }else{
            $pattern = '/\{\{.+?\}\}/';
        }
        preg_match_all($pattern, $line, $match);

        return $match;
    }
}