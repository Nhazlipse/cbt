<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto maeTq; px1aZ: exit("\116\157\40\x64\151\162\145\143\164\x20\163\x63\x72\x69\x70\164\40\x61\x63\x63\x65\x73\163\40\141\x6c\x6c\x6f\x77\x65\144"); goto hEtDX; hEtDX: H__31: goto BJaYb; maeTq: if (defined("\102\x41\123\105\120\101\x54\x48")) { goto H__31; } goto px1aZ; BJaYb: class Compare extends CI_Controller { function __construct() { goto lLTAU; XaoxK: $this->DB1 = $this->load->database("\155\x61\151\x6e\x5f\147\x61\x72\165\144\141", TRUE); goto jA9g4; jA9g4: $this->DB2 = $this->load->database("\x6c\151\166\x65", TRUE); goto bR5U3; KS6eN: $this->CHARACTER_SET = "\x75\164\146\70\x20\103\117\x4c\114\101\124\105\x20\x75\x74\x66\x38\x5f\147\x65\x6e\x65\162\x61\x6c\137\143\151"; goto XaoxK; lLTAU: parent::__construct(); goto KS6eN; bR5U3: } function index() { goto mmc2M; n_rJv: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\xa"; TT5WR: } goto BOOrf; e4YHA: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\143\x72\x65\x61\x74\x65")) : array(); goto w6dpU; Irn6C: $tables_to_drop = array_diff($live_tables, $development_tables); goto e4YHA; BOOrf: vDMde: goto npfO6; xQ7Wv: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto wD9XE; Vc_m7: $live_tables = $this->DB2->list_tables(); goto B0zxZ; dAWOO: echo "\x3c\x70\x3e\124\x68\x65\x20\146\157\x6c\x6c\157\167\x69\x6e\147\x20\123\x51\114\x20\143\157\155\155\141\x6e\x64\163\x20\156\x65\x65\x64\40\x74\x6f\x20\x62\x65\x20\145\x78\145\143\x75\164\145\144\x20\x74\x6f\40\142\x72\x69\156\147\x20\164\x68\x65\40\x4c\x69\166\145\x20\x64\x61\164\x61\x62\x61\163\x65\x20\164\x61\142\154\145\x73\40\x75\x70\x20\164\x6f\40\x64\x61\x74\x65\x3a\40\x3c\57\x70\76\12"; goto mskq2; yktWh: echo "\74\x68\62\x3e\124\x68\x65\x20\144\x61\164\141\x62\141\163\x65\40\x61\x70\x70\x65\x61\x72\x73\40\x74\157\40\142\145\x20\x75\160\x20\x74\157\x20\x64\x61\x74\x65\74\x2f\150\x32\x3e\12"; goto HqP39; qp3Gq: rEKxf: goto WhlaB; HqP39: goto NIySa; goto qp3Gq; reFWS: $development_tables = $this->DB1->list_tables(); goto Vc_m7; WhlaB: echo "\74\150\62\76\124\150\x65\40\144\x61\164\141\142\x61\x73\145\x20\x69\x73\x20\157\x75\x74\x20\157\146\x20\x53\171\x6e\143\41\74\57\150\62\x3e\xa"; goto dAWOO; w6dpU: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\x72\157\x70")) : array(); goto GrdPe; bDd_k: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto rEKxf; } goto yktWh; npfO6: echo "\x3c\160\162\145\76\12"; goto RUecq; B0zxZ: $tables_to_create = array_diff($development_tables, $live_tables); goto Irn6C; GrdPe: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto xQ7Wv; wD9XE: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto bDd_k; mskq2: echo "\x3c\160\162\145\40\163\x74\171\x6c\x65\75\x27\160\141\144\144\x69\x6e\x67\x3a\40\62\60\160\x78\x3b\40\x62\x61\x63\153\147\x72\x6f\x75\x6e\144\55\143\x6f\154\x6f\162\x3a\x20\43\106\106\106\101\x46\60\73\x27\76\12"; goto n_rJv; RUecq: NIySa: goto qL97l; mmc2M: $sql_commands_to_run = array(); goto reFWS; qL97l: } function manage_tables($tables, $action) { goto A3_uC; CZhA_: foreach ($tables as $table) { goto h9fVe; h9fVe: $query = $this->DB1->query("\123\x48\x4f\x57\40\103\122\105\101\124\105\40\124\x41\102\114\x45\x20\x60{$table}\x60\x20\x2d\x2d\x20\143\162\145\x61\164\145\x20\x74\141\142\x6c\x65\163"); goto SJBJe; SJBJe: $table_structure = $query->row_array(); goto iLBtH; Dy4ZK: WijMs: goto yNAVG; iLBtH: $sql_commands_to_run[] = $table_structure["\x43\162\145\x61\164\x65\40\124\141\x62\154\145"] . "\73"; goto Dy4ZK; yNAVG: } goto qnQ1p; A3_uC: $sql_commands_to_run = array(); goto cvrup; Wh0mw: rXdvR: goto dcF8I; XxRQb: R1s2V: goto XA1OO; dcF8I: return $sql_commands_to_run; goto WLZ1T; qnQ1p: hMKgn: goto XxRQb; P412X: uz2fb: goto Wh0mw; Dxngg: foreach ($tables as $table) { $sql_commands_to_run[] = "\104\x52\x4f\x50\40\124\x41\102\114\x45\x20{$table}\x3b"; yo_49: } goto P412X; XA1OO: if (!($action == "\144\x72\x6f\x70")) { goto rXdvR; } goto Dxngg; cvrup: if (!($action == "\x63\162\x65\141\164\145")) { goto R1s2V; } goto CZhA_; WLZ1T: } function compare_table_structures($development_tables, $live_tables) { goto FqOVO; hxApG: return $tables_need_updating; goto bvIzU; TD1e4: xDiJm: goto F_crb; uKYr3: MFm1G: goto oyAt9; F_crb: foreach ($live_tables as $table) { goto s1DOw; uJYvU: $live_table_structures[$table] = $table_structure["\x43\x72\145\x61\164\x65\x20\124\x61\142\154\145"]; goto GnJBr; GnJBr: kbfik: goto kPcX5; s1DOw: $query = $this->DB2->query("\123\110\x4f\127\40\103\x52\x45\x41\124\105\40\x54\x41\102\114\x45\x20\140{$table}\x60\40\x2d\55\x20\x6c\x69\166\145"); goto PMDnF; PMDnF: $table_structure = $query->row_array(); goto uJYvU; kPcX5: } goto uKYr3; FqOVO: $tables_need_updating = array(); goto DN80Q; DN80Q: $live_table_structures = $development_table_structures = array(); goto epPFb; oyAt9: foreach ($development_tables as $table) { goto BujQO; IrUus: wPDcL: goto gkHUR; idOlI: $tables_need_updating[] = $table; goto IrUus; BujQO: $development_table = $development_table_structures[$table]; goto wOJ4c; FnmZQ: if (!($this->count_differences($development_table, $live_table) > 0)) { goto wPDcL; } goto idOlI; gkHUR: L_5fp: goto mPHNp; wOJ4c: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto FnmZQ; mPHNp: } goto AMIFk; AMIFk: fHkSn: goto hxApG; epPFb: foreach ($development_tables as $table) { goto L2JjX; NMpbw: $development_table_structures[$table] = $table_structure["\x43\162\145\x61\x74\145\x20\x54\x61\x62\154\x65"]; goto NnJl7; L2JjX: $query = $this->DB1->query("\123\x48\x4f\x57\x20\103\x52\x45\x41\124\105\x20\x54\x41\x42\114\105\40\140{$table}\140\40\55\x2d\40\x64\145\166"); goto OV7qq; NnJl7: CjH_6: goto fPTas; OV7qq: $table_structure = $query->row_array(); goto NMpbw; fPTas: } goto TD1e4; bvIzU: } function count_differences($old, $new) { goto TjEpU; evcfl: return $differences; goto qIP2y; BNuEz: $i++; goto t8GZx; ZIvGv: if (!($i < $length)) { goto YIYp6; } goto kiwST; kiwST: if (!($old[$i] != $new[$i])) { goto L3STW; } goto zdG40; mSqkt: if (!($old == $new)) { goto WeMXc; } goto evcfl; SpWOv: Sio_W: goto ZIvGv; Z6psI: YIYp6: goto FoTFg; zdG40: $differences++; goto y2Ke0; t8GZx: goto Sio_W; goto Z6psI; iEklU: $i = 0; goto SpWOv; TjEpU: $differences = 0; goto YQImV; FoTFg: return $differences; goto muCVz; qIP2y: WeMXc: goto Adsn9; y2Ke0: L3STW: goto s73ZN; teF_F: $new = explode("\40", $new); goto uzFDl; cs8ks: $new = trim(preg_replace("\57\134\x73\x2b\57", '', $new)); goto mSqkt; YQImV: $old = trim(preg_replace("\57\x5c\x73\x2b\57", '', $old)); goto cs8ks; uzFDl: $length = max(count($old), count($new)); goto iEklU; Adsn9: $old = explode("\x20", $old); goto teF_F; s73ZN: XwBrW: goto BNuEz; muCVz: } function update_existing_tables($tables) { goto aCZD2; ZE5to: LHC74: goto qk9IJ; rZiUg: $table_structure_development = array(); goto MVExm; Em1Qx: return $sql_commands_to_run; goto bx2LT; awtzl: if (!(is_array($tables) && !empty($tables))) { goto sdao2; } goto XB_z0; MVExm: $table_structure_live = array(); goto awtzl; qk9IJ: sdao2: goto KvPvA; KvPvA: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto Em1Qx; XB_z0: foreach ($tables as $table) { goto rO6zy; rO6zy: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto yEVNc; yEVNc: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto UeJHj; UeJHj: Z5uKP: goto a5Kp5; a5Kp5: } goto ZE5to; aCZD2: $sql_commands_to_run = array(); goto rZiUg; bx2LT: } function table_field_data($database, $table) { goto qYNDF; De4RK: $fields[] = $row; goto eUxBL; qODSg: mysql_select_db($database["\144\x61\164\x61\x62\x61\163\145"]); goto FI93f; bayfa: w4FSi: goto huVyq; huVyq: return $fields; goto DJ6sb; H9suL: VTLjN: goto Nn_zk; Nn_zk: if (!($row = mysql_fetch_assoc($result))) { goto w4FSi; } goto De4RK; eUxBL: goto VTLjN; goto bayfa; FI93f: $result = mysql_query("\123\x48\x4f\x57\40\103\x4f\x4c\x55\115\x4e\x53\x20\106\122\x4f\x4d\40\140{$table}\x60"); goto H9suL; qYNDF: $conn = mysqli_connect($database["\x68\157\x73\164\x6e\x61\x6d\145"], $database["\165\x73\145\162\x6e\x61\155\x65"], $database["\160\x61\163\x73\x77\157\x72\144"]); goto qODSg; DJ6sb: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto HNxqO; HNxqO: $sql_commands_to_run = array(); goto L0RVw; L0RVw: foreach ($source_field_structures as $table => $fields) { goto F7oDF; DUsjv: FfKiB: goto cUdZY; ckCY8: WnCZr: goto DUsjv; F7oDF: foreach ($fields as $field) { goto mPLCJ; OSKd7: $modify_field .= "\x3b"; goto GPywA; ipuOA: if (!(is_array($differences) && !empty($differences))) { goto gSWyI; } goto MKEa4; H1Sm0: $add_field .= isset($field["\105\170\x74\162\141"]) && $field["\x45\170\164\x72\141"] != '' ? "\40" . $field["\105\x78\x74\162\x61"] : ''; goto Vw_K8; QXOuZ: s4drt: goto VcirU; uBXE7: goto s4drt; goto TqJj9; TqJj9: Eas4H: goto r1t7J; W8_jr: $n = 0; goto QXOuZ; QvrTa: $add_field .= "\x20\104\105\x46\x41\125\114\124\40" . $field["\104\145\x66\x61\x75\154\164"]; goto H1Sm0; yAYUM: $previous_field = $fields[$n]["\x46\x69\145\154\x64"]; goto jif9R; Pdmx2: lzgM5: goto DQE98; GPywA: gSWyI: goto yAYUM; d7zwP: $sql_commands_to_run[] = $modify_field; goto NseRF; TP0In: $add_field = "\x41\114\x54\x45\122\40\124\x41\x42\114\105\40{$table}\40\x41\x44\x44\40\x43\117\114\125\115\x4e\x20\x60" . $field["\106\x69\145\154\x64"] . "\x60\40" . $field["\124\171\x70\145"] . "\x20\103\110\101\x52\101\103\124\x45\x52\x20\123\105\x54\x20" . $this->CHARACTER_SET; goto zV2lb; AxB7g: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\x41\x46\x54\105\x52\x20" . $previous_field : ''; goto OSKd7; VcirU: if (!($n < count($fields))) { goto Eas4H; } goto yXMOd; mPLCJ: if ($this->in_array_recursive($field["\106\151\x65\x6c\144"], $destination_field_structures[$table])) { goto PPRaH; } goto TP0In; r1t7J: Kle5u: goto Pdmx2; MKEa4: $modify_field = "\101\x4c\124\105\x52\x20\x54\x41\102\114\x45\40{$table}\40\x4d\117\104\111\x46\x59\40\103\x4f\114\125\115\x4e\x20\140" . $fields[$n]["\x46\x69\145\x6c\x64"] . "\140\40" . $fields[$n]["\x54\171\x70\x65"] . "\40\103\110\101\122\101\103\x54\105\122\40\123\105\124\40" . $this->CHARACTER_SET; goto bGrL4; rOoED: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto TQdpU; } goto d7zwP; HSL1B: PPRaH: goto tkeHZ; SbA_o: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto ipuOA; cvKKZ: $modify_field .= isset($fields[$n]["\x45\170\164\x72\x61"]) && $fields[$n]["\x45\x78\164\x72\141"] != '' ? "\40" . $fields[$n]["\x45\x78\x74\162\x61"] : ''; goto AxB7g; tkeHZ: $modify_field = ''; goto W8_jr; yXMOd: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\x69\145\154\x64"] == $destination_field_structures[$table][$n]["\106\x69\x65\154\x64"])) { goto VkOWk; } goto SbA_o; Vw_K8: $add_field .= "\73"; goto tkj2o; jif9R: VkOWk: goto rOoED; zV2lb: $add_field .= isset($field["\x4e\165\x6c\x6c"]) && $field["\x4e\165\154\x6c"] == "\x59\x45\123" ? "\40\116\165\x6c\154" : ''; goto QvrTa; NseRF: TQdpU: goto i_9ez; bGrL4: $modify_field .= isset($fields[$n]["\x44\145\146\x61\x75\x6c\164"]) && $fields[$n]["\104\145\146\x61\165\x6c\x74"] != '' ? "\40\104\x45\106\x41\125\114\x54\x20\47" . $fields[$n]["\104\x65\146\141\165\154\164"] . "\47" : ''; goto QKSVv; tkj2o: $sql_commands_to_run[] = $add_field; goto OWv_G; OWv_G: goto Kle5u; goto HSL1B; ofxb8: $n++; goto uBXE7; QKSVv: $modify_field .= isset($fields[$n]["\116\165\154\x6c"]) && $fields[$n]["\116\165\154\154"] == "\131\x45\x53" ? "\x20\x4e\x55\114\114" : "\x20\x4e\x4f\x54\x20\x4e\x55\x4c\114"; goto cvKKZ; i_9ez: gc14P: goto ofxb8; DQE98: } goto ckCY8; cUdZY: } goto wixSL; wixSL: ZuF_D: goto y_xFp; y_xFp: return $sql_commands_to_run; goto fqjyf; fqjyf: } function in_array_recursive($needle, $haystack, $strict = false) { goto odKcR; Zj0h9: return false; goto ROSj7; lK2uE: IxbFS: goto Zj0h9; odKcR: foreach ($haystack as $array => $item) { goto gXnmp; KWFNK: IBuAd: goto WyYYp; gXnmp: $item = $item["\106\x69\145\x6c\144"]; goto CNvV8; amN9z: return true; goto KWFNK; CNvV8: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto IBuAd; } goto amN9z; WyYYp: H4lJF: goto zCxPj; zCxPj: } goto lK2uE; ROSj7: } }
