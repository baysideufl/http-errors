<?php

class Error extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static function getDefaultMessage($id){
		switch ($id) {
			case '200':
				return "OK";
				break;
			case '201':
				return "Created";
				break;
			case '202':
				return "Accepted";
				break;
			case '203':
				return "Non-Authoritative Information (since HTTP/1.1)";
				break;
			case '204':
				return "No Content";
				break;
			case '205':
				return "Reset Content";
				break;
			case '206':
				return "Partial Content";
				break;
			case '207':
				return "Multi-Status (WebDAV; RFC 4918)";
				break;
			case '208':
				return "Already Reported (WebDAV; RFC 5842)";
				break;
			case '226':
				return "IM Used (RFC 3229)";
				break;
			case '300':
				return "Multiple Choices";
				break;
			case '301':
				return "Moved Permanently";
				break;
			case '302':
				return "Found";
				break;
			case '303':
				return "See Other (since HTTP/1.1)";
				break;
			case '304':
				return "Not Modified";
				break;
			case '305':
				return "Use Proxy (since HTTP/1.1)";
				break;
			case '306':
				return "Switch Proxy";
				break;
			case '307':
				return "Temporary Redirect (since HTTP/1.1)";
				break;
			case '308':
				return "Permanent Redirect (Experimental RFC; RFC 7238)";
				break;
			case '400':
				return "Bad Request";
				break;
			case '401':
				return "Unauthorized";
				break;
			case '402':
				return "Payment Required";
				break;
			case '403':
				return "Forbidden";
				break;
			case '404':
				return "Not Found";
				break;
			case '405':
				return "Method Not Allowed";
				break;
			case '406':
				return "Not Acceptable";
				break;
			case '407':
				return "Proxy Authentication Required";
				break;
			case '408':
				return "Request Timeout";
				break;
			case '409':
				return "Conflict";
				break;
			case '410':
				return "Gone";
				break;
			case '411':
				return "Length Required";
				break;
			case '412':
				return "Precondition Failed";
				break;
			case '413':
				return "Request Entity Too Large";
				break;
			case '414':
				return "Request-URI Too Long";
				break;
			case '415':
				return "Unsupported Media Type";
				break;
			case '416':
				return "Requested Range Not Satisfiable";
				break;
			case '417':
				return "Expectation Failed";
				break;
			case '418':
				return "I'm a teapot (RFC 2324)";
				break;
			case '419':
				return "Authentication Timeout (not in RFC 2616)";
				break;
			case '420':
				return "Method Failure (Spring Framework)";
				break;
			case '420':
				return "Enhance Your Calm (Twitter)";
				break;
			case '422':
				return "Unprocessable Entity (WebDAV; RFC 4918)";
				break;
			case '423':
				return "Locked (WebDAV; RFC 4918)";
				break;
			case '424':
				return "Failed Dependency (WebDAV; RFC 4918)";
				break;
			case '426':
				return "Upgrade Required";
				break;
			case '428':
				return "Precondition Required (RFC 6585)";
				break;
			case '429':
				return "Too Many Requests (RFC 6585)";
				break;
			case '431':
				return "Request Header Fields Too Large (RFC 6585)";
				break;
			case '440':
				return "Login Timeout (Microsoft)";
				break;
			case '444':
				return "No Response (Nginx)";
				break;
			case '449':
				return "Retry With (Microsoft)";
				break;
			case '450':
				return "Blocked by Windows Parental Controls (Microsoft)";
				break;
			case '451':
				return "Unavailable For Legal Reasons (Internet draft)";
				break;
			case '451':
				return "Redirect (Microsoft)";
				break;
			case '494':
				return "Request Header Too Large (Nginx)";
				break;
			case '495':
				return "Cert Error (Nginx)";
				break;
			case '496':
				return "No Cert (Nginx)";
				break;
			case '497':
				return "HTTP to HTTPS (Nginx)";
				break;
			case '498':
				return "Token expired/invalid (Esri)";
				break;
			case '499':
				return "Client Closed Request (Nginx)";
				break;
			case '499':
				return "Token required (Esri)";
				break;
			case '500':
				return "Internal Server Error";
				break;
			case '501':
				return "Not Implemented";
				break;
			case '502':
				return "Bad Gateway";
				break;
			case '503':
				return "Service Unavailable";
				break;
			case '504':
				return "Gateway Timeout";
				break;
			case '505':
				return "HTTP Version Not Supported";
				break;
			case '506':
				return "Variant Also Negotiates (RFC 2295)";
				break;
			case '507':
				return "Insufficient Storage (WebDAV; RFC 4918)";
				break;
			case '508':
				return "Loop Detected (WebDAV; RFC 5842)";
				break;
			case '509':
				return "Bandwidth Limit Exceeded (Apache bw/limited extension)[27]";
				break;
			case '510':
				return "Not Extended (RFC 2774)";
				break;
			case '511':
				return "Network Authentication Required (RFC 6585)";
				break;
			case '520':
				return "Origin Error (CloudFlare)";
				break;
			case '521':
				return "Web server is down (CloudFlare)";
				break;
			case '522':
				return "Connection timed out (CloudFlare)";
				break;
			case '523':
				return "Proxy Declined Request (CloudFlare)";
				break;
			case '524':
				return "A timeout occurred (CloudFlare)";
				break;
			case '598':
				return "Network read timeout error (Unknown)";
				break;
			case '599':
				return "Network connect timeout error (Unknown)";
				break;
			default:
				return "Server Error";
				break;
		}

	}
}