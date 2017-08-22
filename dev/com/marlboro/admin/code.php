<?php
global $ENGINE_PATH;
include_once $ENGINE_PATH."Utility/Paginate.php";
class code extends SQLData{
	function __construct($req){
		parent::SQLData();
		$this->Request = $req;
		$this->View = new BasicView();
		//$this->User = new UserManager();
	}
	function admin(){
		$act = $this->Request->getParam('act');
		if( $act == 'redeem-code' ){
			return $this->redeemCode();
		}elseif( $act == 'redeem-history' ){
			return $this->redeemHistory();
		}elseif( $act == 'edit-badge' ){
			return $this->editBadge();
		}elseif( $act == 'edit-badge-form' ){			
			return $this->editBadgeForm();					
		}elseif( $act == 'redeem-request' ){
			return $this->redeemRequest();
		}elseif( $act == 'edit-badgeRequest' ){
			return $this->editBadgeRequest();					
		}elseif( $act == 'edit-badgeRequest-form' ){
			return $this->editBadgeRequestForm();
		}elseif( $act == 'allocation' ){
			return $this->editBadgeAllocation();
		}elseif( $act == 'info' ){
			return $this->code_info();
		}elseif( $act == 'getCSV' ){
			return $this->getCSV();
		}elseif( $act == 'universal' ){
			return $this->universal();
		}elseif( $act == 'edituniversal' ){
			return $this->edituniversal();
		}elseif( $act == 'redeemHistoryPerUser' ){
			return $this->redeemHistoryPerUser();
		}else{
			return $this->codeGenerator();
		}
	}
	function code_info(){
		global $APP_PATH;
		include_once $APP_PATH."marlboro/helper/BadgeHelper.php";;
		$helper = new BadgeHelper('badge_api');
		if(strlen($this->Request->getPost('kode'))>0){
			$response = json_decode($helper->code_info($this->Request->getPost('kode')));
			//{"status":1,"message":"Kode Ditemukan.","data":{"kode":"gvferkcn","type":"one time only","redeemed_by":["377976","358749","364073","369533","378994"],"booked_by":[]}}
			
			if($response->status=="1"){
				$result['status'] = "FOUND";
				$result['info']= array("kode"=>$response->data->kode,"type"=>$response->data->type);
				$result['redeemed_by'] = $response->data->redeemed_by;
				$result['redeemed_time'] = $response->data->redeemed_time;
				$result['booked_by'] = $response->data->booked_by;
			}else{
				$result['status'] = "Not Found";
			}
			
			$this->View->assign("result",$result);
		}
		return $this->View->toString("marlboro/admin/code_info.html");
	}
	function editBadgeAllocation(){
		if($this->Request->getPost('update')){
			$prob_rate = $this->Request->getPost("prob_rate")/100;
			$badge_id = intval($this->Request->getPost("id"));
			$sql = "UPDATE marlboro_code.badge_catalog SET prob_rate=".$prob_rate." WHERE id=".$badge_id;
			if($this->query($sql)){
				$msg = "The Badge allocation has been updated successfully !";
			}else{
				$msg = "Cannot update the allocation, please try again later !";
			}
			$this->View->assign("msg",$msg);
		}
		$sql = "SELECT * FROM marlboro_code.badge_catalog ORDER BY id ASC";
		$rs = $this->fetch($sql,1);
		$this->View->assign("list",$rs);
		return $this->View->toString("marlboro/admin/allocation.html");
	}
	function codeGenerator(){
		include_once "../../api/bootstraps.php";
		if($_REQUEST['amount']!=NULL){
			$req = http_build_query($_REQUEST);
			$url=$service_uri.'?method=generate_code&'.$req;
			$resp = file_get_contents($url);
			//print $url;
			
			$rs = json_decode($resp);
			if(is_array($rs->data)):
				$no=1;
				$code = "";
				foreach($rs->data as $data):
					$code .= '<tr>';
					$code .= '<td>'.$no.'</td>';
					$code .= '<td>'. $data.'</td>';
					$code .= '</tr>';
					$no++;
				endforeach;
			endif;
			
			$this->View->assign('code',$code);
		}
		
		return $this->View->toString("marlboro/admin/code.html");
	}

	function redeemCode(){
		$channel = intval($this->Request->getParam('channel'));
		$where_channel = ($channel == 0) ? '' : " AND channel='$channel' ";
		
		$start = intval($this->Request->getParam('st'));
		$qry = "SELECT count(*) total FROM marlboro_code.badge_code b LEFT JOIN marlboro_code.badge_channel c ON b.channel=c.channel_id WHERE 1 $where_channel;";
		$list = $this->fetch($qry);
		$total = $list['total'];
		$total_per_page = 50;
		
		$qry = "SELECT b.*,c.channel_name FROM marlboro_code.badge_code b LEFT JOIN marlboro_code.badge_channel c ON b.channel=c.channel_id WHERE 1 $where_channel LIMIT $start,$total_per_page;";
		$list = $this->fetch($qry,1);
		$this->View->assign('list',$list);
		
		$this->Paging = new Paginate();
		$this->View->assign("paging",$this->Paging->getAdminPaging($start, $total_per_page, $total, "?s=code&act=redeem-code&channel=$channel"));
		
		$qry = "SELECT * FROM marlboro_code.badge_channel";
		$ch = $this->fetch($qry,1);
		$this->View->assign('ch',$ch);
		$this->View->assign('channel',$channel);
		
		return $this->View->toString("marlboro/admin/redeem-code.html");
	}
	
	function redeemHistory(){
		
		$start = intval($this->Request->getParam('st'));
		$qry = "SELECT count(*) total FROM marlboro_code.badge_redeem r LEFT JOIN marlboro_code.badge_inventory i ON r.id=i.redeem_id WHERE r.id IS NOT NULL AND i.id IS NOT NULL;";
		$list = $this->fetch($qry);
		$total = $list['total'];
		$total_per_page = 50;
		
		$qry = "SELECT * FROM marlboro_code.badge_redeem r LEFT JOIN marlboro_code.badge_inventory i ON r.id=i.redeem_id WHERE r.id IS NOT NULL AND i.id IS NOT NULL LIMIT $start,$total_per_page;";
		$list = $this->fetch($qry,1);
		$this->View->assign('list',$list);
		
		$this->Paging = new Paginate();
		$this->View->assign("paging",$this->Paging->getAdminPaging($start, $total_per_page, $total, "?s=code&act=redeem-history"));
		
		return $this->View->toString("marlboro/admin/redeem-history.html");
	}
	
	function editBadge(){
		$code = $_GET['code'];
		$save = intval($_GET['save']);
		
		if($code != ""){
			$code = str_replace(' ','',$code);
			$code = str_replace(',','\',\'',$code);
			$qry = "SELECT * FROM marlboro_code.badge_code WHERE kode IN ('$code');";
			//echo $qry;exit;
			$list = $this->fetch($qry,1);
			$this->View->assign('list',$list);
			$this->View->assign('search','1');
		}elseif($save==1){			
			$kd = $_GET['kd'];
			$start = $_GET['start'];
			$end = $_GET['end'];
			//$start = mysql_escape_string($_GET['start']);
			//$end = mysql_escape_string($_GET['end']);

				for ($i = 0; $i < count($kd); $i++) {	
				  $qry = "UPDATE marlboro_code.badge_code SET start_date='".$start[$i]."', end_date='".$end[$i]."' WHERE kode='".$kd[$i]."';";
				  //echo $qry;
				  $updt = $this->query($qry);
				}
			
			if($updt){
				return $this->View->showMessage('Edit success','index.php?s=code&act=edit-badge');
			}else{
					return $this->View->showMessage('Edit failed','index.php?s=code&act=edit-badge');
				
				 }
		}
		return $this->View->toString("marlboro/admin/edit-badge.html");
	}
	
	function editBadgeForm(){
		$code = $_GET['code'];
		$edit = intval($_GET['edit']);
		if($edit==1){
			$start = mysql_escape_string($_GET['start']);
			$end = mysql_escape_string($_GET['end']);
			$qry = "UPDATE marlboro_code.badge_code SET start_date='$start', end_date='$end' WHERE kode='$code';";
			//echo $qry;exit;
			if($this->query($qry)){
				return $this->View->showMessage('Edit success','index.php?s=code&act=edit-badge');
			}else{
				return $this->View->showMessage('Edit failed','index.php?s=code&act=edit-badge');
			}
		}
		$qry = "SELECT * FROM marlboro_code.badge_code WHERE kode='$code';";
		$list = $this->fetch($qry);
		$this->View->assign('list',$list);
		return $this->View->toString("marlboro/admin/edit-badge-form.html");
	}
	
	function redeemRequest(){
		
		$start = intval($this->Request->getParam('st'));
		$qry = "SELECT COUNT(*) total 
				FROM social_member a
				RIGHT JOIN social_redeem b 
				ON a.register_id=b.register_id ;";
		$list = $this->fetch($qry);
		$total = $list['total'];
		$total_per_page = 50;
		
		$qry = "SELECT 
					b.id as id,
					a.register_id as regid,
					name AS Nama,
					prize AS Prize,
					submit_date AS Tanggal,
					b.n_status AS Status,
					tshirt_type AS TypeTshirt,
					tshirt_size AS SizeTshirt 
				FROM social_member a
				RIGHT JOIN social_redeem b 
				ON a.register_id=b.register_id
				LIMIT $start,$total_per_page;";
		//echo $qry;	
		$list = $this->fetch($qry,1);
		$this->View->assign('list',$list);		
		$this->Paging = new Paginate();
		$this->View->assign("paging",$this->Paging->getAdminPaging($start, $total_per_page, $total, "?s=code&act=redeem-request"));		
		return $this->View->toString("marlboro/admin/redeem-request.html");
	}
	
	function editBadgeRequest(){
		$id = $this->Request->getParam('id');	
		$regid = $this->Request->getParam('regid');	
		$qry = "SELECT 
					b.id as id,
					a.register_id as regid,
					a.name AS Nama,
					b.street AS Street, 
					b.complex AS Complex, 
					b.province AS Province, 
					b.city AS City,
					b.prize AS Prize, 
					b.phone AS Phone, 
					b.mobile AS Mobile,
					b.Prize AS Prize, 
					b.submit_date AS Tanggal, 
					b.n_status AS Status,
					b.transaction_id
				FROM social_member a
				INNER JOIN social_redeem b 
				ON b.id='$id' AND a.register_id='$regid' LIMIT 1 ;";
		//echo $qry;		
		$r = $this->fetch($qry);		
		$this->View->assign("id", $r['id']);
		$this->View->assign("regid", $r['regid']);
		$this->View->assign("Nama", $r['Nama']);
		$this->View->assign("Street", $r['Street']);
		$this->View->assign("Complex", $r['Complex']);	
		$this->View->assign("Province", $r['Province']);	
		$this->View->assign("City", $r['City']);		
		$this->View->assign("Prize", $r['Prize']);	
		$this->View->assign("Phone", $r['Phone']);
		$this->View->assign("Mobile", $r['Mobile']);	
		$this->View->assign("Prize", $r['Prize']);	
		$this->View->assign("Tanggal", $r['Tanggal']);		
		$this->View->assign("Status", $r['Status']);
		$this->View->assign("transaction_id", $r['transaction_id']);		
		return $this->View->toString("marlboro/admin/edit-badgeRequest-form.html");
	}
	
	function editBadgeRequestForm(){
		$edit = intval($_GET['edit']);
		$id = intval($_GET['id']);
		$Status = intval($_GET['Status']); 
		if($edit==1 && $Status > 0){
			global $APP_PATH;
			include_once $APP_PATH.'marlboro/helper/codeHelper.php';
			include_once $APP_PATH.'marlboro/helper/BadgeHelper.php';
			//$codeHelper = new codeHelper($_GET['regid']);
			$badgeHelper = new BadgeHelper('badge_api');
			//$codeHelper->getBadgeRequestForPrize($_GET['prize']);
			//$codeHelper->checkBadgeRequestForPrize($_GET['prize']);
			$que = "SELECT n_status FROM social_redeem WHERE id=$id LIMIT 1;";
			$rs = $this->fetch($que);
			$nstatus=$rs['n_status'];
					if($nstatus==0){
						
						if( $Status == 1){
							//Status Approve
							//if($codeHelper->checkAllowRequestForPrize()){
								$qry = "UPDATE social_redeem SET n_status='$Status' WHERE social_redeem.id='$id';";
								if($this->query($qry)){
									$res = json_decode($badgeHelper->approve_redeem($_GET['regid'],$_GET['transaction_id']));
									return $this->View->showMessage('Edit Success','index.php?s=code&act=redeem-request');
								}else{
									return $this->View->showMessage('Edit Failed','index.php?s=code&act=redeem-request');
								} 
							//}else{
								//return $this->View->showMessage('Don\'t have enough badges!','index.php?s=code&act=redeem-request');
							//}
						}elseif($Status == 2){
							//Status cancel
							$res = json_decode($badgeHelper->cancel_redeem($_GET['regid'],$_GET['transaction_id']));
							if($res->status == 1){
								$qry = "UPDATE social_redeem SET n_status='$Status' WHERE social_redeem.id='$id';";
								if($this->query($qry)){
									return $this->View->showMessage('Edit Success','index.php?s=code&act=redeem-request');
								}else{
									return $this->View->showMessage('Edit Failed','index.php?s=code&act=redeem-request');
								}
							}else{
								return $this->View->showMessage('Edit Failed','index.php?s=code&act=redeem-request');
							}
						}
					}
		}
		return $this->View->toString("marlboro/admin/edit-badgeRequest-form.html");
	}
	
	function getCSV(){
		$data = $_GET['data'];
		
		if($data != ''){
			$filename = "report_".$data."_".date("YmdHis").".csv";
			header("Content-type: application/force-download");
			header("Content-Disposition: attachment; filename=\"".$filename."\"");
			
			if($data == 'redeem-history'){
				$sql = "SELECT * FROM marlboro_code.badge_redeem r LEFT JOIN marlboro_code.badge_inventory i ON r.id=i.redeem_id WHERE r.id IS NOT NULL AND i.id IS NOT NULL;";
				$rs = $this->fetch($sql,1);
				//print_r($rs);exit;
				$str = "\"Redeem Time\";\"User ID\";\"Kode\";\"Badge ID\"\r\n";
				foreach($rs as $d){
					$str.="\"".$d['redeem_time']."\";\"".$d['user_id']."\";\"".$d['kode']."\";\"".$d['badge_id']."\"\r\n";
				}
			}
			elseif($data == 'redeem_request'){
				
				$qry = "SELECT 
							b.id as id,
							a.register_id as regid,
							name AS Nama,
							prize AS Prize,
							submit_date AS Tanggal,
							b.n_status AS Status,
							tshirt_type AS TypeTshirt,
							tshirt_size AS SizeTshirt,
							b.street,
							b.complex,
							b.city,
							b.province
						FROM social_member a
						RIGHT JOIN social_redeem b 
						ON a.register_id=b.register_id;";
				//echo $qry;	
				$rs = $this->fetch($qry,1);
				$str = "\"Nama User\";\"Reg ID\";\"Prize\";\"Tanggal\";\"Remark\";\"Status\";\"Street\";\"Complex\";\"City\";\"Province\"\r\n";
				foreach($rs as $d){
					
					if($d['Prize'] =="berlin-prize-brief"){
						$r = $d['TypeTshirt'].', '.$d['SizeTshirt'];
					}elseif($d['Prize'] == "new-york-prize-brief-1"){
						$r = 'Samsung Galaxy SII smart phone';
					}elseif($d['Prize'] =="new-york-prize-brief-2"){
						$r='Samsung Galaxy 10.1 tablet';
					}elseif($d['Prize'] =="instanbul-prize-brief"){
						$r='VIP experience'; 
					}
					
					$status = '-';
					if( intval($d['Status']) == 1){
						$status = 'Approve';
					}elseif(intval($d['Status']) == 2){
						$status = 'Cancel';
					}
					
					$str.="\"".$d['Nama']."\";\"".$d['regid']."\";\"".$d['Prize']."\";\"".$d['Tanggal']."\";\"".$r."\";\"".$status."\";\"".$d['street']."\";\"".$d['complex']."\";\"".$d['city']."\";\"".$d['province']."\"\r\n";
				}
			}
			
			header("Content-Length: ".strlen($str));
			print $str;
			die();
		}
	}

	function redeemHistoryPerUser(){
		$id = intval($this->Request->getParam('id'));
		$regid = intval($this->Request->getParam('regid'));
		
		$sql = "SELECT 
						t.*,
						r.redeem_id,
						br.kode,
						bc.name badge_name
					FROM 
						marlboro_code.merchandise_transaction t
						INNER JOIN marlboro_code.merchandise_redeem r
						ON t.id=r.transaction_id
						INNER JOIN marlboro_code.badge_redeem br
						ON r.redeem_id=br.id 
						INNER JOIN marlboro_code.badge_catalog bc
						ON r.badge_id=bc.id
					WHERE 
						t.user_id='$regid';";
		
		$rs = $this->fetch($sql,1);
		
		//print_r($rs);exit;
		
		$badge = array();
		$i = 0;
		$idx = -1;
		
		foreach($rs as $k){
			if($i != $k['id']){
				$idx++;
				$badge[$idx] = array();
				$i = $k['id'];
			}
			
			$badge[$idx][] = array('kode' => $k['kode'], 'name' => $k['badge_name']);
			
		}
		
		//print_r($badge);
		//exit;
		
		$this->View->assign('list',$rs);
		$this->View->assign('badge',$badge);
		
		return $this->View->toString("marlboro/admin/redeemHistoryPerUser.html");
	}
	
	function universal(){
	
		$sql = "SELECT 
						c.kode,
						c.cap,
						k.total
					FROM 
						marlboro_code.universal_cap c
						LEFT JOIN (SELECT COUNT(*) AS total, kode FROM marlboro_code.badge_redeem GROUP BY kode) k
						ON c.kode=k.kode;";
		$rs = $this->fetch($sql,1);
		
		$this->View->assign('list',$rs);
		
		return $this->View->toString("marlboro/admin/universal.html");
		
	}
	
	function edituniversal(){
	
		$kode = $this->Request->getParam('kode');
		
		if(intval($_POST['edit']) == 1){
		
			$cap = intval($_POST['cap']);
			
			$sql = "UPDATE marlboro_code.universal_cap SET cap='$cap' WHERE kode='$kode'";
			
			if($this->query($sql)){
				return $this->View->showMessage('Success','index.php?s=code&act=universal');
			}else{
				return $this->View->showMessage('Failed','index.php?s=code&act=universal');
			}
			
		}
	
		$sql = "SELECT * FROM marlboro_code.universal_cap WHERE kode='$kode';";
		$rs = $this->fetch($sql);
		$this->View->assign('list',$rs);
		
		return $this->View->toString("marlboro/admin/edituniversal.html");
		
	}
}