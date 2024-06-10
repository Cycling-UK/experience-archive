<?php


namespace Drupal\miniorange_oauth_client;

class handler
{
    static function generateRandom($ul = 30)
    {
        $go = "\x61\x62\x63\144\x65\x66\x67\150\151\152\153\154\x6d\156\157\160\161\162\163\164\x75\x76\167\x78\x79\172\x41\102\x43\x44\x45\106\107\110\x49\112\113\x4c\x4d\x4e\x4f\120\121\122\x53\124\x55\126\127\x58\131\132\x30\x31\62\63\64\65\66\67\x38\71";
        $O7 = strlen($go);
        $gg = '';
        $Cs = 0;
        Ea:
        if (!($Cs < $ul)) {
            goto pE;
        }
        $gg .= $go[rand(0, $O7 - 1)];
        cE:
        $Cs++;
        goto Ea;
        pE:
        return $gg;
    }
    static function miniorange_oauth_client_validate_code($V9, $Vv, $DZ)
    {
        $ZI = time();
        if (!($ZI - $DZ >= 400)) {
            goto pf;
        }
        echo "\x59\x6f\x75\162\40\x61\x75\164\x68\145\156\x74\x69\143\x61\164\151\x6f\x6e\40\x63\x6f\x64\x65\40\x68\x61\163\x20\x65\170\x70\x69\162\145\x64\x2e\40\x50\154\x65\141\163\145\x20\x74\162\171\40\x61\147\x61\x69\156\x2e";
        exit;
        pf:
        if ($V9 == $Vv) {
            goto RM;
        }
        print_r("\x49\x6e\143\157\162\x72\145\143\x74\x20\x43\157\144\x65");
        exit;
        goto Vd;
        RM:
        \Drupal::configFactory()->getEditable("\x6d\x69\x6e\151\x6f\162\141\156\147\x65\x5f\x6f\141\x75\x74\150\x5f\x63\154\151\145\156\164\x2e\163\145\164\x74\x69\156\147\163")->set("\x6d\151\x6e\x69\x6f\162\141\x6e\x67\145\137\157\x61\x75\x74\150\137\143\x6c\151\x65\x6e\x74\x5f\143\x6f\144\145", '')->save();
        Vd:
    }
    static function ValidateAccessToken($K7, $DZ)
    {
        $ZI = time();
        if (!($ZI - $DZ >= 900)) {
            goto Jo;
        }
        echo "\x59\x6f\x75\162\40\141\143\143\x65\163\163\40\x74\157\x6b\145\x6e\40\150\x61\163\x20\145\170\160\151\x72\x65\144\x2e\x20\x50\154\145\x61\163\x65\40\x74\162\171\40\141\x67\x61\151\156\56";
        exit;
        Jo:
    }
    static function miniorange_oauth_client_validate_clientSecret($hK)
    {
        $hw = \Drupal::config("\x6d\151\x6e\151\157\162\x61\x6e\147\x65\137\157\x61\x75\164\x68\137\143\x6c\151\145\x6e\x74\x2e\x73\x65\164\164\151\x6e\x67\x73")->get("\x6d\151\156\151\157\x72\141\156\147\145\x5f\157\141\165\164\x68\x5f\x63\154\151\x65\x6e\164\137\x63\154\151\x65\x6e\164\x5f\x73\x65\x63\x72\145\x74");
        if ($hw != '') {
            goto Ri;
        }
        print_r("\x43\154\151\145\156\164\40\123\x65\x63\x72\x65\164\40\x69\163\40\156\x6f\x74\40\143\x6f\156\146\x69\x67\165\162\x65\144");
        exit;
        goto tG;
        Ri:
        if (!($hK != $hw)) {
            goto NQ;
        }
        print_r("\103\x6c\x69\x65\156\x74\x20\x53\x65\x63\162\145\x74\x20\155\x69\x73\x6d\141\x74\x63\150");
        exit;
        NQ:
        tG:
    }
    static function miniorange_oauth_client_validate_grant($CY)
    {
        if (!($CY != "\141\x75\x74\150\x6f\x72\x69\172\x61\x74\x69\157\x6e\137\x63\157\x64\x65")) {
            goto oh;
        }
        print_r("\117\156\154\x79\x20\x41\x75\164\150\x6f\x72\x69\x7a\141\164\x69\157\x6e\40\103\x6f\x64\x65\40\x67\162\x61\x6e\x74\x20\164\x79\160\x65\40\163\x75\x70\160\157\x72\164\145\x64");
        exit;
        oh:
    }
    static function miniorange_oauth_client_validate_clientId($DR)
    {
        $DB = \Drupal::config("\155\151\156\151\x6f\162\x61\x6e\147\x65\x5f\157\x61\165\164\x68\137\x63\154\x69\145\156\164\56\x73\145\164\x74\x69\156\x67\x73")->get("\x6d\x69\x6e\x69\x6f\x72\x61\x6e\x67\x65\x5f\x6f\x61\165\164\x68\137\x63\154\151\145\156\164\x5f\x63\154\x69\145\156\164\137\x69\x64");
        if ($DB != '') {
            goto aZ;
        }
        print_r("\103\154\x69\145\156\164\x20\111\x44\40\151\x73\x20\156\x6f\164\40\143\x6f\x6e\x66\x69\147\x75\x72\x65\144");
        exit;
        goto Us;
        aZ:
        if (!($DR != $DB)) {
            goto x_;
        }
        print_r("\x43\x6c\151\145\x6e\164\x20\x49\x44\x20\x6d\151\163\155\x61\x74\143\x68");
        exit;
        x_:
        Us:
    }
    static function miniorange_oauth_client_validate_redirectUrl($Es)
    {
        $W4 = \Drupal::config("\155\x69\x6e\x69\x6f\162\141\x6e\x67\x65\x5f\157\x61\x75\164\x68\137\x63\x6c\151\x65\x6e\x74\56\163\145\164\164\x69\x6e\x67\x73")->get("\x6d\x69\156\151\157\162\x61\156\x67\x65\137\157\141\x75\164\x68\x5f\143\154\x69\x65\156\x74\137\162\145\x64\x69\x72\x65\x63\x74\x5f\x75\x72\x6c");
        if ($W4 != '') {
            goto YL;
        }
        print_r("\122\x65\x64\x69\162\x65\x63\164\40\x55\x52\x4c\40\x69\163\x20\x6e\x6f\x74\40\143\157\x6e\146\151\x67\x75\x72\x65\x64");
        exit;
        goto N2;
        YL:
        if (!($Es != $W4)) {
            goto cs;
        }
        print_r("\122\145\144\151\162\145\143\x74\40\x55\122\114\40\x6d\x69\x73\x6d\x61\164\143\x68");
        exit;
        cs:
        N2:
    }
}
