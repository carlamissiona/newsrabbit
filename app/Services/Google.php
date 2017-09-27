<?php 
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Google\Google_Client;
use Google\Autoload;

class Google {

    protected $client;

    protected $service;

    function __construct() {
        /* Get config variables */
        $client_id = Config::get('google.client_id');
        $service_account_name = Config::get('google.service_account_name');
        $key = Config::get('google.api_key');//you can use later

        $this->client = new Google_Client();
    
    }
  function getClient() {
        $client = new Google_Client();
      $client->setApplicationName(APPLICATION_NAME);
      $client->setScopes(SCOPES);
      $client->setAuthConfig(CLIENT_SECRET_PATH);
      $client->setAccessType('offline');

      // Load previously authorized credentials from a file.
      $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
      if (file_exists($credentialsPath)) {
        $accessToken = json_decode(file_get_contents($credentialsPath), true);
      } else {
        // Request authorization from the user.
        $authUrl = $client->createAuthUrl();
        printf("Open the following link in your browser:\n%s\n", $authUrl);
        print 'Enter verification code: ';
        $authCode = trim(fgets(STDIN));

        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

        // Store the credentials to disk.
        if(!file_exists(dirname($credentialsPath))) {
          mkdir(dirname($credentialsPath), 0700, true);
        }
        file_put_contents($credentialsPath, json_encode($accessToken));
        printf("Credentials saved to %s\n", $credentialsPath);

     
    }

  
}