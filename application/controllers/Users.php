<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\120\x41\x54\110") or exit("\116\x6f\x20\x64\151\x72\x65\143\164\40\163\143\x72\151\x70\164\x20\x61\143\143\x65\163\163\x20\x61\154\154\157\x77\145\144"); class Users extends CI_Controller { public function __construct() { goto vZEWe; QlguB: if ($this->ion_auth->logged_in()) { goto VCQPA; } goto KrORq; KrORq: redirect("\x61\x75\x74\150"); goto NKo9T; T3QAV: $this->load->library(["\144\141\x74\x61\164\141\x62\x6c\145\163", "\146\157\x72\x6d\137\166\141\154\151\x64\141\x74\x69\157\156"]); goto YvcPf; J3IFN: $this->load->model("\104\141\163\x68\142\x6f\x61\x72\x64\x5f\x6d\x6f\144\145\154", "\x61\144\155\151\x6e\x64\141\x73\150\142\x6f\141\x72\144"); goto D5wwA; YvcPf: $this->load->model("\125\163\x65\x72\x73\x5f\155\x6f\144\145\154", "\x75\163\x65\x72\x73"); goto BovUd; vZEWe: parent::__construct(); goto QlguB; NKo9T: VCQPA: goto T3QAV; BovUd: $this->load->model("\115\x61\163\x74\x65\162\x5f\155\x6f\144\145\154", "\155\x61\163\164\x65\x72"); goto J3IFN; D5wwA: $this->form_validation->set_error_delimiters('', ''); goto QdtI3; QdtI3: } public function is_admin() { goto rBucl; Qc49H: iIGKs: goto h1IQ7; rBucl: if ($this->ion_auth->is_admin()) { goto iIGKs; } goto iLlb6; iLlb6: show_error("\x48\141\x6e\171\141\x20\101\144\x6d\x69\156\151\x73\x74\162\141\164\x6f\x72\40\x79\x61\x6e\147\x20\144\151\x62\x65\x72\x69\40\x68\x61\153\x20\165\x6e\164\x75\x6b\40\155\145\156\x67\x61\x6b\163\x65\x73\40\150\x61\154\141\x6d\x61\x6e\40\151\156\x69\x2c\x20\74\x61\x20\150\x72\145\146\75\x22" . base_url("\x64\141\x73\150\142\157\141\x72\144") . "\42\76\x4b\145\x6d\142\141\x6c\x69\40\153\145\x20\155\145\x6e\165\x20\x61\x77\141\x6c\74\x2f\x61\76", 403, "\101\153\x73\145\x73\40\124\145\162\154\141\x72\141\x6e\x67"); goto Qc49H; h1IQ7: } public function output_json($data, $encode = true) { goto DObNc; i5uvh: PiXpc: goto NBVfB; NBVfB: $this->output->set_content_type("\141\160\x70\x6c\x69\143\141\164\151\x6f\156\57\x6a\x73\x6f\x6e")->set_output($data); goto LyNQQ; WBgoH: $data = json_encode($data); goto i5uvh; DObNc: if (!$encode) { goto PiXpc; } goto WBgoH; LyNQQ: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto CBU2G; yDn_t: $data["\163\155\164"] = $this->admindashboard->getSemester(); goto CYiNF; CYiNF: $data["\163\x6d\x74\x5f\x61\143\164\x69\166\145"] = $this->admindashboard->getSemesterActive(); goto lZ3u6; UhYAx: $data = ["\165\163\145\162" => $this->ion_auth->user()->row(), "\152\x75\x64\165\154" => "\125\163\x65\x72\x20\115\141\x6e\141\x67\x65\155\x65\x6e\164", "\x73\165\142\x6a\x75\144\x75\x6c" => "\x44\x61\x74\x61\x20\125\163\145\162"]; goto Kg4au; CBU2G: $this->is_admin(); goto UhYAx; Kg4au: $data["\164\x70"] = $this->admindashboard->getTahun(); goto Mdycy; KbHAB: $this->load->view("\x75\x73\145\x72\163\x2f\144\x61\x74\x61"); goto LhyNE; lZ3u6: $this->load->view("\137\164\x65\155\x70\x6c\141\164\x65\163\x2f\x64\x61\163\x68\x62\x6f\141\162\x64\57\x68\x65\x61\144\145\162\x2e\160\x68\x70", $data); goto KbHAB; Mdycy: $data["\164\x70\137\x61\143\164\x69\166\x65"] = $this->admindashboard->getTahunActive(); goto yDn_t; LhyNE: $this->load->view("\x5f\164\x65\x6d\160\154\x61\x74\145\x73\x2f\144\x61\163\x68\x62\157\x61\x72\x64\57\x66\157\x6f\x74\145\162\56\160\150\x70"); goto t3sTr; t3sTr: } public function edit($id) { goto Eb8H1; ZnvRT: $data = ["\x75\x73\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\165\154" => "\125\x73\145\162\x20\115\141\x6e\x61\x67\x65\155\145\x6e\x74", "\163\x75\142\x6a\165\144\x75\154" => "\105\144\151\164\40\x44\141\164\x61\x20\x55\163\145\162", "\x75\x73\145\x72\163" => $this->ion_auth->user($id)->row(), "\x67\162\x6f\x75\x70\163" => $this->ion_auth->groups()->result(), "\154\145\166\145\x6c" => $level[0]]; goto lrceJ; StvSC: $this->load->view("\x75\163\x65\x72\163\x2f\145\x64\151\164"); goto IeSeO; lrceJ: $this->load->view("\137\164\145\155\x70\x6c\x61\x74\x65\x73\x2f\x64\x61\163\150\142\157\x61\162\144\57\x68\x65\x61\144\145\162\56\160\x68\x70", $data); goto StvSC; IeSeO: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\163\57\144\141\163\150\142\x6f\x61\x72\x64\57\x66\157\157\x74\x65\x72\56\x70\x68\160"); goto CsAU9; Eb8H1: $level = $this->ion_auth->get_users_groups($id)->result(); goto ZnvRT; CsAU9: } public function edit_info() { goto NTaT0; W3aGH: $input = ["\165\163\145\162\156\141\x6d\x65" => $this->input->post("\165\x73\x65\x72\x6e\x61\155\145", true), "\146\151\x72\163\x74\137\x6e\x61\155\145" => $this->input->post("\x66\151\x72\163\x74\x5f\x6e\x61\x6d\145", true), "\x6c\141\x73\x74\x5f\x6e\x61\x6d\145" => $this->input->post("\154\x61\x73\x74\x5f\156\x61\155\145", true), "\145\x6d\x61\151\154" => $this->input->post("\x65\x6d\141\x69\154", true)]; goto H7cYi; ktruT: $this->form_validation->set_rules("\x6c\x61\x73\164\x5f\x6e\x61\155\145", "\x4c\x61\x73\x74\x20\116\141\155\x65", "\x72\145\x71\x75\151\x72\145\x64"); goto pPFqV; pG3cR: $this->output_json($data); goto SWEFN; Wd887: $id = $this->input->post("\151\144", true); goto W3aGH; H7cYi: $update = $this->master->update("\x75\x73\145\162\x73", $input, "\151\x64", $id); goto HXlEE; NaSPU: $this->form_validation->set_rules("\165\163\145\x72\156\x61\155\x65", "\x55\163\x65\x72\156\x61\x6d\x65", "\x72\x65\x71\165\x69\162\x65\144"); goto H8qem; FvJK0: $data["\x73\x74\141\x74\x75\163"] = false; goto sUxb4; cEZev: goto anbbp; goto Z3BT1; HXlEE: $data["\163\164\x61\x74\x75\163"] = $update ? true : false; goto cEZev; H8qem: $this->form_validation->set_rules("\x66\151\x72\x73\x74\x5f\x6e\x61\x6d\x65", "\106\151\x72\x73\x74\40\116\x61\155\x65", "\x72\145\161\165\x69\x72\145\144"); goto ktruT; X8tcH: if ($this->form_validation->run() === FALSE) { goto bq1XT; } goto Wd887; pPFqV: $this->form_validation->set_rules("\145\155\141\151\154", "\105\x6d\x61\x69\x6c", "\162\145\161\x75\x69\162\145\144\x7c\x76\141\154\151\144\x5f\x65\155\x61\x69\154"); goto X8tcH; inwtZ: anbbp: goto pG3cR; Z3BT1: bq1XT: goto FvJK0; NTaT0: $this->is_admin(); goto NaSPU; sUxb4: $data["\145\162\162\x6f\162\163"] = ["\x75\x73\x65\x72\156\141\155\145" => form_error("\165\163\x65\x72\156\141\155\145"), "\x66\151\162\163\x74\137\x6e\141\155\x65" => form_error("\146\x69\x72\163\x74\x5f\156\141\155\x65"), "\154\x61\x73\x74\x5f\x6e\x61\x6d\145" => form_error("\x6c\x61\163\x74\137\x6e\141\155\145"), "\x65\155\x61\x69\x6c" => form_error("\x65\155\141\x69\x6c")]; goto inwtZ; SWEFN: } public function edit_status() { goto IHE8I; dkaWH: $id = $this->input->post("\151\144", true); goto r9xoU; r9xoU: $input = ["\141\143\x74\151\x76\145" => $this->input->post("\163\164\x61\164\165\x73", true)]; goto Xn1xO; Xn1xO: $update = $this->master->update("\165\x73\x65\162\x73", $input, "\x69\144", $id); goto RAzSJ; E69Br: $this->form_validation->set_rules("\x73\x74\141\164\x75\163", "\x53\164\x61\164\x75\163", "\x72\145\161\x75\x69\162\x65\x64"); goto Ff5Md; Odj_3: $data["\x73\x74\x61\x74\165\163"] = false; goto f7_UY; IHE8I: $this->is_admin(); goto E69Br; NJNsA: goto IphP4; goto ovppr; a2OTA: IphP4: goto amMcJ; amMcJ: $this->output_json($data); goto MNZP5; Ff5Md: if ($this->form_validation->run() === FALSE) { goto LU3Zo; } goto dkaWH; f7_UY: $data["\x65\162\x72\157\162\x73"] = ["\163\164\x61\164\x75\x73" => form_error("\x73\x74\x61\x74\x75\163")]; goto a2OTA; RAzSJ: $data["\x73\164\141\x74\x75\x73"] = $update ? true : false; goto NJNsA; ovppr: LU3Zo: goto Odj_3; MNZP5: } public function edit_level() { goto HAYgu; GCAXv: $this->output_json($data); goto b8dRZ; LaEL7: $data["\x73\164\x61\x74\x75\x73"] = false; goto ek462; J20VZ: goto rY7mi; goto iQw84; iQw84: uh4Bj: goto LaEL7; AR6TA: rY7mi: goto GCAXv; nK9b3: if ($this->form_validation->run() === FALSE) { goto uh4Bj; } goto PX6ZA; Eb88_: $this->form_validation->set_rules("\154\145\x76\x65\154", "\114\145\x76\145\x6c", "\162\x65\161\x75\x69\162\x65\144"); goto nK9b3; PX6ZA: $id = $this->input->post("\151\x64", true); goto zs0up; HAYgu: $this->is_admin(); goto Eb88_; ek462: $data["\145\162\162\157\x72\163"] = ["\154\x65\x76\145\154" => form_error("\154\x65\x76\145\x6c")]; goto AR6TA; MyVuV: $update = $this->master->update("\x75\x73\145\x72\163\x5f\147\x72\x6f\165\x70\x73", $input, "\x75\163\145\x72\137\x69\x64", $id); goto rZ9FP; rZ9FP: $data["\163\x74\x61\x74\165\163"] = $update ? true : false; goto J20VZ; zs0up: $input = ["\x67\x72\157\165\160\x5f\151\x64" => $this->input->post("\x6c\x65\x76\x65\154", true)]; goto MyVuV; b8dRZ: } public function change_password() { goto v7fGg; d_hWx: $this->output_json($data); goto ELhuJ; fDgWt: if ($change) { goto XC0Ot; } goto Jexzp; v7fGg: $this->form_validation->set_rules("\157\154\x64", $this->lang->line("\143\150\x61\x6e\147\145\x5f\x70\x61\x73\x73\167\157\162\x64\x5f\x76\x61\154\x69\144\x61\x74\151\157\x6e\137\x6f\x6c\144\137\x70\x61\x73\163\x77\157\x72\x64\x5f\x6c\x61\x62\145\x6c"), "\x72\x65\x71\165\x69\162\x65\144"); goto yiw_S; g8adX: $data = ["\163\x74\141\164\x75\163" => false, "\x65\x72\162\x6f\x72\x73" => ["\157\154\x64" => form_error("\x6f\x6c\144"), "\x6e\145\167" => form_error("\156\x65\167"), "\156\145\167\137\x63\157\156\x66\x69\162\x6d" => form_error("\156\x65\x77\137\143\157\x6e\146\x69\162\155")]]; goto pwCSv; Jexzp: $data = ["\x73\164\141\x74\x75\163" => false, "\155\x73\x67" => $this->ion_auth->errors()]; goto DZ1RR; RTt23: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\x6c\144"), $this->input->post("\x6e\145\x77")); goto fDgWt; f8t4G: k9h1Y: goto g8adX; XCAOd: l3PaK: goto k48IL; yiw_S: $this->form_validation->set_rules("\x6e\145\x77", $this->lang->line("\x63\x68\141\156\147\145\x5f\160\141\x73\163\167\157\162\x64\137\166\141\154\x69\144\141\x74\x69\157\x6e\x5f\156\145\167\137\x70\x61\163\163\167\157\162\x64\x5f\x6c\141\x62\145\154"), "\x72\145\161\x75\x69\162\145\x64\x7c\x6d\x69\x6e\x5f\x6c\145\x6e\147\164\150\133" . $this->config->item("\155\151\156\137\160\x61\163\x73\x77\x6f\162\144\x5f\x6c\145\x6e\147\x74\x68", "\x69\x6f\x6e\137\x61\x75\164\150") . "\x5d\174\155\141\164\x63\150\x65\x73\133\156\145\167\137\x63\157\156\146\x69\162\155\135"); goto daqq_; DZ1RR: goto l3PaK; goto SsPAt; daqq_: $this->form_validation->set_rules("\156\145\167\x5f\143\157\x6e\x66\x69\162\155", $this->lang->line("\143\150\141\x6e\x67\145\137\x70\141\x73\163\x77\x6f\x72\144\x5f\166\x61\x6c\151\144\x61\x74\151\x6f\x6e\x5f\x6e\x65\167\137\160\x61\163\x73\x77\x6f\x72\x64\x5f\143\x6f\156\146\151\x72\155\137\x6c\141\x62\145\154"), "\162\145\x71\x75\x69\x72\x65\144"); goto nd7U5; k48IL: goto onlCb; goto f8t4G; pwCSv: onlCb: goto d_hWx; SsPAt: XC0Ot: goto iO5NA; iO5NA: $data["\x73\164\141\164\x75\163"] = true; goto XCAOd; nd7U5: if ($this->form_validation->run() === FALSE) { goto k9h1Y; } goto ej1LX; ej1LX: $identity = $this->session->userdata("\x69\144\145\x6e\164\151\164\171"); goto RTt23; ELhuJ: } public function delete($id) { goto Yki8V; x8jP1: $data["\163\x74\x61\164\165\163"] = $this->ion_auth->delete_user($id) ? true : false; goto Yskzu; Yskzu: $this->output_json($data); goto zPxQf; Yki8V: $this->is_admin(); goto x8jP1; zPxQf: } }
