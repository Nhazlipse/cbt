<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto uUVRz; K973b: rfYKu: goto rtt_J; NFIve: $this->load->model("\x44\141\x73\150\142\x6f\x61\162\144\x5f\x6d\157\144\145\154", "\144\x61\x73\150\142\x6f\x61\162\x64"); goto aKOs_; x6il4: $this->load->model("\120\157\163\164\137\155\x6f\x64\145\x6c", "\x70\157\163\x74"); goto o7_PC; lUMPJ: goto rfYKu; goto sVyoI; o7_PC: $this->form_validation->set_error_delimiters('', ''); goto hUujC; uUVRz: parent::__construct(); goto wwFru; NvehP: redirect("\x61\x75\x74\150"); goto K973b; N_eYC: show_error("\110\141\x6e\x79\141\x20\101\144\x6d\151\x6e\151\163\x74\x72\141\x74\157\162\x20\144\x61\156\40\147\x75\162\165\x20\x79\x61\x6e\x67\40\x64\x69\x62\145\162\x69\40\x68\x61\x6b\40\x75\156\x74\x75\153\40\x6d\x65\x6e\147\x61\x6b\x73\145\x73\x20\150\x61\154\x61\x6d\x61\x6e\40\x69\156\151\x2c\x20\74\141\x20\150\162\145\x66\x3d\x22" . base_url("\144\x61\163\150\142\157\141\162\144") . "\x22\x3e\113\x65\155\142\x61\x6c\151\40\x6b\x65\40\x6d\145\156\x75\40\x61\167\141\x6c\x3c\57\141\76", 403, "\101\x6b\x73\x65\163\40\x54\x65\162\154\x61\x72\x61\x6e\x67"); goto WLXzi; wwFru: if (!$this->ion_auth->logged_in()) { goto yvfeg; } goto CQ4Od; sVyoI: yvfeg: goto NvehP; aKOs_: $this->load->model("\113\145\154\141\163\137\x6d\x6f\x64\x65\154", "\153\x65\154\x61\163"); goto ihDZp; ihDZp: $this->load->model("\104\162\157\x70\x64\157\167\156\137\x6d\x6f\144\145\154", "\144\x72\157\160\144\157\x77\156"); goto x6il4; WLXzi: oEVea: goto lUMPJ; CQ4Od: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\165"))) { goto oEVea; } goto N_eYC; hoVcb: $this->load->model("\115\141\x73\x74\145\162\x5f\x6d\x6f\144\145\154", "\x6d\x61\163\x74\145\x72"); goto NFIve; rtt_J: $this->load->library(["\x64\141\164\x61\x74\141\x62\154\145\163", "\x66\x6f\x72\155\137\166\x61\154\x69\144\x61\x74\151\x6f\156"]); goto hoVcb; hUujC: } public function output_json($data, $encode = true) { goto eMfW4; aT4CU: $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\x74\x69\x6f\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto aWv8G; Q7U_x: hLjCF: goto aT4CU; mBOI1: $data = json_encode($data); goto Q7U_x; eMfW4: if (!$encode) { goto hLjCF; } goto mBOI1; aWv8G: } public function index() { goto GAhtJ; KS9Sz: $data["\x6b\x65\154\141\163"] = $kelas; goto lFLyq; zFnrt: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto gURti; AiVrk: $this->load->view("\160\x65\x6e\147\x75\155\x75\x6d\141\156\x2f\x64\x61\164\141"); goto X3oTq; X3oTq: $this->load->view("\155\x65\x6d\x62\145\x72\x73\57\x67\x75\x72\x75\57\x74\x65\x6d\x70\154\141\x74\x65\x73\57\x66\x6f\x6f\x74\x65\162"); goto Pi9KE; hcnQb: djEa4: goto CB0fN; gURti: $data["\x67\x75\162\165"] = $guru; goto mr1rv; nwhTX: $data["\147\165\162\x75\163"] = $this->dropdown->getAllGuru(); goto B8a2_; hJBVR: $this->load->view("\x6d\145\155\142\145\x72\x73\x2f\147\x75\162\165\x2f\164\x65\155\160\154\x61\164\145\163\57\x68\x65\141\144\x65\x72", $data); goto AiVrk; Ja7nx: $data["\x73\165\142\x6a\165\144\x75\x6c"] = "\120\145\156\x67\x75\x6d\165\x6d\141\x6e\40\x41\x6e\144\x61"; goto zFnrt; p5tCs: $this->load->view("\160\145\x6e\x67\x75\155\x75\155\x61\156\x2f\x64\x61\x74\x61"); goto IqOBo; e9gcR: if ($this->ion_auth->is_admin()) { goto etFBO; } goto Ja7nx; UudP8: $data["\160\x65\156\x67\x75\155\x75\x6d\141\156\x73"] = $this->post->getPostUser(0); goto NUcKv; Qa19g: $data["\160\162\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto UudP8; GAhtJ: $user = $this->ion_auth->user()->row(); goto dcZin; FqqCl: $data["\163\155\164\x5f\141\x63\164\x69\x76\x65"] = $smt; goto nwhTX; p4NLU: $data["\x74\x70\137\x61\143\164\151\166\145"] = $tp; goto pTULr; lFLyq: $data["\162\x75\x6e\156\x69\156\147\137\164\x65\170\164"] = $this->dashboard->getRunningText(); goto e9gcR; FOTfI: $data["\163\165\x62\152\x75\x64\x75\x6c"] = "\x53\x65\155\165\x61\x20\x50\x65\x6e\147\x75\155\165\x6d\x61\156"; goto Qa19g; KANBY: $tp = $this->master->getTahunActive(); goto mAX53; B8a2_: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto KS9Sz; pnmH7: etFBO: goto FOTfI; pTULr: $data["\163\155\164"] = $this->dashboard->getSemester(); goto FqqCl; DODjS: $data["\164\160"] = $this->dashboard->getTahun(); goto p4NLU; Pi9KE: goto djEa4; goto pnmH7; IqOBo: $this->load->view("\x5f\x74\145\x6d\160\154\141\164\x65\x73\57\144\141\x73\150\142\x6f\x61\x72\x64\x2f\137\146\157\x6f\x74\x65\x72"); goto hcnQb; mr1rv: $data["\160\145\x6e\x67\x75\155\165\x6d\141\156\163"] = $this->post->getPostUser($guru->id_guru); goto hJBVR; dcZin: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\144\165\154" => "\120\x65\156\147\x75\155\x75\155\141\156", "\x73\x65\164\164\151\x6e\147" => $this->dashboard->getSetting()]; goto KANBY; NUcKv: $this->load->view("\x5f\164\145\x6d\x70\x6c\x61\x74\x65\x73\x2f\x64\141\163\x68\x62\x6f\x61\x72\x64\x2f\x5f\x68\145\x61\144\x65\x72", $data); goto p5tCs; mAX53: $smt = $this->master->getSemesterActive(); goto DODjS; CB0fN: } public function kepada($kepada, $id_kepada = null) { goto Csv8v; IUxvO: $this->load->view("\x6d\145\x6d\142\x65\x72\x73\x2f\147\x75\162\165\x2f\164\x65\x6d\160\x6c\x61\164\x65\x73\57\146\x6f\x6f\x74\145\x72"); goto a_smg; QqhQO: $data["\163\155\x74\x5f\x61\x63\x74\151\x76\x65"] = $smt; goto ZZu3B; JgNz5: $comments = []; goto MsUaA; ZZu3B: $data["\x67\x75\162\x75\x73"] = $this->dropdown->getAllGuru(); goto ywETp; zR6m9: $pengumumans = $this->db->get()->result(); goto JgNz5; gQPlS: $data["\164\x70\x5f\x61\143\x74\151\166\x65"] = $tp; goto Hh9ez; ghzvI: if ($kepada === "\x73\145\155\x75\x61\137\x73\x69\x73\x77\x61") { goto U40Y0; } goto TuxtC; OiyY_: if ($kepada === "\163\145\x6d\x75\x61\137\147\165\x72\x75") { goto dWhj0; } goto ghzvI; rCWu8: $data["\x63\x6f\x6d\155\x65\156\x74\163"] = $comments; goto KoIGG; IRu8m: $data["\x6b\x65\160\141\144\x61"] = "\x53\x65\155\x75\x61\x20\x47\x75\162\x75"; goto A90U9; zfE7W: $this->db->order_by("\141\56\x74\141\156\x67\147\x61\154", "\144\145\163\x63"); goto zR6m9; a_smg: goto uH73A; goto r0mDf; OTCDO: $this->load->view("\x70\x65\156\147\165\155\165\x6d\x61\156\x2f\144\x61\x74\x61"); goto IUxvO; dXur3: $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\164\145\163\57\x64\141\x73\150\x62\157\x61\162\144\x2f\x5f\146\157\x6f\x74\145\x72"); goto o8CiE; amJxv: $data["\x6b\x65\154\141\x73"] = $kelas; goto gLgtP; mTn48: foreach ($pengumumans as $pengumuman) { goto t2JxV; B49hH: $this->db->order_by("\141\x2e\x74\141\x6e\x67\x67\141\x6c", "\144\145\x73\x63"); goto IvfcP; o7Elj: $comments[$pengumuman->id_post] = $comment; goto H7S36; FqOmJ: foreach ($comment as $comm) { goto hFIVS; Wb08x: UoSys: goto PwmPM; ensMT: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto Wb08x; wMm7P: $this->db->where("\x61\x2e\151\144\x5f\143\x6f\155\x6d\x65\156\164", $comm->id_comment); goto ensMT; hFIVS: $this->db->select("\x61\56\52\x2c\40\x62\x2e\156\x61\155\141\137\147\165\x72\x75\x2c\40\142\56\x66\x6f\164\157"); goto Wqez1; uvaA6: $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\x67\165\x72\165\x20\x62", "\141\x2e\144\141\x72\x69\75\142\x2e\151\144\x5f\147\165\x72\165", "\154\145\146\164"); goto QXhCp; Wqez1: $this->db->from("\x70\x6f\x73\x74\x5f\x72\145\x70\154\171\x20\141"); goto uvaA6; QXhCp: $this->db->order_by("\x61\56\164\x61\156\147\x67\141\154", "\x64\x65\163\x63"); goto wMm7P; PwmPM: } goto LaVJF; LaVJF: WUwdS: goto o7Elj; t2JxV: $this->db->select("\141\56\52\54\x20\x62\x2e\x6e\x61\x6d\x61\x5f\147\x75\x72\165\x2c\40\x62\56\146\x6f\x74\x6f"); goto NHoxN; H7S36: gFmMe: goto TTBD7; wJky8: $comment = $this->db->get()->result(); goto FqOmJ; BVT4J: $this->db->join("\155\x61\x73\164\x65\x72\x5f\x67\165\162\x75\40\x62", "\141\56\144\141\x72\151\75\x62\x2e\151\x64\137\147\x75\162\x75", "\154\x65\146\164"); goto B49hH; IvfcP: $this->db->where("\x61\x2e\151\x64\137\x70\x6f\x73\164", $pengumuman->id_post); goto wJky8; NHoxN: $this->db->from("\x70\x6f\x73\164\x5f\x63\x6f\155\155\x65\x6e\x74\x73\40\141"); goto BVT4J; TTBD7: } goto c7l_3; c7l_3: BgtDR: goto T7Kgh; vo37k: $this->load->view("\x6d\x65\x6d\142\145\162\163\x2f\x67\x75\162\x75\57\x74\145\155\x70\x6c\x61\x74\x65\163\57\150\x65\141\144\145\x72", $data); goto OTCDO; maeSU: dWhj0: goto IRu8m; Hh9ez: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto QqhQO; KoIGG: $data["\142\x61\154\x61\163\141\x6e\x73"] = $balasan; goto OiyY_; Csv8v: $user = $this->ion_auth->user()->row(); goto dFmVT; yEM2L: $data["\x74\160"] = $this->dashboard->getTahun(); goto gQPlS; PZneC: $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x67\165\162\165\x20\142", "\x61\56\x64\x61\162\151\75\x62\56\x69\144\x5f\x67\x75\162\165", "\x6c\x65\x66\164"); goto zfE7W; out20: if ($this->ion_auth->is_admin()) { goto veyMG; } goto L0xO1; gLgtP: $this->db->select("\x61\x2e\52\x2c\40\x62\x2e\156\x61\155\141\x5f\x67\x75\162\165\x2c\x20\142\56\x66\157\x74\x6f"); goto kT799; L0xO1: $data["\x67\165\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto vo37k; g1KCP: $data["\x6b\x65\160\x61\x64\x61"] = "\123\x65\155\x75\x61\x20\123\151\x73\167\141"; goto gihOO; dFmVT: $data = ["\x75\163\145\x72" => $user, "\152\165\144\165\154" => "\120\x65\156\x67\x75\155\165\155\x61\x6e", "\163\165\142\152\165\x64\165\x6c" => "\x53\145\x6d\x75\x61\x20\120\145\x6e\x67\165\155\x75\155\x61\156", "\x73\145\x74\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto bmU9T; MsUaA: $balasan = []; goto mTn48; TuxtC: $data["\x6b\145\160\x61\144\x61"] = urldecode($kepada); goto UcCso; kT799: $this->db->from("\160\157\x73\164\40\141"); goto PZneC; r0mDf: veyMG: goto jKysD; bmU9T: $tp = $this->master->getTahunActive(); goto oj5DC; jKysD: $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto VXxM5; DynEu: $this->load->view("\x70\145\x6e\147\x75\x6d\165\x6d\x61\x6e\x2f\144\141\x74\x61"); goto dXur3; gihOO: sDVeB: goto out20; VXxM5: $this->load->view("\137\x74\x65\155\160\x6c\141\164\x65\163\x2f\144\141\x73\x68\142\x6f\x61\162\144\57\x5f\x68\145\141\144\x65\x72", $data); goto DynEu; T7Kgh: $data["\x70\x65\156\147\165\155\x75\x6d\141\x6e\163"] = $pengumumans; goto rCWu8; r0uDK: U40Y0: goto g1KCP; A90U9: goto sDVeB; goto r0uDK; ywETp: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto amJxv; o8CiE: uH73A: goto RivbX; UcCso: goto sDVeB; goto maeSU; oj5DC: $smt = $this->master->getSemesterActive(); goto yEM2L; RivbX: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto SRoOE; sn3K4: $this->db->limit($perPage, $offset); goto XSXm4; U8sTl: $this->db->from("\160\x6f\163\164\137\143\x6f\155\x6d\x65\x6e\164\x73\40\141"); goto YW3pT; zssJo: $this->db->query("\123\x45\x54\40\123\x51\x4c\x5f\x42\x49\107\x5f\123\105\114\105\x43\x54\123\x3d\x31"); goto uG0Mm; sG8DM: $this->db->where("\x61\x2e\151\x64\x5f\x70\157\x73\x74", $id_post); goto sn3K4; n2GDU: $offset = $page * $perPage; goto zssJo; XSXm4: $comment = $this->db->get()->result(); goto XJeaa; XJeaa: $this->output_json($comment); goto rlBi1; uG0Mm: $this->db->select("\141\56\52\x2c\40\x62\x2e\x6e\141\155\x61\x5f\x67\x75\x72\x75\54\40\x62\56\146\x6f\164\157\54\x20\x63\56\156\141\x6d\x61\40\141\163\x20\156\141\x6d\x61\x5f\x73\151\163\167\141\x2c\x20\143\56\146\x6f\x74\157\40\x61\x73\40\x66\157\x74\x6f\x5f\163\x69\x73\x77\x61\54\x20\x28\123\x45\114\x45\x43\x54\40\x43\x4f\125\x4e\x54\50\x70\x6f\x73\164\x5f\162\x65\160\x6c\x79\x2e\x69\144\137\162\145\x70\154\x79\51\x20\106\122\x4f\x4d\40\160\x6f\163\164\x5f\x72\x65\160\154\x79\40\x57\110\105\x52\105\40\141\56\x69\144\x5f\143\x6f\x6d\x6d\x65\156\x74\x20\x3d\40\x70\157\x73\164\137\x72\145\160\154\x79\56\151\x64\x5f\x63\157\x6d\155\145\156\x74\51\40\x41\x53\40\152\x6d\x6c"); goto U8sTl; YW3pT: $this->db->join("\155\x61\163\164\x65\x72\137\147\x75\162\165\40\142", "\141\x2e\x64\141\x72\151\75\142\x2e\151\144\137\147\165\x72\x75", "\154\x65\146\164"); goto clz0t; clz0t: $this->db->join("\155\x61\x73\x74\x65\162\x5f\x73\x69\163\x77\x61\x20\x63", "\141\x2e\144\141\x72\x69\x3d\143\x2e\151\x64\137\x73\x69\163\167\x61", "\x6c\x65\x66\x74"); goto HnznC; HnznC: $this->db->order_by("\141\56\164\x61\156\147\x67\141\x6c", "\144\x65\x73\143"); goto sG8DM; SRoOE: $perPage = 5; goto n2GDU; rlBi1: } public function getReplies($id_comment, $page) { goto wLWqR; TsPLc: $this->db->from("\160\157\163\164\x5f\x72\x65\x70\154\171\40\141"); goto US3wr; wLWqR: $perPage = 5; goto LHLkS; NT0UD: $this->db->where("\141\56\151\144\x5f\143\x6f\155\155\x65\x6e\164", $id_comment); goto aTBJb; dfYH4: $this->db->join("\155\x61\x73\164\145\x72\x5f\163\151\x73\x77\x61\x20\143", "\x61\x2e\x64\141\x72\x69\75\x63\56\x69\x64\x5f\x73\x69\x73\x77\141", "\154\145\x66\164"); goto jLUpL; US3wr: $this->db->join("\x6d\x61\163\x74\x65\162\137\147\x75\x72\x75\x20\x62", "\x61\x2e\144\141\x72\151\x3d\x62\x2e\151\x64\x5f\147\x75\x72\165", "\154\145\x66\164"); goto dfYH4; aTBJb: $this->db->limit($perPage, $offset); goto fUwRa; fUwRa: $replies = $this->db->get()->result(); goto UBNUo; lcQ86: $this->db->select("\x61\56\x2a\x2c\40\142\x2e\156\x61\155\x61\x5f\x67\x75\162\165\x2c\x20\142\x2e\x66\157\x74\x6f\x2c\40\143\x2e\x6e\x61\x6d\x61\x20\141\163\x20\156\x61\x6d\x61\137\x73\x69\163\167\x61\x2c\x20\143\56\146\x6f\164\157\40\x61\x73\40\146\157\x74\157\x5f\x73\151\163\x77\x61"); goto TsPLc; Tx0Z9: $this->db->query("\123\x45\x54\x20\x53\121\x4c\137\x42\111\x47\x5f\x53\x45\x4c\x45\103\x54\123\75\61"); goto lcQ86; LHLkS: $offset = $page * $perPage; goto Tx0Z9; UBNUo: $this->output_json($replies); goto ypg3W; jLUpL: $this->db->order_by("\141\x2e\164\141\156\x67\147\x61\154", "\144\x65\x73\143"); goto NT0UD; ypg3W: } public function save() { goto aFO06; dgKED: $dari = $this->input->post("\144\141\x72\x69"); goto l1e3u; aFO06: $kepada = json_decode(json_encode($this->input->post("\x6b\145\160\141\144\141\x5b\x5d", true))); goto dgKED; l1e3u: $data = ["\x6b\145\160\x61\144\x61" => serialize($kepada), "\144\x61\162\151" => $dari, "\144\x61\162\x69\137\x67\162\x6f\165\x70" => $dari == "\60" ? "\61" : "\x32", "\164\145\170\x74" => $this->input->post("\x74\145\x78\x74")]; goto h4J5i; wCRiY: $this->output_json($insert); goto ue7E9; h4J5i: $insert = $this->db->replace("\x70\x6f\163\x74", $data); goto wCRiY; ue7E9: } public function saveKomentar() { goto EYyhJ; LMGSR: $this->db->order_by("\141\x2e\x74\x61\x6e\147\147\x61\x6c", "\144\145\163\x63"); goto sgcOO; UOT4X: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto K6kNY; kXz0p: $this->db->select("\141\56\x2a\54\x20\142\56\x6e\x61\155\x61\137\x67\x75\162\x75\54\x20\142\56\x66\x6f\164\x6f\x2c\40\143\56\x6e\x61\155\141\x20\x61\163\x20\156\x61\x6d\141\137\x73\x69\x73\167\x61\54\x20\143\56\146\x6f\164\157\x20\141\x73\40\x66\157\x74\157\137\x73\x69\x73\x77\141\54\x20\x28\123\105\114\x45\103\x54\x20\x43\117\125\x4e\x54\50\160\x6f\x73\164\x5f\162\145\x70\x6c\171\56\x69\144\x5f\162\x65\x70\154\x79\51\40\x46\122\x4f\115\x20\x70\157\163\164\137\162\x65\160\x6c\171\x20\x57\x48\x45\122\x45\x20\x61\56\151\144\x5f\143\157\155\x6d\x65\x6e\164\40\75\x20\x70\157\x73\164\137\162\145\x70\154\171\x2e\151\144\137\143\x6f\155\x6d\145\x6e\164\x29\x20\x41\x53\x20\152\155\x6c"); goto kykUN; sgcOO: $this->db->where("\141\56\x69\x64\x5f\143\157\x6d\155\145\x6e\x74", $id); goto Ww_nt; ii2xM: $dari_group = 1; goto C1ZgA; C1ZgA: if ($this->ion_auth->is_admin()) { goto ThQRj; } goto NCMb9; CX_7u: $this->output_json($comment); goto sSMiq; aBMKf: $this->db->query("\123\x45\x54\40\123\x51\x4c\137\102\x49\x47\x5f\x53\105\x4c\x45\103\124\123\75\61"); goto kXz0p; kykUN: $this->db->from("\x70\157\x73\164\137\143\157\x6d\155\x65\x6e\x74\163\40\141"); goto wbN78; ssB3o: $data = ["\151\144\137\x70\x6f\163\x74" => $this->input->post("\x69\144\137\160\x6f\163\164"), "\x64\141\162\x69" => $dari, "\144\141\162\151\x5f\147\162\157\165\x70" => $dari_group, "\x74\145\x78\164" => $this->input->post("\164\x65\x78\164")]; goto SnAX5; UgwSy: $id = $this->db->insert_id(); goto aBMKf; aj47Y: $tp = $this->master->getTahunActive(); goto BtPS3; NCMb9: $user = $this->ion_auth->user()->row(); goto aj47Y; EYyhJ: $dari = "\x30"; goto ii2xM; Ww_nt: $comment = $this->db->get()->result(); goto CX_7u; SnAX5: $insert = $this->db->replace("\160\157\x73\164\137\143\157\155\155\145\x6e\164\163", $data); goto UgwSy; BtPS3: $smt = $this->master->getSemesterActive(); goto UOT4X; VMw86: $this->db->join("\x6d\141\163\164\x65\162\137\163\x69\x73\x77\x61\40\x63", "\x61\x2e\x64\141\x72\151\x3d\x63\56\151\144\137\163\151\163\167\141", "\x6c\x65\x66\164"); goto LMGSR; z1jC_: $dari_group = 2; goto tRBSm; K6kNY: $dari = $guru->id_guru; goto z1jC_; wbN78: $this->db->join("\x6d\141\163\x74\145\162\x5f\147\x75\x72\165\x20\142", "\x61\x2e\x64\x61\162\x69\x3d\142\x2e\x69\x64\137\x67\165\162\165", "\x6c\145\x66\x74"); goto VMw86; tRBSm: ThQRj: goto ssB3o; sSMiq: } public function saveBalasan() { goto yl8gl; xLh8y: if ($this->ion_auth->is_admin()) { goto PAIre; } goto wbHhP; vFNGV: $this->db->select("\x61\x2e\52\x2c\x20\142\56\x6e\x61\155\x61\x5f\x67\x75\x72\x75\54\x20\142\56\146\157\164\x6f\54\40\143\56\x6e\141\x6d\141\x20\x61\x73\40\x6e\x61\x6d\141\x5f\x73\x69\163\167\x61\x2c\40\x63\x2e\146\x6f\x74\157\x20\x61\163\x20\146\x6f\164\x6f\x5f\163\151\x73\x77\x61"); goto ILBP_; nbck5: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto O_C8H; q4r8A: PAIre: goto dMkJY; fo8Tk: $dari_group = 1; goto xLh8y; PsuUL: $tp = $this->master->getTahunActive(); goto e5Gc4; ILBP_: $this->db->from("\x70\157\x73\x74\x5f\x72\x65\x70\154\171\40\x61"); goto KUVX5; yl8gl: $dari = "\60"; goto fo8Tk; wbHhP: $user = $this->ion_auth->user()->row(); goto PsuUL; lcK3n: $this->db->join("\x6d\141\163\x74\x65\x72\x5f\x73\x69\163\x77\x61\x20\x63", "\141\x2e\x64\x61\x72\x69\75\143\x2e\x69\x64\x5f\x73\151\163\167\x61", "\x6c\145\x66\x74"); goto rMDyp; qRptr: $this->db->query("\x53\x45\x54\x20\x53\x51\114\x5f\102\111\107\137\x53\x45\114\105\103\124\123\x3d\61"); goto vFNGV; zPr_9: $this->output_json($replies); goto bKsbk; KUVX5: $this->db->join("\155\141\163\x74\x65\x72\x5f\x67\x75\x72\x75\40\x62", "\141\x2e\x64\x61\x72\x69\x3d\x62\x2e\x69\x64\137\147\x75\x72\165", "\154\x65\146\x74"); goto lcK3n; er8Gx: $id = $this->db->insert_id(); goto qRptr; e5Gc4: $smt = $this->master->getSemesterActive(); goto nbck5; dMkJY: $data = ["\x69\144\x5f\143\157\155\x6d\x65\156\164" => $this->input->post("\151\144\x5f\143\x6f\x6d\155\x65\156\x74"), "\144\141\162\x69" => $dari, "\x64\141\x72\x69\x5f\147\x72\157\x75\160" => $dari_group, "\164\x65\170\164" => $this->input->post("\164\x65\170\164")]; goto REmgq; REmgq: $insert = $this->db->replace("\x70\x6f\163\164\x5f\162\145\160\154\x79", $data); goto er8Gx; rMDyp: $this->db->order_by("\141\x2e\x74\x61\x6e\x67\x67\141\154", "\144\x65\163\143"); goto kGWVE; sFbtK: $replies = $this->db->get()->result(); goto zPr_9; on6J7: $dari_group = 2; goto q4r8A; O_C8H: $dari = $guru->id_guru; goto on6J7; kGWVE: $this->db->where("\141\x2e\x69\144\137\x72\145\160\x6c\171", $id); goto sFbtK; bKsbk: } public function hapusPost($id_post) { goto pihh0; SWQ_t: $this->output_json($deleted); goto bRICo; pPl09: $deleted = $this->db->delete("\160\157\163\x74"); goto GOfx1; pihh0: $this->db->trans_start(); goto uENQF; cjIbW: $this->db->where("\x69\x64\137\160\x6f\163\164", $id_post); goto pPl09; GOfx1: bWV3n: goto TVlzl; C8EWu: if (!$this->db->delete("\x70\157\163\164\137\143\x6f\x6d\155\145\x6e\x74\x73")) { goto bWV3n; } goto cjIbW; C1to3: SAubn: goto HgPq9; HgPq9: $this->db->where("\151\x64\x5f\160\157\163\x74", $id_post); goto C8EWu; lmC2q: foreach ($comments as $comment) { goto vt99I; DtoLh: $deleted["\x62\141\x6c\141\163\x61\x6e"] = $this->db->delete("\160\157\x73\164\137\x72\x65\160\x6c\x79"); goto UsYBb; vt99I: $this->db->where("\x69\144\x5f\143\157\x6d\x6d\x65\156\x74", $comment->id_comment); goto DtoLh; UsYBb: euL3h: goto vj5gp; vj5gp: } goto C1to3; TVlzl: $this->db->trans_complete(); goto SWQ_t; uENQF: $comments = $this->post->getIdComments($id_post); goto lmC2q; bRICo: } public function hapusKomentar($id_comment) { goto fBcWv; ywjO_: $this->db->where("\151\144\137\143\157\x6d\155\145\x6e\x74", $id_comment); goto VaVcC; fBcWv: $this->db->trans_start(); goto ywjO_; Jx3aL: $this->db->trans_complete(); goto P1hzx; O41fn: $this->db->where("\x69\144\x5f\143\157\x6d\155\x65\156\164", $id_comment); goto pfQZX; pfQZX: $deleted["\x62\141\x6c\141\163\141\156"] = $this->db->delete("\x70\x6f\163\164\137\x72\145\160\154\x79"); goto Jx3aL; VaVcC: $deleted["\153\157\155\x65\156\x74\x61\162"] = $this->db->delete("\160\157\163\x74\137\x63\x6f\x6d\155\x65\x6e\x74\x73"); goto O41fn; P1hzx: $this->output_json($deleted); goto uLnnS; uLnnS: } public function hapusBalasan($id_reply) { goto paMrc; K2k87: $this->db->trans_complete(); goto zddZ3; zddZ3: $this->output_json($deleted); goto Cm3mJ; paMrc: $this->db->trans_start(); goto kYGFF; JIpYK: $deleted["\142\x61\x6c\x61\163\x61\156"] = $this->db->delete("\160\157\163\x74\x5f\162\x65\x70\154\x79"); goto K2k87; kYGFF: $this->db->where("\151\x64\x5f\162\145\160\154\x79", $id_reply); goto JIpYK; Cm3mJ: } public function getRunningText() { $data["\162\x75\x6e\x6e\x69\x6e\x67\137\x74\145\x78\x74"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto H9Det; Lr6cm: $data["\163\x74\141\164\165\163"] = $updates; goto frMxQ; H9Det: $input = json_decode($this->input->post("\x74\x65\170\164", true)); goto Ajol4; frMxQ: $this->output_json($data); goto Njxqu; aPbGZ: sQGNp: goto Lr6cm; eXVIQ: foreach ($input as $d) { goto cSPWw; eehe8: $update = $this->db->replace("\162\x75\156\156\x69\x6e\x67\x5f\x74\145\170\x74", $data); goto RWCLG; cSPWw: $data = ["\151\x64\x5f\x74\x65\170\164" => $d->id_text, "\164\x65\170\164" => $d->text]; goto eehe8; RWCLG: array_push($updates, $update); goto AWArP; AWArP: W1B2W: goto KZmnw; KZmnw: } goto aPbGZ; Ajol4: $updates = []; goto eXVIQ; Njxqu: } public function hapusRunningText($id) { goto L7orF; L7orF: $this->db->where("\151\x64\137\164\145\170\x74", $id); goto bJ2ki; YFP8G: $this->output_json($deleted); goto PvBwF; bJ2ki: $deleted = $this->db->delete("\x72\x75\x6e\x6e\x69\156\147\x5f\164\145\170\164"); goto YFP8G; PvBwF: } }
