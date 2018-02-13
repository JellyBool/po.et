<?php

namespace JellyBool\Poet;

/**
 * Class Client
 * @package JellyBool\Poet
 */
class Client {

    protected $apiToken;
    /**
     * @var \GuzzleHttp\Client
     */
    protected $http;

    /**
     * Client constructor.
     * @param $http
     */
    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
        $this->http = new \GuzzleHttp\Client();
    }

    /**
     * @param null $workId
     */
    public function getWork($workId = null)
    {
        try {
            $response = $this->http->get('https://api.frost.po.et/works/' . $workId, [
                'headers' => [
                    'Accept' => 'application/json',
                    'token'  => $this->apiToken,
                ],
            ]);

            $work = json_decode((string)$response->getBody(), true);

            return $work;

        } catch (\GuzzleHttp\Exception\ClientException $exception) {

            $response = $exception->getResponse();

            return $response->getBody();
        }
    }

    /**
     *
     */
    public function getAllWorks()
    {
        return $this->getWork();
    }

    /**
     * @param array $data
     */
    public function createWork(array $data)
    {
        try {
            $response = $this->http->post('https://api.frost.po.et/works', [
                'headers'     => [
                    'Accept' => 'application/json',
                    'token'  => $this->apiToken,
                ],
                'form_params' => $data,
            ]);

            $workId = json_decode((string)$response->getBody(), true);

            return $workId;
        } catch (\GuzzleHttp\Exception\ClientException $exception) {

            $response = $exception->getResponse();

            return $response->getBody();
        }

    }
}