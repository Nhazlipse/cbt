<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtcetak extends CI_Controller { public function __construct() { goto hzFyu; fFKYY: IHQ0j: goto lJHdg; WfHwh: $this->load->model("\x4d\x61\x73\x74\x65\162\x5f\155\157\144\x65\154", "\x6d\141\x73\164\145\162"); goto n6VTU; wlCkk: if ($this->ion_auth->is_admin()) { goto IHQ0j; } goto wUshe; hzFyu: parent::__construct(); goto eCPdC; n6VTU: $this->load->model("\x4b\x65\x6c\141\x73\137\155\x6f\144\145\154", "\x6b\145\154\x61\x73"); goto DdQZ1; En93P: redirect("\x61\x75\x74\x68"); goto MGzI8; Azv4W: $this->load->library(["\x64\x61\x74\x61\x74\141\x62\x6c\145\x73", "\x66\x6f\x72\x6d\x5f\x76\141\x6c\151\x64\141\164\151\x6f\156"]); goto O9ZX8; DdQZ1: $this->load->model("\104\x61\x73\150\142\x6f\141\162\144\x5f\x6d\157\144\x65\x6c", "\144\x61\x73\150\x62\157\x61\x72\144"); goto sc3Ma; MGzI8: Csfbs: goto Azv4W; DlEJu: KAolC: goto En93P; sc3Ma: $this->load->model("\103\x62\x74\x5f\155\x6f\144\x65\154", "\x63\x62\x74"); goto W6xwI; fZETW: $this->form_validation->set_error_delimiters('', ''); goto ioIpU; wUshe: show_error("\x48\141\156\x79\x61\x20\101\x64\x6d\x69\x6e\x69\x73\x74\162\x61\x74\x6f\x72\x20\171\x61\156\147\40\144\151\x62\145\x72\x69\x20\x68\141\x6b\x20\165\156\x74\x75\153\40\155\x65\156\147\141\x6b\163\x65\163\40\x68\x61\x6c\141\x6d\x61\x6e\x20\151\x6e\x69\x2c\40\74\x61\40\x68\162\x65\146\75\42" . base_url("\x64\141\163\150\142\157\141\162\144") . "\42\x3e\x4b\145\x6d\142\x61\x6c\x69\40\153\x65\x20\155\x65\156\x75\x20\141\167\x61\x6c\x3c\x2f\x61\76", 403, "\101\x6b\163\145\x73\x20\124\x65\x72\154\141\x72\x61\x6e\x67"); goto fFKYY; O9ZX8: $this->load->library("\x75\x70\x6c\157\141\144"); goto WfHwh; W6xwI: $this->load->model("\x44\162\157\160\x64\157\x77\156\137\155\157\x64\145\154", "\x64\x72\157\160\144\157\167\156"); goto fZETW; eCPdC: if (!$this->ion_auth->logged_in()) { goto KAolC; } goto wlCkk; lJHdg: goto Csfbs; goto DlEJu; ioIpU: } public function output_json($data, $encode = true) { goto hiQJl; hiQJl: if (!$encode) { goto g_fJE; } goto n7952; YV9p8: $this->output->set_content_type("\x61\160\x70\x6c\151\143\141\x74\151\157\x6e\57\x6a\163\157\x6e")->set_output($data); goto DztdT; IJFKg: g_fJE: goto YV9p8; n7952: $data = json_encode($data); goto IJFKg; DztdT: } public function index() { goto KVqer; KVqer: $user = $this->ion_auth->user()->row(); goto PrZpx; vyrTH: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto vEK39; DHxHl: $this->load->view("\x5f\164\x65\155\160\154\141\164\145\x73\57\144\x61\x73\150\x62\157\x61\162\x64\57\x5f\x68\x65\x61\144\x65\162", $data); goto T0niB; trEdh: $this->load->view("\137\164\145\x6d\x70\x6c\141\164\x65\163\x2f\x64\x61\x73\150\x62\x6f\141\x72\x64\x2f\x5f\x66\x6f\157\x74\145\x72"); goto Gf_ER; wPeoO: $data["\x74\x70\x5f\141\x63\164\x69\x76\x65"] = $this->dashboard->getTahunActive(); goto vyrTH; KVcrn: $data["\164\160"] = $this->dashboard->getTahun(); goto wPeoO; DMflL: $data["\153\x6f\x70"] = $this->cbt->getSettingKopAbsensi(); goto DHxHl; vEK39: $data["\163\x6d\164\x5f\x61\143\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto DMflL; PrZpx: $data = ["\165\163\145\162" => $user, "\152\165\144\x75\154" => "\103\x65\x74\141\153\40\104\141\x74\x61\40\120\145\x6e\x69\x6c\141\151\141\x6e", "\163\165\x62\152\165\144\165\x6c" => "\103\x65\x74\141\153", "\x70\x72\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\151\x6e\147" => $this->dashboard->getSetting()]; goto KVcrn; T0niB: $this->load->view("\143\x62\164\x2f\143\145\164\141\153\57\144\x61\x74\141"); goto trEdh; Gf_ER: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function kartuPeserta() { goto oL9uW; s3fw9: $data["\x6b\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto TKCgB; I1pML: $data = ["\x75\x73\x65\162" => $user, "\x6a\165\x64\165\x6c" => "\x43\145\x74\x61\x6b\40\x4b\141\162\x74\165\40\x50\145\x73\x65\x72\164\141", "\x73\165\x62\152\x75\144\165\154" => "\x43\x65\x74\141\x6b", "\160\162\x6f\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto Cd_Q4; T7kpp: $data["\153\x61\x72\x74\165"] = $this->cbt->getSettingKartu(); goto s3fw9; rSuCV: $data["\164\x70\137\141\143\x74\151\x76\145"] = $tp; goto Vr8zl; Vr8zl: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto VH9Fk; rYNP3: $smt = $this->dashboard->getSemesterActive(); goto deIt2; Sa9WX: $this->load->view("\137\x74\x65\x6d\x70\x6c\141\164\x65\x73\x2f\144\141\163\x68\142\x6f\x61\162\144\x2f\137\x66\157\157\164\x65\x72"); goto BEf5h; RXkE7: $this->load->view("\x63\x62\164\57\143\145\x74\141\x6b\57\x6b\x61\x72\164\165"); goto Sa9WX; VH9Fk: $data["\x73\x6d\x74\137\x61\x63\x74\x69\x76\145"] = $smt; goto T7kpp; Cd_Q4: $tp = $this->dashboard->getTahunActive(); goto rYNP3; TKCgB: $data["\162\165\141\x6e\147"] = $this->dropdown->getAllRuang(); goto OF3hu; deIt2: $data["\164\160"] = $this->dashboard->getTahun(); goto rSuCV; OF3hu: $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\x74\145\163\x2f\144\x61\163\150\x62\157\x61\162\144\57\137\150\145\141\x64\145\x72", $data); goto RXkE7; oL9uW: $user = $this->ion_auth->user()->row(); goto I1pML; BEf5h: } function uploadFile($logo) { goto jR4K7; vjg0L: $data["\163\x72\x63"] = base_url() . "\x75\x70\154\x6f\141\144\163\x2f\163\145\x74\x74\x69\x6e\x67\163\x2f" . $result["\x66\x69\x6c\145\x5f\x6e\141\x6d\x65"]; goto keCVj; n2sn6: $this->output_json($data); goto pAtIf; NMYec: $config["\x6f\166\145\162\167\x72\151\164\x65"] = true; goto E7JEI; vkP8E: $result = $this->upload->data(); goto vjg0L; xTEqZ: goto iAS3r; goto dEj2I; E7JEI: $config["\146\151\154\145\137\156\141\155\x65"] = $logo; goto ObSBD; exHUV: $data["\x73\x69\172\145"] = $_FILES["\x6c\x6f\147\157"]["\163\151\x7a\x65"]; goto fDC3x; SQO9D: iAS3r: goto JoCwa; jva00: $data["\x73\x72\143"] = ''; goto WCKTw; jR4K7: if (isset($_FILES["\154\157\x67\157"]["\156\x61\155\x65"])) { goto gptGk; } goto jva00; JoCwa: $data["\x74\x79\160\x65"] = $_FILES["\154\x6f\147\157"]["\164\171\x70\x65"]; goto exHUV; dEj2I: M1ILz: goto MyWGd; IjWAf: $data["\163\x72\143"] = $this->upload->display_errors(); goto SQO9D; WCKTw: goto i3jul; goto N9l4Q; YeKaS: $config["\141\x6c\x6c\157\x77\145\x64\x5f\x74\171\x70\x65\x73"] = "\147\x69\146\x7c\x6a\160\x67\174\x70\156\x67\x7c\x6a\160\x65\147\174\x4a\x50\105\x47\x7c\112\x50\107\174\120\x4e\107\174\107\x49\x46"; goto NMYec; N9l4Q: gptGk: goto Svucu; fDC3x: i3jul: goto n2sn6; MyWGd: $data["\163\x74\x61\x74\x75\x73"] = false; goto IjWAf; Lcfw1: if (!$this->upload->do_upload("\154\x6f\x67\157")) { goto M1ILz; } goto vkP8E; keCVj: $data["\146\151\x6c\145\156\141\155\145"] = pathinfo($result["\146\x69\154\145\137\x6e\x61\x6d\x65"], PATHINFO_FILENAME); goto Un8Nc; Svucu: $config["\x75\x70\x6c\157\x61\x64\137\x70\x61\164\x68"] = "\x2e\x2f\165\x70\x6c\x6f\141\144\163\x2f\163\145\x74\x74\x69\156\147\x73\57"; goto YeKaS; Un8Nc: $data["\163\164\141\x74\x75\x73"] = true; goto xTEqZ; ObSBD: $this->upload->initialize($config); goto Lcfw1; pAtIf: } function deleteFile() { goto HV8Dx; L1Yn9: if (!unlink($file_name)) { goto wfwVq; } goto MH4sT; vg01a: wfwVq: goto dRfxc; HV8Dx: $src = $this->input->post("\163\162\143"); goto fN2Xs; fN2Xs: $file_name = str_replace(base_url(), '', $src); goto L1Yn9; MH4sT: echo "\106\151\x6c\x65\x20\104\145\154\145\164\145\x20\123\x75\143\143\x65\x73\163\146\165\154\154\171"; goto vg01a; dRfxc: } public function saveKartu() { goto iV8C8; iV8C8: $header_1 = $this->input->post("\x68\x65\x61\144\x65\x72\x5f\61", true); goto zgnE5; zgnE5: $header_2 = $this->input->post("\x68\145\141\x64\x65\162\x5f\x32", true); goto A21gN; S1tbk: $header_4 = $this->input->post("\150\145\141\x64\x65\162\x5f\64", true); goto mmA0i; A21gN: $header_3 = $this->input->post("\x68\x65\141\x64\145\162\x5f\x33", true); goto S1tbk; mmA0i: $tanggal = $this->input->post("\x74\141\x6e\147\147\141\x6c", true); goto cmBE0; cmBE0: $insert = ["\x69\144\137\x73\x65\x74\x5f\153\141\x72\164\165" => 123456, "\150\145\x61\x64\x65\x72\x5f\61" => $header_1, "\x68\145\x61\144\145\162\x5f\x32" => $header_2, "\x68\x65\x61\x64\x65\162\137\x33" => $header_3, "\x68\x65\x61\144\x65\162\x5f\64" => $header_4, "\164\x61\x6e\x67\x67\x61\154" => $tanggal]; goto OarEK; OarEK: $update = $this->db->replace("\x63\142\164\x5f\153\157\x70\x5f\153\141\x72\164\165", $insert); goto R1WOb; R1WOb: $this->output_json($update); goto QOJ_T; QOJ_T: } public function getSiswaKelas() { goto nUY7v; rzigk: $jadwal = $this->input->get("\152\x61\144\167\x61\154"); goto thxWc; ARTG1: foreach ($pengawass as $p) { goto jISOP; ULW6b: NxaoE: goto lE3jj; RJQd1: array_push($pengawas, $this->master->getGuruByArrId(explode("\x2c", $p->id_guru))); goto k0UGX; k0UGX: PY7QJ: goto ULW6b; jISOP: if (!(count(explode("\54", $p->id_guru)) > 0)) { goto PY7QJ; } goto RJQd1; lE3jj: } goto UeNMc; JjGdy: OB72A: goto eY2Z1; a9vaW: $ikelas = $this->master->getKelasById($kelas); goto rfYxs; VF37t: $kelas = $this->input->get("\153\145\x6c\141\163"); goto MUo90; sYSyY: WFdgp: goto jZcKb; jHGs_: $pengawass = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi); goto x96LS; q138p: $this->output_json($data); goto zb6wL; jZcKb: $s = !$sesi ? null : $sesi; goto YdPXr; wqp1T: foreach ($siswas as $siswa) { array_push($data["\163\151\x73\x77\x61"], $siswa); AFr8c: } goto JjGdy; hzobI: $smt = $this->dashboard->getSemesterActive(); goto jHGs_; lbJUu: if (!($jadwal != null && $jadwal != "\x6e\x75\154\x6c")) { goto kyIjd; } goto cY77d; x96LS: $pengawas = []; goto ARTG1; xkfzk: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto I9hzA; lZkzd: $isesi = $this->cbt->getSesiById($s); goto KpoUa; qRy3i: if (!($s != null)) { goto Expk5; } goto lZkzd; WeniC: $data["\163\x69\163\167\141"] = []; goto yFevh; u59R9: $ijadwal = null; goto VU6lp; rfYxs: goto WFdgp; goto Y0yNX; Co3rH: $ikelas = $this->kelas->getIdKelas($tp->id_tp, $smt->id_smt); goto lCj7H; eY2Z1: $data["\151\x6e\146\157"] = ["\153\x65\x6c\x61\x73" => $ikelas, "\163\145\x73\151" => $isesi, "\x6a\141\x64\167\x61\x6c" => $ijadwal, "\160\145\156\147\141\167\x61\x73" => $pengawas]; goto q138p; nUY7v: $sesi = $this->input->get("\x73\x65\x73\x69"); goto rzigk; VU6lp: $pengawas = []; goto lbJUu; cY77d: $tp = $this->dashboard->getTahunActive(); goto hzobI; yFevh: $siswas = $this->cbt->getRuangSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas, $s); goto wqp1T; Y0yNX: C15gT: goto Co3rH; YdPXr: $isesi = null; goto qRy3i; I9hzA: kyIjd: goto WeniC; mRM1o: $smt = $this->dashboard->getSemesterActive(); goto VF37t; KpoUa: Expk5: goto u59R9; thxWc: $tp = $this->dashboard->getTahunActive(); goto mRM1o; UeNMc: DL8yO: goto xkfzk; lCj7H: $kelas = $ikelas; goto sYSyY; MUo90: if ($kelas == "\141\154\x6c") { goto C15gT; } goto a9vaW; zb6wL: } public function getSiswaRuang() { goto Yy15Q; THajr: if (!($pengawass != null && count(explode("\54", $pengawass->id_guru)) > 0)) { goto UWR2M; } goto RY2ar; mjW9U: $ijadwal = null; goto nkTZK; RY2ar: $pengawas = $this->master->getGuruByArrId(explode("\54", $pengawass->id_guru)); goto ACrni; vcgWl: $data["\x69\156\x66\157"] = ["\162\x75\x61\156\147" => $iruang, "\163\145\163\x69" => $isesi, "\152\141\144\x77\141\x6c" => $ijadwal, "\160\x65\x6e\147\141\167\x61\x73" => $pengawas]; goto T9Row; nkTZK: if (!($jadwal != null && $jadwal != "\156\165\x6c\154")) { goto QJmRE; } goto Vs206; mqEFM: if (!($s != null)) { goto OgWb4; } goto XFnW6; F31NK: OgWb4: goto mjW9U; Hh0wV: $isesi = null; goto mqEFM; Vs206: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto Yd_Ee; T9Row: $this->output_json($data); goto SBzet; Ls96y: $sesi = $this->input->get("\163\x65\x73\x69"); goto OvmI4; KvXJr: $smt = $this->dashboard->getSemesterActive(); goto pIieA; Yy15Q: $ruang = $this->input->get("\x72\x75\x61\156\x67"); goto Ls96y; OvmI4: $jadwal = $this->input->get("\x6a\x61\144\167\141\154"); goto ej8CR; ej8CR: $tp = $this->dashboard->getTahunActive(); goto KvXJr; VQiQe: $s = $sesi == "\x6e\165\154\x6c" ? null : $sesi; goto Hh0wV; Yd_Ee: QJmRE: goto n_Ufi; wVk4m: $data["\x73\151\x73\x77\x61"] = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $s); goto vcgWl; pIieA: $iruang = $this->cbt->getRuangById($ruang); goto VQiQe; n_Ufi: $pengawass = $this->cbt->getPengawas($tp->id_tp . $smt->id_smt . $jadwal . $ruang . $sesi); goto LdcEF; LdcEF: $pengawas = []; goto THajr; ACrni: UWR2M: goto wVk4m; XFnW6: $isesi = $this->cbt->getSesiById($s); goto F31NK; SBzet: } public function saveKop() { goto SIQUI; kKzJA: $pengawas_2 = $this->input->post("\x70\145\156\x67\x61\167\x61\163\137\62", true); goto hnTcA; QkvBZ: $header_2 = $this->input->post("\x68\x65\x61\144\145\x72\137\62", true); goto mf5F0; XOvbA: $this->output_json($update); goto AhzMu; mf5F0: $header_3 = $this->input->post("\150\145\x61\x64\x65\x72\137\x33", true); goto DHeYN; HqtpC: $pengawas_1 = $this->input->post("\160\145\x6e\147\141\x77\141\x73\x5f\x31", true); goto kKzJA; AEckF: $proktor = $this->input->post("\160\162\157\x6b\164\x6f\162", true); goto HqtpC; DHeYN: $header_4 = $this->input->post("\150\x65\141\144\x65\x72\x5f\x34", true); goto AEckF; Aajcj: $update = $this->db->replace("\x63\142\x74\x5f\153\157\160\137\141\142\163\145\156\163\x69", $insert); goto XOvbA; SIQUI: $header_1 = $this->input->post("\150\x65\141\144\x65\x72\x5f\x31", true); goto QkvBZ; hnTcA: $insert = ["\151\144\137\x6b\x6f\160" => 123456, "\x68\145\x61\x64\x65\x72\x5f\x31" => $header_1, "\x68\145\x61\144\x65\162\x5f\x32" => $header_2, "\150\145\141\x64\145\162\137\x33" => $header_3, "\x68\145\141\x64\x65\x72\x5f\64" => $header_4, "\x70\x72\157\153\x74\157\162" => $proktor, "\160\145\x6e\x67\x61\x77\x61\163\137\61" => $pengawas_1, "\160\x65\156\x67\x61\167\x61\163\137\62" => $pengawas_2]; goto Aajcj; AhzMu: } public function absenPeserta() { goto MbQWo; p7v7R: $data["\x6b\145\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto FfL03; FfL03: $data["\x72\165\141\x6e\147"] = $this->dropdown->getAllRuang(); goto d9J4x; CbTWK: $data["\164\x70\137\x61\x63\164\x69\x76\145"] = $tp; goto zkWwu; zkWwu: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto Y5G0e; C00IR: $smt = $this->dashboard->getSemesterActive(); goto GIg75; MbQWo: $user = $this->ion_auth->user()->row(); goto sF3cu; Ugec4: $data["\152\141\x64\167\x61\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto p7v7R; d9J4x: $data["\x73\x65\163\151"] = $this->dropdown->getAllSesi(); goto WKP8p; LsHJc: $this->load->view("\143\142\x74\x2f\x63\x65\x74\x61\x6b\57\x61\142\x73\x65\156"); goto I3FeX; sF3cu: $data = ["\165\x73\145\162" => $user, "\152\165\x64\165\x6c" => "\103\x65\164\141\x6b\x20\x46\157\x72\x6d\x61\x74\40\101\x62\x73\x65\x6e\x73\x69", "\163\165\142\152\165\x64\x75\x6c" => "\103\145\x74\141\x6b", "\160\x72\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto MA1Fv; WKP8p: $data["\x6b\x6f\160"] = $this->cbt->getSettingKopAbsensi(); goto jPKEz; MA1Fv: $tp = $this->dashboard->getTahunActive(); goto C00IR; Y5G0e: $data["\163\155\164\137\x61\143\164\151\x76\145"] = $smt; goto Ugec4; GIg75: $data["\x74\160"] = $this->dashboard->getTahun(); goto CbTWK; I3FeX: $this->load->view("\137\164\145\x6d\x70\154\x61\164\145\x73\57\144\141\x73\x68\x62\x6f\x61\x72\144\57\x5f\x66\157\x6f\164\145\x72"); goto hOP2s; jPKEz: $this->load->view("\137\164\x65\x6d\160\154\x61\164\145\163\57\144\x61\163\x68\x62\x6f\x61\162\144\x2f\137\x68\x65\x61\144\145\x72", $data); goto LsHJc; hOP2s: } public function beritaAcara() { goto n2FZn; nGEGQ: $this->load->view("\137\x74\x65\x6d\160\x6c\x61\164\145\x73\57\144\x61\x73\150\142\x6f\141\162\x64\x2f\137\146\157\157\x74\145\162"); goto w361k; cEbjm: $this->load->view("\x63\x62\164\x2f\143\x65\x74\x61\153\x2f\x62\145\x72\x69\164\x61\x61\143\x61\162\141"); goto nGEGQ; tJdkV: $data["\x6a\x61\x64\167\x61\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto oE6fD; DkTG6: $data["\162\165\x61\x6e\x67"] = $this->dropdown->getAllRuang(); goto bJFhH; IhaZs: $smt = $this->dashboard->getSemesterActive(); goto ySAmM; n2FZn: $user = $this->ion_auth->user()->row(); goto bPaiZ; p__2R: $data["\x73\155\x74\137\x61\143\x74\151\166\145"] = $smt; goto tJdkV; xZTBF: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto p__2R; CpuCO: $data["\x74\x70\137\141\x63\x74\x69\166\145"] = $tp; goto xZTBF; BThy0: $data["\x6b\157\x70"] = $this->cbt->getSettingKopBeritaAcara(); goto sv4Tz; ySAmM: $data["\x74\160"] = $this->dashboard->getTahun(); goto CpuCO; sv4Tz: $this->load->view("\137\164\x65\x6d\160\154\141\164\x65\163\57\x64\x61\x73\x68\142\x6f\141\162\144\57\x5f\x68\x65\x61\144\145\162", $data); goto cEbjm; bJFhH: $data["\163\x65\x73\151"] = $this->dropdown->getAllSesi(); goto BThy0; JBLvj: $tp = $this->dashboard->getTahunActive(); goto IhaZs; oE6fD: $data["\153\x65\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto DkTG6; bPaiZ: $data = ["\165\163\145\x72" => $user, "\x6a\x75\x64\165\154" => "\x43\145\164\x61\153\40\x42\x65\x72\151\x74\x61\x20\101\143\141\162\x61", "\x73\x75\142\152\x75\144\165\x6c" => "\x43\x65\x74\141\x6b", "\160\x72\157\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto JBLvj; w361k: } public function saveKopBerita() { goto gjJ3H; cNiXk: $update = $this->db->replace("\143\142\x74\137\x6b\157\x70\137\x62\145\x72\151\x74\141", $insert); goto mAXeX; iJj0m: $header_4 = $this->input->post("\150\145\141\144\x65\162\137\64", true); goto t2XZP; t2XZP: $insert = ["\x69\x64\137\153\x6f\x70" => 123456, "\150\145\x61\x64\145\162\137\61" => $header_1, "\x68\145\x61\144\145\162\x5f\x32" => $header_2, "\150\145\141\144\145\x72\x5f\x33" => $header_3, "\x68\145\141\144\145\x72\x5f\64" => $header_4]; goto cNiXk; gjJ3H: $header_1 = $this->input->post("\150\x65\141\144\145\x72\137\x31", true); goto xywv7; xywv7: $header_2 = $this->input->post("\x68\x65\141\144\145\x72\x5f\62", true); goto drWcK; mAXeX: $this->output_json($update); goto a4CE0; drWcK: $header_3 = $this->input->post("\150\x65\x61\144\x65\162\137\63", true); goto iJj0m; a4CE0: } public function pesertaUjian($mode = null) { goto qjCeV; tsWoR: $data["\x6d\157\144\x65"] = $mode; goto rXFIL; CCc7T: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\x64\165\x6c" => "\x43\x65\164\141\153\40\x44\141\146\164\141\x72\40\120\x65\x73\x65\x72\x74\141", "\163\165\x62\152\x75\x64\x75\x6c" => "\103\x65\x74\141\153", "\x70\x72\x6f\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto Zk8lf; AW8LF: $data["\163\x69\x73\167\x61"] = $this->cbt->getAllPesertaByRuang($tp->id_tp, $smt->id_smt); goto exEge; ZCu1D: $data["\x72\165\141\x6e\147\163"] = $this->dropdown->getAllRuang(); goto HVumi; nky9H: $data["\x73\151\x73\x77\x61"] = $this->cbt->getAllPesertaByKelas($tp->id_tp, $smt->id_smt); goto aZNJ2; a3VVB: $data["\165\152\151\141\x6e"] = $this->dropdown->getAllJenisUjian(); goto tsWoR; haqyf: $data["\163\155\x74\x5f\141\143\x74\x69\x76\x65"] = $smt; goto wLBKF; uep4t: $this->load->view("\143\142\x74\57\143\145\164\x61\153\57\x70\x65\x73\x65\162\x74\141\165\x6a\151\x61\x6e"); goto ukgff; MsI1_: $data["\164\160\x5f\141\x63\164\x69\x76\x65"] = $tp; goto SeD0U; HVumi: $data["\163\145\x73\151\x73"] = $this->cbt->getAllKodeSesi(); goto uzh0K; ZWDUd: $this->load->view("\137\x74\145\x6d\x70\x6c\x61\x74\x65\163\x2f\x64\x61\x73\150\x62\x6f\141\x72\144\57\x5f\150\145\141\x64\x65\162", $data); goto uep4t; D29qW: $smt = $this->dashboard->getSemesterActive(); goto a2yPS; ukgff: $this->load->view("\x5f\164\145\155\160\154\x61\x74\x65\163\x2f\144\x61\163\150\x62\x6f\x61\162\x64\x2f\x5f\146\x6f\x6f\164\x65\x72"); goto GpDHP; exEge: y3MgO: goto ZWDUd; qjCeV: $user = $this->ion_auth->user()->row(); goto CCc7T; a2yPS: $data["\x74\160"] = $this->dashboard->getTahun(); goto MsI1_; SeD0U: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto haqyf; wLBKF: $data["\x6b\145\154\141\163\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto ZCu1D; rXFIL: if ($mode == "\61" || $mode == null) { goto aIUK6; } goto nky9H; aZNJ2: goto y3MgO; goto j6Seb; Zk8lf: $tp = $this->dashboard->getTahunActive(); goto D29qW; j6Seb: aIUK6: goto AW8LF; uzh0K: $data["\x6b\157\x70"] = $this->dashboard->getSetting(); goto a3VVB; GpDHP: } public function pengawas() { goto hzGNe; QfQu_: NH0YR: goto zpxyw; sjps8: $setting = $this->dashboard->getSetting(); goto IGtrM; DKlVy: $dari_selected = $this->input->get("\x64\x61\x72\x69", true); goto bOsRv; G3_11: $kelas_level = $this->cbt->getDistinctKelasLevel($tp->id_tp, $smt->id_smt, $arrLevel); goto FNqZ8; dJbsi: fJifc: goto lna0g; esDMd: $tp = $this->dashboard->getTahunActive(); goto u7lxY; K4Beb: $data["\162\165\141\x6e\x67"] = $ruangs; goto M_VQ4; utbkC: if (!($jenis_selected != null)) { goto rGbZX; } goto K6hA1; fG5eb: $ids = []; goto wqn9k; FSUkl: $data["\x70\x72\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto AqasT; k1qA7: $gurus = $this->dropdown->getAllGuru(); goto rw400; seqT7: $data["\164\160\x5f\141\143\164\x69\166\x65"] = $tp; goto UlSRt; wqn9k: if (!(count($id_jenis) > 0)) { goto Wz2w5; } goto pv01v; FNqZ8: $data["\153\x65\154\141\x73\x5f\154\x65\x76\145\154"] = $kelas_level; goto mNMb4; YMUV2: $data["\x64\141\162\x69\137\163\145\154\x65\x63\164\x65\x64"] = $dari_selected; goto D4XWy; gy5a0: $filter_selected = $this->input->get("\x66\x69\x6c\x74\x65\162", true); goto DKlVy; NHg2h: $result = []; goto EYmSU; EYmSU: foreach ($jadwal_pengawas as $jadwal_pengawa) { goto QfTW0; ReyEF: bB60A: goto oN0RY; LzM9i: nyO1W: goto ReyEF; QfTW0: foreach ($jadwal_pengawa as $r => $jp) { goto Gv6Fe; Gv6Fe: foreach ($jp as $s => $j) { goto ZflJL; OTWX0: nh3fz: goto ySpxL; wD83n: ryUNB: goto OTWX0; ZflJL: foreach ($j as $m => $km) { goto S4aZW; FryuO: fFDZG: goto Ig045; lgguc: array_push($result, $forAdd); goto nshZT; wR4v2: rlnKw: goto uIAk3; uIAk3: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ir, $is); goto xfjt5; cNGgZ: $ns = $ruangs[$r][$s]->nama_sesi; goto VenIe; L5TVu: array_push($perRuang[$forAdd->ruang], $forAdd); goto FryuO; Ig045: ldcIC: goto CPp1l; clzQ0: $sel = isset($pengawas[$km->id_jadwal]) && isset($pengawas[$km->id_jadwal][$ir]) && isset($pengawas[$km->id_jadwal][$ir][$is]) ? explode("\54", $pengawas[$km->id_jadwal][$ir][$is]->id_guru) : []; goto zXHx8; MnmXw: foreach ($sel as $p) { goto cZOiy; eR6Cs: et37K: goto TP0jF; TP0jF: M1ucz: goto LtEkt; lIG3e: KoBrW: goto eR6Cs; YJCBc: $pw .= "\x3c\142\162\x3e"; goto lIG3e; chZTP: if (!($jp < $jpp)) { goto KoBrW; } goto YJCBc; cZOiy: if (!isset($gurus[$p])) { goto et37K; } goto iHJK2; nZnIO: $jp += 1; goto chZTP; iHJK2: $pw .= $gurus[$p]; goto nZnIO; LtEkt: } goto wR4v2; zXHx8: $jp = 0; goto T6WuK; S4aZW: $nr = $ruangs[$r][$s]->nama_ruang; goto cNGgZ; nshZT: if (isset($perRuang[$forAdd->ruang])) { goto GxDTZ; } goto CLsUy; CLsUy: $perRuang[$forAdd->ruang] = []; goto LVyYC; nSNnw: GxDTZ: goto L5TVu; VenIe: $ir = $ruangs[$r][$s]->ruang_id; goto zIg6l; T6WuK: $jpp = count($sel); goto FVHcU; zIg6l: $is = $ruangs[$r][$s]->sesi_id; goto clzQ0; LVyYC: array_push($perRuang[$forAdd->ruang], $forAdd); goto d667R; FVHcU: $pw = ''; goto MnmXw; xfjt5: $forAdd = json_decode(json_encode(["\152\155\154\x5f\x73\x69\x73\x77\x61" => count($siswas), "\x74\141\x6e\x67\x67\141\x6c" => $km->tgl_mulai, "\x72\165\x61\x6e\147" => $nr, "\x73\x65\x73\x69" => $ns, "\x6d\141\160\x65\154" => $km->nama_mapel, "\x77\x61\153\164\x75" => $km->jam_ke, "\160\x65\x6e\x67\x61\x77\141\163" => $pw])); goto lgguc; d667R: goto fFDZG; goto nSNnw; CPp1l: } goto wD83n; ySpxL: } goto iSYxr; iSYxr: byO0m: goto UvIdk; UvIdk: wWmD0: goto C7Zhg; C7Zhg: } goto LzM9i; oN0RY: } goto dJbsi; EVvwS: $data["\152\x65\x6e\x69\x73\x5f\163\145\154\x65\143\x74\145\144"] = $jenis_selected; goto jBaV0; rw400: $jadwals = []; goto utbkC; u7lxY: $smt = $this->dashboard->getSemesterActive(); goto pdWnP; BTsLI: WzJsy: goto Ucw1n; b3VWO: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto fG5eb; n3sKO: if (!($jenis_selected != null)) { goto WzJsy; } goto XkVEh; lna0g: $data["\152\141\144\x77\x61\154\x73"] = $result; goto LquMR; MyLSI: $arrLevel = []; goto sE9M5; sE9M5: foreach ($jadwals as $jadwal) { goto ht47i; ht47i: if (in_array($jadwal->bank_level, $arrLevel)) { goto MvTI1; } goto j1I7I; a_taD: MvTI1: goto Ngpg8; Ngpg8: Vj9ca: goto WIVHx; j1I7I: array_push($arrLevel, $jadwal->bank_level); goto a_taD; WIVHx: } goto QfQu_; BM2xr: $pengawas = []; goto n3sKO; IGtrM: $jenis_selected = $this->input->get("\152\145\x6e\x69\x73", true); goto so4MX; yXy6W: foreach ($kelas_level as $kl) { array_push($arrKls, $kl->id_kelas); Iu4Rc: } goto NYSkx; iTqB2: $data["\146\151\x6c\164\x65\162\137\x73\x65\154\x65\x63\164\145\x64"] = $filter_selected; goto YMUV2; Ucw1n: $data["\x70\x65\156\x67\x61\x77\141\x73"] = $pengawas; goto k1qA7; bOsRv: $sampai_selected = $this->input->get("\x73\141\155\160\141\x69", true); goto c9Grq; f0aus: $jadwal_pengawas = []; goto Mycgy; K6hA1: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, "\x30", $dari_selected, $sampai_selected); goto yjPzW; Mycgy: if (!(count($arrKls) > 0)) { goto e71Rd; } goto FQoEu; M_VQ4: foreach ($ruangs as $id_ruang => $ruang) { goto CwXyf; lwrqC: Ss4Oy: goto rGe_b; rGe_b: y89lR: goto m_ooC; CwXyf: foreach ($ruang as $id_sesi => $sesi) { goto SXowD; SXowD: foreach ($kelas_level as $kl) { goto FNDu5; rT_Qi: xBaFd: goto KztII; KztII: RXdt4: goto gGCAE; FNDu5: foreach ($jadwals as $jadwal) { goto oo2SC; Be1CD: CS9z2: goto vOXjN; hdCjY: e56vV: goto Be1CD; ZjIXu: $jadwal_pengawas[$jadwal->tgl_mulai][$id_ruang][$id_sesi][$jadwal->kode] = $jadwal; goto hdCjY; oo2SC: if (!($jadwal->bank_level == $kl->level_id)) { goto e56vV; } goto ZjIXu; vOXjN: } goto rT_Qi; gGCAE: } goto GO3Sl; GO3Sl: HYy30: goto Z3QjU; Z3QjU: c4Mk_: goto m9k7h; m9k7h: } goto lwrqC; m_ooC: } goto uSvMQ; JJL5h: $data["\163\x6d\x74\x5f\x61\143\164\151\166\x65"] = $smt; goto b3VWO; R_C6t: $data = ["\165\163\x65\162" => $user, "\152\x75\144\165\x6c" => "\112\x61\x64\x77\x61\x6c\x20\120\145\x6e\x67\x61\x77\141\x73", "\163\x75\x62\x6a\x75\x64\165\154" => "\103\x65\x74\x61\x6b\40\112\141\x64\167\141\154\40\120\x65\156\x67\x61\x77\x61\163", "\163\145\x74\x74\x69\156\147" => $setting]; goto esDMd; hzGNe: $user = $this->ion_auth->user()->row(); goto sjps8; AqasT: $data["\162\165\x61\156\x67\137\x73\x65\163\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto lf24R; r5zdZ: $this->load->view("\x5f\164\x65\155\160\x6c\141\x74\x65\163\57\x64\141\x73\x68\x62\157\x61\162\x64\57\x5f\146\x6f\157\x74\x65\162"); goto lXAgK; nG1no: $this->load->view("\143\142\164\57\143\145\x74\x61\x6b\x2f\x70\145\x6e\x67\141\x77\x61\x73"); goto r5zdZ; UlSRt: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto JJL5h; XO2z2: $perRuang = []; goto NHg2h; uSvMQ: i_6Zf: goto a0v1k; XvwUe: $this->load->view("\137\x74\x65\155\x70\154\x61\x74\x65\163\x2f\144\141\163\150\x62\157\x61\162\x64\x2f\x5f\150\x65\x61\144\145\x72", $data); goto nG1no; FQoEu: $ruangs = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto K4Beb; a0v1k: e71Rd: goto XO2z2; qnCje: goto jDiBD; goto L8nDP; lf24R: $data["\163\145\163\x69"] = $this->dropdown->getAllSesi(); goto XvwUe; zpxyw: $kelas_level = []; goto jXpTh; cvx2M: $arrKls = []; goto yXy6W; mNMb4: BpKBZ: goto cvx2M; jXpTh: if (!(count($arrLevel) > 0)) { goto BpKBZ; } goto G3_11; NYSkx: r9KHG: goto f0aus; sc47H: $data["\x6a\145\156\151\163"] = ['' => "\142\145\x6c\165\x6d\40\141\x64\x61\x20\x6a\141\144\167\141\154\40\165\152\x69\x61\x6e"]; goto qnCje; so4MX: $jenis_ujian = $this->cbt->getJenisById($jenis_selected); goto R_C6t; L8nDP: a7P1J: goto OCSH0; pdWnP: $data["\x74\160"] = $this->dashboard->getTahun(); goto seqT7; ZpkU7: Wz2w5: goto WQqKi; WQqKi: if (count($ids) > 0) { goto a7P1J; } goto sc47H; OCSH0: $data["\152\x65\156\x69\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto NONsb; D4XWy: $data["\163\141\155\x70\x61\x69\137\x73\x65\154\x65\x63\x74\x65\x64"] = $sampai_selected; goto BM2xr; Sx3nZ: or3YX: goto ZpkU7; jBaV0: $data["\152\x65\x6e\x69\163\137\165\152\151\x61\x6e"] = $jenis_ujian; goto iTqB2; LquMR: $data["\x6a\141\x64\167\141\x6c\163\x5f\162\x75\x61\x6e\x67"] = $perRuang; goto FSUkl; NONsb: jDiBD: goto gy5a0; XkVEh: $pengawas = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto BTsLI; yjPzW: rGbZX: goto MyLSI; c9Grq: $data["\146\x69\154\164\x65\162"] = ["\x30" => "\123\145\x6d\x75\141", "\61" => "\124\141\156\x67\x67\x61\x6c"]; goto EVvwS; pv01v: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); V3k8H: } goto Sx3nZ; lXAgK: } }
