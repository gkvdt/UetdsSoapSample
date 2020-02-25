<?php


namespace App\Soap\Model;


class SeferBilgileri
{
    public $uetdsSeferReferansNo;
    public $durum;
    public $firmaSeferNo;
    public $plaka1;
    public $plaka2;
    public $sofor1TCNo;
    public $sofor2TCNo;
    public $iptalTurKodu;
    public $iptalTurAciklama;
    public $iptalAciklama;
    public $bildirimTarihi;
    public $sonGuncellemeTarihi;
    public $iptalTarihi;
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
    public $baslangicTarihi;
    public $baslangicSaati;
    public $bitisTarihi;
    public $bitisSaati;
    public $seferTasimaBedeli;
    public $seferTasimaBedeliParaBirimi;


    public function __construct($params)
    {

        $this->uetdsSeferReferansNo = isset($params->uetdsSeferReferansNo) ? $params->uetdsSeferReferansNo : null;
        $this->durum = isset($params->durum) ? $params->durum : null;
        $this->firmaSeferNo = isset($params->firmaSeferNo) ? $params->firmaSeferNo : null;
        $this->plaka1 = isset($params->plaka1) ? $params->plaka1 : null;
        $this->plaka2 = isset($params->plaka2) ? $params->plaka2 : null;
        $this->sofor1TCNo = isset($params->sofor1TCNo) ? $params->sofor1TCNo : null;
        $this->sofor2TCNo = isset($params->sofor2TCNo) ? $params->sofor2TCNo : null;
        $this->iptalTurKodu = isset($params->iptalTurKodu) ? $params->iptalTurKodu : null;
        $this->iptalTurAciklama = isset($params->iptalTurAciklama) ? $params->iptalTurAciklama : null;
        $this->iptalAciklama = isset($params->iptalAciklama) ? $params->iptalAciklama : null;
        $this->bildirimTarihi = isset($params->bildirimTarihi) ? $params->bildirimTarihi : null;
        $this->sonGuncellemeTarihi = isset($params->sonGuncellemeTarihi) ? $params->sonGuncellemeTarihi : null;
        $this->iptalTarihi = isset($params->iptalTarihi) ? $params->iptalTarihi : null;
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
        $this->baslangicTarihi = isset($params->baslangicTarihi) ? $params->baslangicTarihi : null;
        $this->baslangicSaati = isset($params->baslangicSaati) ? $params->baslangicSaati : null;
        $this->bitisTarihi = isset($params->bitisTarihi) ? $params->bitisTarihi : null;
        $this->bitisSaati = isset($params->bitisSaati) ? $params->bitisSaati : null;
        $this->seferTasimaBedeli = isset($params->seferTasimaBedeli) ? $params->seferTasimaBedeli : null;
        $this->seferTasimaBedeliParaBirimi = isset($params->seferTasimaBedeliParaBirimi) ? $params->seferTasimaBedeliParaBirimi : null;
    }
}
