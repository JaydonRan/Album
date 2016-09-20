<?php
/**
 * 广告管理类
 * @author jaydon <709885041@qq.com>
 */
namespace Admin\Controller;
use Think\Controller;
class AdvertisementController extends Controller {
	
	/**
	 * 广告添加
	 */
	public function add_adv(){
		if (IS_POST){
			$data=I('post.');
			$mAdv=M('advertisement');
			$data['add_time']=date('Y-m-d, H:i:s');
			$id=$mAdv->add($data);
			if ($id){
				$this->redirect('save_adv', array('id' => $id), 3, '<h2>修改成功！</h2><p>跳转中……</p>');
			}else {
				$this->error('添加失败');
			}
		}else {
			$this->display();
		}
		
	}
	
	

}











