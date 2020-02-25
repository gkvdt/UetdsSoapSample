<?php

namespace App\Soap\Model;


class BildirimDetayi
{

    public $uetdsYukReferansNo;
    public $aliciUnvan;
    public $aliciVergiNo;
    public $bildirimTarihi;
    public $bosaltmaUlkeKodu;
    public $bosaltmaUlkeAdi;
    public $bosaltmaIlAdi;
    public $bosaltmaIlMernisKodu;
    public $bosaltmaIlceAdi;
    public $bosaltmaIlceMernisKodu;
    public $bosaltmaSaati;
    public $bosaltmaTarihi;
    public $durum;
    public $iptalTurKodu;
    public $iptalTurAciklama;
    public $iptalAciklama;
    public $iptalTarihi;
    public $gonderenUnvan;
    public $gonderenVergiNo;
    public $sonGuncellemeTarihi;
    public $tasimaBedeli;
    public $tasimaBedeliParaBirimi;
    public $yukBirimi;
    public $yukCinsAdi;
    public $yukCinsId;
    public $yukMiktari;
    public $yuklemeUlkeKodu;
    public $yuklemeUlkeAdi;
    public $yuklemeIlAdi;
    public $yuklemeIlMernisKodu;
    public $yuklemeIlceAdi;
    public $yuklemeIlceMernisKodu;
    public $yuklemeSaati;
    public $yuklemeTarihi;
    public $firmaYukNo;
    public $yukDigerAciklama;


    public function __construct($params)
    {
        $this->uetdsYukReferansNo = isset($params->uetdsYukReferansNo) ? $params->uetdsYukReferansNo : null;
        $this->aliciUnvan = isset($params->aliciUnvan) ? $params->aliciUnvan : null;
        $this->aliciVergiNo = isset($params->aliciVergiNo) ? $params->aliciVergiNo : null;
        $this->bildirimTarihi = isset($params->bildirimTarihi) ? $params->bildirimTarihi : null;
        $this->bosaltmaUlkeKodu = isset($params->bosaltmaUlkeKodu) ? $params->bosaltmaUlkeKodu : null;
        $this->bosaltmaUlkeAdi = isset($params->bosaltmaUlkeAdi) ? $params->bosaltmaUlkeAdi : null;
        $this->bosaltmaIlAdi = isset($params->bosaltmaIlAdi) ? $params->bosaltmaIlAdi : null;
        $this->bosaltmaIlMernisKodu = isset($params->bosaltmaIlMernisKodu) ? $params->bosaltmaIlMernisKodu : null;
        $this->bosaltmaIlceAdi = isset($params->bosaltmaIlceAdi) ? $params->bosaltmaIlceAdi : null;
        $this->bosaltmaIlceMernisKodu = isset($params->bosaltmaIlceMernisKodu) ? $params->bosaltmaIlceMernisKodu : null;
        $this->bosaltmaSaati = isset($params->bosaltmaSaati) ? $params->bosaltmaSaati : null;
        $this->bosaltmaTarihi = isset($params->bosaltmaTarihi) ? $params->bosaltmaTarihi : null;
        $this->durum = isset($params->durum) ? $params->durum : null;
        $this->iptalTurKodu = isset($params->iptalTurKodu) ? $params->iptalTurKodu : null;
        $this->iptalTurAciklama = isset($params->iptalTurAciklama) ? $params->iptalTurAciklama : null;
        $this->iptalAciklama = isset($params->iptalAciklama) ? $params->iptalAciklama : null;
        $this->iptalTarihi = isset($params->iptalTarihi) ? $params->iptalTarihi : null;
        $this->gonderenUnvan = isset($params->gonderenUnvan) ? $params->gonderenUnvan : null;
        $this->gonderenVergiNo = isset($params->gonderenVergiNo) ? $params->gonderenVergiNo : null;
        $this->sonGuncellemeTarihi = isset($params->sonGuncellemeTarihi) ? $params->sonGuncellemeTarihi : null;
        $this->tasimaBedeli = isset($params->tasimaBedeli) ? $params->tasimaBedeli : null;
        $this->tasimaBedeliParaBirimi = isset($params->tasimaBedeliParaBirimi) ? $params->tasimaBedeliParaBirimi : null;
        $this->yukBirimi = isset($params->yukBirimi) ? $params->yukBirimi : null;
        $this->yukCinsAdi = isset($params->yukCinsAdi) ? $params->yukCinsAdi : null;
        $this->yukCinsId = isset($params->yukCinsId) ? $params->yukCinsId : null;
        $this->yukMiktari = isset($params->yukMiktari) ? $params->yukMiktari : null;
        $this->yuklemeUlkeKodu = isset($params->yuklemeUlkeKodu) ? $params->yuklemeUlkeKodu : null;
        $this->yuklemeUlkeAdi = isset($params->yuklemeUlkeAdi) ? $params->yuklemeUlkeAdi : null;
        $this->yuklemeIlAdi = isset($params->yuklemeIlAdi) ? $params->yuklemeIlAdi : null;
        $this->yuklemeIlMernisKodu = isset($params->yuklemeIlMernisKodu) ? $params->yuklemeIlMernisKodu : null;
        $this->yuklemeIlceAdi = isset($params->yuklemeIlceAdi) ? $params->yuklemeIlceAdi : null;
        $this->yuklemeIlceMernisKodu = isset($params->yuklemeIlceMernisKodu) ? $params->yuklemeIlceMernisKodu : null;
        $this->yuklemeSaati = isset($params->yuklemeSaati) ? $params->yuklemeSaati : null;
        $this->yuklemeTarihi = isset($params->yuklemeTarihi) ? $params->yuklemeTarihi : null;
        $this->firmaYukNo = isset($params->firmaYukNo) ? $params->firmaYukNo : null;
        $this->yukDigerAciklama = isset($params->yukDigerAciklama) ? $params->yukDigerAciklama : null;
    }
}
