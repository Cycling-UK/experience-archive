<?php


namespace Drupal\miniorange_oauth_client;

if (!function_exists("\143\162\x79\160\x74\x5f\x72\141\x6e\144\x6f\x6d\137\163\164\x72\x69\156\x67")) {
    include_once "\122\141\156\x64\157\x6d\56\x70\150\160";
}
if (class_exists("\103\x72\171\160\164\x5f\110\x61\163\150")) {
    goto Qo;
}
include_once "\x43\x72\171\x70\x74\x5f\x48\x61\163\150\x2e\160\150\160";
Qo:
define("\103\x52\131\120\x54\x5f\122\x53\101\x5f\x45\116\x43\122\x59\120\124\111\117\x4e\137\117\x41\x45\120", 1);
define("\103\x52\x59\120\x54\x5f\122\x53\x41\137\x45\x4e\x43\x52\x59\120\x54\x49\117\116\137\x50\x4b\x43\123\x31", 2);
define("\x43\122\131\x50\124\137\122\123\x41\x5f\105\x4e\x43\122\x59\x50\x54\111\117\116\x5f\x4e\117\116\x45", 3);
define("\103\122\x59\x50\x54\x5f\x52\x53\101\137\x53\x49\107\116\x41\x54\x55\x52\x45\137\x50\123\123", 1);
define("\103\122\131\120\x54\x5f\122\123\x41\137\123\111\x47\116\x41\x54\125\122\x45\137\120\113\103\x53\x31", 2);
define("\x43\122\131\x50\x54\137\x52\123\101\137\x41\x53\116\x31\x5f\x49\x4e\124\105\x47\x45\x52", 2);
define("\x43\122\x59\x50\124\137\x52\x53\x41\x5f\x41\x53\116\61\137\x42\x49\124\123\x54\x52\x49\x4e\x47", 3);
define("\x43\x52\131\120\x54\137\x52\123\x41\137\101\123\x4e\x31\137\117\x43\124\x45\x54\123\124\122\x49\x4e\x47", 4);
define("\x43\122\x59\x50\124\x5f\x52\x53\x41\x5f\101\123\116\61\x5f\x4f\102\112\105\103\x54", 6);
define("\x43\x52\x59\x50\x54\x5f\122\123\101\x5f\101\123\x4e\61\137\x53\x45\x51\x55\105\x4e\x43\105", 48);
define("\x43\x52\131\120\x54\137\122\123\x41\x5f\115\x4f\x44\x45\137\111\x4e\124\x45\x52\x4e\101\114", 1);
define("\103\x52\131\120\x54\x5f\122\123\101\137\x4d\117\104\105\x5f\x4f\120\x45\x4e\123\x53\114", 2);
define("\x43\x52\131\120\x54\137\122\x53\x41\x5f\x4f\120\x45\x4e\123\123\x4c\x5f\103\x4f\116\106\x49\x47", dirname(__FILE__) . "\57\56\56\57\x6f\160\x65\156\x73\x73\154\x2e\143\156\146");
define("\103\122\x59\120\x54\x5f\x52\123\x41\137\x50\x52\x49\126\101\x54\x45\x5f\x46\x4f\x52\115\101\124\137\x50\113\103\123\x31", 0);
define("\x43\x52\131\x50\124\137\122\123\101\x5f\x50\x52\x49\x56\101\124\x45\x5f\106\117\x52\x4d\101\124\137\120\125\x54\124\x59", 1);
define("\x43\x52\131\x50\x54\137\x52\123\x41\x5f\120\122\111\x56\x41\x54\x45\x5f\106\117\x52\115\x41\x54\x5f\130\x4d\x4c", 2);
define("\x43\122\x59\x50\x54\137\122\123\x41\137\120\x52\x49\x56\x41\x54\x45\137\106\117\122\115\101\124\x5f\x50\113\103\123\70", 8);
define("\x43\122\x59\120\x54\137\x52\123\101\x5f\120\125\x42\x4c\111\103\137\106\x4f\122\x4d\x41\x54\x5f\122\x41\x57", 3);
define("\103\x52\131\x50\124\137\x52\x53\101\137\120\x55\x42\x4c\x49\103\x5f\x46\117\x52\115\x41\x54\x5f\x50\113\x43\123\61", 4);
define("\x43\122\131\x50\124\137\122\123\101\x5f\120\x55\102\114\111\x43\137\106\x4f\x52\115\101\124\137\x50\113\103\123\x31\137\x52\101\x57", 4);
define("\x43\x52\x59\120\x54\137\x52\123\x41\137\x50\x55\x42\114\x49\x43\137\x46\x4f\x52\x4d\101\124\x5f\x58\x4d\114", 5);
define("\x43\122\x59\120\x54\137\x52\x53\x41\x5f\120\x55\102\x4c\x49\103\x5f\x46\x4f\x52\115\x41\x54\x5f\117\x50\x45\116\x53\x53\110", 6);
define("\103\x52\x59\x50\x54\x5f\x52\123\101\x5f\120\125\x42\x4c\x49\103\x5f\x46\x4f\x52\115\101\124\137\x50\x4b\103\123\x38", 7);
class Crypt_RSA
{
    var $zero;
    var $one;
    var $privateKeyFormat = CRYPT_RSA_PRIVATE_FORMAT_PKCS1;
    var $publicKeyFormat = CRYPT_RSA_PUBLIC_FORMAT_PKCS8;
    var $modulus;
    var $k;
    var $exponent;
    var $primes;
    var $exponents;
    var $coefficients;
    var $hashName;
    var $hash;
    var $hLen;
    var $sLen;
    var $mgfHash;
    var $mgfHLen;
    var $encryptionMode = CRYPT_RSA_ENCRYPTION_OAEP;
    var $signatureMode = CRYPT_RSA_SIGNATURE_PSS;
    var $publicExponent = false;
    var $password = false;
    var $components = array();
    var $current;
    var $configFile;
    var $comment = "\x70\x68\x70\163\145\x63\x6c\151\x62\x2d\x67\145\156\x65\162\141\x74\145\144\x2d\x6b\145\171";
    function __construct()
    {
        if (class_exists("\115\141\164\150\137\x42\x69\147\111\156\164\x65\x67\x65\162")) {
            goto qA;
        }
        include_once "\115\x61\x74\150\137\102\x69\x67\x49\156\164\x65\x67\145\162\x2e\160\x68\x70";
        qA:
        $this->configFile = CRYPT_RSA_OPENSSL_CONFIG;
        if (defined("\x43\x52\x59\120\124\137\x52\x53\101\x5f\115\117\104\105")) {
            goto Ay;
        }
        switch (true) {
            case defined("\115\101\124\x48\137\102\x49\x47\111\x4e\x54\105\x47\x45\x52\x5f\117\x50\x45\116\123\123\x4c\137\104\x49\123\101\x42\x4c\x45"):
                define("\x43\122\131\120\124\137\x52\123\101\x5f\115\x4f\x44\x45", CRYPT_RSA_MODE_INTERNAL);
                goto nr;
            case !function_exists("\157\160\145\156\x73\163\154\x5f\160\x6b\145\x79\137\147\145\164\137\x64\x65\164\141\151\154\x73"):
                define("\103\122\x59\x50\x54\137\x52\123\x41\137\115\117\x44\x45", CRYPT_RSA_MODE_INTERNAL);
                goto nr;
            case extension_loaded("\x6f\x70\145\156\163\x73\x6c") && version_compare(PHP_VERSION, "\64\56\62\56\x30", "\x3e\x3d") && file_exists($this->configFile):
                ob_start();
                @phpinfo();
                $F2 = ob_get_contents();
                ob_end_clean();
                preg_match_all("\43\117\x70\x65\x6e\123\123\114\40\50\x48\x65\x61\x64\x65\162\x7c\x4c\x69\142\x72\141\x72\171\x29\40\x56\x65\162\163\x69\x6f\156\50\56\52\51\x23\151\155", $F2, $Tv);
                $bL = array();
                if (empty($Tv[1])) {
                    goto O3;
                }
                $Cs = 0;
                jp:
                if (!($Cs < count($Tv[1]))) {
                    goto rQ;
                }
                $Zv = trim(str_replace("\x3d\76", '', strip_tags($Tv[2][$Cs])));
                if (!preg_match("\57\x28\x5c\x64\x2b\x5c\56\x5c\x64\x2b\x5c\x2e\134\144\53\x29\x2f\x69", $Zv, $Bf)) {
                    goto Iz;
                }
                $bL[$Tv[1][$Cs]] = $Bf[0];
                goto Th;
                Iz:
                $bL[$Tv[1][$Cs]] = $Zv;
                Th:
                Gv:
                $Cs++;
                goto jp;
                rQ:
                O3:
                switch (true) {
                    case !isset($bL["\x48\x65\x61\x64\145\162"]):
                    case !isset($bL["\x4c\151\142\x72\141\x72\171"]):
                    case $bL["\110\x65\x61\x64\145\162"] == $bL["\114\151\142\162\141\162\171"]:
                    case version_compare($bL["\x48\145\141\144\x65\x72"], "\x31\56\60\56\x30") >= 0 && version_compare($bL["\x4c\x69\x62\x72\x61\162\x79"], "\61\56\x30\56\x30") >= 0:
                        define("\x43\122\131\x50\124\x5f\x52\123\x41\x5f\x4d\x4f\x44\105", CRYPT_RSA_MODE_OPENSSL);
                        goto Tl;
                    default:
                        define("\103\122\131\x50\124\x5f\122\x53\101\x5f\115\117\104\105", CRYPT_RSA_MODE_INTERNAL);
                        define("\115\x41\x54\x48\137\x42\111\x47\111\x4e\x54\105\x47\105\122\137\117\120\105\116\x53\x53\x4c\137\104\x49\123\x41\x42\114\105", true);
                }
                W5:
                Tl:
                goto nr;
            default:
                define("\x43\x52\x59\120\124\x5f\122\123\x41\137\x4d\x4f\x44\105", CRYPT_RSA_MODE_INTERNAL);
        }
        eS:
        nr:
        Ay:
        $this->zero = new Math_BigInteger();
        $this->one = new Math_BigInteger(1);
        $this->hash = new Crypt_Hash("\x73\x68\141\x31");
        $this->hLen = $this->hash->getLength();
        $this->hashName = "\x73\x68\x61\61";
        $this->mgfHash = new Crypt_Hash("\163\x68\141\x31");
        $this->mgfHLen = $this->mgfHash->getLength();
    }
    function Crypt_RSA()
    {
        $this->__construct();
    }
    function createKey($Ve = 1024, $Y6 = false, $uH = array())
    {
        if (defined("\x43\x52\131\x50\124\137\122\123\x41\137\105\x58\120\117\116\x45\x4e\124")) {
            goto F7;
        }
        define("\103\122\131\120\x54\x5f\122\x53\101\x5f\105\130\120\117\116\105\x4e\x54", "\66\65\65\x33\67");
        F7:
        if (defined("\103\x52\x59\120\124\x5f\x52\x53\x41\x5f\123\x4d\x41\x4c\x4c\105\123\124\x5f\x50\122\x49\115\105")) {
            goto fD;
        }
        define("\103\x52\x59\x50\124\x5f\x52\x53\x41\137\123\115\101\114\114\105\x53\124\x5f\x50\122\111\115\105", 4096);
        fD:
        if (!(CRYPT_RSA_MODE == CRYPT_RSA_MODE_OPENSSL && $Ve >= 384 && CRYPT_RSA_EXPONENT == 65537)) {
            goto VA;
        }
        $tK = array();
        if (!isset($this->configFile)) {
            goto zR;
        }
        $tK["\143\x6f\156\146\151\147"] = $this->configFile;
        zR:
        $Ja = openssl_pkey_new(array("\x70\x72\x69\x76\x61\164\x65\x5f\153\145\x79\137\x62\151\164\163" => $Ve) + $tK);
        openssl_pkey_export($Ja, $ZW, null, $tK);
        $Gp = openssl_pkey_get_details($Ja);
        $Gp = $Gp["\153\x65\x79"];
        $ZW = call_user_func_array(array($this, "\137\143\x6f\156\x76\x65\162\x74\120\x72\151\x76\x61\x74\x65\x4b\145\171"), array_values($this->_parseKey($ZW, CRYPT_RSA_PRIVATE_FORMAT_PKCS1)));
        $Gp = call_user_func_array(array($this, "\137\x63\x6f\x6e\x76\x65\162\164\x50\165\x62\154\x69\143\113\x65\171"), array_values($this->_parseKey($Gp, CRYPT_RSA_PUBLIC_FORMAT_PKCS1)));
        sR:
        if (!(openssl_error_string() !== false)) {
            goto kD;
        }
        goto sR;
        kD:
        return array("\160\x72\151\166\x61\164\145\153\145\x79" => $ZW, "\x70\x75\142\x6c\151\x63\x6b\145\x79" => $Gp, "\160\141\x72\164\x69\x61\x6c\x6b\145\x79" => false);
        VA:
        static $jM;
        if (isset($jM)) {
            goto cF;
        }
        $jM = new Math_BigInteger(CRYPT_RSA_EXPONENT);
        cF:
        extract($this->_generateMinMax($Ve));
        $ai = $BB;
        $eW = $Ve >> 1;
        if ($eW > CRYPT_RSA_SMALLEST_PRIME) {
            goto Vz;
        }
        $Uk = 2;
        goto GA;
        Vz:
        $Uk = floor($Ve / CRYPT_RSA_SMALLEST_PRIME);
        $eW = CRYPT_RSA_SMALLEST_PRIME;
        GA:
        extract($this->_generateMinMax($eW + $Ve % $eW));
        $LY = $lw;
        extract($this->_generateMinMax($eW));
        $JQ = new Math_BigInteger();
        $g6 = $this->one->copy();
        if (!empty($uH)) {
            goto jG;
        }
        $sP = $lq = $Dx = array();
        $dR = array("\164\157\x70" => $this->one->copy(), "\142\x6f\x74\x74\x6f\x6d" => false);
        goto Zi;
        jG:
        extract(unserialize($uH));
        Zi:
        $ZF = time();
        $rS = count($Dx) + 1;
        q4:
        $Cs = $rS;
        xL:
        if (!($Cs <= $Uk)) {
            goto cV;
        }
        if (!($Y6 !== false)) {
            goto qm;
        }
        $Y6 -= time() - $ZF;
        $ZF = time();
        if (!($Y6 <= 0)) {
            goto Jn;
        }
        return array("\160\162\x69\166\x61\x74\x65\153\x65\x79" => '', "\160\165\x62\154\151\x63\153\x65\171" => '', "\160\141\x72\164\151\141\x6c\153\145\x79" => serialize(array("\160\162\151\x6d\145\x73" => $Dx, "\143\157\145\x66\146\151\143\x69\145\x6e\164\x73" => $lq, "\154\x63\x6d" => $dR, "\145\x78\x70\x6f\x6e\145\156\x74\163" => $sP)));
        Jn:
        qm:
        if ($Cs == $Uk) {
            goto sD;
        }
        $Dx[$Cs] = $JQ->randomPrime($BB, $lw, $Y6);
        goto Qz;
        sD:
        list($BB, $eW) = $ai->divide($g6);
        if ($eW->equals($this->zero)) {
            goto DD;
        }
        $BB = $BB->add($this->one);
        DD:
        $Dx[$Cs] = $JQ->randomPrime($BB, $LY, $Y6);
        Qz:
        if (!($Dx[$Cs] === false)) {
            goto LU;
        }
        if (count($Dx) > 1) {
            goto Nr;
        }
        array_pop($Dx);
        $I0 = serialize(array("\x70\x72\151\155\145\163" => $Dx, "\x63\157\x65\146\146\x69\143\x69\145\x6e\x74\163" => $lq, "\x6c\143\155" => $dR, "\x65\170\160\157\x6e\145\x6e\164\163" => $sP));
        goto St;
        Nr:
        $I0 = '';
        St:
        return array("\x70\x72\x69\166\x61\164\145\153\145\x79" => '', "\160\x75\142\154\151\143\153\x65\x79" => '', "\160\141\162\164\x69\141\x6c\153\145\x79" => $I0);
        LU:
        if (!($Cs > 2)) {
            goto Cq;
        }
        $lq[$Cs] = $g6->modInverse($Dx[$Cs]);
        Cq:
        $g6 = $g6->multiply($Dx[$Cs]);
        $eW = $Dx[$Cs]->subtract($this->one);
        $dR["\x74\157\160"] = $dR["\x74\x6f\160"]->multiply($eW);
        $dR["\142\x6f\164\164\157\x6d"] = $dR["\x62\x6f\x74\164\157\x6d"] === false ? $eW : $dR["\x62\x6f\x74\164\157\x6d"]->gcd($eW);
        $sP[$Cs] = $jM->modInverse($eW);
        IY:
        $Cs++;
        goto xL;
        cV:
        list($eW) = $dR["\x74\157\160"]->divide($dR["\x62\x6f\164\164\x6f\155"]);
        $t2 = $eW->gcd($jM);
        $rS = 1;
        if (!$t2->equals($this->one)) {
            goto q4;
        }
        A_:
        $FW = $jM->modInverse($eW);
        $lq[2] = $Dx[2]->modInverse($Dx[1]);
        return array("\x70\x72\x69\x76\x61\164\x65\x6b\145\171" => $this->_convertPrivateKey($g6, $jM, $FW, $Dx, $sP, $lq), "\x70\x75\x62\x6c\x69\x63\x6b\x65\171" => $this->_convertPublicKey($g6, $jM), "\160\141\x72\164\x69\141\x6c\x6b\x65\x79" => false);
    }
    function _convertPrivateKey($g6, $jM, $FW, $Dx, $sP, $lq)
    {
        $QW = $this->privateKeyFormat != CRYPT_RSA_PRIVATE_FORMAT_XML;
        $Uk = count($Dx);
        $Yf = array("\166\x65\162\163\151\x6f\x6e" => $Uk == 2 ? chr(0) : chr(1), "\x6d\x6f\144\165\154\165\163" => $g6->toBytes($QW), "\160\165\142\x6c\x69\143\x45\170\x70\157\156\x65\156\164" => $jM->toBytes($QW), "\160\162\151\x76\x61\x74\145\x45\x78\x70\157\x6e\x65\156\164" => $FW->toBytes($QW), "\x70\162\x69\155\x65\x31" => $Dx[1]->toBytes($QW), "\160\x72\151\155\x65\x32" => $Dx[2]->toBytes($QW), "\x65\x78\x70\x6f\x6e\145\156\164\61" => $sP[1]->toBytes($QW), "\145\x78\160\157\x6e\145\x6e\x74\62" => $sP[2]->toBytes($QW), "\143\x6f\145\146\146\151\143\x69\145\156\x74" => $lq[2]->toBytes($QW));
        switch ($this->privateKeyFormat) {
            case CRYPT_RSA_PRIVATE_FORMAT_XML:
                if (!($Uk != 2)) {
                    goto E6;
                }
                return false;
                E6:
                return "\x3c\x52\123\101\x4b\145\171\126\141\x6c\x75\x65\76\xd\xa" . "\40\40\x3c\115\x6f\144\x75\154\x75\x73\76" . base64_encode($Yf["\155\157\144\165\154\165\163"]) . "\x3c\57\x4d\x6f\144\x75\154\165\163\76\15\xa" . "\40\40\x3c\105\x78\160\x6f\x6e\145\156\164\76" . base64_encode($Yf["\160\165\142\154\151\x63\105\170\160\x6f\156\145\x6e\164"]) . "\74\57\x45\170\x70\157\156\145\x6e\164\x3e\xd\xa" . "\40\40\74\120\76" . base64_encode($Yf["\x70\162\151\x6d\145\x31"]) . "\74\x2f\x50\76\xd\xa" . "\40\40\x3c\x51\x3e" . base64_encode($Yf["\x70\162\151\x6d\145\62"]) . "\74\57\x51\76\xd\12" . "\x20\x20\74\x44\120\x3e" . base64_encode($Yf["\145\170\160\x6f\156\145\156\164\x31"]) . "\74\x2f\104\120\x3e\15\xa" . "\x20\x20\x3c\104\121\76" . base64_encode($Yf["\145\x78\160\x6f\x6e\x65\156\x74\62"]) . "\x3c\57\104\x51\76\xd\12" . "\x20\x20\74\111\156\x76\145\162\163\x65\x51\x3e" . base64_encode($Yf["\x63\x6f\145\x66\146\151\x63\151\145\x6e\x74"]) . "\74\57\x49\x6e\x76\x65\162\163\x65\x51\76\15\xa" . "\x20\x20\74\104\76" . base64_encode($Yf["\x70\x72\x69\166\141\164\145\105\170\x70\x6f\156\x65\x6e\164"]) . "\74\57\104\x3e\xd\xa" . "\74\57\122\123\101\113\x65\171\x56\x61\154\165\145\76";
                goto e4;
            case CRYPT_RSA_PRIVATE_FORMAT_PUTTY:
                if (!($Uk != 2)) {
                    goto S_;
                }
                return false;
                S_:
                $GZ = "\x50\165\x54\x54\131\55\125\163\x65\162\x2d\113\145\x79\x2d\x46\151\154\x65\55\x32\72\40\x73\163\150\x2d\162\163\x61\15\xa\105\x6e\143\162\171\160\x74\151\157\x6e\72\40";
                $Ky = !empty($this->password) || is_string($this->password) ? "\141\145\163\x32\x35\x36\55\x63\142\x63" : "\x6e\157\156\145";
                $GZ .= $Ky;
                $GZ .= "\xd\12\x43\x6f\155\155\145\156\164\x3a\40" . $this->comment . "\15\12";
                $OY = pack("\x4e\x61\x2a\116\x61\52\116\x61\52", strlen("\163\163\150\x2d\x72\x73\141"), "\x73\x73\150\55\162\x73\x61", strlen($Yf["\160\x75\x62\154\151\x63\105\x78\160\x6f\156\x65\x6e\164"]), $Yf["\160\x75\x62\x6c\x69\x63\105\x78\x70\x6f\156\145\156\x74"], strlen($Yf["\x6d\x6f\x64\165\x6c\x75\x73"]), $Yf["\x6d\157\144\x75\154\165\x73"]);
                $bs = pack("\116\141\52\116\x61\52\x4e\141\x2a\116\x61\52", strlen("\163\163\x68\x2d\162\x73\141"), "\x73\163\x68\x2d\162\163\x61", strlen($Ky), $Ky, strlen($this->comment), $this->comment, strlen($OY), $OY);
                $OY = base64_encode($OY);
                $GZ .= "\120\165\142\x6c\x69\143\x2d\x4c\151\156\145\x73\x3a\40" . (strlen($OY) + 63 >> 6) . "\15\xa";
                $GZ .= chunk_split($OY, 64);
                $JA = pack("\116\141\52\x4e\x61\52\x4e\141\52\116\x61\x2a", strlen($Yf["\x70\162\151\x76\141\164\145\105\170\160\x6f\x6e\x65\x6e\x74"]), $Yf["\x70\x72\151\166\x61\164\x65\x45\170\x70\x6f\x6e\145\156\164"], strlen($Yf["\160\x72\x69\155\x65\x31"]), $Yf["\x70\x72\x69\x6d\145\x31"], strlen($Yf["\x70\162\x69\155\x65\62"]), $Yf["\x70\162\x69\x6d\x65\62"], strlen($Yf["\x63\157\x65\x66\x66\151\143\151\145\156\164"]), $Yf["\x63\x6f\145\x66\146\x69\x63\x69\145\x6e\164"]);
                if (empty($this->password) && !is_string($this->password)) {
                    goto R1;
                }
                $JA .= crypt_random_string(16 - (strlen($JA) & 15));
                $bs .= pack("\x4e\141\52", strlen($JA), $JA);
                if (class_exists("\103\x72\171\x70\164\137\x41\105\123")) {
                    goto Ja;
                }
                include_once "\x43\x72\171\x70\164\57\x41\x45\x53\x2e\x70\150\160";
                Ja:
                $Gz = 0;
                $oz = '';
                j7:
                if (!(strlen($oz) < 32)) {
                    goto ZE;
                }
                $eW = pack("\116\141\52", $Gz++, $this->password);
                $oz .= pack("\110\x2a", sha1($eW));
                goto j7;
                ZE:
                $oz = substr($oz, 0, 32);
                $Zw = new Crypt_AES();
                $Zw->setKey($oz);
                $Zw->disablePadding();
                $JA = $Zw->encrypt($JA);
                $X3 = "\160\x75\x74\x74\x79\55\x70\x72\151\166\x61\164\145\55\x6b\145\x79\x2d\x66\151\154\145\x2d\155\141\143\x2d\x6b\x65\171" . $this->password;
                goto Zh;
                R1:
                $bs .= pack("\x4e\x61\52", strlen($JA), $JA);
                $X3 = "\x70\165\x74\x74\171\55\160\x72\x69\x76\x61\x74\x65\x2d\x6b\145\171\x2d\146\151\x6c\145\x2d\155\x61\143\x2d\153\145\x79";
                Zh:
                $JA = base64_encode($JA);
                $GZ .= "\x50\162\151\166\x61\164\145\x2d\x4c\151\x6e\145\x73\72\40" . (strlen($JA) + 63 >> 6) . "\xd\xa";
                $GZ .= chunk_split($JA, 64);
                if (class_exists("\103\x72\171\x70\x74\x5f\x48\x61\163\x68")) {
                    goto ia;
                }
                include_once "\103\x72\171\x70\164\137\x48\141\x73\x68\56\160\x68\x70";
                ia:
                $Av = new Crypt_Hash("\x73\150\x61\x31");
                $Av->setKey(pack("\x48\52", sha1($X3)));
                $GZ .= "\120\162\151\166\x61\x74\x65\x2d\x4d\x41\103\x3a\x20" . bin2hex($Av->hash($bs)) . "\15\xa";
                return $GZ;
            default:
                $sO = array();
                foreach ($Yf as $ao => $KT) {
                    $sO[$ao] = pack("\x43\141\x2a\141\52", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($KT)), $KT);
                    Nx:
                }
                CR:
                $gT = implode('', $sO);
                if (!($Uk > 2)) {
                    goto W8;
                }
                $Dy = '';
                $Cs = 3;
                P_:
                if (!($Cs <= $Uk)) {
                    goto x2;
                }
                $ng = pack("\103\x61\52\x61\52", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($Dx[$Cs]->toBytes(true))), $Dx[$Cs]->toBytes(true));
                $ng .= pack("\x43\141\x2a\x61\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($sP[$Cs]->toBytes(true))), $sP[$Cs]->toBytes(true));
                $ng .= pack("\x43\x61\x2a\x61\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($lq[$Cs]->toBytes(true))), $lq[$Cs]->toBytes(true));
                $Dy .= pack("\103\141\x2a\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($ng)), $ng);
                Bf:
                $Cs++;
                goto P_;
                x2:
                $gT .= pack("\103\141\x2a\141\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($Dy)), $Dy);
                W8:
                $gT = pack("\x43\141\52\141\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($gT)), $gT);
                if (!($this->privateKeyFormat == CRYPT_RSA_PRIVATE_FORMAT_PKCS8)) {
                    goto SS;
                }
                $c_ = pack("\x48\52", "\63\60\60\144\60\x36\x30\71\x32\141\70\x36\x34\70\70\x36\146\67\60\x64\60\61\60\x31\60\61\60\65\60\60");
                $gT = pack("\x43\x61\x2a\141\52\x43\141\52\x61\52", CRYPT_RSA_ASN1_INTEGER, "\1\0", $c_, 4, $this->_encodeLength(strlen($gT)), $gT);
                $gT = pack("\103\141\52\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($gT)), $gT);
                if (!empty($this->password) || is_string($this->password)) {
                    goto bj;
                }
                $gT = "\x2d\x2d\x2d\x2d\55\x42\x45\107\111\116\x20\120\122\111\x56\x41\x54\105\x20\x4b\105\x59\55\55\x2d\55\55\xd\xa" . chunk_split(base64_encode($gT), 64) . "\55\55\x2d\55\x2d\105\116\x44\40\x50\122\111\x56\x41\x54\105\40\x4b\105\x59\x2d\x2d\55\55\55";
                goto yt;
                bj:
                $tz = crypt_random_string(8);
                $bv = 2048;
                if (class_exists("\x43\x72\x79\x70\x74\137\104\105\123")) {
                    goto kV;
                }
                include_once "\103\x72\x79\x70\164\57\104\x45\123\x2e\160\x68\x70";
                kV:
                $Zw = new Crypt_DES();
                $Zw->setPassword($this->password, "\160\x62\153\144\x66\61", "\155\144\65", $tz, $bv);
                $gT = $Zw->encrypt($gT);
                $JK = pack("\x43\x61\52\x61\x2a\103\x61\52\116", CRYPT_RSA_ASN1_OCTETSTRING, $this->_encodeLength(strlen($tz)), $tz, CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(4), $bv);
                $lL = "\x2a\x86\x48\x86\367\xd\1\5\3";
                $ez = pack("\103\141\x2a\x61\x2a\x43\x61\x2a\x61\52", CRYPT_RSA_ASN1_OBJECT, $this->_encodeLength(strlen($lL)), $lL, CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($JK)), $JK);
                $gT = pack("\x43\141\x2a\x61\52\x43\x61\52\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($ez)), $ez, CRYPT_RSA_ASN1_OCTETSTRING, $this->_encodeLength(strlen($gT)), $gT);
                $gT = pack("\x43\141\x2a\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($gT)), $gT);
                $gT = "\55\x2d\55\55\x2d\102\105\x47\111\x4e\40\105\x4e\103\122\131\120\124\x45\104\x20\x50\x52\111\x56\x41\x54\105\x20\x4b\105\x59\x2d\55\55\x2d\x2d\xd\12" . chunk_split(base64_encode($gT), 64) . "\55\x2d\x2d\55\x2d\105\116\x44\40\105\116\x43\x52\131\x50\124\x45\x44\40\x50\x52\x49\126\x41\x54\x45\x20\x4b\105\131\x2d\55\x2d\x2d\x2d";
                yt:
                return $gT;
                SS:
                if (!empty($this->password) || is_string($this->password)) {
                    goto t6;
                }
                $gT = "\55\x2d\55\55\55\102\x45\x47\111\116\x20\122\123\x41\40\x50\122\x49\x56\x41\x54\x45\40\x4b\x45\x59\55\x2d\55\x2d\x2d\15\12" . chunk_split(base64_encode($gT), 64) . "\x2d\x2d\x2d\x2d\55\x45\x4e\x44\40\122\123\101\x20\x50\x52\x49\x56\101\124\x45\x20\x4b\105\131\55\x2d\55\55\55";
                goto uv;
                t6:
                $r7 = crypt_random_string(8);
                $oz = pack("\110\x2a", md5($this->password . $r7));
                $oz .= substr(pack("\x48\x2a", md5($oz . $this->password . $r7)), 0, 8);
                if (class_exists("\103\162\171\x70\x74\137\x54\x72\151\160\x6c\x65\x44\105\x53")) {
                    goto g7;
                }
                include_once "\x43\x72\x79\160\x74\x2f\124\162\x69\160\x6c\x65\x44\x45\x53\x2e\x70\150\x70";
                g7:
                $Nu = new Crypt_TripleDES();
                $Nu->setKey($oz);
                $Nu->setIV($r7);
                $r7 = strtoupper(bin2hex($r7));
                $gT = "\55\55\x2d\55\x2d\x42\105\x47\111\x4e\40\x52\123\x41\x20\120\x52\x49\126\x41\x54\105\40\x4b\105\131\55\55\x2d\x2d\x2d\xd\12" . "\120\x72\157\143\55\124\x79\160\145\72\x20\x34\x2c\x45\x4e\x43\x52\x59\120\x54\x45\x44\15\xa" . "\x44\x45\x4b\55\111\156\x66\x6f\x3a\40\x44\105\x53\x2d\x45\104\105\x33\x2d\103\x42\103\x2c{$r7}\xd\12" . "\15\xa" . chunk_split(base64_encode($Nu->encrypt($gT)), 64) . "\55\x2d\x2d\55\55\105\116\104\x20\x52\123\101\40\120\x52\x49\x56\x41\124\105\40\x4b\x45\131\55\x2d\55\55\x2d";
                uv:
                return $gT;
        }
        Q1:
        e4:
    }
    function _convertPublicKey($g6, $jM)
    {
        $QW = $this->publicKeyFormat != CRYPT_RSA_PUBLIC_FORMAT_XML;
        $gr = $g6->toBytes($QW);
        $fE = $jM->toBytes($QW);
        switch ($this->publicKeyFormat) {
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                return array("\x65" => $jM->copy(), "\156" => $g6->copy());
            case CRYPT_RSA_PUBLIC_FORMAT_XML:
                return "\x3c\x52\x53\101\113\145\171\126\x61\154\165\x65\x3e\xd\xa" . "\x20\x20\x3c\x4d\x6f\144\165\154\x75\x73\x3e" . base64_encode($gr) . "\x3c\x2f\x4d\157\x64\165\x6c\165\x73\x3e\15\xa" . "\40\40\x3c\105\x78\x70\x6f\156\145\156\164\76" . base64_encode($fE) . "\74\57\x45\170\160\x6f\156\145\x6e\164\x3e\xd\xa" . "\x3c\57\122\x53\x41\113\145\x79\x56\141\154\165\145\76";
                goto mp;
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
                $bT = pack("\x4e\x61\52\x4e\141\x2a\x4e\x61\x2a", strlen("\x73\163\x68\55\162\x73\141"), "\163\x73\x68\55\x72\x73\x61", strlen($fE), $fE, strlen($gr), $gr);
                $bT = "\163\x73\x68\55\x72\163\x61\40" . base64_encode($bT) . "\x20" . $this->comment;
                return $bT;
            default:
                $sO = array("\x6d\157\144\x75\154\165\163" => pack("\103\141\52\141\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($gr)), $gr), "\160\x75\x62\x6c\x69\x63\x45\170\x70\x6f\156\145\x6e\x74" => pack("\x43\x61\52\x61\52", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($fE)), $fE));
                $bT = pack("\x43\x61\52\x61\x2a\141\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($sO["\x6d\157\x64\x75\x6c\x75\x73"]) + strlen($sO["\160\x75\x62\x6c\x69\143\x45\x78\160\x6f\156\145\x6e\x74"])), $sO["\x6d\x6f\144\165\154\165\163"], $sO["\x70\165\142\x6c\151\x63\105\x78\160\x6f\156\x65\156\x74"]);
                if ($this->publicKeyFormat == CRYPT_RSA_PUBLIC_FORMAT_PKCS1_RAW) {
                    goto Tx;
                }
                $c_ = pack("\x48\x2a", "\x33\x30\x30\x64\60\x36\60\71\62\x61\x38\66\64\70\x38\x36\x66\x37\60\x64\x30\61\60\x31\x30\x31\x30\x35\60\60");
                $bT = chr(0) . $bT;
                $bT = chr(3) . $this->_encodeLength(strlen($bT)) . $bT;
                $bT = pack("\103\x61\x2a\141\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($c_ . $bT)), $c_ . $bT);
                $bT = "\x2d\x2d\55\x2d\55\102\105\x47\111\116\40\x50\125\102\x4c\x49\103\40\x4b\x45\131\x2d\55\x2d\x2d\x2d\xd\12" . chunk_split(base64_encode($bT), 64) . "\55\55\55\55\x2d\105\x4e\104\40\x50\x55\x42\x4c\x49\103\x20\x4b\105\131\x2d\x2d\x2d\x2d\x2d";
                goto sJ;
                Tx:
                $bT = "\x2d\55\55\55\x2d\102\x45\x47\111\x4e\x20\x52\x53\101\x20\120\x55\102\114\x49\103\x20\113\x45\x59\55\x2d\x2d\55\55\15\12" . chunk_split(base64_encode($bT), 64) . "\x2d\55\55\x2d\55\105\x4e\104\40\x52\123\101\40\x50\125\x42\x4c\111\x43\x20\113\105\131\x2d\x2d\x2d\55\x2d";
                sJ:
                return $bT;
        }
        cP:
        mp:
    }
    function _parseKey($GZ, $F6)
    {
        if (!($F6 != CRYPT_RSA_PUBLIC_FORMAT_RAW && !is_string($GZ))) {
            goto qJ;
        }
        return false;
        qJ:
        switch ($F6) {
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                if (is_array($GZ)) {
                    goto PE;
                }
                return false;
                PE:
                $sO = array();
                switch (true) {
                    case isset($GZ["\x65"]):
                        $sO["\x70\x75\142\154\151\143\x45\170\160\x6f\x6e\145\156\164"] = $GZ["\145"]->copy();
                        goto TH;
                    case isset($GZ["\145\170\160\157\x6e\145\156\x74"]):
                        $sO["\x70\x75\142\154\x69\143\x45\x78\x70\x6f\156\x65\156\164"] = $GZ["\145\170\160\x6f\156\145\x6e\164"]->copy();
                        goto TH;
                    case isset($GZ["\160\165\x62\x6c\x69\143\105\x78\x70\x6f\x6e\145\156\164"]):
                        $sO["\x70\165\x62\x6c\x69\143\105\x78\x70\x6f\156\x65\x6e\164"] = $GZ["\160\x75\x62\154\151\x63\105\170\x70\157\x6e\x65\156\164"]->copy();
                        goto TH;
                    case isset($GZ[0]):
                        $sO["\160\165\x62\x6c\x69\143\105\x78\160\157\x6e\145\156\x74"] = $GZ[0]->copy();
                }
                Ez:
                TH:
                switch (true) {
                    case isset($GZ["\156"]):
                        $sO["\x6d\157\x64\165\154\x75\x73"] = $GZ["\156"]->copy();
                        goto w1;
                    case isset($GZ["\x6d\x6f\x64\x75\154\157"]):
                        $sO["\x6d\x6f\144\165\154\165\x73"] = $GZ["\155\x6f\144\165\154\157"]->copy();
                        goto w1;
                    case isset($GZ["\155\x6f\x64\165\x6c\165\163"]):
                        $sO["\x6d\x6f\144\x75\154\165\x73"] = $GZ["\x6d\157\x64\x75\x6c\x75\163"]->copy();
                        goto w1;
                    case isset($GZ[1]):
                        $sO["\x6d\x6f\144\165\x6c\165\x73"] = $GZ[1]->copy();
                }
                dX:
                w1:
                return isset($sO["\x6d\157\x64\165\154\x75\163"]) && isset($sO["\x70\165\142\154\151\143\105\170\x70\x6f\156\145\156\x74"]) ? $sO : false;
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS1:
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS8:
            case CRYPT_RSA_PUBLIC_FORMAT_PKCS1:
                if (preg_match("\43\104\x45\113\x2d\x49\156\146\157\x3a\40\x28\56\x2b\51\54\50\56\x2b\51\x23", $GZ, $Tv)) {
                    goto rR;
                }
                $Q7 = $this->_extractBER($GZ);
                goto M7;
                rR:
                $r7 = pack("\110\x2a", trim($Tv[2]));
                $oz = pack("\110\x2a", md5($this->password . substr($r7, 0, 8)));
                $oz .= pack("\x48\52", md5($oz . $this->password . substr($r7, 0, 8)));
                $GZ = preg_replace("\43\136\x28\77\x3a\120\162\x6f\x63\x2d\124\171\160\x65\x7c\104\105\113\55\111\156\x66\157\51\72\x20\x2e\x2a\43\155", '', $GZ);
                $nr = $this->_extractBER($GZ);
                if (!($nr === false)) {
                    goto GR;
                }
                $nr = $GZ;
                GR:
                switch ($Tv[1]) {
                    case "\x41\x45\x53\x2d\62\65\x36\x2d\103\x42\103":
                        if (class_exists("\x43\x72\x79\x70\x74\x5f\x41\x45\123")) {
                            goto Le;
                        }
                        include_once "\x43\162\x79\160\x74\x2f\101\x45\x53\x2e\x70\150\160";
                        Le:
                        $Zw = new Crypt_AES();
                        goto T9;
                    case "\x41\105\x53\x2d\x31\62\x38\55\103\102\103":
                        if (class_exists("\x43\x72\x79\160\x74\x5f\101\105\123")) {
                            goto Yg;
                        }
                        include_once "\103\x72\x79\x70\x74\x2f\101\105\x53\x2e\x70\x68\160";
                        Yg:
                        $oz = substr($oz, 0, 16);
                        $Zw = new Crypt_AES();
                        goto T9;
                    case "\x44\x45\123\x2d\105\x44\105\63\55\103\x46\102":
                        if (class_exists("\103\162\171\160\x74\137\124\162\x69\x70\x6c\x65\x44\105\x53")) {
                            goto ql;
                        }
                        include_once "\x43\x72\171\x70\x74\57\x54\162\151\x70\154\x65\104\105\x53\56\160\x68\x70";
                        ql:
                        $Zw = new Crypt_TripleDES(CRYPT_DES_MODE_CFB);
                        goto T9;
                    case "\x44\105\123\55\x45\x44\x45\63\x2d\103\102\103":
                        if (class_exists("\103\162\171\x70\x74\137\124\162\x69\x70\154\x65\x44\105\x53")) {
                            goto JH;
                        }
                        include_once "\103\x72\171\160\x74\57\124\162\151\x70\154\x65\104\105\x53\56\160\150\160";
                        JH:
                        $oz = substr($oz, 0, 24);
                        $Zw = new Crypt_TripleDES();
                        goto T9;
                    case "\x44\105\123\x2d\x43\x42\x43":
                        if (class_exists("\x43\x72\x79\160\164\137\x44\x45\123")) {
                            goto VH;
                        }
                        include_once "\103\x72\171\160\x74\57\x44\x45\x53\x2e\160\x68\x70";
                        VH:
                        $Zw = new Crypt_DES();
                        goto T9;
                    default:
                        return false;
                }
                eJ:
                T9:
                $Zw->setKey($oz);
                $Zw->setIV($r7);
                $Q7 = $Zw->decrypt($nr);
                M7:
                if (!($Q7 !== false)) {
                    goto Y1;
                }
                $GZ = $Q7;
                Y1:
                $sO = array();
                if (!(ord($this->_string_shift($GZ)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto Av;
                }
                return false;
                Av:
                if (!($this->_decodeLength($GZ) != strlen($GZ))) {
                    goto OX;
                }
                return false;
                OX:
                $cp = ord($this->_string_shift($GZ));
                if (!($cp == CRYPT_RSA_ASN1_INTEGER && substr($GZ, 0, 3) == "\1\0\x30")) {
                    goto di;
                }
                $this->_string_shift($GZ, 3);
                $cp = CRYPT_RSA_ASN1_SEQUENCE;
                di:
                if (!($cp == CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto eV;
                }
                $eW = $this->_string_shift($GZ, $this->_decodeLength($GZ));
                if (!(ord($this->_string_shift($eW)) != CRYPT_RSA_ASN1_OBJECT)) {
                    goto Nq;
                }
                return false;
                Nq:
                $ul = $this->_decodeLength($eW);
                switch ($this->_string_shift($eW, $ul)) {
                    case "\x2a\206\x48\206\xf7\15\1\1\1":
                        goto vw;
                    case "\52\x86\x48\x86\367\xd\1\5\x3":
                        if (!(ord($this->_string_shift($eW)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                            goto X5;
                        }
                        return false;
                        X5:
                        if (!($this->_decodeLength($eW) != strlen($eW))) {
                            goto Z8;
                        }
                        return false;
                        Z8:
                        $this->_string_shift($eW);
                        $tz = $this->_string_shift($eW, $this->_decodeLength($eW));
                        if (!(ord($this->_string_shift($eW)) != CRYPT_RSA_ASN1_INTEGER)) {
                            goto ID;
                        }
                        return false;
                        ID:
                        $this->_decodeLength($eW);
                        list(, $bv) = unpack("\116", str_pad($eW, 4, chr(0), STR_PAD_LEFT));
                        $this->_string_shift($GZ);
                        $ul = $this->_decodeLength($GZ);
                        if (!(strlen($GZ) != $ul)) {
                            goto II;
                        }
                        return false;
                        II:
                        if (class_exists("\103\x72\171\160\x74\137\104\x45\x53")) {
                            goto Ct;
                        }
                        include_once "\x43\x72\x79\x70\164\x2f\x44\105\123\x2e\x70\150\160";
                        Ct:
                        $Zw = new Crypt_DES();
                        $Zw->setPassword($this->password, "\160\142\153\144\x66\x31", "\155\x64\x35", $tz, $bv);
                        $GZ = $Zw->decrypt($GZ);
                        if (!($GZ === false)) {
                            goto jf;
                        }
                        return false;
                        jf:
                        return $this->_parseKey($GZ, CRYPT_RSA_PRIVATE_FORMAT_PKCS1);
                    default:
                        return false;
                }
                Dm:
                vw:
                $cp = ord($this->_string_shift($GZ));
                $this->_decodeLength($GZ);
                if (!($cp == CRYPT_RSA_ASN1_BITSTRING)) {
                    goto XN;
                }
                $this->_string_shift($GZ);
                XN:
                if (!(ord($this->_string_shift($GZ)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto el;
                }
                return false;
                el:
                if (!($this->_decodeLength($GZ) != strlen($GZ))) {
                    goto Lh;
                }
                return false;
                Lh:
                $cp = ord($this->_string_shift($GZ));
                eV:
                if (!($cp != CRYPT_RSA_ASN1_INTEGER)) {
                    goto f_;
                }
                return false;
                f_:
                $ul = $this->_decodeLength($GZ);
                $eW = $this->_string_shift($GZ, $ul);
                if (!(strlen($eW) != 1 || ord($eW) > 2)) {
                    goto Ki;
                }
                $sO["\155\157\144\x75\154\x75\163"] = new Math_BigInteger($eW, 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO[$F6 == CRYPT_RSA_PUBLIC_FORMAT_PKCS1 ? "\x70\x75\142\154\x69\143\105\x78\160\x6f\156\145\x6e\164" : "\x70\162\151\166\141\x74\145\105\x78\160\157\x6e\x65\x6e\x74"] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                return $sO;
                Ki:
                if (!(ord($this->_string_shift($GZ)) != CRYPT_RSA_ASN1_INTEGER)) {
                    goto AQ;
                }
                return false;
                AQ:
                $ul = $this->_decodeLength($GZ);
                $sO["\155\157\144\165\154\x75\163"] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\x70\x75\142\154\151\143\105\x78\160\x6f\156\x65\156\164"] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\x70\162\x69\x76\141\164\x65\105\x78\x70\x6f\x6e\145\156\x74"] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\160\x72\151\155\145\x73"] = array(1 => new Math_BigInteger($this->_string_shift($GZ, $ul), 256));
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\160\x72\x69\155\x65\163"][] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\x65\x78\160\157\156\x65\x6e\164\x73"] = array(1 => new Math_BigInteger($this->_string_shift($GZ, $ul), 256));
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\x65\x78\x70\x6f\156\145\x6e\164\163"][] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\143\157\145\x66\146\151\143\x69\x65\156\164\163"] = array(2 => new Math_BigInteger($this->_string_shift($GZ, $ul), 256));
                if (empty($GZ)) {
                    goto Gf;
                }
                if (!(ord($this->_string_shift($GZ)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto Eb;
                }
                return false;
                Eb:
                $this->_decodeLength($GZ);
                IN:
                if (empty($GZ)) {
                    goto vX;
                }
                if (!(ord($this->_string_shift($GZ)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto x3;
                }
                return false;
                x3:
                $this->_decodeLength($GZ);
                $GZ = substr($GZ, 1);
                $ul = $this->_decodeLength($GZ);
                $sO["\160\x72\x69\155\145\163"][] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\x65\170\160\157\x6e\145\x6e\x74\x73"][] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                $this->_string_shift($GZ);
                $ul = $this->_decodeLength($GZ);
                $sO["\143\x6f\x65\x66\x66\151\143\151\145\156\x74\x73"][] = new Math_BigInteger($this->_string_shift($GZ, $ul), 256);
                goto IN;
                vX:
                Gf:
                return $sO;
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
                $Ml = explode("\40", $GZ, 3);
                $GZ = isset($Ml[1]) ? base64_decode($Ml[1]) : false;
                if (!($GZ === false)) {
                    goto dY;
                }
                return false;
                dY:
                $nN = isset($Ml[2]) ? $Ml[2] : false;
                $cH = substr($GZ, 0, 11) == "\0\0\0\x7\163\163\x68\x2d\x72\x73\x61";
                if (!(strlen($GZ) <= 4)) {
                    goto h6;
                }
                return false;
                h6:
                extract(unpack("\x4e\154\145\156\x67\164\150", $this->_string_shift($GZ, 4)));
                $fE = new Math_BigInteger($this->_string_shift($GZ, $ul), -256);
                if (!(strlen($GZ) <= 4)) {
                    goto x1;
                }
                return false;
                x1:
                extract(unpack("\x4e\x6c\145\x6e\147\x74\150", $this->_string_shift($GZ, 4)));
                $gr = new Math_BigInteger($this->_string_shift($GZ, $ul), -256);
                if ($cH && strlen($GZ)) {
                    goto eH;
                }
                return strlen($GZ) ? false : array("\x6d\157\144\x75\154\165\163" => $gr, "\x70\x75\x62\154\x69\x63\105\x78\160\x6f\x6e\x65\x6e\164" => $fE, "\x63\157\x6d\155\x65\156\164" => $nN);
                goto TA;
                eH:
                if (!(strlen($GZ) <= 4)) {
                    goto IP;
                }
                return false;
                IP:
                extract(unpack("\116\154\145\156\x67\x74\x68", $this->_string_shift($GZ, 4)));
                $K_ = new Math_BigInteger($this->_string_shift($GZ, $ul), -256);
                return strlen($GZ) ? false : array("\x6d\x6f\x64\x75\154\165\163" => $K_, "\x70\165\142\x6c\151\143\x45\170\x70\x6f\x6e\145\156\x74" => $gr, "\x63\x6f\155\155\145\x6e\x74" => $nN);
                TA:
            case CRYPT_RSA_PRIVATE_FORMAT_XML:
            case CRYPT_RSA_PUBLIC_FORMAT_XML:
                $this->components = array();
                $ZP = xml_parser_create("\125\x54\x46\x2d\70");
                xml_set_object($ZP, $this);
                xml_set_element_handler($ZP, "\x5f\x73\164\141\x72\x74\137\x65\x6c\x65\x6d\x65\x6e\x74\137\150\x61\x6e\x64\x6c\x65\x72", "\x5f\163\164\x6f\160\137\145\154\145\x6d\x65\x6e\164\x5f\x68\x61\156\144\x6c\x65\x72");
                xml_set_character_data_handler($ZP, "\x5f\x64\x61\x74\x61\137\150\x61\x6e\144\x6c\145\162");
                if (xml_parse($ZP, "\x3c\x78\155\x6c\76" . $GZ . "\74\57\x78\155\154\76")) {
                    goto H6;
                }
                return false;
                H6:
                return isset($this->components["\x6d\157\144\165\154\x75\x73"]) && isset($this->components["\x70\x75\x62\154\151\x63\105\x78\x70\157\156\x65\156\164"]) ? $this->components : false;
            case CRYPT_RSA_PRIVATE_FORMAT_PUTTY:
                $sO = array();
                $GZ = preg_split("\43\x5c\162\x5c\x6e\x7c\134\162\x7c\x5c\156\x23", $GZ);
                $F6 = trim(preg_replace("\x23\x50\165\x54\x54\x59\x2d\125\163\145\x72\x2d\113\x65\x79\55\106\151\154\145\x2d\62\72\40\x28\x2e\x2b\x29\43", "\44\61", $GZ[0]));
                if (!($F6 != "\163\163\150\x2d\x72\x73\141")) {
                    goto Jf;
                }
                return false;
                Jf:
                $Ky = trim(preg_replace("\x23\105\x6e\143\x72\171\160\164\151\157\156\x3a\x20\50\56\53\51\x23", "\x24\x31", $GZ[1]));
                $nN = trim(preg_replace("\43\103\157\155\x6d\145\x6e\x74\72\40\50\56\53\x29\43", "\x24\61", $GZ[2]));
                $Co = trim(preg_replace("\43\x50\165\142\154\x69\143\x2d\114\151\156\145\163\x3a\x20\x28\x5c\144\53\x29\x23", "\x24\61", $GZ[3]));
                $OY = base64_decode(implode('', array_map("\x74\162\151\155", array_slice($GZ, 4, $Co))));
                $OY = substr($OY, 11);
                extract(unpack("\x4e\154\x65\156\147\164\x68", $this->_string_shift($OY, 4)));
                $sO["\x70\165\x62\x6c\151\x63\105\170\x70\157\x6e\x65\156\x74"] = new Math_BigInteger($this->_string_shift($OY, $ul), -256);
                extract(unpack("\x4e\x6c\145\x6e\x67\x74\x68", $this->_string_shift($OY, 4)));
                $sO["\155\x6f\x64\165\x6c\x75\x73"] = new Math_BigInteger($this->_string_shift($OY, $ul), -256);
                $Uo = trim(preg_replace("\43\x50\x72\x69\166\x61\x74\x65\55\x4c\x69\156\145\163\x3a\40\x28\134\x64\53\51\43", "\x24\x31", $GZ[$Co + 4]));
                $JA = base64_decode(implode('', array_map("\164\x72\151\x6d", array_slice($GZ, $Co + 5, $Uo))));
                switch ($Ky) {
                    case "\x61\x65\163\x32\x35\66\x2d\x63\x62\143":
                        if (class_exists("\x43\162\171\x70\164\x5f\101\x45\x53")) {
                            goto Ao;
                        }
                        include_once "\x43\x72\171\160\164\x2f\x41\105\x53\56\x70\x68\160";
                        Ao:
                        $oz = '';
                        $Gz = 0;
                        T8:
                        if (!(strlen($oz) < 32)) {
                            goto mg;
                        }
                        $eW = pack("\x4e\141\x2a", $Gz++, $this->password);
                        $oz .= pack("\110\52", sha1($eW));
                        goto T8;
                        mg:
                        $oz = substr($oz, 0, 32);
                        $Zw = new Crypt_AES();
                }
                uh:
                pU:
                if (!($Ky != "\156\157\x6e\x65")) {
                    goto K2;
                }
                $Zw->setKey($oz);
                $Zw->disablePadding();
                $JA = $Zw->decrypt($JA);
                if (!($JA === false)) {
                    goto kG;
                }
                return false;
                kG:
                K2:
                extract(unpack("\116\154\x65\x6e\147\164\x68", $this->_string_shift($JA, 4)));
                if (!(strlen($JA) < $ul)) {
                    goto C9;
                }
                return false;
                C9:
                $sO["\x70\x72\151\166\x61\x74\x65\x45\170\x70\x6f\x6e\x65\x6e\x74"] = new Math_BigInteger($this->_string_shift($JA, $ul), -256);
                extract(unpack("\116\x6c\x65\156\147\164\150", $this->_string_shift($JA, 4)));
                if (!(strlen($JA) < $ul)) {
                    goto Qc;
                }
                return false;
                Qc:
                $sO["\x70\x72\x69\x6d\x65\x73"] = array(1 => new Math_BigInteger($this->_string_shift($JA, $ul), -256));
                extract(unpack("\116\154\x65\156\147\x74\x68", $this->_string_shift($JA, 4)));
                if (!(strlen($JA) < $ul)) {
                    goto My;
                }
                return false;
                My:
                $sO["\160\162\151\155\x65\163"][] = new Math_BigInteger($this->_string_shift($JA, $ul), -256);
                $eW = $sO["\x70\x72\x69\x6d\x65\x73"][1]->subtract($this->one);
                $sO["\145\170\160\157\156\145\156\164\x73"] = array(1 => $sO["\160\x75\142\x6c\x69\x63\x45\170\x70\157\x6e\x65\x6e\164"]->modInverse($eW));
                $eW = $sO["\x70\162\151\x6d\x65\163"][2]->subtract($this->one);
                $sO["\x65\x78\160\157\156\x65\156\x74\x73"][] = $sO["\x70\x75\142\x6c\151\x63\105\x78\160\x6f\x6e\145\x6e\164"]->modInverse($eW);
                extract(unpack("\x4e\154\x65\156\x67\164\150", $this->_string_shift($JA, 4)));
                if (!(strlen($JA) < $ul)) {
                    goto BM;
                }
                return false;
                BM:
                $sO["\143\157\145\146\x66\151\x63\x69\x65\156\164\163"] = array(2 => new Math_BigInteger($this->_string_shift($JA, $ul), -256));
                return $sO;
        }
        TJ:
        Tg:
    }
    function getSize()
    {
        return !isset($this->modulus) ? 0 : strlen($this->modulus->toBits());
    }
    function _start_element_handler($NU, $ao, $Ob)
    {
        switch ($ao) {
            case "\115\x4f\x44\x55\114\125\123":
                $this->current =& $this->components["\155\x6f\144\165\x6c\x75\x73"];
                goto Xe;
            case "\105\x58\x50\x4f\x4e\105\116\124":
                $this->current =& $this->components["\160\165\142\x6c\151\143\105\x78\160\x6f\156\x65\156\164"];
                goto Xe;
            case "\x50":
                $this->current =& $this->components["\x70\x72\151\155\145\x73"][1];
                goto Xe;
            case "\x51":
                $this->current =& $this->components["\160\x72\151\155\x65\163"][2];
                goto Xe;
            case "\104\x50":
                $this->current =& $this->components["\x65\x78\x70\157\x6e\145\156\164\163"][1];
                goto Xe;
            case "\104\121":
                $this->current =& $this->components["\145\170\160\x6f\x6e\x65\156\164\163"][2];
                goto Xe;
            case "\111\x4e\126\x45\x52\123\105\x51":
                $this->current =& $this->components["\x63\157\145\x66\x66\151\x63\x69\145\156\164\x73"][2];
                goto Xe;
            case "\x44":
                $this->current =& $this->components["\x70\x72\x69\x76\141\x74\145\x45\x78\x70\x6f\156\145\156\164"];
        }
        TX:
        Xe:
        $this->current = '';
    }
    function _stop_element_handler($NU, $ao)
    {
        if (!isset($this->current)) {
            goto W7;
        }
        $this->current = new Math_BigInteger(base64_decode($this->current), 256);
        unset($this->current);
        W7:
    }
    function _data_handler($NU, $lS)
    {
        if (!(!isset($this->current) || is_object($this->current))) {
            goto fZ;
        }
        return;
        fZ:
        $this->current .= trim($lS);
    }
    function loadKey($GZ, $F6 = false)
    {
        if (!(is_object($GZ) && strtolower(get_class($GZ)) == "\x63\x72\171\160\x74\137\162\x73\x61")) {
            goto mi;
        }
        $this->privateKeyFormat = $GZ->privateKeyFormat;
        $this->publicKeyFormat = $GZ->publicKeyFormat;
        $this->k = $GZ->k;
        $this->hLen = $GZ->hLen;
        $this->sLen = $GZ->sLen;
        $this->mgfHLen = $GZ->mgfHLen;
        $this->encryptionMode = $GZ->encryptionMode;
        $this->signatureMode = $GZ->signatureMode;
        $this->password = $GZ->password;
        $this->configFile = $GZ->configFile;
        $this->comment = $GZ->comment;
        if (!is_object($GZ->hash)) {
            goto Jy;
        }
        $this->hash = new Crypt_Hash($GZ->hash->getHash());
        Jy:
        if (!is_object($GZ->mgfHash)) {
            goto Os;
        }
        $this->mgfHash = new Crypt_Hash($GZ->mgfHash->getHash());
        Os:
        if (!is_object($GZ->modulus)) {
            goto Hu;
        }
        $this->modulus = $GZ->modulus->copy();
        Hu:
        if (!is_object($GZ->exponent)) {
            goto h_;
        }
        $this->exponent = $GZ->exponent->copy();
        h_:
        if (!is_object($GZ->publicExponent)) {
            goto PZ;
        }
        $this->publicExponent = $GZ->publicExponent->copy();
        PZ:
        $this->primes = array();
        $this->exponents = array();
        $this->coefficients = array();
        foreach ($this->primes as $do) {
            $this->primes[] = $do->copy();
            fr:
        }
        Ru:
        foreach ($this->exponents as $Uu) {
            $this->exponents[] = $Uu->copy();
            ji:
        }
        RO:
        foreach ($this->coefficients as $gI) {
            $this->coefficients[] = $gI->copy();
            MO:
        }
        uE:
        return true;
        mi:
        if ($F6 === false) {
            goto gO;
        }
        $sO = $this->_parseKey($GZ, $F6);
        goto Ob;
        gO:
        $tV = array(CRYPT_RSA_PUBLIC_FORMAT_RAW, CRYPT_RSA_PRIVATE_FORMAT_PKCS1, CRYPT_RSA_PRIVATE_FORMAT_XML, CRYPT_RSA_PRIVATE_FORMAT_PUTTY, CRYPT_RSA_PUBLIC_FORMAT_OPENSSH);
        foreach ($tV as $F6) {
            $sO = $this->_parseKey($GZ, $F6);
            if (!($sO !== false)) {
                goto mG;
            }
            goto gy;
            mG:
            ry:
        }
        gy:
        Ob:
        if (!($sO === false)) {
            goto tT;
        }
        $this->comment = null;
        $this->modulus = null;
        $this->k = null;
        $this->exponent = null;
        $this->primes = null;
        $this->exponents = null;
        $this->coefficients = null;
        $this->publicExponent = null;
        return false;
        tT:
        if (!(isset($sO["\x63\157\x6d\155\145\x6e\164"]) && $sO["\143\x6f\155\x6d\145\156\164"] !== false)) {
            goto xg;
        }
        $this->comment = $sO["\143\x6f\155\x6d\145\156\x74"];
        xg:
        $this->modulus = $sO["\x6d\157\x64\165\x6c\x75\x73"];
        $this->k = strlen($this->modulus->toBytes());
        $this->exponent = isset($sO["\x70\162\x69\166\141\x74\x65\105\170\160\x6f\156\145\x6e\x74"]) ? $sO["\x70\162\151\166\141\164\x65\x45\170\x70\x6f\156\x65\x6e\164"] : $sO["\160\165\x62\154\151\143\105\x78\x70\x6f\x6e\145\x6e\164"];
        if (isset($sO["\160\162\151\155\x65\163"])) {
            goto ya;
        }
        $this->primes = array();
        $this->exponents = array();
        $this->coefficients = array();
        $this->publicExponent = false;
        goto rg;
        ya:
        $this->primes = $sO["\160\162\151\x6d\x65\x73"];
        $this->exponents = $sO["\145\x78\x70\x6f\x6e\145\x6e\x74\x73"];
        $this->coefficients = $sO["\x63\x6f\145\x66\x66\151\x63\x69\145\x6e\x74\163"];
        $this->publicExponent = $sO["\x70\165\x62\154\x69\x63\x45\170\x70\x6f\156\145\x6e\164"];
        rg:
        switch ($F6) {
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                $this->setPublicKey();
                goto JD;
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS1:
                switch (true) {
                    case strpos($GZ, "\x2d\102\105\107\x49\116\x20\120\125\x42\114\111\x43\40\x4b\x45\x59\x2d") !== false:
                    case strpos($GZ, "\x2d\x42\105\x47\111\x4e\x20\x52\x53\101\40\120\x55\x42\x4c\x49\103\x20\113\x45\131\55") !== false:
                        $this->setPublicKey();
                }
                m0:
                yx:
        }
        NW:
        JD:
        return true;
    }
    function setPassword($SK = false)
    {
        $this->password = $SK;
    }
    function setPublicKey($GZ = false, $F6 = false)
    {
        if (empty($this->publicExponent)) {
            goto C4;
        }
        return false;
        C4:
        if (!($GZ === false && !empty($this->modulus))) {
            goto rF;
        }
        $this->publicExponent = $this->exponent;
        return true;
        rF:
        if ($F6 === false) {
            goto QO;
        }
        $sO = $this->_parseKey($GZ, $F6);
        goto Jz;
        QO:
        $tV = array(CRYPT_RSA_PUBLIC_FORMAT_RAW, CRYPT_RSA_PUBLIC_FORMAT_PKCS1, CRYPT_RSA_PUBLIC_FORMAT_XML, CRYPT_RSA_PUBLIC_FORMAT_OPENSSH);
        foreach ($tV as $F6) {
            $sO = $this->_parseKey($GZ, $F6);
            if (!($sO !== false)) {
                goto JG;
            }
            goto i9;
            JG:
            db:
        }
        i9:
        Jz:
        if (!($sO === false)) {
            goto b8;
        }
        return false;
        b8:
        if (!(empty($this->modulus) || !$this->modulus->equals($sO["\155\x6f\144\165\x6c\165\163"]))) {
            goto ci;
        }
        $this->modulus = $sO["\155\x6f\x64\165\154\x75\163"];
        $this->exponent = $this->publicExponent = $sO["\x70\x75\142\154\x69\143\x45\170\x70\x6f\x6e\145\156\x74"];
        return true;
        ci:
        $this->publicExponent = $sO["\160\165\142\154\x69\x63\105\x78\x70\157\x6e\x65\x6e\x74"];
        return true;
    }
    function setPrivateKey($GZ = false, $F6 = false)
    {
        if (!($GZ === false && !empty($this->publicExponent))) {
            goto wp;
        }
        $this->publicExponent = false;
        return true;
        wp:
        $Ja = new Crypt_RSA();
        if ($Ja->loadKey($GZ, $F6)) {
            goto KS;
        }
        return false;
        KS:
        $Ja->publicExponent = false;
        $this->loadKey($Ja);
        return true;
    }
    function getPublicKey($F6 = CRYPT_RSA_PUBLIC_FORMAT_PKCS8)
    {
        if (!(empty($this->modulus) || empty($this->publicExponent))) {
            goto U_;
        }
        return false;
        U_:
        $pD = $this->publicKeyFormat;
        $this->publicKeyFormat = $F6;
        $eW = $this->_convertPublicKey($this->modulus, $this->publicExponent);
        $this->publicKeyFormat = $pD;
        return $eW;
    }
    function getPublicKeyFingerprint($Gq = "\155\144\65")
    {
        if (!(empty($this->modulus) || empty($this->publicExponent))) {
            goto VC;
        }
        return false;
        VC:
        $gr = $this->modulus->toBytes(true);
        $fE = $this->publicExponent->toBytes(true);
        $bT = pack("\x4e\x61\52\x4e\x61\x2a\116\x61\x2a", strlen("\x73\x73\x68\x2d\x72\x73\141"), "\163\163\150\x2d\162\x73\x61", strlen($fE), $fE, strlen($gr), $gr);
        switch ($Gq) {
            case "\163\x68\x61\62\x35\66":
                $Av = new Crypt_Hash("\x73\x68\x61\62\x35\x36");
                $C9 = base64_encode($Av->hash($bT));
                return substr($C9, 0, strlen($C9) - 1);
            case "\x6d\144\x35":
                return substr(chunk_split(md5($bT), 2, "\72"), 0, -1);
            default:
                return false;
        }
        ek:
        yz:
    }
    function getPrivateKey($F6 = CRYPT_RSA_PUBLIC_FORMAT_PKCS1)
    {
        if (!empty($this->primes)) {
            goto d6;
        }
        return false;
        d6:
        $pD = $this->privateKeyFormat;
        $this->privateKeyFormat = $F6;
        $eW = $this->_convertPrivateKey($this->modulus, $this->publicExponent, $this->exponent, $this->primes, $this->exponents, $this->coefficients);
        $this->privateKeyFormat = $pD;
        return $eW;
    }
    function _getPrivatePublicKey($nA = CRYPT_RSA_PUBLIC_FORMAT_PKCS8)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto MK;
        }
        return false;
        MK:
        $pD = $this->publicKeyFormat;
        $this->publicKeyFormat = $nA;
        $eW = $this->_convertPublicKey($this->modulus, $this->exponent);
        $this->publicKeyFormat = $pD;
        return $eW;
    }
    function __toString()
    {
        $GZ = $this->getPrivateKey($this->privateKeyFormat);
        if (!($GZ !== false)) {
            goto ss;
        }
        return $GZ;
        ss:
        $GZ = $this->_getPrivatePublicKey($this->publicKeyFormat);
        return $GZ !== false ? $GZ : '';
    }
    function __clone()
    {
        $GZ = new Crypt_RSA();
        $GZ->loadKey($this);
        return $GZ;
    }
    function _generateMinMax($Ve)
    {
        $bt = $Ve >> 3;
        $BB = str_repeat(chr(0), $bt);
        $lw = str_repeat(chr(0xff), $bt);
        $ce = $Ve & 7;
        if ($ce) {
            goto yv;
        }
        $BB[0] = chr(0x80);
        goto Ms;
        yv:
        $BB = chr(1 << $ce - 1) . $BB;
        $lw = chr((1 << $ce) - 1) . $lw;
        Ms:
        return array("\155\151\156" => new Math_BigInteger($BB, 256), "\x6d\141\170" => new Math_BigInteger($lw, 256));
    }
    function _decodeLength(&$bz)
    {
        $ul = ord($this->_string_shift($bz));
        if (!($ul & 0x80)) {
            goto FK;
        }
        $ul &= 0x7f;
        $eW = $this->_string_shift($bz, $ul);
        list(, $ul) = unpack("\x4e", substr(str_pad($eW, 4, chr(0), STR_PAD_LEFT), -4));
        FK:
        return $ul;
    }
    function _encodeLength($ul)
    {
        if (!($ul <= 0x7f)) {
            goto b9;
        }
        return chr($ul);
        b9:
        $eW = ltrim(pack("\116", $ul), chr(0));
        return pack("\103\141\x2a", 0x80 | strlen($eW), $eW);
    }
    function _string_shift(&$bz, $JP = 1)
    {
        $ei = substr($bz, 0, $JP);
        $bz = substr($bz, $JP);
        return $ei;
    }
    function setPrivateKeyFormat($Mz)
    {
        $this->privateKeyFormat = $Mz;
    }
    function setPublicKeyFormat($Mz)
    {
        $this->publicKeyFormat = $Mz;
    }
    function setHash($Av)
    {
        switch ($Av) {
            case "\x6d\x64\62":
            case "\x6d\144\x35":
            case "\x73\150\141\61":
            case "\x73\x68\x61\x32\x35\x36":
            case "\163\x68\141\x33\70\x34":
            case "\163\150\141\x35\61\62":
                $this->hash = new Crypt_Hash($Av);
                $this->hashName = $Av;
                goto Zr;
            default:
                $this->hash = new Crypt_Hash("\x73\x68\x61\x31");
                $this->hashName = "\x73\x68\x61\x31";
        }
        bg:
        Zr:
        $this->hLen = $this->hash->getLength();
    }
    function setMGFHash($Av)
    {
        switch ($Av) {
            case "\x6d\144\62":
            case "\x6d\144\x35":
            case "\x73\150\x61\61":
            case "\x73\150\x61\x32\65\66":
            case "\x73\x68\x61\x33\70\64":
            case "\x73\x68\141\x35\x31\x32":
                $this->mgfHash = new Crypt_Hash($Av);
                goto hM;
            default:
                $this->mgfHash = new Crypt_Hash("\x73\x68\x61\x31");
        }
        ye:
        hM:
        $this->mgfHLen = $this->mgfHash->getLength();
    }
    function setSaltLength($i6)
    {
        $this->sLen = $i6;
    }
    function _i2osp($l2, $Z3)
    {
        $l2 = $l2->toBytes();
        if (!(strlen($l2) > $Z3)) {
            goto Fm;
        }
        user_error("\111\x6e\164\145\x67\x65\162\40\x74\x6f\157\x20\154\141\x72\147\x65");
        return false;
        Fm:
        return str_pad($l2, $Z3, chr(0), STR_PAD_LEFT);
    }
    function _os2ip($l2)
    {
        return new Math_BigInteger($l2, 256);
    }
    function _exponentiate($l2)
    {
        switch (true) {
            case empty($this->primes):
            case $this->primes[1]->equals($this->zero):
            case empty($this->coefficients):
            case $this->coefficients[2]->equals($this->zero):
            case empty($this->exponents):
            case $this->exponents[1]->equals($this->zero):
                return $l2->modPow($this->exponent, $this->modulus);
        }
        i_:
        iw:
        $Uk = count($this->primes);
        if (defined("\103\x52\x59\120\x54\137\x52\x53\x41\137\x44\x49\x53\x41\x42\x4c\105\137\x42\x4c\x49\116\104\111\116\107")) {
            goto nb;
        }
        $YM = $this->primes[1];
        $Cs = 2;
        zr:
        if (!($Cs <= $Uk)) {
            goto mr;
        }
        if (!($YM->compare($this->primes[$Cs]) > 0)) {
            goto GB;
        }
        $YM = $this->primes[$Cs];
        GB:
        nE:
        $Cs++;
        goto zr;
        mr:
        $gi = new Math_BigInteger(1);
        $S0 = $gi->random($gi, $YM->subtract($gi));
        $la = array(1 => $this->_blind($l2, $S0, 1), 2 => $this->_blind($l2, $S0, 2));
        $WW = $la[1]->subtract($la[2]);
        $WW = $WW->multiply($this->coefficients[2]);
        list(, $WW) = $WW->divide($this->primes[1]);
        $Bf = $la[2]->add($WW->multiply($this->primes[2]));
        $S0 = $this->primes[1];
        $Cs = 3;
        JO:
        if (!($Cs <= $Uk)) {
            goto qe;
        }
        $la = $this->_blind($l2, $S0, $Cs);
        $S0 = $S0->multiply($this->primes[$Cs - 1]);
        $WW = $la->subtract($Bf);
        $WW = $WW->multiply($this->coefficients[$Cs]);
        list(, $WW) = $WW->divide($this->primes[$Cs]);
        $Bf = $Bf->add($S0->multiply($WW));
        eP:
        $Cs++;
        goto JO;
        qe:
        goto NE;
        nb:
        $la = array(1 => $l2->modPow($this->exponents[1], $this->primes[1]), 2 => $l2->modPow($this->exponents[2], $this->primes[2]));
        $WW = $la[1]->subtract($la[2]);
        $WW = $WW->multiply($this->coefficients[2]);
        list(, $WW) = $WW->divide($this->primes[1]);
        $Bf = $la[2]->add($WW->multiply($this->primes[2]));
        $S0 = $this->primes[1];
        $Cs = 3;
        fa:
        if (!($Cs <= $Uk)) {
            goto mK;
        }
        $la = $l2->modPow($this->exponents[$Cs], $this->primes[$Cs]);
        $S0 = $S0->multiply($this->primes[$Cs - 1]);
        $WW = $la->subtract($Bf);
        $WW = $WW->multiply($this->coefficients[$Cs]);
        list(, $WW) = $WW->divide($this->primes[$Cs]);
        $Bf = $Bf->add($S0->multiply($WW));
        l_:
        $Cs++;
        goto fa;
        mK:
        NE:
        return $Bf;
    }
    function _blind($l2, $S0, $Cs)
    {
        $l2 = $l2->multiply($S0->modPow($this->publicExponent, $this->primes[$Cs]));
        $l2 = $l2->modPow($this->exponents[$Cs], $this->primes[$Cs]);
        $S0 = $S0->modInverse($this->primes[$Cs]);
        $l2 = $l2->multiply($S0);
        list(, $l2) = $l2->divide($this->primes[$Cs]);
        return $l2;
    }
    function _equals($l2, $UZ)
    {
        if (!(strlen($l2) != strlen($UZ))) {
            goto zm;
        }
        return false;
        zm:
        $XH = 0;
        $Cs = 0;
        t7:
        if (!($Cs < strlen($l2))) {
            goto kQ;
        }
        $XH |= ord($l2[$Cs]) ^ ord($UZ[$Cs]);
        aN:
        $Cs++;
        goto t7;
        kQ:
        return $XH == 0;
    }
    function _rsaep($Bf)
    {
        if (!($Bf->compare($this->zero) < 0 || $Bf->compare($this->modulus) > 0)) {
            goto Jv;
        }
        user_error("\115\x65\163\163\141\x67\145\x20\162\145\x70\x72\x65\x73\145\156\164\x61\164\x69\x76\145\40\x6f\x75\164\x20\x6f\146\x20\x72\141\x6e\147\x65");
        return false;
        Jv:
        return $this->_exponentiate($Bf);
    }
    function _rsadp($BA)
    {
        if (!($BA->compare($this->zero) < 0 || $BA->compare($this->modulus) > 0)) {
            goto eh;
        }
        user_error("\103\x69\160\150\145\x72\x74\x65\170\x74\x20\162\145\x70\x72\145\163\x65\156\164\x61\x74\151\x76\145\40\x6f\x75\x74\40\x6f\146\x20\162\x61\156\147\145");
        return false;
        eh:
        return $this->_exponentiate($BA);
    }
    function _rsasp1($Bf)
    {
        if (!($Bf->compare($this->zero) < 0 || $Bf->compare($this->modulus) > 0)) {
            goto Ni;
        }
        user_error("\x4d\x65\163\163\x61\x67\145\x20\x72\x65\x70\x72\145\x73\145\156\164\x61\164\x69\x76\145\40\x6f\165\164\40\157\146\x20\x72\x61\x6e\x67\145");
        return false;
        Ni:
        return $this->_exponentiate($Bf);
    }
    function _rsavp1($uk)
    {
        if (!($uk->compare($this->zero) < 0 || $uk->compare($this->modulus) > 0)) {
            goto cv;
        }
        user_error("\x53\151\x67\156\141\164\x75\162\x65\40\x72\145\160\x72\145\x73\145\156\x74\x61\x74\151\x76\x65\x20\x6f\165\x74\x20\157\146\x20\x72\141\x6e\x67\145");
        return false;
        cv:
        return $this->_exponentiate($uk);
    }
    function _mgf1($sH, $Ho)
    {
        $f3 = '';
        $u7 = ceil($Ho / $this->mgfHLen);
        $Cs = 0;
        hy:
        if (!($Cs < $u7)) {
            goto EW;
        }
        $BA = pack("\116", $Cs);
        $f3 .= $this->mgfHash->hash($sH . $BA);
        fm:
        $Cs++;
        goto hy;
        EW:
        return substr($f3, 0, $Ho);
    }
    function _rsaes_oaep_encrypt($Bf, $bW = '')
    {
        $A5 = strlen($Bf);
        if (!($A5 > $this->k - 2 * $this->hLen - 2)) {
            goto m5;
        }
        user_error("\x4d\145\163\x73\141\x67\x65\x20\164\157\x6f\40\154\157\x6e\147");
        return false;
        m5:
        $jP = $this->hash->hash($bW);
        $A_ = str_repeat(chr(0), $this->k - $A5 - 2 * $this->hLen - 2);
        $oX = $jP . $A_ . chr(1) . $Bf;
        $ks = crypt_random_string($this->hLen);
        $YQ = $this->_mgf1($ks, $this->k - $this->hLen - 1);
        $Vb = $oX ^ $YQ;
        $p_ = $this->_mgf1($Vb, $this->hLen);
        $rU = $ks ^ $p_;
        $Op = chr(0) . $rU . $Vb;
        $Bf = $this->_os2ip($Op);
        $BA = $this->_rsaep($Bf);
        $BA = $this->_i2osp($BA, $this->k);
        return $BA;
    }
    function _rsaes_oaep_decrypt($BA, $bW = '')
    {
        if (!(strlen($BA) != $this->k || $this->k < 2 * $this->hLen + 2)) {
            goto nC;
        }
        user_error("\104\x65\143\x72\171\160\164\x69\x6f\156\40\x65\162\x72\157\162");
        return false;
        nC:
        $BA = $this->_os2ip($BA);
        $Bf = $this->_rsadp($BA);
        if (!($Bf === false)) {
            goto KU;
        }
        user_error("\x44\145\x63\x72\x79\x70\164\x69\x6f\156\40\x65\x72\162\x6f\162");
        return false;
        KU:
        $Op = $this->_i2osp($Bf, $this->k);
        $jP = $this->hash->hash($bW);
        $UZ = ord($Op[0]);
        $rU = substr($Op, 1, $this->hLen);
        $Vb = substr($Op, $this->hLen + 1);
        $p_ = $this->_mgf1($Vb, $this->hLen);
        $ks = $rU ^ $p_;
        $YQ = $this->_mgf1($ks, $this->k - $this->hLen - 1);
        $oX = $Vb ^ $YQ;
        $CC = substr($oX, 0, $this->hLen);
        $Bf = substr($oX, $this->hLen);
        if ($this->_equals($jP, $CC)) {
            goto XF;
        }
        user_error("\104\145\143\x72\x79\x70\164\151\157\156\x20\x65\162\162\x6f\x72");
        return false;
        XF:
        $Bf = ltrim($Bf, chr(0));
        if (!(ord($Bf[0]) != 1)) {
            goto Ij;
        }
        user_error("\104\145\143\x72\x79\x70\x74\x69\x6f\156\40\x65\x72\x72\x6f\x72");
        return false;
        Ij:
        return substr($Bf, 1);
    }
    function _raw_encrypt($Bf)
    {
        $eW = $this->_os2ip($Bf);
        $eW = $this->_rsaep($eW);
        return $this->_i2osp($eW, $this->k);
    }
    function _rsaes_pkcs1_v1_5_encrypt($Bf)
    {
        $A5 = strlen($Bf);
        if (!($A5 > $this->k - 11)) {
            goto G2;
        }
        user_error("\x4d\x65\163\x73\141\147\x65\40\164\157\157\x20\x6c\157\156\147");
        return false;
        G2:
        $ZS = $this->k - $A5 - 3;
        $A_ = '';
        Va:
        if (!(strlen($A_) != $ZS)) {
            goto Z9;
        }
        $eW = crypt_random_string($ZS - strlen($A_));
        $eW = str_replace("\x0", '', $eW);
        $A_ .= $eW;
        goto Va;
        Z9:
        $F6 = 2;
        if (!(defined("\103\x52\x59\120\124\137\122\123\x41\x5f\x50\x4b\103\x53\61\65\137\x43\117\115\x50\101\x54") && (!isset($this->publicExponent) || $this->exponent !== $this->publicExponent))) {
            goto Hd;
        }
        $F6 = 1;
        $A_ = str_repeat("\377", $ZS);
        Hd:
        $Op = chr(0) . chr($F6) . $A_ . chr(0) . $Bf;
        $Bf = $this->_os2ip($Op);
        $BA = $this->_rsaep($Bf);
        $BA = $this->_i2osp($BA, $this->k);
        return $BA;
    }
    function _rsaes_pkcs1_v1_5_decrypt($BA)
    {
        if (!(strlen($BA) != $this->k)) {
            goto LD;
        }
        user_error("\x44\x65\143\162\171\x70\164\x69\x6f\x6e\40\x65\x72\162\x6f\162");
        return false;
        LD:
        $BA = $this->_os2ip($BA);
        $Bf = $this->_rsadp($BA);
        if (!($Bf === false)) {
            goto uY;
        }
        user_error("\104\x65\x63\x72\x79\160\x74\151\x6f\156\x20\x65\162\x72\x6f\x72");
        return false;
        uY:
        $Op = $this->_i2osp($Bf, $this->k);
        if (!(ord($Op[0]) != 0 || ord($Op[1]) > 2)) {
            goto I_;
        }
        user_error("\104\145\x63\162\171\160\164\x69\x6f\x6e\40\145\162\x72\x6f\162");
        return false;
        I_:
        $A_ = substr($Op, 2, strpos($Op, chr(0), 2) - 2);
        $Bf = substr($Op, strlen($A_) + 3);
        if (!(strlen($A_) < 8)) {
            goto g5;
        }
        user_error("\x44\145\x63\x72\x79\x70\164\151\x6f\x6e\x20\x65\x72\x72\157\162");
        return false;
        g5:
        return $Bf;
    }
    function _emsa_pss_encode($Bf, $ig)
    {
        $Tn = $ig + 1 >> 3;
        $i6 = $this->sLen !== null ? $this->sLen : $this->hLen;
        $TD = $this->hash->hash($Bf);
        if (!($Tn < $this->hLen + $i6 + 2)) {
            goto jg;
        }
        user_error("\x45\x6e\x63\157\144\151\x6e\x67\40\x65\x72\162\157\162");
        return false;
        jg:
        $tz = crypt_random_string($i6);
        $UL = "\0\0\x0\0\0\0\0\x0" . $TD . $tz;
        $WW = $this->hash->hash($UL);
        $A_ = str_repeat(chr(0), $Tn - $i6 - $this->hLen - 2);
        $oX = $A_ . chr(1) . $tz;
        $YQ = $this->_mgf1($WW, $Tn - $this->hLen - 1);
        $Vb = $oX ^ $YQ;
        $Vb[0] = ~chr(0xff << ($ig & 7)) & $Vb[0];
        $Op = $Vb . $WW . chr(0xbc);
        return $Op;
    }
    function _emsa_pss_verify($Bf, $Op, $ig)
    {
        $Tn = $ig + 1 >> 3;
        $i6 = $this->sLen !== null ? $this->sLen : $this->hLen;
        $TD = $this->hash->hash($Bf);
        if (!($Tn < $this->hLen + $i6 + 2)) {
            goto PL;
        }
        return false;
        PL:
        if (!($Op[strlen($Op) - 1] != chr(0xbc))) {
            goto pb;
        }
        return false;
        pb:
        $Vb = substr($Op, 0, -$this->hLen - 1);
        $WW = substr($Op, -$this->hLen - 1, $this->hLen);
        $eW = chr(0xff << ($ig & 7));
        if (!((~$Vb[0] & $eW) != $eW)) {
            goto S5;
        }
        return false;
        S5:
        $YQ = $this->_mgf1($WW, $Tn - $this->hLen - 1);
        $oX = $Vb ^ $YQ;
        $oX[0] = ~chr(0xff << ($ig & 7)) & $oX[0];
        $eW = $Tn - $this->hLen - $i6 - 2;
        if (!(substr($oX, 0, $eW) != str_repeat(chr(0), $eW) || ord($oX[$eW]) != 1)) {
            goto fp;
        }
        return false;
        fp:
        $tz = substr($oX, $eW + 1);
        $UL = "\x0\0\0\0\0\x0\x0\x0" . $TD . $tz;
        $pS = $this->hash->hash($UL);
        return $this->_equals($WW, $pS);
    }
    function _rsassa_pss_sign($Bf)
    {
        $Op = $this->_emsa_pss_encode($Bf, 8 * $this->k - 1);
        $Bf = $this->_os2ip($Op);
        $uk = $this->_rsasp1($Bf);
        $uk = $this->_i2osp($uk, $this->k);
        return $uk;
    }
    function _rsassa_pss_verify($Bf, $uk)
    {
        if (!(strlen($uk) != $this->k)) {
            goto ib;
        }
        user_error("\111\x6e\x76\141\x6c\x69\x64\x20\163\151\147\156\141\164\x75\162\x65");
        return false;
        ib:
        $hO = 8 * $this->k;
        $iQ = $this->_os2ip($uk);
        $UL = $this->_rsavp1($iQ);
        if (!($UL === false)) {
            goto sH;
        }
        user_error("\x49\x6e\166\141\x6c\x69\144\40\163\151\147\x6e\x61\x74\165\162\145");
        return false;
        sH:
        $Op = $this->_i2osp($UL, $hO >> 3);
        if (!($Op === false)) {
            goto QD;
        }
        user_error("\111\x6e\x76\141\x6c\151\x64\40\163\151\147\156\x61\x74\165\x72\x65");
        return false;
        QD:
        return $this->_emsa_pss_verify($Bf, $Op, $hO - 1);
    }
    function _emsa_pkcs1_v1_5_encode($Bf, $Tn)
    {
        $WW = $this->hash->hash($Bf);
        if (!($WW === false)) {
            goto tJ;
        }
        return false;
        tJ:
        switch ($this->hashName) {
            case "\155\x64\62":
                $f3 = pack("\110\x2a", "\63\x30\62\x30\63\x30\60\143\60\66\60\x38\x32\x61\70\66\x34\x38\70\x36\x66\67\x30\144\x30\62\x30\62\x30\65\60\x30\x30\x34\x31\x30");
                goto k7;
            case "\155\144\65":
                $f3 = pack("\x48\52", "\x33\60\x32\60\63\x30\60\143\x30\66\x30\70\62\x61\x38\x36\x34\x38\x38\66\146\x37\x30\144\60\x32\x30\x35\60\65\60\60\x30\64\61\60");
                goto k7;
            case "\163\x68\x61\61":
                $f3 = pack("\x48\x2a", "\63\60\x32\x31\63\60\x30\x39\60\66\60\65\62\142\60\x65\60\x33\60\x32\61\141\60\65\x30\60\x30\x34\x31\64");
                goto k7;
            case "\x73\x68\x61\62\65\x36":
                $f3 = pack("\110\52", "\x33\x30\63\x31\x33\60\60\x64\60\66\60\x39\x36\60\x38\66\64\70\60\61\x36\x35\x30\x33\60\x34\60\x32\x30\61\x30\65\60\x30\x30\x34\x32\x30");
                goto k7;
            case "\163\x68\x61\63\x38\x34":
                $f3 = pack("\x48\52", "\x33\x30\64\x31\x33\x30\60\x64\x30\66\x30\71\x36\x30\70\66\64\70\60\x31\66\65\60\63\60\x34\60\62\60\x32\x30\x35\60\x30\x30\x34\x33\60");
                goto k7;
            case "\x73\x68\141\65\61\62":
                $f3 = pack("\110\52", "\x33\x30\65\x31\x33\60\60\x64\60\66\60\x39\x36\60\x38\x36\x34\x38\x30\61\66\x35\60\63\60\x34\60\x32\x30\x33\x30\x35\60\60\60\64\64\x30");
        }
        Pc:
        k7:
        $f3 .= $WW;
        $lO = strlen($f3);
        if (!($Tn < $lO + 11)) {
            goto iy;
        }
        user_error("\111\156\x74\x65\x6e\x64\x65\x64\40\145\x6e\x63\x6f\144\145\x64\40\155\145\x73\x73\x61\147\145\40\x6c\x65\x6e\x67\164\x68\40\164\x6f\x6f\x20\x73\150\157\162\164");
        return false;
        iy:
        $A_ = str_repeat(chr(0xff), $Tn - $lO - 3);
        $Op = "\0\1{$A_}\x0{$f3}";
        return $Op;
    }
    function _rsassa_pkcs1_v1_5_sign($Bf)
    {
        $Op = $this->_emsa_pkcs1_v1_5_encode($Bf, $this->k);
        if (!($Op === false)) {
            goto Wh;
        }
        user_error("\122\x53\x41\x20\x6d\x6f\144\165\154\x75\x73\x20\164\x6f\x6f\x20\163\150\157\x72\164");
        return false;
        Wh:
        $Bf = $this->_os2ip($Op);
        $uk = $this->_rsasp1($Bf);
        $uk = $this->_i2osp($uk, $this->k);
        return $uk;
    }
    function _rsassa_pkcs1_v1_5_verify($Bf, $uk)
    {
        if (!(strlen($uk) != $this->k)) {
            goto Rq;
        }
        user_error("\111\x6e\x76\x61\154\x69\x64\40\x73\151\147\156\141\164\x75\162\x65");
        return false;
        Rq:
        $uk = $this->_os2ip($uk);
        $UL = $this->_rsavp1($uk);
        if (!($UL === false)) {
            goto r1;
        }
        user_error("\111\x6e\166\141\154\x69\x64\x20\x73\x69\147\x6e\x61\x74\x75\162\145");
        return false;
        r1:
        $Op = $this->_i2osp($UL, $this->k);
        if (!($Op === false)) {
            goto LN;
        }
        user_error("\x49\156\x76\141\154\151\x64\x20\x73\151\x67\x6e\x61\x74\x75\x72\x65");
        return false;
        LN:
        $Cg = $this->_emsa_pkcs1_v1_5_encode($Bf, $this->k);
        if (!($Cg === false)) {
            goto nN;
        }
        user_error("\122\x53\x41\x20\155\157\x64\165\x6c\165\x73\x20\164\x6f\157\x20\x73\x68\x6f\x72\x74");
        return false;
        nN:
        return $this->_equals($Op, $Cg);
    }
    function setEncryptionMode($nA)
    {
        $this->encryptionMode = $nA;
    }
    function setSignatureMode($nA)
    {
        $this->signatureMode = $nA;
    }
    function setComment($nN)
    {
        $this->comment = $nN;
    }
    function getComment()
    {
        return $this->comment;
    }
    function encrypt($np)
    {
        switch ($this->encryptionMode) {
            case CRYPT_RSA_ENCRYPTION_NONE:
                $np = str_split($np, $this->k);
                $nr = '';
                foreach ($np as $Bf) {
                    $nr .= $this->_raw_encrypt($Bf);
                    ch:
                }
                wl:
                return $nr;
            case CRYPT_RSA_ENCRYPTION_PKCS1:
                $ul = $this->k - 11;
                if (!($ul <= 0)) {
                    goto nu;
                }
                return false;
                nu:
                $np = str_split($np, $ul);
                $nr = '';
                foreach ($np as $Bf) {
                    $nr .= $this->_rsaes_pkcs1_v1_5_encrypt($Bf);
                    gw:
                }
                KD:
                return $nr;
            default:
                $ul = $this->k - 2 * $this->hLen - 2;
                if (!($ul <= 0)) {
                    goto xM;
                }
                return false;
                xM:
                $np = str_split($np, $ul);
                $nr = '';
                foreach ($np as $Bf) {
                    $nr .= $this->_rsaes_oaep_encrypt($Bf);
                    uT:
                }
                vL:
                return $nr;
        }
        rK:
        nL:
    }
    function decrypt($nr)
    {
        if (!($this->k <= 0)) {
            goto dh;
        }
        return false;
        dh:
        $nr = str_split($nr, $this->k);
        $nr[count($nr) - 1] = str_pad($nr[count($nr) - 1], $this->k, chr(0), STR_PAD_LEFT);
        $np = '';
        switch ($this->encryptionMode) {
            case CRYPT_RSA_ENCRYPTION_NONE:
                $lD = "\137\162\x61\x77\x5f\x65\x6e\143\162\x79\x70\164";
                goto BE;
            case CRYPT_RSA_ENCRYPTION_PKCS1:
                $lD = "\137\162\x73\141\x65\x73\137\x70\x6b\x63\163\x31\x5f\166\61\x5f\65\137\x64\145\143\162\171\160\x74";
                goto BE;
            default:
                $lD = "\x5f\162\163\x61\145\163\x5f\x6f\x61\145\160\137\144\x65\143\x72\171\160\x74";
        }
        fX:
        BE:
        foreach ($nr as $BA) {
            $eW = $this->{$lD}($BA);
            if (!($eW === false)) {
                goto ld;
            }
            return false;
            ld:
            $np .= $eW;
            dy:
        }
        hp:
        return $np;
    }
    function sign($to)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto PC;
        }
        return false;
        PC:
        switch ($this->signatureMode) {
            case CRYPT_RSA_SIGNATURE_PKCS1:
                return $this->_rsassa_pkcs1_v1_5_sign($to);
            default:
                return $this->_rsassa_pss_sign($to);
        }
        ww:
        oG:
    }
    function verify($to, $Os)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto m2;
        }
        return false;
        m2:
        switch ($this->signatureMode) {
            case CRYPT_RSA_SIGNATURE_PKCS1:
                return $this->_rsassa_pkcs1_v1_5_verify($to, $Os);
            default:
                return $this->_rsassa_pss_verify($to, $Os);
        }
        Q4:
        SH:
    }
    function _extractBER($DU)
    {
        $eW = preg_replace("\x23\56\x2a\77\136\x2d\x2b\x5b\136\55\x5d\53\x2d\x2b\x5b\134\x72\x5c\156\x20\135\52\44\43\x6d\x73", '', $DU, 1);
        $eW = preg_replace("\43\x2d\53\133\136\55\135\x2b\x2d\x2b\43", '', $eW);
        $eW = str_replace(array("\xd", "\xa", "\x20"), '', $eW);
        $eW = preg_match("\x23\x5e\x5b\x61\x2d\172\101\x2d\x5a\134\144\57\x2b\135\52\x3d\173\x30\x2c\62\x7d\44\43", $eW) ? base64_decode($eW) : false;
        return $eW != false ? $eW : $DU;
    }
}
