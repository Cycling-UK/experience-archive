<?php


namespace Drupal\miniorange_oauth_client;

use Drupal;
use Drupal\Component\Serialization\Json;
use Drupal\miniorange_oauth_client\Utilities;
use GuzzleHttp\Exception\RequestException;
class MiniorangeOAuthClientCustomer
{
    public $email;
    public $customerKey;
    public $transactionId;
    public $password;
    private $defaultCustomerId;
    private $defaultCustomerApiKey;
    public function __construct($SZ, $SK)
    {
        $this->email = $SZ;
        $this->password = $SK;
        $this->defaultCustomerId = "\61\x36\65\x35\65";
        $this->defaultCustomerApiKey = "\146\106\x64\x32\130\143\166\x54\x47\104\145\x6d\132\x76\x62\x77\61\142\143\x55\145\163\x4e\x4a\127\x45\161\113\x62\x62\125\161";
    }
    public function checkCustomer()
    {
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\57\x6d\157\141\x73\57\x72\x65\x73\164\57\143\165\163\164\157\x6d\x65\162\x2f\143\150\x65\143\x6b\55\151\x66\55\145\170\x69\163\164\163";
        $SZ = $this->email;
        $PE = ["\x43\157\156\x74\x65\156\164\55\124\x79\160\145" => "\141\160\160\x6c\151\143\x61\x74\151\x6f\x6e\x2f\152\163\157\156", "\x63\x68\x61\x72\163\145\164" => "\x55\x54\x46\40\x2d\40\70", "\101\165\x74\x68\x6f\162\x69\x7a\x61\164\151\x6f\x6e" => "\x42\141\163\151\143"];
        $zT = ["\145\155\141\151\x6c" => $SZ];
        $Qv = ["\x68\145\141\x64\x65\162\x73" => $PE, "\x62\157\x64\171" => json_encode($zT), "\x76\x65\x72\151\x66\171" => false];
        try {
            $SH = \Drupal::httpClient()->request("\120\x4f\x53\124", $FV, $Qv);
            $dy = json_decode($SH->getBody()->getContents());
            return $dy;
        } catch (RequestException $w6) {
            echo "\103\165\x73\x74\157\155\x65\x72\40\103\x68\145\x63\x6b\x20\105\x72\x72\x6f\x72\x3a" . $w6->getMessage();
        }
    }
    function check_status($V9)
    {
        global $base_url;
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\x2f\155\x6f\141\x73\x2f\141\x70\x69\57\x62\141\x63\x6b\165\x70\143\x6f\144\x65\57\x76\x65\x72\151\x66\171";
        $Ge = \Drupal::config("\x6d\x69\x6e\151\157\162\141\x6e\147\145\x5f\x6f\141\x75\x74\x68\x5f\143\x6c\x69\145\156\x74\56\x73\x65\x74\x74\151\x6e\x67\x73")->get("\x6d\x69\156\x69\157\x72\x61\x6e\x67\x65\137\x6f\141\x75\x74\150\137\143\x6c\x69\145\156\x74\x5f\143\x75\x73\x74\x6f\155\x65\x72\137\151\x64");
        $g3 = \Drupal::config("\155\151\x6e\151\157\x72\x61\x6e\x67\x65\x5f\x6f\x61\165\164\x68\137\143\x6c\x69\145\156\164\x2e\163\145\164\164\151\156\147\163")->get("\x6d\151\156\x69\157\x72\x61\x6e\x67\145\137\x6f\141\x75\164\x68\137\143\154\151\x65\x6e\x74\137\143\165\163\x74\x6f\155\x65\x72\x5f\141\x70\151\137\x6b\145\171");
        $aD = round(microtime(TRUE) * 1000);
        $gH = $Ge . number_format($aD, 0, '', '') . $g3;
        $d_ = hash("\x73\x68\141\65\61\62", $gH);
        $I_ = "\x43\x75\163\x74\157\x6d\145\162\55\113\x65\171\x3a\x20" . $Ge;
        $qv = "\124\151\155\145\163\164\141\155\x70\72\40" . number_format($aD, 0, '', '');
        $yH = "\x41\x75\164\150\x6f\162\151\x7a\141\x74\151\x6f\x6e\72\40" . $d_;
        $PE = ["\103\157\156\x74\145\x6e\x74\55\x54\171\160\x65" => "\x61\160\160\x6c\151\x63\x61\x74\x69\157\156\x2f\152\x73\157\156", "\103\x75\163\164\x6f\x6d\145\x72\x2d\113\x65\171" => $Ge, "\124\x69\155\145\163\164\141\x6d\x70" => $aD, "\x41\165\x74\x68\157\162\151\x7a\x61\x74\x69\x6f\x6e" => $d_];
        $zT = array("\143\157\x64\145" => $V9, "\x63\165\163\x74\x6f\155\145\x72\113\x65\x79" => $Ge, "\141\x64\x64\x69\x74\151\157\x6e\141\x6c\x46\151\x65\154\144\163" => array("\x66\x69\x65\154\144\x31" => $base_url));
        $x_ = \Drupal::httpClient();
        $Qv = ["\150\x65\x61\144\x65\162\163" => $PE, "\142\x6f\144\x79" => json_encode($zT), "\x76\145\x72\151\x66\x79" => false, "\141\x6c\154\157\167\x5f\x72\x65\144\x69\162\x65\x63\164\x73" => TRUE];
        try {
            $SH = $x_->request("\x50\117\123\x54", $FV, $Qv);
            $dy = json_decode($SH->getBody()->getContents(), true);
            return $dy;
        } catch (RequestException $w6) {
            echo "\x43\x75\163\164\x6f\155\145\x72\x20\x43\x68\145\143\153\x20\105\x72\162\157\162\72" . $w6->getMessage();
        }
    }
    function update_status()
    {
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\57\x6d\157\141\x73\57\141\x70\x69\x2f\142\141\143\x6b\165\x70\x63\157\144\x65\57\165\x70\x64\x61\164\x65\x73\x74\x61\x74\165\163";
        $Ge = \Drupal::config("\x6d\x69\x6e\x69\157\x72\141\156\x67\145\x5f\x6f\141\x75\x74\150\x5f\143\154\x69\145\x6e\x74\x2e\163\145\164\164\x69\156\147\163")->get("\x6d\x69\156\151\x6f\162\x61\156\x67\x65\137\157\x61\165\x74\150\x5f\143\154\151\x65\x6e\164\137\143\x75\x73\164\157\x6d\x65\x72\137\x69\x64");
        $g3 = \Drupal::config("\x6d\151\156\x69\157\162\x61\x6e\147\145\x5f\157\141\x75\x74\150\x5f\143\154\x69\145\156\164\56\163\x65\x74\164\x69\x6e\x67\x73")->get("\x6d\x69\156\151\x6f\162\x61\156\147\x65\x5f\157\141\x75\x74\x68\137\x63\x6c\151\145\x6e\x74\137\x63\165\163\x74\x6f\x6d\x65\162\137\x61\x70\x69\x5f\153\x65\x79");
        $aD = round(microtime(TRUE) * 1000);
        $gH = $Ge . number_format($aD, 0, '', '') . $g3;
        $d_ = hash("\163\x68\141\65\61\x32", $gH);
        $GZ = \Drupal::config("\155\151\156\151\x6f\162\x61\x6e\147\x65\137\157\141\x75\164\x68\137\143\x6c\x69\145\x6e\164\56\x73\145\x74\164\151\x6e\x67\163")->get("\155\151\x6e\151\x6f\162\141\x6e\x67\x65\137\157\x61\165\x74\150\x5f\143\x6c\151\145\x6e\x74\137\x63\x75\x73\164\x6f\155\x65\x72\x5f\x61\144\x6d\x69\156\x5f\164\157\x6b\x65\156");
        $V9 = Utilities::decrypt_data(\Drupal::config("\155\x69\156\151\x6f\162\141\156\147\145\x5f\x6f\x61\165\164\x68\x5f\x63\x6c\x69\x65\156\164\x2e\163\145\164\164\151\156\x67\x73")->get("\155\x69\x6e\151\157\x72\141\156\x67\x65\137\157\x61\x75\x74\x68\137\x63\154\151\145\156\164\137\154\x69\x63\145\x6e\163\x65\137\153\145\x79"), $GZ);
        $PE = ["\103\x6f\156\x74\x65\156\x74\55\x54\x79\x70\x65" => "\x61\160\x70\154\x69\x63\141\x74\x69\x6f\x6e\57\152\163\x6f\x6e", "\103\165\163\x74\x6f\x6d\145\x72\55\x4b\x65\x79" => $Ge, "\x54\x69\x6d\145\x73\164\141\x6d\x70" => number_format($aD, 0, '', ''), "\101\165\164\150\157\162\x69\x7a\x61\164\151\157\156" => $d_];
        $zT = ["\x63\157\144\x65" => $V9, "\143\x75\163\164\157\x6d\145\162\x4b\145\x79" => $Ge];
        $Qv = ["\x68\x65\141\x64\145\x72\163" => $PE, "\142\157\144\x79" => json_encode($zT), "\x76\145\x72\x69\146\x79" => false];
        try {
            $SH = \Drupal::httpClient()->request("\x50\117\x53\x54", $FV, $Qv);
            $dy = json_decode($SH->getBody()->getContents());
            return $dy;
        } catch (RequestException $w6) {
            echo "\x43\165\x73\164\x6f\x6d\x65\162\x20\125\160\x64\141\x74\x65\40\x45\162\x72\x6f\162\x3a" . $w6->getMessage();
        }
    }
    function ccl()
    {
        global $base_url;
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\x2f\155\157\x61\163\57\162\145\x73\x74\57\143\x75\163\164\x6f\155\x65\x72\57\154\x69\143\x65\156\x73\x65";
        $Ge = \Drupal::config("\155\x69\156\x69\157\x72\141\156\147\x65\137\x6f\x61\165\x74\150\x5f\x63\x6c\151\x65\156\164\56\163\145\x74\x74\x69\x6e\147\x73")->get("\155\151\156\x69\x6f\x72\141\x6e\147\145\137\x6f\x61\165\x74\150\x5f\x63\154\x69\x65\x6e\x74\x5f\143\165\x73\x74\x6f\x6d\145\x72\x5f\x69\144");
        $g3 = \Drupal::config("\x6d\151\x6e\x69\x6f\x72\141\x6e\x67\145\137\x6f\141\165\x74\x68\x5f\x63\x6c\151\145\x6e\x74\x2e\163\145\x74\x74\151\x6e\147\163")->get("\155\151\x6e\x69\x6f\x72\x61\156\147\145\137\x6f\141\x75\164\150\x5f\x63\x6c\x69\145\156\164\x5f\x63\x75\163\164\157\x6d\x65\x72\137\141\x70\x69\137\153\145\x79");
        $aD = round(microtime(TRUE) * 1000);
        $gH = $Ge . number_format($aD, 0, '', '') . $g3;
        $d_ = hash("\x73\150\141\65\x31\62", $gH);
        $PE = ["\x43\157\156\x74\x65\156\164\x2d\124\171\x70\145" => "\141\160\x70\x6c\151\143\x61\x74\151\157\156\x2f\x6a\x73\x6f\156", "\x43\165\163\164\157\x6d\x65\162\55\x4b\145\171" => $Ge, "\124\151\x6d\145\x73\x74\141\155\x70" => $aD, "\101\x75\164\x68\157\162\x69\x7a\141\164\x69\157\x6e" => $d_];
        $zT = ["\x63\x75\x73\164\x6f\x6d\145\162\x49\x64" => $Ge, "\x61\160\160\154\x69\x63\141\164\151\x6f\x6e\116\x61\155\x65" => Utilities::GetPlanName()];
        $zT = json_encode($zT);
        $Qv = ["\x68\x65\x61\144\145\x72\163" => $PE, "\142\157\x64\x79" => $zT, "\166\x65\162\x69\x66\x79" => false];
        try {
            $SH = \Drupal::httpClient()->request("\120\x4f\x53\124", $FV, $Qv);
            $dy = json_decode($SH->getBody()->getContents(), true);
            return $dy;
        } catch (RequestException $w6) {
            echo "\x43\x75\163\164\x6f\155\145\162\x20\x4c\151\143\145\156\163\x65\40\103\x68\x65\x63\153\x20\x45\x72\x72\x6f\162\x3a" . $w6->getMessage();
        }
    }
    public function getCustomerKeys()
    {
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\57\x6d\x6f\x61\163\57\x72\145\163\164\x2f\x63\x75\x73\x74\x6f\155\x65\x72\x2f\153\x65\171";
        $SZ = $this->email;
        $SK = $this->password;
        $PE = ["\103\157\156\x74\145\x6e\x74\x2d\x54\171\x70\x65" => "\141\160\x70\x6c\x69\143\141\x74\151\x6f\156\57\x6a\x73\157\x6e", "\143\150\x61\x72\163\145\164" => "\x55\124\x46\x20\x2d\40\x38", "\101\165\164\x68\x6f\162\151\172\141\164\x69\157\x6e" => "\102\141\163\x69\143"];
        $zT = ["\145\x6d\x61\x69\154" => $SZ, "\x70\x61\163\163\x77\157\162\x64" => $SK];
        $Qv = ["\x68\x65\141\x64\x65\162\x73" => $PE, "\x62\x6f\x64\171" => json_encode($zT), "\166\145\x72\151\x66\171" => false];
        try {
            $SH = \Drupal::httpClient()->request("\120\x4f\x53\124", $FV, $Qv);
            $dy = $SH->getBody()->getContents();
            return $dy;
        } catch (RequestException $w6) {
            echo "\105\x72\x72\x6f\x72\72" . $w6->getMessage();
        }
    }
}
