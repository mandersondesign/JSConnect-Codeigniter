<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		//Add this line to load the library from the library folder
    $this->load->library('jsconnect');
	}

	function index()
	{
	}

  function vanilla()
  {
    // This would be the authentication function for your jsconnect install
    // My server uses TankAuth for authentication, so i left in their syntax down
    // below for reference. Please remove that and add your own Authentication 
    // related code!
    
    $clientID = "1234";
    $secret = "1234";

    
    $vanUser = array();

    if ($this->tank_auth->is_logged_in()) 
    { 
      // 2. Grab the current user from your session management system or database here.
      // 3. Fill in the user information in a way that Vanilla can understand.
      $this->userID = $this->tank_auth->get_user_id();
      $this->userName = $this->tank_auth->get_username();
      $this->user = $this->users->getUserByID($this->userID);
      
      // CHANGE THESE FOUR LINES.
      $vanUser['uniqueid'] = $this->userID;
      $vanUser['name'] = $this->user->FirstName . " " . $this->user->LastName;
      $vanUser['email'] = $this->user->Email;
      $vanUser['photourl'] = $this->user->ProfilePicture;
    }
    
    // 4. Generate the jsConnect string.

    // This should be true unless you are testing. 
    // You can also use a hash name like md5, sha1 etc which must be the name as the connection settings in Vanilla.
    $secure = true; 
    $this->jsconnect->WriteJsConnect($vanUser, $_GET, $clientID, $secret, $secure);
  }

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */