<?php
class app {
    protected $controller ="home";    
    protected $action ="allproducts";
    protected $params =[];
    function __construct () {
        $arr = $this->UrlProcess();
        // xử lý controller
        // file_exists kiểm tra file có tồn tại    
        if(isset($arr[0]) && file_exists("./mvc/controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            $this->controllerId = $arr[0];
            unset($arr[0]);
        }       
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        // xử lý action
        if (isset($arr[1])){
            if (method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }                
        // echo $this->action;
        // xử lý params
        $this->params = $arr?array_values($arr):[];
// gọi màn hình lên
// call_user_func_array([tên lớp, tên hàm],tham số truyền vào)
        call_user_func_array([$this->controller, $this->action],$this->params);
    }
    function UrlProcess(){
        // cắt khoảng trống
        if( isset($_GET['url'])){
            return explode("/", filter_var(trim($_GET['url'])));
        }
    }
}
?>
