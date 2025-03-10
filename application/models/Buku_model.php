<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Buku_model extends CI_Model
{

	public function search($q)
	{
		$this->qq = explode(' ', $q);
	}
	public function kategori($q)
	{
		if ($q == "a.id_buku") {
			$concat = " " . $q . "=" . ((int)addslashes(trim(implode(" ", $this->qq))));
		} else {
			$concat = "";
			foreach ($this->qq as $zx) {
				$concat .= ' ' . ($q) . ' LIKE \'%' . addslashes(strtolower(trim($zx))) . '%\' OR';
			}
		}

		$this->wheree = ' WHERE' . rtrim($concat, 'OR');
	}

	public function get_buku_by_rak($rak_number)
	{
		$this->db->select('tb_buku.*, tb_rak.nama_rak');
		$this->db->from('tb_buku');
		$this->db->join('tb_rak', 'tb_buku.no_rak = tb_rak.no_rak'); // join dengan tabel rak
		if ($rak_number != '') {
			$this->db->where('tb_rak.no_rak', $rak_number);
		}
		$query = $this->db->get();
		return $query->result_array();
	}
	//query pengambilan semua data
	public function getAllData1()
	{
		$this->db->query('SELECT a.id_buku,a.ISBN,a.judul,b.kategori,c.nama_penerbit,d.nama_pengarang,e.nama_rak,a.thn_terbit,a.stok,a.ket FROM tb_buku AS a 
		INNER JOIN tb_kategori AS b ON a.id_kategori=b.id_kategori 
		INNER JOIN tb_penerbit AS c ON a.id_penerbit=c.id_penerbit 
		INNER JOIN tb_pengarang AS d ON a.id_pengarang=d.id_pengarang 
		INNER JOIN tb_rak AS e ON a.no_rak=e.no_rak' . (isset($this->wheree) ? $this->wheree : '') . ' ORDER BY a.id_buku DESC');
		// if ($rak_number != '') {
		// 	$this->db->where('tb_rak.no_rak', $rak_number);
		// }
		$query = $this->db->get();
		return $query->result_array();
	}


	//query pengambilan semua data
	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function get_filtered_books($category_id = null, $rack_id = null)
	{
		if ($category_id) {
			$this->db->where('tb_kategori.id_kategori', $category_id);
		}
		if ($rack_id) {
			$this->db->where('tb_rak.no_rak', $rack_id);
		}
		$this->db->select('tb_buku.*, tb_kategori.kategori, tb_rak.nama_rak, tb_penerbit.nama_penerbit, tb_pengarang.nama_pengarang');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_buku.id_kategori', 'left');
		$this->db->join('tb_rak', 'tb_rak.no_rak = tb_buku.no_rak', 'left');
		$this->db->join('tb_penerbit', 'tb_penerbit.id_penerbit = tb_buku.id_penerbit', 'left');
		$this->db->join('tb_pengarang', 'tb_pengarang.id_pengarang = tb_buku.id_pengarang', 'left');
		return $this->db->get('tb_buku')->result_array();
	}

	//menghapus data dalam tabel
	function deleteData($table, $data)
	{
		$this->db->delete($table, $data);
	}
	function deletedetData($table, $col, $id_det_buku)
	{
		$this->db->where($col, $id_det_buku);
		$aks = $this->db->delete($table);
		return $aks;
	}

	//memasukan data - insert
	function insertData($table, $data)
	{
		$this->db->insert($table, $data);
	}

	//query untuk mengambil detail by id
	function get_detail($table, $id_table, $id)
	{
		$query = $this->db->get_where($table, array($id_table => $id));
		return $query;
	}
	function get_detail12($table, $col1, $col2, $id, $tgl)
	{
		$query = $this->db->get_where($table, array(
			$col1 => $id,
			$col2 => $tgl
		));
		return $query;
	}
	function get_detail1($table, $id_table, $id)
	{
		$this->db->where($id_table, $id);
		$query = $this->db->get($table);
		$isi = $query->row_array();
		return $isi;
	}
	function get_detail123($table, $id_table, $id)
	{
		$this->db->where($id_table, $id);
		$p = $this->db->get($table);
		return $p;
	}

	function updateData1($table, $data, $field, $id)
	{
		$this->db->where($field, $id);
		$this->db->update($table, $data);
	}

	function updateData($table, $data, $field, $key)
	{
		$this->db->where($key, $field);
		$this->db->update($table, $data);
	}


	public function get_stok($id_buku)
	{
		$query = $this->db->where('id_buku', $id_buku)
			->limit(1)
			->get('tb_buku');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}
	function Delete($table, $field, $id)
	{
		$this->db->where($field, $id);
		$this->db->delete($table);
	}

	//*last edited 10 April 2017
	//batch insert
	function insertData_batch($table, $data)
	{
		$this->db->insert_batch($table, $data);
	}

	public function countRow($status, $id_buku)
	{
		$query = $this->db->query("SELECT status FROM tb_detail_buku WHERE status='" . $status . "' AND id_buku='" . $id_buku . "'");
		echo $query->num_rows();
	}

	public function countRow_pinjam($status, $id_pinjam)
	{
		$query = $this->db->query("SELECT status FROM tb_detail_pinjam WHERE status='" . $status . "' AND id_pinjam='" . $id_pinjam . "'");
		$query->num_rows();
	}

	public function update_status($table, $data, $field1, $key1, $field2, $key2)
	{
		$this->db->where($field1, $key1);
		$this->db->where($field2, $key2);
		$this->db->update($table, $data);
	}

	public function update_status2($no_buku, $id_buku, $data)
	{
		$this->db->where('no_buku', $no_buku);
		$this->db->where('id_buku', $id_buku);
		$this->db->update('tb_detail_buku', $data);
	}

	function get_detail2($table, $id_table, $id)
	{
		$this->db->where($id_table, $id);
		$this->db->where('status', '1');
		$query = $this->db->get($table);
		return $query;
	}

	public function get_total($id_pinjam)
	{
		$query = $this->db->where('id_pinjam', $id_pinjam)
			->limit(1)
			->get('tb_pinjam');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}
	/*update tgl 5/5 2017 */
	/*keperluan chart */
	public function get_jml_peminjaman($first_date, $second_date)
	{
		$this->db->select('id_pinjam, COUNT(id_pinjam) as total');
		$this->db->where('tgl_pinjam >=', $first_date);
		$this->db->where('tgl_pinjam <=', $second_date);
		$query = $this->db->get('tb_pinjam');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}

	public function buku_pinjam()
	{
		$query = $this->db->query("SELECT tb_buku.id_buku, tb_buku.judul, count(tb_detail_pinjam.id_buku) AS total FROM `tb_buku` JOIN tb_detail_pinjam on tb_buku.id_buku=tb_detail_pinjam.id_buku GROUP BY tb_detail_pinjam.id_buku ORDER BY total DESC LIMIT 10");
		return $query->result_array();
	}


	public function kategori_pinjam()
	{
		$query = $this->db->query("SELECT tb_kategori.id_kategori, tb_kategori.kategori, count(tb_detail_pinjam.id_buku) AS total FROM `tb_kategori` JOIN tb_buku on tb_buku.id_kategori=tb_kategori.id_kategori JOIN tb_detail_pinjam on tb_detail_pinjam.id_buku=tb_buku.id_buku GROUP BY tb_kategori.id_kategori ORDER BY total DESC LIMIT 10");
		return $query->result_array();
	}

	public function kelas_pinjam()
	{
		$query = $this->db->query("SELECT tb_kelas.id_kelas, tb_kelas.kelas, count(tb_pinjam.id_anggota) AS total FROM `tb_kelas` JOIN tb_anggota on tb_kelas.id_kelas=tb_anggota.id_kelas JOIN tb_pinjam on tb_pinjam.id_anggota=tb_anggota.id_anggota GROUP BY tb_kelas.id_kelas ORDER BY total DESC LIMIT 10");
		return $query->result_array();
	}
}

/* End of file Perpus_model.php */
/* Location: ./application/models/Perpus_model.php */