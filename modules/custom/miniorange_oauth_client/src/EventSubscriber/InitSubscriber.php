<?php


namespace Drupal\miniorange_oauth_client\EventSubscriber;

use Drupal\miniorange_oauth_client\Utilities;
use Drupal\miniorange_oauth_client\Controller\miniorange_oauth_clientController;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\user\Entity\User;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
class InitSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        $Du[KernelEvents::REQUEST][] = ["\x63\150\x65\143\153\106\157\x72\x52\145\x64\151\x72\145\143\x74\x69\157\x6e", 30];
        return $Du;
    }
    public function checkForRedirection()
    {
        global $base_url;
        $current_user = \Drupal::currentUser();
        $i4 = (isset($_SERVER["\110\x54\x54\x50\123"]) && $_SERVER["\110\x54\124\120\123"] === "\157\156" ? "\x68\x74\x74\160\163" : "\150\164\x74\x70") . "\x3a\57\57" . $_SERVER["\x48\x54\124\x50\137\110\x4f\x53\x54"] . $_SERVER["\122\x45\x51\x55\x45\x53\x54\137\x55\122\x49"];
        $y5 = $base_url . "\x2f\x75\163\145\x72\x2f" . $current_user->id() . "\x2f\x65\144\x69\164";
        $wC = \Drupal::config("\155\151\x6e\x69\x6f\162\x61\156\147\x65\x5f\157\x61\x75\x74\x68\137\x63\154\151\145\156\x74\56\x73\x65\164\164\151\156\x67\x73")->get("\155\151\x6e\x69\157\x72\x61\x6e\x67\x65\x5f\157\x61\165\164\150\x5f\x72\x65\161\165\151\x72\x65\x5f\x70\162\x6f\146\x69\x6c\x65\x5f\x66\151\145\154\144");
        if (!($wC == 1 && $current_user->isAuthenticated() && !in_array("\x61\144\x6d\x69\156\x69\x73\x74\x72\141\164\157\x72", $current_user->getRoles()))) {
            goto XM;
        }
        if (!(!Utilities::check_for_redirect_to_user_profile_form($current_user->getEmail()) && $i4 != $y5)) {
            goto rf;
        }
        Utilities::redirect_to_profile_form($current_user->id());
        rf:
        XM:
        $Pe = \Drupal::config("\155\x69\156\151\157\x72\141\156\147\x65\x5f\157\x61\165\164\150\137\143\x6c\x69\x65\x6e\x74\56\163\145\164\x74\x69\156\x67\163")->get("\155\x69\x6e\151\157\162\141\x6e\x67\x65\137\157\141\x75\164\x68\x5f\x65\x6e\x61\x62\x6c\145\137\154\x6f\147\151\156\x5f\x77\x69\164\150\137\x6f\x61\x75\164\x68");
        if (!empty(\Drupal::config("\155\x69\156\x69\157\x72\141\x6e\147\x65\x5f\x6f\141\x75\164\150\137\143\154\x69\x65\x6e\x74\56\163\x65\x74\164\x69\156\147\x73")->get("\x6d\151\156\x69\x6f\162\141\x6e\x67\x65\137\157\141\165\164\150\137\x63\x6c\x69\x65\156\164\137\x62\x61\x73\x65\137\x75\x72\x6c"))) {
            goto C8;
        }
        $Pj = $base_url;
        goto HF;
        C8:
        $Pj = \Drupal::config("\x6d\151\x6e\x69\157\x72\x61\x6e\147\145\137\157\141\165\164\x68\137\x63\154\151\x65\156\x74\56\163\x65\x74\x74\x69\156\x67\163")->get("\x6d\x69\x6e\151\157\x72\x61\156\147\145\x5f\x6f\141\x75\x74\x68\x5f\x63\x6c\x69\145\156\x74\x5f\142\141\x73\x65\x5f\x75\x72\x6c");
        HF:
        $fe = '';
        $xX = \Drupal::config("\155\151\156\151\x6f\x72\x61\x6e\147\145\137\x6f\141\165\164\150\x5f\x63\154\x69\145\x6e\164\56\163\145\x74\164\x69\x6e\147\x73")->get("\x6d\151\x6e\151\x6f\162\141\156\147\145\x5f\157\141\165\164\150\x5f\143\154\151\x65\x6e\x74\x5f\x61\x75\x74\x6f\137\162\145\x64\151\x72\145\x63\164\137\x74\x6f\137\x69\144\160");
        $fb = \Drupal::config("\155\x69\156\x69\157\162\x61\156\147\x65\137\157\x61\x75\164\150\x5f\x63\154\151\x65\156\164\x2e\x73\x65\164\164\x69\x6e\147\163")->get("\x6d\151\156\x69\x6f\162\141\x6e\147\145\x5f\x6f\141\x75\x74\150\x5f\143\x6c\x69\145\156\x74\137\x65\156\141\142\x6c\x65\x5f\x62\x61\x63\153\x64\x6f\x6f\x72");
        $NC = \Drupal::config("\x6d\151\156\x69\157\x72\141\x6e\x67\x65\137\x6f\141\165\x74\x68\x5f\143\x6c\151\x65\156\x74\x2e\x73\x65\x74\164\151\156\147\x73")->get("\155\x69\x6e\151\157\162\141\156\147\145\137\157\141\165\x74\150\x5f\x63\154\151\x65\156\x74\x5f\x66\x6f\x72\143\x65\137\141\165\164\150");
        $Eu = \Drupal::config("\155\x69\x6e\x69\x6f\x72\x61\156\147\145\137\157\x61\x75\x74\150\137\143\154\x69\x65\156\164\56\x73\145\x74\164\151\156\147\x73")->get("\155\151\x6e\x69\157\162\141\x6e\x67\x65\x5f\x6f\141\x75\x74\x68\x5f\143\x6c\x69\x65\156\x74\137\x6c\151\143\145\x6e\x73\145\x5f\x6b\x65\171");
        $Rn = \Drupal::config("\155\x69\x6e\x69\x6f\162\141\156\147\x65\x5f\x6f\141\165\164\x68\x5f\143\x6c\x69\145\x6e\164\56\x73\x65\x74\164\x69\156\x67\163")->get("\155\151\156\151\x6f\x72\x61\x6e\x67\x65\x5f\157\141\x75\x74\x68\137\145\x6e\141\142\x6c\x65\x5f\160\x61\147\145\x5f\162\145\163\x74\162\151\143\x74\x69\157\x6e");
        $ac = \Drupal::config("\x6d\x69\156\x69\x6f\x72\141\x6e\x67\x65\x5f\x6f\x61\165\164\150\137\x63\154\151\145\x6e\164\56\x73\145\x74\x74\151\156\147\x73")->get("\155\151\x6e\x69\x6f\x72\141\x6e\147\x65\x5f\157\x61\x75\164\150\137\143\x6c\151\145\156\x74\137\x65\156\141\x62\x6c\x65\137\x70\141\147\145\137\141\143\x63\x65\x73\x73");
        $dy = false;
        if (strpos($_SERVER["\x52\x45\121\x55\x45\x53\x54\x5f\x55\122\x49"], "\155\157\x5f\154\x6f\147\x69\x6e") == false) {
            goto ka;
        }
        $dy = true;
        goto bV;
        ka:
        $dy = false;
        bV:
        if (!$Pe) {
            goto bl;
        }
        if ($ac && isset($_GET["\163\x74\x6f\x70\x5f\x72\145\x64\151\x72\x65\x63\x74"]) && $_GET["\x73\164\157\x70\137\162\x65\x64\x69\x72\x65\x63\164"] == "\x74\162\x75\x65") {
            goto vP;
        }
        if (!(!\Drupal::currentUser()->isAuthenticated() && $dy == false && !isset($_POST["\x70\141\163\x73"]))) {
            goto KA;
        }
        if ($fb && isset($_GET["\157\x61\x75\x74\x68\x5f\143\x6c\x69\x65\156\x74\137\154\x6f\x67\151\156"]) && $_GET["\x6f\x61\165\x74\x68\x5f\143\x6c\x69\x65\x6e\164\x5f\x6c\x6f\x67\x69\x6e"] == "\x66\x61\x6c\163\145") {
            goto yX;
        }
        if ($NC) {
            goto RW;
        }
        if (!($Rn && Utilities::is_page_restricted($i4) === TRUE)) {
            goto dB;
        }
        setrawcookie("\x44\x72\165\x70\141\154\56\166\x69\163\x69\x74\x6f\x72\56" . "\155\x6f\137\160\x61\x67\x65\137\x72\x65\x73\164\x72\x69\x63\x74\x69\x6f\156\x5f\162\x65\144\151\162\x65\143\x74", $i4, \Drupal::time()->getRequestTime() + 3900, "\x2f");
        miniorange_oauth_clientController::miniorange_oauth_client_mologin();
        dB:
        goto Kf;
        RW:
        $i4 = $_SERVER["\x52\x45\121\125\105\x53\124\x5f\125\x52\x49"];
        setrawcookie("\104\162\165\x70\x61\x6c\56\x76\x69\163\151\164\157\162\56" . "\x6d\157\x5f\x66\x6f\162\x63\145\137\141\x75\164\150\145\156\x74\x69\143\141\x74\x69\157\x6e\137\x72\145\144\151\x72\x65\x63\164", $i4, \Drupal::time()->getRequestTime() + 3900, "\x2f");
        miniorange_oauth_clientController::miniorange_oauth_client_mologin();
        Kf:
        goto PR;
        yX:
        PR:
        KA:
        goto u3;
        vP:
        u3:
        $in = '';
        if (!($Eu == NULL)) {
            goto Y_;
        }
        \Drupal::state()->delete("\155\151\x6e\x69\x6f\162\141\156\x67\145\x5f\x6f\x61\x75\164\150\137\x63\x6c\x69\x65\x6e\x74\x5f\146\157\x72\143\x65\x5f\141\x75\x74\150");
        \Drupal::state()->delete("\155\x69\156\x69\x6f\x72\141\x6e\x67\145\137\157\141\165\164\150\137\143\x6c\x69\x65\156\x74\137\145\x6e\x61\142\154\145\137\142\141\x63\153\x64\157\157\162");
        Y_:
        bl:
    }
}
