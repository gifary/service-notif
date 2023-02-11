<?php

namespace Supala\SendNotif\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NotificationEMeeting
{
    private static $instance = null;
    private $client;
    public $baseUri;

    public function __construct($baseUri)
    {
        $this->baseUri = $baseUri;
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $baseUri,
        ]);
    }

    public function sendNewRequest($id)
    {
        try{
            $this->client->post("/api/request/{$id}");
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        } catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }

    public function sendApprovedRequest($id)
    {
        try{
            $this->client->post("/api/request/{$id}/approved");
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }

    public function sendRejectedRequest($id)
    {
        try{
            $this->client->post("/api/request/{$id}/rejected");
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }

    public function sendApprovedConsumption($id)
    {
        try{
            $this->client->post("/api/consumption/{$id}/approved");
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }

    public function sendRejectedConsumption($id)
    {
        try{
            $this->client->post("/api/consumption/{$id}/rejected");
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }

    public function sendRegisteredTad($id, $password)
    {
        try{
            $this->client->post("/api/tad/registered", [
                'json' => [
                    'id' => $id,
                    'password' => $password
                ]
            ]);
            return [
                'status' => 200,
                'message' => 'sukses kirim notifikasi'
            ];
        }catch (RequestException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }catch (\Exception $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }
    }
}
