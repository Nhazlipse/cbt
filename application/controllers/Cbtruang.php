<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtruang extends CI_Controller { public function __construct() { goto zW3Us; C91CL: if ($this->ion_auth->is_admin()) { goto DSX1Q; } goto JAqo2; ixOOl: if (!$this->ion_auth->logged_in()) { goto jYd6z; } goto C91CL; oNWrz: $this->load->library(["\x64\141\164\141\164\x61\142\x6c\x65\x73", "\x66\157\x72\x6d\137\166\x61\154\151\x64\x61\x74\151\x6f\x6e"]); goto O8Gn1; p87HN: goto i64zo; goto BN2pv; JAqo2: show_error("\x48\x61\x6e\171\141\x20\101\144\x6d\151\x6e\151\163\164\x72\141\164\157\162\40\171\x61\x6e\x67\40\x64\151\x62\x65\x72\151\x20\150\x61\153\x20\x75\x6e\x74\165\x6b\40\x6d\x65\x6e\x67\141\x6b\163\145\163\40\x68\x61\x6c\141\x6d\141\156\x20\x69\x6e\x69\54\40\x3c\141\40\x68\x72\x65\146\75\x22" . base_url("\x64\141\163\150\x62\157\141\x72\144") . "\x22\76\113\145\155\x62\x61\154\151\40\x6b\145\x20\x6d\145\x6e\165\x20\x61\x77\x61\x6c\x3c\57\141\76", 403, "\x41\153\x73\x65\x73\40\124\145\162\x6c\141\162\x61\156\147"); goto x_7Ra; a7sU1: i64zo: goto oNWrz; O8Gn1: $this->load->model("\115\x61\163\x74\145\162\x5f\x6d\x6f\x64\x65\x6c", "\x6d\x61\x73\164\145\162"); goto NNYCu; fp27x: redirect("\141\165\x74\150"); goto a7sU1; NNYCu: $this->load->model("\x44\x61\x73\x68\142\157\141\x72\x64\x5f\155\x6f\144\x65\154", "\144\x61\x73\x68\142\157\141\162\144"); goto qYR9Z; zW3Us: parent::__construct(); goto ixOOl; wgkCw: $this->form_validation->set_error_delimiters('', ''); goto HIdVy; x_7Ra: DSX1Q: goto p87HN; qYR9Z: $this->load->model("\x43\142\x74\x5f\155\157\144\145\154", "\143\142\164"); goto wgkCw; BN2pv: jYd6z: goto fp27x; HIdVy: } public function output_json($data, $encode = true) { goto nWx5s; WIOCY: $data = json_encode($data); goto CrYEB; EWlzo: $this->output->set_content_type("\141\x70\160\154\151\x63\141\x74\x69\x6f\156\x2f\x6a\x73\x6f\156")->set_output($data); goto wgL3U; nWx5s: if (!$encode) { goto nHZGo; } goto WIOCY; CrYEB: nHZGo: goto EWlzo; wgL3U: } public function index() { goto xfu31; xfu31: $user = $this->ion_auth->user()->row(); goto QuWeK; QuWeK: $data = ["\165\163\x65\162" => $user, "\x6a\165\x64\x75\x6c" => "\122\x75\141\x6e\147\x20\125\x6a\151\141\x6e", "\163\165\x62\x6a\x75\144\165\154" => "\x44\x61\164\141\40\x52\165\141\156\147\x20\x55\x6a\151\141\156", "\160\162\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto ghXkg; yvAVM: $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\x65\163\x2f\x64\141\x73\x68\x62\157\141\x72\144\x2f\x5f\x66\157\157\x74\145\162"); goto A9RZb; ghXkg: $data["\164\x70"] = $this->dashboard->getTahun(); goto jKw0N; K_h1S: $data["\163\x6d\x74\137\x61\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto L5A4m; jKw0N: $data["\164\160\137\141\143\164\x69\x76\145"] = $this->dashboard->getTahunActive(); goto NMOrO; NMOrO: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto K_h1S; FRrjh: $this->load->view("\143\142\164\57\x72\x75\x61\156\x67\57\x64\x61\x74\141"); goto yvAVM; L5A4m: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\x65\x73\57\144\x61\163\x68\x62\x6f\141\162\144\57\x5f\150\145\x61\144\145\162", $data); goto FRrjh; A9RZb: } public function data() { $this->output_json($this->cbt->getRuang(), false); } public function add() { goto wb9Yf; PDqFq: $this->output_json($data); goto WEH7c; wb9Yf: $insert = ["\x6e\141\155\141\x5f\x72\x75\x61\x6e\147" => $this->input->post("\x6e\141\155\x61\137\x72\x75\x61\156\x67", true), "\x6b\x6f\x64\x65\137\x72\x75\x61\156\x67" => $this->input->post("\153\157\144\x65\137\162\165\141\x6e\147", true)]; goto liq0P; liq0P: $this->master->create("\x63\x62\164\x5f\x72\165\141\x6e\x67", $insert, false); goto bfkDU; bfkDU: $data["\163\164\x61\x74\x75\x73"] = $insert; goto PDqFq; WEH7c: } public function update() { $data = $this->cbt->updateRuang(); $this->output->set_content_type("\x61\x70\160\154\151\x63\141\164\151\x6f\156\57\x6a\163\157\156")->set_output($data); } public function delete() { goto hh5t0; tmuC0: if (!$chk) { goto hmMlJ; } goto mhmW5; QEb06: gKDrr: goto mCHFC; WmCBl: $this->output_json(["\163\164\x61\x74\x75\163" => true, "\164\157\x74\141\x6c" => count($chk)]); goto UKiW8; mhmW5: if (!$this->master->delete("\x63\x62\x74\x5f\162\165\141\156\147", $chk, "\151\144\137\162\x75\141\156\x67")) { goto I2zIf; } goto WmCBl; hh5t0: $chk = $this->input->post("\x63\150\x65\143\153\145\x64", true); goto tmuC0; tRdSP: $this->output_json(["\x73\164\x61\164\165\163" => false]); goto QEb06; YvIbB: goto gKDrr; goto nWz70; UKiW8: I2zIf: goto YvIbB; nWz70: hmMlJ: goto tRdSP; mCHFC: } }
