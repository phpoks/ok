<?php
/**
 * 自定义样式<插件安装>
 * @package phpok\plugins
 * @作者 phpok.com
 * @版本 5.2.031
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2019年04月01日 23时33分
**/
class install_addcssjs extends phpok_plugin
{
	public $me;
	public function __construct()
	{
		parent::plugin();
		$this->me = $this->_info();
	}
	
	/**
	 * 插件安装时，增加的扩展表单输出项，如果不使用，请删除这个方法
	**/
	public function index()
	{
		return $this->_tpl('setting.html');
	}
	
	/**
	 * 插件安装时，保存扩展参数，如果不使用，请删除这个方法
	**/
	public function save()
	{
		$id = $this->_id();
		$ext = array();
		$ext['notebook'] = $this->get('notebook');
		$ext['linecolor'] = $this->get('linecolor');
		$ext['linebool'] = $this->get('linebool');
		$this->_save($ext,$id);
	}
	
	
}