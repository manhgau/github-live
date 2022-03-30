<?php
class controller {
    protected $layout ="main";    
    
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){                      
        ob_start();  
        if(is_array($data) && count($data) > 0){      
            foreach($data as $k=>$v){                     
                ${$k} = $v;
            }
        }
        
        require_once "./mvc/views/".$view.".php";
        $page_content = ob_get_contents();
        ob_get_clean();
        require_once "./mvc/views/layouts/".$this->layout.".php";
    }

}
?>