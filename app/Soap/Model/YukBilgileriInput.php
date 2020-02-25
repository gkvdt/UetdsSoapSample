<?php

namespace App\Soap\Model;

class YukBilgileriInput
{

    public $gonderenVergiNo;
    public $gonderenUnvan;
    public $aliciVergiNo;
    public $aliciUnvan;
    public $yuklemeUlkeKodu;
    public $yuklemeIlMernisKodu;
    public $yuklemeIlceMernisKodu;
    public $bosaltmaUlkeKodu;
    public $bosaltmaIlMernisKodu;
    public $bosaltmaIlceMernisKodu;
    public $yuklemeTarihi;
    public $yuklemeSaati;
    public $bosaltmaTarihi;
    public $bosaltmaSaati;
    public $yukCinsId;
    public $yukBirimi;
    public $yukMiktari;
    public $tasimaBedeli;
    public $tasimaBedeliParaBirimi;
    public $unNumarasi;
    public $tehlikeliMaddeTasimaSekli;
    public $firmaYukNo;
    public $yukDigerAciklama;


    public function __construct($params)
    {
        $this->gonderenVergiNo = isset($params->gonderenVergiNo) ? $params->gonderenVergiNo : null;
        $this->gonderenUnvan = isset($params->gonderenUnvan) ? $params->gonderenUnvan : null;
        $this->aliciVergiNo = isset($params->aliciVergiNo) ? $params->aliciVergiNo : null;
        $this->aliciUnvan = isset($params->aliciUnvan) ? $params->aliciUnvan : null;
        $this->yuklemeUlkeKodu = isset($params->yuklemeUlkeKodu) ? $params->yuklemeUlkeKodu : null;
        $this->yuklemeIlMernisKodu = isset($params->yuklemeIlMernisKodu) ? $params->yuklemeIlMernisKodu : null;
        $this->yuklemeIlceMernisKodu = isset($params->yuklemeIlceMernisKodu) ? $params->yuklemeIlceMernisKodu : null;
        $this->bosaltmaUlkeKodu = isset($params->bosaltmaUlkeKodu) ? $params->bosaltmaUlkeKodu : null;
        $this->bosaltmaIlMernisKodu = isset($params->bosaltmaIlMernisKodu) ? $params->bosaltmaIlMernisKodu : null;
        $this->bosaltmaIlceMernisKodu = isset($params->bosaltmaIlceMernisKodu) ? $params->bosaltmaIlceMernisKodu : null;
        $this->yuklemeTarihi = isset($params->yuklemeTarihi) ? $params->yuklemeTarihi : null;
        $this->yuklemeSaati = isset($params->yuklemeSaati) ? $params->yuklemeSaati : null;
        $this->bosaltmaTarihi = isset($params->bosaltmaTarihi) ? $params->bosaltmaTarihi : null;
        $this->bosaltmaSaati = isset($params->bosaltmaSaati) ? $params->bosaltmaSaati : null;
        $this->yukCinsId = isset($params->yukCinsId) ? $params->yukCinsId : null;
        $this->yukBirimi = isset($params->yukBirimi) ? $params->yukBirimi : null;
        $this->yukMiktari = isset($params->yukMiktari) ? $params->yukMiktari : null;
        $this->tasimaBedeli = isset($params->tasimaBedeli) ? $params->tasimaBedeli : null;
        $this->unNumarasi = isset($params->unNumarasi) ? $params->unNumarasi : null;
        $this->tehlikeliMaddeTasimaSekli = isset($params->tehlikeliMaddeTasimaSekli) ? $params->tehlikeliMaddeTasimaSekli : null;
        $this->firmaYukNo = isset($params->firmaYukNo) ? $params->firmaYukNo : null;
        $this->yukDigerAciklama = isset($params->yukDigerAciklama) ? $params->yukDigerAciklama : null;
        $this->tasimaBedeliParaBirimi = isset($params->tasimaBedeliParaBirimi) ? $params->tasimaBedeliParaBirimi : null;
    }



    public function getValues()
    {

        $result = [
            'gonderenVergiNo' => $this->gonderenVergiNo,
            'gonderenUnvan' => $this->gonderenUnvan,
            'aliciVergiNo' => $this->aliciVergiNo,
            'aliciUnvan' => $this->aliciUnvan,
            'yuklemeUlkeKodu' => $this->yuklemeUlkeKodu,
            'yuklemeIlMernisKodu' => $this->yuklemeIlMernisKodu,
            'yuklemeIlceMernisKodu' => $this->yuklemeIlceMernisKodu,
            'bosaltmaUlkeKodu' => $this->bosaltmaUlkeKodu,
            'bosaltmaIlMernisKodu' => $this->bosaltmaIlMernisKodu,
            'bosaltmaIlceMernisKodu' => $this->bosaltmaIlceMernisKodu,
            'yuklemeTarihi' => $this->yuklemeTarihi,
            'yuklemeSaati' => $this->yuklemeSaati,
            'bosaltmaTarihi' => $this->bosaltmaTarihi,
            'bosaltmaSaati' => $this->bosaltmaSaati,
            'yukCinsId' => $this->yukCinsId,
            'yukBirimi' => $this->yukBirimi,
            'yukMiktari' => $this->yukMiktari,
            'tasimaBedeli' => $this->tasimaBedeli,
            'unNumarasi' => $this->unNumarasi,
            'tehlikeliMaddeTasimaSekli' => $this->tehlikeliMaddeTasimaSekli,
            'firmaYukNo' => $this->firmaYukNo,
            'yukDigerAciklama' => $this->yukDigerAciklama,
            'tasimaBedeliParaBirimi'=> $this->tasimaBedeliParaBirimi

        ];

        return $result;
    }
}



/**
 * 

<seferBilgileriInput>
            plaka1="34TEST123";
            sofor1TcNo="23695921030";
            baslangicUlkeKodu="TR";
            baslangicIlMernisKodu="1";
            baslangicIlceMernisKodu="1104";
            bitisUlkeKodu="TR";
            bitisIlMernisKodu="2";
            bitisIlceMernisKodu="1105";
            seferTasimaBedeli="";
            sefertasimaBedeliParaBirimi="";
            seferBaslangicTarihi="03/04/2020";
            seferBaslangicSaati="10:00";
            seferBitisTarihi="05/04/2020";
            seferBitisSaati="18:00";
         </seferBilgileriInput>
         
         <yukBilgileriListInput>
            gonderenUnvan->gönderen test
            aliciUnvan->alıcı test
            yuklemeUlkeKodu->TR
            yuklemeIlMernisKodu->1
            yuklemeIlceMernisKodu->1104
            bosaltmaUlkeKodu->TR
            bosaltmaIlMernisKodu->2
            bosaltmaIlceMernisKodu->1105
            yuklemeTarihi->02/04/2020
            yuklemeSaati->15:08
            bosaltmaTarihi->03/04/2020
            bosaltmaSaati->12:00
            yukCinsId->204
            yukBirimi->KG
            yukMiktari->3
            tasimaBedeli->2000
            tasimaBedeliParaBirimi->USD
         </yukBilgileriListInput>



 */