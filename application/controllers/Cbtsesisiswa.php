<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesisiswa extends CI_Controller { public function __construct() { goto KLcKo; KV_vI: $this->load->model("\x44\141\163\x68\x62\x6f\141\162\144\x5f\155\157\x64\145\154", "\144\x61\x73\x68\x62\157\x61\x72\144"); goto g4fOi; qitzq: $this->load->model("\x44\x72\x6f\160\144\x6f\167\156\137\x6d\x6f\144\145\154", "\x64\x72\x6f\160\x64\157\x77\x6e"); goto XU4Kk; d3L_E: jBGbq: goto LU4mX; swKSk: goto jBGbq; goto d8Boc; ovnIJ: if (!$this->ion_auth->logged_in()) { goto LEs3H; } goto o5x1p; d8Boc: LEs3H: goto kfytS; kfytS: redirect("\141\x75\164\150"); goto d3L_E; g4fOi: $this->load->model("\x43\x62\x74\x5f\x6d\157\x64\145\x6c", "\143\142\164"); goto qitzq; av8Bb: $this->load->model("\x4d\141\x73\164\x65\162\137\155\x6f\x64\x65\154", "\x6d\141\163\164\x65\x72"); goto KV_vI; KLcKo: parent::__construct(); goto ovnIJ; VxqBn: show_error("\x48\x61\x6e\x79\141\x20\101\x64\155\x69\x6e\151\x73\164\x72\141\x74\x6f\x72\x20\x79\x61\156\x67\40\144\x69\142\x65\x72\151\x20\x68\141\153\x20\x75\x6e\x74\x75\x6b\40\155\x65\156\147\x61\153\163\x65\163\x20\150\141\x6c\141\155\x61\x6e\x20\x69\x6e\x69\54\40\x3c\141\x20\x68\x72\x65\146\75\x22" . base_url("\144\141\x73\150\x62\157\141\x72\144") . "\42\x3e\113\145\x6d\142\x61\x6c\151\x20\153\145\x20\x6d\145\156\165\x20\x61\167\x61\154\x3c\57\x61\76", 403, "\101\153\163\x65\x73\x20\x54\145\x72\x6c\141\x72\x61\x6e\147"); goto ml9lk; XU4Kk: $this->load->model("\x4b\x65\x6c\x61\163\x5f\x6d\x6f\144\x65\154", "\x6b\145\x6c\141\x73"); goto jghfR; ml9lk: xiK9m: goto swKSk; jghfR: $this->form_validation->set_error_delimiters('', ''); goto wZbwR; o5x1p: if ($this->ion_auth->is_admin()) { goto xiK9m; } goto VxqBn; LU4mX: $this->load->library(["\x64\x61\164\141\x74\x61\142\x6c\x65\163", "\x66\x6f\x72\x6d\137\166\x61\154\151\x64\141\x74\151\157\x6e"]); goto av8Bb; wZbwR: } public function output_json($data, $encode = true) { goto lDCuO; yYV7j: $data = json_encode($data); goto vDG50; jRgSO: $this->output->set_content_type("\x61\x70\x70\154\x69\143\141\x74\151\157\156\57\152\x73\x6f\x6e")->set_output($data); goto PAN2g; vDG50: D4207: goto jRgSO; lDCuO: if (!$encode) { goto D4207; } goto yYV7j; PAN2g: } public function index() { goto kI5A3; DsvqG: $this->load->view("\x5f\x74\145\x6d\x70\154\x61\164\145\163\57\x64\141\163\x68\x62\x6f\141\x72\x64\x2f\x5f\150\x65\x61\x64\145\x72", $data); goto zHw1s; MGs9o: $smt = $this->dashboard->getSemesterActive(); goto yR4lL; kI5A3: $tp = $this->dashboard->getTahunActive(); goto MGs9o; R1qL8: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\x74\145\x73\57\x64\x61\163\x68\x62\157\141\162\x64\x2f\x5f\x66\157\157\164\x65\162"); goto FDu0Z; UePwG: $data = ["\165\x73\145\x72" => $user, "\x6a\165\x64\165\x6c" => "\101\164\165\162\40\123\x65\x73\151\40\123\x69\x73\167\141", "\x73\x75\x62\152\x75\x64\165\x6c" => "\x44\141\x74\x61\40\x53\x65\x73\x69\40\123\151\x73\167\x61", "\163\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting(), "\153\x65\x6c\141\x73" => $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt), "\x72\x75\141\x6e\147\x5f\x6b\x65\154\141\x73" => $this->cbt->getKelasList($tp->id_tp, $smt->id_smt), "\163\145\163\151" => $this->dropdown->getAllSesi(), "\x72\165\141\x6e\x67" => $this->cbt->getAllRuang(), "\164\160" => $this->dashboard->getTahun(), "\x74\x70\x5f\141\x63\x74\x69\166\x65" => $tp, "\163\x6d\164" => $this->dashboard->getSemester(), "\163\x6d\x74\137\141\143\164\x69\166\x65" => $smt, "\160\x72\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id)]; goto DsvqG; yR4lL: $user = $this->ion_auth->user()->row(); goto UePwG; zHw1s: $this->load->view("\143\142\x74\x2f\x73\145\163\x69\163\151\x73\167\141\57\144\x61\x74\141"); goto R1qL8; FDu0Z: } public function data() { $this->output_json($this->cbt->getSesi(), false); } public function getAllRuang() { $this->output_json($this->cbt->getAllRuang()); } public function getAllSesi() { $this->output_json($this->dropdown->getAllSesi()); } public function add() { goto ffcsI; CXtVx: $this->output_json($data); goto Aap5d; ffcsI: $insert = ["\x6e\141\155\x61\x5f\163\x65\163\x69" => $this->input->post("\x6e\141\155\141\137\x73\x65\163\151", true), "\153\157\x64\x65\x5f\x73\145\163\x69" => $this->input->post("\153\x6f\x64\145\x5f\x73\145\x73\151", true), "\167\141\x6b\x74\x75\137\x6d\x75\x6c\141\151" => $this->input->post("\x77\141\153\x74\165\x5f\x6d\165\154\141\x69", true), "\x77\x61\x6b\x74\x75\x5f\x61\153\x68\151\x72" => $this->input->post("\x77\x61\153\x74\x75\x5f\141\x6b\150\151\x72", true)]; goto T06m0; DkVyA: $data["\163\164\x61\x74\x75\163"] = $insert; goto CXtVx; T06m0: $this->master->create("\x63\x62\164\x5f\x73\145\x73\x69", $insert, false); goto DkVyA; Aap5d: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\141\x70\x70\154\151\143\141\x74\151\157\x6e\x2f\152\163\x6f\156")->set_output($data); } public function delete() { goto yCvE0; dC21T: $this->output_json(["\163\x74\141\x74\165\163" => true, "\x74\x6f\x74\141\x6c" => count($chk)]); goto j_nBh; yCvE0: $chk = $this->input->post("\x63\150\x65\x63\x6b\145\x64", true); goto spWeX; hDQfS: $this->output_json(["\163\164\x61\x74\x75\x73" => false]); goto ohwFD; Y1Plc: goto yye0c; goto xPJZg; OgoZX: if (!$this->master->delete("\143\142\164\x5f\x73\145\x73\x69", $chk, "\x69\x64\137\163\x65\x73\x69")) { goto cxLqx; } goto dC21T; xPJZg: oFCws: goto hDQfS; spWeX: if (!$chk) { goto oFCws; } goto OgoZX; ohwFD: yye0c: goto etKrp; j_nBh: cxLqx: goto Y1Plc; etKrp: } public function getSiswaRuang() { goto xKhZY; p6PzY: $smt = $this->dashboard->getSemesterActive(); goto XyHjN; xKhZY: $kelas = $this->input->get("\x6b\145\154\x61\163", true); goto hDjdP; hDjdP: $tp = $this->dashboard->getTahunActive(); goto p6PzY; XyHjN: $this->output_json($this->cbt->getRuangSesiSiswa($kelas, $tp->id_tp, $smt->id_smt)); goto cnTMQ; cnTMQ: } public function editsesisiswa() { goto ITL36; aI8lJ: E_NJT: goto PybYS; ITL36: $input = json_decode($this->input->post("\x73\x69\x73\x77\x61\x5f\x73\145\x73\x69", true)); goto jzTLP; jzTLP: foreach ($input as $d) { goto NFTT_; PE3Sa: $update = $this->db->replace("\143\x62\x74\x5f\x73\x65\163\151\x5f\x73\x69\x73\167\x61", $data); goto OVEsT; OVEsT: k6qP7: goto I4Ih0; NFTT_: $data = ["\163\x69\163\x77\x61\137\151\144" => $d->siswa_id, "\x6b\145\154\141\163\x5f\151\x64" => $d->kelas_id, "\162\x75\x61\x6e\147\137\x69\144" => $d->ruang_id, "\x73\x65\x73\151\137\x69\x64" => $d->sesi_id, "\164\160\x5f\x69\x64" => $d->tp_id, "\x73\155\x74\137\x69\144" => $d->smt_id]; goto PE3Sa; I4Ih0: } goto aI8lJ; PybYS: $data["\163\x74\x61\164\x75\163"] = $update; goto rpTi8; rpTi8: $this->output_json($data); goto XyHb1; XyHb1: } public function editsesikelas() { goto I94Uu; b1iLK: $tp = $this->dashboard->getTahunActive(); goto KbXhV; KbXhV: $smt = $this->dashboard->getSemesterActive(); goto z_usF; u2AH_: $data["\163\x74\141\164\x75\x73"] = $update; goto iT0bZ; S46Mf: jbPBo: goto u2AH_; iT0bZ: $this->output_json($data); goto peGtS; z_usF: foreach ($input as $d) { goto Uq92N; pnIyc: $data = ["\x69\x64\137\x6b\145\x6c\141\163\x5f\x72\165\141\x6e\x67" => $d->kelas_id . $tp->id_tp . $smt->id_smt, "\x69\144\x5f\x6b\145\154\141\163" => $d->kelas_id, "\x69\x64\x5f\x72\165\x61\x6e\x67" => $d->ruang_id, "\x69\x64\x5f\163\x65\163\x69" => $d->sesi_id, "\x69\x64\137\164\x70" => $tp->id_tp, "\151\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\163\x65\x74\x5f\163\x69\x73\167\141" => $d->set_siswa]; goto t7OoX; Uq92N: $siswas = $this->kelas->getKelasSiswa($d->kelas_id, $tp->id_tp, $smt->id_smt); goto qLPCa; qLPCa: foreach ($siswas as $siswa) { goto aV10H; aV10H: $data = ["\163\x69\163\167\141\137\151\x64" => $siswa->id_siswa, "\x6b\x65\154\x61\163\137\151\x64" => $siswa->id_kelas, "\162\x75\x61\x6e\147\x5f\x69\144" => $d->ruang_id, "\163\x65\163\x69\x5f\x69\x64" => $d->sesi_id, "\164\160\x5f\151\144" => $tp->id_tp, "\x73\x6d\x74\137\x69\144" => $smt->id_smt]; goto JdPlt; JdPlt: $this->db->replace("\143\x62\164\x5f\x73\145\163\x69\x5f\x73\151\x73\x77\141", $data); goto tosxz; tosxz: AY4Ev: goto bscaQ; bscaQ: } goto pjUW_; t7OoX: $update = $this->db->replace("\143\142\164\137\x6b\x65\154\x61\163\137\162\165\141\156\x67", $data); goto Yv7oe; Yv7oe: HJ4cv: goto J2QCQ; pjUW_: AU0ga: goto pnIyc; J2QCQ: } goto S46Mf; I94Uu: $input = json_decode($this->input->post("\x6b\145\x6c\141\163\137\163\145\163\151", true)); goto b1iLK; peGtS: } }
