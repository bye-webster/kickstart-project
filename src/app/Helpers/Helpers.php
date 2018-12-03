<?php

/*
=================================
//ERROR CODE
sxCode 111 = Field Empty
sxCode 444 = Attemp Failed
sxCode 000 = Exact Error Function
sxCode 333 = Records Not Found
sxCode 777 = Records Exist
sxCode 666 = Token Expired
sxCode 999 = Token Invalid
=================================
//SUCCESS CODE
sxCode 222 = Attempt Success
=================================
*/

function _sanitize($variable) {
	return htmlspecialchars($variable);
}
function _validation($variable) {
	return htmlspecialchars($variable);
}
function randomer_number($length = 75) {

	// Generate arrays with characters and numbers
	$lowerAlpha = range('a', 'z');
	$upperAlpha = range('A', 'Z');
	$numeric = range('0', '9');

	// Merge the arrays
	$workArray = array_merge($numeric, array_merge($lowerAlpha, $upperAlpha));
	$returnString = "";

	// Add random characters from the created array to a string
	for ($i = 0; $i < $length; $i++) {
		$character = $workArray[rand(0, 61)];
		$returnString .= $character;
	}

	return $returnString;
}
function getB64Type($str) {
	// $str should start with 'data:' (= 5 characters long!)
	return substr($str, 5, strpos($str, ';')-5);
}

if(!function_exists('config_path'))
{
        /**
        * Return the path to config files
        * @param null $path
        * @return string
        */
        function config_path($path=null)
        {
                return app()->getConfigurationPath(rtrim($path, ".php"));
        }
}
if(!function_exists('public_path'))
{
        /**
        * Return the path to public dir
        * @param null $path
        * @return string
        */
        function public_path($path=null)
        {
                return rtrim(app()->basePath('public/'.$path), '/');
        }
}
if(!function_exists('storage_path'))
{
        /**
        * Return the path to storage dir
        * @param null $path
        * @return string
        */
        function storage_path($path=null)
        {
                return app()->storagePath($path);
        }
}
if(!function_exists('database_path'))
{
        /**
        * Return the path to database dir
        * @param null $path
        * @return string
        */
        function database_path($path=null)
        {
                return app()->databasePath($path);
        }
}
if(!function_exists('resource_path'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return string
        */
        function resource_path($path=null)
        {
                return app()->resourcePath($path);
        }
}
if(!function_exists('lang_path'))
{
        /**
        * Return the path to lang dir
        * @param null $str
        * @return string
        */
        function lang_path($path=null)
        {
                return app()->getLanguagePath($path);
        }
}
if ( ! function_exists('asset'))
{
	/**
	 * Generate an asset path for the application.
	 *
	 * @param  string  $path
	 * @param  bool    $secure
	 * @return string
	 */
	function asset($path, $secure = null)
	{
		return app('url')->asset($path, $secure);
	}
}
if ( ! function_exists('elixir'))
{
    /**
     * Get the path to a versioned Elixir file.
     *
     * @param  string  $file
     * @return string
     */
    function elixir($file)
    {
        static $manifest = null;
        if (is_null($manifest))
        {
            $manifest = json_decode(file_get_contents(public_path().'/build/rev-manifest.json'), true);
        }
        if (isset($manifest[$file]))
        {
            return '/build/'.$manifest[$file];
        }
        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}
if ( ! function_exists('auth'))
{
	/**
	 * Get the available auth instance.
	 *
	 * @return \Illuminate\Contracts\Auth\Guard
	 */
	function auth()
	{
		return app('Illuminate\Contracts\Auth\Guard');
	}
}
if ( ! function_exists('bcrypt'))
{
	/**
	 * Hash the given value.
	 *
	 * @param  string  $value
	 * @param  array   $options
	 * @return string
	 */
	function bcrypt($value, $options = array())
	{
		return app('hash')->make($value, $options);
	}
}
if ( ! function_exists('redirect'))
{
	/**
	 * Get an instance of the redirector.
	 *
	 * @param  string|null  $to
	 * @param  int     $status
	 * @param  array   $headers
	 * @param  bool    $secure
	 * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
	 */
	function redirect($to = null, $status = 302, $headers = array(), $secure = null)
	{
		if (is_null($to)) return app('redirect');
		return app('redirect')->to($to, $status, $headers, $secure);
	}
}
if ( ! function_exists('response'))
{
	/**
	 * Return a new response from the application.
	 *
	 * @param  string  $content
	 * @param  int     $status
	 * @param  array   $headers
	 * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Routing\ResponseFactory
	 */
	function response($content = '', $status = 200, array $headers = array())
	{
		$factory = app('Illuminate\Contracts\Routing\ResponseFactory');
		if (func_num_args() === 0)
		{
			return $factory;
		}
		return $factory->make($content, $status, $headers);
	}
}
if ( ! function_exists('secure_asset'))
{
	/**
	 * Generate an asset path for the application.
	 *
	 * @param  string  $path
	 * @return string
	 */
	function secure_asset($path)
	{
		return asset($path, true);
	}
}
if ( ! function_exists('secure_url'))
{
	/**
	 * Generate a HTTPS url for the application.
	 *
	 * @param  string  $path
	 * @param  mixed   $parameters
	 * @return string
	 */
	function secure_url($path, $parameters = array())
	{
		return url($path, $parameters, true);
	}
}
if ( ! function_exists('session'))
{
	/**
	 * Get / set the specified session value.
	 *
	 * If an array is passed as the key, we will assume you want to set an array of values.
	 *
	 * @param  array|string  $key
	 * @param  mixed  $default
	 * @return mixed
	 */
	function session($key = null, $default = null)
	{
		if (is_null($key)) return app('session');
		if (is_array($key)) return app('session')->put($key);
		return app('session')->get($key, $default);
	}
}
if ( ! function_exists('cookie'))
{
	/**
	 * Create a new cookie instance.
	 *
	 * @param  string  $name
	 * @param  string  $value
	 * @param  int     $minutes
	 * @param  string  $path
	 * @param  string  $domain
	 * @param  bool    $secure
	 * @param  bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 */
	function cookie($name = null, $value = null, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true)
	{
		$cookie = app('Illuminate\Contracts\Cookie\Factory');
		if (is_null($name))
		{
			return $cookie;
		}
		return $cookie->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	}
}

if(!function_exists('check_user_type'))
{

        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
        function check_user_type($party_id)
        {
                $get_user_type = \DB::table('party')
					->select('party.type_id')
                    ->where('party.party_id', $party_id)
                    ->get();

				return $get_user_type[0]->type_id;
        }
}

if(!function_exists('check_token'))
{

        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
        function check_token($token_api)
        {
                $get_token = \DB::table('user_login')
					->select('user_login.api_token')
                    ->where('user_login.api_token', $token_api)
                    ->get();

                if(isset($get_token[0])){
                    return true;
                } else {
                    return false;
                }
        }
}

if(!function_exists('get_email_by_id'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
	function get_email_by_id($user_id){
		
		$get_device = \DB::table('party_user_login')
		->select('party_user_login.user_login_id')
		->where('party_user_login.party_id', $user_id)
		->get();
		
		if($get_device){
			return $get_device[0]->user_login_id;
		} else {
			return null;
		}
	}
}

if(!function_exists('get_full_name_by_id'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
	function get_full_name_by_id($user_id){
		
		$get_person = \DB::table('person')
		->select('person.first_name','person.last_name')
		->where('person.party_id', $user_id)
		->get();
		
		if($get_person){
			return $get_person[0]->first_name ." ". $get_person[0]->last_name;
		} else {
			return null;
		}
	}
}

if(!function_exists('push_notification_for_message'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
	function push_notification_for_message($pkInboxId, $mailFrom, $mailTo, $mailSubject, $mailBody, $tCreated){

		$get_device = \DB::table('device_collector')
		->select('device_collector.token')
		->where('device_collector.email', get_email_by_id($mailTo))
		->get();

		$get_profile_from = \DB::table('person')
		->select('person.first_name', 'person.last_name')
		->where('person.party_id', $mailFrom)
		->get();

		$full_name = $get_profile_from[0]->first_name . " " . $get_profile_from[0]->last_name;


		if (isset($get_device)) {

				$tokens = array();
				$tokens[] = $get_device[0]->token;
				$message = array("notification_type" => "inbox_message",
							"notification_title" => $mailSubject,
							"notification_message" =>$mailBody,
							"message_id" => $pkInboxId,
							"mail_from" => get_email_by_id($mailFrom),
							"mail_to" => $mailTo,
							"mail_subject" => $mailSubject,
							"mail_body" => $mailBody,
							"from_name" => $full_name,
							"from_party_id" => $mailFrom,
							"t_created" => $tCreated);

				$message_status = execute_push_notification($tokens, $message);
				//echo $message_status;
				
		}
		return true;
	}
}

if(!function_exists('push_notification_for_confirm_to_be_guider'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
	function push_notification_for_confirm_to_be_guider($party_id, $title, $message, $group_id, $status_registration_review, $tCreated){

		$get_device = \DB::table('device_collector')
		->select('device_collector.token')
		->where('device_collector.email', get_email_by_id($party_id))
		->get();

		$get_profile_from = \DB::table('person')
		->select('person.first_name', 'person.last_name')
		->where('person.party_id', $party_id)
		->get();

		$full_name = $get_profile_from[0]->first_name . " " . $get_profile_from[0]->last_name;

		if (isset($get_device)) {

				$tokens = array();
				$tokens[] = $get_device[0]->token;
				$message = array("notification_type" => "approval_status",
							"notification_title" => $title,
							"notification_message" =>$message,
							"group_id" => $group_id,
							"status_registration_review" => $status_registration_review,
							"t_created" => $tCreated);

				$message_status = execute_push_notification($tokens, $message);
				//echo $message_status;
				
		}
		return true;
	}
}

if(!function_exists('execute_push_notification'))
{
        /**
        * Return the path to resource dir
        * @param null $path
        * @return bool
        */
		function execute_push_notification($tokens, $message){
			$url = 'https://fcm.googleapis.com/fcm/send';

			$fields = array(
				'registration_ids' => $tokens,
				'priority' => "high",  
				'data' => $message
				);

			$headers = array(
				'Authorization:key=AAAANVmVWUs:APA91bGqbFhn5LD25nCPpGGzm7ycmAIoXdqcIlPZaYiZCsh37dqYOtec846_qEA5IzPWv1dWMmjObtJ87hUlwv49TdUC0XTjYs89n31gJFAskuIsWJ8npV66HjrzYvd0DuZGDOD0mM_E',
				'Content-Type: application/json'
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			$result = curl_exec($ch);           
			if ($result === FALSE) {
				die('Curl failed: ' . curl_error($ch));
			}
			curl_close($ch);
			return $result;
		}
}


?>