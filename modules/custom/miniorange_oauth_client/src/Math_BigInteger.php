<?php


namespace Drupal\miniorange_oauth_client;

define("\115\x41\124\110\137\102\x49\107\111\116\124\x45\107\105\122\x5f\x4d\x4f\116\124\107\117\x4d\x45\x52\131", 0);
define("\115\101\124\110\137\x42\111\107\111\116\124\105\107\105\122\x5f\102\x41\122\122\105\124\124", 1);
define("\115\101\124\x48\137\x42\x49\107\111\x4e\124\105\107\105\x52\137\x50\117\x57\105\122\x4f\x46\62", 2);
define("\115\x41\124\110\x5f\x42\x49\107\x49\116\x54\105\107\105\122\137\x43\x4c\x41\123\x53\111\x43", 3);
define("\x4d\x41\124\x48\x5f\x42\111\x47\x49\116\124\x45\107\105\x52\137\x4e\117\116\105", 4);
define("\x4d\x41\124\110\137\102\x49\x47\111\x4e\x54\x45\x47\x45\x52\x5f\x56\101\114\x55\105", 0);
define("\115\x41\x54\110\x5f\x42\x49\107\x49\x4e\x54\x45\107\x45\122\137\123\111\107\x4e", 1);
define("\x4d\101\x54\110\x5f\102\111\x47\111\x4e\x54\105\x47\105\x52\x5f\x56\x41\x52\x49\x41\102\x4c\105", 0);
define("\115\101\124\110\x5f\102\111\x47\x49\116\124\x45\107\105\122\137\x44\101\x54\x41", 1);
define("\115\101\124\110\x5f\x42\111\x47\x49\116\x54\x45\107\x45\122\137\x4d\117\x44\105\137\x49\116\x54\x45\x52\x4e\101\x4c", 1);
define("\x4d\101\124\x48\137\102\111\x47\x49\x4e\124\105\107\105\x52\137\x4d\117\104\105\x5f\x42\103\x4d\101\124\110", 2);
define("\x4d\x41\124\x48\137\x42\x49\x47\111\116\124\105\107\x45\x52\137\x4d\x4f\x44\105\137\x47\x4d\120", 3);
define("\115\x41\x54\110\137\x42\111\107\x49\x4e\124\x45\x47\x45\122\x5f\x4b\101\x52\x41\x54\123\125\x42\x41\x5f\103\x55\x54\x4f\x46\106", 25);
class Math_BigInteger
{
    var $value;
    var $is_negative = false;
    var $precision = -1;
    var $bitmask = false;
    var $hex;
    function __construct($l2 = 0, $C9 = 10)
    {
        if (defined("\x4d\101\x54\110\137\x42\111\107\111\116\x54\x45\x47\105\122\137\115\x4f\x44\x45")) {
            goto LV;
        }
        switch (true) {
            case extension_loaded("\x67\155\160"):
                define("\115\101\124\110\137\102\x49\x47\x49\116\124\105\x47\105\122\x5f\x4d\x4f\x44\105", MATH_BIGINTEGER_MODE_GMP);
                goto H_;
            case extension_loaded("\142\x63\x6d\x61\164\150"):
                define("\115\x41\124\x48\137\102\111\x47\111\x4e\x54\105\x47\105\122\137\x4d\117\104\x45", MATH_BIGINTEGER_MODE_BCMATH);
                goto H_;
            default:
                define("\115\x41\x54\x48\137\102\111\x47\111\116\x54\x45\x47\105\122\x5f\x4d\117\104\105", MATH_BIGINTEGER_MODE_INTERNAL);
        }
        fl:
        H_:
        LV:
        if (!(extension_loaded("\157\160\145\156\x73\163\x6c") && !defined("\x4d\x41\124\110\137\102\x49\x47\111\x4e\124\105\107\105\122\137\x4f\120\x45\116\x53\x53\x4c\x5f\104\111\123\x41\102\114\x45") && !defined("\115\101\x54\110\x5f\x42\x49\107\x49\116\124\x45\107\x45\122\137\x4f\x50\105\x4e\123\123\x4c\137\105\x4e\x41\102\x4c\105\104"))) {
            goto hc;
        }
        ob_start();
        @phpinfo();
        $F2 = ob_get_contents();
        ob_end_clean();
        preg_match_all("\x23\x4f\160\145\156\123\123\x4c\40\x28\110\145\141\144\x65\162\174\x4c\151\x62\162\141\x72\x79\51\x20\x56\145\162\163\151\x6f\x6e\50\56\52\x29\43\x69\x6d", $F2, $Tv);
        $bL = array();
        if (empty($Tv[1])) {
            goto DK;
        }
        $Cs = 0;
        Vj:
        if (!($Cs < count($Tv[1]))) {
            goto Sf;
        }
        $Zv = trim(str_replace("\x3d\x3e", '', strip_tags($Tv[2][$Cs])));
        if (!preg_match("\57\50\x5c\144\53\134\x2e\134\x64\53\134\x2e\134\x64\x2b\51\x2f\151", $Zv, $Bf)) {
            goto dt;
        }
        $bL[$Tv[1][$Cs]] = $Bf[0];
        goto Gn;
        dt:
        $bL[$Tv[1][$Cs]] = $Zv;
        Gn:
        Oa:
        $Cs++;
        goto Vj;
        Sf:
        DK:
        switch (true) {
            case !isset($bL["\x48\x65\141\x64\x65\162"]):
            case !isset($bL["\x4c\x69\x62\162\x61\162\171"]):
            case $bL["\110\145\141\x64\145\x72"] == $bL["\114\151\142\162\x61\x72\171"]:
            case version_compare($bL["\x48\x65\141\x64\x65\162"], "\x31\56\60\56\x30") >= 0 && version_compare($bL["\x4c\151\142\162\x61\x72\171"], "\61\56\x30\56\x30") >= 0:
                define("\x4d\101\x54\x48\x5f\102\111\x47\111\116\124\105\x47\105\122\137\x4f\120\105\x4e\x53\123\x4c\x5f\x45\x4e\x41\x42\x4c\x45\104", true);
                goto lt;
            default:
                define("\115\x41\x54\110\x5f\102\111\107\x49\116\x54\x45\107\x45\x52\137\x4f\120\105\x4e\123\x53\x4c\137\x44\x49\123\x41\102\114\x45", true);
        }
        bL:
        lt:
        hc:
        if (defined("\120\110\120\x5f\x49\x4e\x54\x5f\x53\x49\x5a\x45")) {
            goto J_;
        }
        define("\120\x48\x50\137\x49\116\124\x5f\123\111\x5a\x45", 4);
        J_:
        if (!(!defined("\x4d\x41\x54\x48\x5f\102\111\x47\111\116\x54\x45\107\x45\122\x5f\x42\101\123\x45") && MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_INTERNAL)) {
            goto kt;
        }
        switch (PHP_INT_SIZE) {
            case 8:
                define("\115\x41\x54\x48\137\x42\x49\x47\111\116\124\105\x47\105\122\137\x42\x41\123\x45", 31);
                define("\115\101\124\110\137\x42\111\x47\111\116\x54\105\x47\x45\122\x5f\x42\101\123\105\x5f\x46\x55\x4c\114", 0x80000000);
                define("\x4d\101\x54\x48\137\x42\111\107\x49\x4e\x54\x45\x47\x45\x52\137\115\101\x58\137\x44\111\x47\111\x54", 0x7fffffff);
                define("\x4d\x41\124\110\137\102\111\x47\111\x4e\124\105\x47\x45\x52\137\115\x53\x42", 0x40000000);
                define("\115\101\124\110\137\x42\x49\107\x49\x4e\x54\x45\x47\105\x52\x5f\115\101\130\x31\x30", 1000000000);
                define("\115\x41\x54\110\x5f\x42\x49\x47\111\x4e\x54\105\107\x45\122\x5f\115\x41\x58\x31\x30\x5f\x4c\105\116", 9);
                define("\x4d\x41\x54\x48\137\102\111\x47\x49\116\x54\105\107\x45\x52\137\x4d\x41\130\137\104\111\x47\x49\x54\x32", pow(2, 62));
                goto aE;
            default:
                define("\115\101\x54\x48\x5f\x42\111\107\111\116\124\105\107\105\122\x5f\102\101\x53\x45", 26);
                define("\115\x41\124\x48\x5f\x42\111\107\111\116\124\105\x47\105\x52\137\x42\101\123\105\x5f\x46\x55\114\x4c", 0x4000000);
                define("\x4d\x41\124\x48\137\x42\x49\107\111\116\124\x45\107\105\122\137\x4d\101\x58\x5f\104\111\x47\111\124", 0x3ffffff);
                define("\x4d\101\124\110\x5f\x42\x49\x47\111\116\x54\x45\107\x45\122\x5f\115\x53\102", 0x2000000);
                define("\x4d\101\x54\110\137\x42\111\107\x49\116\124\x45\x47\x45\122\x5f\115\101\x58\61\x30", 10000000);
                define("\115\x41\124\x48\137\102\x49\107\111\116\124\x45\107\105\x52\137\115\x41\x58\x31\60\x5f\114\105\116", 7);
                define("\x4d\x41\x54\x48\x5f\102\111\x47\111\116\124\x45\107\x45\x52\x5f\x4d\101\x58\137\x44\111\107\x49\124\62", pow(2, 52));
        }
        P5:
        aE:
        kt:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                switch (true) {
                    case is_resource($l2) && get_resource_type($l2) == "\x47\115\x50\40\x69\x6e\164\x65\x67\x65\x72":
                    case is_object($l2) && get_class($l2) == "\x47\115\x50":
                        $this->value = $l2;
                        return;
                }
                sv:
                lJ:
                $this->value = gmp_init(0);
                goto RU;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $this->value = "\60";
                goto RU;
            default:
                $this->value = array();
        }
        tY:
        RU:
        if (!(empty($l2) && (abs($C9) != 256 || $l2 !== "\x30"))) {
            goto TP;
        }
        return;
        TP:
        switch ($C9) {
            case -256:
                if (!(ord($l2[0]) & 0x80)) {
                    goto zV;
                }
                $l2 = ~$l2;
                $this->is_negative = true;
                zV:
            case 256:
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $this->value = function_exists("\x67\x6d\160\x5f\151\x6d\x70\x6f\162\x74") ? gmp_import($l2) : gmp_init("\x30\x78" . bin2hex($l2));
                        if (!$this->is_negative) {
                            goto oI;
                        }
                        $this->value = gmp_neg($this->value);
                        oI:
                        goto Wf;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $ww = strlen($l2) + 3 & 0xfffffffc;
                        $l2 = str_pad($l2, $ww, chr(0), STR_PAD_LEFT);
                        $Cs = 0;
                        Fs:
                        if (!($Cs < $ww)) {
                            goto UF;
                        }
                        $this->value = bcmul($this->value, "\64\62\71\64\71\x36\67\62\x39\66", 0);
                        $this->value = bcadd($this->value, 0x1000000 * ord($l2[$Cs]) + (ord($l2[$Cs + 1]) << 16 | ord($l2[$Cs + 2]) << 8 | ord($l2[$Cs + 3])), 0);
                        WD:
                        $Cs += 4;
                        goto Fs;
                        UF:
                        if (!$this->is_negative) {
                            goto SZ;
                        }
                        $this->value = "\x2d" . $this->value;
                        SZ:
                        goto Wf;
                    default:
                        zc:
                        if (!strlen($l2)) {
                            goto KR;
                        }
                        $this->value[] = $this->_bytes2int($this->_base256_rshift($l2, MATH_BIGINTEGER_BASE));
                        goto zc;
                        KR:
                }
                IW:
                Wf:
                if (!$this->is_negative) {
                    goto q3;
                }
                if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL)) {
                    goto wZ;
                }
                $this->is_negative = false;
                wZ:
                $eW = $this->add(new Math_BigInteger("\55\61"));
                $this->value = $eW->value;
                q3:
                goto Fx;
            case 16:
            case -16:
                if (!($C9 > 0 && $l2[0] == "\x2d")) {
                    goto jk;
                }
                $this->is_negative = true;
                $l2 = substr($l2, 1);
                jk:
                $l2 = preg_replace("\x23\136\x28\x3f\x3a\x30\170\x29\x3f\50\x5b\101\55\x46\x61\x2d\146\x30\x2d\71\x5d\x2a\x29\x2e\x2a\x23", "\x24\x31", $l2);
                $aQ = false;
                if (!($C9 < 0 && hexdec($l2[0]) >= 8)) {
                    goto T1;
                }
                $this->is_negative = $aQ = true;
                $l2 = bin2hex(~pack("\110\x2a", $l2));
                T1:
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $eW = $this->is_negative ? "\x2d\x30\x78" . $l2 : "\x30\170" . $l2;
                        $this->value = gmp_init($eW);
                        $this->is_negative = false;
                        goto LM;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $l2 = strlen($l2) & 1 ? "\60" . $l2 : $l2;
                        $eW = new Math_BigInteger(pack("\110\x2a", $l2), 256);
                        $this->value = $this->is_negative ? "\x2d" . $eW->value : $eW->value;
                        $this->is_negative = false;
                        goto LM;
                    default:
                        $l2 = strlen($l2) & 1 ? "\x30" . $l2 : $l2;
                        $eW = new Math_BigInteger(pack("\110\52", $l2), 256);
                        $this->value = $eW->value;
                }
                zJ:
                LM:
                if (!$aQ) {
                    goto D3;
                }
                $eW = $this->add(new Math_BigInteger("\55\61"));
                $this->value = $eW->value;
                D3:
                goto Fx;
            case 10:
            case -10:
                $l2 = preg_replace("\43\50\77\x3c\x21\x5e\51\x28\77\x3a\x2d\51\x2e\x2a\x7c\50\x3f\x3c\x3d\x5e\x7c\55\x29\x30\x2a\174\x5b\136\x2d\60\x2d\x39\135\56\x2a\x23", '', $l2);
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $this->value = gmp_init($l2);
                        goto A3;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $this->value = $l2 === "\55" ? "\60" : (string) $l2;
                        goto A3;
                    default:
                        $eW = new Math_BigInteger();
                        $Sj = new Math_BigInteger();
                        $Sj->value = array(MATH_BIGINTEGER_MAX10);
                        if (!($l2[0] == "\55")) {
                            goto OQ;
                        }
                        $this->is_negative = true;
                        $l2 = substr($l2, 1);
                        OQ:
                        $l2 = str_pad($l2, strlen($l2) + (MATH_BIGINTEGER_MAX10_LEN - 1) * strlen($l2) % MATH_BIGINTEGER_MAX10_LEN, 0, STR_PAD_LEFT);
                        Bn:
                        if (!strlen($l2)) {
                            goto A0;
                        }
                        $eW = $eW->multiply($Sj);
                        $eW = $eW->add(new Math_BigInteger($this->_int2bytes(substr($l2, 0, MATH_BIGINTEGER_MAX10_LEN)), 256));
                        $l2 = substr($l2, MATH_BIGINTEGER_MAX10_LEN);
                        goto Bn;
                        A0:
                        $this->value = $eW->value;
                }
                W4:
                A3:
                goto Fx;
            case 2:
            case -2:
                if (!($C9 > 0 && $l2[0] == "\x2d")) {
                    goto Xh;
                }
                $this->is_negative = true;
                $l2 = substr($l2, 1);
                Xh:
                $l2 = preg_replace("\43\x5e\50\x5b\60\x31\x5d\52\x29\56\52\43", "\x24\x31", $l2);
                $l2 = str_pad($l2, strlen($l2) + 3 * strlen($l2) % 4, 0, STR_PAD_LEFT);
                $DU = "\60\170";
                YD:
                if (!strlen($l2)) {
                    goto Qy;
                }
                $Yq = substr($l2, 0, 4);
                $DU .= dechex(bindec($Yq));
                $l2 = substr($l2, 4);
                goto YD;
                Qy:
                if (!$this->is_negative) {
                    goto rJ;
                }
                $DU = "\x2d" . $DU;
                rJ:
                $eW = new Math_BigInteger($DU, 8 * $C9);
                $this->value = $eW->value;
                $this->is_negative = $eW->is_negative;
                goto Fx;
            default:
        }
        sA:
        Fx:
    }
    function Math_BigInteger($l2 = 0, $C9 = 10)
    {
        $this->__construct($l2, $C9);
    }
    function toBytes($Jd = false)
    {
        if (!$Jd) {
            goto wi;
        }
        $n1 = $this->compare(new Math_BigInteger());
        if (!($n1 == 0)) {
            goto lz;
        }
        return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
        lz:
        $eW = $n1 < 0 ? $this->add(new Math_BigInteger(1)) : $this->copy();
        $bt = $eW->toBytes();
        if (!empty($bt)) {
            goto SB;
        }
        $bt = chr(0);
        SB:
        if (!(ord($bt[0]) & 0x80)) {
            goto SG;
        }
        $bt = chr(0) . $bt;
        SG:
        return $n1 < 0 ? ~$bt : $bt;
        wi:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                if (!(gmp_cmp($this->value, gmp_init(0)) == 0)) {
                    goto M3;
                }
                return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
                M3:
                if (function_exists("\x67\x6d\x70\137\145\x78\160\157\162\164")) {
                    goto pA;
                }
                $eW = gmp_strval(gmp_abs($this->value), 16);
                $eW = strlen($eW) & 1 ? "\x30" . $eW : $eW;
                $eW = pack("\110\x2a", $eW);
                goto FI;
                pA:
                $eW = gmp_export($this->value);
                FI:
                return $this->precision > 0 ? substr(str_pad($eW, $this->precision >> 3, chr(0), STR_PAD_LEFT), -($this->precision >> 3)) : ltrim($eW, chr(0));
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\60")) {
                    goto FG;
                }
                return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
                FG:
                $KT = '';
                $lU = $this->value;
                if (!($lU[0] == "\55")) {
                    goto Kb;
                }
                $lU = substr($lU, 1);
                Kb:
                v2:
                if (!(bccomp($lU, "\x30", 0) > 0)) {
                    goto Mo;
                }
                $eW = bcmod($lU, "\61\66\x37\67\x37\x32\x31\66");
                $KT = chr($eW >> 16) . chr($eW >> 8) . chr($eW) . $KT;
                $lU = bcdiv($lU, "\x31\66\67\x37\x37\x32\x31\66", 0);
                goto v2;
                Mo:
                return $this->precision > 0 ? substr(str_pad($KT, $this->precision >> 3, chr(0), STR_PAD_LEFT), -($this->precision >> 3)) : ltrim($KT, chr(0));
        }
        E4:
        IG:
        if (count($this->value)) {
            goto bF;
        }
        return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
        bF:
        $XH = $this->_int2bytes($this->value[count($this->value) - 1]);
        $eW = $this->copy();
        $Cs = count($eW->value) - 2;
        oz:
        if (!($Cs >= 0)) {
            goto Uu;
        }
        $eW->_base256_lshift($XH, MATH_BIGINTEGER_BASE);
        $XH = $XH | str_pad($eW->_int2bytes($eW->value[$Cs]), strlen($XH), chr(0), STR_PAD_LEFT);
        aO:
        --$Cs;
        goto oz;
        Uu:
        return $this->precision > 0 ? str_pad(substr($XH, -($this->precision + 7 >> 3)), $this->precision + 7 >> 3, chr(0), STR_PAD_LEFT) : $XH;
    }
    function toHex($Jd = false)
    {
        return bin2hex($this->toBytes($Jd));
    }
    function toBits($Jd = false)
    {
        $kE = $this->toHex($Jd);
        $Ve = '';
        $Cs = strlen($kE) - 8;
        $ZF = strlen($kE) & 7;
        DT:
        if (!($Cs >= $ZF)) {
            goto nx;
        }
        $Ve = str_pad(decbin(hexdec(substr($kE, $Cs, 8))), 32, "\x30", STR_PAD_LEFT) . $Ve;
        ED:
        $Cs -= 8;
        goto DT;
        nx:
        if (!$ZF) {
            goto y1;
        }
        $Ve = str_pad(decbin(hexdec(substr($kE, 0, $ZF))), 8, "\60", STR_PAD_LEFT) . $Ve;
        y1:
        $XH = $this->precision > 0 ? substr($Ve, -$this->precision) : ltrim($Ve, "\x30");
        if (!($Jd && $this->compare(new Math_BigInteger()) > 0 && $this->precision <= 0)) {
            goto jC;
        }
        return "\60" . $XH;
        jC:
        return $XH;
    }
    function toString()
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_strval($this->value);
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\x30")) {
                    goto LQ;
                }
                return "\x30";
                LQ:
                return ltrim($this->value, "\60");
        }
        Qd:
        fk:
        if (count($this->value)) {
            goto yP;
        }
        return "\x30";
        yP:
        $eW = $this->copy();
        $eW->is_negative = false;
        $yj = new Math_BigInteger();
        $yj->value = array(MATH_BIGINTEGER_MAX10);
        $XH = '';
        WT:
        if (!count($eW->value)) {
            goto hO;
        }
        list($eW, $ps) = $eW->divide($yj);
        $XH = str_pad(isset($ps->value[0]) ? $ps->value[0] : '', MATH_BIGINTEGER_MAX10_LEN, "\x30", STR_PAD_LEFT) . $XH;
        goto WT;
        hO:
        $XH = ltrim($XH, "\x30");
        if (!empty($XH)) {
            goto tl;
        }
        $XH = "\x30";
        tl:
        if (!$this->is_negative) {
            goto Cp;
        }
        $XH = "\55" . $XH;
        Cp:
        return $XH;
    }
    function copy()
    {
        $eW = new Math_BigInteger();
        $eW->value = $this->value;
        $eW->is_negative = $this->is_negative;
        $eW->precision = $this->precision;
        $eW->bitmask = $this->bitmask;
        return $eW;
    }
    function __toString()
    {
        return $this->toString();
    }
    function __clone()
    {
        return $this->copy();
    }
    function __sleep()
    {
        $this->hex = $this->toHex(true);
        $ma = array("\150\x65\170");
        if (!($this->precision > 0)) {
            goto Iu;
        }
        $ma[] = "\x70\x72\x65\x63\x69\x73\151\157\156";
        Iu:
        return $ma;
    }
    function __wakeup()
    {
        $eW = new Math_BigInteger($this->hex, -16);
        $this->value = $eW->value;
        $this->is_negative = $eW->is_negative;
        if (!($this->precision > 0)) {
            goto I4;
        }
        $this->setPrecision($this->precision);
        I4:
    }
    function __debugInfo()
    {
        $fh = array();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $bw = "\147\x6d\x70";
                goto MP;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $bw = "\142\x63\155\x61\164\150";
                goto MP;
            case MATH_BIGINTEGER_MODE_INTERNAL:
                $bw = "\x69\156\x74\145\162\156\x61\x6c";
                $fh[] = PHP_INT_SIZE == 8 ? "\x36\x34\55\142\x69\x74" : "\63\x32\55\142\x69\x74";
        }
        mw:
        MP:
        if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_GMP && defined("\115\101\124\110\137\102\x49\x47\111\x4e\124\x45\107\105\x52\137\x4f\120\105\x4e\123\123\114\137\x45\116\101\102\114\x45\104"))) {
            goto vZ;
        }
        $fh[] = "\x4f\x70\x65\156\x53\123\x4c";
        vZ:
        if (empty($fh)) {
            goto ir;
        }
        $bw .= "\x20\x28" . implode($fh, "\54\40") . "\51";
        ir:
        return array("\166\x61\x6c\x75\145" => "\x30\170" . $this->toHex(true), "\x65\x6e\x67\151\156\145" => $bw);
    }
    function add($UZ)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_add($this->value, $UZ->value);
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW = new Math_BigInteger();
                $eW->value = bcadd($this->value, $UZ->value, 0);
                return $this->_normalize($eW);
        }
        W_:
        Ej:
        $eW = $this->_add($this->value, $this->is_negative, $UZ->value, $UZ->is_negative);
        $XH = new Math_BigInteger();
        $XH->value = $eW[MATH_BIGINTEGER_VALUE];
        $XH->is_negative = $eW[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($XH);
    }
    function _add($du, $LB, $hS, $x3)
    {
        $IT = count($du);
        $ip = count($hS);
        if ($IT == 0) {
            goto mN;
        }
        if ($ip == 0) {
            goto Fa;
        }
        goto NM;
        mN:
        return array(MATH_BIGINTEGER_VALUE => $hS, MATH_BIGINTEGER_SIGN => $x3);
        goto NM;
        Fa:
        return array(MATH_BIGINTEGER_VALUE => $du, MATH_BIGINTEGER_SIGN => $LB);
        NM:
        if (!($LB != $x3)) {
            goto sL;
        }
        if (!($du == $hS)) {
            goto ni;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        ni:
        $eW = $this->_subtract($du, false, $hS, false);
        $eW[MATH_BIGINTEGER_SIGN] = $this->_compare($du, false, $hS, false) > 0 ? $LB : $x3;
        return $eW;
        sL:
        if ($IT < $ip) {
            goto ai;
        }
        $rz = $ip;
        $KT = $du;
        goto GW;
        ai:
        $rz = $IT;
        $KT = $hS;
        GW:
        $KT[count($KT)] = 0;
        $M5 = 0;
        $Cs = 0;
        $em = 1;
        UA:
        if (!($em < $rz)) {
            goto sP;
        }
        $tu = $du[$em] * MATH_BIGINTEGER_BASE_FULL + $du[$Cs] + $hS[$em] * MATH_BIGINTEGER_BASE_FULL + $hS[$Cs] + $M5;
        $M5 = $tu >= MATH_BIGINTEGER_MAX_DIGIT2;
        $tu = $M5 ? $tu - MATH_BIGINTEGER_MAX_DIGIT2 : $tu;
        $eW = MATH_BIGINTEGER_BASE === 26 ? intval($tu / 0x4000000) : $tu >> 31;
        $KT[$Cs] = (int) ($tu - MATH_BIGINTEGER_BASE_FULL * $eW);
        $KT[$em] = $eW;
        R2:
        $Cs += 2;
        $em += 2;
        goto UA;
        sP:
        if (!($em == $rz)) {
            goto MG;
        }
        $tu = $du[$Cs] + $hS[$Cs] + $M5;
        $M5 = $tu >= MATH_BIGINTEGER_BASE_FULL;
        $KT[$Cs] = $M5 ? $tu - MATH_BIGINTEGER_BASE_FULL : $tu;
        ++$Cs;
        MG:
        if (!$M5) {
            goto HM;
        }
        aF:
        if (!($KT[$Cs] == MATH_BIGINTEGER_MAX_DIGIT)) {
            goto mV;
        }
        $KT[$Cs] = 0;
        SF:
        ++$Cs;
        goto aF;
        mV:
        ++$KT[$Cs];
        HM:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($KT), MATH_BIGINTEGER_SIGN => $LB);
    }
    function subtract($UZ)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_sub($this->value, $UZ->value);
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW = new Math_BigInteger();
                $eW->value = bcsub($this->value, $UZ->value, 0);
                return $this->_normalize($eW);
        }
        yS:
        xW:
        $eW = $this->_subtract($this->value, $this->is_negative, $UZ->value, $UZ->is_negative);
        $XH = new Math_BigInteger();
        $XH->value = $eW[MATH_BIGINTEGER_VALUE];
        $XH->is_negative = $eW[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($XH);
    }
    function _subtract($du, $LB, $hS, $x3)
    {
        $IT = count($du);
        $ip = count($hS);
        if ($IT == 0) {
            goto bB;
        }
        if ($ip == 0) {
            goto vt;
        }
        goto t4;
        bB:
        return array(MATH_BIGINTEGER_VALUE => $hS, MATH_BIGINTEGER_SIGN => !$x3);
        goto t4;
        vt:
        return array(MATH_BIGINTEGER_VALUE => $du, MATH_BIGINTEGER_SIGN => $LB);
        t4:
        if (!($LB != $x3)) {
            goto zQ;
        }
        $eW = $this->_add($du, false, $hS, false);
        $eW[MATH_BIGINTEGER_SIGN] = $LB;
        return $eW;
        zQ:
        $XS = $this->_compare($du, $LB, $hS, $x3);
        if ($XS) {
            goto uQ;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        uQ:
        if (!(!$LB && $XS < 0 || $LB && $XS > 0)) {
            goto ER;
        }
        $eW = $du;
        $du = $hS;
        $hS = $eW;
        $LB = !$LB;
        $IT = count($du);
        $ip = count($hS);
        ER:
        $M5 = 0;
        $Cs = 0;
        $em = 1;
        nT:
        if (!($em < $ip)) {
            goto vM;
        }
        $tu = $du[$em] * MATH_BIGINTEGER_BASE_FULL + $du[$Cs] - $hS[$em] * MATH_BIGINTEGER_BASE_FULL - $hS[$Cs] - $M5;
        $M5 = $tu < 0;
        $tu = $M5 ? $tu + MATH_BIGINTEGER_MAX_DIGIT2 : $tu;
        $eW = MATH_BIGINTEGER_BASE === 26 ? intval($tu / 0x4000000) : $tu >> 31;
        $du[$Cs] = (int) ($tu - MATH_BIGINTEGER_BASE_FULL * $eW);
        $du[$em] = $eW;
        Rb:
        $Cs += 2;
        $em += 2;
        goto nT;
        vM:
        if (!($em == $ip)) {
            goto vb;
        }
        $tu = $du[$Cs] - $hS[$Cs] - $M5;
        $M5 = $tu < 0;
        $du[$Cs] = $M5 ? $tu + MATH_BIGINTEGER_BASE_FULL : $tu;
        ++$Cs;
        vb:
        if (!$M5) {
            goto Je;
        }
        Gt:
        if ($du[$Cs]) {
            goto HK;
        }
        $du[$Cs] = MATH_BIGINTEGER_MAX_DIGIT;
        y6:
        ++$Cs;
        goto Gt;
        HK:
        --$du[$Cs];
        Je:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($du), MATH_BIGINTEGER_SIGN => $LB);
    }
    function multiply($l2)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_mul($this->value, $l2->value);
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW = new Math_BigInteger();
                $eW->value = bcmul($this->value, $l2->value, 0);
                return $this->_normalize($eW);
        }
        V2:
        Vy:
        $eW = $this->_multiply($this->value, $this->is_negative, $l2->value, $l2->is_negative);
        $RK = new Math_BigInteger();
        $RK->value = $eW[MATH_BIGINTEGER_VALUE];
        $RK->is_negative = $eW[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($RK);
    }
    function _multiply($du, $LB, $hS, $x3)
    {
        $R1 = count($du);
        $kR = count($hS);
        if (!(!$R1 || !$kR)) {
            goto Z4;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        Z4:
        return array(MATH_BIGINTEGER_VALUE => min($R1, $kR) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim($this->_regularMultiply($du, $hS)) : $this->_trim($this->_karatsuba($du, $hS)), MATH_BIGINTEGER_SIGN => $LB != $x3);
    }
    function _regularMultiply($du, $hS)
    {
        $R1 = count($du);
        $kR = count($hS);
        if (!(!$R1 || !$kR)) {
            goto av;
        }
        return array();
        av:
        if (!($R1 < $kR)) {
            goto Jt;
        }
        $eW = $du;
        $du = $hS;
        $hS = $eW;
        $R1 = count($du);
        $kR = count($hS);
        Jt:
        $xf = $this->_array_repeat(0, $R1 + $kR);
        $M5 = 0;
        $em = 0;
        Ir:
        if (!($em < $R1)) {
            goto AT;
        }
        $eW = $du[$em] * $hS[0] + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $xf[$em] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        W6:
        ++$em;
        goto Ir;
        AT:
        $xf[$em] = $M5;
        $Cs = 1;
        SE:
        if (!($Cs < $kR)) {
            goto hY;
        }
        $M5 = 0;
        $em = 0;
        $yE = $Cs;
        Jg:
        if (!($em < $R1)) {
            goto bG;
        }
        $eW = $xf[$yE] + $du[$em] * $hS[$Cs] + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $xf[$yE] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        x7:
        ++$em;
        ++$yE;
        goto Jg;
        bG:
        $xf[$yE] = $M5;
        Iy:
        ++$Cs;
        goto SE;
        hY:
        return $xf;
    }
    function _karatsuba($du, $hS)
    {
        $Bf = min(count($du) >> 1, count($hS) >> 1);
        if (!($Bf < MATH_BIGINTEGER_KARATSUBA_CUTOFF)) {
            goto QI;
        }
        return $this->_regularMultiply($du, $hS);
        QI:
        $TO = array_slice($du, $Bf);
        $sV = array_slice($du, 0, $Bf);
        $t1 = array_slice($hS, $Bf);
        $AH = array_slice($hS, 0, $Bf);
        $jZ = $this->_karatsuba($TO, $t1);
        $b3 = $this->_karatsuba($sV, $AH);
        $Qz = $this->_add($TO, false, $sV, false);
        $eW = $this->_add($t1, false, $AH, false);
        $Qz = $this->_karatsuba($Qz[MATH_BIGINTEGER_VALUE], $eW[MATH_BIGINTEGER_VALUE]);
        $eW = $this->_add($jZ, false, $b3, false);
        $Qz = $this->_subtract($Qz, false, $eW[MATH_BIGINTEGER_VALUE], false);
        $jZ = array_merge(array_fill(0, 2 * $Bf, 0), $jZ);
        $Qz[MATH_BIGINTEGER_VALUE] = array_merge(array_fill(0, $Bf, 0), $Qz[MATH_BIGINTEGER_VALUE]);
        $MU = $this->_add($jZ, false, $Qz[MATH_BIGINTEGER_VALUE], $Qz[MATH_BIGINTEGER_SIGN]);
        $MU = $this->_add($MU[MATH_BIGINTEGER_VALUE], $MU[MATH_BIGINTEGER_SIGN], $b3, false);
        return $MU[MATH_BIGINTEGER_VALUE];
    }
    function _square($l2 = false)
    {
        return count($l2) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim($this->_baseSquare($l2)) : $this->_trim($this->_karatsubaSquare($l2));
    }
    function _baseSquare($KT)
    {
        if (!empty($KT)) {
            goto pc;
        }
        return array();
        pc:
        $UJ = $this->_array_repeat(0, 2 * count($KT));
        $Cs = 0;
        $r_ = count($KT) - 1;
        jJ:
        if (!($Cs <= $r_)) {
            goto c8;
        }
        $zk = $Cs << 1;
        $eW = $UJ[$zk] + $KT[$Cs] * $KT[$Cs];
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $UJ[$zk] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        $em = $Cs + 1;
        $yE = $zk + 1;
        Ka:
        if (!($em <= $r_)) {
            goto JP;
        }
        $eW = $UJ[$yE] + 2 * $KT[$em] * $KT[$Cs] + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $UJ[$yE] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        Ds:
        ++$em;
        ++$yE;
        goto Ka;
        JP:
        $UJ[$Cs + $r_ + 1] = $M5;
        bJ:
        ++$Cs;
        goto jJ;
        c8:
        return $UJ;
    }
    function _karatsubaSquare($KT)
    {
        $Bf = count($KT) >> 1;
        if (!($Bf < MATH_BIGINTEGER_KARATSUBA_CUTOFF)) {
            goto Li;
        }
        return $this->_baseSquare($KT);
        Li:
        $TO = array_slice($KT, $Bf);
        $sV = array_slice($KT, 0, $Bf);
        $jZ = $this->_karatsubaSquare($TO);
        $b3 = $this->_karatsubaSquare($sV);
        $Qz = $this->_add($TO, false, $sV, false);
        $Qz = $this->_karatsubaSquare($Qz[MATH_BIGINTEGER_VALUE]);
        $eW = $this->_add($jZ, false, $b3, false);
        $Qz = $this->_subtract($Qz, false, $eW[MATH_BIGINTEGER_VALUE], false);
        $jZ = array_merge(array_fill(0, 2 * $Bf, 0), $jZ);
        $Qz[MATH_BIGINTEGER_VALUE] = array_merge(array_fill(0, $Bf, 0), $Qz[MATH_BIGINTEGER_VALUE]);
        $Vp = $this->_add($jZ, false, $Qz[MATH_BIGINTEGER_VALUE], $Qz[MATH_BIGINTEGER_SIGN]);
        $Vp = $this->_add($Vp[MATH_BIGINTEGER_VALUE], $Vp[MATH_BIGINTEGER_SIGN], $b3, false);
        return $Vp[MATH_BIGINTEGER_VALUE];
    }
    function divide($UZ)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $km = new Math_BigInteger();
                $pv = new Math_BigInteger();
                list($km->value, $pv->value) = gmp_div_qr($this->value, $UZ->value);
                if (!(gmp_sign($pv->value) < 0)) {
                    goto c6;
                }
                $pv->value = gmp_add($pv->value, gmp_abs($UZ->value));
                c6:
                return array($this->_normalize($km), $this->_normalize($pv));
            case MATH_BIGINTEGER_MODE_BCMATH:
                $km = new Math_BigInteger();
                $pv = new Math_BigInteger();
                $km->value = bcdiv($this->value, $UZ->value, 0);
                $pv->value = bcmod($this->value, $UZ->value);
                if (!($pv->value[0] == "\x2d")) {
                    goto Fj;
                }
                $pv->value = bcadd($pv->value, $UZ->value[0] == "\x2d" ? substr($UZ->value, 1) : $UZ->value, 0);
                Fj:
                return array($this->_normalize($km), $this->_normalize($pv));
        }
        U9:
        Xg:
        if (!(count($UZ->value) == 1)) {
            goto xm;
        }
        list($is, $S0) = $this->_divide_digit($this->value, $UZ->value[0]);
        $km = new Math_BigInteger();
        $pv = new Math_BigInteger();
        $km->value = $is;
        $pv->value = array($S0);
        $km->is_negative = $this->is_negative != $UZ->is_negative;
        return array($this->_normalize($km), $this->_normalize($pv));
        xm:
        static $Gh;
        if (isset($Gh)) {
            goto cZ;
        }
        $Gh = new Math_BigInteger();
        cZ:
        $l2 = $this->copy();
        $UZ = $UZ->copy();
        $Gs = $l2->is_negative;
        $xb = $UZ->is_negative;
        $l2->is_negative = $UZ->is_negative = false;
        $XS = $l2->compare($UZ);
        if ($XS) {
            goto vC;
        }
        $eW = new Math_BigInteger();
        $eW->value = array(1);
        $eW->is_negative = $Gs != $xb;
        return array($this->_normalize($eW), $this->_normalize(new Math_BigInteger()));
        vC:
        if (!($XS < 0)) {
            goto cj;
        }
        if (!$Gs) {
            goto Ck;
        }
        $l2 = $UZ->subtract($l2);
        Ck:
        return array($this->_normalize(new Math_BigInteger()), $this->_normalize($l2));
        cj:
        $ce = $UZ->value[count($UZ->value) - 1];
        $Jm = 0;
        ie:
        if ($ce & MATH_BIGINTEGER_MSB) {
            goto GZ;
        }
        $ce <<= 1;
        Oo:
        ++$Jm;
        goto ie;
        GZ:
        $l2->_lshift($Jm);
        $UZ->_lshift($Jm);
        $hS =& $UZ->value;
        $tS = count($l2->value) - 1;
        $mI = count($UZ->value) - 1;
        $km = new Math_BigInteger();
        $LN =& $km->value;
        $LN = $this->_array_repeat(0, $tS - $mI + 1);
        static $eW, $sk, $Fr;
        if (isset($eW)) {
            goto at;
        }
        $eW = new Math_BigInteger();
        $sk = new Math_BigInteger();
        $Fr = new Math_BigInteger();
        at:
        $P0 =& $eW->value;
        $p2 =& $Fr->value;
        $P0 = array_merge($this->_array_repeat(0, $tS - $mI), $hS);
        WP:
        if (!($l2->compare($eW) >= 0)) {
            goto cn;
        }
        ++$LN[$tS - $mI];
        $l2 = $l2->subtract($eW);
        $tS = count($l2->value) - 1;
        goto WP;
        cn:
        $Cs = $tS;
        md:
        if (!($Cs >= $mI + 1)) {
            goto g8;
        }
        $du =& $l2->value;
        $WF = array(isset($du[$Cs]) ? $du[$Cs] : 0, isset($du[$Cs - 1]) ? $du[$Cs - 1] : 0, isset($du[$Cs - 2]) ? $du[$Cs - 2] : 0);
        $KQ = array($hS[$mI], $mI > 0 ? $hS[$mI - 1] : 0);
        $AW = $Cs - $mI - 1;
        if ($WF[0] == $KQ[0]) {
            goto HX;
        }
        $LN[$AW] = $this->_safe_divide($WF[0] * MATH_BIGINTEGER_BASE_FULL + $WF[1], $KQ[0]);
        goto QR;
        HX:
        $LN[$AW] = MATH_BIGINTEGER_MAX_DIGIT;
        QR:
        $P0 = array($KQ[1], $KQ[0]);
        $sk->value = array($LN[$AW]);
        $sk = $sk->multiply($eW);
        $p2 = array($WF[2], $WF[1], $WF[0]);
        j9:
        if (!($sk->compare($Fr) > 0)) {
            goto f2;
        }
        --$LN[$AW];
        $sk->value = array($LN[$AW]);
        $sk = $sk->multiply($eW);
        goto j9;
        f2:
        $Re = $this->_array_repeat(0, $AW);
        $P0 = array($LN[$AW]);
        $eW = $eW->multiply($UZ);
        $P0 =& $eW->value;
        $P0 = array_merge($Re, $P0);
        $l2 = $l2->subtract($eW);
        if (!($l2->compare($Gh) < 0)) {
            goto qV;
        }
        $P0 = array_merge($Re, $hS);
        $l2 = $l2->add($eW);
        --$LN[$AW];
        qV:
        $tS = count($du) - 1;
        Xv:
        --$Cs;
        goto md;
        g8:
        $l2->_rshift($Jm);
        $km->is_negative = $Gs != $xb;
        if (!$Gs) {
            goto GE;
        }
        $UZ->_rshift($Jm);
        $l2 = $UZ->subtract($l2);
        GE:
        return array($this->_normalize($km), $this->_normalize($l2));
    }
    function _divide_digit($nR, $yj)
    {
        $M5 = 0;
        $XH = array();
        $Cs = count($nR) - 1;
        sf:
        if (!($Cs >= 0)) {
            goto SN;
        }
        $eW = MATH_BIGINTEGER_BASE_FULL * $M5 + $nR[$Cs];
        $XH[$Cs] = $this->_safe_divide($eW, $yj);
        $M5 = (int) ($eW - $yj * $XH[$Cs]);
        CJ:
        --$Cs;
        goto sf;
        SN:
        return array($XH, $M5);
    }
    function modPow($jM, $g6)
    {
        $g6 = $this->bitmask !== false && $this->bitmask->compare($g6) < 0 ? $this->bitmask : $g6->abs();
        if (!($jM->compare(new Math_BigInteger()) < 0)) {
            goto Fl;
        }
        $jM = $jM->abs();
        $eW = $this->modInverse($g6);
        if (!($eW === false)) {
            goto dl;
        }
        return false;
        dl:
        return $this->_normalize($eW->modPow($jM, $g6));
        Fl:
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_GMP)) {
            goto Xc;
        }
        $eW = new Math_BigInteger();
        $eW->value = gmp_powm($this->value, $jM->value, $g6->value);
        return $this->_normalize($eW);
        Xc:
        if (!($this->compare(new Math_BigInteger()) < 0 || $this->compare($g6) > 0)) {
            goto N_;
        }
        list(, $eW) = $this->divide($g6);
        return $eW->modPow($jM, $g6);
        N_:
        if (!defined("\115\101\x54\110\137\x42\x49\107\x49\116\124\105\107\105\122\137\117\x50\105\x4e\123\x53\114\137\x45\116\101\102\114\105\x44")) {
            goto uU;
        }
        $sO = array("\155\x6f\144\165\154\x75\x73" => $g6->toBytes(true), "\160\x75\142\x6c\151\143\x45\x78\160\x6f\156\145\x6e\164" => $jM->toBytes(true));
        $sO = array("\x6d\157\144\x75\154\165\x73" => pack("\103\141\x2a\x61\x2a", 2, $this->_encodeASN1Length(strlen($sO["\155\157\x64\x75\x6c\x75\163"])), $sO["\x6d\x6f\x64\x75\154\165\x73"]), "\160\165\x62\154\x69\x63\x45\170\x70\157\156\145\x6e\x74" => pack("\103\x61\52\x61\x2a", 2, $this->_encodeASN1Length(strlen($sO["\x70\165\x62\154\x69\x63\105\170\x70\x6f\156\x65\x6e\x74"])), $sO["\160\x75\142\154\x69\x63\105\170\160\x6f\156\145\156\x74"]));
        $bT = pack("\x43\x61\52\x61\52\x61\x2a", 48, $this->_encodeASN1Length(strlen($sO["\155\x6f\144\x75\154\x75\x73"]) + strlen($sO["\160\x75\x62\154\x69\143\105\170\x70\157\x6e\145\156\164"])), $sO["\x6d\157\144\x75\154\x75\x73"], $sO["\x70\x75\x62\154\x69\143\105\170\160\x6f\156\x65\156\x74"]);
        $c_ = pack("\110\52", "\63\x30\60\x64\x30\66\x30\x39\x32\x61\70\66\64\70\70\x36\x66\67\60\144\x30\61\x30\x31\60\61\60\x35\x30\60");
        $bT = chr(0) . $bT;
        $bT = chr(3) . $this->_encodeASN1Length(strlen($bT)) . $bT;
        $Ub = pack("\x43\141\x2a\x61\52", 48, $this->_encodeASN1Length(strlen($c_ . $bT)), $c_ . $bT);
        $bT = "\55\x2d\x2d\x2d\55\102\x45\107\x49\x4e\x20\x50\x55\x42\114\x49\x43\x20\113\x45\x59\x2d\55\55\x2d\x2d\xd\12" . chunk_split(base64_encode($Ub)) . "\x2d\x2d\55\x2d\x2d\x45\x4e\104\x20\120\125\x42\x4c\111\x43\x20\113\x45\131\55\x2d\x2d\x2d\55";
        $np = str_pad($this->toBytes(), strlen($g6->toBytes(true)) - 1, "\x0", STR_PAD_LEFT);
        if (!openssl_public_encrypt($np, $XH, $bT, OPENSSL_NO_PADDING)) {
            goto CZ;
        }
        return new Math_BigInteger($XH, 256);
        CZ:
        uU:
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH)) {
            goto T5;
        }
        $eW = new Math_BigInteger();
        $eW->value = bcpowmod($this->value, $jM->value, $g6->value, 0);
        return $this->_normalize($eW);
        T5:
        if (!empty($jM->value)) {
            goto vE;
        }
        $eW = new Math_BigInteger();
        $eW->value = array(1);
        return $this->_normalize($eW);
        vE:
        if (!($jM->value == array(1))) {
            goto dP;
        }
        list(, $eW) = $this->divide($g6);
        return $this->_normalize($eW);
        dP:
        if (!($jM->value == array(2))) {
            goto QW;
        }
        $eW = new Math_BigInteger();
        $eW->value = $this->_square($this->value);
        list(, $eW) = $eW->divide($g6);
        return $this->_normalize($eW);
        QW:
        return $this->_normalize($this->_slidingWindow($jM, $g6, MATH_BIGINTEGER_BARRETT));
        if (!($g6->value[0] & 1)) {
            goto E1;
        }
        return $this->_normalize($this->_slidingWindow($jM, $g6, MATH_BIGINTEGER_MONTGOMERY));
        E1:
        $Cs = 0;
        aW:
        if (!($Cs < count($g6->value))) {
            goto qy;
        }
        if (!$g6->value[$Cs]) {
            goto q5;
        }
        $eW = decbin($g6->value[$Cs]);
        $em = strlen($eW) - strrpos($eW, "\x31") - 1;
        $em += 26 * $Cs;
        goto qy;
        q5:
        ud:
        ++$Cs;
        goto aW;
        qy:
        $Ee = $g6->copy();
        $Ee->_rshift($em);
        $KC = new Math_BigInteger();
        $KC->value = array(1);
        $KC->_lshift($em);
        $Ux = $Ee->value != array(1) ? $this->_slidingWindow($jM, $Ee, MATH_BIGINTEGER_MONTGOMERY) : new Math_BigInteger();
        $Bh = $this->_slidingWindow($jM, $KC, MATH_BIGINTEGER_POWEROF2);
        $t1 = $KC->modInverse($Ee);
        $MF = $Ee->modInverse($KC);
        $XH = $Ux->multiply($KC);
        $XH = $XH->multiply($t1);
        $eW = $Bh->multiply($Ee);
        $eW = $eW->multiply($MF);
        $XH = $XH->add($eW);
        list(, $XH) = $XH->divide($g6);
        return $this->_normalize($XH);
    }
    function powMod($jM, $g6)
    {
        return $this->modPow($jM, $g6);
    }
    function _slidingWindow($jM, $g6, $nA)
    {
        static $dp = array(7, 25, 81, 241, 673, 1793);
        $Cv = $jM->value;
        $Q6 = count($Cv) - 1;
        $xo = decbin($Cv[$Q6]);
        $Cs = $Q6 - 1;
        th:
        if (!($Cs >= 0)) {
            goto Wg;
        }
        $xo .= str_pad(decbin($Cv[$Cs]), MATH_BIGINTEGER_BASE, "\60", STR_PAD_LEFT);
        aV:
        --$Cs;
        goto th;
        Wg:
        $Q6 = strlen($xo);
        $Cs = 0;
        $gU = 1;
        tU:
        if (!($Cs < count($dp) && $Q6 > $dp[$Cs])) {
            goto we;
        }
        AH:
        ++$gU;
        ++$Cs;
        goto tU;
        we:
        $Ez = $g6->value;
        $CP = array();
        $CP[1] = $this->_prepareReduce($this->value, $Ez, $nA);
        $CP[2] = $this->_squareReduce($CP[1], $Ez, $nA);
        $eW = 1 << $gU - 1;
        $Cs = 1;
        L5:
        if (!($Cs < $eW)) {
            goto bZ;
        }
        $zk = $Cs << 1;
        $CP[$zk + 1] = $this->_multiplyReduce($CP[$zk - 1], $CP[2], $Ez, $nA);
        gx:
        ++$Cs;
        goto L5;
        bZ:
        $XH = array(1);
        $XH = $this->_prepareReduce($XH, $Ez, $nA);
        $Cs = 0;
        Z1:
        if (!($Cs < $Q6)) {
            goto WF;
        }
        if (!$xo[$Cs]) {
            goto Ma;
        }
        $em = $gU - 1;
        wu:
        if (!($em > 0)) {
            goto Ue;
        }
        if (empty($xo[$Cs + $em])) {
            goto IA;
        }
        goto Ue;
        IA:
        BA:
        --$em;
        goto wu;
        Ue:
        $yE = 0;
        Cm:
        if (!($yE <= $em)) {
            goto Ur;
        }
        $XH = $this->_squareReduce($XH, $Ez, $nA);
        YC:
        ++$yE;
        goto Cm;
        Ur:
        $XH = $this->_multiplyReduce($XH, $CP[bindec(substr($xo, $Cs, $em + 1))], $Ez, $nA);
        $Cs += $em + 1;
        goto wh;
        Ma:
        $XH = $this->_squareReduce($XH, $Ez, $nA);
        ++$Cs;
        wh:
        hE:
        goto Z1;
        WF:
        $eW = new Math_BigInteger();
        $eW->value = $this->_reduce($XH, $Ez, $nA);
        return $eW;
    }
    function _reduce($l2, $g6, $nA)
    {
        switch ($nA) {
            case MATH_BIGINTEGER_MONTGOMERY:
                return $this->_montgomery($l2, $g6);
            case MATH_BIGINTEGER_BARRETT:
                return $this->_barrett($l2, $g6);
            case MATH_BIGINTEGER_POWEROF2:
                $sk = new Math_BigInteger();
                $sk->value = $l2;
                $Fr = new Math_BigInteger();
                $Fr->value = $g6;
                return $l2->_mod2($g6);
            case MATH_BIGINTEGER_CLASSIC:
                $sk = new Math_BigInteger();
                $sk->value = $l2;
                $Fr = new Math_BigInteger();
                $Fr->value = $g6;
                list(, $eW) = $sk->divide($Fr);
                return $eW->value;
            case MATH_BIGINTEGER_NONE:
                return $l2;
            default:
        }
        e2:
        nK:
    }
    function _prepareReduce($l2, $g6, $nA)
    {
        if (!($nA == MATH_BIGINTEGER_MONTGOMERY)) {
            goto UT;
        }
        return $this->_prepMontgomery($l2, $g6);
        UT:
        return $this->_reduce($l2, $g6, $nA);
    }
    function _multiplyReduce($l2, $UZ, $g6, $nA)
    {
        if (!($nA == MATH_BIGINTEGER_MONTGOMERY)) {
            goto iY;
        }
        return $this->_montgomeryMultiply($l2, $UZ, $g6);
        iY:
        $eW = $this->_multiply($l2, false, $UZ, false);
        return $this->_reduce($eW[MATH_BIGINTEGER_VALUE], $g6, $nA);
    }
    function _squareReduce($l2, $g6, $nA)
    {
        if (!($nA == MATH_BIGINTEGER_MONTGOMERY)) {
            goto vH;
        }
        return $this->_montgomeryMultiply($l2, $l2, $g6);
        vH:
        return $this->_reduce($this->_square($l2), $g6, $nA);
    }
    function _mod2($g6)
    {
        $eW = new Math_BigInteger();
        $eW->value = array(1);
        return $this->bitwise_and($g6->subtract($eW));
    }
    function _barrett($g6, $Bf)
    {
        static $CA = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        $Sc = count($Bf);
        if (!(count($g6) > 2 * $Sc)) {
            goto x8;
        }
        $sk = new Math_BigInteger();
        $Fr = new Math_BigInteger();
        $sk->value = $g6;
        $Fr->value = $Bf;
        list(, $eW) = $sk->divide($Fr);
        return $eW->value;
        x8:
        if (!($Sc < 5)) {
            goto gq;
        }
        return $this->_regularBarrett($g6, $Bf);
        gq:
        if (($GZ = array_search($Bf, $CA[MATH_BIGINTEGER_VARIABLE])) === false) {
            goto yo;
        }
        extract($CA[MATH_BIGINTEGER_DATA][$GZ]);
        goto yc;
        yo:
        $GZ = count($CA[MATH_BIGINTEGER_VARIABLE]);
        $CA[MATH_BIGINTEGER_VARIABLE][] = $Bf;
        $sk = new Math_BigInteger();
        $X9 =& $sk->value;
        $X9 = $this->_array_repeat(0, $Sc + ($Sc >> 1));
        $X9[] = 1;
        $Fr = new Math_BigInteger();
        $Fr->value = $Bf;
        list($Ax, $SR) = $sk->divide($Fr);
        $Ax = $Ax->value;
        $SR = $SR->value;
        $CA[MATH_BIGINTEGER_DATA][] = array("\x75" => $Ax, "\x6d\61" => $SR);
        yc:
        $nK = $Sc + ($Sc >> 1);
        $Iq = array_slice($g6, 0, $nK);
        $ep = array_slice($g6, $nK);
        $Iq = $this->_trim($Iq);
        $eW = $this->_multiply($ep, false, $SR, false);
        $g6 = $this->_add($Iq, false, $eW[MATH_BIGINTEGER_VALUE], false);
        if (!($Sc & 1)) {
            goto iQ;
        }
        return $this->_regularBarrett($g6[MATH_BIGINTEGER_VALUE], $Bf);
        iQ:
        $eW = array_slice($g6[MATH_BIGINTEGER_VALUE], $Sc - 1);
        $eW = $this->_multiply($eW, false, $Ax, false);
        $eW = array_slice($eW[MATH_BIGINTEGER_VALUE], ($Sc >> 1) + 1);
        $eW = $this->_multiply($eW, false, $Bf, false);
        $XH = $this->_subtract($g6[MATH_BIGINTEGER_VALUE], false, $eW[MATH_BIGINTEGER_VALUE], false);
        K5:
        if (!($this->_compare($XH[MATH_BIGINTEGER_VALUE], $XH[MATH_BIGINTEGER_SIGN], $Bf, false) >= 0)) {
            goto z_;
        }
        $XH = $this->_subtract($XH[MATH_BIGINTEGER_VALUE], $XH[MATH_BIGINTEGER_SIGN], $Bf, false);
        goto K5;
        z_:
        return $XH[MATH_BIGINTEGER_VALUE];
    }
    function _regularBarrett($l2, $g6)
    {
        static $CA = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        $UF = count($g6);
        if (!(count($l2) > 2 * $UF)) {
            goto nM;
        }
        $sk = new Math_BigInteger();
        $Fr = new Math_BigInteger();
        $sk->value = $l2;
        $Fr->value = $g6;
        list(, $eW) = $sk->divide($Fr);
        return $eW->value;
        nM:
        if (!(($GZ = array_search($g6, $CA[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto TU;
        }
        $GZ = count($CA[MATH_BIGINTEGER_VARIABLE]);
        $CA[MATH_BIGINTEGER_VARIABLE][] = $g6;
        $sk = new Math_BigInteger();
        $X9 =& $sk->value;
        $X9 = $this->_array_repeat(0, 2 * $UF);
        $X9[] = 1;
        $Fr = new Math_BigInteger();
        $Fr->value = $g6;
        list($eW, ) = $sk->divide($Fr);
        $CA[MATH_BIGINTEGER_DATA][] = $eW->value;
        TU:
        $eW = array_slice($l2, $UF - 1);
        $eW = $this->_multiply($eW, false, $CA[MATH_BIGINTEGER_DATA][$GZ], false);
        $eW = array_slice($eW[MATH_BIGINTEGER_VALUE], $UF + 1);
        $XH = array_slice($l2, 0, $UF + 1);
        $eW = $this->_multiplyLower($eW, false, $g6, false, $UF + 1);
        if (!($this->_compare($XH, false, $eW[MATH_BIGINTEGER_VALUE], $eW[MATH_BIGINTEGER_SIGN]) < 0)) {
            goto EY;
        }
        $Hc = $this->_array_repeat(0, $UF + 1);
        $Hc[count($Hc)] = 1;
        $XH = $this->_add($XH, false, $Hc, false);
        $XH = $XH[MATH_BIGINTEGER_VALUE];
        EY:
        $XH = $this->_subtract($XH, false, $eW[MATH_BIGINTEGER_VALUE], $eW[MATH_BIGINTEGER_SIGN]);
        Rt:
        if (!($this->_compare($XH[MATH_BIGINTEGER_VALUE], $XH[MATH_BIGINTEGER_SIGN], $g6, false) > 0)) {
            goto Ee;
        }
        $XH = $this->_subtract($XH[MATH_BIGINTEGER_VALUE], $XH[MATH_BIGINTEGER_SIGN], $g6, false);
        goto Rt;
        Ee:
        return $XH[MATH_BIGINTEGER_VALUE];
    }
    function _multiplyLower($du, $LB, $hS, $x3, $j_)
    {
        $R1 = count($du);
        $kR = count($hS);
        if (!(!$R1 || !$kR)) {
            goto F5;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        F5:
        if (!($R1 < $kR)) {
            goto Lb;
        }
        $eW = $du;
        $du = $hS;
        $hS = $eW;
        $R1 = count($du);
        $kR = count($hS);
        Lb:
        $xf = $this->_array_repeat(0, $R1 + $kR);
        $M5 = 0;
        $em = 0;
        nk:
        if (!($em < $R1)) {
            goto aD;
        }
        $eW = $du[$em] * $hS[0] + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $xf[$em] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        rZ:
        ++$em;
        goto nk;
        aD:
        if (!($em < $j_)) {
            goto X3;
        }
        $xf[$em] = $M5;
        X3:
        $Cs = 1;
        lQ:
        if (!($Cs < $kR)) {
            goto KF;
        }
        $M5 = 0;
        $em = 0;
        $yE = $Cs;
        Yu:
        if (!($em < $R1 && $yE < $j_)) {
            goto DQ;
        }
        $eW = $xf[$yE] + $du[$em] * $hS[$Cs] + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $xf[$yE] = (int) ($eW - MATH_BIGINTEGER_BASE_FULL * $M5);
        oy:
        ++$em;
        ++$yE;
        goto Yu;
        DQ:
        if (!($yE < $j_)) {
            goto oV;
        }
        $xf[$yE] = $M5;
        oV:
        Bh:
        ++$Cs;
        goto lQ;
        KF:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($xf), MATH_BIGINTEGER_SIGN => $LB != $x3);
    }
    function _montgomery($l2, $g6)
    {
        static $CA = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        if (!(($GZ = array_search($g6, $CA[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto af;
        }
        $GZ = count($CA[MATH_BIGINTEGER_VARIABLE]);
        $CA[MATH_BIGINTEGER_VARIABLE][] = $l2;
        $CA[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864($g6);
        af:
        $yE = count($g6);
        $XH = array(MATH_BIGINTEGER_VALUE => $l2);
        $Cs = 0;
        Yv:
        if (!($Cs < $yE)) {
            goto zj;
        }
        $eW = $XH[MATH_BIGINTEGER_VALUE][$Cs] * $CA[MATH_BIGINTEGER_DATA][$GZ];
        $eW = $eW - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31);
        $eW = $this->_regularMultiply(array($eW), $g6);
        $eW = array_merge($this->_array_repeat(0, $Cs), $eW);
        $XH = $this->_add($XH[MATH_BIGINTEGER_VALUE], false, $eW, false);
        Q2:
        ++$Cs;
        goto Yv;
        zj:
        $XH[MATH_BIGINTEGER_VALUE] = array_slice($XH[MATH_BIGINTEGER_VALUE], $yE);
        if (!($this->_compare($XH, false, $g6, false) >= 0)) {
            goto N1;
        }
        $XH = $this->_subtract($XH[MATH_BIGINTEGER_VALUE], false, $g6, false);
        N1:
        return $XH[MATH_BIGINTEGER_VALUE];
    }
    function _montgomeryMultiply($l2, $UZ, $Bf)
    {
        $eW = $this->_multiply($l2, false, $UZ, false);
        return $this->_montgomery($eW[MATH_BIGINTEGER_VALUE], $Bf);
        static $CA = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        if (!(($GZ = array_search($Bf, $CA[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto MS;
        }
        $GZ = count($CA[MATH_BIGINTEGER_VARIABLE]);
        $CA[MATH_BIGINTEGER_VARIABLE][] = $Bf;
        $CA[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864($Bf);
        MS:
        $g6 = max(count($l2), count($UZ), count($Bf));
        $l2 = array_pad($l2, $g6, 0);
        $UZ = array_pad($UZ, $g6, 0);
        $Bf = array_pad($Bf, $g6, 0);
        $v3 = array(MATH_BIGINTEGER_VALUE => $this->_array_repeat(0, $g6 + 1));
        $Cs = 0;
        G0:
        if (!($Cs < $g6)) {
            goto e7;
        }
        $eW = $v3[MATH_BIGINTEGER_VALUE][0] + $l2[$Cs] * $UZ[0];
        $eW = $eW - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31);
        $eW = $eW * $CA[MATH_BIGINTEGER_DATA][$GZ];
        $eW = $eW - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31);
        $eW = $this->_add($this->_regularMultiply(array($l2[$Cs]), $UZ), false, $this->_regularMultiply(array($eW), $Bf), false);
        $v3 = $this->_add($v3[MATH_BIGINTEGER_VALUE], false, $eW[MATH_BIGINTEGER_VALUE], false);
        $v3[MATH_BIGINTEGER_VALUE] = array_slice($v3[MATH_BIGINTEGER_VALUE], 1);
        js:
        ++$Cs;
        goto G0;
        e7:
        if (!($this->_compare($v3[MATH_BIGINTEGER_VALUE], false, $Bf, false) >= 0)) {
            goto kd;
        }
        $v3 = $this->_subtract($v3[MATH_BIGINTEGER_VALUE], false, $Bf, false);
        kd:
        return $v3[MATH_BIGINTEGER_VALUE];
    }
    function _prepMontgomery($l2, $g6)
    {
        $sk = new Math_BigInteger();
        $sk->value = array_merge($this->_array_repeat(0, count($g6)), $l2);
        $Fr = new Math_BigInteger();
        $Fr->value = $g6;
        list(, $eW) = $sk->divide($Fr);
        return $eW->value;
    }
    function _modInverse67108864($l2)
    {
        $l2 = -$l2[0];
        $XH = $l2 & 0x3;
        $XH = $XH * (2 - $l2 * $XH) & 0xf;
        $XH = $XH * (2 - ($l2 & 0xff) * $XH) & 0xff;
        $XH = $XH * (2 - ($l2 & 0xffff) * $XH & 0xffff) & 0xffff;
        $XH = fmod($XH * (2 - fmod($l2 * $XH, MATH_BIGINTEGER_BASE_FULL)), MATH_BIGINTEGER_BASE_FULL);
        return $XH & MATH_BIGINTEGER_MAX_DIGIT;
    }
    function modInverse($g6)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_invert($this->value, $g6->value);
                return $eW->value === false ? false : $this->_normalize($eW);
        }
        Rx:
        hr:
        static $Gh, $gi;
        if (isset($Gh)) {
            goto YB;
        }
        $Gh = new Math_BigInteger();
        $gi = new Math_BigInteger(1);
        YB:
        $g6 = $g6->abs();
        if (!($this->compare($Gh) < 0)) {
            goto wT;
        }
        $eW = $this->abs();
        $eW = $eW->modInverse($g6);
        return $this->_normalize($g6->subtract($eW));
        wT:
        extract($this->extendedGCD($g6));
        if ($t2->equals($gi)) {
            goto fS;
        }
        return false;
        fS:
        $l2 = $l2->compare($Gh) < 0 ? $l2->add($g6) : $l2;
        return $this->compare($Gh) < 0 ? $this->_normalize($g6->subtract($l2)) : $this->_normalize($l2);
    }
    function extendedGCD($g6)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                extract(gmp_gcdext($this->value, $g6->value));
                return array("\x67\143\x64" => $this->_normalize(new Math_BigInteger($H0)), "\170" => $this->_normalize(new Math_BigInteger($uk)), "\171" => $this->_normalize(new Math_BigInteger($f3)));
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Ax = $this->value;
                $Vu = $g6->value;
                $v3 = "\x31";
                $KR = "\x30";
                $BA = "\60";
                $FW = "\61";
                UY:
                if (!(bccomp($Vu, "\60", 0) != 0)) {
                    goto LY;
                }
                $is = bcdiv($Ax, $Vu, 0);
                $eW = $Ax;
                $Ax = $Vu;
                $Vu = bcsub($eW, bcmul($Vu, $is, 0), 0);
                $eW = $v3;
                $v3 = $BA;
                $BA = bcsub($eW, bcmul($v3, $is, 0), 0);
                $eW = $KR;
                $KR = $FW;
                $FW = bcsub($eW, bcmul($KR, $is, 0), 0);
                goto UY;
                LY:
                return array("\x67\143\144" => $this->_normalize(new Math_BigInteger($Ax)), "\x78" => $this->_normalize(new Math_BigInteger($v3)), "\171" => $this->_normalize(new Math_BigInteger($KR)));
        }
        C_:
        UV:
        $UZ = $g6->copy();
        $l2 = $this->copy();
        $H0 = new Math_BigInteger();
        $H0->value = array(1);
        Hf:
        if ($l2->value[0] & 1 || $UZ->value[0] & 1) {
            goto so;
        }
        $l2->_rshift(1);
        $UZ->_rshift(1);
        $H0->_lshift(1);
        goto Hf;
        so:
        $Ax = $l2->copy();
        $Vu = $UZ->copy();
        $v3 = new Math_BigInteger();
        $KR = new Math_BigInteger();
        $BA = new Math_BigInteger();
        $FW = new Math_BigInteger();
        $v3->value = $FW->value = $H0->value = array(1);
        $KR->value = $BA->value = array();
        XK:
        if (empty($Ax->value)) {
            goto R4;
        }
        pw:
        if ($Ax->value[0] & 1) {
            goto t2;
        }
        $Ax->_rshift(1);
        if (!(!empty($v3->value) && $v3->value[0] & 1 || !empty($KR->value) && $KR->value[0] & 1)) {
            goto DM;
        }
        $v3 = $v3->add($UZ);
        $KR = $KR->subtract($l2);
        DM:
        $v3->_rshift(1);
        $KR->_rshift(1);
        goto pw;
        t2:
        rn:
        if ($Vu->value[0] & 1) {
            goto Vl;
        }
        $Vu->_rshift(1);
        if (!(!empty($FW->value) && $FW->value[0] & 1 || !empty($BA->value) && $BA->value[0] & 1)) {
            goto ih;
        }
        $BA = $BA->add($UZ);
        $FW = $FW->subtract($l2);
        ih:
        $BA->_rshift(1);
        $FW->_rshift(1);
        goto rn;
        Vl:
        if ($Ax->compare($Vu) >= 0) {
            goto QXR;
        }
        $Vu = $Vu->subtract($Ax);
        $BA = $BA->subtract($v3);
        $FW = $FW->subtract($KR);
        goto ujX;
        QXR:
        $Ax = $Ax->subtract($Vu);
        $v3 = $v3->subtract($BA);
        $KR = $KR->subtract($FW);
        ujX:
        goto XK;
        R4:
        return array("\x67\x63\144" => $this->_normalize($H0->multiply($Vu)), "\170" => $this->_normalize($BA), "\171" => $this->_normalize($FW));
    }
    function gcd($g6)
    {
        extract($this->extendedGCD($g6));
        return $t2;
    }
    function abs()
    {
        $eW = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW->value = gmp_abs($this->value);
                goto cQN;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW->value = bccomp($this->value, "\x30", 0) < 0 ? substr($this->value, 1) : $this->value;
                goto cQN;
            default:
                $eW->value = $this->value;
        }
        vTP:
        cQN:
        return $eW;
    }
    function compare($UZ)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_cmp($this->value, $UZ->value);
            case MATH_BIGINTEGER_MODE_BCMATH:
                return bccomp($this->value, $UZ->value, 0);
        }
        ooU:
        u_7:
        return $this->_compare($this->value, $this->is_negative, $UZ->value, $UZ->is_negative);
    }
    function _compare($du, $LB, $hS, $x3)
    {
        if (!($LB != $x3)) {
            goto UZG;
        }
        return !$LB && $x3 ? 1 : -1;
        UZG:
        $XH = $LB ? -1 : 1;
        if (!(count($du) != count($hS))) {
            goto asn;
        }
        return count($du) > count($hS) ? $XH : -$XH;
        asn:
        $rz = max(count($du), count($hS));
        $du = array_pad($du, $rz, 0);
        $hS = array_pad($hS, $rz, 0);
        $Cs = count($du) - 1;
        TIS:
        if (!($Cs >= 0)) {
            goto KnM;
        }
        if (!($du[$Cs] != $hS[$Cs])) {
            goto a7i;
        }
        return $du[$Cs] > $hS[$Cs] ? $XH : -$XH;
        a7i:
        P3g:
        --$Cs;
        goto TIS;
        KnM:
        return 0;
    }
    function equals($l2)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_cmp($this->value, $l2->value) == 0;
            default:
                return $this->value === $l2->value && $this->is_negative == $l2->is_negative;
        }
        h3C:
        BU6:
    }
    function setPrecision($Ve)
    {
        $this->precision = $Ve;
        if (MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_BCMATH) {
            goto b7O;
        }
        $this->bitmask = new Math_BigInteger(bcpow("\62", $Ve, 0));
        goto dmP;
        b7O:
        $this->bitmask = new Math_BigInteger(chr((1 << ($Ve & 0x7)) - 1) . str_repeat(chr(0xff), $Ve >> 3), 256);
        dmP:
        $eW = $this->_normalize($this);
        $this->value = $eW->value;
    }
    function bitwise_and($l2)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_and($this->value, $l2->value);
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $vG = $this->toBytes();
                $na = $l2->toBytes();
                $ul = max(strlen($vG), strlen($na));
                $vG = str_pad($vG, $ul, chr(0), STR_PAD_LEFT);
                $na = str_pad($na, $ul, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($vG & $na, 256));
        }
        r39:
        Rt1:
        $XH = $this->copy();
        $ul = min(count($l2->value), count($this->value));
        $XH->value = array_slice($XH->value, 0, $ul);
        $Cs = 0;
        NKG:
        if (!($Cs < $ul)) {
            goto FNQ;
        }
        $XH->value[$Cs] &= $l2->value[$Cs];
        bmb:
        ++$Cs;
        goto NKG;
        FNQ:
        return $this->_normalize($XH);
    }
    function bitwise_or($l2)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_or($this->value, $l2->value);
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $vG = $this->toBytes();
                $na = $l2->toBytes();
                $ul = max(strlen($vG), strlen($na));
                $vG = str_pad($vG, $ul, chr(0), STR_PAD_LEFT);
                $na = str_pad($na, $ul, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($vG | $na, 256));
        }
        UrT:
        CoR:
        $ul = max(count($this->value), count($l2->value));
        $XH = $this->copy();
        $XH->value = array_pad($XH->value, $ul, 0);
        $l2->value = array_pad($l2->value, $ul, 0);
        $Cs = 0;
        bx2:
        if (!($Cs < $ul)) {
            goto Hvn;
        }
        $XH->value[$Cs] |= $l2->value[$Cs];
        MTP:
        ++$Cs;
        goto bx2;
        Hvn:
        return $this->_normalize($XH);
    }
    function bitwise_xor($l2)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $eW = new Math_BigInteger();
                $eW->value = gmp_xor(gmp_abs($this->value), gmp_abs($l2->value));
                return $this->_normalize($eW);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $vG = $this->toBytes();
                $na = $l2->toBytes();
                $ul = max(strlen($vG), strlen($na));
                $vG = str_pad($vG, $ul, chr(0), STR_PAD_LEFT);
                $na = str_pad($na, $ul, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($vG ^ $na, 256));
        }
        M5J:
        ZrN:
        $ul = max(count($this->value), count($l2->value));
        $XH = $this->copy();
        $XH->is_negative = false;
        $XH->value = array_pad($XH->value, $ul, 0);
        $l2->value = array_pad($l2->value, $ul, 0);
        $Cs = 0;
        Z0N:
        if (!($Cs < $ul)) {
            goto g_f;
        }
        $XH->value[$Cs] ^= $l2->value[$Cs];
        Ptz:
        ++$Cs;
        goto Z0N;
        g_f:
        return $this->_normalize($XH);
    }
    function bitwise_not()
    {
        $eW = $this->toBytes();
        if (!($eW == '')) {
            goto Ioo;
        }
        return $this->_normalize(new Math_BigInteger());
        Ioo:
        $qA = decbin(ord($eW[0]));
        $eW = ~$eW;
        $ce = decbin(ord($eW[0]));
        if (!(strlen($ce) == 8)) {
            goto P5x;
        }
        $ce = substr($ce, strpos($ce, "\x30"));
        P5x:
        $eW[0] = chr(bindec($ce));
        $H2 = strlen($qA) + 8 * strlen($eW) - 8;
        $qo = $this->precision - $H2;
        if (!($qo <= 0)) {
            goto GtN;
        }
        return $this->_normalize(new Math_BigInteger($eW, 256));
        GtN:
        $WN = chr((1 << ($qo & 0x7)) - 1) . str_repeat(chr(0xff), $qo >> 3);
        $this->_base256_lshift($WN, $H2);
        $eW = str_pad($eW, strlen($WN), chr(0), STR_PAD_LEFT);
        return $this->_normalize(new Math_BigInteger($WN | $eW, 256));
    }
    function bitwise_rightShift($Jm)
    {
        $eW = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                static $r1;
                if (isset($r1)) {
                    goto fKY;
                }
                $r1 = gmp_init("\62");
                fKY:
                $eW->value = gmp_div_q($this->value, gmp_pow($r1, $Jm));
                goto w0R;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW->value = bcdiv($this->value, bcpow("\x32", $Jm, 0), 0);
                goto w0R;
            default:
                $eW->value = $this->value;
                $eW->_rshift($Jm);
        }
        na9:
        w0R:
        return $this->_normalize($eW);
    }
    function bitwise_leftShift($Jm)
    {
        $eW = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                static $r1;
                if (isset($r1)) {
                    goto KE_;
                }
                $r1 = gmp_init("\x32");
                KE_:
                $eW->value = gmp_mul($this->value, gmp_pow($r1, $Jm));
                goto Qz8;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $eW->value = bcmul($this->value, bcpow("\x32", $Jm, 0), 0);
                goto Qz8;
            default:
                $eW->value = $this->value;
                $eW->_lshift($Jm);
        }
        JSf:
        Qz8:
        return $this->_normalize($eW);
    }
    function bitwise_leftRotate($Jm)
    {
        $Ve = $this->toBytes();
        if ($this->precision > 0) {
            goto o39;
        }
        $eW = ord($Ve[0]);
        $Cs = 0;
        aZ3:
        if (!($eW >> $Cs)) {
            goto FRG;
        }
        EId:
        ++$Cs;
        goto aZ3;
        FRG:
        $v6 = 8 * strlen($Ve) - 8 + $Cs;
        $ZA = chr((1 << ($v6 & 0x7)) - 1) . str_repeat(chr(0xff), $v6 >> 3);
        goto OW1;
        o39:
        $v6 = $this->precision;
        if (MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH) {
            goto ffg;
        }
        $ZA = $this->bitmask->toBytes();
        goto C_w;
        ffg:
        $ZA = $this->bitmask->subtract(new Math_BigInteger(1));
        $ZA = $ZA->toBytes();
        C_w:
        OW1:
        if (!($Jm < 0)) {
            goto nAD;
        }
        $Jm += $v6;
        nAD:
        $Jm %= $v6;
        if ($Jm) {
            goto fxn;
        }
        return $this->copy();
        fxn:
        $vG = $this->bitwise_leftShift($Jm);
        $vG = $vG->bitwise_and(new Math_BigInteger($ZA, 256));
        $na = $this->bitwise_rightShift($v6 - $Jm);
        $XH = MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_BCMATH ? $vG->bitwise_or($na) : $vG->add($na);
        return $this->_normalize($XH);
    }
    function bitwise_rightRotate($Jm)
    {
        return $this->bitwise_leftRotate(-$Jm);
    }
    function setRandomGenerator($JQ)
    {
    }
    function _random_number_helper($rz)
    {
        if (function_exists("\x63\x72\x79\x70\164\x5f\162\141\156\144\x6f\155\137\x73\x74\x72\151\x6e\x67")) {
            goto UBl;
        }
        $Q9 = '';
        if (!($rz & 1)) {
            goto gVJ;
        }
        $Q9 .= chr(mt_rand(0, 255));
        gVJ:
        $nM = $rz >> 1;
        $Cs = 0;
        LmG:
        if (!($Cs < $nM)) {
            goto dG6;
        }
        $Q9 .= pack("\156", mt_rand(0, 0xffff));
        J0J:
        ++$Cs;
        goto LmG;
        dG6:
        goto EVW;
        UBl:
        $Q9 = crypt_random_string($rz);
        EVW:
        return new Math_BigInteger($Q9, 256);
    }
    function random($nG, $fi = false)
    {
        if (!($nG === false)) {
            goto Ghc;
        }
        return false;
        Ghc:
        if ($fi === false) {
            goto FLs;
        }
        $BB = $nG;
        $lw = $fi;
        goto muB;
        FLs:
        $lw = $nG;
        $BB = $this;
        muB:
        $ad = $lw->compare($BB);
        if (!$ad) {
            goto hHJ;
        }
        if ($ad < 0) {
            goto cYr;
        }
        goto BC_;
        hHJ:
        return $this->_normalize($BB);
        goto BC_;
        cYr:
        $eW = $lw;
        $lw = $BB;
        $BB = $eW;
        BC_:
        static $gi;
        if (isset($gi)) {
            goto AcQ;
        }
        $gi = new Math_BigInteger(1);
        AcQ:
        $lw = $lw->subtract($BB->subtract($gi));
        $rz = strlen(ltrim($lw->toBytes(), chr(0)));
        $QQ = new Math_BigInteger(chr(1) . str_repeat("\0", $rz), 256);
        $Q9 = $this->_random_number_helper($rz);
        list($yG) = $QQ->divide($lw);
        $yG = $yG->multiply($lw);
        mpX:
        if (!($Q9->compare($yG) >= 0)) {
            goto h1T;
        }
        $Q9 = $Q9->subtract($yG);
        $QQ = $QQ->subtract($yG);
        $Q9 = $Q9->bitwise_leftShift(8);
        $Q9 = $Q9->add($this->_random_number_helper(1));
        $QQ = $QQ->bitwise_leftShift(8);
        list($yG) = $QQ->divide($lw);
        $yG = $yG->multiply($lw);
        goto mpX;
        h1T:
        list(, $Q9) = $Q9->divide($lw);
        return $this->_normalize($Q9->add($BB));
    }
    function randomPrime($nG, $fi = false, $Y6 = false)
    {
        if (!($nG === false)) {
            goto LwG;
        }
        return false;
        LwG:
        if ($fi === false) {
            goto Muk;
        }
        $BB = $nG;
        $lw = $fi;
        goto Kx2;
        Muk:
        $lw = $nG;
        $BB = $this;
        Kx2:
        $ad = $lw->compare($BB);
        if (!$ad) {
            goto dXx;
        }
        if ($ad < 0) {
            goto YYW;
        }
        goto Nmy;
        dXx:
        return $BB->isPrime() ? $BB : false;
        goto Nmy;
        YYW:
        $eW = $lw;
        $lw = $BB;
        $BB = $eW;
        Nmy:
        static $gi, $r1;
        if (isset($gi)) {
            goto KKo;
        }
        $gi = new Math_BigInteger(1);
        $r1 = new Math_BigInteger(2);
        KKo:
        $ZF = time();
        $l2 = $this->random($BB, $lw);
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_GMP && extension_loaded("\x67\155\x70") && version_compare(PHP_VERSION, "\x35\x2e\62\56\60", "\x3e\75"))) {
            goto vCT;
        }
        $k_ = new Math_BigInteger();
        $k_->value = gmp_nextprime($l2->value);
        if (!($k_->compare($lw) <= 0)) {
            goto NOs;
        }
        return $k_;
        NOs:
        if ($BB->equals($l2)) {
            goto xDt;
        }
        $l2 = $l2->subtract($gi);
        xDt:
        return $l2->randomPrime($BB, $l2);
        vCT:
        if (!$l2->equals($r1)) {
            goto zZr;
        }
        return $l2;
        zZr:
        $l2->_make_odd();
        if (!($l2->compare($lw) > 0)) {
            goto KCG;
        }
        if (!$BB->equals($lw)) {
            goto FA8;
        }
        return false;
        FA8:
        $l2 = $BB->copy();
        $l2->_make_odd();
        KCG:
        $vP = $l2->copy();
        F0w:
        if (!true) {
            goto No0;
        }
        if (!($Y6 !== false && time() - $ZF > $Y6)) {
            goto jEP;
        }
        return false;
        jEP:
        if (!$l2->isPrime()) {
            goto QQj;
        }
        return $l2;
        QQj:
        $l2 = $l2->add($r1);
        if (!($l2->compare($lw) > 0)) {
            goto kI3;
        }
        $l2 = $BB->copy();
        if (!$l2->equals($r1)) {
            goto SW9;
        }
        return $l2;
        SW9:
        $l2->_make_odd();
        kI3:
        if (!$l2->equals($vP)) {
            goto xjG;
        }
        return false;
        xjG:
        goto F0w;
        No0:
    }
    function _make_odd()
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                gmp_setbit($this->value, 0);
                goto eeg;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value[strlen($this->value) - 1] % 2 == 0)) {
                    goto TQs;
                }
                $this->value = bcadd($this->value, "\61");
                TQs:
                goto eeg;
            default:
                $this->value[0] |= 1;
        }
        Sfc:
        eeg:
    }
    function isPrime($f3 = false)
    {
        $ul = strlen($this->toBytes());
        if ($f3) {
            goto hGC;
        }
        if ($ul >= 163) {
            goto oLJ;
        }
        if ($ul >= 106) {
            goto XNz;
        }
        if ($ul >= 81) {
            goto oPj;
        }
        if ($ul >= 68) {
            goto EyZ;
        }
        if ($ul >= 56) {
            goto Olb;
        }
        if ($ul >= 50) {
            goto zfD;
        }
        if ($ul >= 43) {
            goto uNu;
        }
        if ($ul >= 37) {
            goto yFP;
        }
        if ($ul >= 31) {
            goto r6h;
        }
        if ($ul >= 25) {
            goto LQy;
        }
        if ($ul >= 18) {
            goto gRo;
        }
        $f3 = 27;
        goto m_A;
        gRo:
        $f3 = 18;
        m_A:
        goto MRk;
        LQy:
        $f3 = 15;
        MRk:
        goto fpk;
        r6h:
        $f3 = 12;
        fpk:
        goto SH3;
        yFP:
        $f3 = 9;
        SH3:
        goto fUG;
        uNu:
        $f3 = 8;
        fUG:
        goto yXB;
        zfD:
        $f3 = 7;
        yXB:
        goto foq;
        Olb:
        $f3 = 6;
        foq:
        goto ox4;
        EyZ:
        $f3 = 5;
        ox4:
        goto bPC;
        oPj:
        $f3 = 4;
        bPC:
        goto FGC;
        XNz:
        $f3 = 3;
        FGC:
        goto AqI;
        oLJ:
        $f3 = 2;
        AqI:
        hGC:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_prob_prime($this->value, $f3) != 0;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\x32")) {
                    goto UY4;
                }
                return true;
                UY4:
                if (!($this->value[strlen($this->value) - 1] % 2 == 0)) {
                    goto Pwq;
                }
                return false;
                Pwq:
                goto Q8P;
            default:
                if (!($this->value == array(2))) {
                    goto tse;
                }
                return true;
                tse:
                if (!(~$this->value[0] & 1)) {
                    goto m5A;
                }
                return false;
                m5A:
        }
        i5v:
        Q8P:
        static $Dx, $Gh, $gi, $r1;
        if (isset($Dx)) {
            goto YW0;
        }
        $Dx = array(3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599, 601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673, 677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761, 769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857, 859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947, 953, 967, 971, 977, 983, 991, 997);
        if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL)) {
            goto JrT;
        }
        $Cs = 0;
        XcT:
        if (!($Cs < count($Dx))) {
            goto dv8;
        }
        $Dx[$Cs] = new Math_BigInteger($Dx[$Cs]);
        XfZ:
        ++$Cs;
        goto XcT;
        dv8:
        JrT:
        $Gh = new Math_BigInteger();
        $gi = new Math_BigInteger(1);
        $r1 = new Math_BigInteger(2);
        YW0:
        if (!$this->equals($gi)) {
            goto B7C;
        }
        return false;
        B7C:
        if (MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL) {
            goto HjW;
        }
        $KT = $this->value;
        foreach ($Dx as $do) {
            list(, $S0) = $this->_divide_digit($KT, $do);
            if ($S0) {
                goto oXt;
            }
            return count($KT) == 1 && $KT[0] == $do;
            oXt:
            M5L:
        }
        Xw0:
        goto mpx;
        HjW:
        foreach ($Dx as $do) {
            list(, $S0) = $this->divide($do);
            if (!$S0->equals($Gh)) {
                goto vso;
            }
            return $this->equals($do);
            vso:
            hoW:
        }
        vf0:
        mpx:
        $g6 = $this->copy();
        $k4 = $g6->subtract($gi);
        $iE = $g6->subtract($r1);
        $S0 = $k4->copy();
        $FJ = $S0->value;
        if (MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH) {
            goto plc;
        }
        $Cs = 0;
        $ni = count($FJ);
        f3C:
        if (!($Cs < $ni)) {
            goto cOK;
        }
        $eW = ~$FJ[$Cs] & 0xffffff;
        $em = 1;
        zxs:
        if (!($eW >> $em & 1)) {
            goto XYh;
        }
        Dmz:
        ++$em;
        goto zxs;
        XYh:
        if (!($em != 25)) {
            goto a0Z;
        }
        goto cOK;
        a0Z:
        ZLn:
        ++$Cs;
        goto f3C;
        cOK:
        $uk = 26 * $Cs + $em;
        $S0->_rshift($uk);
        goto zed;
        plc:
        $uk = 0;
        AYO:
        if (!($S0->value[strlen($S0->value) - 1] % 2 == 0)) {
            goto mym;
        }
        $S0->value = bcdiv($S0->value, "\62", 0);
        ++$uk;
        goto AYO;
        mym:
        zed:
        $Cs = 0;
        tx3:
        if (!($Cs < $f3)) {
            goto fsr;
        }
        $v3 = $this->random($r1, $iE);
        $UZ = $v3->modPow($S0, $g6);
        if (!(!$UZ->equals($gi) && !$UZ->equals($k4))) {
            goto Yax;
        }
        $em = 1;
        HHX:
        if (!($em < $uk && !$UZ->equals($k4))) {
            goto otG;
        }
        $UZ = $UZ->modPow($r1, $g6);
        if (!$UZ->equals($gi)) {
            goto T0U;
        }
        return false;
        T0U:
        GZB:
        ++$em;
        goto HHX;
        otG:
        if ($UZ->equals($k4)) {
            goto ark;
        }
        return false;
        ark:
        Yax:
        Cxg:
        ++$Cs;
        goto tx3;
        fsr:
        return true;
    }
    function _lshift($Jm)
    {
        if (!($Jm == 0)) {
            goto ok9;
        }
        return;
        ok9:
        $ZO = (int) ($Jm / MATH_BIGINTEGER_BASE);
        $Jm %= MATH_BIGINTEGER_BASE;
        $Jm = 1 << $Jm;
        $M5 = 0;
        $Cs = 0;
        qt2:
        if (!($Cs < count($this->value))) {
            goto X_v;
        }
        $eW = $this->value[$Cs] * $Jm + $M5;
        $M5 = MATH_BIGINTEGER_BASE === 26 ? intval($eW / 0x4000000) : $eW >> 31;
        $this->value[$Cs] = (int) ($eW - $M5 * MATH_BIGINTEGER_BASE_FULL);
        Ja5:
        ++$Cs;
        goto qt2;
        X_v:
        if (!$M5) {
            goto Yy1;
        }
        $this->value[count($this->value)] = $M5;
        Yy1:
        VZv:
        if (!$ZO--) {
            goto vJ_;
        }
        array_unshift($this->value, 0);
        goto VZv;
        vJ_:
    }
    function _rshift($Jm)
    {
        if (!($Jm == 0)) {
            goto d04;
        }
        return;
        d04:
        $ZO = (int) ($Jm / MATH_BIGINTEGER_BASE);
        $Jm %= MATH_BIGINTEGER_BASE;
        $kb = MATH_BIGINTEGER_BASE - $Jm;
        $Vx = (1 << $Jm) - 1;
        if (!$ZO) {
            goto VOs;
        }
        $this->value = array_slice($this->value, $ZO);
        VOs:
        $M5 = 0;
        $Cs = count($this->value) - 1;
        rwA:
        if (!($Cs >= 0)) {
            goto sO8;
        }
        $eW = $this->value[$Cs] >> $Jm | $M5;
        $M5 = ($this->value[$Cs] & $Vx) << $kb;
        $this->value[$Cs] = $eW;
        wSK:
        --$Cs;
        goto rwA;
        sO8:
        $this->value = $this->_trim($this->value);
    }
    function _normalize($XH)
    {
        $XH->precision = $this->precision;
        $XH->bitmask = $this->bitmask;
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                if (!($this->bitmask !== false)) {
                    goto Ym1;
                }
                $XH->value = gmp_and($XH->value, $XH->bitmask->value);
                Ym1:
                return $XH;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (empty($XH->bitmask->value)) {
                    goto nAJ;
                }
                $XH->value = bcmod($XH->value, $XH->bitmask->value);
                nAJ:
                return $XH;
        }
        bd6:
        c5K:
        $KT =& $XH->value;
        if (count($KT)) {
            goto RLM;
        }
        return $XH;
        RLM:
        $KT = $this->_trim($KT);
        if (empty($XH->bitmask->value)) {
            goto TA2;
        }
        $ul = min(count($KT), count($this->bitmask->value));
        $KT = array_slice($KT, 0, $ul);
        $Cs = 0;
        xgK:
        if (!($Cs < $ul)) {
            goto DRl;
        }
        $KT[$Cs] = $KT[$Cs] & $this->bitmask->value[$Cs];
        R0L:
        ++$Cs;
        goto xgK;
        DRl:
        TA2:
        return $XH;
    }
    function _trim($KT)
    {
        $Cs = count($KT) - 1;
        YlX:
        if (!($Cs >= 0)) {
            goto URp;
        }
        if (!$KT[$Cs]) {
            goto Bvg;
        }
        goto URp;
        Bvg:
        unset($KT[$Cs]);
        ABf:
        --$Cs;
        goto YlX;
        URp:
        return $KT;
    }
    function _array_repeat($Uh, $Sj)
    {
        return $Sj ? array_fill(0, $Sj, $Uh) : array();
    }
    function _base256_lshift(&$l2, $Jm)
    {
        if (!($Jm == 0)) {
            goto XvT;
        }
        return;
        XvT:
        $no = $Jm >> 3;
        $Jm &= 7;
        $M5 = 0;
        $Cs = strlen($l2) - 1;
        iOh:
        if (!($Cs >= 0)) {
            goto Fbs;
        }
        $eW = ord($l2[$Cs]) << $Jm | $M5;
        $l2[$Cs] = chr($eW);
        $M5 = $eW >> 8;
        v5i:
        --$Cs;
        goto iOh;
        Fbs:
        $M5 = $M5 != 0 ? chr($M5) : '';
        $l2 = $M5 . $l2 . str_repeat(chr(0), $no);
    }
    function _base256_rshift(&$l2, $Jm)
    {
        if (!($Jm == 0)) {
            goto aMU;
        }
        $l2 = ltrim($l2, chr(0));
        return '';
        aMU:
        $no = $Jm >> 3;
        $Jm &= 7;
        $pv = '';
        if (!$no) {
            goto J6o;
        }
        $ZF = $no > strlen($l2) ? -strlen($l2) : -$no;
        $pv = substr($l2, $ZF);
        $l2 = substr($l2, 0, -$no);
        J6o:
        $M5 = 0;
        $kb = 8 - $Jm;
        $Cs = 0;
        CDC:
        if (!($Cs < strlen($l2))) {
            goto e54;
        }
        $eW = ord($l2[$Cs]) >> $Jm | $M5;
        $M5 = ord($l2[$Cs]) << $kb & 0xff;
        $l2[$Cs] = chr($eW);
        xQG:
        ++$Cs;
        goto CDC;
        e54:
        $l2 = ltrim($l2, chr(0));
        $pv = chr($M5 >> $kb) . $pv;
        return ltrim($pv, chr(0));
    }
    function _int2bytes($l2)
    {
        return ltrim(pack("\x4e", $l2), chr(0));
    }
    function _bytes2int($l2)
    {
        $eW = unpack("\x4e\x69\x6e\164", str_pad($l2, 4, chr(0), STR_PAD_LEFT));
        return $eW["\x69\x6e\x74"];
    }
    function _encodeASN1Length($ul)
    {
        if (!($ul <= 0x7f)) {
            goto KDG;
        }
        return chr($ul);
        KDG:
        $eW = ltrim(pack("\x4e", $ul), chr(0));
        return pack("\103\141\x2a", 0x80 | strlen($eW), $eW);
    }
    function _safe_divide($l2, $UZ)
    {
        if (!(MATH_BIGINTEGER_BASE === 26)) {
            goto F60;
        }
        return (int) ($l2 / $UZ);
        F60:
        return ($l2 - $l2 % $UZ) / $UZ;
    }
}
