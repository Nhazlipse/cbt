<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Install_model extends CI_Model { function install_success() { return $this->check_installer(); } function check_installer() { goto Iyydh; HwtlD: if ($database == '') { goto l8LE9; } goto ctqPI; MUQj_: return "\60"; goto MG3vN; kp309: $database = $db["\144\x65\146\141\x75\x6c\x74"]["\x64\x61\164\x61\142\141\x73\145"]; goto MHiia; V1pvE: if ($CI->db->get("\163\145\164\164\x69\x6e\x67")->row()) { goto ZT9Uv; } goto SzJ_A; ctqPI: if (!$this->dbutil->database_exists($database)) { goto cjJnA; } goto GdD4L; wPn0o: ibzQ0: goto arMmX; aUf0I: if ($CI->db->table_exists("\165\x73\x65\162\x73")) { goto QrEmZ; } goto XeQV8; arMmX: MFnwz: goto JpgSa; R2NRt: goto hwanD; goto ahiqB; pBG81: UGZzf: goto V1pvE; qVM7D: $CI->load->database(); goto aUf0I; Iyydh: include APPPATH . "\x63\x6f\x6e\x66\151\147\57\144\x61\x74\141\142\x61\163\145\x2e\x70\150\x70"; goto kp309; XeQV8: return "\62"; goto huI57; TRQyh: return "\x33"; goto MJrnp; SzJ_A: return "\64"; goto R2NRt; MJrnp: goto ibzQ0; goto pBG81; nX2_R: QrEmZ: goto QG4mJ; YMVGU: goto GTGBL; goto Ugha5; ahiqB: ZT9Uv: goto MUQj_; Ugha5: l8LE9: goto nVZPF; MHiia: $this->load->dbutil(); goto HwtlD; MG3vN: hwanD: goto wPn0o; QG4mJ: if ($CI->db->get("\165\163\145\x72\x73")->row()) { goto UGZzf; } goto TRQyh; BRPuV: s0WYK: goto YMVGU; CHGNe: return "\x35"; goto BRPuV; nVZPF: return "\x31"; goto fgaH8; ZLKYu: cjJnA: goto CHGNe; JpgSa: goto s0WYK; goto ZLKYu; fgaH8: GTGBL: goto kGS2D; GdD4L: $CI =& get_instance(); goto qVM7D; huI57: goto MFnwz; goto nX2_R; kGS2D: } }
