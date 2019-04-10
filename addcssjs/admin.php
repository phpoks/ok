<?php
/**
 * 自定义样式<后台应用>
 * @package phpok\plugins
 * @作者 phpok.com
 * @版本 5.2.031
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2019年04月01日 23时33分
**/
class admin_addcssjs extends phpok_plugin
{
	public $me;
	public $path = '';
	public function __construct()
	{
		parent::plugin();
		$this->me = $this->_info();
		$this->path = $this->config['url'].'plugins/addcssjs/template/';
	}

	//后台首页
	public function html_index_index_head(){
		$css = ['addIndexCss.css'];
		$js = ['addIndexJs.js'];
		foreach ($js as $key => $value) {
			echo '	<script type="text/javascript" src="'.$this->path.$value.'"></script>'."\n";
		}
		foreach ($css as $key => $value) {
			echo '	<link rel="stylesheet" href="'.$this->path.$value.'" media="all">'."\n";
		}
	}

	public function addCssJs(){
		$css = ['layuiAdd.css'];
		$js = ['layuiAdd.js'];
		foreach ($js as $key => $value) {
			echo '<script type="text/javascript" src="'.$this->path.$value.'"></script>'."\n";
		}
		foreach ($css as $key => $value) {
			echo '	<link rel="stylesheet" href="'.$this->path.$value.'" media="all">'."\n";
		}
	}

	public function addJs(){
		$js = ['layuiAdd.js'];
		foreach ($js as $key => $value) {
			echo '<script type="text/javascript" src="'.$this->path.$value.'"></script>'."\n";
		}
	}

	public function addOpacity(){
		$js = ['addOpacity.js'];
		foreach ($js as $key => $value) {
			echo '<script type="text/javascript" src="'.$this->path.$value.'"></script>'."\n";
		}
	}

	public function addCss(){
		$css = ['layuiAdd.css'];
		foreach ($css as $key => $value) {
			echo '	<link rel="stylesheet" href="'.$this->path.$value.'" media="all">'."\n";
		}
	}

	//项目页面
	public function html_project_index_head(){
		$this->addCssJs();
	}

	public function html_project_set_head(){
		$this->addCssJs();
	}
	
	//内容页面
	public function html_action_index_head(){
		$this->addCssJs();
	}

	//列表内容页面
	public function html_list_action_head(){
		$this->addCssJs();
	}

	//列表内容页面
	public function html_list_set_head(){
		$this->addCssJs();
	}

	public function html_cate_index_head()
	{
	    $this->addCssJs();
	}

	public function html_all_set_head()
	{
	    $this->addOpacity();
	}

	public function html_module_index_head()
	{
	    $this->addJs();
	}



	/**
	 * 系统内置在</head>节点前输出HTML内容，如果不使用，请删除这个方法
	**/
	public function html_phpokhead()
	{
		$this->addCss();
	}

	
	/**
	 * 全局运行插件，在执行当前方法运行前，调整参数，如果不使用，请删除这个方法
	**/
	public function phpok_before()
	{
		//PHP代码;
	}
	
	/**
	 * 全局运行插件，在执行当前方法运行后，数据未输出前，如果不使用，请删除这个方法
	**/
	public function phpok_after()
	{
		//PHP代码;
	}
	
	
	/**
	 * 系统内置在</body>节点前输出HTML内容，如果不使用，请删除这个方法
	**/
	public function html_phpokbody()
	{
		//$this->_show("phpokbody.html");
	}
	
	/**
	 * 更新或添加保存完主题后触发动作，如果不使用，请删除这个方法
	 * @参数 $id 主题ID
	 * @参数 $project 项目信息，数组
	 * @返回 true 
	**/
	public function system_admin_title_success($id,$project)
	{
		//PHP代码;
	}
	
	
}