<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\120\101\x54\x48") or exit("\x4e\x6f\40\x64\151\x72\145\143\x74\x20\x73\x63\x72\151\160\164\40\x61\143\x63\145\163\x73\x20\141\x6c\x6c\x6f\167\145\x64"); class Luckysheet extends CI_Controller { public function __construct() { goto V_9Jc; d4Bjb: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\x75"))) { goto lT2ZP; } goto it73E; K9BVH: $this->form_validation->set_error_delimiters('', ''); goto qU8aX; WMjqc: mGZ11: goto Akthv; ObeRd: $this->load->model("\113\x65\154\x61\x73\137\155\x6f\x64\145\x6c", "\153\x65\154\141\163"); goto GW60L; Wxy26: IowAg: goto nqZ14; NLBp1: goto IowAg; goto WMjqc; b4OUc: lT2ZP: goto NLBp1; kgzXb: $this->load->model("\x44\141\x73\x68\142\157\141\162\x64\137\155\157\x64\x65\154", "\144\141\x73\150\x62\x6f\x61\162\x64"); goto Ai3dw; LUHy1: $this->load->model("\115\x61\163\x74\x65\x72\137\x6d\157\x64\x65\x6c", "\x6d\141\163\164\x65\162"); goto K9BVH; V_9Jc: parent::__construct(); goto f9dYg; f9dYg: if (!$this->ion_auth->logged_in()) { goto mGZ11; } goto d4Bjb; it73E: show_error("\110\x61\156\x79\141\40\101\144\x6d\x69\x6e\x69\x73\x74\162\141\164\157\162\40\x79\x61\156\147\40\144\151\x62\145\x72\x69\40\x68\x61\x6b\x20\x75\x6e\164\x75\153\x20\x6d\145\156\x67\x61\153\x73\145\163\x20\150\x61\154\x61\x6d\141\x6e\40\151\x6e\x69\54\x20\74\x61\x20\x68\162\x65\146\x3d\x22" . base_url("\x64\141\x73\150\x62\157\x61\x72\144") . "\x22\x3e\x4b\145\155\142\141\154\x69\40\153\x65\x20\x6d\x65\x6e\165\x20\x61\167\x61\x6c\74\x2f\141\x3e", 403, "\101\x6b\163\145\163\x20\124\145\x72\x6c\x61\162\141\x6e\x67"); goto b4OUc; GW60L: $this->load->model("\x44\162\157\160\144\x6f\x77\x6e\137\x6d\157\x64\145\x6c", "\144\162\x6f\160\144\157\x77\156"); goto LUHy1; Ai3dw: $this->load->model("\122\x61\160\x6f\162\x5f\x6d\157\144\145\154", "\x72\141\160\157\162"); goto ObeRd; nqZ14: $this->load->library(["\x64\x61\x74\x61\x74\x61\142\x6c\x65\x73", "\x66\157\x72\155\x5f\166\141\154\151\144\141\x74\x69\157\x6e"]); goto kgzXb; Akthv: redirect("\x61\x75\164\x68"); goto Wxy26; qU8aX: } public function output_json($data, $encode = true) { goto lsW8_; tbCXK: $data = json_encode($data); goto oFLsf; M7t3V: $this->output->set_content_type("\x61\x70\x70\154\x69\x63\x61\164\x69\x6f\x6e\x2f\x6a\x73\x6f\x6e")->set_output($data); goto u7nmh; lsW8_: if (!$encode) { goto nYWNl; } goto tbCXK; oFLsf: nYWNl: goto M7t3V; u7nmh: } public function index() { goto b0gn8; qe1w1: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto WkkQu; b0gn8: $user = $this->ion_auth->user()->row(); goto xoNZN; z2VV9: $this->load->view("\155\145\155\x62\x65\x72\x73\57\x67\x75\162\165\x2f\x74\145\x6d\x70\x6c\x61\164\x65\163\57\150\145\141\144\145\162", $data); goto uIDWZ; Wkqzq: $data["\x74\x70\x5f\141\143\164\x69\x76\x65"] = $tp; goto qe1w1; uV9tx: $data["\x74\160"] = $this->dashboard->getTahun(); goto Wkqzq; Tric1: $this->load->view("\x6d\145\155\x62\145\x72\163\x2f\x67\165\x72\165\57\164\x65\x6d\x70\154\x61\164\145\x73\x2f\x66\x6f\157\x74\x65\x72"); goto ltFmz; uIDWZ: $this->load->view("\155\145\155\142\145\162\163\57\x67\165\x72\165\57\154\165\143\153\171\166\x69\x65\167"); goto Tric1; WkkQu: $data["\163\x6d\x74\137\141\x63\164\x69\x76\x65"] = $smt; goto Ng7jB; Ng7jB: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto VYrHQ; FPraJ: $smt = $this->dashboard->getSemesterActive(); goto uV9tx; VYrHQ: $data["\x67\165\x72\165"] = $guru; goto z2VV9; paHDD: $tp = $this->dashboard->getTahunActive(); goto FPraJ; xoNZN: $data = ["\x75\163\145\x72" => $user, "\x6a\x75\144\x75\154" => "\125\x73\145\162\x20\115\141\156\141\x67\x65\x6d\x65\x6e\164", "\x73\165\142\152\165\x64\x75\x6c" => "\104\x61\x74\x61\x20\125\x73\145\162\40\x53\151\163\x77\x61", "\163\x65\x74\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto paHDD; ltFmz: } }
