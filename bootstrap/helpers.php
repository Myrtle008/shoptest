<?php
//路由替换成CSS样式
function route_class() {
	return str_replace('.', '-', Route::currentRouteName());
}