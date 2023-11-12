<?php

  function displayrecords()
  {
	  $query=$this->db->query("select * from bankdetail");
	  return $query->result();
?>