<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\105\120\101\x54\110") or exit("\x4e\x6f\40\144\x69\162\145\x63\164\40\163\143\162\151\160\164\40\x61\x63\x63\x65\x73\x73\40\141\154\x6c\157\167\145\144"); class Settings_model extends CI_Model { public function not_admin() { goto AcNL3; iGMIW: $this->db->from("\165\x73\145\x72\x73\x20\141"); goto UvIyb; usiFR: return $this->db->get()->result(); goto xK01g; UvIyb: $this->db->join("\165\163\145\x72\163\137\x67\162\x6f\165\160\x73\x20\142", "\141\x2e\151\x64\x3d\x62\x2e\x75\x73\x65\x72\137\x69\x64"); goto XoL1t; XoL1t: $this->db->where_not_in("\142\56\x67\162\x6f\x75\x70\137\151\x64", ["\x31"]); goto usiFR; AcNL3: $this->db->select("\x61\x2e\x69\x64"); goto iGMIW; xK01g: } public function truncate($table) { goto Dvx3J; Mtv8W: Izbvu: goto vDqE6; Dvx3J: $this->load->helper("\146\x69\x6c\x65"); goto umrvj; umrvj: $this->db->query("\x53\x45\124\x20\106\117\x52\x45\x49\107\116\137\x4b\x45\131\137\x43\x48\105\103\113\123\40\x3d\x20\x30"); goto IhcL7; t15Cd: foreach ($users as $user) { $this->db->delete("\165\163\145\162\163", array("\151\144" => $user->id)); wx47o: } goto Mtv8W; X5hb6: delete_files("\x2e\x2f\165\160\x6c\x6f\141\144\x73\x2f\x62\141\x6e\153\x5f\x73\x6f\x61\x6c\x2f"); goto tSIGy; vDqE6: return; goto gEoYm; phnbK: CI3gs: goto U1VsP; tSIGy: $users = $this->not_admin(); goto t15Cd; IhcL7: foreach ($table as $tb) { $this->db->truncate($tb); IRWJX: } goto phnbK; U1VsP: $this->db->query("\x53\105\x54\x20\106\117\x52\105\111\x47\116\137\x4b\105\x59\137\103\x48\105\x43\x4b\x53\40\x3d\40\x31"); goto X5hb6; gEoYm: } public function getSetting() { return $this->db->get("\x73\x65\164\x74\x69\x6e\x67")->row(); } function toJSON($table) { $query = $this->db->get($table); return json_encode($query->result(), JSON_PRETTY_PRINT); } function rowSize($table) { $query = $this->db->get($table); return $query->num_rows(); } }
