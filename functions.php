<?php

//Файл функций, доступных в view без подключения экземпляра контроллера
function debug($arr)
{
   return "<pre>".print_r($arr,true)."</pre>";
}