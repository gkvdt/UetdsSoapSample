<?php


namespace App\Soap\Model;


class SeferBilgileriInput

{
    public $plaka1;
    public $plaka2;
    public $sofor1TcNo;
    public $sofor2TcNo;
    public $baslangicUlkeKodu;
    public $baslangicUlkeAdi;
    public $baslangicIlMernisKodu;
    public $baslangicIlAdi;
    public $baslangicIlceMernisKodu;
    public $baslangicIlceAdi;
    public $bitisUlkeKodu;
    public $bitisUlkeAdi;
    public $bitisIlMernisKodu;
    public $bitisIlAdi;
    public $bitisIlceMernisKodu;
    public $bitisIlceAdi;
    public $seferBaslangicTarihi;
    public $seferBaslangicSaati;
    public $seferBitisTarihi;
    public $seferBitisSaati;
    public $seferTasimaBedeli;
    public $tasimaBedeliParaBirimi;


    public function __construct($params)
    {

        $this->plaka1 = isset($params->plaka1) ? $params->plaka1 : null;
        $this->plaka2 = isset($params->plaka2) ? $params->plaka2 : null;
        $this->sofor1TcNo = isset($params->sofor1TcNo) ? $params->sofor1TcNo : null;
        $this->sofor2TcNo = isset($params->sofor2TcNo) ? $params->sofor2TcNo : null;
        $this->baslangicUlkeKodu = isset($params->baslangicUlkeKodu) ? $params->baslangicUlkeKodu : null;
        $this->baslangicUlkeAdi = isset($params->baslangicUlkeAdi) ? $params->baslangicUlkeAdi : null;
        $this->baslangicIlMernisKodu = isset($params->baslangicIlMernisKodu) ? $params->baslangicIlMernisKodu : null;
        $this->baslangicIlAdi = isset($params->baslangicIlAdi) ? $params->baslangicIlAdi : null;
        $this->baslangicIlceMernisKodu = isset($params->baslangicIlceMernisKodu) ? $params->baslangicIlceMernisKodu : null;
        $this->baslangicIlceAdi = isset($params->baslangicIlceAdi) ? $params->baslangicIlceAdi : null;
        $this->bitisUlkeKodu = isset($params->bitisUlkeKodu) ? $params->bitisUlkeKodu : null;
        $this->bitisUlkeAdi = isset($params->bitisUlkeAdi) ? $params->bitisUlkeAdi : null;
        $this->bitisIlMernisKodu = isset($params->bitisIlMernisKodu) ? $params->bitisIlMernisKodu : null;
        $this->bitisIlAdi = isset($params->bitisIlAdi) ? $params->bitisIlAdi : null;
        $this->bitisIlceMernisKodu = isset($params->bitisIlceMernisKodu) ? $params->bitisIlceMernisKodu : null;
        $this->bitisIlceAdi = isset($params->bitisIlceAdi) ? $params->bitisIlceAdi : null;
        $this->seferBaslangicTarihi = isset($params->seferBaslangicTarihi) ? $params->seferBaslangicTarihi : null;
        $this->seferBaslangicSaati = isset($params->seferBaslangicSaati) ? $params->seferBaslangicSaati : null;
        $this->seferBitisTarihi = isset($params->seferBitisTarihi) ? $params->seferBitisTarihi : null;
        $this->seferBitisSaati = isset($params->seferBitisSaati) ? $params->seferBitisSaati : null;
        $this->seferTasimaBedeli = isset($params->seferTasimaBedeli) ? $params->seferTasimaBedeli : null;
        $this->tasimaBedeliParaBirimi = isset($params->tasimaBedeliParaBirimi) ? $params->tasimaBedeliParaBirimi : null;
    }


    public function getValues()
    {
        return [
            "plaka1" => $this->plaka1,
            "plaka2" => $this->plaka2,
            "sofor1TcNo" => $this->sofor1TcNo,
            "sofor2TcNo" => $this->sofor2TcNo,
            "baslangicUlkeKodu" => $this->baslangicUlkeKodu,
            "baslangicUlkeAdi" => $this->baslangicUlkeAdi,
            "baslangicIlMernisKodu" => $this->baslangicIlMernisKodu,
            "baslangicIlAdi" => $this->baslangicIlAdi,
            "baslangicIlceMernisKodu" => $this->baslangicIlceMernisKodu,
            "baslangicIlceAdi" => $this->baslangicIlceAdi,
            "bitisUlkeKodu" => $this->bitisUlkeKodu,
            "bitisUlkeAdi" => $this->bitisUlkeAdi,
            "bitisIlMernisKodu" => $this->bitisIlMernisKodu,
            "bitisIlAdi" => $this->bitisIlAdi,
            "bitisIlceMernisKodu" => $this->bitisIlceMernisKodu,
            "bitisIlceAdi" => $this->bitisIlceAdi,
            "seferBaslangicTarihi" => $this->seferBaslangicTarihi,
            "seferBaslangicSaati" => $this->seferBaslangicSaati,
            "seferBitisTarihi" => $this->seferBitisTarihi,
            "seferBitisSaati" => $this->seferBitisSaati,
            "seferTasimaBedeli" => $this->seferTasimaBedeli,
            "tasimaBedeliParaBirimi" => $this->tasimaBedeliParaBirimi,
        ];
    }
}
