<?php
class filter{
    /**
     * 过滤类
     */
    //需要验证的数据
    protected $field;
    //错误信息
    protected  $err=[];
    //需要验证的数据
    function field($data)
    {
        $this->field=$data;
        return $this;
    }
    function required($err='')
    {
        if (empty($this->field))
        {
            $this->err[]=empty($err) ? $this->field ."不能为空" : $err;
        }
        return $this;
    }
    //邮箱验证
    function checkEmail($err=''){
        echo "check email...";
        echo "<pre>";
    if (filter_var($this->field,FILTER_VALIDATE_EMAIL)==false){
        $this->err[]=empty($err) ? "邮箱格式不正确" : $err;
    }
        return $this;

    }
    function checkPhoneNumber($err=''){
        echo "check phone number...";
        if (!preg_match('/^\d{11}$/',$this->field)){
            $this->err[]=empty($err) ? "电话格式不正确" : $err;
        }
        return $this;
    }
    function checkIdentity($err=''){
        $preg='/^(\d{15}|\d{18})$';
        echo "check identity...";
        if (!preg_match($preg,$this->field)){
            $this->err[]=empty($err) ? "身份证格式错误" : $err;
        }
        return $this;
    }
    //获取
    function get()
    {
        if (empty($this->err))
        {
            return true;
        }
        return $this->err;
    }

}


echo "<pre>";
echo "filterclass";

?>

