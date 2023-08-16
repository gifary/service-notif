<?php

namespace Supala\SendNotif\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NotificationNAC
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
            $this->client->post("/api/nac/{$id}/atasan");
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

    public function sendApprovedAtasanRequest($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/approved");
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

    public function sendRejectedAtasanRequest($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/rejected");
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

    public function sendApprovalAdmin($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/admin");
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

    public function sendRejectedAdmin($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/admin/rejected");
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

    public function sendApprovalVP($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/vp");
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

    public function sendApprovedVP($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/vp/approved");
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

    public function sendRejectedVP($id)
    {
        try{
            $this->client->post("/api/nac/{$id}/vp/rejected");
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
