<?php


namespace Drupal\miniorange_oauth_client\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Render\Markup;
use Drupal\miniorange_oauth_client\MiniorangeOAuthClientSupport;
use Drupal\miniorange_oauth_client\Utilities;
class MiniorangeLicensing extends FormBase
{
    public function getFormId()
    {
        return "\155\151\x6e\151\157\162\x61\x6e\x67\145\x5f\157\x61\165\x74\150\x5f\x63\154\151\x65\156\164\x5f\154\151\143\145\156\163\x69\x6e\x67";
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        global $base_url;
        $form["\x6d\x61\x72\x6b\165\160\137\x6c\x69\142\x72\x61\x72\171"] = array("\x23\141\x74\x74\141\x63\x68\x65\x64" => array("\x6c\x69\142\x72\x61\x72\171" => array("\x6d\x69\x6e\151\157\x72\x61\156\x67\145\137\157\x61\x75\x74\x68\x5f\x63\x6c\x69\x65\156\x74\57\155\x69\156\x69\x6f\x72\x61\156\x67\x65\137\157\141\165\164\x68\137\x63\x6c\x69\145\156\164\56\x61\x64\x6d\151\156", "\155\x69\156\x69\157\162\141\156\147\x65\x5f\x6f\141\165\164\x68\x5f\143\154\x69\145\156\x74\x2f\155\x69\x6e\151\157\x72\141\156\x67\145\137\x6f\x61\x75\164\x68\137\143\x6c\151\145\x6e\164\56\x73\x74\x79\154\145\137\163\x65\164\164\151\x6e\x67\x73", "\x6d\x69\156\x69\x6f\162\x61\x6e\147\x65\x5f\x6f\x61\x75\x74\x68\x5f\x63\154\151\145\156\x74\x2f\x6d\x69\156\x69\157\162\x61\x6e\147\145\x5f\x6f\x61\x75\164\150\137\x63\x6c\x69\x65\x6e\164\56\x6d\141\151\x6e")));
        $form["\x68\x65\141\x64\145\162\137\x74\157\x70\137\163\164\x79\x6c\145\137\62"] = array("\43\155\x61\162\x6b\x75\x70" => "\x3c\x64\x69\x76\x20\x63\154\141\163\x73\x3d\x22\x6d\x6f\x5f\157\x61\x75\x74\150\x5f\164\141\142\x6c\145\137\x6c\141\171\157\x75\x74\137\61\42\x3e\x3c\x64\151\166\40\x63\154\x61\x73\163\x3d\42\x6d\x6f\137\x6f\x61\165\x74\150\x5f\x74\141\142\154\145\x5f\154\x61\x79\157\x75\x74\42\76");
        $rk = $base_url . "\57\141\144\155\x69\x6e\57\143\157\156\146\x69\147\57\160\145\157\160\154\x65\x2f\x6d\151\x6e\x69\157\162\141\x6e\147\x65\x5f\x6f\141\x75\164\x68\137\143\154\151\145\156\164\x2f\x63\x75\163\164\x6f\x6d\145\x72\x5f\163\x65\x74\x75\x70";
        $Gg = $base_url . "\57\x61\x64\x6d\151\156\57\143\x6f\x6e\146\x69\x67\57\160\x65\157\x70\154\x65\x2f\155\x69\156\151\157\162\x61\x6e\x67\x65\137\x6f\141\x75\164\150\137\143\x6c\151\145\156\164\57\x63\165\163\x74\157\155\145\x72\137\x73\145\x74\x75\x70";
        $cR = $base_url . "\57\x61\144\x6d\x69\156\x2f\143\x6f\156\x66\151\x67\x2f\x70\x65\x6f\160\154\145\57\x6d\151\156\151\157\162\x61\156\147\x65\x5f\157\x61\165\164\x68\137\143\154\x69\145\x6e\x74\x2f\x63\x75\x73\164\157\155\x65\x72\137\163\x65\164\165\x70";
        $f_ = '';
        $form["\x6d\x61\x72\x6b\x75\x70\x5f\61"] = array("\43\x6d\x61\x72\153\x75\160" => "\x3c\142\162\x3e\74\142\x72\76\x3c\x68\63\x3e\46\x6e\142\x73\x70\x3b\x20\125\x50\107\122\101\x44\x45\40\x50\114\101\x4e\123\40\x3c\x2f\x68\63\76\x3c\x68\x72\76\74\x62\162\76");
        $hg = [[Markup::create(t("\x3c\x68\63\76\106\x45\101\124\125\x52\x45\x53\40\x2f\x20\x50\114\x41\116\123\74\x2f\150\63\76")), Markup::create(t("\74\142\x72\76\74\150\x32\76\x53\x54\101\116\x44\101\122\104\74\57\x68\x32\76\x3c\x70\40\143\x6c\141\163\163\75\42\x6d\157\137\157\x61\x75\x74\x68\137\160\162\151\143\x69\156\147\x2d\162\141\164\145\42\76\74\163\165\160\76\x24\74\x2f\x73\x75\x70\x3e\x20\62\x34\71\x20\x3c\163\165\x70\76\x2a\x3c\x2f\x73\165\x70\76\x3c\x2f\160\76")), Markup::create(t("\74\x62\162\76\74\x68\x32\76\x50\122\x45\115\111\x55\115\74\x2f\x68\62\76\74\160\x20\x63\x6c\141\x73\163\75\42\155\157\137\x6f\x61\165\x74\150\x5f\160\x72\151\x63\x69\x6e\147\x2d\162\x61\x74\145\42\x3e\74\163\165\160\76\44\x3c\57\x73\x75\160\x3e\x20\x33\71\x39\40\x3c\x73\165\x70\x3e\x2a\74\57\163\x75\x70\x3e\74\x2f\160\76")), Markup::create(t("\74\x62\x72\x3e\x3c\x68\62\76\105\116\x54\105\122\120\x52\x49\123\105\x3c\57\150\x32\76\74\160\40\143\x6c\141\163\x73\x3d\42\155\x6f\x5f\x6f\141\165\164\x68\x5f\x70\x72\151\x63\x69\156\147\55\162\x61\x74\145\x22\76\74\x73\165\160\x3e\44\x3c\x2f\x73\165\160\x3e\40\64\x34\x39\x20\x3c\163\x75\x70\x3e\x2a\x3c\x2f\x73\165\160\76\74\57\x70\x3e"))], ['', Markup::create(t("\x3c\160\x20\143\154\141\x73\x73\x3d\42\142\x75\164\x74\157\156\x20\142\x75\x74\x74\x6f\156\55\55\x70\162\x69\x6d\x61\x72\171\42\x3e\124\150\141\156\x6b\40\x79\x6f\x75\x20\146\x6f\x72\x20\165\x70\147\x72\141\144\151\x6e\147\74\x2f\x70\x3e")), Markup::create(t("\x3c\160\40\x63\x6c\x61\x73\163\x3d\x22\x62\165\164\x74\157\156\40\142\x75\164\x74\157\x6e\x2d\55\160\162\151\155\x61\x72\x79\x22\x3e\x54\x68\141\156\153\40\x79\x6f\165\x20\146\x6f\162\x20\x75\160\x67\162\141\x64\151\156\x67\74\57\160\x3e")), Markup::create(t("\x3c\160\40\x63\x6c\141\163\163\x3d\x22\x62\x75\x74\164\x6f\x6e\40\x62\165\x74\164\x6f\156\42\x3e\x59\x6f\165\40\141\162\145\40\157\156\40\x74\x68\151\163\x20\120\x6c\141\156\74\57\160\76"))], [Markup::create(t("\117\101\165\x74\x68\x20\x50\162\x6f\x76\151\x64\145\162\40\123\165\160\160\157\162\x74")), Markup::create(t("\61")), Markup::create(t("\61")), Markup::create(t("\115\165\x6c\x74\151\160\154\x65\40\x2a\52"))], [Markup::create(t("\x41\x75\x74\157\146\151\x6c\154\x20\x4f\101\165\x74\150\40\x73\x65\162\x76\x65\x72\x73\x20\x63\157\156\146\151\x67\x75\x72\141\x74\151\x6f\156")), Markup::create(t("\46\x23\170\x32\x37\x31\x34\x3b")), Markup::create(t("\46\43\170\x32\x37\x31\x34\x3b")), Markup::create(t("\x26\x23\170\x32\x37\61\x34\x3b"))], [Markup::create(t("\102\x61\163\x69\143\x20\x41\x74\164\162\x69\x62\165\164\145\40\x4d\141\160\160\x69\x6e\147\x20\x28\x45\155\x61\x69\x6c\x29")), Markup::create(t("\46\43\x78\62\67\x31\x34\73")), Markup::create(t("\46\x23\170\x32\x37\61\x34\x3b")), Markup::create(t("\x26\43\x78\x32\67\61\x34\73"))], [Markup::create(t("\105\170\160\157\x72\164\x20\x43\x6f\x6e\x66\151\x67\x75\x72\141\x74\151\157\x6e")), Markup::create(t("\x26\x23\170\62\x37\x31\64\73")), Markup::create(t("\x26\x23\170\62\67\x31\x34\73")), Markup::create(t("\46\x23\170\x32\x37\x31\64\x3b"))], [Markup::create(t("\x41\165\164\x6f\40\x43\x72\x65\141\x74\x65\x20\125\x73\145\x72\x73")), Markup::create(t("\x55\x6e\x6c\x69\155\x69\x74\145\144")), Markup::create(t("\125\156\x6c\x69\x6d\x69\164\x65\x64")), Markup::create(t("\x55\x6e\154\151\155\x69\x74\x65\x64"))], [Markup::create(t("\x49\x6d\160\157\162\164\x20\103\x6f\156\x66\x69\x67\165\x72\x61\x74\151\157\156")), Markup::create(t("\x26\43\x78\x32\x37\x31\64\x3b")), Markup::create(t("\x26\43\170\x32\67\x31\x34\73")), Markup::create(t("\46\43\x78\62\x37\61\64\73"))], [Markup::create(t("\101\144\166\x61\156\x63\x65\144\40\101\x74\164\x72\x69\142\x75\x74\145\40\115\x61\160\x70\151\156\x67\x20\50\x55\163\145\x72\x6e\141\155\145\x2c\40\105\155\x61\x69\154\54\40\106\151\x72\163\x74\40\116\x61\x6d\145\54\x20\x43\x75\x73\x74\x6f\x6d\x20\101\x74\164\x72\151\x62\x75\164\145\x73\54\40\145\x74\x63\56\51")), Markup::create(t("\46\43\x78\x32\67\x31\64\x3b")), Markup::create(t("\x26\43\x78\x32\67\x31\x34\73")), Markup::create(t("\x26\x23\170\62\x37\x31\x34\x3b"))], [Markup::create(t("\103\x75\163\164\157\x6d\40\x52\x65\144\151\x72\x65\x63\164\x20\x55\122\114\40\141\146\x74\145\x72\40\154\157\x67\x69\x6e\40\141\156\144\x20\154\157\x67\x6f\x75\x74")), Markup::create(t("\46\43\170\x32\67\x31\x34\x3b")), Markup::create(t("\46\43\170\62\67\x31\64\x3b")), Markup::create(t("\46\x23\x78\62\x37\61\64\73"))], [Markup::create(t("\x43\165\x73\x74\x6f\x6d\x69\172\145\144\x20\x4c\x6f\x67\x69\x6e\40\x42\x75\164\164\x6f\156")), Markup::create(t("\x26\x23\x78\62\x37\61\x34\73")), Markup::create(t("\46\x23\x78\x32\67\61\x34\73")), Markup::create(t("\46\43\x78\x32\x37\x31\x34\x3b"))], [Markup::create(t("\102\141\163\151\143\x20\x52\157\x6c\x65\x20\x4d\141\x70\160\x69\x6e\x67\40\50\x53\165\160\x70\x6f\x72\164\40\x66\x6f\162\40\x64\145\x66\x61\x75\154\x74\x20\x72\157\154\x65\x20\146\157\162\x20\x6e\145\167\40\165\163\x65\x72\163\x29")), Markup::create(t("\46\43\170\x32\x37\61\64\x3b")), Markup::create(t("\46\x23\x78\x32\x37\61\x34\x3b")), Markup::create(t("\x26\43\x78\62\67\x31\x34\x3b"))], [Markup::create(t("\x41\x64\166\x61\x6e\x63\x65\x64\40\122\x6f\x6c\x65\x20\x4d\x61\x70\x70\151\156\x67")), Markup::create(t('')), Markup::create(t("\x26\43\x78\62\67\x31\x34\x3b")), Markup::create(t("\x26\x23\x78\62\67\x31\64\73"))], [Markup::create(t("\106\x6f\x72\x63\145\x20\x61\x75\164\150\x65\156\x74\x69\143\141\x74\151\x6f\156\40\x2f\x20\x50\162\x6f\164\x65\143\x74\x20\143\157\x6d\x70\154\x65\164\x65\x20\x73\x69\x74\145")), Markup::create(t('')), Markup::create(t("\46\43\x78\x32\67\61\x34\x3b")), Markup::create(t("\x26\x23\x78\x32\67\61\x34\x3b"))], [Markup::create(t("\x4f\160\x65\x6e\x49\x44\x20\103\x6f\x6e\156\x65\x63\x74\x20\123\x75\x70\x70\157\162\164\x20\50\114\x6f\x67\151\x6e\40\x75\x73\x69\156\147\x20\117\160\145\x6e\111\x44\40\103\157\x6e\156\x65\143\164\x20\123\145\x72\x76\145\162\x29")), Markup::create(t('')), Markup::create(t("\46\x23\x78\x32\67\61\64\x3b")), Markup::create(t("\x26\x23\x78\x32\x37\61\x34\73"))], [Markup::create(t("\123\165\x70\x70\x6f\x72\x74\x20\x66\x6f\162\x20\x48\145\141\x64\x6c\145\163\x73\x20\151\x6e\x74\145\x67\x72\x61\x74\x69\x6f\x6e")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\46\43\x78\x32\67\x31\x34\73"))], [Markup::create(t("\104\157\x6d\141\151\156\x20\163\x70\145\143\x69\x66\151\143\40\x72\145\147\x69\x73\164\x72\141\164\x69\157\x6e")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\46\43\x78\x32\x37\x31\64\x3b"))], [Markup::create(t("\x44\171\x6e\141\155\x69\x63\x20\103\141\154\154\142\x61\x63\x6b\x20\125\122\114")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\46\43\x78\62\x37\x31\x34\x3b"))], [Markup::create(t("\x53\165\160\x70\x6f\x72\x74\x20\x66\x6f\162\40\x47\x72\x6f\165\x70\x20\111\156\146\157\40\105\x6e\144\160\157\151\156\x74")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\x26\43\170\62\x37\x31\64\73"))], [Markup::create(t("\x53\165\x70\x70\x6f\162\164\40\x66\x6f\x72\40\120\113\x43\105\x20\x66\x6c\x6f\167")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\x26\43\170\62\x37\61\64\x3b"))], [Markup::create(t("\x4c\x6f\x67\151\156\40\x52\145\160\x6f\x72\164\x73\x20\x2f\40\101\156\141\x6c\171\164\151\143\163")), Markup::create(t('')), Markup::create(t('')), Markup::create(t("\x26\43\170\62\x37\x31\64\x3b"))]];
        $form["\155\151\156\x69\157\162\141\156\147\145\137\x6f\x61\165\164\150\x5f\154\x6f\x67\151\x6e\x5f\146\x65\x61\x74\165\162\x65\x5f\x6c\151\163\x74"] = array("\43\164\x79\160\145" => "\x74\x61\142\154\145", "\x23\162\x65\x73\x70\x6f\x6e\163\151\x76\145" => TRUE, "\43\x72\x6f\x77\163" => $hg, "\x23\163\151\x7a\x65" => 5, "\x23\x61\x74\x74\162\x69\142\x75\x74\x65\163" => ["\143\x6c\141\x73\163" => "\155\157\137\x75\160\x67\162\x61\144\x65\x5f\x70\x6c\x61\156\163\137\x66\x65\141\x74\x75\x72\145\x73"]);
        $form["\x6d\151\x6e\x69\157\162\141\x67\145\x5f\157\141\165\x74\x68\137\143\x6c\x69\145\156\164\x5f\x69\156\163\x74\x61\156\x63\145\137\142\x61\163\145\x64"] = array("\43\x6d\x61\x72\x6b\x75\x70" => t("\74\x62\x72\x3e\x3c\144\x69\166\40\143\x6c\141\x73\x73\75\42\155\157\137\151\x6e\x73\x74\x61\x6e\143\145\137\156\157\164\x65\42\x3e\74\x62\x3e\x2a\x3c\x2f\142\76\x20\x54\x68\x69\163\40\x6d\x6f\x64\165\154\145\40\x66\x6f\154\x6c\x6f\x77\163\x20\x61\156\x20\x3c\x62\x3e\111\x6e\x73\164\x61\x6e\143\x65\40\x42\x61\163\145\144\74\57\x62\x3e\x20\154\151\143\x65\x6e\163\151\156\147\40\x73\164\x72\165\x63\164\x75\x72\145\56\40\x54\x68\145\40\x6c\151\x73\164\x65\x64\x20\x70\162\x69\x63\145\x73\x20\141\x72\x65\x20\x66\x6f\162\40\160\165\x72\x63\x68\141\x73\x65\40\157\146\40\x61\x20\x73\151\x6e\x67\154\x65\x20\x69\x6e\x73\164\141\156\x63\145\x2e\x20\111\x66\40\x79\157\165\x20\141\162\145\40\160\x6c\x61\x6e\x6e\151\x6e\x67\x20\x74\157\40\165\x73\x65\x20\164\150\145\x20\155\157\144\165\154\145\40\x6f\156\x20\x6d\165\x6c\164\x69\x70\154\145\x20\x69\x6e\x73\164\x61\x6e\x63\145\163\x2c\40\171\x6f\x75\40\143\x61\156\40\x63\x68\145\x63\x6b\40\x6f\x75\x74\40\x74\150\145\x20\142\165\x6c\153\40\x70\165\x72\x63\x68\x61\x73\x65\40\x64\151\163\143\157\165\x6e\164\40\x6f\156\40\157\x75\x72\x20\167\145\x62\163\x69\x74\x65\x2e\x3c\57\144\x69\x76\76\x3c\x62\162\x3e\xd\12\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\x3c\144\x69\x76\x20\143\154\141\163\x73\x3d\42\155\x6f\137\157\x61\x75\164\150\137\143\154\151\145\156\164\137\150\151\147\x68\x6c\151\147\x68\x74\137\142\x61\143\153\x67\162\157\165\156\144\x5f\x6e\x6f\164\x65\137\x33\42\x3e\74\x62\76\x3c\165\76\x57\150\141\164\40\151\x73\x20\x61\156\x20\x49\156\163\x74\141\156\x63\x65\x3a\74\x2f\165\76\74\57\x62\76\x20\101\x20\104\x72\x75\160\141\154\40\x69\x6e\x73\164\x61\x6e\x63\x65\40\162\145\x66\x65\x72\163\40\164\157\x20\x61\40\x73\151\x6e\x67\x6c\x65\x20\151\156\163\x74\x61\154\154\x61\x74\151\x6f\156\x20\x6f\x66\40\x61\x20\x44\x72\x75\160\x61\x6c\x20\x73\151\164\x65\56\x20\111\x74\40\162\x65\x66\x65\162\163\40\x74\x6f\40\x65\141\x63\x68\x20\x69\156\x64\x69\x76\x69\x64\165\141\154\x20\x77\145\x62\x73\x69\x74\x65\40\167\150\145\x72\145\x20\164\150\145\40\155\157\x64\x75\x6c\145\x20\151\163\40\x61\x63\x74\151\x76\x65\x2e\x20\111\156\x20\x74\x68\x65\x20\143\141\163\x65\40\157\x66\x20\x6d\x75\154\164\x69\163\151\164\145\57\163\x75\x62\163\151\x74\x65\x20\x44\x72\x75\x70\141\x6c\x20\163\x65\x74\x75\160\54\x20\145\141\x63\x68\x20\163\151\164\x65\40\x77\x69\164\x68\x20\x61\x20\x73\x65\x70\141\x72\x61\x74\145\40\144\141\164\141\142\x61\163\145\40\167\x69\x6c\154\40\x62\145\x20\x63\x6f\x75\x6e\164\145\144\40\141\x73\40\141\40\163\151\156\147\154\x65\x20\151\x6e\163\164\141\156\x63\145\56\x20\106\x6f\162\40\145\x67\x2e\40\x49\146\40\x79\157\x75\x20\x68\141\x76\x65\40\164\x68\x65\40\x64\x65\x76\55\x73\164\x61\147\151\x6e\147\x2d\160\x72\x6f\144\x20\164\171\x70\x65\x20\x6f\x66\x20\x65\156\x76\x69\x72\x6f\156\155\x65\156\164\40\164\x68\x65\156\x20\x79\x6f\165\40\167\x69\154\x6c\40\x72\x65\x71\165\x69\x72\145\40\63\40\154\151\x63\x65\x6e\x73\x65\163\x20\x6f\x66\40\164\150\x65\x20\x6d\157\x64\x75\154\x65\x20\50\x77\151\x74\x68\x20\x61\144\x64\151\x74\x69\157\156\x61\154\x20\144\151\x73\x63\157\165\x6e\164\163\x20\x61\x70\x70\154\151\143\x61\x62\x6c\145\40\x6f\x6e\40\160\x72\145\55\x70\162\157\144\165\x63\164\151\x6f\x6e\x20\145\x6e\166\x69\162\x6f\156\155\145\156\x74\x73\51\56\x3c\x2f\144\x69\166\76\74\x62\x72\76\15\xa\40\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\74\144\x69\166\40\x63\x6c\141\x73\x73\75\x22\x6d\157\x5f\x69\x6e\x73\x74\x61\156\143\145\137\x6e\x6f\x74\x65\x22\76\x20\x3c\142\76\x2a\52\74\57\142\x3e\40\x54\x68\145\162\x65\40\x69\163\40\141\156\x20\x61\x64\x64\x69\x74\x69\x6f\x6e\x61\154\40\x63\157\x73\164\x20\x66\x6f\x72\40\164\150\x65\40\x4f\101\x75\x74\150\40\x50\162\157\x76\x69\144\x65\162\x73\x20\x69\146\40\x74\x68\145\x20\x6e\x75\155\142\x65\162\x20\x6f\x66\x20\x4f\x41\165\x74\150\40\120\x72\x6f\166\151\x64\145\162\x20\x69\x73\40\x6d\157\162\145\x20\164\150\x61\156\40\x31\56\x3c\x2f\x64\x69\166\x3e"));
        Utilities::moOAuthShowCustomerSupportIcon($form, $form_state);
        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
    }
    function saved_support($form, &$form_state)
    {
        $SZ = $form["\x6d\151\156\151\x6f\162\141\156\147\145\137\x6f\141\x75\164\150\137\143\154\x69\145\156\x74\x5f\x65\x6d\x61\x69\154\137\x61\x64\144\162\x65\x73\x73\137\163\x75\x70\x70\x6f\162\164"]["\x23\166\x61\x6c\165\145"];
        $l0 = $form["\155\151\x6e\x69\157\x72\x61\156\147\x65\137\157\x61\165\x74\x68\x5f\143\154\x69\x65\x6e\x74\137\160\x68\x6f\x6e\x65\137\156\165\x6d\x62\x65\162\x5f\x73\x75\x70\160\x6f\162\164"]["\43\166\141\x6c\165\145"];
        $qF = $form["\x6d\151\x6e\x69\157\162\141\156\x67\x65\x5f\157\141\x75\x74\x68\x5f\143\x6c\x69\145\156\164\x5f\163\165\x70\x70\157\162\x74\137\x71\165\145\x72\x79\x5f\163\x75\160\160\x6f\x72\x74"]["\43\x76\x61\154\x75\x65"];
        $Ue = new MiniorangeOAuthClientSupport($SZ, $l0, $qF);
        $Wm = $Ue->sendSupportQuery();
        if ($Wm) {
            goto iM;
        }
        \Drupal::messenger()->addMessage(t("\105\x72\162\157\x72\40\x73\145\x6e\144\x69\x6e\147\40\x73\165\x70\160\x6f\162\x74\40\x71\x75\145\162\171\56"), "\145\162\162\157\x72");
        goto xY;
        iM:
        \Drupal::messenger()->addMessage(t("\123\165\x70\160\157\162\x74\x20\x71\165\x65\x72\171\x20\x73\x65\x6e\164\40\x73\165\143\x63\x65\x73\x73\x66\x75\x6c\154\171\x2e\x20\x57\x65\x20\167\151\154\154\x20\x62\x65\x20\x69\156\40\164\x6f\x75\143\x68\x20\x73\150\x6f\162\x74\x6c\171\x21"));
        xY:
    }
}