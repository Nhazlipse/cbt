<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto HpPjS; HpPjS: parent::__construct(); goto RsOnk; TXkY_: redirect("\141\x75\164\150"); goto DpLXO; RsOnk: if (!$this->ion_auth->logged_in()) { goto x5vxG; } goto qAdyG; tRd42: show_error("\x48\x61\156\x79\x61\40\x41\x64\x6d\151\156\151\163\164\x72\x61\164\157\162\40\144\x61\156\40\147\165\162\165\x20\x79\141\156\147\x20\x64\x69\x62\x65\162\x69\40\x68\141\153\40\x75\x6e\164\x75\x6b\40\155\x65\156\x67\x61\x6b\163\x65\163\x20\x68\x61\154\141\155\141\156\40\151\x6e\151\54\40\x3c\141\x20\x68\x72\145\x66\75\x22" . base_url("\x64\141\x73\x68\x62\157\141\162\144") . "\42\x3e\x4b\x65\x6d\142\141\154\x69\x20\153\x65\x20\x6d\x65\156\x75\x20\x61\x77\x61\154\74\x2f\141\x3e", 403, "\x41\x6b\x73\x65\163\x20\124\145\x72\x6c\x61\x72\x61\156\x67"); goto yXOzb; EegRk: $this->load->model("\120\x6f\163\x74\x5f\155\157\x64\145\x6c", "\x70\x6f\x73\164"); goto s_Wwv; jTS0v: $this->load->model("\x4d\141\163\x74\145\162\137\155\x6f\x64\145\x6c", "\155\x61\x73\164\145\162"); goto pRlQi; qAdyG: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\165"))) { goto ZCa6B; } goto tRd42; hfX1g: $this->load->model("\113\145\154\x61\x73\137\x6d\157\144\145\x6c", "\153\145\154\x61\x73"); goto L_9sn; DpLXO: kN2Qh: goto s3YSY; Z5hyb: x5vxG: goto TXkY_; s3YSY: $this->load->library(["\x64\141\164\141\x74\x61\142\x6c\x65\163", "\x66\157\x72\x6d\x5f\166\141\x6c\x69\144\x61\x74\151\157\156"]); goto jTS0v; pRlQi: $this->load->model("\x44\141\x73\x68\142\157\x61\162\x64\x5f\155\157\144\x65\x6c", "\144\141\x73\150\142\x6f\141\162\x64"); goto hfX1g; L_9sn: $this->load->model("\x44\x72\x6f\x70\144\x6f\167\156\137\x6d\x6f\144\x65\x6c", "\x64\162\x6f\x70\144\157\167\156"); goto EegRk; yXOzb: ZCa6B: goto YH0p_; YH0p_: goto kN2Qh; goto Z5hyb; s_Wwv: $this->form_validation->set_error_delimiters('', ''); goto dEw1Z; dEw1Z: } public function output_json($data, $encode = true) { goto Bt8y8; XzPPw: $data = json_encode($data); goto nrMHY; nrMHY: s2rKC: goto fq93Z; fq93Z: $this->output->set_content_type("\x61\x70\160\x6c\x69\143\x61\x74\x69\157\156\x2f\x6a\163\x6f\156")->set_output($data); goto pF43g; Bt8y8: if (!$encode) { goto s2rKC; } goto XzPPw; pF43g: } public function index() { goto g164m; d0Jqy: $this->load->view("\x70\145\156\x67\x75\155\x75\x6d\141\x6e\57\x64\141\x74\x61"); goto xtQPy; g164m: $user = $this->ion_auth->user()->row(); goto zJOr7; q61e7: $tp = $this->master->getTahunActive(); goto FQuVQ; QB3Kb: $data["\x70\x65\156\147\165\x6d\165\155\x61\156\163"] = $this->post->getPostUser(0); goto oVS6l; FQuVQ: $smt = $this->master->getSemesterActive(); goto hcNYW; oVS6l: $this->load->view("\137\x74\x65\x6d\x70\154\x61\164\145\163\57\x64\141\x73\150\142\x6f\x61\x72\144\x2f\137\150\x65\x61\x64\145\162", $data); goto d0Jqy; LOjd3: $data["\163\x6d\x74\137\141\x63\164\x69\166\145"] = $smt; goto xd5q0; OHD7_: $data["\162\165\x6e\156\151\156\147\x5f\164\145\170\164"] = $this->dashboard->getRunningText(); goto fcLv3; KHpVb: $data["\x67\165\x72\x75"] = $guru; goto RQrYV; xiA3V: goto IM_MT; goto byQ5M; hcNYW: $data["\164\x70"] = $this->dashboard->getTahun(); goto ukuHY; gC5lM: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto NSJCP; xtQPy: $this->load->view("\x5f\164\145\x6d\160\154\141\164\x65\163\57\144\141\163\150\142\157\141\x72\144\x2f\137\146\x6f\157\x74\145\162"); goto fM0s1; FvzIw: $data["\163\165\x62\152\x75\144\x75\x6c"] = "\120\145\x6e\147\165\155\165\155\x61\x6e\40\101\156\144\x61"; goto NtNoL; ukuHY: $data["\164\x70\x5f\x61\143\x74\x69\x76\145"] = $tp; goto BciCH; BciCH: $data["\163\155\164"] = $this->dashboard->getSemester(); goto LOjd3; uEADQ: $data["\x73\x75\x62\152\x75\x64\165\154"] = "\x53\145\155\x75\x61\x20\120\x65\156\x67\165\155\165\x6d\x61\156"; goto QQSQW; QQSQW: $data["\x70\x72\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto QB3Kb; zJOr7: $data = ["\165\x73\145\162" => $user, "\x6a\165\x64\165\154" => "\120\x65\x6e\147\x75\155\x75\155\x61\x6e", "\x73\145\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto q61e7; NtNoL: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto KHpVb; cE8Ka: $this->load->view("\x6d\145\155\x62\x65\x72\163\x2f\x67\165\162\x75\57\164\145\x6d\160\154\141\164\x65\163\x2f\x68\x65\x61\144\x65\162", $data); goto ygT3T; ygT3T: $this->load->view("\x70\x65\156\147\165\155\x75\155\141\156\57\x64\x61\x74\x61"); goto e2CR9; fcLv3: if ($this->ion_auth->is_admin()) { goto OvtEd; } goto FvzIw; RQrYV: $data["\x70\x65\156\147\165\x6d\165\x6d\141\156\x73"] = $this->post->getPostUser($guru->id_guru); goto cE8Ka; byQ5M: OvtEd: goto uEADQ; NSJCP: $data["\x6b\x65\x6c\x61\x73"] = $kelas; goto OHD7_; e2CR9: $this->load->view("\155\145\155\142\145\x72\x73\57\147\x75\162\x75\57\x74\145\155\x70\154\141\x74\x65\163\x2f\146\157\157\164\145\x72"); goto xiA3V; xd5q0: $data["\147\165\162\165\x73"] = $this->dropdown->getAllGuru(); goto gC5lM; fM0s1: IM_MT: goto pAHmo; pAHmo: } public function kepada($kepada, $id_kepada = null) { goto ppH73; w5jtr: $data["\x6b\145\x70\141\144\141"] = "\x53\x65\x6d\x75\141\40\x47\x75\162\x75"; goto au7kt; hHIgZ: $this->load->view("\155\x65\155\x62\145\x72\163\x2f\147\165\x72\x75\x2f\x74\x65\155\x70\x6c\x61\164\x65\x73\57\150\145\141\144\145\162", $data); goto s_AIo; LMJsY: $tp = $this->master->getTahunActive(); goto f7QTv; d8Lkn: $this->db->select("\x61\x2e\52\x2c\x20\x62\56\x6e\x61\x6d\141\x5f\x67\x75\x72\x75\54\40\x62\x2e\x66\157\x74\x6f"); goto DJxva; s7UCA: xWF5g: goto ZTKE3; Eqzt2: foreach ($pengumumans as $pengumuman) { goto Sy3CG; VJk0K: CmvMZ: goto QFxPF; FSxiz: $this->db->join("\x6d\141\x73\164\145\x72\x5f\x67\x75\x72\165\40\142", "\141\56\x64\141\x72\151\75\142\56\x69\x64\x5f\x67\x75\x72\165", "\154\145\x66\164"); goto dIoWx; dIoWx: $this->db->order_by("\x61\56\164\141\156\147\147\x61\154", "\x64\145\x73\x63"); goto lAJ5O; QFxPF: $comments[$pengumuman->id_post] = $comment; goto z5LwJ; FAMFn: foreach ($comment as $comm) { goto C8IH1; eVUqj: $this->db->join("\155\141\x73\x74\145\162\137\147\x75\162\x75\40\142", "\x61\56\x64\141\x72\x69\75\x62\56\x69\x64\x5f\x67\x75\162\165", "\154\145\146\x74"); goto Fx7OB; C8IH1: $this->db->select("\x61\x2e\52\x2c\x20\x62\x2e\x6e\x61\155\141\x5f\147\165\x72\165\x2c\x20\142\56\x66\157\164\x6f"); goto Z3Gq7; Z3Gq7: $this->db->from("\160\157\163\x74\x5f\x72\x65\x70\x6c\171\40\x61"); goto eVUqj; Fx7OB: $this->db->order_by("\141\56\164\x61\156\x67\147\141\154", "\x64\145\163\x63"); goto GCKjs; GKFFZ: WAMZV: goto u0Bhv; GCKjs: $this->db->where("\141\x2e\x69\x64\137\143\x6f\x6d\155\145\x6e\x74", $comm->id_comment); goto wKReU; wKReU: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto GKFFZ; u0Bhv: } goto VJk0K; mKOCa: $comment = $this->db->get()->result(); goto FAMFn; Sy3CG: $this->db->select("\141\x2e\52\x2c\40\142\x2e\x6e\x61\155\x61\x5f\x67\x75\162\x75\x2c\x20\142\56\x66\x6f\x74\157"); goto Kj6G5; lAJ5O: $this->db->where("\141\x2e\x69\144\x5f\x70\157\x73\164", $pengumuman->id_post); goto mKOCa; Kj6G5: $this->db->from("\160\x6f\x73\164\137\x63\x6f\x6d\155\x65\156\164\163\x20\x61"); goto FSxiz; z5LwJ: sISkj: goto jgrn3; jgrn3: } goto Lo0Vd; CE1yi: JUSZl: goto oiu5H; A_lg6: $this->db->order_by("\141\x2e\164\141\x6e\147\x67\x61\154", "\x64\145\x73\143"); goto cHbYe; Z_dcY: $data = ["\x75\x73\x65\x72" => $user, "\x6a\165\144\x75\x6c" => "\120\x65\156\x67\165\x6d\165\x6d\141\x6e", "\x73\165\142\152\x75\x64\x75\154" => "\123\145\155\165\x61\40\120\145\156\147\165\155\165\x6d\141\156", "\163\145\164\164\151\156\147" => $this->dashboard->getSetting()]; goto LMJsY; Lo0Vd: kkM4H: goto d8Cui; oiu5H: if ($this->ion_auth->is_admin()) { goto RMHau; } goto DAPib; lrxRs: $this->load->view("\160\x65\x6e\147\165\x6d\x75\155\x61\x6e\57\x64\x61\164\x61"); goto E79zh; jSfG5: fePJY: goto XgbB6; rIQlz: $data["\142\141\154\141\x73\x61\x6e\163"] = $balasan; goto Px2gG; SLdRo: $balasan = []; goto Eqzt2; bYTDO: $data["\164\160"] = $this->dashboard->getTahun(); goto nuJt0; p8qon: goto fePJY; goto CrN1Q; ZACTu: MJYaW: goto w5jtr; ZTKE3: $data["\153\x65\x70\x61\144\x61"] = "\x53\145\155\x75\141\40\123\x69\163\167\141"; goto CE1yi; f2xD7: $data["\x67\x75\x72\165\163"] = $this->dropdown->getAllGuru(); goto MBwWp; MBwWp: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto R8SNB; cHbYe: $pengumumans = $this->db->get()->result(); goto d4R1r; MCnd_: $this->db->join("\155\x61\x73\x74\x65\x72\137\x67\x75\x72\x75\40\x62", "\141\56\x64\x61\162\151\x3d\142\56\x69\144\x5f\147\165\162\x75", "\x6c\x65\x66\x74"); goto A_lg6; f7QTv: $smt = $this->master->getSemesterActive(); goto bYTDO; nuJt0: $data["\164\x70\137\x61\x63\x74\x69\166\145"] = $tp; goto zedNM; d8Cui: $data["\x70\x65\156\x67\x75\x6d\x75\x6d\141\156\163"] = $pengumumans; goto VTu8F; VTu8F: $data["\x63\x6f\x6d\155\x65\x6e\164\x73"] = $comments; goto rIQlz; MAu7G: $data["\x6b\145\160\141\144\x61"] = urldecode($kepada); goto U6HR4; VrxA2: $this->load->view("\x6d\145\155\142\145\162\163\x2f\147\x75\162\165\57\x74\x65\155\160\154\x61\x74\x65\x73\x2f\x66\157\x6f\x74\x65\162"); goto p8qon; CrN1Q: RMHau: goto ILAo5; au7kt: goto JUSZl; goto s7UCA; ILAo5: $data["\160\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto YZGnS; s_AIo: $this->load->view("\160\145\156\x67\x75\x6d\x75\155\x61\156\57\144\x61\x74\141"); goto VrxA2; Px2gG: if ($kepada === "\163\145\x6d\x75\141\x5f\147\x75\162\x75") { goto MJYaW; } goto N2m1D; E79zh: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\x65\163\57\x64\x61\163\150\142\x6f\141\x72\x64\57\137\x66\157\x6f\164\x65\x72"); goto jSfG5; R8SNB: $data["\x6b\x65\x6c\x61\163"] = $kelas; goto d8Lkn; DJxva: $this->db->from("\160\157\163\164\x20\x61"); goto MCnd_; YZGnS: $this->load->view("\x5f\x74\145\155\160\154\x61\x74\x65\x73\57\x64\x61\x73\150\142\157\x61\162\144\x2f\x5f\x68\145\x61\144\x65\x72", $data); goto lrxRs; Y_hwF: $data["\x73\x6d\x74\x5f\141\143\x74\x69\x76\145"] = $smt; goto f2xD7; zedNM: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto Y_hwF; N2m1D: if ($kepada === "\163\145\155\x75\x61\137\163\x69\163\x77\141") { goto xWF5g; } goto MAu7G; d4R1r: $comments = []; goto SLdRo; DAPib: $data["\x67\x75\x72\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto hHIgZ; ppH73: $user = $this->ion_auth->user()->row(); goto Z_dcY; U6HR4: goto JUSZl; goto ZACTu; XgbB6: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto r4uf1; bhtVl: $this->db->select("\x61\56\52\x2c\40\142\x2e\x6e\x61\155\x61\137\147\x75\162\165\54\40\142\x2e\146\157\x74\157\x2c\x20\x63\x2e\156\x61\155\141\40\x61\163\x20\x6e\141\155\141\137\163\151\163\167\x61\54\x20\x63\x2e\146\x6f\164\157\x20\x61\x73\x20\x66\157\164\x6f\x5f\163\151\163\167\141\x2c\40\x28\123\x45\114\x45\x43\x54\40\103\117\x55\x4e\124\x28\x70\157\163\164\x5f\162\145\160\x6c\x79\56\x69\x64\137\x72\x65\x70\x6c\171\51\40\106\122\x4f\115\x20\160\157\163\x74\x5f\x72\145\x70\154\x79\40\x57\110\105\122\105\x20\x61\x2e\151\x64\x5f\x63\157\x6d\155\x65\x6e\164\x20\75\x20\x70\x6f\x73\x74\137\162\145\x70\154\171\x2e\x69\x64\x5f\143\x6f\155\155\145\x6e\x74\51\x20\x41\123\40\152\x6d\154"); goto wJEN9; x4Yno: $this->db->join("\x6d\x61\x73\x74\x65\x72\137\163\x69\163\x77\141\x20\143", "\x61\56\144\x61\x72\151\75\143\56\x69\144\x5f\x73\x69\163\167\x61", "\x6c\145\x66\x74"); goto At8xO; jS_Za: $this->db->where("\141\56\x69\144\137\x70\x6f\x73\x74", $id_post); goto JF0CF; r4uf1: $perPage = 5; goto iZF9A; IP3pj: $comment = $this->db->get()->result(); goto jgbdd; iZF9A: $offset = $page * $perPage; goto bhtVl; At8xO: $this->db->order_by("\141\x2e\x74\x61\156\147\x67\x61\x6c", "\x64\145\x73\143"); goto jS_Za; jgbdd: $this->output_json($comment); goto O33nA; VIDzP: $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x67\165\x72\165\x20\142", "\141\x2e\x64\141\162\151\x3d\x62\56\151\144\137\147\x75\162\x75", "\x6c\x65\146\164"); goto x4Yno; wJEN9: $this->db->from("\x70\x6f\x73\164\x5f\x63\x6f\x6d\155\145\156\x74\163\x20\x61"); goto VIDzP; JF0CF: $this->db->limit($perPage, $offset); goto IP3pj; O33nA: } public function getReplies($id_comment, $page) { goto RGIUE; PnK17: $this->output_json($replies); goto Jfyap; S8XBX: $this->db->from("\x70\157\x73\164\137\162\x65\160\x6c\171\x20\x61"); goto ra_nW; buDjK: $this->db->order_by("\141\56\x74\x61\156\x67\147\141\x6c", "\144\x65\163\x63"); goto EkQYm; ra_nW: $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x67\x75\162\x75\40\x62", "\141\x2e\144\x61\x72\x69\75\x62\x2e\x69\144\x5f\147\x75\x72\x75", "\154\145\x66\164"); goto bm4Xe; RGIUE: $perPage = 5; goto sInW1; jftnb: $this->db->select("\x61\x2e\x2a\54\x20\142\56\x6e\141\155\141\x5f\x67\x75\x72\x75\x2c\x20\142\56\x66\x6f\164\x6f\54\x20\x63\x2e\x6e\141\155\141\x20\x61\x73\x20\156\x61\x6d\141\x5f\163\151\163\x77\x61\x2c\x20\x63\x2e\146\x6f\x74\157\40\x61\x73\40\x66\157\164\157\x5f\x73\x69\x73\167\141"); goto S8XBX; bm4Xe: $this->db->join("\155\141\x73\164\x65\162\137\x73\x69\163\x77\141\x20\143", "\141\x2e\x64\x61\162\x69\75\143\56\151\144\137\x73\x69\163\167\141", "\x6c\x65\x66\x74"); goto buDjK; EkQYm: $this->db->where("\x61\x2e\x69\144\137\x63\157\x6d\x6d\x65\156\x74", $id_comment); goto BLf4h; BLf4h: $this->db->limit($perPage, $offset); goto bzxAc; bzxAc: $replies = $this->db->get()->result(); goto PnK17; sInW1: $offset = $page * $perPage; goto jftnb; Jfyap: } public function save() { goto S3fUi; ac031: $this->output_json($insert); goto A6CnU; NZaz6: $data = ["\153\x65\160\x61\144\x61" => serialize($kepada), "\144\x61\x72\151" => $dari, "\x64\x61\162\x69\137\x67\162\157\x75\x70" => $dari == "\x30" ? "\61" : "\62", "\164\145\x78\164" => $this->input->post("\x74\145\170\164")]; goto I7EEd; S3fUi: $kepada = json_decode(json_encode($this->input->post("\x6b\x65\x70\141\x64\x61\133\x5d", true))); goto aPKqA; aPKqA: $dari = $this->input->post("\x64\x61\162\x69"); goto NZaz6; I7EEd: $insert = $this->db->replace("\x70\x6f\163\164", $data); goto ac031; A6CnU: } public function saveKomentar() { goto mrQSk; X3N2a: $this->db->where("\x61\x2e\x69\x64\x5f\143\x6f\155\x6d\x65\x6e\x74", $id); goto L0DL3; H7Kon: $dari_group = 1; goto aEPC_; s1LaT: $id = $this->db->insert_id(); goto n40GE; L0DL3: $comment = $this->db->get()->result(); goto s8ReQ; sV02h: $data = ["\151\x64\x5f\x70\x6f\163\164" => $this->input->post("\151\144\x5f\160\157\163\x74"), "\x64\x61\x72\151" => $dari, "\x64\141\162\x69\137\x67\162\x6f\x75\160" => $dari_group, "\x74\x65\x78\x74" => $this->input->post("\x74\145\x78\x74")]; goto Qq1cd; VACVY: $this->db->join("\155\x61\163\x74\145\162\137\x67\165\x72\165\40\x62", "\141\x2e\x64\x61\x72\x69\75\142\x2e\151\144\137\147\x75\x72\x75", "\x6c\x65\x66\164"); goto pJ1hR; n40GE: $this->db->select("\141\x2e\x2a\x2c\x20\142\56\x6e\x61\155\141\137\x67\165\162\x75\x2c\40\x62\x2e\146\x6f\x74\157\54\x20\x63\x2e\x6e\x61\x6d\x61\x20\141\x73\40\156\x61\155\141\x5f\163\151\x73\x77\141\54\40\143\x2e\146\157\164\157\40\x61\x73\40\146\x6f\x74\x6f\x5f\163\151\x73\167\x61\54\40\50\x53\x45\114\x45\103\124\40\103\117\125\x4e\x54\50\160\157\163\x74\137\162\x65\x70\154\x79\x2e\151\x64\x5f\162\x65\160\x6c\171\51\40\106\x52\117\x4d\40\x70\x6f\x73\x74\137\162\145\x70\154\171\40\x57\110\105\122\x45\40\141\56\x69\x64\137\x63\157\x6d\x6d\x65\x6e\x74\40\75\40\160\157\163\x74\x5f\x72\145\x70\x6c\x79\x2e\151\144\137\143\157\155\x6d\x65\x6e\x74\x29\40\x41\123\40\x6a\155\154"); goto oasAN; oasAN: $this->db->from("\x70\157\163\x74\137\x63\x6f\x6d\x6d\145\x6e\x74\x73\x20\x61"); goto VACVY; IgVp1: J7Onx: goto sV02h; ZPkBn: $dari_group = 2; goto IgVp1; pJ1hR: $this->db->join("\x6d\141\163\164\145\x72\137\x73\151\163\x77\141\40\x63", "\x61\56\144\141\x72\x69\75\x63\x2e\x69\144\x5f\163\151\163\x77\141", "\154\145\146\164"); goto Z0uX4; Z0uX4: $this->db->order_by("\141\56\x74\x61\156\x67\147\141\154", "\x64\x65\x73\143"); goto X3N2a; mrQSk: $dari = "\60"; goto H7Kon; Nqo0N: $smt = $this->master->getSemesterActive(); goto W8K90; Jw6Oj: $tp = $this->master->getTahunActive(); goto Nqo0N; yVzP_: $dari = $guru->id_guru; goto ZPkBn; IaVGM: $user = $this->ion_auth->user()->row(); goto Jw6Oj; aEPC_: if ($this->ion_auth->is_admin()) { goto J7Onx; } goto IaVGM; Qq1cd: $insert = $this->db->replace("\160\157\x73\164\x5f\143\157\x6d\x6d\x65\x6e\x74\163", $data); goto s1LaT; s8ReQ: $this->output_json($comment); goto L4Ez2; W8K90: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto yVzP_; L4Ez2: } public function saveBalasan() { goto qKLvy; Ljy6x: $id = $this->db->insert_id(); goto pvOw4; G1Tgj: if ($this->ion_auth->is_admin()) { goto wlrtr; } goto up9ow; EhAqa: $this->db->where("\x61\56\x69\x64\137\x72\x65\160\154\x79", $id); goto BJ40K; hyytq: $dari_group = 1; goto G1Tgj; pvOw4: $this->db->select("\x61\x2e\x2a\x2c\40\x62\56\x6e\141\x6d\x61\x5f\147\x75\162\x75\54\x20\x62\56\146\157\164\x6f\x2c\40\x63\x2e\x6e\141\155\x61\40\x61\163\x20\156\141\x6d\x61\x5f\163\151\163\x77\x61\54\40\x63\x2e\x66\157\x74\x6f\40\x61\163\x20\x66\x6f\x74\x6f\137\x73\151\163\167\141"); goto XTEP5; XTEP5: $this->db->from("\160\157\163\164\137\162\145\160\154\171\x20\141"); goto gRanr; BJ40K: $replies = $this->db->get()->result(); goto zbkkj; zbkkj: $this->output_json($replies); goto LChXS; L82kx: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto gFwBs; up9ow: $user = $this->ion_auth->user()->row(); goto fx9Ij; gFwBs: $dari = $guru->id_guru; goto rsry0; gRanr: $this->db->join("\x6d\141\163\x74\x65\162\137\x67\165\x72\x75\40\142", "\141\56\144\141\162\x69\75\142\x2e\x69\144\x5f\147\165\162\165", "\x6c\145\146\164"); goto xQ5P1; fx9Ij: $tp = $this->master->getTahunActive(); goto TLoev; VJ40p: $insert = $this->db->replace("\160\x6f\x73\164\137\x72\x65\160\154\x79", $data); goto Ljy6x; qKLvy: $dari = "\x30"; goto hyytq; xQ5P1: $this->db->join("\155\x61\163\164\x65\x72\137\x73\151\x73\167\141\40\x63", "\x61\x2e\x64\141\x72\x69\x3d\x63\x2e\151\x64\137\163\x69\163\x77\x61", "\154\145\x66\164"); goto wJBiN; wJBiN: $this->db->order_by("\141\x2e\x74\x61\156\x67\x67\141\x6c", "\144\145\x73\143"); goto EhAqa; rlhX6: wlrtr: goto CmpQJ; TLoev: $smt = $this->master->getSemesterActive(); goto L82kx; rsry0: $dari_group = 2; goto rlhX6; CmpQJ: $data = ["\x69\144\x5f\x63\157\155\x6d\x65\156\x74" => $this->input->post("\151\x64\x5f\143\157\x6d\155\x65\156\x74"), "\x64\x61\x72\x69" => $dari, "\144\141\162\151\x5f\147\x72\x6f\165\x70" => $dari_group, "\x74\145\x78\x74" => $this->input->post("\x74\x65\170\x74")]; goto VJ40p; LChXS: } public function hapusPost($id_post) { goto CANce; XuSAw: bQbZ9: goto fXsKC; CANce: $this->db->trans_start(); goto CmXtq; LrD0d: Ou8HI: goto kqtJc; CmXtq: $comments = $this->post->getIdComments($id_post); goto eM30v; UHA2b: $this->output_json($deleted); goto tqLHu; JB_f6: $this->db->where("\x69\x64\137\x70\157\163\164", $id_post); goto fF_zL; kqtJc: $this->db->trans_complete(); goto UHA2b; eM30v: foreach ($comments as $comment) { goto JE6tB; JE6tB: $this->db->where("\151\x64\x5f\x63\157\155\x6d\x65\x6e\x74", $comment->id_comment); goto cj2GW; Y4kSF: msJIV: goto tjfiW; cj2GW: $deleted["\x62\x61\x6c\141\163\141\x6e"] = $this->db->delete("\160\x6f\x73\x74\137\x72\x65\160\154\171"); goto Y4kSF; tjfiW: } goto XuSAw; fF_zL: $deleted = $this->db->delete("\x70\157\x73\x74"); goto LrD0d; W6LYE: if (!$this->db->delete("\x70\157\x73\x74\137\x63\157\155\155\x65\156\164\x73")) { goto Ou8HI; } goto JB_f6; fXsKC: $this->db->where("\151\x64\137\x70\x6f\163\164", $id_post); goto W6LYE; tqLHu: } public function hapusKomentar($id_comment) { goto YKn0Q; lGnt3: $this->db->where("\151\x64\137\143\157\155\155\145\156\x74", $id_comment); goto wu2x8; mA_tF: $this->output_json($deleted); goto m3Wx8; wu2x8: $deleted["\153\x6f\155\145\x6e\x74\x61\x72"] = $this->db->delete("\x70\x6f\x73\164\137\x63\157\155\155\x65\x6e\164\163"); goto qy8Ng; hANJ6: $deleted["\142\141\154\141\163\x61\x6e"] = $this->db->delete("\160\157\163\164\137\162\x65\160\x6c\x79"); goto UEOeX; YKn0Q: $this->db->trans_start(); goto lGnt3; UEOeX: $this->db->trans_complete(); goto mA_tF; qy8Ng: $this->db->where("\x69\x64\137\x63\157\x6d\155\145\156\164", $id_comment); goto hANJ6; m3Wx8: } public function hapusBalasan($id_reply) { goto k7fKt; ffc3M: $this->db->where("\151\x64\137\x72\145\160\x6c\x79", $id_reply); goto KWnWq; ArknD: $this->output_json($deleted); goto C1Yly; KWnWq: $deleted["\x62\141\154\141\x73\x61\x6e"] = $this->db->delete("\160\157\163\164\x5f\162\145\160\x6c\171"); goto M1l1k; k7fKt: $this->db->trans_start(); goto ffc3M; M1l1k: $this->db->trans_complete(); goto ArknD; C1Yly: } public function getRunningText() { $data["\x72\x75\156\156\x69\156\x67\x5f\x74\x65\170\x74"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto sCZsQ; sCZsQ: $input = json_decode($this->input->post("\x74\x65\x78\164", true)); goto n7Esm; R5rnl: foreach ($input as $d) { goto sEu14; F5AHf: DD04W: goto LqhAP; sEu14: $data = ["\x69\x64\x5f\x74\x65\x78\x74" => $d->id_text, "\x74\x65\x78\164" => $d->text]; goto zpbf0; zpbf0: $update = $this->db->replace("\x72\x75\156\x6e\151\156\x67\x5f\x74\x65\170\164", $data); goto bKbau; bKbau: array_push($updates, $update); goto F5AHf; LqhAP: } goto MWOA4; a8mSN: $data["\163\x74\x61\164\165\x73"] = $updates; goto xq0pS; xq0pS: $this->output_json($data); goto xpXoy; MWOA4: FAXUE: goto a8mSN; n7Esm: $updates = []; goto R5rnl; xpXoy: } public function hapusRunningText($id) { goto si4HW; FTCCQ: $deleted = $this->db->delete("\162\x75\x6e\156\x69\156\x67\137\164\x65\x78\164"); goto jtew0; si4HW: $this->db->where("\151\144\137\x74\x65\x78\164", $id); goto FTCCQ; jtew0: $this->output_json($deleted); goto PEdjP; PEdjP: } }
