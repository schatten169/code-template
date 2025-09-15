<?php

class GeneralResult
{
    public $status = "E";
    public $message = "Terjadi Kesalahan!";
    public $data = null;

    /**
     * General error, terjadi kesalahan!
     */
    public function Error($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = "Terjadi kesalahan!";
        $result->data = $data;

        return $result;
    }

    /**
     * Terjadi kesalahan (Custom)
     */
    public function ErrorCustom($message = "Terjadi kesalahan!", $data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = $message;
        $result->data = $data;

        return $result;
    }

    /**
     * Data tidak ditemukan
     */
    public function ErrorNotFound($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = "Data tidak ditemukan!";
        $result->data = $data;

        return $result;
    }

    /**
     * Data tidak boleh kosong
     */
    public function ErrorEmpty($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = "Data tidak boleh kosong!";
        $result->data = $data;

        return $result;
    }

    /**
     * $field tidak boleh kosong
     */
    public function EmptyField($field = "", $data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = "{$field} tidak boleh kosong!";
        $result->data = $data;

        return $result;
    }

    /**
     * Gagal upload data
     */
    public function ErrorUpload($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "E";
        $result->message = "Gagal mengunggah data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil mendapatkan data
     */
    public function Success($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = "Berhasil mendapatkan data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil mendapatkan data (custom)
     */
    public function SuccessCustom($message = "Berhasil mendapatkan data!", $data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = $message;
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil upload data
     */
    public function SuccessUpload($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = "Berhasil mengunggah data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil menambah data
     */
    public function SuccessCreate($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = "Berhasil menambah data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil mengubah data
     */
    public function SuccessUpdate($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = "Berhasil mengubah data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Berhasil menghapus data
     */
    public function SuccessDelete($data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = "S";
        $result->message = "Berhasil menghapus data!";
        $result->data = $data;

        return $result;
    }

    /**
     * Custom result with status, message & data
     */
    public function Custom($status = "E", $message = "Terjadi kesalahan!", $data = null): \GeneralResult
    {
        $result = new \GeneralResult;
        $result->status = $status;
        $result->message = $message;
        $result->data = $data;

        return $result;
    }
}
