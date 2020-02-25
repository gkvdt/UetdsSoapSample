<?php

namespace App\Http\Controllers;

use App\Soap\Model\Ip;
use App\Soap\Model\IptalTuru;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileriInput;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\User;
use App\Soap\Model\WsUser;
use App\Soap\Model\YukBilgileriInput;
use App\Soap\Model\YukTuru;
use App\Soap\Request\AracMuayeneSorgula;
use App\Soap\Request\IpListele;
use App\Soap\Request\IpSil;
use App\Soap\Request\IptalTurleri;
use App\Soap\Request\IpTanimla;
use App\Soap\Request\MeslekiYeterlilikSorgula;
use App\Soap\Request\ParamTehlikeliMaddeTasimaSekli;
use App\Soap\Request\ParamYukBirimi;
use App\Soap\Request\ParamYukTuru;
use App\Soap\Request\SeferAktifEt;
use App\Soap\Request\SeferBildirimOzeti;
use App\Soap\Request\SeferBildirimRaporu;
use App\Soap\Request\SefereYukEkle;
use App\Soap\Request\SeferGuncelle;
use App\Soap\Request\SeferIptalEt;
use App\Soap\Request\YeniYukKaydiBildirV2;
use Exception;
use Illuminate\Http\Request;
use SoapClient;
use SoapHeader;
use stdClass;



class TestSoapController extends Controller
{

    private $yukBilgileriInputParams;
    private $seferBilgileriInputParams;

    public function __construct()
    {
        $this->yukBilgileriInputParams = new stdClass();

        $this->yukBilgileriInputParams->gonderenUnvan = "gönderen test";
        $this->yukBilgileriInputParams->aliciUnvan = "alıcı test";
        $this->yukBilgileriInputParams->yuklemeUlkeKodu = "TR";
        $this->yukBilgileriInputParams->yuklemeIlMernisKodu = "1";
        $this->yukBilgileriInputParams->yuklemeIlceMernisKodu = "1104";
        $this->yukBilgileriInputParams->bosaltmaUlkeKodu = "TR";
        $this->yukBilgileriInputParams->bosaltmaIlMernisKodu = "2";
        $this->yukBilgileriInputParams->bosaltmaIlceMernisKodu = "1105";
        $this->yukBilgileriInputParams->yuklemeTarihi = "02/04/2020";
        $this->yukBilgileriInputParams->yuklemeSaati = "15:08";
        $this->yukBilgileriInputParams->bosaltmaTarihi = "03/04/2020";
        $this->yukBilgileriInputParams->bosaltmaSaati = "12:00";
        $this->yukBilgileriInputParams->yukCinsId = "204";
        $this->yukBilgileriInputParams->yukBirimi = "KG";
        $this->yukBilgileriInputParams->yukMiktari = "3";
        $this->yukBilgileriInputParams->tasimaBedeli = "2000";
        $this->yukBilgileriInputParams->tasimaBedeliParaBirimi = "USD";



        $this->seferBilgileriInputParams = new stdClass();
        $this->seferBilgileriInputParams->plaka1 = "34TEST123";
        $this->seferBilgileriInputParams->sofor1TcNo = "23695921030";
        $this->seferBilgileriInputParams->baslangicUlkeKodu = "TR";
        $this->seferBilgileriInputParams->baslangicIlMernisKodu = "1";
        $this->seferBilgileriInputParams->baslangicIlceMernisKodu = "1104";
        $this->seferBilgileriInputParams->bitisUlkeKodu = "TR";
        $this->seferBilgileriInputParams->bitisIlMernisKodu = "2";
        $this->seferBilgileriInputParams->bitisIlceMernisKodu = "1105";
        $this->seferBilgileriInputParams->seferTasimaBedeli = "";
        $this->seferBilgileriInputParams->seferTasimaBedeliParaBirimi = "";
        $this->seferBilgileriInputParams->seferBaslangicTarihi = "03/04/2020";
        $this->seferBilgileriInputParams->seferBaslangicSaati = "10:00";
        $this->seferBilgileriInputParams->seferBitisTarihi = "05/04/2020";
        $this->seferBilgileriInputParams->seferBitisSaati = "18:00";
    }

    public function index(Request $request)
    {
     
    }


    public function test()
    {

        $seferBilgileriInput = new SeferBilgileriInput($this->seferBilgileriInputParams);
        $yukBilgileriInput = new YukBilgileriInput($this->yukBilgileriInputParams);

        $yukBilgileriListInput = [
            $yukBilgileriInput->getValues()
        ];
        $user = new WsUser('999999', '999999testtest');
        $sefer = new Sefer();
        $sefer->uetdsSeferReferansNo = "20022500200148";
        $iptalTuru = new IptalTuru(null);
        $iptalTuru->kodu=1;
        $u = new User('23695921030');
        $tasimaTuruKodu = new TasimaTuruKodu(2);
        $ip = new Ip();
        $ip->ipBaslangic = '100.168.1.58';
        $ip->ipBitis = '100.168.1.69';


        //Araç Muayene Sorgulama Örneği
        //$res = new AracMuayeneSorgula($user,'34TEST123');
        // IP LİSTELEME ÖRNEĞİ
        $res = new IpListele($user);

        // IP SILME ÖRNEĞİ
        //$res = new IpSil($user,901);

        // İPTAL TÜRLERİ ÖRNEĞİ
        //$res = new IptalTurleri($user);

        // IP TANIMLAMA ÖRNEĞİ
        //$res = new IpTanimla($user,$ip);


        //$res = new MeslekiYeterlilikSorgula($user,$u);
        //$res = new ParamTehlikeliMaddeTasimaSekli($user);
        //$res = new ParamYukBirimi($user,$tasimaTuruKodu);

        //$res = new ParamYukTuru($user,$tasimaTuruKodu);

        //$res = new YeniYukKaydiBildirV2($user, $seferBilgileriInput, $yukBilgileriListInput);

        //$res = new SeferIptalEt($user,$iptalTuru,$sefer,"Açıklama"); 
        //$res = new SeferAktifEt($user,$sefer); 
       //$res = new SeferBildirimOzeti($user,$sefer);
        //$res = new SeferBildirimRaporu($user,$sefer);
        //$res = new SefereYukEkle($user,$yukBilgileriInput,$sefer); 
        //$res = new SeferGuncelle($user,$seferBilgileriInput,$sefer);
        
        
        print_r($res);
        
        /**
         * PDF İNDİRME
         * 
         header('Content-type: application/pdf');
         header('Content-Disposition: attachment; filename="service.pdf"');
         echo ($res->sonucPdf);
        */

    }
}
