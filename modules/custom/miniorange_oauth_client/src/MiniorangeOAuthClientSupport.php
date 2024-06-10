<?php


namespace Drupal\miniorange_oauth_client;

use GuzzleHttp\Exception\RequestException;
class MiniorangeOAuthClientSupport
{
    public $email;
    public $phone;
    public $query;
    public function __construct($SZ, $l0, $qF)
    {
        $this->email = $SZ;
        $this->phone = $l0;
        $this->query = $qF;
    }
    public function sendSupportQuery()
    {
        $Mr = \Drupal::service("\145\170\164\x65\x6e\x73\x69\x6f\156\56\x6c\x69\x73\x74\56\x6d\x6f\144\x75\x6c\145")->getExtensionInfo("\155\x69\x6e\151\x6f\162\141\156\147\145\x5f\x6f\x61\x75\x74\x68\137\143\x6c\151\145\156\164");
        $ak = $Mr["\x76\145\x72\163\151\157\x6e"];
        $Va = phpversion();
        $this->query = "\x5b\x44\162\x75\x70\x61\x6c\40" . \DRUPAL::VERSION . "\40\x4f\101\x75\164\x68\40\x43\154\x69\145\x6e\164\x20\x45\x6e\164\145\x72\160\162\151\163\x65\x20\115\x6f\x64\x75\154\x65\x20\174\x20" . $ak . "\40\174\40\x50\110\x50\40" . $Va . "\135\40" . $this->query;
        $Qv = array("\x63\157\x6d\x70\x61\156\x79" => $_SERVER["\123\105\x52\126\105\122\x5f\116\x41\x4d\105"], "\145\x6d\x61\151\154" => $this->email, "\160\150\157\156\x65" => $this->phone, "\x71\165\145\x72\x79" => $this->query, "\x63\x63\105\x6d\x61\x69\154" => "\144\162\165\160\141\x6c\x73\165\160\160\157\162\164\x40\x78\145\x63\x75\x72\151\x66\171\x2e\x63\157\155");
        $FV = MiniorangeOAuthClientConstants::BASE_URL . "\x2f\155\x6f\x61\x73\x2f\162\x65\x73\164\x2f\x63\x75\x73\164\x6f\155\145\162\x2f\143\x6f\156\x74\141\143\x74\x2d\165\x73";
        $PE = ["\103\x6f\x6e\164\x65\156\164\55\124\x79\160\x65" => "\x61\x70\x70\x6c\x69\143\141\x74\x69\x6f\x6e\x2f\152\x73\x6f\x6e", "\143\150\x61\162\163\x65\x74" => "\x55\x54\x46\55\x38", "\x41\165\x74\x68\x6f\162\x69\x7a\x61\164\151\157\156" => "\x42\141\163\x69\x63"];
        $zT = ["\x63\157\155\160\x61\156\x79" => $_SERVER["\x53\105\122\126\x45\x52\x5f\x4e\x41\115\x45"], "\145\155\x61\x69\x6c" => $this->email, "\x70\x68\157\x6e\145" => $this->phone, "\x71\x75\x65\162\171" => $this->query, "\143\143\105\x6d\141\x69\x6c" => "\x64\x72\x75\x70\x61\x6c\x73\165\160\160\x6f\x72\164\x40\x78\145\143\165\x72\x69\x66\x79\56\x63\157\x6d"];
        $Qv = ["\x68\145\x61\144\x65\x72\163" => $PE, "\x62\157\144\171" => json_encode($zT), "\166\145\x72\x69\146\x79" => false];
        try {
            $SH = \Drupal::httpClient()->request("\x50\117\123\124", $FV, $Qv);
        } catch (RequestException $w6) {
            echo "\x51\x75\x65\162\171\x20\x53\165\x62\x6d\151\163\163\151\157\156\40\105\x72\x72\x6f\x72\72" . $w6->getMessage();
        }
        return TRUE;
    }
}
