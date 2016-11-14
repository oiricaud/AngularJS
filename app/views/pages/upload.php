<body>

    <div class="whitebox">
        <p class="single-title"><?php echo $title ?> </p>
        <script>Upload("docs");</script>
        <!-- Graphs -->
        <div id="<?php echo $type_of_graph?>"></div>

 <?php
 $tables = $this->db->list_tables("statsdata");
 if ($this->db->table_exists("statsdata")) {
     $total=$this->db->query("SELECT * FROM `water_data`.`statsdata` WHERE `COL 1` = 'Peak_day'");
     $query = $this->db->query($total);
      print_r($query->results());
 }
 else{
     echo "Error, table does not exist";
 }

?>
    </div>
</body>

