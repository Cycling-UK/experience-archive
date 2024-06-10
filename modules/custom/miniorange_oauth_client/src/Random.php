<?php


if (!function_exists("\143\162\171\160\164\137\162\x61\156\x64\157\155\137\x73\x74\162\151\156\x67")) {
    define("\x43\122\x59\x50\x54\x5f\x52\x41\x4e\104\117\x4d\x5f\x49\123\x5f\x57\x49\x4e\104\x4f\127\123", strtoupper(substr(PHP_OS, 0, 3)) === "\127\111\116");
    function crypt_random_string($ul)
    {
        if ($ul) {
            goto aOS;
        }
        return '';
        aOS:
        if (CRYPT_RANDOM_IS_WINDOWS) {
            goto Ry_;
        }
        if (!(extension_loaded("\x6f\160\x65\x6e\x73\x73\154") && version_compare(PHP_VERSION, "\65\56\63\x2e\x30", "\x3e\75"))) {
            goto OuJ;
        }
        return openssl_random_pseudo_bytes($ul);
        OuJ:
        static $fJ = true;
        if (!($fJ === true)) {
            goto YXQ;
        }
        $fJ = @fopen("\x2f\144\145\x76\57\x75\x72\x61\x6e\144\x6f\x6d", "\x72\142");
        YXQ:
        if (!($fJ !== true && $fJ !== false)) {
            goto jNu;
        }
        return fread($fJ, $ul);
        jNu:
        if (!extension_loaded("\155\x63\x72\171\x70\x74")) {
            goto ruc;
        }
        return @mcrypt_create_iv($ul, MCRYPT_DEV_URANDOM);
        ruc:
        goto yjN;
        Ry_:
        if (!(extension_loaded("\x6d\x63\x72\x79\160\x74") && version_compare(PHP_VERSION, "\x35\x2e\63\x2e\x30", "\x3e\75"))) {
            goto Bil;
        }
        return @mcrypt_create_iv($ul);
        Bil:
        if (!(extension_loaded("\x6f\160\145\x6e\163\163\154") && version_compare(PHP_VERSION, "\x35\56\x33\x2e\x34", "\x3e\x3d"))) {
            goto j1m;
        }
        return openssl_random_pseudo_bytes($ul);
        j1m:
        yjN:
        static $Zw = false, $Vu;
        if (!($Zw === false)) {
            goto dMr;
        }
        $yQ = session_id();
        $us = ini_get("\x73\x65\x73\x73\x69\x6f\x6e\x2e\165\163\145\137\x63\157\x6f\x6b\151\145\163");
        $YY = session_cache_limiter();
        $fH = isset($_SESSION) ? $_SESSION : false;
        if (!($yQ != '')) {
            goto xKR;
        }
        session_write_close();
        xKR:
        session_id(1);
        ini_set("\x73\145\x73\x73\x69\x6f\156\x2e\165\x73\145\137\x63\x6f\157\153\151\145\x73", 0);
        session_cache_limiter('');
        session_start();
        $Vu = $ks = $_SESSION["\163\x65\145\x64"] = pack("\110\52", sha1((isset($_SERVER) ? phpseclib_safe_serialize($_SERVER) : '') . (isset($_POST) ? phpseclib_safe_serialize($_POST) : '') . (isset($_GET) ? phpseclib_safe_serialize($_GET) : '') . (isset($_COOKIE) ? phpseclib_safe_serialize($_COOKIE) : '') . phpseclib_safe_serialize($GLOBALS) . phpseclib_safe_serialize($_SESSION) . phpseclib_safe_serialize($fH)));
        if (isset($_SESSION["\x63\157\165\156\x74"])) {
            goto fYv;
        }
        $_SESSION["\x63\157\165\x6e\x74"] = 0;
        fYv:
        $_SESSION["\143\x6f\165\x6e\164"]++;
        session_write_close();
        if ($yQ != '') {
            goto Kkx;
        }
        if ($fH !== false) {
            goto nPu;
        }
        unset($_SESSION);
        goto k0X;
        nPu:
        $_SESSION = $fH;
        unset($fH);
        k0X:
        goto Ndi;
        Kkx:
        session_id($yQ);
        session_start();
        ini_set("\163\145\x73\163\151\157\156\56\x75\163\x65\137\x63\157\157\x6b\151\x65\x73", $us);
        session_cache_limiter($YY);
        Ndi:
        $GZ = pack("\x48\52", sha1($ks . "\x41"));
        $r7 = pack("\110\x2a", sha1($ks . "\103"));
        switch (true) {
            case phpseclib_resolve_include_path("\103\162\171\160\164\x2f\x41\x45\x53\56\160\150\160"):
                if (class_exists("\x43\x72\x79\x70\164\x5f\x41\x45\x53")) {
                    goto stw;
                }
                include_once "\101\105\123\x2e\160\x68\160";
                stw:
                $Zw = new Crypt_AES(CRYPT_AES_MODE_CTR);
                goto llt;
            case phpseclib_resolve_include_path("\x43\x72\171\160\x74\57\124\167\157\x66\x69\x73\x68\x2e\160\x68\160"):
                if (class_exists("\103\162\x79\x70\164\137\124\167\157\x66\x69\x73\x68")) {
                    goto aru;
                }
                include_once "\x54\167\x6f\146\x69\x73\x68\56\160\x68\160";
                aru:
                $Zw = new Crypt_Twofish(CRYPT_TWOFISH_MODE_CTR);
                goto llt;
            case phpseclib_resolve_include_path("\x43\x72\x79\160\x74\57\102\154\x6f\167\x66\x69\163\x68\56\x70\150\160"):
                if (class_exists("\103\162\171\x70\x74\137\102\154\x6f\167\x66\x69\163\150")) {
                    goto RhJ;
                }
                include_once "\x42\154\x6f\x77\146\151\x73\x68\56\x70\150\x70";
                RhJ:
                $Zw = new Crypt_Blowfish(CRYPT_BLOWFISH_MODE_CTR);
                goto llt;
            case phpseclib_resolve_include_path("\103\162\171\160\164\57\x54\162\151\x70\154\145\x44\105\x53\56\160\150\x70"):
                if (class_exists("\x43\162\x79\160\x74\137\124\x72\151\x70\x6c\145\104\105\x53")) {
                    goto biV;
                }
                include_once "\124\x72\151\x70\x6c\x65\x44\x45\x53\56\x70\x68\x70";
                biV:
                $Zw = new Crypt_TripleDES(CRYPT_DES_MODE_CTR);
                goto llt;
            case phpseclib_resolve_include_path("\103\x72\171\160\x74\57\104\x45\x53\x2e\x70\150\160"):
                if (class_exists("\x43\x72\171\160\164\x5f\104\105\123")) {
                    goto CL8;
                }
                include_once "\104\105\x53\x2e\160\150\160";
                CL8:
                $Zw = new Crypt_DES(CRYPT_DES_MODE_CTR);
                goto llt;
            case phpseclib_resolve_include_path("\103\x72\x79\160\x74\x2f\122\x43\64\56\x70\x68\160"):
                if (class_exists("\103\x72\x79\x70\164\137\122\x43\x34")) {
                    goto PBf;
                }
                include_once "\x52\x43\x34\x2e\160\x68\160";
                PBf:
                $Zw = new Crypt_RC4();
                goto llt;
            default:
                user_error("\x63\162\171\160\164\x5f\x72\141\156\144\x6f\155\x5f\163\164\x72\x69\156\147\40\x72\145\161\x75\151\162\x65\x73\x20\x61\164\40\154\x65\x61\x73\x74\40\x6f\x6e\145\x20\163\171\155\x6d\145\164\162\x69\x63\40\x63\151\160\150\x65\162\40\x62\x65\40\154\x6f\x61\x64\x65\x64");
                return false;
        }
        rrt:
        llt:
        $Zw->setKey($GZ);
        $Zw->setIV($r7);
        $Zw->enableContinuousBuffer();
        dMr:
        $XH = '';
        Agz:
        if (!(strlen($XH) < $ul)) {
            goto wT3;
        }
        $Cs = $Zw->encrypt(microtime());
        $S0 = $Zw->encrypt($Cs ^ $Vu);
        $Vu = $Zw->encrypt($S0 ^ $Cs);
        $XH .= $S0;
        goto Agz;
        wT3:
        return substr($XH, 0, $ul);
    }
}
if (!function_exists("\x70\x68\160\163\x65\143\154\151\x62\x5f\x73\x61\146\x65\x5f\x73\145\x72\151\141\x6c\x69\x7a\145")) {
    function phpseclib_safe_serialize(&$Ke)
    {
        if (!is_object($Ke)) {
            goto VB0;
        }
        return '';
        VB0:
        if (is_array($Ke)) {
            goto qcL;
        }
        return serialize($Ke);
        qcL:
        if (!isset($Ke["\137\x5f\x70\150\x70\x73\145\143\154\151\142\x5f\155\141\162\x6b\x65\162"])) {
            goto gek;
        }
        return '';
        gek:
        $E4 = array();
        $Ke["\x5f\137\x70\x68\160\163\x65\x63\x6c\151\142\137\x6d\141\x72\x6b\145\162"] = true;
        foreach (array_keys($Ke) as $GZ) {
            if (!($GZ !== "\137\137\x70\x68\160\x73\145\x63\154\151\142\137\x6d\x61\162\x6b\x65\x72")) {
                goto qoQ;
            }
            $E4[$GZ] = phpseclib_safe_serialize($Ke[$GZ]);
            qoQ:
            WOq:
        }
        OH_:
        unset($Ke["\137\x5f\160\150\160\x73\x65\143\x6c\x69\142\137\x6d\x61\x72\153\145\x72"]);
        return serialize($E4);
    }
}
if (!function_exists("\x70\150\160\x73\145\143\x6c\151\142\137\162\x65\163\157\x6c\x76\x65\x5f\x69\156\x63\x6c\165\x64\145\x5f\x70\141\164\x68")) {
    function phpseclib_resolve_include_path($VC)
    {
        if (!function_exists("\163\164\162\145\x61\x6d\x5f\162\x65\x73\x6f\154\x76\x65\x5f\151\x6e\x63\x6c\x75\x64\x65\x5f\160\141\164\150")) {
            goto KrY;
        }
        return stream_resolve_include_path($VC);
        KrY:
        if (!file_exists($VC)) {
            goto nsP;
        }
        return realpath($VC);
        nsP:
        $Zt = PATH_SEPARATOR == "\x3a" ? preg_split("\x23\50\x3f\x3c\41\160\150\141\x72\51\x3a\x23", get_include_path()) : explode(PATH_SEPARATOR, get_include_path());
        foreach ($Zt as $CD) {
            $QG = substr($CD, -1) == DIRECTORY_SEPARATOR ? '' : DIRECTORY_SEPARATOR;
            $eR = $CD . $QG . $VC;
            if (!file_exists($eR)) {
                goto jW3;
            }
            return realpath($eR);
            jW3:
            OLI:
        }
        fS1:
        return false;
    }
}
