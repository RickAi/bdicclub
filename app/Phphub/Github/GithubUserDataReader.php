<?php namespace Phphub\Github;

use OAuth;
use GuzzleHttp\Client;

class GithubUserDataReader
{
    public function getDataFromCode($code)
    {
        $data = $this->readFromGithub($code);

        return $this->formatData($data);
    }

    public function getDataFromUserName($username)
    {
        $client = new Client([
            'base_url' => 'https://api.github.com/users/',
        ]);

//        $query['client_id'] = getenv('client_id');
//        $query['client_secret'] = getenv('client_secret');
        $query['client_id'] = 'eefd4111fbcb0e1d0fb9';
        $query['client_secret'] = '3dce7078f20bc10a1f6bef559b81787648f1b372';

        return $client->get($username.'?'.http_build_query($query))->json();
    }

    private function readFromGithub($code)
    {
        $github = OAuth::consumer('GitHub');
        $oauthTokenObject = $github->requestAccessToken($code);
        $githubData = json_decode($github->request('user'), true);
        $emails = json_decode($github->request('user/emails'), true);
        $githubData['emails'] = array_combine($emails, $emails);
        $githubData['email'] = !isset($githubData['email']) ?: last($emails);

        return $githubData;
    }

    private function formatData($data)
    {
        return [
            'id'         => $data['id'],
            'name'       => $data['login'],
            'email'      => $data['email'],
            'emails'      => $data['emails'],
            'github_id'  => $data['id'],
            'github_url' => $data['html_url'],
            'image_url'  => $data['avatar_url'],
        ];
    }
}
