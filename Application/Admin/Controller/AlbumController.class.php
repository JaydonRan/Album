<?php
namespace Admin\Controller;
use Think\Controller;
class AlbumController extends Controller {
	/**
	 * 祖先树
	 * @var unknown
	 */
	protected $tree=array();
	/**
	 * 相册列表
	 */
    public function index(){
    	$root=array('id'=>'0','parent_id'=>'0','title'=>'root','leaf'=>0,'address'=>'','state'=>'1','sone'=>'','parent'=>null);
    	empty($_GET['id']) ? $where=array('parent_id'=>'0') : $where=array('id'=>$_GET['id']);
    	$where['state']=1;
    	$album=D('album');
    	if (!empty($where['id'])){
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->find();
    	}else {
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->select();
    	}	
    	if (empty($_GET['id'])){
    		$root['sone']=$info;
    		$info=$root;
    	}
    	//设置祖先树
    	$this->setParentTree($info['id']);
    	$i=count($this->tree);
    	$j=0;
    	$fTree=array();
    	while ($i) {	
    	    $i--;
    	    $fTree[$j]=$this->tree[$i];
    	    $j++;  	    
    	}
    	//设置session ID
    	session('album_id',$info['id']);
    	$this->assign('tree',$fTree);//祖先树
    	$this->assign('albumData',$info);
    	$this->display();  	 
    }
   /*  public function test(){
    	
    	$id=I('get.id');
    	$hh=$this->getParentTree($id);
    	dump($hh);
    	dump($this->tree);
    } */
    /**
     * 递归得到树的祖宗
     * @param unknown $id
     * @return multitype:\Think\mixed
     */
    public function setParentTree($id){
    	$album=M('album');
    	$info=$album->where('id='.$id)->find();
    	$this->tree[count($this->tree)]=$info;
    	if ($info['parent_id']==0){
    		//arsort($this->tree); //逆向排序   		
    		//return $this->tree;
    	}else {
    		$this->setParentTree($info['parent_id']);
    	}
    }
    /**
     * ajax创建文件夹
     */
    public function addAlbum(){
    	$data['title']=I('get.title');
    	$data['parent_id']=I('get.parent_id');
    	$data['leaf']=0;
    	$album=M('album');
    	$id=$album->add($data);
    	$info=$album->where('id='.$id)->find();
    	//dump($info);
    	$this->ajaxReturn($info);
    } 
    /**
     * ajax删除文件,采用真正的删除
     */
    public function delAlbum(){
    	$id=I('get.id');
    	$where['id']=$id;  	
    	$album=D('album');
    	$info=$album->relation(true)->where($where)->delete();
    	
    	if ($info){
    		$this->ajaxReturn(1);
    	}else {
    		$this->ajaxReturn(0);
    	} 
    }
    
    /**
     * ajax删除文件,文件不是真正的删除，是把的状态变成0，即禁用
     * /
     
    public function delAlbum(){   	
    	$id=I('get.id');   	
    	$where['id']=$id;
    	$where['state']=0;
    	$album=D('album');
    	$info=$album->relation(true)->save($where);
    	if ($info){
    		$this->ajaxReturn(1);
    	}else {
    		$this->ajaxReturn(0);
    	}
    } 
    
    /**
     * 图片上传
     */
    public function webup(){
    	
    	if (!empty($_FILES)){
    		/* dump($_FILES);
    		die(); */
    		//11111上传图片1111111
    		$config = array(
    				'mimes'         =>  array(), //允许上传的文件MiMe类型
    				'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
    				'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
    				'autoSub'       =>  true, //自动子目录保存文件
    				'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
    				'rootPath'      =>  './Public/Uploads/', //保存根路径
    				'savePath'      =>  '',//保存路径
    				 
    		);
    		$upload = new \Think\Upload($config);// 实例化上传类   		    		
    		$info   =   $upload->upload();
    		//dump($info);
    		//22222保存图片222222222
    		$data['title']=$info['file']['name'];  		
    		$data['address']='Public/Uploads/'.$info['file']['savepath'].$info['file']['savename'];//图片的保存路劲
    		$data['md5']=$info['file']['md5'];
    		$data['leaf']=1;
    		$data['uptime']=time();
    		$data['ip']=session('ip');   		
    		$data['parent_id'] = session('album_id'); //这个其实是父级id
    		$album=M('album');
    		//dump($data);
    		$addInfo=$album->add($data);
    		//dump($addInfo);
    		$fdata['hh']="11111";
    		$fdata['id']=$addInfo;
    		$this->ajaxReturn($fdata);
    		//33333333返回信息给前端333333333
    		/* if(!$info) {   			 
    			$this->error($upload->getError());// 上传错误提示错误信息   			 
    		}else{// 上传成功
    			echo '上传成功！';
    		} */
    	}else {
    		$this->display();
    	}	   	
    }
    
    /**
     * 多选相册列表
     */
    public function album(){
    	$root=array('id'=>'0','parent_id'=>'0','title'=>'root','leaf'=>0,'address'=>'','state'=>'1','sone'=>'','parent'=>null);
    	empty($_GET['id']) ? $where=array('parent_id'=>'0') : $where=array('id'=>$_GET['id']);
    	$where['state']=1;
    	$album=D('album');
    	if (!empty($where['id'])){
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->find();
    	}else {
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->select();
    	}
    	if (empty($_GET['id'])){
    		$root['sone']=$info;
    		$info=$root;
    	}
    	//设置祖先树
    	$this->setParentTree($info['id']);
    	$i=count($this->tree);
    	$j=0;
    	$fTree=array();
    	while ($i) {
    		$i--;
    		$fTree[$j]=$this->tree[$i];
    		$j++;
    	}
    	//设置session ID
    	session('album_id',$info['id']);
    	$this->assign('tree',$fTree);//祖先树
    	$this->assign('albumData',$info);
    	$this->display();
    }
    
    /**
     * 单选相册列表
     */
    public function oneAlbum(){
    	//dump($_GET);
    	$root=array('id'=>'0','parent_id'=>'0','title'=>'root','leaf'=>0,'address'=>'','state'=>'1','sone'=>'','parent'=>null);
    	empty($_GET['id']) ? $where=array('parent_id'=>'0') : $where=array('id'=>$_GET['id']);
    	$where['state']=1;
    	$album=D('album');
    	if (!empty($where['id'])){
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->find();
    	}else {
    		$info=$album->relation(true)->where($where)->order(array('leaf','uptime'))->select();
    	}
    	if (empty($_GET['id'])){
    		$root['sone']=$info;
    		$info=$root;
    	}
    	//设置祖先树
    	$this->setParentTree($info['id']);
    	$i=count($this->tree);
    	$j=0;
    	$fTree=array();
    	while ($i) {
    		$i--;
    		$fTree[$j]=$this->tree[$i];
    		$j++;
    	}
    	//设置session ID
    	session('album_id',$info['id']);
    	$this->assign('box_id',$_GET['box_id']);
    	$this->assign('tree',$fTree);//祖先树
    	$this->assign('albumData',$info);
    	$this->display();
    }
}











