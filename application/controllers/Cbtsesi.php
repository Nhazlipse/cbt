<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesi extends CI_Controller { public function __construct() { goto MBI3f; EIdHv: $this->load->model("\104\x61\163\150\142\x6f\x61\x72\x64\x5f\x6d\x6f\144\x65\154", "\x64\141\163\150\142\x6f\141\x72\x64"); goto SKRbF; wdjIQ: if ($this->ion_auth->is_admin()) { goto d1WKb; } goto YiLP1; kxsf1: Y3dTl: goto rL2dF; rz268: d1WKb: goto HSUe_; Lani2: if (!$this->ion_auth->logged_in()) { goto LhlfS; } goto wdjIQ; DnaqM: redirect("\x61\x75\164\150"); goto kxsf1; IfYEX: $this->load->model("\115\141\x73\164\x65\x72\137\x6d\157\144\145\x6c", "\155\141\x73\x74\145\162"); goto EIdHv; rL2dF: $this->load->library(["\x64\141\x74\x61\x74\141\142\x6c\145\163", "\146\157\x72\x6d\x5f\166\x61\x6c\151\144\141\x74\x69\x6f\x6e"]); goto IfYEX; p9NXD: LhlfS: goto DnaqM; Mrzbo: $this->form_validation->set_error_delimiters('', ''); goto Tt4Qd; YiLP1: show_error("\110\x61\156\x79\141\40\101\144\x6d\x69\156\x69\x73\x74\162\141\x74\x6f\162\40\171\141\156\147\x20\144\x69\x62\145\162\151\40\x68\x61\x6b\x20\x75\156\164\x75\153\40\155\x65\x6e\147\141\153\163\145\163\40\150\141\154\x61\x6d\x61\156\x20\x69\x6e\151\x2c\40\x3c\141\40\150\x72\x65\146\x3d\x22" . base_url("\144\141\163\150\x62\x6f\x61\162\x64") . "\x22\x3e\x4b\x65\x6d\x62\x61\154\x69\40\x6b\x65\40\155\145\156\165\40\x61\167\141\154\74\x2f\x61\76", 403, "\101\153\163\145\163\40\x54\x65\162\x6c\x61\162\141\156\147"); goto rz268; HSUe_: goto Y3dTl; goto p9NXD; SKRbF: $this->load->model("\103\x62\x74\137\155\157\x64\145\154", "\x63\x62\x74"); goto Mrzbo; MBI3f: parent::__construct(); goto Lani2; Tt4Qd: } public function output_json($data, $encode = true) { goto rZDVz; oyUXl: r0ymF: goto izqyr; rZDVz: if (!$encode) { goto r0ymF; } goto Scc8B; Scc8B: $data = json_encode($data); goto oyUXl; izqyr: $this->output->set_content_type("\141\x70\160\x6c\x69\x63\141\164\x69\x6f\156\57\x6a\163\x6f\156")->set_output($data); goto sdRY7; sdRY7: } public function index() { goto EdzHm; KA6V7: $data = ["\165\x73\x65\162" => $user, "\152\165\144\x75\x6c" => "\x53\x65\163\151\40\x55\152\x69\141\156", "\163\165\x62\152\x75\x64\165\x6c" => "\104\141\164\x61\40\123\x65\163\151\40\125\x6a\151\x61\156", "\160\x72\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\156\147" => $this->dashboard->getSetting()]; goto OiTs2; wsAPt: $this->load->view("\137\164\145\155\x70\x6c\x61\164\145\163\57\x64\x61\x73\150\142\x6f\x61\x72\144\57\137\146\157\x6f\x74\145\x72"); goto HhVrq; EdzHm: $user = $this->ion_auth->user()->row(); goto KA6V7; TshYU: $this->load->view("\x5f\164\145\155\x70\x6c\141\164\x65\163\57\144\x61\x73\x68\x62\x6f\x61\x72\144\x2f\137\150\x65\x61\144\145\162", $data); goto BR3jM; NYRLb: $data["\164\160\137\x61\143\x74\151\x76\x65"] = $this->dashboard->getTahunActive(); goto C4o68; BR3jM: $this->load->view("\x63\x62\164\x2f\x73\145\163\x69\57\144\x61\x74\141"); goto wsAPt; OiTs2: $data["\x74\160"] = $this->dashboard->getTahun(); goto NYRLb; C4o68: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto gozq3; gozq3: $data["\x73\x6d\x74\x5f\141\x63\164\x69\166\x65"] = $this->dashboard->getSemesterActive(); goto TshYU; HhVrq: } public function data() { $this->output_json($this->cbt->getSesi(), false); } public function add() { goto XfGIg; zRcom: $data["\x73\164\x61\164\165\163"] = $insert; goto wqMiF; wqMiF: $this->output_json($data); goto BOgl2; vy8GO: $this->master->create("\143\142\164\x5f\x73\145\x73\x69", $insert, false); goto zRcom; XfGIg: $insert = ["\156\141\155\x61\x5f\163\145\163\x69" => $this->input->post("\156\141\155\141\137\163\145\163\x69", true), "\x6b\157\144\145\137\163\x65\x73\x69" => $this->input->post("\x6b\x6f\144\145\137\163\x65\163\x69", true), "\167\x61\x6b\164\165\x5f\155\x75\154\141\151" => $this->input->post("\x77\x61\153\164\x75\x5f\155\165\x6c\141\151", true), "\x77\141\153\164\x75\x5f\141\x6b\150\x69\162" => $this->input->post("\x77\141\153\164\x75\x5f\x61\153\150\x69\162", true)]; goto vy8GO; BOgl2: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\141\160\x70\154\151\x63\x61\x74\x69\157\x6e\x2f\152\x73\157\x6e")->set_output($data); } public function edit($id) { goto YKZd7; ZhZAS: $this->load->view("\x5f\x74\145\x6d\x70\154\x61\x74\145\163\x2f\x64\141\x73\150\x62\157\x61\162\x64\57\x5f\146\157\x6f\x74\145\162"); goto ngkG0; N5P5R: $smt = $this->dashboard->getSemesterActive(); goto dz4Gt; BrzKV: $data["\x74\160\137\x61\143\x74\x69\x76\x65"] = $tp; goto HhK82; YKZd7: $tp = $this->dashboard->getTahunActive(); goto N5P5R; SdKRz: $data["\x73\155\164\137\x61\143\164\x69\x76\145"] = $smt; goto x1e0Q; nIRzm: $this->load->view("\x63\142\164\x2f\x73\145\163\151\x2f\x65\144\x69\164"); goto ZhZAS; x1e0Q: $data = ["\165\163\145\x72" => $this->ion_auth->user()->row(), "\x6a\x75\144\x75\x6c" => "\123\x65\x73\151\40\123\x69\163\167\x61", "\163\x75\x62\x6a\165\x64\165\x6c" => "\x41\164\x75\x72\40\x53\x65\163\151\x20\123\151\163\167\x61", "\x73\145\163\151" => $this->cbt->getSesiById($id)]; goto J72yD; J72yD: $this->load->view("\137\164\x65\x6d\160\x6c\141\x74\145\163\57\x64\x61\163\x68\142\x6f\x61\x72\144\57\x5f\x68\145\x61\x64\x65\162", $data); goto nIRzm; HhK82: $data["\163\155\164"] = $this->dashboard->getSemester(); goto SdKRz; dz4Gt: $data["\x74\160"] = $this->dashboard->getTahun(); goto BrzKV; ngkG0: } public function delete() { goto OJSoc; OJSoc: $chk = $this->input->post("\143\x68\145\143\x6b\145\x64", true); goto TI7g4; S0_sY: $this->output_json(["\x73\164\x61\x74\x75\x73" => true, "\x74\157\x74\x61\x6c" => count($chk)]); goto iQiwU; nCeLD: goto ryZm3; goto pi4Sl; iQiwU: Mm89Z: goto nCeLD; TI7g4: if (!$chk) { goto EUdtw; } goto Z1rO1; pDz5L: $this->output_json(["\x73\x74\141\164\165\x73" => false]); goto ZUR2H; ZUR2H: ryZm3: goto KK70I; pi4Sl: EUdtw: goto pDz5L; Z1rO1: if (!$this->master->delete("\143\142\x74\137\x73\145\x73\x69", $chk, "\151\144\137\x73\145\x73\151")) { goto Mm89Z; } goto S0_sY; KK70I: } public function sesisiswa() { goto WyRx4; IwkjV: $data["\x73\x6d\x74\137\141\143\164\151\x76\145"] = $this->dashboard->getSemesterActive(); goto YB2TI; Ba2FM: $this->load->view("\143\142\x74\x2f\163\145\x73\151\x73\x69\x73\x77\141\57\144\x61\164\x61"); goto l0qk0; FD2yN: $data["\x74\160\137\141\x63\164\151\x76\145"] = $this->dashboard->getTahunActive(); goto Ujf1D; Ujf1D: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto IwkjV; tUDQ7: $data["\x74\160"] = $this->dashboard->getTahun(); goto FD2yN; l0qk0: $this->load->view("\x5f\x74\145\155\160\x6c\x61\164\145\x73\x2f\144\x61\x73\150\x62\x6f\141\x72\x64\x2f\x5f\146\x6f\157\x74\145\x72"); goto pz_jJ; YB2TI: $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\x65\163\57\144\x61\163\x68\142\x6f\x61\x72\x64\x2f\x5f\150\x65\x61\144\145\x72", $data); goto Ba2FM; WyRx4: $data = ["\x75\x73\145\x72" => $this->ion_auth->user()->row(), "\152\165\144\165\154" => "\x53\x65\x73\x69\x20\125\x6a\x69\x61\156", "\163\x75\x62\152\x75\144\165\154" => "\x44\141\x74\141\40\x53\x65\x73\x69\x20\x55\152\151\x61\x6e"]; goto tUDQ7; pz_jJ: } }
