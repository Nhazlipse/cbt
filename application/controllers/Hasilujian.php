<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\x50\x41\124\110") or exit("\x4e\x6f\x20\144\151\x72\145\143\x74\40\x73\x63\x72\151\x70\164\40\141\x63\143\x65\x73\163\40\x61\x6c\x6c\x6f\167\145\144"); class HasilUjian extends CI_Controller { public function __construct() { goto mPKcv; ahjyu: $this->load->library(["\x64\x61\x74\141\164\x61\142\x6c\x65\163"]); goto z05pR; cYQX9: $this->load->model("\125\152\151\141\x6e\137\x6d\157\x64\x65\x6c", "\x75\152\151\x61\156"); goto NMUP2; mPKcv: parent::__construct(); goto A_iMY; si8I2: redirect("\141\x75\164\150"); goto SawLk; z05pR: $this->load->model("\115\141\163\164\145\x72\137\x6d\x6f\x64\145\154", "\x6d\141\x73\164\145\x72"); goto cYQX9; SawLk: ekr0B: goto ahjyu; NMUP2: $this->user = $this->ion_auth->user()->row(); goto rTkv8; A_iMY: if ($this->ion_auth->logged_in()) { goto ekr0B; } goto si8I2; rTkv8: } public function output_json($data, $encode = true) { goto OeLWH; EQqmw: $data = json_encode($data); goto P3TY4; P3TY4: Zdp5e: goto J2Yp0; OeLWH: if (!$encode) { goto Zdp5e; } goto EQqmw; J2Yp0: $this->output->set_content_type("\x61\160\x70\x6c\151\x63\x61\164\x69\x6f\156\57\x6a\x73\157\156")->set_output($data); goto bjdx1; bjdx1: } public function data() { goto gAEnX; sAKy2: $this->output_json($this->ujian->getHasilUjian($nip_guru), false); goto E46a1; yOaq_: $nip_guru = $this->user->username; goto pmlhb; pmlhb: UnDwz: goto sAKy2; Z92t4: if (!$this->ion_auth->in_group("\147\165\x72\x75")) { goto UnDwz; } goto yOaq_; gAEnX: $nip_guru = null; goto Z92t4; E46a1: } public function NilaiMhs($id) { $this->output_json($this->ujian->HslUjianById($id, true), false); } public function index() { goto Tj44s; YDUC0: $this->load->view("\x5f\x74\x65\x6d\x70\154\141\x74\x65\163\57\144\141\x73\150\142\157\x61\x72\x64\57\x5f\146\x6f\157\164\145\x72\56\160\x68\160"); goto DSyQA; Tj44s: $data = ["\x75\163\145\x72" => $this->user, "\x6a\165\x64\165\x6c" => "\125\x6a\x69\141\156", "\163\165\142\152\165\x64\x75\x6c" => "\110\141\163\151\154\x20\125\152\151\x61\156"]; goto bHj3g; Ko518: $this->load->view("\x75\152\x69\x61\x6e\x2f\x68\141\163\151\x6c"); goto YDUC0; bHj3g: $this->load->view("\137\x74\x65\155\x70\x6c\x61\x74\145\163\x2f\144\141\x73\150\142\157\141\x72\x64\x2f\137\x68\145\x61\x64\x65\162\x2e\x70\150\x70", $data); goto Ko518; DSyQA: } public function detail($id) { goto L1H6G; X6omW: $this->load->view("\137\164\x65\x6d\160\154\141\x74\145\163\57\144\141\x73\150\142\157\x61\x72\x64\x2f\137\x66\x6f\x6f\164\x65\x72\x2e\160\x68\160"); goto l_vxV; oNAWJ: $nilai = $this->ujian->bandingNilai($id); goto QR4mW; ZaAkq: $this->load->view("\x75\152\x69\141\156\57\144\145\x74\141\151\x6c\x5f\x68\141\163\151\x6c"); goto X6omW; QR4mW: $data = ["\x75\x73\x65\x72" => $this->user, "\x6a\165\x64\x75\x6c" => "\x55\x6a\151\141\x6e", "\x73\165\142\152\x75\144\x75\x6c" => "\x44\145\164\x61\x69\x6c\40\x48\x61\163\151\154\x20\x55\152\x69\141\x6e", "\165\152\x69\x61\156" => $ujian, "\156\151\x6c\x61\151" => $nilai]; goto InnDC; InnDC: $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\57\144\x61\163\x68\142\x6f\x61\x72\x64\57\x5f\150\x65\x61\144\x65\162\56\x70\x68\x70", $data); goto ZaAkq; L1H6G: $ujian = $this->ujian->getUjianById($id); goto oNAWJ; l_vxV: } public function cetak($id) { goto vnnzv; SJYch: $this->load->view("\x75\152\x69\141\x6e\57\x63\145\x74\141\x6b", $data); goto UiSPf; d1dqX: $ujian = $this->ujian->getUjianById($id); goto W5cwU; nTelV: $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row(); goto d1dqX; vnnzv: $mhs = $this->ujian->getIdMahasiswa($this->user->username); goto nTelV; W5cwU: $data = ["\165\x6a\x69\141\156" => $ujian, "\150\x61\163\x69\x6c" => $hasil, "\x6d\150\163" => $mhs]; goto SJYch; UiSPf: } public function cetak_detail($id) { goto zpqo2; xrlKh: $data = ["\165\x6a\x69\141\156" => $ujian, "\x6e\x69\x6c\x61\151" => $nilai, "\150\141\x73\x69\x6c" => $hasil]; goto rcddK; Jkl1d: $hasil = $this->ujian->HslUjianById($id)->result(); goto xrlKh; zpqo2: $ujian = $this->ujian->getUjianById($id); goto mXgCR; mXgCR: $nilai = $this->ujian->bandingNilai($id); goto Jkl1d; rcddK: $this->load->view("\x75\152\x69\x61\x6e\x2f\143\145\x74\141\153\x5f\x64\145\x74\141\151\154", $data); goto gP8U9; gP8U9: } }
