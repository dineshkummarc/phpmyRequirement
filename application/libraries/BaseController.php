<<<<<<< HEAD
<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 
/**
 * Class : BaseController (BaseController)
 * @author : Samet Aydın / sametay153@gmail.com
 * @version : 1.0
 * @since : 27.02.2018
 */
class BaseController extends CI_Controller {
	// User session variables
=======
<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

// require APPPATH . '/third_party/vendor/autoload.php';
require_once(APPPATH.'/third_party/screen/autoload.php');

/**
 * Class : BaseController
 * Base Class to control over all the classes
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class BaseController extends CI_Controller {
>>>>>>> old2/master
	protected $role = '';
	protected $vendorId = '';
	protected $name = '';
	protected $roleText = '';
	protected $global = array ();
	protected $lastLogin = '';
<<<<<<< HEAD
	protected $status = '';
=======
>>>>>>> old2/master
	
	/**
	 * Takes mixed data and optionally a status code, then creates the response
	 *
	 * @access public
	 * @param array|NULL $data
	 *        	Data to output to the user
	 *        	running the script; otherwise, exit
	 */
	public function response($data = NULL) {
		$this->output->set_status_header ( 200 )->set_content_type ( 'application/json', 'utf-8' )->set_output ( json_encode ( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) )->_display ();
		exit ();
	}
	
	/**
	 * This function used to check the user is logged in or not
	 */
	function isLoggedIn() {
		$isLoggedIn = $this->session->userdata ( 'isLoggedIn' );
		
		if (! isset ( $isLoggedIn ) || $isLoggedIn != TRUE) {
			redirect ( 'login' );
		} else {
<<<<<<< HEAD
			$this->datas();
		}
	}
	/**
	 * This function is used to check the admin access
	 * Rol definetions in application/config/constants.php
=======
			$this->role = $this->session->userdata ( 'role' );
			$this->vendorId = $this->session->userdata ( 'userId' );
			$this->name = $this->session->userdata ( 'name' );
			$this->roleText = $this->session->userdata ( 'roleText' );
			$this->lastLogin = $this->session->userdata ( 'lastLogin' );
			
			$this->global ['name'] = $this->name;
			$this->global ['role'] = $this->role;
			$this->global ['role_text'] = $this->roleText;
			$this->global ['last_login'] = $this->lastLogin;
		}
	}
	
	/**
	 * This function is used to check the access
>>>>>>> old2/master
	 */
	function isAdmin() {
		if ($this->role != ROLE_ADMIN) {
			return true;
		} else {
			return false;
		}
	}
<<<<<<< HEAD

	/**
	 * This function is used to check the manager access
	 * Rol definetions in application/config/constants.php
	 */
	function isManagerOrAdmin() {
		if ($this->role == ROLE_ADMIN || $this->role == ROLE_MANAGER) {
			return false;
		} else {
			return true;
		}
	}

	/**
	 * This function is used to get the user's status from the user table
	 */
	function getUserStatus() {
		$this->datas();
		$status = $this->user_model->getUserStatus($this->vendorId);
		if($status->status == 0)
		{
			return true;
		}else {
			return false;
		}
	}

	/**
	 * This function is used to view no access view
	 */
	public function accesslogincontrol()
    {
            $process = 'Erişim Reddi';
            $processFunction = 'Admin/accesslogincontrol';
            $this->logrecord($process,$processFunction);

            redirect(noaccess);
    }
=======
	
	/**
	 * This function is used to check the access
	 */
	function isTicketter() {
		if ($this->role != ROLE_ADMIN || $this->role != ROLE_MANAGER) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * This function is used to load the set of views
	 */
	function loadThis() {
		$this->global ['pageTitle'] = 'DINESHKUMMARC : Access Denied';
		
		$this->load->view ( 'includes/header', $this->global );
		$this->load->view ( 'access' );
		$this->load->view ( 'includes/footer' );
	}
>>>>>>> old2/master
	
	/**
	 * This function is used to logged out user from system
	 */
	function logout() {
<<<<<<< HEAD

		$process = 'Çıkış';
        $processFunction = 'BaseController/logout';
        $this->logrecord($process,$processFunction);

=======
>>>>>>> old2/master
		$this->session->sess_destroy ();
		
		redirect ( 'login' );
	}

	/**
     * This function used to load views
     * @param {string} $viewName : This is view name
     * @param {mixed} $headerInfo : This is array of header information
     * @param {mixed} $pageInfo : This is array of page information
     * @param {mixed} $footerInfo : This is array of footer information
     * @return {null} $result : null
     */
    function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL){

        $this->load->view('includes/header', $headerInfo);
        $this->load->view($viewName, $pageInfo);
        $this->load->view('includes/footer', $footerInfo);
    }
	
	/**
	 * This function used provide the pagination resources
	 * @param {string} $link : This is page link
	 * @param {number} $count : This is page count
	 * @param {number} $perPage : This is records per page limit
	 * @return {mixed} $result : This is array of records and pagination data
	 */
	function paginationCompress($link, $count, $perPage = 10, $segment = SEGMENT) {
		$this->load->library ( 'pagination' );

		$config ['base_url'] = base_url () . $link;
		$config ['total_rows'] = $count;
		$config ['uri_segment'] = $segment;
		$config ['per_page'] = $perPage;
		$config ['num_links'] = 5;
		$config ['full_tag_open'] = '<nav><ul class="pagination">';
		$config ['full_tag_close'] = '</ul></nav>';
		$config ['first_tag_open'] = '<li class="arrow">';
		$config ['first_link'] = 'First';
		$config ['first_tag_close'] = '</li>';
		$config ['prev_link'] = 'Previous';
		$config ['prev_tag_open'] = '<li class="arrow">';
		$config ['prev_tag_close'] = '</li>';
		$config ['next_link'] = 'Next';
		$config ['next_tag_open'] = '<li class="arrow">';
		$config ['next_tag_close'] = '</li>';
		$config ['cur_tag_open'] = '<li class="active"><a href="#">';
		$config ['cur_tag_close'] = '</a></li>';
		$config ['num_tag_open'] = '<li>';
		$config ['num_tag_close'] = '</li>';
		$config ['last_tag_open'] = '<li class="arrow">';
		$config ['last_link'] = 'Last';
		$config ['last_tag_close'] = '</li>';
	
		$this->pagination->initialize ( $config );
		$page = $config ['per_page'];
		$segment = $this->uri->segment ( $segment );
	
		return array (
				"page" => $page,
				"segment" => $segment
		);
	}

	/**
<<<<<<< HEAD
	 * This function used to load user sessions
	 */
	function datas()
	{
		$this->role = $this->session->userdata ( 'role' );
		$this->vendorId = $this->session->userdata ( 'userId' );
		$this->name = $this->session->userdata ( 'name' );
		$this->roleText = $this->session->userdata ( 'roleText' );
		$this->lastLogin = $this->session->userdata ( 'lastLogin' );
		$this->status = $this->session->userdata ( 'status' );
		
		
		$this->global ['name'] = $this->name;
		$this->global ['role'] = $this->role;
		$this->global ['role_text'] = $this->roleText;
		$this->global ['last_login'] = $this->lastLogin;
		$this->global ['status'] = $this->status;
		
	}
	
	/**
	 * This function insert into log to the log table
	 */
	function logrecord($process,$processFunction){
		$this->datas();
		$logInfo = array("userId"=>$this->vendorId,
		"userName"=>$this->name,
		"process"=>$process,
		"processFunction"=>$processFunction,
		"userRoleId"=>$this->role,
		"userRoleText"=>$this->roleText,
		"userIp"=>$_SERVER['REMOTE_ADDR'],
		"userAgent"=>getBrowserAgent(),
		"agentString"=>$this->agent->agent_string(),
		"platform"=>$this->agent->platform()
		);
		
		$this->load->model('login_model');
		$this->login_model->loginsert($logInfo);
=======
	 * This function is used to pull the data using curl
	 * @param unknown $url
	 * @return mixed
	 */
	function pullData($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_USERAGENT, 'MyBot/1.0 (http://www.mysite.com/)');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 7200);
		curl_setopt($_h, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
		curl_setopt($_h, CURLOPT_DNS_CACHE_TIMEOUT, 2 );
		$data = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	
		if (!$data) {
			exit('cURL Error: '.curl_error($ch));
		}
	
		curl_close($ch);
	
		return $data;
	}
	
	/**
	 * This function used to capture Actual Image of website
	 * @param string $url : This is domain url
	 * @param number $w : This is image width
	 * @param number $h : This is image height
	 * @param string $user_agent : This is browser user agent
	 * @param number $type : This is device type - MOBILE or BROWSER
	 */
	function screenDemo($url, $w, $h, $user_agent, $type) {
		set_time_limit ( 0 );
	
		$screen = new Screen\Capture ( $url );
		$screen->setWidth ( intval ( $w ) );
		$screen->setHeight ( intval ( $h ) );
		$screen->setUserAgentString ( $user_agent );
	
		$filename = base64_encode ( $url ) . ".jpg";
		$fileLocation = WEBSITE_CAPTURE . MOBILE . $filename;
	
		if ($type == CAPTURE_BROWSER) {
			$fileLocation = WEBSITE_CAPTURE . BROWSER . $filename;
		}

		// pre($fileLocation);
	
		$screen->save ( $fileLocation );
>>>>>>> old2/master
	}
}