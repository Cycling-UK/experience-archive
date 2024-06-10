<?php


namespace Drupal\miniorange_oauth_client;

define("\103\122\x59\x50\x54\137\110\x41\x53\x48\x5f\x4d\x4f\104\105\137\x49\116\124\105\x52\x4e\101\x4c", 1);
define("\103\122\x59\x50\124\x5f\110\x41\x53\110\x5f\x4d\117\104\105\x5f\x4d\x48\101\x53\110", 2);
define("\103\x52\x59\120\124\x5f\x48\101\123\x48\x5f\115\117\x44\105\137\110\101\x53\110", 3);
class Crypt_Hash
{
    var $hashParam;
    var $b;
    var $l = false;
    var $hash;
    var $key = false;
    var $opad;
    var $ipad;
    function __construct($Av = "\163\150\141\61")
    {
        if (defined("\x43\122\x59\x50\124\137\x48\101\x53\x48\137\115\x4f\x44\x45")) {
            goto C2;
        }
        switch (true) {
            case extension_loaded("\x68\x61\163\x68"):
                define("\x43\122\131\120\x54\x5f\x48\101\123\110\137\x4d\x4f\104\105", CRYPT_HASH_MODE_HASH);
                goto bi;
            case extension_loaded("\155\x68\x61\163\x68"):
                define("\103\x52\x59\x50\124\137\x48\101\123\110\137\115\117\x44\105", CRYPT_HASH_MODE_MHASH);
                goto bi;
            default:
                define("\x43\x52\131\120\x54\137\x48\101\123\110\x5f\115\x4f\x44\105", CRYPT_HASH_MODE_INTERNAL);
        }
        sm:
        bi:
        C2:
        $this->setHash($Av);
    }
    function Crypt_Hash($Av = "\163\150\141\61")
    {
        $this->__construct($Av);
    }
    function setKey($GZ = false)
    {
        $this->key = $GZ;
    }
    function getHash()
    {
        return $this->hashParam;
    }
    function setHash($Av)
    {
        $this->hashParam = $Av = strtolower($Av);
        switch ($Av) {
            case "\x6d\144\65\x2d\x39\x36":
            case "\163\150\141\x31\x2d\71\66":
            case "\163\x68\141\x32\65\66\x2d\71\66":
            case "\163\150\141\65\x31\62\x2d\x39\66":
                $Av = substr($Av, 0, -3);
                $this->l = 12;
                goto kv;
            case "\155\144\x32":
            case "\155\x64\x35":
                $this->l = 16;
                goto kv;
            case "\163\x68\141\x31":
                $this->l = 20;
                goto kv;
            case "\163\x68\141\x32\x35\x36":
                $this->l = 32;
                goto kv;
            case "\x73\x68\141\x33\x38\64":
                $this->l = 48;
                goto kv;
            case "\163\150\141\x35\61\62":
                $this->l = 64;
        }
        C5:
        kv:
        switch ($Av) {
            case "\155\144\x32":
                $nA = CRYPT_HASH_MODE == CRYPT_HASH_MODE_HASH && in_array("\155\144\x32", hash_algos()) ? CRYPT_HASH_MODE_HASH : CRYPT_HASH_MODE_INTERNAL;
                goto Bp;
            case "\x73\x68\x61\x33\70\64":
            case "\x73\150\x61\x35\61\62":
                $nA = CRYPT_HASH_MODE == CRYPT_HASH_MODE_MHASH ? CRYPT_HASH_MODE_INTERNAL : CRYPT_HASH_MODE;
                goto Bp;
            default:
                $nA = CRYPT_HASH_MODE;
        }
        v4:
        Bp:
        switch ($nA) {
            case CRYPT_HASH_MODE_MHASH:
                switch ($Av) {
                    case "\x6d\144\65":
                        $this->hash = MHASH_MD5;
                        goto vf;
                    case "\x73\x68\141\x32\x35\66":
                        $this->hash = MHASH_SHA256;
                        goto vf;
                    case "\163\150\141\x31":
                    default:
                        $this->hash = MHASH_SHA1;
                }
                iP:
                vf:
                return;
            case CRYPT_HASH_MODE_HASH:
                switch ($Av) {
                    case "\155\x64\65":
                        $this->hash = "\155\x64\65";
                        return;
                    case "\155\x64\62":
                    case "\163\x68\141\62\65\x36":
                    case "\x73\x68\141\63\x38\x34":
                    case "\163\150\x61\65\x31\x32":
                        $this->hash = $Av;
                        return;
                    case "\163\x68\141\x31":
                    default:
                        $this->hash = "\x73\150\141\61";
                }
                m8:
                lk:
                return;
        }
        Xd:
        ik:
        switch ($Av) {
            case "\x6d\x64\62":
                $this->b = 16;
                $this->hash = array($this, "\x5f\155\x64\62");
                goto Y7;
            case "\x6d\x64\x35":
                $this->b = 64;
                $this->hash = array($this, "\137\155\144\x35");
                goto Y7;
            case "\x73\x68\x61\62\65\x36":
                $this->b = 64;
                $this->hash = array($this, "\137\x73\150\x61\62\x35\66");
                goto Y7;
            case "\163\x68\x61\63\x38\64":
            case "\x73\x68\141\x35\61\x32":
                $this->b = 128;
                $this->hash = array($this, "\137\x73\x68\x61\65\61\62");
                goto Y7;
            case "\163\x68\141\61":
            default:
                $this->b = 64;
                $this->hash = array($this, "\x5f\163\x68\141\61");
        }
        Cu:
        Y7:
        $this->ipad = str_repeat(chr(0x36), $this->b);
        $this->opad = str_repeat(chr(0x5c), $this->b);
    }
    function hash($XA)
    {
        $nA = is_array($this->hash) ? CRYPT_HASH_MODE_INTERNAL : CRYPT_HASH_MODE;
        if (!empty($this->key) || is_string($this->key)) {
            goto kk;
        }
        switch ($nA) {
            case CRYPT_HASH_MODE_MHASH:
                $xS = mhash($this->hash, $XA);
                goto pp;
            case CRYPT_HASH_MODE_HASH:
                $xS = hash($this->hash, $XA, true);
                goto pp;
            case CRYPT_HASH_MODE_INTERNAL:
                $xS = call_user_func($this->hash, $XA);
        }
        j2:
        pp:
        goto Ve;
        kk:
        switch ($nA) {
            case CRYPT_HASH_MODE_MHASH:
                $xS = mhash($this->hash, $XA, $this->key);
                goto yI;
            case CRYPT_HASH_MODE_HASH:
                $xS = hash_hmac($this->hash, $XA, $this->key, true);
                goto yI;
            case CRYPT_HASH_MODE_INTERNAL:
                $GZ = strlen($this->key) > $this->b ? call_user_func($this->hash, $this->key) : $this->key;
                $GZ = str_pad($GZ, $this->b, chr(0));
                $eW = $this->ipad ^ $GZ;
                $eW .= $XA;
                $eW = call_user_func($this->hash, $eW);
                $xS = $this->opad ^ $GZ;
                $xS .= $eW;
                $xS = call_user_func($this->hash, $xS);
        }
        A8:
        yI:
        Ve:
        return substr($xS, 0, $this->l);
    }
    function getLength()
    {
        return $this->l;
    }
    function _md5($Bf)
    {
        return pack("\x48\x2a", md5($Bf));
    }
    function _sha1($Bf)
    {
        return pack("\x48\x2a", sha1($Bf));
    }
    function _md2($Bf)
    {
        static $uk = array(41, 46, 67, 201, 162, 216, 124, 1, 61, 54, 84, 161, 236, 240, 6, 19, 98, 167, 5, 243, 192, 199, 115, 140, 152, 147, 43, 217, 188, 76, 130, 202, 30, 155, 87, 60, 253, 212, 224, 22, 103, 66, 111, 24, 138, 23, 229, 18, 190, 78, 196, 214, 218, 158, 222, 73, 160, 251, 245, 142, 187, 47, 238, 122, 169, 104, 121, 145, 21, 178, 7, 63, 148, 194, 16, 137, 11, 34, 95, 33, 128, 127, 93, 154, 90, 144, 50, 39, 53, 62, 204, 231, 191, 247, 151, 3, 255, 25, 48, 179, 72, 165, 181, 209, 215, 94, 146, 42, 172, 86, 170, 198, 79, 184, 56, 210, 150, 164, 125, 182, 118, 252, 107, 226, 156, 116, 4, 241, 69, 157, 112, 89, 100, 113, 135, 32, 134, 91, 207, 101, 230, 45, 168, 2, 27, 96, 37, 173, 174, 176, 185, 246, 28, 70, 97, 105, 52, 64, 126, 15, 85, 71, 163, 35, 221, 81, 175, 58, 195, 92, 249, 206, 186, 197, 234, 38, 44, 83, 13, 110, 133, 40, 132, 9, 211, 223, 205, 244, 65, 129, 77, 82, 106, 220, 55, 200, 108, 193, 171, 250, 36, 225, 123, 8, 12, 189, 177, 74, 120, 136, 149, 139, 227, 99, 232, 109, 233, 203, 213, 254, 59, 0, 29, 57, 242, 239, 183, 14, 102, 88, 208, 228, 166, 119, 114, 248, 235, 117, 75, 10, 49, 68, 80, 180, 143, 237, 31, 26, 219, 153, 141, 51, 159, 17, 131, 20);
        $zQ = 16 - (strlen($Bf) & 0xf);
        $Bf .= str_repeat(chr($zQ), $zQ);
        $ul = strlen($Bf);
        $BA = str_repeat(chr(0), 16);
        $bW = chr(0);
        $Cs = 0;
        AW:
        if (!($Cs < $ul)) {
            goto zN;
        }
        $em = 0;
        fL:
        if (!($em < 16)) {
            goto TS;
        }
        $BA[$em] = chr($uk[ord($Bf[$Cs + $em] ^ $bW)] ^ ord($BA[$em]));
        $bW = $BA[$em];
        Ci:
        $em++;
        goto fL;
        TS:
        tv:
        $Cs += 16;
        goto AW;
        zN:
        $Bf .= $BA;
        $ul += 16;
        $l2 = str_repeat(chr(0), 48);
        $Cs = 0;
        R_:
        if (!($Cs < $ul)) {
            goto Vf;
        }
        $em = 0;
        Io:
        if (!($em < 16)) {
            goto Wm;
        }
        $l2[$em + 16] = $Bf[$Cs + $em];
        $l2[$em + 32] = $l2[$em + 16] ^ $l2[$em];
        SV:
        $em++;
        goto Io;
        Wm:
        $f3 = chr(0);
        $em = 0;
        EN:
        if (!($em < 18)) {
            goto Fp;
        }
        $yE = 0;
        un:
        if (!($yE < 48)) {
            goto U8;
        }
        $l2[$yE] = $f3 = $l2[$yE] ^ chr($uk[ord($f3)]);
        BJ:
        $yE++;
        goto un;
        U8:
        $f3 = chr(ord($f3) + $em);
        dw:
        $em++;
        goto EN;
        Fp:
        jE:
        $Cs += 16;
        goto R_;
        Vf:
        return substr($l2, 0, 16);
    }
    function _sha256($Bf)
    {
        if (!extension_loaded("\x73\165\150\x6f\x73\151\156")) {
            goto Cs;
        }
        return pack("\x48\52", sha256($Bf));
        Cs:
        $Av = array(0x6a09e667, 0xbb67ae85, 0x3c6ef372, 0xa54ff53a, 0x510e527f, 0x9b05688c, 0x1f83d9ab, 0x5be0cd19);
        static $yE = array(0x428a2f98, 0x71374491, 0xb5c0fbcf, 0xe9b5dba5, 0x3956c25b, 0x59f111f1, 0x923f82a4, 0xab1c5ed5, 0xd807aa98, 0x12835b01, 0x243185be, 0x550c7dc3, 0x72be5d74, 0x80deb1fe, 0x9bdc06a7, 0xc19bf174, 0xe49b69c1, 0xefbe4786, 0xfc19dc6, 0x240ca1cc, 0x2de92c6f, 0x4a7484aa, 0x5cb0a9dc, 0x76f988da, 0x983e5152, 0xa831c66d, 0xb00327c8, 0xbf597fc7, 0xc6e00bf3, 0xd5a79147, 0x6ca6351, 0x14292967, 0x27b70a85, 0x2e1b2138, 0x4d2c6dfc, 0x53380d13, 0x650a7354, 0x766a0abb, 0x81c2c92e, 0x92722c85, 0xa2bfe8a1, 0xa81a664b, 0xc24b8b70, 0xc76c51a3, 0xd192e819, 0xd6990624, 0xf40e3585, 0x106aa070, 0x19a4c116, 0x1e376c08, 0x2748774c, 0x34b0bcb5, 0x391c0cb3, 0x4ed8aa4a, 0x5b9cca4f, 0x682e6ff3, 0x748f82ee, 0x78a5636f, 0x84c87814, 0x8cc70208, 0x90befffa, 0xa4506ceb, 0xbef9a3f7, 0xc67178f2);
        $ul = strlen($Bf);
        $Bf .= str_repeat(chr(0), 64 - ($ul + 8 & 0x3f));
        $Bf[$ul] = chr(0x80);
        $Bf .= pack("\116\x32", 0, $ul << 3);
        $XM = str_split($Bf, 64);
        foreach ($XM as $qS) {
            $mc = array();
            $Cs = 0;
            Qh:
            if (!($Cs < 16)) {
                goto UP;
            }
            extract(unpack("\116\x74\145\x6d\160", $this->_string_shift($qS, 4)));
            $mc[] = $eW;
            Ko:
            $Cs++;
            goto Qh;
            UP:
            $Cs = 16;
            qH:
            if (!($Cs < 64)) {
                goto ig;
            }
            $gJ = $this->_rightRotate($mc[$Cs - 15], 7) ^ $this->_rightRotate($mc[$Cs - 15], 18) ^ $this->_rightShift($mc[$Cs - 15], 3);
            $RP = $this->_rightRotate($mc[$Cs - 2], 17) ^ $this->_rightRotate($mc[$Cs - 2], 19) ^ $this->_rightShift($mc[$Cs - 2], 10);
            $mc[$Cs] = $this->_add($mc[$Cs - 16], $gJ, $mc[$Cs - 7], $RP);
            Dr:
            $Cs++;
            goto qH;
            ig:
            list($v3, $KR, $BA, $FW, $jM, $FC, $H0, $WW) = $Av;
            $Cs = 0;
            AV:
            if (!($Cs < 64)) {
                goto LI;
            }
            $gJ = $this->_rightRotate($v3, 2) ^ $this->_rightRotate($v3, 13) ^ $this->_rightRotate($v3, 22);
            $ha = $v3 & $KR ^ $v3 & $BA ^ $KR & $BA;
            $iD = $this->_add($gJ, $ha);
            $RP = $this->_rightRotate($jM, 6) ^ $this->_rightRotate($jM, 11) ^ $this->_rightRotate($jM, 25);
            $pr = $jM & $FC ^ $this->_not($jM) & $H0;
            $zj = $this->_add($WW, $RP, $pr, $yE[$Cs], $mc[$Cs]);
            $WW = $H0;
            $H0 = $FC;
            $FC = $jM;
            $jM = $this->_add($FW, $zj);
            $FW = $BA;
            $BA = $KR;
            $KR = $v3;
            $v3 = $this->_add($zj, $iD);
            ZH:
            $Cs++;
            goto AV;
            LI:
            $Av = array($this->_add($Av[0], $v3), $this->_add($Av[1], $KR), $this->_add($Av[2], $BA), $this->_add($Av[3], $FW), $this->_add($Av[4], $jM), $this->_add($Av[5], $FC), $this->_add($Av[6], $H0), $this->_add($Av[7], $WW));
            FR:
        }
        q7:
        return pack("\x4e\70", $Av[0], $Av[1], $Av[2], $Av[3], $Av[4], $Av[5], $Av[6], $Av[7]);
    }
    function _sha512($Bf)
    {
        if (class_exists("\115\x61\164\150\137\x42\x69\147\111\156\x74\x65\147\145\x72")) {
            goto Rd;
        }
        include_once "\x4d\x61\x74\x68\137\x42\x69\147\x49\x6e\164\x65\147\x65\162\56\x70\150\x70";
        Rd:
        static $Rp, $kD, $yE;
        if (isset($yE)) {
            goto dU;
        }
        $Rp = array("\143\142\x62\142\71\x64\x35\144\143\61\60\65\x39\x65\x64\70", "\66\62\x39\x61\62\71\x32\x61\63\66\67\x63\144\x35\60\67", "\71\61\x35\71\x30\61\65\141\63\60\x37\60\144\144\61\x37", "\61\65\x32\x66\x65\143\x64\70\x66\67\x30\x65\x35\71\x33\71", "\x36\67\x33\x33\62\66\66\67\146\146\143\x30\x30\142\63\x31", "\70\145\x62\x34\x34\141\70\x37\66\x38\65\x38\x31\65\61\61", "\144\x62\60\143\x32\145\x30\144\x36\x34\146\71\x38\x66\x61\67", "\64\x37\142\x35\64\x38\x31\x64\x62\x65\x66\x61\64\x66\x61\x34");
        $kD = array("\66\141\60\71\x65\66\x36\x37\146\63\142\x63\x63\71\60\70", "\142\142\66\x37\x61\145\70\x35\70\64\143\141\141\x37\63\142", "\63\x63\x36\145\146\63\x37\x32\x66\145\71\x34\x66\x38\x32\x62", "\141\x35\64\x66\146\x35\63\x61\65\x66\61\144\63\66\x66\61", "\65\x31\x30\x65\x35\62\x37\146\141\144\145\x36\x38\x32\144\x31", "\x39\142\x30\65\66\70\x38\143\62\142\63\145\x36\143\x31\x66", "\61\x66\70\63\x64\x39\x61\x62\146\142\64\x31\x62\x64\x36\142", "\x35\142\x65\x30\143\144\x31\x39\x31\x33\67\x65\62\61\x37\71");
        $Cs = 0;
        s8:
        if (!($Cs < 8)) {
            goto Ai;
        }
        $Rp[$Cs] = new Math_BigInteger($Rp[$Cs], 16);
        $Rp[$Cs]->setPrecision(64);
        $kD[$Cs] = new Math_BigInteger($kD[$Cs], 16);
        $kD[$Cs]->setPrecision(64);
        EJ:
        $Cs++;
        goto s8;
        Ai:
        $yE = array("\64\x32\70\x61\62\146\x39\x38\144\x37\62\x38\x61\145\x32\62", "\67\x31\x33\67\x34\x34\x39\61\62\63\x65\146\x36\65\x63\144", "\x62\x35\x63\x30\x66\142\x63\146\x65\x63\x34\144\63\x62\62\146", "\x65\x39\x62\x35\x64\x62\x61\x35\x38\x31\70\x39\144\142\142\x63", "\63\71\65\66\143\x32\x35\x62\x66\63\64\70\x62\65\x33\70", "\x35\x39\146\x31\x31\61\146\61\142\66\x30\65\x64\x30\x31\71", "\71\x32\x33\146\70\x32\141\64\x61\146\61\71\x34\146\71\142", "\x61\x62\x31\x63\65\145\144\x35\144\x61\66\144\x38\61\61\x38", "\x64\70\x30\x37\141\x61\71\x38\x61\63\x30\x33\60\x32\x34\62", "\x31\x32\70\63\65\142\x30\61\x34\x35\x37\x30\66\x66\x62\145", "\x32\x34\x33\x31\70\x35\x62\x65\x34\x65\145\64\x62\x32\70\x63", "\x35\65\x30\x63\67\x64\x63\63\x64\x35\x66\x66\x62\64\145\62", "\67\x32\142\145\65\144\x37\x34\x66\62\67\x62\x38\71\x36\x66", "\x38\60\144\x65\x62\61\x66\145\63\142\x31\x36\x39\x36\x62\x31", "\71\x62\x64\x63\60\66\141\x37\62\x35\143\67\61\x32\x33\65", "\143\61\x39\x62\146\61\67\64\x63\146\66\x39\62\x36\x39\64", "\x65\x34\x39\x62\66\71\x63\x31\x39\x65\x66\61\x34\141\144\x32", "\145\146\142\145\x34\x37\70\66\63\70\64\x66\x32\65\145\63", "\x30\x66\x63\x31\71\x64\x63\x36\x38\142\70\143\x64\65\142\x35", "\62\64\x30\x63\141\61\143\x63\67\x37\141\x63\x39\143\x36\65", "\x32\144\x65\x39\62\143\x36\x66\65\x39\x32\142\60\62\67\x35", "\x34\x61\67\64\x38\x34\x61\x61\66\145\x61\x36\145\x34\70\x33", "\65\143\x62\60\x61\71\144\x63\x62\144\64\x31\x66\142\x64\64", "\x37\x36\146\71\70\x38\x64\141\70\x33\x31\61\x35\x33\x62\65", "\71\70\x33\145\x35\61\x35\x32\x65\145\66\66\x64\x66\x61\x62", "\x61\x38\63\61\143\66\66\144\62\144\x62\64\63\62\x31\x30", "\142\60\60\x33\x32\67\x63\70\x39\70\x66\142\x32\61\63\146", "\x62\x66\65\71\67\x66\x63\x37\142\145\x65\146\60\145\x65\x34", "\143\66\145\x30\x30\x62\x66\x33\63\144\x61\x38\x38\146\143\62", "\144\x35\x61\x37\x39\x31\64\67\x39\63\x30\x61\x61\x37\62\65", "\x30\x36\143\x61\x36\x33\65\x31\x65\x30\60\x33\70\x32\x36\x66", "\x31\x34\x32\71\x32\x39\66\67\x30\141\x30\x65\x36\x65\x37\60", "\62\67\142\x37\60\141\x38\65\64\66\x64\62\x32\146\146\x63", "\x32\145\61\142\62\61\x33\x38\x35\143\62\x36\143\71\62\x36", "\x34\x64\x32\x63\x36\144\x66\143\65\x61\x63\x34\x32\141\x65\144", "\x35\x33\x33\70\60\x64\x31\63\71\x64\x39\x35\x62\63\x64\x66", "\66\65\x30\141\67\63\65\64\x38\142\141\x66\66\x33\144\x65", "\x37\x36\x36\141\60\141\142\142\x33\143\x37\x37\x62\x32\141\x38", "\70\x31\143\62\x63\71\62\145\64\x37\x65\x64\141\145\145\x36", "\71\62\67\62\62\143\70\x35\61\x34\x38\62\63\65\x33\x62", "\x61\x32\142\x66\x65\70\x61\x31\64\143\146\x31\x30\x33\66\x34", "\141\x38\61\141\66\66\x34\x62\x62\143\64\x32\x33\x30\60\x31", "\143\62\x34\142\x38\x62\67\60\x64\x30\x66\70\71\67\x39\x31", "\143\x37\x36\x63\x35\x31\x61\63\60\x36\x35\64\x62\145\x33\60", "\144\61\x39\x32\145\x38\x31\71\x64\x36\145\146\65\x32\x31\70", "\x64\x36\x39\x39\60\x36\x32\64\x35\65\x36\65\x61\71\61\60", "\146\64\60\145\x33\65\x38\65\x35\67\x37\x31\x32\60\62\141", "\x31\x30\66\141\141\x30\67\x30\63\x32\142\x62\x64\61\142\70", "\61\71\x61\64\143\x31\x31\x36\x62\70\x64\x32\144\60\143\x38", "\61\x65\x33\67\x36\x63\60\70\x35\x31\x34\61\x61\x62\65\x33", "\62\67\x34\70\x37\x37\x34\143\144\x66\x38\x65\145\142\71\x39", "\63\64\x62\60\x62\143\x62\x35\x65\61\x39\x62\64\70\x61\x38", "\63\71\x31\143\x30\143\x62\63\x63\65\143\71\65\141\x36\x33", "\x34\x65\x64\x38\141\141\64\141\x65\x33\64\61\70\x61\x63\142", "\x35\142\x39\143\x63\x61\64\x66\67\x37\x36\63\145\x33\x37\63", "\x36\70\62\x65\x36\x66\x66\63\144\66\x62\62\142\x38\x61\63", "\67\x34\70\146\x38\62\x65\x65\x35\x64\145\146\x62\62\x66\143", "\x37\70\x61\x35\66\x33\x36\146\64\x33\x31\x37\62\146\66\60", "\70\x34\x63\70\67\70\x31\64\x61\61\146\x30\141\142\67\62", "\x38\x63\x63\67\x30\x32\x30\x38\x31\141\66\x34\63\71\145\143", "\x39\x30\142\145\146\146\x66\141\x32\x33\66\x33\61\x65\62\x38", "\x61\64\65\x30\x36\x63\145\x62\144\x65\x38\62\x62\144\145\x39", "\142\145\x66\x39\x61\63\146\67\x62\x32\143\66\67\x39\61\65", "\143\66\x37\x31\67\x38\x66\62\x65\63\67\x32\x35\x33\62\x62", "\143\141\x32\67\63\145\143\x65\145\x61\x32\x36\66\61\71\x63", "\144\61\x38\x36\x62\70\143\x37\62\x31\x63\60\x63\62\60\x37", "\145\x61\144\141\x37\144\144\x36\x63\144\145\60\145\x62\x31\x65", "\146\65\x37\x64\64\146\67\x66\145\145\x36\145\x64\61\x37\x38", "\60\66\146\x30\x36\x37\x61\x61\x37\62\x31\67\x36\146\142\x61", "\x30\141\x36\x33\67\x64\x63\x35\141\x32\143\x38\71\70\141\x36", "\x31\61\63\x66\x39\x38\x30\x34\x62\145\x66\71\60\144\141\x65", "\x31\142\x37\x31\60\142\63\65\61\63\61\x63\x34\67\61\142", "\62\70\144\x62\67\x37\146\x35\x32\63\60\x34\67\144\70\64", "\x33\62\143\x61\141\142\x37\142\x34\x30\x63\67\62\x34\x39\x33", "\x33\143\71\x65\x62\145\x30\x61\x31\x35\143\x39\x62\145\142\x63", "\x34\x33\x31\144\x36\x37\x63\x34\x39\x63\x31\x30\x30\x64\x34\143", "\64\x63\143\x35\144\x34\x62\145\143\142\x33\x65\64\62\142\x36", "\x35\x39\67\146\x32\x39\x39\x63\x66\x63\66\65\x37\x65\x32\x61", "\x35\146\x63\x62\x36\146\x61\142\x33\141\144\66\x66\141\145\143", "\66\143\x34\x34\x31\71\70\143\64\141\64\x37\x35\x38\61\x37");
        $Cs = 0;
        yW:
        if (!($Cs < 80)) {
            goto Dw;
        }
        $yE[$Cs] = new Math_BigInteger($yE[$Cs], 16);
        HO:
        $Cs++;
        goto yW;
        Dw:
        dU:
        $Av = $this->l == 48 ? $Rp : $kD;
        $ul = strlen($Bf);
        $Bf .= str_repeat(chr(0), 128 - ($ul + 16 & 0x7f));
        $Bf[$ul] = chr(0x80);
        $Bf .= pack("\x4e\64", 0, 0, 0, $ul << 3);
        $XM = str_split($Bf, 128);
        foreach ($XM as $qS) {
            $mc = array();
            $Cs = 0;
            ce:
            if (!($Cs < 16)) {
                goto YO;
            }
            $eW = new Math_BigInteger($this->_string_shift($qS, 8), 256);
            $eW->setPrecision(64);
            $mc[] = $eW;
            XD:
            $Cs++;
            goto ce;
            YO:
            $Cs = 16;
            Yy:
            if (!($Cs < 80)) {
                goto QK;
            }
            $eW = array($mc[$Cs - 15]->bitwise_rightRotate(1), $mc[$Cs - 15]->bitwise_rightRotate(8), $mc[$Cs - 15]->bitwise_rightShift(7));
            $gJ = $eW[0]->bitwise_xor($eW[1]);
            $gJ = $gJ->bitwise_xor($eW[2]);
            $eW = array($mc[$Cs - 2]->bitwise_rightRotate(19), $mc[$Cs - 2]->bitwise_rightRotate(61), $mc[$Cs - 2]->bitwise_rightShift(6));
            $RP = $eW[0]->bitwise_xor($eW[1]);
            $RP = $RP->bitwise_xor($eW[2]);
            $mc[$Cs] = $mc[$Cs - 16]->copy();
            $mc[$Cs] = $mc[$Cs]->add($gJ);
            $mc[$Cs] = $mc[$Cs]->add($mc[$Cs - 7]);
            $mc[$Cs] = $mc[$Cs]->add($RP);
            qE:
            $Cs++;
            goto Yy;
            QK:
            $v3 = $Av[0]->copy();
            $KR = $Av[1]->copy();
            $BA = $Av[2]->copy();
            $FW = $Av[3]->copy();
            $jM = $Av[4]->copy();
            $FC = $Av[5]->copy();
            $H0 = $Av[6]->copy();
            $WW = $Av[7]->copy();
            $Cs = 0;
            da:
            if (!($Cs < 80)) {
                goto VQ;
            }
            $eW = array($v3->bitwise_rightRotate(28), $v3->bitwise_rightRotate(34), $v3->bitwise_rightRotate(39));
            $gJ = $eW[0]->bitwise_xor($eW[1]);
            $gJ = $gJ->bitwise_xor($eW[2]);
            $eW = array($v3->bitwise_and($KR), $v3->bitwise_and($BA), $KR->bitwise_and($BA));
            $ha = $eW[0]->bitwise_xor($eW[1]);
            $ha = $ha->bitwise_xor($eW[2]);
            $iD = $gJ->add($ha);
            $eW = array($jM->bitwise_rightRotate(14), $jM->bitwise_rightRotate(18), $jM->bitwise_rightRotate(41));
            $RP = $eW[0]->bitwise_xor($eW[1]);
            $RP = $RP->bitwise_xor($eW[2]);
            $eW = array($jM->bitwise_and($FC), $H0->bitwise_and($jM->bitwise_not()));
            $pr = $eW[0]->bitwise_xor($eW[1]);
            $zj = $WW->add($RP);
            $zj = $zj->add($pr);
            $zj = $zj->add($yE[$Cs]);
            $zj = $zj->add($mc[$Cs]);
            $WW = $H0->copy();
            $H0 = $FC->copy();
            $FC = $jM->copy();
            $jM = $FW->add($zj);
            $FW = $BA->copy();
            $BA = $KR->copy();
            $KR = $v3->copy();
            $v3 = $zj->add($iD);
            WC:
            $Cs++;
            goto da;
            VQ:
            $Av = array($Av[0]->add($v3), $Av[1]->add($KR), $Av[2]->add($BA), $Av[3]->add($FW), $Av[4]->add($jM), $Av[5]->add($FC), $Av[6]->add($H0), $Av[7]->add($WW));
            AZ:
        }
        Tk:
        $eW = $Av[0]->toBytes() . $Av[1]->toBytes() . $Av[2]->toBytes() . $Av[3]->toBytes() . $Av[4]->toBytes() . $Av[5]->toBytes();
        if (!($this->l != 48)) {
            goto U2;
        }
        $eW .= $Av[6]->toBytes() . $Av[7]->toBytes();
        U2:
        return $eW;
    }
    function _rightRotate($sg, $q7)
    {
        $VM = 32 - $q7;
        $ZA = (1 << $VM) - 1;
        return $sg << $VM & 0xffffffff | $sg >> $q7 & $ZA;
    }
    function _rightShift($sg, $q7)
    {
        $ZA = (1 << 32 - $q7) - 1;
        return $sg >> $q7 & $ZA;
    }
    function _not($sg)
    {
        return ~$sg & 0xffffffff;
    }
    function _add()
    {
        static $ps;
        if (isset($ps)) {
            goto mv;
        }
        $ps = pow(2, 32);
        mv:
        $XH = 0;
        $Ai = func_get_args();
        foreach ($Ai as $ay) {
            $XH += $ay < 0 ? ($ay & 0x7fffffff) + 0x80000000 : $ay;
            JR:
        }
        Ow:
        switch (true) {
            case is_int($XH):
            case version_compare(PHP_VERSION, "\x35\x2e\x33\56\x30") >= 0 && (php_uname("\x6d") & "\xdf\xdf\337") != "\101\122\x4d":
            case (PHP_OS & "\xdf\337\337") === "\x57\x49\116":
                return fmod($XH, $ps);
        }
        JA:
        Kr:
        return fmod($XH, 0x80000000) & 0x7fffffff | (fmod(floor($XH / 0x80000000), 2) & 1) << 31;
    }
    function _string_shift(&$bz, $JP = 1)
    {
        $ei = substr($bz, 0, $JP);
        $bz = substr($bz, $JP);
        return $ei;
    }
}
