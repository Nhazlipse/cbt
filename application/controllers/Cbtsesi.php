<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesi extends CI_Controller { public function __construct() { goto h1pnp; t9EPe: Fvt0W: goto QQ2XA; YKywE: show_error("\110\141\x6e\171\x61\40\101\x64\x6d\x69\x6e\151\x73\x74\x72\x61\x74\157\162\40\171\141\156\147\x20\x64\151\x62\145\162\151\40\150\141\x6b\40\x75\x6e\x74\165\x6b\x20\x6d\x65\x6e\x67\141\x6b\163\145\163\40\x68\x61\154\141\155\141\x6e\40\x69\156\151\x2c\40\74\x61\x20\x68\x72\145\x66\x3d\x22" . base_url("\144\141\163\150\142\x6f\141\162\144") . "\x22\x3e\113\145\155\142\141\154\151\40\x6b\145\40\155\145\156\165\40\141\167\x61\x6c\x3c\x2f\141\x3e", 403, "\x41\x6b\x73\145\x73\40\x54\x65\x72\154\x61\x72\x61\156\147"); goto t9EPe; QQ2XA: goto E2xCt; goto aewyp; pZ6BO: $this->load->model("\104\141\x73\150\142\157\x61\162\x64\x5f\x6d\157\x64\x65\154", "\x64\x61\x73\150\142\x6f\x61\x72\144"); goto XEc9u; q1PBb: $this->load->model("\x4d\x61\163\164\x65\162\x5f\x6d\x6f\144\145\154", "\x6d\141\x73\164\x65\162"); goto pZ6BO; lDLR6: $this->form_validation->set_error_delimiters('', ''); goto z9eF9; Gn4c7: if (!$this->ion_auth->logged_in()) { goto d2gRr; } goto ayrL9; h1pnp: parent::__construct(); goto Gn4c7; aewyp: d2gRr: goto mjxGG; mjxGG: redirect("\141\x75\164\150"); goto rITWU; XEc9u: $this->load->model("\x43\142\x74\x5f\155\157\x64\145\154", "\143\142\164"); goto lDLR6; rITWU: E2xCt: goto zh6k3; zh6k3: $this->load->library(["\144\141\164\x61\x74\x61\x62\154\x65\163", "\146\x6f\x72\155\137\x76\141\x6c\151\x64\141\164\151\x6f\156"]); goto q1PBb; ayrL9: if ($this->ion_auth->is_admin()) { goto Fvt0W; } goto YKywE; z9eF9: } public function output_json($data, $encode = true) { goto kyP1r; pjj3p: $data = json_encode($data); goto Pt2ry; kyP1r: if (!$encode) { goto T3G4B; } goto pjj3p; Pt2ry: T3G4B: goto ltBDD; ltBDD: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\141\x74\151\157\x6e\57\152\x73\157\x6e")->set_output($data); goto YJke3; YJke3: } public function index() { goto T1D7U; yyX8b: $data["\x74\160"] = $this->dashboard->getTahun(); goto EE7Yo; gTurL: $data = ["\x75\163\145\162" => $user, "\152\165\x64\x75\x6c" => "\123\145\163\x69\x20\x55\x6a\151\141\156", "\163\165\142\152\165\144\165\154" => "\x44\141\x74\141\40\123\x65\x73\x69\40\125\152\x69\x61\x6e", "\160\x72\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\x6e\147" => $this->dashboard->getSetting()]; goto yyX8b; EE7Yo: $data["\x74\160\x5f\x61\x63\164\x69\166\145"] = $this->dashboard->getTahunActive(); goto AVAlw; wjyud: $data["\163\x6d\164\x5f\x61\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto PtQOM; T1D7U: $user = $this->ion_auth->user()->row(); goto gTurL; PtQOM: $this->load->view("\x5f\x74\145\155\160\154\x61\x74\x65\x73\57\144\141\x73\150\x62\157\x61\x72\x64\57\x5f\150\145\x61\x64\x65\162", $data); goto if7Q6; gOX_C: $this->load->view("\x5f\164\145\x6d\x70\154\x61\x74\145\163\57\144\141\x73\x68\142\157\141\162\x64\57\x5f\x66\157\157\x74\x65\162"); goto n3uSZ; if7Q6: $this->load->view("\x63\142\x74\x2f\163\145\x73\151\x2f\x64\141\x74\x61"); goto gOX_C; AVAlw: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto wjyud; n3uSZ: } public function data() { $this->output_json($this->cbt->getSesi(), false); } public function add() { goto Nnq74; fpH2i: $this->output_json($data); goto c2VV8; Nnq74: $insert = ["\156\x61\x6d\x61\x5f\163\145\163\x69" => $this->input->post("\x6e\141\x6d\x61\x5f\163\145\163\x69", true), "\x6b\x6f\x64\x65\137\x73\145\x73\151" => $this->input->post("\x6b\x6f\x64\145\137\163\x65\x73\x69", true), "\167\141\x6b\164\x75\x5f\155\165\x6c\x61\151" => $this->input->post("\x77\141\153\164\x75\x5f\155\165\154\141\x69", true), "\x77\141\153\x74\165\137\141\153\x68\151\162" => $this->input->post("\x77\x61\x6b\164\165\x5f\x61\153\150\151\x72", true)]; goto jkmKq; OCkiN: $data["\x73\164\x61\x74\x75\x73"] = $insert; goto fpH2i; jkmKq: $this->master->create("\x63\x62\164\x5f\x73\145\163\x69", $insert, false); goto OCkiN; c2VV8: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\141\x70\160\154\151\x63\x61\x74\151\x6f\x6e\57\152\163\x6f\156")->set_output($data); } public function edit($id) { goto YPTfm; FP6ma: $this->load->view("\137\x74\145\155\x70\x6c\141\164\145\163\x2f\144\141\163\150\x62\157\x61\162\144\x2f\137\x66\157\157\164\145\162"); goto aYC2E; Lhpq7: $this->load->view("\143\x62\164\57\163\145\x73\x69\57\x65\x64\151\164"); goto FP6ma; atJZP: $data["\x73\x6d\x74\x5f\141\x63\164\x69\166\145"] = $smt; goto PXsM9; cevkS: $smt = $this->dashboard->getSemesterActive(); goto yF0SC; d_Miz: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto atJZP; yF0SC: $data["\164\160"] = $this->dashboard->getTahun(); goto Df0Ph; vW1tp: $this->load->view("\x5f\x74\x65\x6d\x70\154\x61\x74\x65\x73\57\144\x61\x73\150\142\x6f\x61\162\x64\x2f\x5f\150\145\141\144\x65\162", $data); goto Lhpq7; YPTfm: $tp = $this->dashboard->getTahunActive(); goto cevkS; Df0Ph: $data["\164\x70\x5f\141\143\164\x69\166\145"] = $tp; goto d_Miz; PXsM9: $data = ["\165\163\145\x72" => $this->ion_auth->user()->row(), "\x6a\x75\144\165\154" => "\x53\x65\163\x69\x20\x53\151\x73\167\x61", "\163\165\142\152\x75\x64\165\154" => "\101\x74\x75\x72\x20\x53\x65\163\151\x20\123\151\x73\167\141", "\163\145\163\x69" => $this->cbt->getSesiById($id)]; goto vW1tp; aYC2E: } public function delete() { goto yExO3; Fv6jP: U5DGc: goto Ws5HU; Ws5HU: goto CWsqu; goto BkBLT; ipk0o: CWsqu: goto WuuYX; x6kQf: if (!$chk) { goto kXSQf; } goto RJ55J; yExO3: $chk = $this->input->post("\143\150\145\143\153\x65\x64", true); goto x6kQf; LeoK2: $this->output_json(["\x73\164\141\x74\165\x73" => true, "\164\x6f\164\x61\154" => count($chk)]); goto Fv6jP; BkBLT: kXSQf: goto f9zFI; f9zFI: $this->output_json(["\x73\164\x61\164\165\163" => false]); goto ipk0o; RJ55J: if (!$this->master->delete("\143\142\164\137\x73\145\163\151", $chk, "\151\x64\137\x73\x65\163\151")) { goto U5DGc; } goto LeoK2; WuuYX: } public function sesisiswa() { goto Grd8y; lH2OI: $data["\163\155\164\137\x61\143\x74\151\166\x65"] = $this->dashboard->getSemesterActive(); goto PkeET; PkeET: $this->load->view("\x5f\164\x65\x6d\x70\154\x61\x74\x65\x73\x2f\144\x61\x73\x68\x62\x6f\141\162\144\x2f\x5f\x68\145\141\144\x65\162", $data); goto acus_; Y03aq: $data["\164\x70\137\x61\143\164\x69\166\145"] = $this->dashboard->getTahunActive(); goto W1MEw; fdfA9: $data["\164\x70"] = $this->dashboard->getTahun(); goto Y03aq; Grd8y: $data = ["\x75\x73\x65\162" => $this->ion_auth->user()->row(), "\x6a\x75\x64\165\x6c" => "\123\145\x73\x69\x20\x55\152\151\141\x6e", "\163\x75\x62\x6a\x75\144\165\x6c" => "\x44\x61\164\x61\40\x53\x65\x73\x69\x20\125\152\151\141\x6e"]; goto fdfA9; acus_: $this->load->view("\143\142\x74\x2f\163\145\163\x69\x73\151\x73\x77\x61\57\x64\x61\x74\x61"); goto q2nDK; q2nDK: $this->load->view("\x5f\164\145\155\x70\x6c\141\164\x65\163\x2f\144\x61\x73\x68\x62\157\141\162\x64\x2f\137\146\157\x6f\164\145\162"); goto AYi4L; W1MEw: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto lH2OI; AYi4L: } }
